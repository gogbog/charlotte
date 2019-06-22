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
                  $options['attr']['style'] = 'z:index:-32131;position:absolute;';

            $options['attr']['class'] = 'description';
            $options['attr']['id'] = $id .'-' . $locale;

        @endphp
        <div class="form-group language-{{$locale}} {{ @$options['class'] }}">
            <label class="col-sm-12"><span class="flag-icon flag-icon-{{$locale}}"></span>{{ $options['title'] }}
            </label>
            <div class="col-sm-12 m-b-20">

                {!! Form::text($locale . '[' .$name . ']', $value, $options['attr']) !!}
                <div class="{{$id . '-' . $locale}}">@if(!empty($value)){!! $value !!}@endif</div>
                <span class="help-block with-errors"></span>
                <span class="help-block_custom">
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
        $options['attr']['style'] = 'z:index:-32131;position:absolute;';
             $options['attr']['class'] = 'description';
             $options['attr']['id'] = $id;
    @endphp
    <div class="form-group without-language {{ @$options['class'] }}">
        <label class="col-sm-12">{{ $options['title'] }}</label>
        <div class="col-sm-12 m-b-20">

            {!! Form::text($name, $value, $options['attr']) !!}
            <div class="{{$id}}">{!! $value !!}</div>
            <span class="help-block with-errors"></span>
            <span class="help-block_custom">
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

                    let input = $('#' + id);
                    let max_chars = input.attr('live-count');

                    if (max_chars !== undefined) {
                        let span_box = `<span  id=span_` + id + ` class="m-l-5 max_char">(` + 0 + `/` + max_chars + `)</span></label>`;
                        let parent_html = $(input).parents()[1];
                        let parent = $(parent_html);
                        let label_html = parent.children()[0];
                        let label = $(label_html);
                        label.html(label.html() + span_box);
                    }


                    $('.' + id).on('summernote.init', function (we, contents, $editable) {
                        let content = contents['editable'];
                        // if (content.html() == '<p><br></p>') {
                        //     content.html('');
                        // }
                        let input = $('#' + id);
                        let max_chars = input.attr('live-count');

                        if (max_chars !== undefined) {
                            let change_span = $('#span_' + id);
                            change_span.html("(" + content.html().length + "/" + max_chars + ")");
                        }

                    });


                    $('.' + id).summernote({
                        minHeight: 100,
                        height: 250,
                        @if(!empty($options['simple']) && $options['simple'] == true)
                        toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'underline', 'clear']],
                            // ['fontname', ['fontname']],
                            // ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['fullscreen', 'codeview', 'help']],
                        ],
                        @endif
                    });



                    $('.' + id).on('summernote.change', function (we, contents, $editable) {
                        let change_span = $('#span_' + id);

                        len = contents.length;
                        if (len > max_chars) {
                            change_span.html("(" + len + "/" + max_chars + ")");
                            change_span.addClass('text-danger');
                        } else if (len > 0) {
                            change_span.html("(" + len + "/" + max_chars + ")");
                            change_span.removeClass('text-danger');
                        } else {
                            change_span.html("(0/" + max_chars + ")");
                            change_span.removeClass('text-danger');
                        }

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

                let input = $('#' + id);
                let max_chars = input.attr('live-count');

                if (max_chars !== 'undefined') {
                    let span_box = `<span  id=span_` + id + ` class="m-l-5 max_char">(` + 0 + `/` + max_chars + `)</span></label>`;
                    let parent_html = $(input).parents()[1];
                    let parent = $(parent_html);
                    let label_html = parent.children()[0];
                    let label = $(label_html);
                    label.html(label.html() + span_box);
                }


                $('.' + id).on('summernote.init', function (we, contents, $editable) {
                    let content = contents['editable'];
                    // if (content.html() == '<p><br></p>') {
                    //     content.html('');
                    // }
                    let input = $('#' + id);
                    let max_chars = input.attr('live-count');

                    if (max_chars !== 'undefined') {
                        let change_span = $('#span_' + id);
                        change_span.html("(" + content.html().length + "/" + max_chars + ")");
                    }

                });

                $('.' + id).summernote({
                    minHeight: 100,
                    height: 250,
                    lang: 'bg-BG', // default: 'en-US'
                    @if(!empty($options['simple']) && $options['simple'] == true)
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        // ['fontname', ['fontname']],
                        // ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']],
                    ],
                    @endif
                });



                $('.' + id).on('summernote.change', function (we, contents, $editable) {
                    let change_span = $('#span_' + id);

                    len = contents.length;
                    if (len > max_chars) {
                        change_span.html("(" + len + "/" + max_chars + ")");
                        change_span.addClass('text-danger');
                    } else if (len > 0) {
                        change_span.html("(" + len + "/" + max_chars + ")");
                        change_span.removeClass('text-danger');
                    } else {
                        change_span.html("(0/" + max_chars + ")");
                        change_span.removeClass('text-danger');
                    }

                    desc.setAttribute('value', contents);
                });


            })
        </script>
    @endif

@append