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


                    $('.' + id).summernote({
                        minHeight: 100,
                        height: 250,
                        popover: {
                            image: [
                                ['custom', ['imageAttributes']],
                                ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                                ['remove', ['removeMedia']]
                            ],
                        },
                        imageAttributes:{
                            icon:'<i class="note-icon-pencil"/>',
                            removeEmpty:false, // true = remove attributes | false = leave empty if present
                            disableUpload: true // true = don't display Upload Options | Display Upload Options
                        },
                        cleaner:{
                            action: 'button', // both|button|paste 'button' only cleans via toolbar button, 'paste' only clean when pasting content, both does both options.
                            newline: '<br>', // Summernote's default is to use '<p><br></p>'
                            notStyle: 'position:absolute;top:0;left:0;right:0', // Position of Notification
                            icon: '<i class="note-icon-eraser"></i>',
                            keepHtml: false, // Remove all Html formats
                            keepOnlyTags: ['<p>', '<br>', '<ul>', '<li>', '<b>', '<strong>','<i>', '<a>'], // If keepHtml is true, remove all tags except these
                            keepClasses: false, // Remove Classes
                            badTags: ['style', 'script', 'applet', 'embed', 'noframes', 'noscript', 'html'], // Remove full tags with contents
                            badAttributes: ['style', 'start'], // Remove attributes from remaining tags
                            limitChars: false, // 0/false|# 0/false disables option
                            limitDisplay: 'both', // text|html|both
                            limitStop: false // true/false
                        },
                        @if(!empty($options['simple']) && $options['simple'] == true)
                        toolbar: [
                            ['custom',['pageTemplates']], // Custom Buttons
                            ['style', ['style']],
                            ['font', ['bold', 'underline', 'clear']],
                            ['cleaner',['cleaner']],
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



                $('.' + id).summernote({
                    minHeight: 100,
                    height: 250,
                    lang: 'bg-BG', // default: 'en-US',
                    popover: {
                        image: [
                            ['custom', ['imageAttributes']],
                            ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                            ['float', ['floatLeft', 'floatRight', 'floatNone']],
                            ['remove', ['removeMedia']]
                        ],
                    },
                    imageAttributes:{
                        icon:'<i class="note-icon-pencil"/>',
                        removeEmpty:false, // true = remove attributes | false = leave empty if present
                        disableUpload: false // true = don't display Upload Options | Display Upload Options
                    },
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
                    desc.setAttribute('value', contents);
                });


            })
        </script>
    @endif

@append