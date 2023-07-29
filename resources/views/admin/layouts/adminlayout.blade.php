<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>
    <title>@yield('title','Almas Arabic Pack')</title>
    @include('admin.partials.meta')
    @include('admin.partials.headScripts')
    @include('admin.partials.headStyles')
</head>

<body>
    <div class="page">
        <!-- app-header -->
        @include('admin.partials.header')
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        @include('admin.partials.sidebar')
        <!-- End::app-sidebar -->
        <!-- Start::app-content -->
        @yield('pageContent')
        <!-- End::app-content -->
        <!-- model -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="input-group">
                            <a href="#" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                            <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username" />

                        </div>
                        <div class="mt-4">
                            <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p>
                            <span class="search-tags">
                                <i class="fe fe-user me-2"></i>People<a href="#" class="tag-addon"><i class="fe fe-x"></i></a>
                            </span>
                            <span class="search-tags">
                                <i class="fe fe-file-text me-2"></i>Product<a href="#" class="tag-addon"><i class="fe fe-x"></i></a>
                            </span>
                            <span class="search-tags">
                                <i class="fe fe-align-left me-2"></i>Articles<a href="#" class="tag-addon"><i class="fe fe-x"></i></a>
                            </span>
                            <span class="search-tags">
                                <i class="fe fe-server me-2"></i>Offerds<a href="#" class="tag-addon"><i class="fe fe-x"></i></a>
                            </span>
                        </div>
                        <div class="my-4">
                            <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                                <a href="#"><span>Notifications</span></a> <a class="ms-auto lh-1" href="#" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                            </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                                <a href="#"><span>Alerts</span></a> <a class="ms-auto lh-1" href="#" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                            </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                                <a href="#"><span>Mail</span></a> <a class="ms-auto lh-1" href="#" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group ms-auto"><button class="btn btn-sm btn-primary-light">Search</button>
                            <button class="btn btn-sm btn-primary">Clear Recents</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Start -->
        @include('admin.partials.footer')
        <!-- Footer End -->
    </div>
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    @include('admin.partials.footerScripts')
</body>

</html>