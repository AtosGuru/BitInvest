@extends('admin.layout.master')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h2>Email Template Settings</h2>
		<hr/>
	</div>
</div>
     <p>1. You can customize the email/sms templates from this page.</p>
	<p>2. You can configure any email/sms gateways with the system to start sending.</p>
<div class="row">
	<div class="col-md-12">
		<div class="portlet box green">
			<div class="portlet-title" style="background-color: #1a2229">
				<div class="caption" >
					<i class="fa fa-bookmark"></i>Short Code</div>
                    <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; margin-top: 8px; background-color: #008a8a; border:#008a8a; ">?</button></span>
				</div>

				<div class="portlet-body">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Email and SMS Template</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-md-2"></div>
            <div class="col-md-12  col-md-8" style="text-align: left;">
          <p><b>Here you can customize the Email and SMS template of the system</b> </p>
          
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
					<div class="table-scrollable">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th> # </th>
									<th> CODE </th>
									<th> DESCRIPTION </th>
								</tr>
							</thead>
							<tbody>


								<tr>
									<td> 1 </td>
									<td> <pre>&#123;&#123;message&#125;&#125;</pre> </td>
									<td> Details Text From Script</td>
								</tr>

								<tr>
									<td> 2 </td>
									<td> <pre>&#123;&#123;name&#125;&#125;</pre> </td>
									<td> Users Name. Will Pull From Database and Use in EMAIL text</td>
								</tr>



							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-envelope font-blue-sharp"></i>
						<span class="caption-subject font-blue-sharp bold uppercase">Email and SMS Template</span>
					</div>
				</div>
				<div class="portlet-body form">
					<form role="form" method="POST" action="{{route('template.update')}}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="form-body">
							<div class="form-group">
								<label>Email Sent Form</label>
								<input type="email" name="esender" class="form-control input-lg" value="{{$temp->esender}}">
							</div>
							<div class="form-group">
								<label>Email Message</label>
								<textarea class="form-control" name="emessage" rows="10">
									{{$temp->emessage}}
								</textarea>
							</div>
							<div class="form-group">
								<label>SMS Message</label>
								<textarea class="form-control" name="smsapi" rows="6">
									{{$temp->smsapi}}
								</textarea>
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn green btn-block btn-lg">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	@endsection