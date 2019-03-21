<?php
$elId = uniqid();
?>

<a class="m-l-10 m-r-10 action-btn media-btn" data-toggle="modal" data-target="#myModal-{{ $elId }}">
    <i class="ti-image text-success"></i>
</a>


<div class="modal fade" id="myModal-{{ $elId }}" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <ul class="nav nav-tabs">

                    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                    <li><a data-toggle="tab" href="#home1">Home1</a></li>

                </ul>
            </div>
            <div class="modal-body">
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">

                        <div class="dropzone" id="file-{{ $elId }}">
                        </div>

                    </div>
                    <div id="home1" class="tab-pane fade">

                        <div class="dropzone" id="file-{{ $elId }}">
                        </div>

                    </div>
                </div>
            </div>
            {{--<div class="modal-footer">--}}
            {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
            {{--</div>--}}
        </div>
    </div>
</div>


    <script src="{{ asset(config('administration.file_prefix') . 'js/drop.js') }}"></script>
    <script>

        $(".dropzone").dropzone({
            autoDiscover: false,
            paramName: "file",
            method: 'POST',
            url: "{{ \Charlotte\Administration\Helpers\Administration::route('blog.store') }}",
            addRemoveLinks : true,
            maxFilesize: 5,
            dictResponseError: 'Error uploading file!',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
