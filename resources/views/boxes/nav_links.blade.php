@php
$routes = [];

if (!empty($main_menu['url'])) {
    $routes[] = $main_menu['url'];
}

foreach ($sub_menus as $sub_menu) {
    if (!empty($sub_menu['url'])) {
        $routes[] = $sub_menu['url'];
    }
}
@endphp
<li>
    <a href="@if (!empty($main_menu['url'])) {{ $main_menu['url'] }} @else javascript:void(0) @endif" class="waves-effect @if (in_array(Request::url(), $routes)) active @endif">
        <i class="ti-dashboard p-r-10"></i>
        <span class="hide-menu">
            {{ $main_menu['title'] }}
            @if (!empty($sub_menus))
                <span class="fa arrow"></span>
            @endif
        </span>
    </a>
    @if (!empty($sub_menus))
        <ul class="nav nav-second-level">
            @foreach($sub_menus as $sub_menu)
                <li>
                    <a href="{{ $sub_menu['url'] }}">
                        <i class="ti-dashboard p-r-10"></i>
                        {{ $sub_menu['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</li>