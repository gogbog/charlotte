@php

        @endphp

@php
    $value = null;
    $collection = (!empty($options['collection'])) ? $options['collection'] : 'default';
    if (!empty($options['model']) && $options['model']->getMedia($collection)->isNotEmpty()) {
        $value = $options['model']->getFirstMedia($collection)->file_name;
    }

@endphp


<div class="form-group without-language {{ @$options['class'] }}">
    <label class="col-sm-12">{{ $options['title'] }}</label>
    <div class="col-sm-12 m-b-20">
        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
            <div class="form-control" data-trigger="fileinput">
                <span class="fileinput-filename"></span>
            </div>
            <span class="input-group-addon btn btn-default btn-file">
                    <span class="fileinput-new">
                        {{ trans('administration::admin.select_file') }}
                </span>
                    <span class="fileinput-exists">
                        {{ trans('administration::admin.change') }}
                </span>
                {!!  Form::file($name, null, $options['attr'])  !!}

            </span>
            <a href="#"
               class="input-group-addon btn btn-default fileinput-exists"
               data-dismiss="fileinput">
                {{ trans('administration::admin.remove') }}
            </a>
        </div>
        @if (!empty($value))
            {{$value}}
        @endif
        <span class="help-block">
    <small>
        @if (!empty($options['helper_box']))
            {{ $options['helper_box'] }}
        @endif
    </small>
</span>
    </div>
</div>
