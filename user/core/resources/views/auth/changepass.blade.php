@extends('layouts.user')
@section('content')
<div class="row">
     <div class="col-md-8">
      <div class="panel panel-inverse" data-sortable-id="index-1">
    <div class="panel-heading">
    Change password
    </div>
    <div class="panel-body table-responsive" style="text-align: left;">
    <p>1. You will need to know your old password for changing  password.</p>
    <p>2. Please use a strong alphanumeric with atleast one capital letter as password.</p>
    <p>3. Do not share your password anywhere.</p>
  </div>
</div>
      <div class="panel panel-inverse text-center" >
        <div class="panel-heading">
           <span style="float:right">  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"  style="width: 25px; height: 25px; background-color: #008a8a; border:#008a8a;">?</button></span>
          <h4 class="panel-title">Change Password</h4>
        </div>
        <div class="panel-body">
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Password </h4>
        </div>
        <div class="modal-body">
          <p>You can change your account password from here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default green" style="background-color: #008a8a; color: white;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
          <form method="POST" action="{{ route('changep') }}">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-12">
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="password" class="cols-sm-2">Old Password</label>
                  <input type="password" class="form-control input-sz" name="passwordold" id="passwordold" required />
                  @if ($errors->has('passwordold'))
                  <span class="help-block">
                    <strong>{{ $errors->first('passwordold') }}</strong>
                  </span>
                  @endif
            </div>

            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="password" class="cols-sm-2">New Password</label>              
                  <input type="password" class="form-control input-sz" name="password" id="password" required />
                  @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
            </div>
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
               <label for="password-confirm" class="cols-sm-2">Confirm Password</label>    
                <input id="password-confirm" type="password" class="form-control input-sz" name="password_confirmation" required>
                     @if ($errors->has('password'))
                     <span class="help-block">
                       <strong>{{ $errors->first('password') }}</strong>
                   </span>
                   @endif
           </div>
              <div class="form-group ">
                <button type="submit" class="btn btn-lg btn-block btn-success">Change Password</button>
              </div>
          </div>

        </div>
      </form>
        </div>
      </div>
      
     </div>   

</div>

@endsection
