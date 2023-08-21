@extends('admin.layouts.adminlayout')

@section('pageContent')
    {{-- @dd($data) --}}
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">Pages</h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">FrontEnd</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pages</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->
            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">Pages Table</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-nowrap table-bordered">
                                    <thead class="table-warning">
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">name</th>
                                            <th scope="col">status</th>
                                            <th scope="col">actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pages as $item)
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">{{ $item->id }}</div>
                                                </th>
                                                <td><span class="badge bg-success-transparent">{{ $item->name }}</span>
                                                </td>
                                                <td><span class="badge bg-outline-primary">{{ $item->status }}</span>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a href="{{ route('dashboard.page.show', ['page' => $item->id]) }}"
                                                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill">
                                                            <i class="fe fe-eye"></i></a>
                                                        <a href="{{ route('dashboard.page.edit', ['page' => $item->id]) }}"
                                                            class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                                            <i class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- End::row-1 -->
        </div>
    </div>
    <!-- End::app-content -->
@endsection
