<div class="form-group {{ @$options['class'] }}">
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
                {!!  Form::file($name, $options['value'], $options['attr'])  !!}

            </span>
            <a href="#"
               class="input-group-addon btn btn-default fileinput-exists"
               data-dismiss="fileinput">
                {{ trans('administration::admin.remove') }}
            </a>
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