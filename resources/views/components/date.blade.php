<div class="form-group {{ @$options['class'] }}">
    <label class="col-sm-12">{{ $options['title'] }}</label>
    <div class="col-sm-12 m-b-20">
        <div class="input-group">
            <input type="text" class="form-control mydatepicker"
                   @if (!empty($options['attributes']))
                       @foreach($options['attributes'] as $attribute)
                            {{ $attribute }}
                       @endforeach
                   @endif
                   @if (!empty($options['placeholder']))
                   placeholder="{{ $options['placeholder'] }}"
                    @endif>
            <span class="input-group-addon">
                <i class="icon-calender"></i>
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
        $('.mydatepicker').datepicker();
    </script>
@append