@extends('layouts.user')
@section('content')    	
<div class="row">
  <div class="col-md-8">
    <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
    Security - Google 2FA authentication
    </div>
    <div class="panel-body table-responsive" style="text-align: left;">
    <p>1. Add an additional layer of security to your account by enabling  Google 2FA.</p>
    <p>2. Download the 'google 2FA app from play store/ App store to activate.</p>
  </div>
</div>

@if(Auth::user()->tauth == '1')
<div class="panel panel-inverse">
   <div class="panel-heading">
      <h4 class="panel-title">Two Factor Authenticator</h4>
    </div>
  <div class="panel-body text-center">
		<div class="form-group">
			<label style="text-transform: capitalize;">use google authenticator to scan the QR code below or use the below code</label><hr/>
<a class="btn btn-success btn-md" href="" target="_blank">DOWNLOAD APP</a>

			<div class="input-group">
			<input type="text" value="{{$prevcode}}" class="form-control input-lg" id="code" readonly>
				<span class="input-group-addon btn btn-success" id="copybtn">Copy</span>
			</div>	
		</div>
		<div class="form-group">
             <img src="{{$prevqr}}">
        </div>
		<button type="button" class="btn btn-block btn-lg btn-danger" data-toggle="modal" data-target="#disableModal">Disable Two Factor Authenticator</button>	
  </div>
</div>
@else
<div class="panel panel-inverse">
   <div class="panel-heading">
    <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a;">?</button></span>
      <h4 class="panel-title">Two Factor Authenticator</h4>
    </div>
<div class="panel-body text-center">
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Two Factor Authentication </h4>
        </div>
        <div class="modal-body">
          <p>You can use google Authenticator App to setup two factor authentication for your account. This increases the security for your account. We strongly recommend you to enable this.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
		<div class="form-group">
			<label style="text-transform: capitalize;">use google authenticator to scan the QR code below or use the below code</label><hr/>
<a class="btn btn-success btn-md" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en" target="_blank">DOWNLOAD APP</a>
<hr/>
			<div class="input-group">
			<input type="text" name="key" value="{{$secret}}" class="form-control input-lg" id="code" readonly>
				<span class="input-group-addon btn btn-success" id="copybtn">Copy</span>
			</div>	
		</div>
		<div class="form-group">
             <img src="{{$qrCodeUrl}}">
        </div>
		<button type="button" class="btn btn-block btn-lg btn-primary" data-toggle="modal" data-target="#enableModal" style="background-color: #008a8a">Enable Two Factor Authenticator</button>	
</div>
</div>
@endif
</div>
  </div>
</div>  
<!--Copy Data -->
<script type="text/javascript">
  document.getElementById("copybtn").onclick = function() 
  {
    document.getElementById('code').select();
    document.execCommand('copy');
  }
</script>


<!--Enable Modal -->
<div id="enableModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Verify Your OTP</h4>
      </div>
      <div class="modal-body">
        <form action="{{route('go2fa.create')}}" method="POST">
              {{csrf_field()}}
              <div class="form-group">
                <input type="hidden" name="key" value="{{$secret}}">
                <input type="text" class="form-control" name="code" placeholder="Enter Google Authenticator Code"> 
              </div>
               <div class="form-group">
                <button type="submit" class="btn btn-lg btn-success btn-block">Verify</button>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!--Disable Modal -->
<div id="disableModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Verify Your OTP to Disable</h4>
      </div>
      <div class="modal-body">
           <form action="{{route('disable.2fa')}}" method="POST">
              {{csrf_field()}}
              <div class="form-group">
                <input type="text" class="form-control" name="code" placeholder="Enter Google Authenticator Code"> 
              </div>
               <div class="form-group">
                <button type="submit" class="btn btn-lg btn-success btn-block">Verify</button>
              </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

@endsection