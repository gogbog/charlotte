<div class="form-group">
    <label class="col-sm-12">Clock Picker</label>
    <div class="col-sm-12 m-b-20">
        <div class="input-group clockpicker">
            <input type="text"
                   class="form-control"
                   value="09:30">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-time"></span>
            </span>
        </div>
        <span class="help-block">
            <small>A block of help text that breaks onto a new line and may extend beyond one line.</small>
        </span>
    </div>
</div>

@section('js')

    <script>
        $('.clockpicker').clockpicker({
            donetext: 'Done',
        }).find('input').change(function () {
            console.log(this.value);
        });
    </script>

@append