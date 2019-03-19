<a class="m-l-10 m-r-10 action-btn" href="#">
    <i class="ti-exchange-vertical text-inverse"></i>
</a>

{{--NEED TO FIGURE OUT HOW THIS WORKS--}}

{{--<div class="col-md-4">--}}
    {{--<div class="white-box">--}}
        {{--<h3 class="box-title">Nestable 2</h3>--}}
        {{--<div class="myadmin-dd-empty dd" id="nestable2">--}}
            {{--<ol class="dd-list">--}}
                {{--<li class="dd-item dd3-item" data-id="13">--}}
                    {{--<div class="dd-handle dd3-handle"></div>--}}
                    {{--<div class="dd3-content"> Item 13 </div>--}}
                {{--</li>--}}
                {{--<li class="dd-item dd3-item" data-id="14">--}}
                    {{--<div class="dd-handle dd3-handle"></div>--}}
                    {{--<div class="dd3-content"> Item 14 </div>--}}
                {{--</li>--}}
                {{--<li class="dd-item dd3-item" data-id="14">--}}
                    {{--<div class="dd-handle dd3-handle"></div>--}}
                    {{--<div class="dd3-content"> Item 16 </div>--}}
                {{--</li>--}}
                {{--<li class="dd-item dd3-item" data-id="14">--}}
                    {{--<div class="dd-handle dd3-handle"></div>--}}
                    {{--<div class="dd3-content"> Item 17 </div>--}}
                {{--</li>--}}
                {{--<li class="dd-item dd3-item" data-id="14">--}}
                    {{--<div class="dd-handle dd3-handle"></div>--}}
                    {{--<div class="dd3-content"> Item 18 </div>--}}
                {{--</li>--}}
                {{--<li class="dd-item dd3-item" data-id="14">--}}
                    {{--<div class="dd-handle dd3-handle"></div>--}}
                    {{--<div class="dd3-content"> Item 19 </div>--}}
                {{--</li>--}}
                {{--<li class="dd-item dd3-item" data-id="15">--}}
                    {{--<div class="dd-handle dd3-handle"></div>--}}
                    {{--<div class="dd3-content"> Item 15 </div>--}}
                    {{--<ol class="dd-list">--}}
                        {{--<li class="dd-item dd3-item" data-id="16">--}}
                            {{--<div class="dd-handle dd3-handle"></div>--}}
                            {{--<div class="dd3-content"> Item 16 </div>--}}
                        {{--</li>--}}
                        {{--<li class="dd-item dd3-item" data-id="17">--}}
                            {{--<div class="dd-handle dd3-handle"></div>--}}
                            {{--<div class="dd3-content"> Item 17 </div>--}}
                        {{--</li>--}}
                        {{--<li class="dd-item dd3-item" data-id="18">--}}
                            {{--<div class="dd-handle dd3-handle"></div>--}}
                            {{--<div class="dd3-content"> Item 18 </div>--}}
                        {{--</li>--}}
                    {{--</ol>--}}
                {{--</li>--}}
            {{--</ol>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}



{{--<script>--}}

        {{--// Nestable--}}
        {{--var updateOutput = function(e) {--}}
            {{--var list = e.length ? e : $(e.target),--}}
                {{--output = list.data('output');--}}
            {{--if (window.JSON) {--}}
                {{--output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));--}}
            {{--} else {--}}
                {{--output.val('JSON browser support required for this demo.');--}}
            {{--}--}}
        {{--};--}}

        {{--$('#nestable2').nestable({--}}
            {{--group: 1--}}
        {{--}).on('change', updateOutput);--}}

        {{--updateOutput($('#nestable2').data('output', $('#nestable2-output')));--}}
        {{--$('#nestable-menu').on('click', function(e) {--}}
            {{--var target = $(e.target),--}}
                {{--action = target.data('action');--}}
            {{--if (action === 'expand-all') {--}}
                {{--$('.dd').nestable('expandAll');--}}
            {{--}--}}
            {{--if (action === 'collapse-all') {--}}
                {{--$('.dd').nestable('collapseAll');--}}
            {{--}--}}
        {{--});--}}
        {{--$('#nestable-menu').nestable();--}}

{{--</script>--}}