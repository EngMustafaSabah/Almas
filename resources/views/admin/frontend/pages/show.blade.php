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
                            <li class="breadcrumb-item"><a>FrontEnd</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page.index') }}">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $page->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->
            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        {{-- page info --}}
                        <div class="card-header justify-content-between">
                            <div class="card-title">{{ $page->name }} {{ __('Page') }} {{ __('Info') }}</div>
                        </div>
                        <div class="card-body">
                            <div class="card custom-card products-navigation-card">
                                <div class="card-body p-0">
                                    <div class="p-4 border-bottom">
                                        <div class="px-2 py-3 pb-0">
                                            <div class="form-check mb-2">
                                                <label class="form-check-label" for="electronics">{{ __('Page Name Is:') }}
                                                    {{ $page->name }}</label>
                                                {{-- <span class="badge bg-light text-muted float-end">2,712</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- sections table --}}
                        <div class="card-header justify-content-between">
                            <div class="card-title">Sections Table For "{{ $page->name }}" Page</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-nowrap table-bordered">
                                    <thead class="table-warning">
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">name</th>
                                            <th scope="col">title</th>
                                            <th scope="col">second title</th>
                                            <th scope="col">section order</th>
                                            <th scope="col">parent section</th>
                                            <th scope="col">status</th>
                                            <th scope="col">actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($page->sections as $item)
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">{{ $item->id }}</div>
                                                </th>

                                                <td>
                                                    <span class="badge bg-success-transparent">{{ $item->name }}</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-success-transparent">{{ $item->title }}</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge bg-success-transparent">{{ Str::limit($item->second_title, 25) }}</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge bg-outline-primary">{{ $item->section_order }}</span>
                                                <td>
                                                    <span class="badge bg-outline-primary">{{ $item->parent_id }}</span>
                                                <td>
                                                    <span class="badge bg-outline-primary">{{ $item->status }}</span>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        {{-- <a href="{{ route('page.show', ['page' => $item->id]) }}"
                                                            class="btn btn-icon btn-sm btn-success-transparent rounded-pill">
                                                            <i class="fe fe-eye"></i></a> --}}
                                                        <a href="{{ route('dashboard.section.edit', ['section' => $item->id]) }}"
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
