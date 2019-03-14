<div class="form-group {{ @$options['class'] }}">
    <label class="col-sm-12">{{ $options['title'] }}</label>
    <div class="col-sm-12 m-b-20">
        {!! Form::select($name, $options['choices'], @$options['selected'], $options['attr']) !!}
        <span class="help-block">
            <small>
                @if (!empty($options['helper_box']))
                    {{ $options['helper_box'] }}
                @endif
            </small>
        </span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-12">Multiple select boxes</label>
    <div class="col-sm-12 m-b-20">
        <input type="hidden" class="multiple-choices" value="">
        <select class="selectpicker" multiple data-style="form-control">
            <option>Mustard</option>
            <option>Ketchup</option>
            <option>Relish</option>
        </select>
        <span class="help-block">
            <small>
                A block of help text that breaks onto a new line and may extend beyond one line.
            </small>
        </span>
    </div>
</div>

@section('js')

    <script>
        let multiple = document.querySelector('.selectpicker');
        multiple.addEventListener("change", getChoices);
        function getChoices() {
            let choices = $('.selectpicker').val();
            $('.multiple-choices').attr('value',choices);
        }
    </script>

@append