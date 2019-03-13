<div class="form-group">
    <label class="col-sm-12">Date Picker</label>
    <div class="col-sm-12 m-b-20">
        <div class="input-group">
            <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
            <span class="input-group-addon">
                <i class="icon-calender"></i>
            </span>
        </div>
        <span class="help-block">
            <small>A block of help text that breaks onto a new line and may extend beyond one line.</small>
        </span>
    </div>
</div>


@section('js')
    <script>
        $('.mydatepicker').datepicker();
    </script>
@append