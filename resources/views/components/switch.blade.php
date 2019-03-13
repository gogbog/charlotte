<div class="form-group {{ @$options['class'] }}">
    <label class="col-sm-12">{{ $options['title'] }}</label>
    <div class="col-sm-12 m-b-20">
        <label class="switch-light switch-ios" style="width: 60px" onclick="">
            {!!  Form::checkbox($name, $options['value'], @$options['checked'], $options['attr']) !!}
            <span>
              <a></a>
            </span>
        </label>
        <span class="help-block">
            <small>
                @if (!empty($options['helper_box']))
                    {{ $options['helper_box'] }}
                @endif
            </small>
        </span>
    </div>
</div>