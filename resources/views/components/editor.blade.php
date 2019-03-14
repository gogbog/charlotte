@php
$id = uniqid();
$area_id = uniqid();
@endphp

<div class="form-group {{ @$options['class'] }}">
    <label class="col-sm-12">{{ $options['title'] }}</label>
    <div class="col-sm-12 m-b-20">

        {!! Form::text($name, null, ['hidden', 'class' => 'description', 'id' => $id]) !!}
        <div class="{{$id}}">

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

@section('js')

    <script>
        $(document).ready(function() {
            let id = '{{$id}}';
            let desc = document.getElementById(id);
            // desc.innerHTML = null;

            $('.' + id).summernote({
                height: 300
            });

            $('.' + id).on('summernote.change', function(we, contents, $editable) {

                desc.setAttribute('value', contents);
            });

        })
    </script>

@append