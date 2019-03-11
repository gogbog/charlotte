<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset(config('administration.file_prefix') . 'css/add.css') }}">
    <link rel="stylesheet"  data-relative-urls="false" href="{{ asset(config('administration.file_prefix') . 'css/style-dark.css') }}">
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
<body class="fix-header fix-sidebar">
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
                <a class="logo" href="index.html"><b>
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
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li class="dropdown"> <a class="dropdown-toggle waves-effect" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu mailbox">
                        <li>
                            <div class="drop-title">You have 4 new messages</div>
                        </li>
                        <li>
                            <div class="message-center">
                                <a href="#">
                                    <div class="user-img"> <img src="{{ asset('img/users/pawandeep.jpg') }}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="text-center"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown"> <a class="dropdown-toggle waves-effect" data-toggle="dropdown" href="#"><i class="icon-note"></i>
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
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
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ asset('img/users/varun.jpg') }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b> </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="ti-settings"></i> {{ trans('administration::admin.edit_profile') }}</a></li>
                        <li><a href="#"><i class="fa fa-power-off"></i> {{ trans('administration::admin.logout') }}</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <li class="right-side-toggle"> <a class="waves-effect waves-light" href="#"><i class="ti-settings"></i></a></li>
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
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <ul class="nav" id="side-menu">
                <li class="hidden-sm hidden-md hidden-lg" style="width: 100vw;"></li>
                <li class="nav-small-cap m-t-10">{{ trans('administration::admin.menu') }}</li>
                <li><a href="" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Dashboard</span></a></li>
                <li><a href="#" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Other</span></a></li>
                <li><a href="#" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">dasds</span></a></li>
                <li><a href="#" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">asdasdasd</span></a></li>
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
                                <div class="checkbox checkbox-danger">
                                    <input id="checkbox1" type="checkbox" class="fxhdr">
                                    <label for="checkbox1"> Fix Header </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-danger">
                                    <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                                    <label for="checkbox2"> Fix Sidebar </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-danger">
                                    <input id="checkbox4" type="checkbox" class="open-close">
                                    <label for="checkbox4"> Toggle Sidebar </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-danger">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6"> Light Mode </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.right-sidebar -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Pixel Admin brought to you by wrappixel.com </footer>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<script src="{{ asset(config('administration.file_prefix') . 'js/jquery.min.js') }}"></script>
<script src="{{ asset(config('administration.file_prefix') . 'js/app.js') }}"></script>
@yield('js')
</body>
</html>