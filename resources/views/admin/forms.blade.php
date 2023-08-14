@extends('admin.layouts.adminlayout')

@section('pageContent')
    {{-- @dd($data) --}}
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">forms</h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">form</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->
            <!-- Start:: row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">Input Types</div>
                        </div>
                        <div class="card-body">
                            <div class="row gy-4">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <p class="mb-2 text-muted">Basic Input:</p>
                                    <input type="text" class="form-control" id="input" />
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"><label for="input-label"
                                        class="form-label">Form Input With Label</label> <input type="text"
                                        class="form-control" id="input-label" /></div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-placeholder" class="form-label">Form Input With
                                        Placeholder</label> <input type="text" class="form-control"
                                        id="input-placeholder" placeholder="Placeholder" />
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"><label for="input-text"
                                        class="form-label">Type Text</label> <input type="text" class="form-control"
                                        id="input-text" placeholder="Text" /></div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-number" class="form-label">Type Number</label> <input type="number"
                                        class="form-control" id="input-number" placeholder="Number" />
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-password" class="form-label">Type Password</label> <input
                                        type="password" class="form-control" id="input-password" placeholder="Password" />
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-email" class="form-label">Type Email</label> <input type="email"
                                        class="form-control" id="input-email" placeholder="Email@xyz.com" />
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-tel" class="form-label">Type Tel</label> <input type="tel"
                                        class="form-control" id="input-tel" placeholder="+1100-2031-1233" />
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"><label for="input-date"
                                        class="form-label">Type Date</label> <input type="date" class="form-control"
                                        id="input-date" /></div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"><label for="input-week"
                                        class="form-label">Type Week</label> <input type="week" class="form-control"
                                        id="input-week" /></div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"><label for="input-month"
                                        class="form-label">Type Month</label> <input type="month" class="form-control"
                                        id="input-month" /></div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"><label for="input-time"
                                        class="form-label">Type Time</label> <input type="time" class="form-control"
                                        id="input-time" /></div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-datetime-local" class="form-label">Type datetime-local</label>
                                    <input type="datetime-local" class="form-control" id="input-datetime-local" />
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-search" class="form-label">Type Search</label> <input
                                        type="search" class="form-control" id="input-search" placeholder="Search" />
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"><label for="input-submit"
                                        class="form-label">Type Submit</label> <input type="submit" class="form-control"
                                        id="input-submit" value="Submit" /></div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"><label for="input-reset"
                                        class="form-label">Type Reset</label> <input type="reset" class="form-control"
                                        id="input-reset" /></div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-button" class="form-label">Type Button</label> <input
                                        type="button" class="form-control btn btn-primary" id="input-button"
                                        value="Button" />
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-xl-3"><label class="form-label">Type Color</label> <input
                                                class="form-control form-input-color" type="color" value="#136bd0" />
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="form-check">
                                                <p class="mb-3 px-0 text-muted">Type Checkbox</p>
                                                <input class="form-check-input ms-2" type="checkbox" value=""
                                                    checked="" />
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-check">
                                                <p class="mb-3 px-0 text-muted">Type Radio</p>
                                                <input class="form-check-input ms-2" type="radio" checked="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"><label for="input-file"
                                        class="form-label">Type File</label> <input class="form-control" type="file"
                                        id="input-file" /></div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"><label class="form-label">Type
                                        Url</label> <input class="form-control" type="url" name="website"
                                        placeholder="http://example.com/" /></div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-disabled" class="form-label">Type Disabled</label> <input
                                        type="text" id="input-disabled" class="form-control"
                                        placeholder="Disabled input" disabled="" />
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-readonlytext" class="form-label">Input Readonly Text</label>
                                    <input type="text" readonly="" class="form-control-plaintext"
                                        id="input-readonlytext" value="email@example.com" />
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="disabled-readonlytext" class="form-label">Disabled Readonly
                                        Input</label>
                                    <input class="form-control" type="text" value="Disabled readonly input"
                                        id="disabled-readonlytext" aria-label="Disabled input example" disabled=""
                                        readonly="" />
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Type Readonly Input</label> <input class="form-control"
                                        type="text" value="Readonly input here..." aria-label="readonly input example"
                                        readonly="" />
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"><label for="text-area"
                                        class="form-label">Textarea</label>
                                    <textarea class="form-control" id="text-area" rows="1"></textarea>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-DataList" class="form-label">Datalist example</label> <input
                                        class="form-control" list="datalistOptions" id="input-DataList"
                                        placeholder="Type to search..." />
                                    <datalist id="datalistOptions">
                                        <option value="San Francisco"> </option>
                                        <option value="New York"> </option>
                                        <option value="Seattle"> </option>
                                        <option value="Los Angeles"> </option>
                                        <option value="Chicago"> </option>
                                    </datalist>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End:: row-1 -->
            <!-- Start:: row-2 -->
            <h6 class="fw-semibold mb-2">Choices:</h6>
            <div class="row">
                <div class="col-xl-6">
                    <div class="row">

                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h6 class="card-title">Multiple Select</h6>
                                </div>
                                <div class="card-body">
                                    <p class="fw-semibold mb-2">Default</p>
                                    <select class="form-control" data-trigger name="choices-multiple-default"
                                        id="choices-multiple-default" multiple>
                                        <option value="Choice 1" selected>Choice 1</option>
                                        <option value="Choice 2">Choice 4</option>
                                        <option value="Choice 3">Choice 5</option>
                                        <option value="Choice 4" disabled>Choice 6</option>
                                    </select>
                                    <p class="fw-semibold mb-2">With Remove Button</p>
                                    <select class="form-control" name="choices-multiple-remove-button"
                                        id="choices-multiple-remove-button" multiple>
                                        <option value="Choice 1" selected>Choice 1</option>
                                        <option value="Choice 2">Choice 2</option>
                                        <option value="Choice 3">Choice 3</option>
                                        <option value="Choice 4">Choice 4</option>
                                    </select>
                                    <p class="fw-semibold mb-2">Option groups</p>
                                    <select class="form-control" name="choices-multiple-groups"
                                        id="choices-multiple-groups" multiple>
                                        <option value="">Choose a city</option>
                                        <optgroup label="UK">
                                            <option value="London">London</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Liverpool">Liverpool</option>
                                        </optgroup>
                                        <optgroup label="FR">
                                            <option value="Paris">Paris</option>
                                            <option value="Lyon">Lyon</option>
                                            <option value="Marseille">Marseille</option>
                                        </optgroup>
                                        <optgroup label="DE" disabled>
                                            <option value="Hamburg">Hamburg</option>
                                            <option value="Munich">Munich</option>
                                            <option value="Berlin">Berlin</option>
                                        </optgroup>
                                        <optgroup label="US">
                                            <option value="New York">New York</option>
                                            <option value="Washington" disabled>Washington</option>
                                            <option value="Michigan">Michigan</option>
                                        </optgroup>
                                        <optgroup label="SP">
                                            <option value="Madrid">Madrid</option>
                                            <option value="Barcelona">Barcelona</option>
                                            <option value="Malaga">Malaga</option>
                                        </optgroup>
                                        <optgroup label="CA">
                                            <option value="Montreal">Montreal</option>
                                            <option value="Toronto">Toronto</option>
                                            <option value="Vancouver">Vancouver</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Passing Through Options</div>
                                </div>
                                <div class="card-body"><input class="form-control" id="choices-text-preset-values"
                                        type="text" value="three" placeholder="This is a placeholder" /></div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Options added via config with no search</div>
                                </div>
                                <div class="card-body">
                                    <select class="form-control" name="choices-single-no-search"
                                        id="choices-single-no-search">
                                        <option value="0">Zero</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Basic Select2</div>
                                </div>
                                <div class="card-body">
                                    <select class="form-select" id="basic-usage" data-placeholder="Choose one thing">
                                        <option></option>
                                        <option>Reactive</option>
                                        <option>Solution</option>
                                        <option>Conglomeration</option>
                                        <option>Algoritm</option>
                                        <option>Holistic</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Email Address Only</div>
                                </div>
                                <div class="card-body"><input class="form-control" id="choices-text-email-filter"
                                        type="text" placeholder="This is a placeholder" /></div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">Passing Unique Values</div>
                                </div>
                                <div class="card-body"><input class="form-control" id="choices-text-unique-values"
                                        type="text" value="child-1, child-2" placeholder="This is a placeholder" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-2-->
            <!-- Start:: row-3 editor -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title">Quill Snow Editor</div>
                        </div>
                        <div class="card-body">
                            <div id="editor">
                                typing here
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end:: row-3 editor -->

        </div>
    </div>
    <!-- End::app-content -->
@endsection
