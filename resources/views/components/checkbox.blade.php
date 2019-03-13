<div class="form-group {{ @$options['class'] }}">
    <div class="col-sm-12 m-b-20">
        <div class="checkbox checkbox-danger">
            {!!  Form::checkbox($name, $options['value'], $options['checked'], $options['attr']) !!}
            <label for="checkbox6">{{ $options['title'] }}</label>
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