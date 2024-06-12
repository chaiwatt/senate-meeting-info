<div class="sidebar">
    <nav class="mt-2">
        <ul class="nav-slide text-center gap-3" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('setting')}}" class="nav-link {{ request()->is('setting') ? 'current-page' : '' }}">
                    <span class="material-symbols-outlined" >
                        dashboard
                    </span>
                    <p>
                        แดชบอร์ด
                    </p>
                </a>
            </li>
            <li class="nav-item" id="main-sub-menu">
                <a href="#" class="nav-link {{ request()->is('setting/organization*') ? 'current-page' : '' }}" id="open-sub-menu">
                    <span class="material-symbols-outlined" >
                        location_city
                    </span>
                    <p>
                        ผู้ใช้งาน
                    </p>
                    <span class="material-symbols-outlined icon-right">
                        keyboard_arrow_right
                    </span>
                </a>
                <ul class="nav nav-treeview" id="sub-menu">
                    <li class="nav-item">
                        <a href="{{route('setting.user')}}"
                        {{-- <a href="" --}}
                            class="nav-link {{ request()->is('setting/organization/employee*') ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="4" fill="#D0D5DD"/>
                            </svg>
                            <p>ผู้ใช้งาน</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ request()->is('setting/access*', 'setting/assignment*') ? 'menu-open' : '' }}" id="main-sub-menu">
                <a href="#" class="nav-link {{ request()->is('setting/access*', 'setting/assignment*') ? 'current-page' : '' }}" id="open-sub-menu">
                    <span class="material-symbols-outlined" >
                        person_check
                    </span>
                    <p>
                        การใช้งาน
                    </p>
                    <span class="material-symbols-outlined icon-right">
                        keyboard_arrow_right
                    </span>
                </a>
                <ul class="nav nav-treeview" id="sub-menu">
                    <li class="nav-item">
                        <a href="{{route('setting.access.role')}}"
                        {{-- <a href="" --}}
                            class="nav-link {{ request()->is('setting/access/role*') ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="4" fill="#D0D5DD"/>
                            </svg>
                            <p>สิทธิ์การใช้งาน</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ request()->is('setting/general*') ? 'menu-open' : '' }}" id="main-sub-menu"> 
                <a href="#" class="nav-link {{ request()->is('setting/general*') ? 'current-page' : '' }}" id="open-sub-menu">
                    <span class="material-symbols-outlined" >
                        settings
                    </span>
                    <p>
                        ทั่วไป
                    </p>
                    <span class="material-symbols-outlined icon-right">
                        keyboard_arrow_right
                    </span>
                </a>
                <ul class="nav nav-treeview" id="sub-menu">  
                    <li class="nav-item">
                        <a href=""
                            class="nav-link ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="4" fill="#D0D5DD"/>
                            </svg>
                            <p>ฟิลเตอร์การค้นหา</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>