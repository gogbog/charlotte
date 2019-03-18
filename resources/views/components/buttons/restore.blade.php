<?php
$elId = uniqid();
?>

<a class="m-l-10 m-r-10 action-btn"
   data-href="{{$link}}"
   id="{{ $elId }}">
    <i class="fa {{$icon}} {{ $color }}"></i>
</a>


<script>

    $('#{{$elId}}').on('click', function (e) {
        e.preventDefault();

        var $this = $(this);


        swal({
            title: "{{ trans('administration::admin.restore') }}",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "{{ trans('administration::admin.cancel') }}",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "{{ trans('administration::admin.yes_restore') }}",
            closeOnConfirm: false
        }, function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: $this.data('href'),
                type: 'DELETE',
                success: function (result) {
                    // console.log('hello');

                    if (typeof result.errors !== 'undefined' && result.errors.length != 0) {
                        console.log(result.errors);
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
                        $('#dataTableBuilder').DataTable().draw();
                        swal("{{ trans('administration::admin.restored') }}", "{{ trans('administration::admin.continue') }}", "success");
                    }
                }
            });

        });

    });
</script>
