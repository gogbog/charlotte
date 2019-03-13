<div class="form-group">
    <label class="col-sm-12">Color Picker</label>
    <div class="col-sm-12 m-b-20">
        <input type="text" class="colorpicker form-control" value="#7ab2fa"/>
        <span class="help-block">
            <small>A block of help text that breaks onto a new line and may extend beyond one line.</small>
        </span>
    </div>
</div>

@section('js')

    <script>
        $(".colorpicker").asColorPicker();
    </script>

    @append