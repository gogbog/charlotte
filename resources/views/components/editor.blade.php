@php
    $id = uniqid();
    $value = $options['value'];

@endphp

@if(!empty($options['translate']) && $options['translate'])
    @foreach(LaravelLocalization::getSupportedLocales() as $locale => $data)
        @php

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
            <label class="col-sm-12"><span class="flag-icon flag-icon-{{$locale}}"></span>{{ $options['title'] }}
            </label>
            <div class="col-sm-12 m-b-20">

                {!! Form::text($locale . '[' .$name . ']', $value, ['hidden', 'class' => 'description', 'id' => $id . '-' . $locale]) !!}
                <div class="{{$id . '-' . $locale}}">{!! $value !!}</div>
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

            {!! Form::text($name, $value, ['hidden', 'class' => 'description', 'id' => $id]) !!}
            <div class="{{$id}}">{!! $value !!}</div>
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

@section('js')
    @if(!empty($options['translate']) && $options['translate'])
        @foreach(LaravelLocalization::getSupportedLocales() as $locale => $data)
            <script>
                $(document).ready(function () {
                    let id = '{{$id}}-{{$locale}}';
                    let desc = document.getElementById(id);
                    // desc.innerHTML = null;

                    $('.' + id).summernote({
                        minHeight: 100,
                        height: 250,
                    });

                    $('.' + id).on('summernote.change', function (we, contents, $editable) {

                        desc.setAttribute('value', contents);
                    });

                })
            </script>
        @endforeach
    @else
        <script>
            $(document).ready(function () {
                let id = '{{$id}}';
                let desc = document.getElementById(id);
                // desc.innerHTML = null;

                $('.' + id).summernote({
                    minHeight: 100,
                    height: 250,
                });

                $('.' + id).on('summernote.change', function (we, contents, $editable) {

                    desc.setAttribute('value', contents);
                });

            })
        </script>
    @endif

@append