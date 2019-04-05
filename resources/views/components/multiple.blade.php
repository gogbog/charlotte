@php
    $choices = $options['choices'];
    $value = (!empty($options['value'])) ? $options['value'] : null;
    $ids = [];
@endphp
@if (!empty($options['empty_value']))
    @php
        $choices = array(null => $options['empty_value']) + $options['choices'];
    @endphp
@endif

@if(!empty($options['translate']) && $options['translate'])
    @foreach(LaravelLocalization::getSupportedLocales() as $locale => $data)
        @php
            $id = uniqid();
            $options['attr']['id'] = $id;
            $ids[] = $id;
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
                {!! Form::select($locale . '[' .$name . ']', $choices, $value, $options['attr']) !!}
                <input name="{{ $locale . '[' .$name . ']' }}" type="hidden" class="multiple-choices_{{$id}}" value="">
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
    @php
        $id = uniqid();
        $options['attr']['id'] = $id;
        $ids[] = $id;
    @endphp
    <div class="form-group without-language {{ @$options['class'] }}">
        <label class="col-sm-12">{{ $options['title'] }}</label>
        <div class="col-sm-12 m-b-20">
            {!! Form::select($name, $choices, $value, $options['attr']) !!}
            <input name="{{ $name }}" type="hidden" class="multiple-choices_{{$id}}" value="">
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
    @foreach($ids as $id)
    <script>
        document.getElementById('{{$id}}').addEventListener("change", getChoices);

        function getChoices() {
            let choices = $('#{{$id}}').val();
            $('.multiple-choices_{{$id}}').attr('value', choices);
        }
    </script>
    @endforeach
@append