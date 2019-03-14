<div class="form-group without-language {{ @$options['class'] }}">
    <label class="col-sm-12">{{ $options['title'] }}</label>
    <div class="col-sm-12 m-b-20">
        {!!  Form::text($name, $options['value'], $options['attr']) !!}

        <span class="help-block">
            <small>
                @if (!empty($options['helper_box']))
                    {{ $options['helper_box'] }}
                @endif
            </small>
        </span>

    </div>
</div>