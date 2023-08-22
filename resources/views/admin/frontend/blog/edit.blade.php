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
                <h1 class="page-title fw-semibold fs-18 mb-0">Update Post</h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.blogs.index') }}">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Post</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->
            <!-- Start:: row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <form action="{{ route('dashboard.blogs.update', ['blog' => $blog->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Update Post</div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                            <div class="card-body">
                                <div class="row gy-4">
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <p class="mb-2 text-muted">title En: </p>
                                        <input value="{{ $blog->getTranslation('title', 'en', false) }}" name="title_en"
                                            class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <p class="mb-2 text-muted">Title AR:</p>
                                        <input value="{{ $blog->getTranslation('title', 'ar', false) }}" name="title_ar"
                                            class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <p class="mb-2 text-muted">image:</p>
                                        <input type="file" name="image" class="form-control" />
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" name="status"><label for="text-area"
                                            class="form-label">Status </label>
                                        <select class="form-select" name="status" id="basic-usage"
                                            data-placeholder="Choose one Status">
                                            <option value=""> Choose Status </option>
                                            @foreach (App\Enums\BlogStatusEnum::cases() as $val)
                                                <option @if ($blog->status === $val->value) selected @endif
                                                    value="{{ $val->value }}">
                                                    {{ $val->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" name="status"><label for="text-area"
                                            class="form-label">Category </label>
                                        <select class="form-select" name="category" id="basic-usage"
                                            data-placeholder="Choose one Status">
                                            <option value=""> Choose Category </option>
                                            @foreach ($categories as $val)
                                            
                                                <option @if ($blog->categories??[0]->id === $val->id) selected @endif
                                                    value="{{ $val->id }}">
                                                    {{ $val->category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12" name="status"><label for="text-area"
                                            class="form-label">Tags </label>
                                        <select class="form-control" name="tags[]" id="choices-multiple-remove-button"
                                            multiple>
                                            <option value=""> Choose Tags </option>
                                            @foreach ($tags as $val)
                                                <option {{ in_array($val->id, $blog->tags->pluck('id')->toArray()) ? 'selected' : '' }}
                                                    value="{{ $val->id }}">
                                                {{ $val->tag_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"><label for="text-area"
                                            class="form-label">short_description En:
                                        </label>
                                        <textarea name="short_content_en" class="form-control" id="text-area" rows="6">{{ $blog->getTranslation('short_content', 'en', false) }}</textarea>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"><label for="text-area"
                                            class="form-label">short_description Ar:
                                        </label>
                                        <textarea name="short_content_ar" class="form-control" id="text-area" rows="6">{{ $blog->getTranslation('short_content', 'ar', false) }}</textarea>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"><label for="text-area"
                                            class="form-label">description_en En:
                                        </label>
                                        <textarea name="content_en" class="form-control" id="text-area" rows="6">{{ $blog->getTranslation('content', 'en', false) }}</textarea>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"><label for="text-area"
                                            class="form-label">description_en Ar:
                                        </label>
                                        <textarea name="content_ar" class="form-control" id="text-area" rows="6">{{ $blog->getTranslation('content', 'ar', false) }}</textarea>
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
