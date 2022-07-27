<!DOCTYPE html>
<head>
    <style>
    .error{
        color: red;
       
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
        <div class="container">
            <div class="section-inner">
                <div class="sign-main login-page">
                    <div class="title">
                        <h3><b>LOG IN</b></h3>
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
                        <div class="input-group {{ $errors->has('wallet') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-bitcoin"></i></span>
                            @if(isset($walletid))
                            <input type="text" class="form-control" name="wallet" value="{{$walletid}}" >     
                            @else
                            <input type="text" value="{{ old('wallet') }}" class="form-control" name="wallet" placeholder="Wallet ID">
                            @endif

                            @if($errors->has('wallet'))
                                <span class="help-block">
                                    <strong style="padding: 10px;">{{ $errors->first('wallet') }}</strong>
                                </span>
                            @endif
                        </div>
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

                        <input type="submit" value="register" class="btn btn-default">
                    </form>
                    </div>
                   <div class="text-center">
                    <span class="reset bottom"> <a href="{{ route('password.request') }}">RESET PASSWORD</a> | <a href="{{ route('login') }}">LOGIN NOW</a></span></div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="{{ URL::asset('assets/assets/front/js/bootstrap.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{ URL::asset('assets/assets/front/js/script.js')}}"></script>

</body>
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