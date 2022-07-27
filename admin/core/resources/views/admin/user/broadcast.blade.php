@extends('admin.layout.master')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-envelope font-dark"></i>
                                        <span class="caption-subject font-dark bold uppercase">Broadcast Email</span>
                                         
                                    </div><span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" style="background-color: #008a8a; color: white; border:  #008a8a; ">?</button></span>
                                </div>
                                
                                <p>1. Send a broadcast email to all users in the site from here.</p>
                                <p>2. You cannot mail a single user from here.</p>
                                <div class="portlet-body form">
                                 

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
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; border:#008a8a; " data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

                                    <form role="form" method="POST" action="{{route('broadcast.email')}}" enctype="multipart/form-data">
                                    	{{ csrf_field() }}
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <input type="text" name="subject" class="form-control input-lg" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Email Message</label>
                                                <textarea class="form-control" name="emailMessage" rows="10">
                                                	
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="submit-btn btn btn-primary btn-lg btn-block login-button" style="background-color: #008a8a;">Broadcast Email</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
		</div>
	</div>
	
	@endsection