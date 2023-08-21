@extends('admin.layouts.adminlayout')

@section('pageContent')
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">Data Table </h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Data Table</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->
            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xxl-9 col-xl-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="table-responsive">
                                <table id="example" class="display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th width="18%">Start date</th>
                                            <th>Salary</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- End::row-1 -->
        </div>
    </div>
@endsection
