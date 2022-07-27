@extends('admin.layout.master')

@section('content')
<style>
    .btn{
  width: 100px;
}
</style>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-list font-dark"></i>
                    <span class="caption-subject bold uppercase">User Lendings</span>
                </div>
                <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px;background-color: #008a8a; border:#008a8a; ">?</button></span>
            </div>
            <p>1. All the the active and completed lending are displayed here.</p>
            <p>2. Yo can setup the lending package from <a href="{{url('admin/package')}}"> here</a>.</p>
            <div class="portlet-body">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Lending Logs</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-md-2"></div>
            <div class="col-md-12  col-md-8" style="text-align: left;">
          <p><b>Here you can see the lendings made by the users in the system</b> </p>
          
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

                 <div class="table-responsive">
  <table class="table">
                <thead style="background-color: black;">
                    <tr>
                        <th style="color: white;">
                            User
                        </th>
                        <th style="color: white;">
                             Amount
                        </th>
                        <th style="color: white;">
                            Returned
                        </th>
                        <th style="color: white;">
                            Status
                        </th>
                  	 </tr>
                </thead>
                <tbody>
		 	@foreach($invests as $inv)
                     <tr>
                     	<td>
                        	{{$inv->user['username']}}
                        </td>
                        <td>
                            {{$inv->amount}} {{$gnl->cursym}}    
                        </td>
                        <td>
                            {{$inv->returned}} Times    
                        </td> 
                        <td>
                        <span class="btn {{$inv->status == 1 ? 'btn-success' : 'btn-success'}}">{{$inv->status == 1 ? 'Active' : 'Completed'}}</span>
                        </td>
                     </tr>
 			@endforeach 
 			</tbody>
           </table></div>
        </div>
			
			</div><!-- row -->
			</div>
		</div>
	</div>		
</div>
@endsection