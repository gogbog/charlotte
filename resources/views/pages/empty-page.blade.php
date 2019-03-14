@extends('administration::layouts.administration-master')
@section('content')

    @if (!empty($form))
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row">
                        {!! form($form) !!}
                    </div>
                </div>
            </div>
        </div>
    @endif

        {{--<div class="row">--}}

            {{--<ul class="lang-separator m-b-10">--}}
                {{--<li class="lang-button" data-filter="language-bg">--}}
                    {{--<span class="flag-icon flag-icon-bg"></span>--}}
                    {{--bg--}}
                {{--</li>--}}
                {{--<li class="lang-button" data-filter="language-en">--}}
                    {{--<span class="flag-icon flag-icon-gb"></span>--}}
                    {{--EN--}}
                {{--</li>--}}
                {{--<li class="lang-button" data-filter="language-fr">--}}
                    {{--<span class="flag-icon flag-icon-fr"></span>--}}
                    {{--FR--}}
                {{--</li>--}}
            {{--</ul>--}}

     {{----}}
            {{--<div class="form-group language-bg">--}}
                {{--<h1>BG</h1>--}}
            {{--</div>--}}


            {{--<div class="form-group language-en">--}}
                {{--<h1>EN</h1>--}}
            {{--</div>--}}

            {{--<div class="form-group language-fr">--}}
                {{--<h1>FR</h1>--}}
            {{--</div>--}}

            {{--<div class="form-group without-language">--}}
                {{--<h1>NOTHING</h1>--}}
            {{--</div>--}}

        {{--</div>--}}

@endsection

@section('js')

    <script>
        $(document).ready(function(){
            $(".lang-separator li").click(function(){

                let category = $(this).attr('data-filter');
                $('.lang-separator li').removeClass('active' );
                $(this).addClass('active');
                if(category === ''){
                    $('.form-group:hidden').show().removeClass('hidden');
                }
                else{
                    $('.form-group').each(function(){
                        if(!$(this).hasClass(category) && !$(this).hasClass('without-language')){
                            $(this).hide().addClass('hidden');
                        }else{
                            $(this).show().removeClass('hidden');
                        }
                    });
                }
                return false
            });
            $(".lang-separator li:first").trigger("click").addClass('active');
        });
    </script>

@append