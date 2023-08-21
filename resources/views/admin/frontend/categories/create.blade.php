@extends('admin.layouts.adminlayout')

@section('pageContent')
    {{-- @dd($data) --}}
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
                <h1 class="page-title fw-semibold fs-18 mb-0">Create Category</h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.categories.index') }}">Categories</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->
            <!-- Start:: row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <form action="{{ route('dashboard.categories.store') }}" method="POST">
                        @csrf
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Create Category</div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                            <div class="card-body">
                                <div class="row gy-4">
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="mb-2 text-muted">Category name En: </p>
                                        <input value="{{ old('category_name_en') }}" name="category_name_en" class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <p class="mb-2 text-muted">Category name AR:</p>
                                        <input value="{{ old('category_name_ar') }}" name="category_name_ar" class="form-control" />
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" name="status"><label for="text-area"
                                            class="form-label">Status </label>
                                        <select class="form-select" name="status" id="basic-usage"
                                            data-placeholder="Choose one thing">
                                            <option value=""> Choose Status </option>
                                            @foreach (App\Enums\CategoryStatusEnum::cases() as $val)
                                                <option value="{{ $val->value }}">
                                                    {{ $val->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12"><label for="text-area"
                                            class="form-label">parent_id</label>
                                        <select class="form-select" id="basic-usage" data-placeholder="Choose one thing"
                                            name="parent_id">
                                            <option value="">Choose Parent Category</option>
                                            @foreach ($data as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->getTranslation('category_name', 'en') }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"><label for="text-area"
                                            class="form-label">short_description En:
                                        </label>
                                        <textarea name="short_description_en" class="form-control" id="text-area" rows="2">{{ old('short_description_en') }}</textarea>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"><label for="text-area"
                                            class="form-label">short_description Ar:
                                        </label>
                                        <textarea name="short_description_ar" class="form-control" id="text-area" rows="2">{{ old('short_description_ar') }}</textarea>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"><label for="text-area"
                                            class="form-label">description_en En:
                                        </label>
                                        <textarea name="description_en" class="form-control" id="text-area" rows="6">{{ old('description_en') }}</textarea>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"><label for="text-area"
                                            class="form-label">description_en Ar:
                                        </label>
                                        <textarea name="description_ar" class="form-control" id="text-area" rows="6">{{ old('description_ar') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End::app-content -->
@endsection
