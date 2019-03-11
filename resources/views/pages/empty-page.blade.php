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
    <div class="col-sm-6 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Switchery</h3>
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="box-title">Basic</h4>
                    <p class="text-muted  font-13"> add the following line <code> class="js-switch" data-color="#13dafe"</code> to your input element. </p>
                    <div class="switchery-demo m-b-30">
                        <input type="checkbox" checked class="js-switch" data-color="#13dafe" />
                        <input type="checkbox" checked class="js-switch" data-color="#f96262" />
                        <input type="checkbox" checked class="js-switch" data-color="#99d683" />
                        <input type="checkbox" checked class="js-switch" data-color="#ffca4a" />
                        <input type="checkbox" checked class="js-switch" data-color="#6164c1" />
                        <input type="checkbox" checked class="js-switch" data-color="#3d3b3b" /> </div>
                </div>
                <div class="col-lg-12">
                    <h4 class="box-title">Sizes</h4>
                    <p class="text-muted font-13"> You can add <code> data-size="small",data-size="large"</code> to your input element for different sizes. </p>
                    <div class="m-b-30">
                        <input type="checkbox" checked class="js-switch" data-color="#f96262" data-size="small" />
                        <input type="checkbox" checked class="js-switch" data-color="#99d683" />
                        <input type="checkbox" checked class="js-switch" data-color="#ffca4a" data-size="large" /> </div>
                </div>
                <div class="col-lg-12">
                    <h4 class="box-title">Secondary color</h4>
                    <p class="text-muted font-13"> You can apply <code> data-color="@color" data-secondary-color="@color"</code> to your input element to both color. </p>
                    <div class="m-b-30">
                        <input type="checkbox" class="js-switch" data-color="#99d683" data-secondary-color="#f96262" />
                        <input type="checkbox" class="js-switch" data-color="#13dafe" data-secondary-color="#6164c1" /> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Input Tags</h3>
            <p class="text-muted">Add <code>data-role="tagsinput"</code> to your input field & its automatically change it to a tags input.</p>
            <div class="tags-default">
                <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags" /> </div>
            <h3 class="box-title m-t-30 m-b-0">Select Tags</h3>
            <p class="text-muted">You can also use <code>select multiple</code> to your input field.</p>
            <select multiple data-role="tagsinput">
                <option value="Amsterdam">Amsterdam</option>
                <option value="Washington">Washington</option>
                <option value="Sydney">Sydney</option>
            </select>
            <h3 class="box-title m-t-30 m-b-0">Input Group Tags</h3>
            <p class="text-muted">You can also use group tag <code>data-role="tagsinput"</code> to your input field.</p>
            <div class="input-group m-b-30"> <span class="input-group-addon">Tags</span>
                <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"> </div>
            <div class="input-group">
                <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"> <span class="input-group-addon">Tags</span> </div>
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
                    <p class="text-muted font-13 m-b-30"> Bootstrap brand colors </p>
                    <div class="checkbox">
                        <input id="checkbox0" type="checkbox">
                        <label for="checkbox0"> Default </label>
                    </div>
                    <div class="checkbox checkbox-custom">
                        <input id="checkbox11" type="checkbox" checked>
                        <label for="checkbox11"> Custom </label>
                    </div>
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox2" type="checkbox" checked>
                        <label for="checkbox2"> Primary </label>
                    </div>
                    <div class="checkbox checkbox-success">
                        <input id="checkbox3" type="checkbox">
                        <label for="checkbox3"> Success </label>
                    </div>
                    <div class="checkbox checkbox-info">
                        <input id="checkbox4" type="checkbox">
                        <label for="checkbox4"> Info </label>
                    </div>
                    <div class="checkbox checkbox-warning">
                        <input id="checkbox5" type="checkbox" checked>
                        <label for="checkbox5"> Warning </label>
                    </div>
                    <div class="checkbox checkbox-danger">
                        <input id="checkbox6" type="checkbox" checked>
                        <label for="checkbox6"> Danger </label>
                    </div>
                    <div class="checkbox checkbox-purple">
                        <input id="checkbox6a" type="checkbox">
                        <label for="checkbox6a"> Purple </label>
                    </div>
                    <div class="checkbox checkbox-inverse">
                        <input id="checkbox6c" type="checkbox">
                        <label for="checkbox6c"> Inverse </label>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <h3 class="box-title m-b-0">Checkbox Circle</h3>
                    <p class="text-muted font-13 m-b-30"> Add simple <code>checkbox-circle</code> class </p>
                    <div class="checkbox checkbox-circle">
                        <input id="checkbox7" type="checkbox">
                        <label for="checkbox7"> Simply Rounded </label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox8" type="checkbox" checked>
                        <label for="checkbox8"> Info </label>
                    </div>
                    <div class="checkbox checkbox-primary checkbox-circle">
                        <input id="checkbox-9" type="checkbox">
                        <label for="checkbox-9"> Primary </label>
                    </div>
                    <div class="checkbox checkbox-success checkbox-circle">
                        <input id="checkbox-10" type="checkbox" checked>
                        <label for="checkbox-10"> Success </label>
                    </div>
                    <div class="checkbox checkbox-warning checkbox-circle">
                        <input id="checkbox-11" type="checkbox">
                        <label for="checkbox-11"> Warning </label>
                    </div>
                    <div class="checkbox checkbox-danger checkbox-circle">
                        <input id="checkbox-12" type="checkbox" checked>
                        <label for="checkbox-12"> Danger </label>
                    </div>
                    <div class="checkbox checkbox-purple checkbox-circle">
                        <input id="checkbox-13" type="checkbox" checked>
                        <label for="checkbox-13"> Purple </label>
                    </div>
                    <div class="checkbox checkbox-inverse checkbox-circle">
                        <input id="checkbox-15" type="checkbox" checked>
                        <label for="checkbox-15"> Inverse </label>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-12">
                    <h3 class="box-title m-b-0">Checkbox Disable</h3>
                    <p class="text-muted font-13 m-b-30"> Disable state </p>
                    <div class="checkbox">
                        <input id="checkbox9" type="checkbox" disabled>
                        <label for="checkbox9"> Can't check this </label>
                    </div>
                    <div class="checkbox checkbox-warning checkbox-circle">
                        <input id="checkbox110" type="checkbox" disabled checked>
                        <label for="checkbox110"> And this </label>
                    </div>
                    <div class="checkbox checkbox-info">
                        <input id="checkbox12" type="checkbox" disabled checked>
                        <label for="checkbox12"> Can't check this </label>
                    </div>
                    <div class="checkbox checkbox-purple checkbox-circle">
                        <input id="checkbox14" type="checkbox" disabled checked>
                        <label for="checkbox14"> And this </label>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <h3 class="box-title m-b-0">Radio Buttons</h3>
                    <p class="text-muted font-13 m-b-30"> With bootstrap colors </p>
                    <div class="radio">
                        <input type="radio" name="radio" id="radio1" value="option1" checked>
                        <label for="radio1"> Default </label>
                    </div>
                    <div class="radio radio-custom">
                        <input type="radio" name="radio" id="radio2" value="option2">
                        <label for="radio2"> Custom </label>
                    </div>
                    <div class="radio radio-primary">
                        <input type="radio" name="radio" id="radio3" value="option3">
                        <label for="radio3"> Primary </label>
                    </div>
                    <div class="radio radio-success">
                        <input type="radio" name="radio" id="radio4" value="option4">
                        <label for="radio4"> Success </label>
                    </div>
                    <div class="radio radio-info">
                        <input type="radio" name="radio" id="radio5" value="option5">
                        <label for="radio5"> Info </label>
                    </div>
                    <div class="radio radio-danger">
                        <input type="radio" name="radio" id="radio6" value="option6">
                        <label for="radio6"> Danger </label>
                    </div>
                    <div class="radio radio-warning">
                        <input type="radio" name="radio" id="radio7" value="option7">
                        <label for="radio7"> Warning </label>
                    </div>
                    <div class="radio radio-purple">
                        <input type="radio" name="radio" id="radio8" value="option8">
                        <label for="radio8"> Purple </label>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <h3 class="box-title m-b-0">Radio Clickable</h3>
                    <p class="text-muted font-13 m-b-30"> All buttons clickable </p>
                    <div class="radio">
                        <input type="radio" name="radio1" id="radio11" value="option1" checked>
                        <label for="radio11"> Default </label>
                    </div>
                    <div class="radio radio-custom">
                        <input type="radio" name="radio2" id="radio12" value="option2">
                        <label for="radio12"> Custom </label>
                    </div>
                    <div class="radio radio-primary">
                        <input type="radio" name="radio3" id="radio13" value="option3">
                        <label for="radio13"> Primary </label>
                    </div>
                    <div class="radio radio-success">
                        <input type="radio" name="radio4" id="radio14" value="option4" checked>
                        <label for="radio14"> Success </label>
                    </div>
                    <div class="radio radio-info">
                        <input type="radio" name="radio5" id="radio15" value="option5" checked>
                        <label for="radio15"> Info </label>
                    </div>
                    <div class="radio radio-danger">
                        <input type="radio" name="radio6" id="radio16" value="option6">
                        <label for="radio16"> Danger </label>
                    </div>
                    <div class="radio radio-warning">
                        <input type="radio" name="radio7" id="radio17" value="option7" checked>
                        <label for="radio17"> Warning </label>
                    </div>
                    <div class="radio radio-purple">
                        <input type="radio" name="radio8" id="radio18" value="option8">
                        <label for="radio18"> Purple </label>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <h3 class="box-title m-b-0">Radio Disable</h3>
                    <p class="text-muted font-13 m-b-30"> Disable state </p>
                    <div class="radio">
                        <input type="radio" name="radio21" id="radio21" value="option1" disabled checked>
                        <label for="radio21"> Default </label>
                    </div>
                    <div class="radio radio-custom">
                        <input type="radio" name="radio22" disabled id="radio22" value="option2">
                        <label for="radio22"> Custom </label>
                    </div>
                    <div class="radio radio-primary">
                        <input type="radio" name="radio23" disabled id="radio23" value="option3">
                        <label for="radio23"> Primary </label>
                    </div>
                    <div class="radio radio-success">
                        <input type="radio" name="radio24" disabled id="radio24" value="option4" checked>
                        <label for="radio24"> Success </label>
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
<script>
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    $('.js-switch').each(function() {
        new Switchery($(this)[0], $(this).data());
    });
</script>
@endsection