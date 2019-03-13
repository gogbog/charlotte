<div class="form-group {{ @$options['class'] }}">
    <label class="col-sm-12">{{ $options['title'] }}</label>
    <div class="col-sm-12 m-b-20">
        <div class="input-daterange input-group date-range" id="date-range">
            <input type="text" class="form-control" name="start"
            @if (!empty($options['attributes']))
                @foreach($options['attributes'] as $attribute)
                    {{ $attribute }}
                @endforeach
            @endif/>
            <span class="input-group-addon log-btn b-0 text-white">
                {{ trans('administration::admin.to') }}
            </span>
            <input type="text" class="form-control" name="end"
            @if (!empty($options['attributes']))
                @foreach($options['attributes'] as $attribute)
                    {{ $attribute }}
                @endforeach
            @endif/>
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
        $('.date-range').datepicker({
            toggleActive: true
        });
    </script>

    @append