@extends('administration::layouts.administration-master')
@section('content')

    <!-- row -->
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">NEW CLIENTS</h3>
                <ul class="list-inline two-part">
                    <li><i class="icon-people text-info"></i></li>
                    <li class="text-right"><span class="counter">23</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">NEW Projects</h3>
                <ul class="list-inline two-part">
                    <li><i class="icon-folder text-purple"></i></li>
                    <li class="text-right"><span class="counter">169</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Open Projects</h3>
                <ul class="list-inline two-part">
                    <li><i class="icon-folder-alt text-danger"></i></li>
                    <li class="text-right"><span class="counter">311</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">NEW Invoices</h3>
                <ul class="list-inline two-part">
                    <li><i class="ti-wallet text-success"></i></li>
                    <li class="text-right"><span class="counter">117</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Daily Sales</h3>
                <div class="text-right"><span class="text-muted">Todays Income</span>
                    <h1><sup><i class="ti-arrow-up text-success"></i></sup> $12,000</h1></div>
                <span class="text-success">20%</span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50"
                         aria-valuemin="0" aria-valuemax="100" style="width:20%;"><span
                                class="sr-only">20% Complete</span></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Weekly Sales</h3>
                <div class="text-right"><span class="text-muted">Weekly Income</span>
                    <h1><sup><i class="ti-arrow-down text-danger"></i></sup> $5,000</h1></div>
                <span class="text-danger">30%</span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50"
                         aria-valuemin="0" aria-valuemax="100" style="width:30%;"><span
                                class="sr-only">230% Complete</span></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Monthly Sales</h3>
                <div class="text-right"><span class="text-muted">Monthly Income</span>
                    <h1><sup><i class="ti-arrow-up text-info"></i></sup> $10,000</h1></div>
                <span class="text-info">60%</span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                         aria-valuemax="100" style="width:60%;"><span class="sr-only">20% Complete</span></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Yearly Sales</h3>
                <div class="text-right"><span class="text-muted">Yearly Income</span>
                    <h1><sup><i class="ti-arrow-up text-inverse"></i></sup> $9,000</h1></div>
                <span class="text-inverse">80%</span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50"
                         aria-valuemin="0" aria-valuemax="100" style="width:80%;"><span
                                class="sr-only">230% Complete</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <!-- .col -->
                <div class="col-md-6 col-sm-12">
                    <div class="white-box text-center bg-success">
                        <h1 class="text-white counter">165</h1>
                        <p class="text-white">New items</p>
                    </div>
                </div>
                <!-- /.col -->
                <!-- .col -->
                <div class="col-md-6 col-sm-12">
                    <div class="white-box text-center bg-inverse">
                        <h1 class="text-white counter">2065</h1>
                        <p class="text-white">Feeds</p>
                    </div>
                </div>
                <!-- /.col -->
                <!-- .col -->
                <div class="col-md-6 col-sm-12">
                    <div class="white-box text-center bg-info">
                        <h1 class="counter text-white">465</h1>
                        <p class="text-white">Reviews</p>
                    </div>
                </div>
                <!-- /.col -->
                <!-- .col -->
                <div class="col-md-6 col-sm-12">
                    <div class="white-box text-center bg-danger">
                        <h1 class="text-white counter">6555</h1>
                        <p class="text-white">Customers</p>
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-3 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Visit</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">8659</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Page Views</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash2"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">7469</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Unique Visitor</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash3"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span
                                class="counter text-info">6011</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Bounce Rate</h3>
                <ul class="list-inline two-part">
                    <li>
                        <div id="sparklinedash4"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-down text-danger"></i> <span
                                class="text-danger">18%</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.row -->


    {{--FORMS--}}

    {{--data-toggle="validator"--}}

    {{--FOR BOOTSTRAP VALIDATION ADD data-toggle="validator" TO <form></form>--}}


    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                  data-toggle="tab">en</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">bg</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                   data-toggle="tab">Messages</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab"
                                   data-toggle="tab">Settings</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content m-t-0">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Default Basic Forms</h3>
                        <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>
                        <form class="form-horizontal" data-toggle="validator">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="inputEmail" class="control-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email"
                                           data-error="Bruh, that email address is invalid" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Helping text</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Helping text"> <span
                                            class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="inputFile" class="control-label">File upload</label>
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput">
                                            <span class="fileinput-filename"></span>
                                        </div>
                                        <span class="input-group-addon btn btn-default btn-file">
                                    <span class="fileinput-new">
                                        Select file
                                    </span>
                                    <span class="fileinput-exists">
                                        Change
                                    </span>
                                        <input type="file" id="inputFile" name="file"
                                               data-error="Bruh, that file is invalid">
                                    </span>
                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                           data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Default Text <span
                                            class="help"> e.g. "George deo"</span></label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12" for="example-email">Email <span class="help"> e.g. "example@gmail.com"</span></label>
                                <div class="col-md-12">
                                    <input type="email" id="example-email" name="example-email" class="form-control"
                                           placeholder="Email"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="password" class="form-control" value="password"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Input Select</label>
                                <div class="col-sm-12">
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>

                        </form>
                        <h3 class="box-title">Default Summernote</h3>
                        <div class="summernote">

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Default Summernote</h3>
                        <div class="summernote">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="messages">dsvsbfbd</div>
        <div role="tabpanel" class="tab-pane" id="settings">...</div>
    </div>




@endsection

@section('js')

    <script>

        $(".counter").counterUp({
            delay: 100,
            time: 1000
        });
        var sparklineLogin = function () {
            $('#sparklinedash').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
                type: 'bar',
                height: '30',
                barWidth: '4',
                resize: true,
                barSpacing: '5',
                barColor: '#00c292'
            });
            $('#sparklinedash2').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
                type: 'bar',
                height: '30',
                barWidth: '4',
                resize: true,
                barSpacing: '5',
                barColor: '#ab8ce4'
            });
            $('#sparklinedash3').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
                type: 'bar',
                height: '30',
                barWidth: '4',
                resize: true,
                barSpacing: '5',
                barColor: '#03a9f3'
            });
            $('#sparklinedash4').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
                type: 'bar',
                height: '30',
                barWidth: '4',
                resize: true,
                barSpacing: '5',
                barColor: '#fb9678'
            });
        };
        var sparkResize;

        $(window).resize(function (e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineLogin, 1);
        });
        sparklineLogin();
    </script>
@endsection