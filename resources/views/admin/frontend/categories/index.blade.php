@extends('admin.layouts.adminlayout')

@section('pageContent')
    {{-- @dd($data[0]) --}}
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">
            @if ($errors->all() || session()->has('message'))
                <div class="row mt-2">
                    <div class="col-xl-6 mt-auto"></div>
                    <div class="col-xl-6">
                        <div class="card-body">
                            @if ($errors->all())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-primary rounded-pill alert-dismissible fade show">
                                        {{ $error }}
                                        <button type="button" class="btn-close custom-close" data-bs-dismiss="alert"
                                            aria-label="Close"><i class="bi bi-x"></i></button>
                                    </div>
                                @endforeach
                            @endif
                            @if (session()->has('message'))
                                <div class="alert alert-primary rounded-pill alert-dismissible fade show">
                                    {{ session()->get('message') }}
                                    <button type="button" class="btn-close custom-close" data-bs-dismiss="alert"
                                        aria-label="Close"><i class="bi bi-x"></i></button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">Categories</h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
                            <div class="card-title">Categories Table</div>
                            <a href="{{ route('dashboard.categories.create') }}" class="btn btn-primary">Add Category</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if (count($data) > 0)
                                    <table class="table text-nowrap table-bordered">
                                        <thead class="table-warning">
                                            <tr>
                                                <th scope="col">category_name</th>
                                                <th scope="col">slug</th>
                                                <th scope="col">short_description</th>
                                                {{-- <th scope="col">usage</th>
                                                <th scope="col">type</th>
                                                <th scope="col">created_by</th> --}}
                                                <th scope="col">parent_id</th>
                                                <th scope="col">status</th>
                                                <th scope="col">is_active</th>
                                                <th scope="col">actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr id="{{ 'row' . $item->id }}">
                                                    <th scope="row">
                                                        {{ $item->category_name }}
                                                    </th>
                                                    <td><span
                                                            class="badge bg-success-transparent">{{ $item->slug }}</span>
                                                    </td>
                                                    <td><span
                                                            class="badge bg-outline-primary">{{ $item->short_description }}</span>
                                                    </td>
                                                    {{-- <td><span class="badge bg-outline-primary">{{ $item->usage }}</span>
                                                    </td>
                                                    <td><span class="badge bg-outline-primary">{{ $item->type }}</span>
                                                    </td>
                                                    <td><span
                                                            class="badge bg-outline-primary">{{ $item->created_by }}</span>
                                                    </td> --}}
                                                    <td><span
                                                            class="badge bg-outline-primary">{{ $item->parent->category_name ?? null }}</span>
                                                    </td>
                                                    <td><span class="badge bg-outline-primary">{{ $item->status }}</span>
                                                    </td>
                                                    <td><span
                                                            class="badge bg-outline-primary">{{ $item->is_active }}</span>
                                                    </td>

                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            {{-- <a href="{{ route('dashboard.tags.show', ['tag' => $item->id]) }}"
                                                                class="btn btn-icon btn-sm btn-success-transparent rounded-pill">
                                                                <i class="fe fe-eye"></i></a> --}}
                                                            <a class="btn btn-icon btn-sm btn-danger-transparent rounded-pill delete-category"
                                                                data-category-id="{{ $item->id }}" href="#">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                            <a href="{{ route('dashboard.categories.edit', ['category' => $item->id]) }}"
                                                                class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                                                <i class="ri-edit-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    No Category until now
                                @endif

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

@section('footerscript')
    <script>
        const deleteLinks = document.querySelectorAll('.delete-category');

        deleteLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const categoryId = this.getAttribute('data-category-id');
                if (confirm('Are you sure you want to delete this Category?')) {
                    fetch(`/dashboard/categories/${categoryId}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json',
                                'Content-Type': 'application/json',
                            },
                        })
                        .then(response => response.json())
                        .then(data => {
                            // Handle response as needed, e.g., show a success message
                            location.reload()
                            document.getElementById("row" + categoryId).remove();
                            // console.log(data);
                        })
                        .catch(error => {
                            // Handle error, e.g., show an error message
                            // console.error('error');
                        });
                }
            });
        });
    </script>
@endsection
