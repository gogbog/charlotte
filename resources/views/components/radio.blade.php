@foreach($options['choices'] as $key => $choice)

<div class="form-group {{ @$options['class'] }}">
    <div class="col-sm-12 m-b-20">
        <div class="radio radio-danger">
            {!! Form::radio($name, $key, $options['value'], ['id' => $key]); !!}
            <label for="{{ $key }}">{{ $choice }}</label>
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
@endforeach