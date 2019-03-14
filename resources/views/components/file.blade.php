@if(!empty($options['translate']) && $options['translate'])
    @foreach(LaravelLocalization::getSupportedLocales() as $locale => $data)
        @php
            $value = $options['value'];

            if (!empty($options['model'])) {
                $translation = $options['model']->translate($locale);
            }
            if (!empty($translation)) {
                $value = $translation->$name;
             } else {
                $value = null;
            }
        @endphp
        <div class="form-group language-{{$locale}} {{ @$options['class'] }}">
            <label class="col-sm-12"><span class="flag-icon flag-icon-{{$locale}}"></span>{{ $options['title'] }}</label>
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
                        {!!  Form::file($locale . '[' .$name . ']', $value, $options['attr'])  !!}

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
    @endforeach
@else
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
@endif