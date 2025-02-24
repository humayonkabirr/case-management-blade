        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>

            <nav id="sidebar">

                <ul class="flex-row text-center navbar-nav theme-brand">
                    <li class="nav-item theme-logo">
                        <a href="{{ route('admin.index') }}">
                            <img src="{{ asset('assets/logo.png') }}" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="{{ route('admin.index') }}" class="nav-link"> Dashboard </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="accordionExample">

                    <li class="menu  {{ __isActive('admin.index') }}">
                        <a href="{{ route('admin.index') }}" aria-expanded="true" class="dropdown-toggle">
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

                    <li class="menu {{ __isActive(['admin.role.create', 'admin.role.index']) }}">
                        <a href="#role" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                                    <path
                                        d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                    </path>
                                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                </svg>
                                <span>Role Manage</span>
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
                        <ul class="collapse submenu list-unstyled {{ __isActive(['admin.role.create', 'admin.role.index'], 'show') }}"
                            id="role" data-parent="#accordionExample">
                            <li class="{{ __isActive('admin.role.index') }}">
                                <a href="{{ route('admin.role.index') }}"> Role Manage </a>
                            </li>
                            <li class="{{ __isActive('admin.index') }}">
                                <a href="javascript:void(0);"> Permission Manage </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ __isActive(['admin.user.create', 'admin.user.index']) }}">
                        <a href="#userManage" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span>User Manage</span>
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
                        <ul class="collapse submenu list-unstyled {{ __isActive(['admin.user.create', 'admin.user.index'], 'show') }}"
                            id="userManage" data-parent="#accordionExample">
                            <li class="{{ __isActive('admin.user.create') }}">
                                <a href="{{ route('admin.user.create') }}"> User Add </a>
                            </li>
                            <li class="{{ __isActive('admin.user.index') }}">
                                <a href="{{ route('admin.user.index') }}"> User List </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ __isActive(['admin.case-type.create', 'admin.case-type.index']) }}">
                        <a href="#caseTypeManage" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span>Case Type Manage</span>
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
                        <ul class="collapse submenu list-unstyled {{ __isActive(['admin.case-type.create', 'admin.case-type.index'], 'show') }}"
                            id="caseTypeManage" data-parent="#accordionExample">
                            <li class="{{ __isActive('admin.case-type.create') }}">
                                <a href="{{ route('admin.case-type.create') }}"> Case Type Add </a>
                            </li>
                            <li class="{{ __isActive('admin.case-type.index') }}">
                                <a href="{{ route('admin.case-type.index') }}"> Case Type List </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ __isActive(['admin.court.create', 'admin.court.index']) }}">
                        <a href="#courtManage" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span>Court Manage</span>
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
                        <ul class="collapse submenu list-unstyled {{ __isActive(['admin.court.create', 'admin.court.index'], 'show') }}"
                            id="courtManage" data-parent="#accordionExample">
                            <li class="{{ __isActive('admin.court.create') }}">
                                <a href="{{ route('admin.court.create') }}"> Court Add </a>
                            </li>
                            <li class="{{ __isActive('admin.court.index') }}">
                                <a href="{{ route('admin.court.index') }}"> Court List </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ __isActive(['admin.organization.create', 'admin.organization.index']) }}">
                        <a href="#organizationManage" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span>Organization Manage</span>
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
                        <ul class="collapse submenu list-unstyled {{ __isActive(['admin.organization.create', 'admin.organization.index'], 'show') }}"
                            id="organizationManage" data-parent="#accordionExample">
                            <li class="{{ __isActive('admin.organization.create') }}">
                                <a href="{{ route('admin.organization.create') }}"> Organization Add </a>
                            </li>
                            <li class="{{ __isActive('admin.organization.index') }}">
                                <a href="{{ route('admin.organization.index') }}"> Organization List </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ __isActive(['admin.judge.create', 'admin.judge.index']) }}">
                        <a href="#judgeManage" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span>Judge Manage</span>
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
                        <ul class="collapse submenu list-unstyled {{ __isActive(['admin.judge.create', 'admin.judge.index'], 'show') }}"
                            id="judgeManage" data-parent="#accordionExample">
                            <li class="{{ __isActive('admin.judge.create') }}">
                                <a href="{{ route('admin.judge.create') }}"> Judge Add </a>
                            </li>
                            <li class="{{ __isActive('admin.judge.index') }}">
                                <a href="{{ route('admin.judge.index') }}"> Judge List </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ __isActive(['admin.advocate.create', 'admin.advocate.index']) }}">
                        <a href="#advocateManage" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span>Advocate Manage</span>
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
                        <ul class="collapse submenu list-unstyled {{ __isActive(['admin.advocate.create', 'admin.advocate.index'], 'show') }}"
                            id="advocateManage" data-parent="#accordionExample">
                            <li class="{{ __isActive('admin.advocate.create') }}">
                                <a href="{{ route('admin.advocate.create') }}"> Advocate Add </a>
                            </li>
                            <li class="{{ __isActive('admin.advocate.index') }}">
                                <a href="{{ route('admin.advocate.index') }}"> Advocate List </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ __isActive(['admin.case.create', 'admin.case.index']) }}">
                        <a href="#caseManage" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span>Case Manage</span>
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
                        <ul class="collapse submenu list-unstyled {{ __isActive(['admin.case.create', 'admin.case.index'], 'show') }}"
                            id="caseManage" data-parent="#accordionExample">
                            <li class="{{ __isActive('admin.case.create') }}">
                                <a href="{{ route('admin.case.create') }}"> Case Add </a>
                            </li>
                            <li class="{{ __isActive('admin.case.index') }}">
                                <a href="{{ route('admin.case.index') }}"> Case List </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ __isActive(['admin.organization.create', 'admin.organization.index']) }}">
                        <a href="#generalSetting" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span>General Setting</span>
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
                        <ul class="collapse submenu list-unstyled {{ __isActive(['admin.organization.create', 'admin.organization.index'], 'show') }}"
                            id="generalSetting" data-parent="#accordionExample">
                            <li class="{{ __isActive('admin.organization.create') }}">
                                <a href="{{ route('admin.organization.create') }}">Site Manage </a>
                            </li>
                            <li class="{{ __isActive('admin.organization.index') }}">
                                <a href="{{ route('admin.organization.index') }}"> Case List </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>

        </div>
        <!--  END SIDEBAR  -->
