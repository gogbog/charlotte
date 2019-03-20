<a class="m-l-10 m-r-10 action-btn media-btn" href="#" id="modal-btn">
    <i class="ti-image text-success"></i>
</a>

<div id="media-modal" class="media-modal">
    <div class="media-modal-content">
        <div class="media-modal-header">
            <span class="media-close">&times;</span>
            <ul class="nav nav-tabs">

                <li class="active"><a data-toggle="tab" href="#menu1">Menu 1</a></li>

            </ul>
        </div>
        <div class="media-modal-body">
            <div class="tab-content m-t-0">

                <div id="menu1" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="white-box m-b-0">
                                <form action="{{ \Charlotte\Administration\Helpers\Administration::route('blog.store') }}"
                                      class="dropzone">
                                    {{ csrf_field() }}
                                    <input name="blog_id" type="hidden" value="111"/>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple/></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<script>
    const modal = document.querySelector('#media-modal');
    const modalBtn = document.querySelectorAll('#modal-btn');
    const closeBtn = document.querySelectorAll('.media-close');

    modalBtn.forEach(function (modalBtn) {
        modalBtn.addEventListener('click', function () {
            $(modal).show();
            $('body').addClass('stop-scrolling');
        });
    });

    closeBtn.forEach(function (closeBtn) {
        closeBtn.addEventListener('click', function () {
            $(modal).hide();
            $('body').removeClass('stop-scrolling');
        });
    });

    window.addEventListener('click', outsideClick);

    function outsideClick(e) {
        if (e.target == modal) {
            $(modal).hide();
            $('body').removeClass('stop-scrolling');
        }
    }
</script>
