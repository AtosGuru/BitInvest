@extends('layouts.user')

@section('content')

<div class="row">
<div class="col-md-12">

  <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
      Withdraw Log
    </div>
    <div class="panel-body table-responsive">
      <p>1. From withdraw Logs you can keep track of all your previous withdrawals.</p>
<p>2. You can request for withdrawal from <a href="{{route('user.withdraw')}}">here</a></p>
    </div>
  </div>
  <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
      <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a; ">?</button></span>
      <h4 class="panel-title">{{$gnl->cur}} Withdraw Log</h4>
    </div>
    <div class="panel-body table-responsive">
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bitcoin Withdraw Log </h4>
        </div>
        <div class="modal-body">
          <p>Keep track of all your past Bitcoin withdrawals here with Date.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
     <table class="table table-striped">
      <thead>
                    <tr>
                        <th>
                            Withdraw ID 
                        </th>
                        <th>
                            Amount
                        </th>
                        <th>
                            Processed on
                        </th>
                     </tr>
                </thead>
                <tbody>
            @foreach($withds as $dep)
                     <tr>
                        <td>
                            {{$dep->wdid}}     
                        </td>
                        <td>
                             {{$dep->amount}} {{$gnl->cursym}}
                        </td>
                        <td>
                            {{$dep->updated_at}}
                        </td>
                      </tr>
            @endforeach 
            <tbody>
     </table>
     <?php echo $withds->render(); ?>
   </div>
 </div>
</div>   
</div>


@endsection
