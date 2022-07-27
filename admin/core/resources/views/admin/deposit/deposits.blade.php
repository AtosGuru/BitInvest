@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Deposit List</span>
                </div>
                <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px;background-color: #008a8a; border:#008a8a; ">?</button></span>
            </div>

            <p>1. You can check the past approved deposits from here.</p>
            <p>2. You can check the yet to be approved deposits from <a href="{{route('deposits.requests')}}">here</a>.</p>
           <div class="table-responsive">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Deposit Logs</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-md-2"></div>
            <div class="col-md-12  col-md-8" style="text-align: left;">
          <p><b>Here you can see the deposits made by the users in the system</b> </p>
          
          </div>
          <div class="col-md-12 col-md-4"></div>
          </div>
        </div>
        <div class="row">
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
        </div>
      </div>
      
    </div>
  </div>
  <table class="table">
                <thead style="background-color: black;">
                    <tr>
                      	<th style="color: white;">
                            Deposit ID 
                        </th>
                        <th style="color: white;">
                            User
                        </th>
                        <th style="color: white;">
                            Amount
                        </th>
                        <th style="color: white;">
                            Processed on
                        </th>
                  	 </tr>
                </thead>
                <tbody>
		 	@foreach($deposits as $dep)
                     <tr>
                     	<td>
                        	{{$dep->trxid}}  	
                        </td>
                        <td>
                          <a href="{{route('user.single', $dep->user_id)}}">
                             {{$dep->user['name']}}
                          </a>
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
        </div>
			
				</div><!-- row -->
			</div>
		</div>
	</div>		
</div>
@endsection