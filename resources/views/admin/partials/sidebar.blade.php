<!-- /app-header -->
<!-- Start::app-sidebar -->
<aside class="app-sidebar sticky" id="sidebar">
    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="{{ asset('admin/images/logo22.png') }}" alt="logo" class="desktop-logo" />
            <img src="{{ asset('admin/images/favicon.png') }}" alt="logo" class="toggle-logo" />
            <img src="{{ asset('admin/images/logo22.png') }}" alt="logo" class="desktop-dark" />
            <img src="{{ asset('admin/images/favicon.png') }}" alt="logo" class="toggle-dark" />
        </a>
    </div>
    <!-- End::main-sidebar-header -->
    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">
        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide -->
                <li class="slide">
                    <a href="#" class="side-menu__item active"> <i class="bx bx-home side-menu__icon">
                        </i> <span class="side-menu__label">Dashboard</span> </a>
                </li>
                <!-- End::slide -->
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name"> Pages</span></li>
                <!-- End::slide__category -->
                <!-- Start::slide -->

                <li class="slide has-sub">
                    <a href="#" class="side-menu__item"> <i class="bx bx-layer side-menu__icon"></i> <span
                            class="side-menu__label">
                            All components</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="#"> All components </a></li>
                        <li class="slide"><a href="/dashboard/tables" class="side-menu__item">tables </a></li>
                        <li class="slide"><a href="/dashboard/forms" class="side-menu__item">forms </a></li>
                        <li class="slide"><a href="/dashboard/alert-pagination" class="side-menu__item">Alert &
                                Pagination
                            </a></li>
                        <li class="slide"><a href="/dashboard/cards" class="side-menu__item">Cards </a></li>
                        <li class="slide"><a href="/dashboard/tabs" class="side-menu__item">Tabs & Accordions </a></li>
                    </ul>
                </li>
                <li class="slide has-sub">
                    <a href="#" class="side-menu__item"> <i class="bx bx-layer side-menu__icon"></i> <span
                            class="side-menu__label">
                            Pages & Sections</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                    <ul class="slide-menu child1">
                        {{-- <li class="slide side-menu__label1"><a href="#"> All Pages </a></li> --}}
                        {{-- <li class="slide"><a href="tables.html" class="side-menu__item">Add Page </a></li> --}}

                        <li class="slide">Pages</li>
                        <li class="slide"><a href="{{ route('dashboard.page.index') }}" class="side-menu__item">All
                                Pages
                            </a></li>
                        {{-- <li class="slide"><a href="{{ route('section.create') }}" class="side-menu__item">Add Section
                            </a></li> --}}
                    </ul>
                </li>

                {{-- blog --}}
                <li class="slide has-sub">
                    <a href="#" class="side-menu__item"> <i class="bx bx-layer side-menu__icon"></i> <span
                            class="side-menu__label">
                            Blog</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                    <ul class="slide-menu child1">
                        {{-- <li class="slide side-menu__label1"><a href="#"> All Pages </a></li> --}}
                        {{-- <li class="slide"><a href="tables.html" class="side-menu__item">Add Page </a></li> --}}

                        {{-- <li class="slide">Tags</li> --}}
                        <li class="slide"><a href="{{ route('dashboard.tags.index') }}" class="side-menu__item">All
                                Tags
                            </a></li>
                        <li class="slide"><a href="{{ route('dashboard.categories.index') }}" class="side-menu__item">All
                                Categories
                            </a></li>
                        {{-- <li class="slide">Blog</li> --}}
                        <li class="slide"><a href="{{ route('dashboard.blogs.index') }}" class="side-menu__item">All
                                Blog
                            </a></li>
                        {{-- <li class="slide"><a href="{{ route('section.create') }}" class="side-menu__item">Add Section
                            </a></li> --}}
                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide">
                    <a href="#" class="side-menu__item "> <i class="bx bx-fingerprint side-menu__icon">
                        </i> <span class="side-menu__label">Roles</span> </a>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide">
                    <a href="#" class="side-menu__item "> <i class="ti ti-users side-menu__icon">
                        </i> <span class="side-menu__label">Employees</span> </a>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide">
                    <a href="#" class="side-menu__item "> <i class="bx bx-box side-menu__icon">
                        </i> <span class="side-menu__label">Products</span> </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="#" class="side-menu__item"> <i class="bx bx-layer side-menu__icon"></i> <span
                            class="side-menu__label">
                            All Order</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="#">All Order</a></li>
                        <li class="slide"><a href="#" class="side-menu__item">All Order</a></li>
                        <li class="slide"><a href="#" class="side-menu__item">Requested Order</a></li>
                        <li class="slide"><a href="#" class="side-menu__item">Assigned Order</a></li>
                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide">
                    <a href="#" class="side-menu__item "> <i class="bx bx-party side-menu__icon">
                        </i> <span class="side-menu__label">Offers</span> </a>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide">
                    <a href="#" class="side-menu__item "> <i class="ti ti-user-circle side-menu__icon">
                        </i> <span class="side-menu__label">Vendor Profile</span> </a>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="#" class="side-menu__item"> <i class="bx bx-user side-menu__icon"></i> <span
                            class="side-menu__label">
                            Profile </span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="#"> My Profile </a></li>
                        <li class="slide"><a href="#" class="side-menu__item"> My Profile </a></li>
                        <li class="slide"><a href="#" class="side-menu__item">Change Password </a></li>

                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide">
                    <a href="#" class="side-menu__item "> <i class="bx bx-file side-menu__icon">
                        </i> <span class="side-menu__label">Reports </span> </a>
                </li>
                <!-- End::slide -->
                <!-- Start::slide -->
                <li class="slide">
                    <a href="#" class="side-menu__item "> <i class="ti ti-headset side-menu__icon">
                        </i> <span class="side-menu__label">Support </span> </a>
                </li>
                <!-- End::slide -->
            </ul>
            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </div>
        </nav>
        <!-- End::nav -->
    </div>
    <!-- End::main-sidebar -->
</aside>
<!-- End::app-sidebar -->
