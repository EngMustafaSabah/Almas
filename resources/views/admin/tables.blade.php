@extends('admin.layouts.adminlayout')

@section('pageContent')
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Tables</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tables</li>
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
                        <div class="card-title">Bordered Tables</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-bordered">
                                <thead class="table-warning">
                                    <tr>
                                        <th scope="col">User</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Status2</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                        src="assets/images/faces/13.jpg" alt="img" />
                                                </span>Sukuro Kim
                                            </div>
                                        </th>
                                        <td><span class="badge bg-success-transparent">Active</span></td>
                                        <td><span class="badge bg-outline-primary">Completed</span></td>
                                        <td>kimosukuro@gmail.com</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="#"
                                                    class="btn btn-icon btn-sm btn-success-transparent rounded-pill">
                                                    <i class="fe fe-eye"></i></a>
                                                <a href="#"
                                                    class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                                    <i class="ri-edit-line"></i></a>
                                                <a href="#"
                                                    class="btn btn-icon btn-sm btn-danger-transparent rounded-pill">
                                                    <i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-xs me-2 offline avatar-rounded"> <img
                                                        src="assets/images/faces/6.jpg" alt="img" />
                                                </span>Hasimna
                                            </div>
                                        </th>
                                        <td><span class="badge bg-light text-dark">Inactive</span></td>
                                        <td><span class="badge bg-outline-success">Successful</span></td>
                                        <td>hasimna2132@gmail.com</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="#"
                                                    class="btn btn-icon btn-sm btn-success-transparent rounded-pill">
                                                    <i class="fe fe-eye"></i></a>
                                                <a href="#"
                                                    class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                                    <i class="ri-edit-line"></i></a>
                                                <a href="#"
                                                    class="btn btn-icon btn-sm btn-danger-transparent rounded-pill">
                                                    <i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                        src="assets/images/faces/15.jpg" alt="img" />
                                                </span>Azimo Khan
                                            </div>
                                        </th>
                                        <td><span class="badge bg-success-transparent">Active</span></td>
                                        <td><span class="badge bg-outline-warning">Failed</span></td>
                                        <td>azimokhan421@gmail.com</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="#"
                                                    class="btn btn-icon btn-sm btn-success-transparent rounded-pill">
                                                    <i class="fe fe-eye"></i></a>
                                                <a href="#"
                                                    class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                                    <i class="ri-edit-line"></i></a>
                                                <a href="#"
                                                    class="btn btn-icon btn-sm btn-danger-transparent rounded-pill">
                                                    <i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-xs me-2 online avatar-rounded"> <img
                                                        src="assets/images/faces/5.jpg" alt="img" />
                                                </span>Samantha Julia
                                            </div>
                                        </th>
                                        <td><span class="badge bg-success-transparent">Active</span></td>
                                        <td><span class="badge bg-outline-secondary">Pending</span></td>
                                        <td>julianasams143@gmail.com</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a href="#"
                                                    class="btn btn-icon btn-sm btn-success-transparent rounded-pill">
                                                    <i class="fe fe-eye"></i></a>
                                                <a href="#"
                                                    class="btn btn-icon btn-sm btn-info-transparent rounded-pill">
                                                    <i class="ri-edit-line"></i></a>
                                                <a href="#"
                                                    class="btn btn-icon btn-sm btn-danger-transparent rounded-pill">
                                                    <i class="ri-delete-bin-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- End::row-1 -->
        <!-- Start::row-2-->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Deals Statistics</div>
                        <div class="d-flex flex-wrap gap-2">
                            <div><input class="form-control form-control-sm" type="text" placeholder="Search Here"
                                    aria-label=".form-control-sm example" /></div>
                            <div class="dropdown">
                                <a href="#" class="btn btn-primary btn-sm btn-wave waves-effect waves-light"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="#">New</a></li>
                                    <li><a class="dropdown-item" href="#">Popular</a></li>
                                    <li><a class="dropdown-item" href="#">Relevant</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-hover border table-bordered">
                                <thead class="table-warning">
                                    <tr>
                                        <th scope="row" class="ps-4"><input class="form-check-input"
                                                type="checkbox" id="checkboxNoLabel1" value="" aria-label="..." />
                                        </th>
                                        <th scope="col">Sales Rep</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Mail</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="ps-4"><input class="form-check-input"
                                                type="checkbox" id="checkboxNoLabel2" value="" aria-label="..." />
                                        </th>
                                        <td>
                                            <div class="d-flex align-items-center fw-semibold">
                                                <span class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                        src="assets/images/faces/4.jpg" alt="img" />
                                                </span>Mayor Kelly
                                            </div>
                                        </td>
                                        <td>Manufacture</td>
                                        <td>mayorkelly@gmail.com</td>
                                        <td><span class="badge bg-info-transparent">Germany</span></td>
                                        <td>Sep 15 - Oct 12, 2023</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i
                                                        class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i
                                                        class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-4"><input class="form-check-input"
                                                type="checkbox" id="checkboxNoLabel13" value="" aria-label="..."
                                                checked /></th>
                                        <td>
                                            <div class="d-flex align-items-center fw-semibold">
                                                <span class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                        src="assets/images/faces/15.jpg" alt="img" />
                                                </span>Andrew Garfield
                                            </div>
                                        </td>
                                        <td>Development</td>
                                        <td>andrewgarfield@gmail.com</td>
                                        <td><span class="badge bg-primary-transparent">Canada</span></td>
                                        <td>Apr 10 - Dec 12, 2023</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                        class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                        class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-4"><input class="form-check-input"
                                                type="checkbox" id="checkboxNoLabel4" value="" aria-label="..." />
                                        </th>
                                        <td>
                                            <div class="d-flex align-items-center fw-semibold">
                                                <span class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                        src="assets/images/faces/11.jpg" alt="img" />
                                                </span>Simon Cowel
                                            </div>
                                        </td>
                                        <td>Service</td>
                                        <td>simoncowel234@gmail.com</td>
                                        <td><span class="badge bg-danger-transparent">Europe</span></td>
                                        <td>Sep 15 - Oct 12, 2023</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                        class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                        class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-4"><input class="form-check-input"
                                                type="checkbox" id="checkboxNoLabel5" value="" aria-label="..."
                                                checked /></th>
                                        <td>
                                            <div class="d-flex align-items-center fw-semibold">
                                                <span class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                        src="assets/images/faces/8.jpg" alt="img" />
                                                </span>Mirinda Hers
                                            </div>
                                        </td>
                                        <td>Marketing</td>
                                        <td>mirindahers@gmail.com</td>
                                        <td><span class="badge bg-warning-transparent">USA</span></td>
                                        <td>Apr 14 - Dec 14, 2023</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                        class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                        class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-4"><input class="form-check-input"
                                                type="checkbox" id="checkboxNoLabel3" value="" aria-label="..."
                                                checked /></th>
                                        <td>
                                            <div class="d-flex align-items-center fw-semibold">
                                                <span class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                        src="assets/images/faces/9.jpg" alt="img" />
                                                </span>Jacob Smith
                                            </div>
                                        </td>
                                        <td>Social Plataform</td>
                                        <td>jacobsmith@gmail.com</td>
                                        <td><span class="badge bg-success-transparent">Singapore</span></td>
                                        <td>Feb 25 - Nov 25, 2023</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                        class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                        class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center">
                            <div>Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i></div>
                            <div class="ms-auto">
                                <nav aria-label="Page navigation" class="pagination-style-4">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled"><a class="page-link" href="#"> Prev </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link text-primary" href="#"> next
                                            </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-2 -->
        <!-- Start::row-3-->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Deals Statistics</div>
                        <div class="d-flex flex-wrap gap-2">

                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">Dropdown button</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-hover border table-bordered">
                                <thead class="table-warning">
                                    <tr>
                                        <th scope="row" class="ps-4"><input class="form-check-input"
                                                type="checkbox" id="checkboxNoLabel1" value="" aria-label="..." />
                                        </th>
                                        <th scope="col">Sales Rep</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Mail</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="ps-4"><input class="form-check-input"
                                                type="checkbox" id="checkboxNoLabel2" value="" aria-label="..." />
                                        </th>
                                        <td>
                                            <div class="d-flex align-items-center fw-semibold">
                                                <span class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                        src="assets/images/faces/4.jpg" alt="img" />
                                                </span>Mayor Kelly
                                            </div>
                                        </td>
                                        <td>Manufacture</td>
                                        <td>mayorkelly@gmail.com</td>
                                        <td><span class="badge bg-info-transparent">Germany</span></td>
                                        <td>Sep 15 - Oct 12, 2023</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i
                                                        class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i
                                                        class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-4"><input class="form-check-input"
                                                type="checkbox" id="checkboxNoLabel13" value="" aria-label="..."
                                                checked /></th>
                                        <td>
                                            <div class="d-flex align-items-center fw-semibold">
                                                <span class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                        src="assets/images/faces/15.jpg" alt="img" />
                                                </span>Andrew Garfield
                                            </div>
                                        </td>
                                        <td>Development</td>
                                        <td>andrewgarfield@gmail.com</td>
                                        <td><span class="badge bg-primary-transparent">Canada</span></td>
                                        <td>Apr 10 - Dec 12, 2023</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                        class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                        class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-4"><input class="form-check-input"
                                                type="checkbox" id="checkboxNoLabel4" value="" aria-label="..." />
                                        </th>
                                        <td>
                                            <div class="d-flex align-items-center fw-semibold">
                                                <span class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                        src="assets/images/faces/11.jpg" alt="img" />
                                                </span>Simon Cowel
                                            </div>
                                        </td>
                                        <td>Service</td>
                                        <td>simoncowel234@gmail.com</td>
                                        <td><span class="badge bg-danger-transparent">Europe</span></td>
                                        <td>Sep 15 - Oct 12, 2023</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                        class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                        class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-4"><input class="form-check-input"
                                                type="checkbox" id="checkboxNoLabel5" value="" aria-label="..."
                                                checked /></th>
                                        <td>
                                            <div class="d-flex align-items-center fw-semibold">
                                                <span class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                        src="assets/images/faces/8.jpg" alt="img" />
                                                </span>Mirinda Hers
                                            </div>
                                        </td>
                                        <td>Marketing</td>
                                        <td>mirindahers@gmail.com</td>
                                        <td><span class="badge bg-warning-transparent">USA</span></td>
                                        <td>Apr 14 - Dec 14, 2023</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                        class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                        class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-4"><input class="form-check-input"
                                                type="checkbox" id="checkboxNoLabel3" value="" aria-label="..."
                                                checked /></th>
                                        <td>
                                            <div class="d-flex align-items-center fw-semibold">
                                                <span class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                        src="assets/images/faces/9.jpg" alt="img" />
                                                </span>Jacob Smith
                                            </div>
                                        </td>
                                        <td>Social Plataform</td>
                                        <td>jacobsmith@gmail.com</td>
                                        <td><span class="badge bg-success-transparent">Singapore</span></td>
                                        <td>Feb 25 - Nov 25, 2023</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15">
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                        class="ri-download-2-line"></i></a>
                                                <a aria-label="anchor" href="#"
                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                        class="ri-edit-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center">
                            <div>Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i></div>
                            <div class="ms-auto">
                                <nav aria-label="Page navigation" class="pagination-style-4">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled"><a class="page-link" href="#"> Prev </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link text-primary" href="#"> next
                                            </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-3 -->
    </div>
@endsection
