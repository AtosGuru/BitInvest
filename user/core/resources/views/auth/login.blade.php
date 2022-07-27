<!DOCTYPE html>
<head>
    <style>
   
.error{
        color: red;
       
    }


    .container {
    text-align: center;
}
.container ul {
    display: inline-block;
    margin: 10px 0;
    padding: 2px;
}
.container li {
    display: inline-block;
}
.container li a {
    display: inline-block;
    background: #eff0f2;
    color: #2ac46c;
    font-weight: bold;
    padding: 5px;
    text-decoration: none;
}
</style>
    <title>BITCOIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="{{ URL::asset('assets/assets/front/js/jquery-1.12.4.min.js')}}"></script>
    <link href="{{ URL::asset('assets/assets/images/logo/icon.png')}}" rel="shortcut icon" type="image/x-icon">
     <!-- 'Open Sans' Google Fonts (Primary) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- 'FontAwesome' Icon -->
    <link href="{{ URL::asset('assets/assets/front/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{ URL::asset('assets/assets/front/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ URL::asset('assets/assets/front/css/style.css')}}" rel="stylesheet">
    <!-- Color Controller -->
  
    <link href="{{ URL::asset('assets/assets\front\css\colord347.css')}}" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="color-1" id="login-page">
<section id="login">
<span class="signup bottom"><center><a href="http://18.188.45.2" class="btn-default btn-large nav nav-pills"><i class="fa fa-arrow-left
"> </i> &nbsp;Back</a></center>
</span>
        <div class="container text-center">
    <ul class="nav nav-pills">
    <li id="login_tab" class="active"><a data-toggle="pill"  href="#home">Login</a></li>
    <li id="register_tab" class=""><a data-toggle="pill" href="#menu1"  >Register</a></li>
    
  </ul>
        
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
       <div class="sign-main login-page">

                    <div class="title">

                        <h3><b>LOG IN</b></h3>
                    </div>
                    <div class="main-form">
                 <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                        <div class="input-group {{ $errors->has('username') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            @if(old('username'))
                            <input type="text" value="{{ old('username') }}" class="form-control" name="usernamse" placeholder="Username">
                            @else
                             <input type="text" value="demo" class="form-control" name="username" placeholder="Username">
                             @endif
                             @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            @if(old('password'))
                            <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Password">
                            @else
                             <input type="password" name="password" value="12345678" class="form-control" placeholder="Password"> 
                             @endif

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <input type="submit" value="login" class="btn btn-default">
                    </form>
                    </div>
                    <!--<span class="reset bottom"><i class="fa fa-question-circle"></i> Forgot your password? <a href="{{ route('password.request') }}">Reset now</a></span> -->
                    <span class="signup bottom"><i class="fa fa-question-circle"></i> Don't Have an Account? <a data-toggle="pill" href="#menu1" class="register_tog" >Sign up</a></span>
                    <br>
 
                    
                </div>
  </div>

  <div id="menu1" class="tab-pane fade ">
      <div class="sign-main login-page">
                    <div class="title">
                        <h3><b>REGISTER</b></h3>
                    </div>
                    <div class="main-form">
                  <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
 @if(isset($reference))
<input type="hidden" name="refid" value="{{$reference}}">
@endif




                    <div class="input-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" value="{{ old('name') }}" class="form-control" name="name" placeholder="Name">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong style="padding: 10px;"> {{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group {{ $errors->has('username') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" value="{{ old('username') }}" class="form-control" name="username" placeholder="Username">
                             @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong style="padding: 10px;">{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" value="{{ old('email') }}" class="form-control" name="email" placeholder="Email">
                             @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="padding: 10px;">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="input-group {{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" value="{{ old('mobile') }}" class="form-control" name="mobile" placeholder="Mobile">
                             @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong style="padding: 10px;">{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Make sure you give the right wallet address!">
                        <div class="input-group {{ $errors->has('wallet') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-bitcoin"></i></span>
                            @if(isset($walletid))
                            <input type="text" class="form-control" name="wallet" value="{{$walletid}}" >     
                            @else
                            <input type="text" value="{{ old('wallet') }}" class="form-control" name="wallet" placeholder="Your bitcoin  wallet address">
                            @endif

                            @if($errors->has('wallet'))
                                <span class="help-block">
                                    <strong style="padding: 10px;">{{ $errors->first('wallet') }}</strong>
                                </span>
                            @endif
                        </div>
                        </a>

                       

                        <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong style="padding: 10px;">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                        </div>

                         <div class="input-group {{ $errors->has('user_type') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <select   class="form-control" name="user_type" style="width:90%" placeholder="User Type" required>
                                <option value="">Register as?</option>
                                <option value="1">Lender</option>
                                <option value="2">Borrower</option>
                              </select> 
                              @if ($errors->has('user_type'))
                                <span class="help-block">
                                    <strong style="padding: 10px;"> {{ $errors->first('user_type') }}</strong>
                                </span>
                            @endif

                       
                        </div>
                           <label> <input type="checkbox" name="terms_accept" required id="terms_accept" class="control-label" checked> &nbsp;Accept <a href="{{$gnl->terms_url}}">Terms and Conditions</a></b></label>
                        <input type="submit" value="register" class="btn btn-default">
                    </form>
                    </div>
                   <div class="text-center">
                    <!-- <span class="reset bottom"> <a href="{{ route('password.request') }}">RESET PASSWORD</a> | <a href="{{ route('login') }}">LOGIN NOW</a></span> -->
                    <span class="reset bottom"><a  data-toggle="pill" href="#home" class="login_tog" >LOGIN NOW</a></span>
                  </div>
                </div>
            </div>
            <br>
            <b>
 
</div>

            <div class="section-inner">


               
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="{{ URL::asset('assets/assets/front/js/bootstrap.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{ URL::asset('assets/assets/front/js/script.js')}}"></script>

</body>


<script>

$('.login_tog').click(function(){

$('#login_tab').addClass('active');
$('#register_tab').removeClass('active');


});
$('.register_tog').click(function(){

$('#login_tab').removeClass('active');
$('#register_tab').addClass('active');

});


    window.onsubmit = function(){

if ($('#terms_accept').is(':checked')) {
   
    }else{
        alert("Please Accept Terms and Conditions");
        return false;
    }
}



$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>


<script type="text/javascript">


  $("form").submit(function(){
   
    if($('#username').val()==""){
        $('#username').focus();
        $('#error_username').html(" please fill user name");
        return false;
}else{
    $('#error_username').html('');
}
if($('#password').val()==""){
        $('#password').focus();
        $('#error_password').html(" please fill user name");
        return false;
}else{
    $('#error_password').html("");
}



    
});
</script>
</html>