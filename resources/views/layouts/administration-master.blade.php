<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset(config('administration.file_prefix') . 'css/add.css') }}">
    <link rel="stylesheet" href="{{ asset(config('administration.file_prefix') . 'css/style-dark.css') }}">
    {{--<link rel="stylesheet" href="{{ asset(config('administration.file_prefix') . 'css/style-light.css') }}">--}}
    <link rel="stylesheet" href="{{ asset(config('administration.file_prefix') . 'css/default-dark.css') }}">
{{--<link rel="stylesheet" href="{{ asset(config('administration.file_prefix') . 'css/default.css') }}">--}}
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset(config('administration.file_prefix') . 'js/html5shiv.js') }}"></script>
    <script src="{{ asset(config('administration.file_prefix') . 'js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body class="fix-header fix-sidebar" onload="startTime()">
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- Top Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <a class="navbar-toggle hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="ti-menu"></i>
            </a>
            <div class="top-left-part">
                <a class="logo" href=""><b>
                        <!--This is dark logo icon-->
                        <img src="{{ asset(config('administration.file_prefix') . 'img/pixeladmin-logo.png') }}" alt="home" class="dark-logo" />
                        <!--This is light logo icon-->
                        <img src="{{ asset(config('administration.file_prefix') . 'img/pixeladmin-logo-dark.png') }}" alt="home" class="light-logo" />
                    </b>
                    <span class="hidden-xs">
                        <!--This is dark logo text-->
                        <img src="{{ asset(config('administration.file_prefix') . 'img/pixeladmin-text.png') }}" alt="home" class="dark-logo" />
                        <!--This is light logo text-->
                        <img src="{{ asset(config('administration.file_prefix') . 'img/pixeladmin-text-dark.png') }}" alt="home" class="light-logo" />
                    </span>
                </a>
            </div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li>
                    <a class="open-close hidden-xs">
                        <i class="icon-arrow-left-circle ti-menu"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right m-r-15">
                <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-bell"></i>
                        <div class="notify">
                            {{--<span class="heartbit"></span>--}}
                            <span class="point"></span>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks m-t-30">
                        <li>
                            <a href="#">
                                <div>
                                    <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ asset(config('administration.file_prefix') . 'img/users/varun.jpg') }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b> </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="ti-settings"></i> {{ trans('administration::admin.edit_profile') }}</a></li>
                        <li><a href="#"><i class="fa fa-power-off"></i> {{ trans('administration::admin.logout') }}</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <li class="right-side-toggle"> <a><i class="ti-settings"></i></a></li>
                <!-- /.dropdown -->
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>

    <!-- End Top Navigation -->
    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar" style="overflow-y: auto; overflow-x: hidden">
            <ul class="nav" id="side-menu">
                <li class="hidden-sm hidden-md hidden-lg" style="width: 100vw;"></li>
                <li class="nav-small-cap m-t-10">{{ trans('administration::admin.menu') }}</li>
                <li><a href="{{ route('administration.index') }}" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Dashboard</span></a></li>
                <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="F" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Multi-Level Dropdown<span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                        <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                        <li> <a href="javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                <li> <a href="#">Third Level Item</a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-small-cap">--- Support</li>
                <li><a href="#" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Documentation</span></a></li>
            </ul>
        </div>
    </div>
    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Starter Page</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Starter Page</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>

        @yield('content')

        <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul>
                            <li><b>Layout Options</b></li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <p class="m-b-0 m-t-15">Dark</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <label class="switch-light switch-ios" style="width: 60px; margin: 0" onclick="">
                                            <input type="checkbox">
                                            <span>
                                  <a></a>
                                </span>
                                        </label>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <p class="m-b-0 m-t-15">Light</p>
                                    </div>
                                </div>
                            </li>
                            <li class="text-center">
                                <h1 id="curr-time"></h1>
                            </li>
                            <li class="text-center">
                                <div id="datepicker-inline"></div>
                            </li>
                            <li class="text-center">
                                <a href="#" class="">Calendar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.right-sidebar -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-9">
                    <span>2019 &copy; <a href="https://github.com/gogbog/administration" style="color:#f75b36;">Charlotte Administration</a></span>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 text-right">
                    <span>0.0.1</span>
                </div>
            </div>
        </footer>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<script src="{{ asset(config('administration.file_prefix') . 'js/jquery.min.js') }}"></script>
<script src="{{ asset(config('administration.file_prefix') . 'js/app.js') }}"></script>
<script src="{{ asset(config('administration.file_prefix') . 'js/charts.js') }}"></script>

<script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('curr-time').innerHTML =
            h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
    $('#datepicker-inline').datepicker({
        todayHighlight: true
    });
</script>
@yield('js')
</body>
</html>