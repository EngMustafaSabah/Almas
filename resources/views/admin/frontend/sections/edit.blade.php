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
                <h1 class="page-title fw-semibold fs-18 mb-0">Edit Section</h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page.index') }}">Pages</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('dashboard.page.show', ['page' => $section->page->id]) }}">{{ $section->page->name }}
                                    Page</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Section</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->
            <!-- Start:: row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <form action="{{ route('dashboard.section.update', ['section' => $section->id]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Edit Section related to "{{ $section->page->name }}" Page</div>
                                {{-- <input type="submit" class="btn btn-primary" value="Save" /> --}}
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            <div class="card-body">
                                <div class="row gy-4">
                                    @if ($section->hasTranslation('title', 'en', false))
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <p class="mb-2 text-muted">Title
                                                {{ $section->hasTranslation('title', 'ar', false) ? 'En:' : '' }}
                                            </p>
                                            <input name="title_en" class="form-control" id="title-en"
                                                value="{{ $section->getTranslation('title', 'en') }}" />
                                        </div>
                                    @endif
                                    @if ($section->hasTranslation('title', 'ar', false))
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <p class="mb-2 text-muted">Title AR:</p>
                                            <input name="title_ar" class="form-control" id="title-ar"
                                                value="{{ $section->getTranslation('title', 'ar') }}" />
                                        </div>
                                    @endif
                                    @if ($section->hasTranslation('second_title', 'en', false))
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <p class="mb-2 text-muted">
                                                Second Title
                                                {{ $section->hasTranslation('second_title', 'ar', false) ? 'En:' : '' }}
                                            </p>
                                            <input name="second_title_en" class="form-control"
                                                value="{{ $section->getTranslation('second_title', 'en') }}"
                                                id="second-title-en" />
                                        </div>
                                    @endif
                                    @if ($section->hasTranslation('second_title', 'ar', false))
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <p class="mb-2 text-muted">Second Title AR:</p>
                                            <input name="second_title_ar" class="form-control"
                                                value="{{ $section->getTranslation('second_title', 'ar') }}"
                                                id="second-title-ar" />
                                        </div>
                                    @endif
                                    @if ($section->hasTranslation('section_content', 'en', false))
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"><label for="text-area"
                                                class="form-label">Content
                                                {{ $section->hasTranslation('section_content', 'ar', false) ? 'En:' : '' }}
                                            </label>
                                            <textarea name="section_content_en" class="form-control" id="text-area" rows="6">
                                                {!! $section->getTranslation('section_content', 'en') !!}
                                            </textarea>
                                        </div>
                                    @endif
                                    @if ($section->hasTranslation('section_content', 'ar', false))
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="text-area" class="form-label">Content AR:</label>
                                            <textarea name="section_content_ar" class="form-control" id="text-area" rows="6">
                                                {!! $section->getTranslation('section_content', 'ar') !!}
                                            </textarea>
                                        </div>
                                    @endif
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
