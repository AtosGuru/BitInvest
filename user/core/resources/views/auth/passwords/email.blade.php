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
                        <h3><b>Reset Password</b></h3>
                    </div>

                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="main-form">

                  <form class="form-horizontal" method="POST" action="{{ route('forgot.pass') }}">
                        {{ csrf_field() }}

                    <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                             <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                             <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
                           @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <input type="submit" value=" Send Password Reset Link" class="btn btn-default">
                    </form>
                    </div>
                   <div class="text-center">
                    <span class="reset bottom"> <a href="{{ route('admin.register') }}">RESET PASSWORD</a> | <a href="{{ route('login') }}">LOGIN NOW</a></span></div>
                </div>
                </div>
                </div>
            <!-- </div>
        </div> -->
    </section>

    <!-- Bootstrap JS -->
    <script src="{{ URL::asset('assets/assets/front/js/bootstrap.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{ URL::asset('assets/assets/front/js/script.js')}}"></script>

</body>

</html>