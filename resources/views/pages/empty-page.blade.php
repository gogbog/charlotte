@extends('administration::layouts.administration-master')
@section('content')

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
                            <script>
                                document.querySelector('.switch-ios input').addEventListener('click',function () {
                                    console.log(document.querySelector('.switch-ios input').checked);
                                });
                            </script>
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
    </div>
    <!-- .row -->
    <!-- /.row -->

@endsection

@section('js')

@endsection