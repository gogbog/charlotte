@foreach($items as $item)

    @php
        $active = false;
        if ($item->hasChildren()) {
            foreach ($item->children() as $child) {
                if ($child->url() == Request::url()) {
                    $active = true;
                }
            }
        } else if ($item->url() == Request::url()){
            $active = true;
        }
    @endphp
    <li class="@if(!empty($item->attr()['class'])) {{ $item->attr()['class'] }} @endif @if($item->hasChildren()) dropdown @endif  ">
        @if(empty($item->attr()['global']))
            <a href="@if (!empty($item->url())){!! $item->url() !!}@else javascript:void(0)  @endif"
               class="waves-effect @if ($active) active @endif">
                <i class="fa fa-fw linea-icon linea-basic m-r-10 @if (!empty($item->attr()['icon'])) {{ $item->attr()['icon'] }} @endif"></i>
                <span class="hide-menu">
                {!! $item->title !!}
                    @if($item->hasChildren()) <span class="fa arrow"></span> @endif
            </span>
            </a>
        @else
            {!! $item->title !!}
        @endif
        @if($item->hasChildren())
            <ul class="nav nav-second-level" style="padding-left: 30px;">
                @include('administration::boxes.nav_links', ['items' => $item->children()])
            </ul>
        @endif
    </li>
@endforeach