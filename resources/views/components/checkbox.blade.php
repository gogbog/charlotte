@php
$id = uniqid();
$options['attr']['id'] = $id;
$checked = ($options['value'] || $options['checked']) ? 'checked' : null;
@endphp
<div class="form-group {{ @$options['class'] }}">
    <div class="col-sm-12 m-b-20">
        <div class="checkbox checkbox-danger">
            {{Form::hidden($name,0)}}
            {!!  Form::checkbox($name, 1, $checked, $options['attr']) !!}
            <label for="{{ $id }}">{{ $options['title'] }}</label>
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