<?php
$elId = uniqid();
?>

<label class="table-switch switch-light switch-ios m-t-0 m-b-0"
       onclick="">
    <input type="checkbox"
           data-href=""
           id="{{$elId}}"
           name=""
           {{--@if(//active state == true) checked @endif--}}
    >
    <span class="m-t-0 m-b-0">
      <a></a>
    </span>
</label>

<script>

    $('#{{$elId}}').on('click', function () {
        let $this = $(this);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: $this.data('href'),
            type: 'POST',
            data: {
                id: $this.attr('id'),
                checked: true
            },
            success: function (result) {
                if (typeof result.errors !== 'undefined' && result.errors.length != 0) {
                    $.each(result.errors, function (index, value) {
                        $.toast({
                            // heading: 'Welcome to my Pixel admin',
                            text: value,
                            position: 'top-right',
                            loaderBg: '#ff6849',
                            icon: 'error',
                            hideAfter: 3500
                        });
                    });
                } else {
                    console.log(result);
                    // $('#dataTableBuilder').DataTable().draw();
                }
            }
        });
    });
</script>

