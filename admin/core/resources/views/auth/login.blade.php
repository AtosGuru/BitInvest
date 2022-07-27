<!DOCTYPE html>
<head>
    <style>
    body{
        position: fixed; 
   overflow-y: scroll;
   top: 0; right: 0; bottom: 0; left: 0;
            background-color: white;
    }.error{
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
                 <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                        <div class="input-group {{ $errors->has('username') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" value="{{ old('username') }}" class="form-control" name="username" placeholder="Username">
                             @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <input type="submit" value="login" class="btn btn-default">
                    </form>
                    </div>
                    <span class="reset bottom"><i class="fa fa-question-circle"></i> Forgot your password? <a href="{{ route('password.request') }}">Reset now</a></span>
                    <span class="signup bottom"><i class="fa fa-question-circle"></i> Don't Have an Account? <a href="{{ route('register') }}">Sign up</a></span>
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