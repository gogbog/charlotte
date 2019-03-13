<div class="form-group">
    <label class="col-sm-12">Editor Text</label>
    <div class="col-sm-12 m-b-20">
        <div class="summernote"></div>
        <span class="help-block">
            <small>A block of help text that breaks onto a new line and may extend beyond one line.</small>
        </span>
    </div>
</div>
@section('js')

    <script>
        $(document).ready(function () {
            $('.summernote').summernote({
                height: 350, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
        });
    </script>

@append