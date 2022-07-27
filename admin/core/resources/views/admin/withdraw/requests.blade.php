@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase">Withdraw Requests</span>
                </div>
                 <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px;background-color: #008a8a; border:#008a8a; ">?</button></span>
            </div>
            <p>1. Manage all Withdraw requests in this page.</p>
            <p>2. You can check the past approved withdraw requests from <a href="{{route('withdraw')}}">here</a>.</p>
              <div class="table-responsive">
  <<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">WITHDRAW REQUESTS</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-md-2"></div>
            <div class="col-md-12  col-md-8" style="text-align: left;">
          <p><b>Here you can see the withdraw requests made by the users in the system</b> </p>
          
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
                            User
                        </th>
                        <th style="color: white;">
                             Amount
                        </th>
                        <th style="color: white;">
                            Transaction ID
                        </th>
                        <th style="color: white;">
                        	Action
                        </th>
                  	 </tr>
                </thead>
                <tbody>
		 	@foreach($withdrws as $with)
                     <tr>
                        <td>
                            {{$with->user->username}}
                        </td> 
                        <td>
                             {{$with->amount}} {{$gnl->cursym}}
                        </td>
                        <td>
                        	{{$with->wdid}}
                        </td>
                        <td>
                        	<a href="" class="btn btn-outline btn-circle btn-sm green" data-toggle="modal" data-target="#Modal{{$with->id}}">
                             <i class="fa fa-check"></i> Approve </a>
                             <a href="{{ route('withdraw.destroy', $with)}}" data-toggle="confirmation"  data-title="Are You Sure?" data-content="Cancel This Withdraw Request?" class="btn btn-outline btn-circle btn-sm red" >
                             <i class="fa fa-times"></i> Cancel </a>
                        </td>

                     </tr>
                    
                     <!--Approve Modal -->
					  <div class="modal fade" id="Modal{{$with->id}}" role="dialog">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
							      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal">&times;</button>
								          <h4 class="modal-title">Are You Sure?</h4>
								        </div>
								        
								        	<div class="modal-body">
								        		<form role="form" method="POST" action="{{route('withdraw.approve', $with->id)}}" enctype="multipart/form-data">
								        	{{ csrf_field() }}
											{{method_field('put')}}
												<h4>Approve <b>{{$with->wdid}}</b> Withdraw Request?</h4>
												 <button type="submit" class="btn btn-lg btn-success btn-block">Approve</button>
                           </form>
												 </div>
                                                 <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
												
											
											</div>
							      </div>
						    </div>
					  </div>
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