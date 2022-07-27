@extends('admin.layout.master')

@section('content')
<div class="col-md-4">
    
   
                    <form class="login-form" role="form" method="POST" action="{{ url('/admin/register') }}">
                        {{ csrf_field() }}
                         <h3 class="font-dark"><i class="fa fa-user"> Register New Admin</i></h3>
<hr/>
                <p>1. You can Add a partner Admin account from this page.</p>
                <p>2. Note -The newly created admin will have all the access as you have.</p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Full Name</label>
                   <input id="name"  class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="name" value="{{ old('name') }}" autofocus>
                </div>
                 <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">E-Mail Address</label>
                   <input id="email"  class="form-control placeholder-no-fix" type="text" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" autofocus>
                </div>
                 <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                   <input id="username"  class="form-control placeholder-no-fix" type="text" placeholder="Username" name="username" value="{{ old('username') }}" autofocus>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                   <input id="password" placeholder="Password"  class="form-control placeholder-no-fix" type="password"  name="password">
                </div>
                 <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Confirm Password</label>
                   <input id="password-confirm" placeholder="Confirm Password"  class="form-control placeholder-no-fix" type="password"  name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                    @endif
                </div>


                <div class="form-actions">
                    <button type="submit" id="register-submit-btn" class="btn btn-success btn-lg btn-block btn-success uppercase pull-right">Register</button>
                </div>


                    </form>
                   </div>  
                   <br><br>
                   <div class="col-md-8">
                   <div class="table-responsive">
  <table class="table">
      <tr>
        <td colspan="5"><h4>New Admins</h4></td>
      </tr>
        <tr>
          <th>Name</th>
          <th>Username</th>
          <th>Email</th>
          <th align="right">Action</th>
        </tr>
       
        @foreach($user as $users)
        <tr>
         
        <td>{{$users->name}}</td>
           <td>{{$users->username}}</td>
          <td>{{$users->email}}</td>
         <td>
           <td align="left">
            <a href="{{route('admin.lock', $users->id)}}"> <i class="fa fa-lock fa-1x" style="color:green"></i></a>
                           &nbsp;&nbsp;&nbsp;&nbsp;  
                           
                            <a href="{{route('admin.delete', $users->id)}}">
                            <i class="fa fa-trash fa-1x" style="color:red"></i></a> 
                          
                        </td>
         </td>
      </tr>
      @endforeach
      <?php 
      if(count($ban)!=0)
        {
          ?>
      <tr>
        <td colspan="5"><h4>Locked Admins</h4></td>
      </tr>
    <?php }?>

      @foreach($ban as $users)
        <tr>
         
        <td>{{$users->name}}</td>
           <td>{{$users->username}}</td>
          <td>{{$users->email}}</td>
         <td>
           <td><a href="{{route('admin.unlock', $users->id)}}"> <i class="fa fa-unlock fa-1x" style="color:green"></i></a>
                                 &nbsp;&nbsp;&nbsp;&nbsp;  
                           
                            <a href="{{route('admin.delete', $users->id)}}">
                            <i class="fa fa-trash fa-1x" style="color:orange"></i></a>

                          
                        </td>
         </td>
      </tr>
      @endforeach
      </table></div>
           </div>
@endsection
