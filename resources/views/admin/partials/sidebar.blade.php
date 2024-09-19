        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>

            <nav id="sidebar">

                <ul class="flex-row text-center navbar-nav theme-brand">
                    <li class="nav-item theme-logo">
                        <a href="/">
                            <img src="{{ asset('assets/img/90x90.jpg') }}" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="/" class="nav-link"> Admin </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="accordionExample">

                    @can('dashboard.index')
                        <li class="menu active">
                            <a href="javascript:void(0);" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                    <span>Dashboard</span>
                                </div>
                            </a>
                        </li>
                    @endcan

                    @canany(['role.index', 'role.create'])
                        <li class="menu {{ Route::is('admin.role.*') ? 'active' : '' }}">
                            <a href="#submenu" data-toggle="collapse"
                                aria-expanded="{{ Route::is('admin.role.*') ? 'true' : 'false' }}"
                                class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                                        <path
                                            d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                        </path>
                                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                    </svg>
                                    <span> Authentication Manage</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled {{ Route::is('admin.role.*') ? 'show' : '' }}"
                                id="submenu" data-parent="#accordionExample">
                                @can('role.create')
                                    <li class="{{ Route::is('admin.role.create') ? 'active' : '' }}">
                                        <a href="{{ route('admin.role.create') }}"> Add Role</a>
                                    </li>
                                @endcan
                                @can('role.index')
                                    <li class="{{ Route::is('admin.role.index') ? 'active' : '' }}">
                                        <a href="{{ route('admin.role.index') }}"> Roles List </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcanany


                </ul>
            </nav>

        </div>
        <!--  END SIDEBAR  -->
