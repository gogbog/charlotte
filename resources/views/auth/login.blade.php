<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">--}}
    <title>Pixel Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap</title>
    <link rel="stylesheet" href="{{ asset('vector/administration/css/add.css') }}">
    <link rel="stylesheet" href="{{ asset('vector/administration/css/style-dark.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('css/style-light.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('vector/administration/css/default-dark.css') }}">
{{--<link rel="stylesheet" href="{{ asset('css/default.css') }}">--}}
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('vector/administration/js/html5shiv.js') }}"></script>
    <script src="{{ asset('vector/administration/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
    <div class="login-box">
        <div class="white-box">
            <form class="form-horizontal form-material" id="loginform" method="post" action="{{ route('administration.login') }}">
                {{ csrf_field() }}
                <h3 class="box-title m-b-20">Sign In</h3>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" name="email" type="email" required="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" name="password" type="password" required="" placeholder="Password">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="{{ asset('vector/administration/js/jquery.min.js') }}"></script>
<script src="{{ asset('vector/administration/js/app.js') }}"></script>
</body>
</html>