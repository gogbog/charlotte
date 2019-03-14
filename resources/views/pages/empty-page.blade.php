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



    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-12">Color Picker</label>
                        <div class="col-sm-12 m-b-20">
                            <input type="text" class="colorpicker form-control" value="#7ab2fa"/>
                            <span class="help-block">
                                <small>A block of help text that breaks onto a new line and may extend beyond one line.</small>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('js')

    <script>
        $(".colorpicker").asColorPicker();
    </script>
    <script>
        $(document).ready(function () {
            $(".lang-separator li").click(function () {

                let category = $(this).attr('data-filter');
                $('.lang-separator li').removeClass('active');
                $(this).addClass('active');
                if (category === '') {
                    $('.form-group:hidden').show().removeClass('hidden');
                } else {
                    $('.form-group').each(function () {
                        if (!$(this).hasClass(category) && !$(this).hasClass('without-language')) {
                            $(this).hide().addClass('hidden');
                        } else {
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