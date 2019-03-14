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

        @foreach($options['choices'] as $key => $choice)
            @if ($key == $value)
                @php
                    $checked = 1;
                @endphp
            @else
                @php
                    $checked = 0;
                @endphp

            @endif
            <div class="form-group language-{{$locale}} {{ @$options['class'] }}">
                <div class="col-sm-12 m-b-20">

                    <div class="radio radio-danger">
                        {!! Form::radio($locale . '[' .$name . ']', $key , $checked, ['id' => $key . '-' . $locale]); !!}
                        <label for="{{ $key . '-' .$locale }}"><span
                                    class="flag-icon flag-icon-{{$locale}}"></span>{{ $choice }}</label>
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

    @endforeach
@else
    @foreach($options['choices'] as $key => $choice)
        @if ($loop->first || $key == $options['value'])
            @php
                $checked = 1;
            @endphp
        @else
            @php
                $checked = 0;
            @endphp

        @endif

        <div class="form-group without-language {{ @$options['class'] }}">
            <div class="col-sm-12 m-b-20">
                <div class="radio radio-danger">
                    {!! Form::radio($name, $key, $checked, ['id' => $key]); !!}
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
@endif