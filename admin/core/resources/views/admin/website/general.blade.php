@extends('admin.layout.master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-red-sunglo">
					<i class="icon-settings font-red-sunglo"></i>
					<span class="caption-subject bold uppercase">General Settings</span>
				</div>
				<span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a; ">?</button></span>
			</div>
			<p>1. You can configure basic settings of site from this page.</p>
			<p>2. You can change the logo and favicon from <a href="{{route('logo')}}"">here</a>.</p>

			<div class="portlet-body form">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">General Settings</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-md-2"></div>
            <div class="col-md-12  col-md-8" style="text-align: left;">
          <p><b>Here you can control the basic general settings of the system</b> </p>
          
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
				<form role="form" method="POST" action="{{route('general.update')}}">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-md-4">
							<h4>Website Title</h4>
							<input type="text" class="form-control input-lg" value="{{$general->title}}" name="title" >
						</div>
						<div class="col-md-4">
							<h4>Website Sub-Title</h4>
							<input type="text" class="form-control input-lg" value="{{$general->subtitle}}" name="subtitle" >
						</div>
						<div class="col-md-3">
							<h4>Start Date</h4>
                            <div class="input-group">
                            	<input type="text" class="form-control form-control-inline input-lg date-picker" readonly name="startdate" data-date-format="yyyy-mm-dd" value="{{$general->startdate}}">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                           
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h4>Terms and Conditions page URL</h4>
							<input type="text" class="form-control input-lg" value="{{$general->terms_url}}" name="terms_url" >
						</div>
					</div>
					<div class="row">
						<hr/>
						<div class="col-md-4">
							<h4>BASE COLOR CODE</h4>
							<input type="color" class="form-control input-lg"  value="#{{$general->color}}" name="color"  >
						</div>

						<div class="col-md-4">
							<h4>BASE CURRENCY CODE</h4>
							<input type="text" class="form-control input-lg" value="{{$general->cur}}" name="cur" readonly>
						</div>
						<div class="col-md-4">
							<h4>BASE CURRENCY SYMBOL</h4>
							<input type="text" class="form-control input-lg" value="{{$general->cursym}}" name="cursym" readonly>
						</div>
					</div>

					<hr/>
					<div class="row">
						<hr/>
						<div class="col-md-4">
							<h4>Registration</h4>
							<input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" type="checkbox" value="1" name="reg" {{ $general->reg == "1" ? 'checked' : '' }}>
						</div>

						<div class="col-md-4">
							<h4>EMAIL VERIFICATION</h4>
							<input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" type="checkbox" value="1" name="emailver" {{ $general->emailver == "0" ? 'checked' : '' }}>
						</div>
						<div class="col-md-4">
							<h4>SMS VERIFICATION</h4>
							<input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" type="checkbox" value="1" name="smsver"  {{ $general->smsver == "0" ? 'checked' : '' }}>
						</div>
					</div>
					<div class="row">
						<hr/>
						<div class="col-md-4">
							<h4>DECIMAL AFTER POINT</h4>
							<input type="number" value="{{$general->decimal}}" name="decimal" class="form-control input-md" >
						</div>

						<div class="col-md-4">
							<h4>EMAIL NOTIFICATION</h4>
							<input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" type="checkbox" value="1" name="emailnotf"  {{ $general->emailnotf == "1" ? 'checked' : '' }}>
						</div>
						<div class="col-md-4">
							<h4>SMS NOTIFICATION</h4>
							<input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-width="100%" type="checkbox" value="1" name="smsnotf" {{ $general->smsnotf == "1" ? 'checked' : '' }}>
						</div>
                </div>
					<div class="row">
						<hr/>
						<div class="col-md-6 col-md-offset-3">
							<button class="btn green btn-block btn-lg">Update</button>
						</div>
					</div>
			</form>
		</div>
	</div>
</div>
</div>
@endsection
