<div class="form-group {{ @$options['class'] }}">
    <label class="col-sm-12">{{ $options['title'] }}</label>
    <div class="col-sm-12 m-b-20">
        <div class="input-group clockpicker">
            <input type="text"
                   class="form-control"
                   @if (!empty($options['attributes']))
                   @foreach($options['attributes'] as $attribute)
                   {{ $attribute }}
                   @endforeach
                   @endif
                   @if (!empty($options['value']))
                   value="{{ $options['value'] }}"
                    @endif>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-time"></span>
            </span>
        </div>
        <span class="help-block">
            <small>
                @if (!empty($options['helper_box']))
                    {{ $options['helper_box'] }}
                @endif
            </small>
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