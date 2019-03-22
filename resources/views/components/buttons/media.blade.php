<?php
$id = uniqid();
?>

<a class="m-l-10 m-r-10 action-btn media-btn" data-toggle="modal" data-target="#modal_{{$id}}">
    <i class="ti-image text-success"></i>
</a>

<div class="modal fade centered-modal" id="modal_{{$id}}" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <ul class="nav nav-tabs">
                    @foreach($collections as $collection)
                        <li @if ($loop->first) class="active" @endif>
                            <a data-toggle="tab" href="#tab_{{$id}}_{{$collection}}">{{ $collection }}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="modal-body">
                <div class="tab-content">

                    @foreach($collections as $collection)
                        <div id="tab_{{$id}}_{{$collection}}" class="tab-pane fade in @if ($loop->first) active @endif">

                            <div class="dropzone" id="{{$id}}_{{$collection}}">
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($collections as $collection)
<script>
    let model = '{{str_ireplace('\\','\\\\',get_class($model))}}';
    let collection = '{{ $collection }}';



    $("#{{$id}}_{{$collection}}").dropzone({
        autoDiscover: false,
        paramName: "file",
        method: 'POST',

        url: "{{ \Charlotte\Administration\Helpers\Administration::route('quick_file') }}",
        addRemoveLinks: true,
        dictRemoveFile : "&#10005;",
        dictDefaultMessage: "{{ trans('administration::admin.media_default') }}",
        maxFilesize: 99999,
        dictResponseError: "{{ trans('administration::admin.media_error') }}",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        init: function() {

            @foreach ($model->getMedia($collection) as $media)
                var mockFile = { name: "{{$media->file_name}}", size: "{{$media->size}}", type: '{{$media->mime_type}}' };
                this.options.addedfile.call(this, mockFile);
                this.options.thumbnail.call(this, mockFile, "{{ $media->getFullUrl('thumb') }}", );
                // mockFile.previewElement.classList.add('dz-success');
                mockFile.previewElement.classList.add('dz-complete');
            @endforeach

            this.on("sending", function(file, xhr, formData){
                formData.append("id", {{ $model->id }});
                formData.append("class", model);
                formData.append("collection", collection);
            });
        }
    });

</script>
@endforeach