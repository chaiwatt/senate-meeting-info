<nav class="mt-3">
    <ul class="nav-slide text-center gap-3" data-widget="treeview" role="menu" data-accordion="false">
        @php
        $routename = Route::currentRouteName();
        @endphp
        @if(isset($modules))
            @foreach ($modules as $module)
            <li class="nav-item {{ Str::contains($routename,$module->module_prefix) ? 'menu-open' : '' }}" id="main-sub-menu">
                <a href="#" class="nav-link {{ Str::contains($routename,$module->module_prefix) ? 'current-page' : '' }}" id="open-sub-menu">
                    <i class="nav-icon fas {{$module->module_icon}}" style="font-size: 19px"></i>
                    {{-- New ICON --}}
                    {{-- <span class="material-symbols-outlined">
                        {{$module->module_icon}}
                    </span> --}}
                    <p>
                        {{ $module->module_name }}
                    </p>
                    <span class="material-symbols-outlined icon-right">
                        keyboard_arrow_right
                    </span>
                </a>
                <ul class="nav nav-treeview" id="sub-menu">
                    @foreach ($module->menus as $menu)
                    <li class="nav-item">
                        <a href="{{ $menu->menu_route ? route($menu->menu_route) : '#' }}"
                            class="nav-link {{ $routename == $menu->menu_route ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="4" fill="#D0D5DD"/>
                            </svg>
                            <p>{{$menu->menu_name}}</p>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        @else
        <li class="nav-item menu-open" id="main-sub-menu">
            <a href="#" class="nav-link {{-- current-page --}}" id="open-sub-menu">
                <i class="nav-icon fas" style="font-size: 19px"></i>
                <p>
                    EMPLOYEE REPORT
                </p>
                <span class="material-symbols-outlined icon-right">
                    keyboard_arrow_right
                </span>
            </a>
        </li>
        @endif
    </ul>
</nav>
