@extends('layouts.user')
@section('content')
<div class="row">
<div class="col-md-8">
<div class="panel panel-inverse">
	<div class="panel-heading">
		 <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a;">?</button></span>
		<h3 class="panel-title">Confirm Deposit {{$gnl->cur}}</h3>
	</div>
	<div class="panel-body">
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Lorem ipsum </h4>
        </div>
        <div class="modal-body">
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
		<div class="row">
		<div  class="col-md-8 col-md-offset-2 text-center">
			<ul class="list-group">
				<li class="list-group-item list-group-item-info"><h4>Your Current Balance: {{Auth::user()->balance}} {{$gnl->cursym}}</h4></li>
                <li class="list-group-item list-group-item-success"><h4>Deposit amount: <b>{{$bcoin}}</b> {{$gnl->cursym}}</h4></li>
                 <li class="list-group-item list-group-item-info"><h4>Your Balance After Deposit: {{Auth::user()->balance+$bcoin}} {{$gnl->cursym}}</h4></li>
             
            </ul>
            <form  action="{{route('user.deposit')}}" method="post">

              {{ csrf_field() }}
			<p>{!! $form !!}</p>
		
		</div>
		</div>
		

	</div>
</div>
</div>
</div>

@endsection