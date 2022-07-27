@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Withdraw Logs</span>
                </div>
                <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px;background-color: #008a8a; border:#008a8a; ">?</button></span>
            </div>
            <p>1. From withdraw Logs you can keep track of all your previous withdrawals approved in the site.</p>
            <p>2. You can approve request for withdrawal from <a href="{{route('withdraw.requests')}}">here</a>.</p>
  <div class="table-responsive">
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Withdraw Logs</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-md-2"></div>
            <div class="col-md-12  col-md-8" style="text-align: left;">
          <p><b>Here you can see the past withdrawals made by the users in the system</b> </p>
          
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
                            Withdraw ID 
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
		 	@foreach($withdrws as $with)
                     <tr>
                     	<td>
                        	{{$with->wdid}}  	
                        </td>
                        <td>
                          <a href="{{route('user.single', $with->user['id'])}}">
                             {{$with->user['username']}}
                          </a>
                        </td> 
                        <td>
                             {{$with->amount}} {{$gnl->cur}}
                        </td>
                        <td>
                        	{{$with->updated_at}}
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