@php
    $value = (!empty($options['value'])) ? $options['value'] : null;
    $ids = [];
@endphp
@if(!empty($options['translate']) && $options['translate'])
    @foreach(LaravelLocalization::getSupportedLocales() as $locale => $data)
        @php
            $id = uniqid();
            $options['attr']['id'] = $id;
            $ids[] = $id;
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
            <label class="col-sm-12"><span class="flag-icon flag-icon-{{$locale}}"></span>{{ $options['title'] }}
            </label>
            <div class="col-sm-12 m-b-20">
                <div class="input-group">
                    {!!  Form::text($name .'[]', $options['value'], $options['attr']) !!}
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button" onclick="addInput('{{$id}}')"><i class="fa fa-plus"></i></button>
                </span>
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
    @php
        $id = uniqid();
        $options['attr']['id'] = $id;
        $ids[] = $id;
    @endphp
    <div class="form-group without-language {{ @$options['class'] }}">
        <label class="col-sm-12">{{ $options['title'] }}</label>
        <div class="col-sm-12 m-b-20">
            <div class="input-group">
            {!!  Form::text($name .'[]', $options['value'], $options['attr']) !!}
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" onclick="addInput('{{$id}}')"><i class="fa fa-plus"></i></button>
                </span>
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

@section('js')

        <script>


            function addInput(id){
                console.log('init');
                let multiplier_input = $('#'+ id);
                let multiplier_parent = multiplier_input.parents('.form-group');
                let classes = '';

                $($(multiplier_parent).attr('class').split(' ')).each(function() {
                         classes = classes + ' ' + this;
                });

                let new_id = (Math.random().toString(36).substr(2, 9));
                console.log(new_id);

                let html = `
                <div class="`+classes+`">
                            <div class="col-sm-12 m-b-20">
                                <div class="input-group">

                                    <input class="form-control" id="`+new_id+`" name="`+multiplier_input.attr('name')+`" type="text">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" onclick="addInput('`+new_id+`')"><i class="fa fa-plus"></i></button>
                            </span>
                        </div>
                    </div>
                </div>

                `;

console.log(html);
                multiplier_parent.append(html);
                // console.log(html);
            }

        </script>

@append

