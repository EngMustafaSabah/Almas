@extends('admin.layouts.adminlayout')

@section('pageContent')
    {{-- @dd($data) --}}
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">Section</h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Section</li>
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
                            <div class="card-title">Section Tables</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-nowrap table-bordered">
                                    <thead class="table-warning">
                                        <tr>
                                            <th scope="col">name</th>
                                            <th scope="col">title</th>
                                            <th scope="col">second title</th>
                                            {{-- <th scope="col">section_content</th> --}}
                                            {{-- <th scope="col">page_id</th> --}}
                                            <th scope="col">section_order</th>
                                            {{-- <th scope="col">parent_id</th> --}}
                                            <th scope="col">status</th>
                                            <th scope="col">url</th>
                                            <th scope="col">actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <th scope="row">
                                                    <div class="d-flex align-items-center">
                                                        {{ $item->name }}
                                                    </div>
                                                </th>
                                                <td><span class="badge bg-success-transparent">{{ $item->title }}</span>
                                                </td>
                                                <td><span class="badge bg-outline-primary">{{ $item->second_title }}</span>
                                                </td>
                                                {{-- <td><span
                                                        class="badge bg-outline-primary">{{ $item->section_content }}</span>
                                                </td> --}}
                                                {{-- <td><span class="badge bg-outline-primary">{{$item->page_id}}</span></td> --}}
                                                {{-- <td><span class="badge bg-outline-primary">{{ $item->page_id->page()->name }}</span></td> --}}
                                                <td><span class="badge bg-outline-primary">{{ $item->section_order }}</span>
                                                </td>
                                                <td><span class="badge bg-outline-primary">{{ $item->status }}</span></td>
                                                <td><span class="badge bg-outline-primary">{{ $item->url }}</span></td>
                                                <td><span class="badge bg-outline-primary"></span>actions</td>
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
