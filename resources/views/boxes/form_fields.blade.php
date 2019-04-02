<div class="col-sm-12 m-t-20">
    <ul class="lang-separator m-b-10">
        @foreach(LaravelLocalization::getLocalesOrder() as $locale => $data)
            <li class="lang-button" data-filter="language-{{$locale}}">
                <span class="flag-icon flag-icon-{{$locale}}"></span>
                {{$locale}}
            </li>
        @endforeach
    </ul>
    <div class="white-box">
        <div class="row">
            {!! form($form) !!}
        </div>
    </div>
</div>




@section('js')

    <script>
        $(document).ready(function () {
            $(".lang-separator li").click(function () {

                let category = $(this).attr('data-filter');
                $('.lang-separator li').removeClass('active');
                $(this).addClass('active');
                if (category === '') {
                    $('.form-group:hidden').show().removeClass('hidden');
                }
                else {
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