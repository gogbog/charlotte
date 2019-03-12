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
                <div class="text-right"> <span class="text-muted">Todays Income</span>
                    <h1><sup><i class="ti-arrow-up text-success"></i></sup> $12,000</h1> </div> <span class="text-success">20%</span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Weekly Sales</h3>
                <div class="text-right"> <span class="text-muted">Weekly Income</span>
                    <h1><sup><i class="ti-arrow-down text-danger"></i></sup> $5,000</h1> </div> <span class="text-danger">30%</span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Monthly Sales</h3>
                <div class="text-right"> <span class="text-muted">Monthly Income</span>
                    <h1><sup><i class="ti-arrow-up text-info"></i></sup> $10,000</h1> </div> <span class="text-info">60%</span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Yearly Sales</h3>
                <div class="text-right"> <span class="text-muted">Yearly Income</span>
                    <h1><sup><i class="ti-arrow-up text-inverse"></i></sup> $9,000</h1> </div> <span class="text-inverse">80%</span>
                <div class="progress m-b-0">
                    <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">230% Complete</span> </div>
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
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">8659</span></li>
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
                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">7469</span></li>
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
                    <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">6011</span></li>
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
                    <li class="text-right"><i class="ti-arrow-down text-danger"></i> <span class="text-danger">18%</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Bootstrap Select boxes</h3>
                <p class="text-muted m-b-10">Just add bootstrap-select-min.js and same css & add class <code>.selectpicker</code></p>
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="m-t-30 m-b-10">Select box</h5>
                        <select class="selectpicker" data-style="form-control">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <h5 class="m-t-30 m-b-10">Select boxes with optgroups</h5>
                        <select class="selectpicker" data-style="form-control">
                            <optgroup label="Picnic">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </optgroup>
                            <optgroup label="Camping">
                                <option>Tent</option>
                                <option>Flashlight</option>
                                <option>Toilet Paper</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <h5 class="m-t-30">Multiple select boxes</h5>
                        <select class="selectpicker" multiple data-style="form-control">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Switchery</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="m-b-30">
                            <label class="switch-light switch-ios" style="width: 60px" onclick="">
                                <input type="checkbox">
                                <strong>
                                    Wireless
                                </strong>
                                <span>
                                  <a></a>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                        <h3 class="box-title m-b-0">Checkbox Square</h3>
                        <div class="checkbox checkbox-danger">
                            <input id="checkbox6" type="checkbox" checked>
                            <label for="checkbox6"> Danger </label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                        <h3 class="box-title m-b-0">Checkbox Circle</h3>
                        <div class="checkbox checkbox-danger checkbox-circle">
                            <input id="checkbox-12" type="checkbox" checked>
                            <label for="checkbox-12"> Danger </label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                        <h3 class="box-title m-b-0">Radio Buttons</h3>
                        <div class="radio radio-danger">
                            <input type="radio" name="radio" id="radio6" value="option6">
                            <label for="radio6"> Danger </label>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                        <h3 class="box-title m-b-0">Radio Clickable</h3>
                        <div class="radio radio-danger">
                            <input type="radio" name="radio6" id="radio16" value="option6">
                            <label for="radio16"> Danger </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Default Basic Forms</h3>
                <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>
                <form class="form-horizontal" data-toggle="validator">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="inputEmail" class="control-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Helping text</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="Helping text"> <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span> </div>
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
                                        <input type="file" id="inputFile" name="file" data-error="Bruh, that file is invalid">
                                    </span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Default Text <span class="help"> e.g. "George deo"</span></label>
                        <div class="col-md-12">
                            <input type="text" class="form-control"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-email">Email <span class="help"> e.g. "example@gmail.com"</span></label>
                        <div class="col-md-12">
                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control" value="password"> </div>
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
            </div>
        </div>

        <div class="col-sm-12">
            <div class="white-box">

                <h5 class="box-title m-t-30">Default Datedpicker</h5>
                <p class="text-muted m-b-20">just add class <code>.mydatepicker</code> to create it.</p>
                <div class="input-group">
                    <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                    <span class="input-group-addon">
                            <i class="icon-calender"></i>
                        </span>
                </div>


                <h5 class="box-title m-t-30">Date Range picker</h5>
                <p class="text-muted m-b-20">just add id <code>#date-range</code> to create it.</p>
                <div class="input-daterange input-group" id="date-range">
                    <input type="text" class="form-control" name="start" />
                    <span class="input-group-addon bg-info b-0 text-white">to</span>
                    <input type="text" class="form-control" name="end" />
                </div>


                <h3 class="box-title m-t-30"><b>Clock Picker</b></h3>
                <p class="text-muted m-b-20">Use <code>.clockpicker</code> to create it.</p>

                <label class="m-t-20">Default Clock Picker</label>
                <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30"> <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> </span>
                </div>

                <h5 class="box-title m-t-30">Simple mode</h5>
                <p class="text-muted m-b-20">just add class <code>.colorpicker</code> to create it.</p>
                <input type="text" class="colorpicker form-control" value="#7ab2fa" />

            </div>
        </div>
    </div>

    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Default Summernote</h3>
                <div class="summernote">

                </div>
            </div>
        </div>
    </div>

    <!-- /.row -->

@endsection

@section('js')
    <script src="{{ asset(config('administration.file_prefix') . 'js/editor.js') }}"></script>
    <script>
        document.querySelector('.switch-ios input').addEventListener('click',function () {
            console.log(document.querySelector('.switch-ios input').checked);
        });

        $(".counter").counterUp({
            delay: 100,
            time: 1200
        });

        $('.clockpicker').clockpicker({
            donetext: 'Done',
        }).find('input').change(function() {
            console.log(this.value);
        });

        $('#check-minutes').click(function(e) {
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show').clockpicker('toggleView', 'minutes');
        });

        $(".colorpicker").asColorPicker();

        $('.mydatepicker').datepicker();

        $('#date-range').datepicker({
            toggleActive: true
        });

        // $('.editor').wysihtml5();

        var sparklineLogin = function() {
            $('#sparklinedash').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
                type: 'bar',
                height: '30',
                barWidth: '4',
                resize: true,
                barSpacing: '5',
                barColor: '#00c292'
            });
            $('#sparklinedash2').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
                type: 'bar',
                height: '30',
                barWidth: '4',
                resize: true,
                barSpacing: '5',
                barColor: '#ab8ce4'
            });
            $('#sparklinedash3').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
                type: 'bar',
                height: '30',
                barWidth: '4',
                resize: true,
                barSpacing: '5',
                barColor: '#03a9f3'
            });
            $('#sparklinedash4').sparkline([ 0, 5, 6, 10, 9, 12, 4, 9], {
                type: 'bar',
                height: '30',
                barWidth: '4',
                resize: true,
                barSpacing: '5',
                barColor: '#fb9678'
            });


        };
        var sparkResize;

        $(window).resize(function(e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineLogin, 500);
        });
        sparklineLogin();

        $(document).ready(function() {
            $('.summernote').summernote({
                height: 350, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
        });
    </script>
@endsection