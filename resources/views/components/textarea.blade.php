<div class="form-group {{ @$options['class'] }}">
    <label class="col-md-12">{{ $options['title'] }}</label>
    <div class="col-md-12 m-b-20">
{{--        <textarea name="{{ $name }}" class="form-control" rows="5"></textarea>--}}
        {!! Form::textarea($name, null, $options['attr']) !!}
        <span class="help-block">
            <small>
                @if (!empty($options['helper_box']))
                    {{ $options['helper_box'] }}
                @endif
            </small>
        </span>
    </div>
</div>