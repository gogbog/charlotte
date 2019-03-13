<div class="form-group">
    <label class="col-sm-12">Date Picker</label>
    <div class="col-sm-12 m-b-20">
        <div class="input-daterange input-group date-range" id="date-range">
            <input type="text" class="form-control" name="start"/>
            <span class="input-group-addon bg-info b-0 text-white">to</span>
            <input type="text" class="form-control" name="end"/>
        </div>
        <span class="help-block">
            <small>A block of help text that breaks onto a new line and may extend beyond one line.</small>
        </span>
    </div>
</div>

@section('js')

    <script>
        $('.date-range').datepicker({
            toggleActive: true
        });
    </script>

    @append