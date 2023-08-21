@extends('admin.layouts.adminlayout')

@section('pageContent')
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">Cards</h1>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Cards</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cards</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->
            <!-- Start::row-1 -->
            <div class="row">

                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12">
                    <div class="card custom-card products-navigation-card">
                        <div class="card-body p-0">
                            <div class="p-4 border-bottom">
                                <p class="fw-semibold mb-0 text-muted">CATEGORIES</p>
                                <div class="px-2 py-3 pb-0">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="electronics" />
                                        <label class="form-check-label" for="electronics"> Electronics </label>
                                        <span class="badge bg-light text-muted float-end">2,712</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="Accesories" />
                                        <label class="form-check-label" for="Accesories"> Accesories </label>
                                        <span class="badge bg-light text-muted float-end">536</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="clothing"
                                            checked /> <label class="form-check-label" for="clothing"> Clothing
                                        </label>
                                        <span class="badge bg-light text-muted float-end">18,289</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="fashion" />
                                        <label class="form-check-label" for="fashion"> Fashion </label>
                                        <span class="badge bg-light text-muted float-end">3,453</span>
                                    </div>
                                    <div class="collapse" id="category-more">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value="" id="furniture" />
                                            <label class="form-check-label" for="furniture">
                                                Furniture </label>
                                            <span class="badge bg-light text-muted float-end">7,165</span>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value="" id="footwear" />
                                            <label class="form-check-label" for="footwear">
                                                Footwear </label>
                                            <span class="badge bg-light text-muted float-end">5,964</span>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value="" id="mobiles" />
                                            <label class="form-check-label" for="mobiles"> Mobiles </label>
                                            <span class="badge bg-light text-muted float-end">2,123</span>
                                        </div>
                                    </div>
                                    <a class="ecommerce-more-link" data-bs-toggle="collapse" href="#" role="button"
                                        aria-expanded="false" aria-controls="category-more">MORE</a>
                                </div>
                            </div>
                            <div class="p-4 border-bottom">
                                <p class="fw-semibold mb-0 text-muted">BRANDS</p>
                                <div class="px-2 py-3 pb-0">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="Jimmy-Lolfiger"
                                            checked /> <label class="form-check-label" for="Jimmy-Lolfiger"> Jimmy
                                            Lolfiger </label>
                                        <span class="badge bg-light text-muted float-end">512</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="dapzem1"
                                            checked /> <label class="form-check-label" for="dapzem1"> Dapzem & Co
                                        </label>
                                        <span class="badge bg-light text-muted float-end">2,186</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="denim-winjo1"
                                            checked /> <label class="form-check-label" for="denim-winjo1"> Denim
                                            Winjo </label>
                                        <span class="badge bg-light text-muted float-end">734</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="Louie-Phillippe" /> <label class="form-check-label"
                                            for="Louie-Phillippe"> Louie Phillippe </label>
                                        <span class="badge bg-light text-muted float-end">16</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="garage-clothing" /> <label class="form-check-label"
                                            for="garage-clothing"> Garage & Co </label>
                                        <span class="badge bg-light text-muted float-end">1,432</span>
                                    </div>
                                    <div class="collapse" id="brands-more">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="blueberry" checked /> <label class="form-check-label"
                                                for="blueberry">
                                                Blueberry & Co </label>
                                            <span class="badge bg-light text-muted float-end">257</span>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="aus-polo-assn" checked /> <label class="form-check-label"
                                                for="aus-polo-assn"> Aus Polo Assn </label>
                                            <span class="badge bg-light text-muted float-end">1,845</span>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="denim-corp" checked /> <label class="form-check-label"
                                                for="denim-corp"> Denim
                                                Corp </label>
                                            <span class="badge bg-light text-muted float-end">5,893</span>
                                        </div>
                                    </div>
                                    <a class="ecommerce-more-link" data-bs-toggle="collapse" href="#"
                                        role="button" aria-expanded="false" aria-controls="brands-more">MORE</a>
                                </div>
                            </div>
                            <div class="p-4 border-bottom">
                                <p class="fw-semibold mb-0 text-muted">PRICE</p>
                                <div class="px-2 py-3 pb-0">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="low" />
                                        <label class="form-check-label" for="low"> $0 - $599 </label>
                                        <span class="badge bg-light text-muted float-end">22,873</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="low1"
                                            checked /> <label class="form-check-label" for="low1"> $599 - $1299
                                        </label>
                                        <span class="badge bg-light text-muted float-end">11,345</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="medium" />
                                        <label class="form-check-label" for="medium"> $1,299 - $2,199 </label>
                                        <span class="badge bg-light text-muted float-end">6,987</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="high" />
                                        <label class="form-check-label" for="high"> $2,199 - $3,499 </label>
                                        <span class="badge bg-light text-muted float-end">5,236</span>
                                    </div>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="high1" />
                                        <label class="form-check-label" for="high1"> $3,499 & Above </label>
                                        <span class="badge bg-light text-muted float-end">3,735</span>
                                    </div>
                                    <p class="fw-semibold mb-0 text-muted">PRICE RANGE</p>
                                    <div class="mt-5" id="product-price-range"></div>
                                </div>
                            </div>
                            <div class="p-4 border-bottom">
                                <p class="fw-semibold mb-0 text-muted">DISCOUNT</p>
                                <div class="px-2 py-3 pb-0">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="Jimmy-Lolfiger1" /> <label class="form-check-label"
                                            for="Jimmy-Lolfiger1"> 0% - 20% </label>
                                        <span class="badge bg-light text-muted float-end">16,563</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="dapzem2" />
                                        <label class="form-check-label" for="dapzem2"> 20% - 40% </label>
                                        <span class="badge bg-light text-muted float-end">15,234</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="denim-winjo" />
                                        <label class="form-check-label" for="denim-winjo"> 40% - 60% </label>
                                        <span class="badge bg-light text-muted float-end">6,278</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="Louie-Phillippe1" checked /> <label class="form-check-label"
                                            for="Louie-Phillippe1"> 60% - 80% </label>
                                        <span class="badge bg-light text-muted float-end">4,531</span>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="garage-clothing1" /> <label class="form-check-label"
                                            for="garage-clothing1"> 80% - 90% </label>
                                        <span class="badge bg-light text-muted float-end">2,405</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="fw-semibold mb-0 text-muted">SIZES</p>
                                <div class="px-2 py-3 pb-0">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="extra-small" />
                                        <label class="form-check-label" for="extra-small"> Extra Small (XS) </label>
                                        <span class="badge bg-light text-muted float-end">23,156</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="small" />
                                        <label class="form-check-label" for="small"> Small (SM) </label>
                                        <span class="badge bg-light text-muted float-end">15,632</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="medium1" />
                                        <label class="form-check-label" for="medium1"> Medium (MD) </label>
                                        <span class="badge bg-light text-muted float-end">15,032</span>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="large"
                                            checked /> <label class="form-check-label" for="large"> Large (L)
                                        </label>
                                        <span class="badge bg-light text-muted float-end">7,154</span>
                                    </div>
                                    <div class="collapse" id="sizes-more">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="extra-large" /> <label class="form-check-label" for="extra-large">
                                                Extra Large (XL) </label>
                                            <span class="badge bg-light text-muted float-end">5,946</span>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="double-extralarge" /> <label class="form-check-label"
                                                for="double-extralarge"> XXL </label>
                                            <span class="badge bg-light text-muted float-end">3,267</span>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="triple-extralarge" /> <label class="form-check-label"
                                                for="triple-extralarge"> XXL </label>
                                            <span class="badge bg-light text-muted float-end">578</span>
                                        </div>
                                    </div>
                                    <a class="ecommerce-more-link" data-bs-toggle="collapse" href="#"
                                        role="button" aria-expanded="false" aria-controls="sizes-more">MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-8 col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card product-card">
                                <div class="card-body">
                                    <a href="#" class="product-image"> <img src="assets/images/ecommerce/png/1.png"
                                            class="card-img mb-3" alt="..." /> </a>
                                    <div class="product-icons">
                                        <a href="#" class="wishlist"><i class="ri-heart-line"></i></a> <a
                                            href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="#" class="view"><i class="ri-eye-line"></i></a>
                                    </div>
                                    <p
                                        class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">
                                        Dapzem & Co<span class="float-end text-warning fs-12">4.2<i
                                                class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span>
                                    </p>
                                    <p class="product-description fs-11 text-muted mb-2">Branded hoodie ethnic style
                                    </p>
                                    <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between">
                                        <span>$229<span
                                                class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$1,799</span></span><span
                                            class="badge bg-secondary-transparent float-end fs-10">72% off</span>
                                    </p>
                                    <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center"><i
                                            class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $229</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card product-card">
                                <div class="card-body">
                                    <a href="#" class="product-image"> <img src="assets/images/ecommerce/png/4.png"
                                            class="card-img mb-3" alt="..." /> </a>
                                    <div class="product-icons">
                                        <a href="#" class="wishlist"><i class="ri-heart-line"></i></a> <a
                                            href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="#" class="view"><i class="ri-eye-line"></i></a>
                                    </div>
                                    <p
                                        class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">
                                        Bluberry Co.In<span class="float-end text-warning fs-12">4.2<i
                                                class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span>
                                    </p>
                                    <p class="product-description fs-11 text-muted mb-2">Full sleeve white hoodie
                                    </p>
                                    <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between">
                                        <span>$349<span
                                                class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$1,299</span></span><span
                                            class="badge bg-secondary-transparent float-end fs-10">60% off</span>
                                    </p>
                                    <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center"><i
                                            class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $349</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card"> <img src="assets/images/media/media-22.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title fw-semibold">Card title</h6>
                                    <p class="card-text text-muted">when an unknown printer took a galley of type
                                        and scrambled it to make a type specimen book..</p><a href="#"
                                        class="btn btn-primary">Read More</a>
                                </div>
                                <div class="card-footer"> <span class="card-text">Last updated 3 mins ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card"> <img src="assets/images/media/media-32.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-header">
                                    <div class="card-title">Image caps are widely used in Blog's</div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text mb-1 text-muted">This is a wider card with supporting text
                                        below as a natural lead-in to additional content..</p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text mb-0"><small>Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->
            <!-- Pagination -->
            <ul class="pagination justify-content-end">
                <li class="page-item disabled"><a class="page-link">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
            <!-- Pagination -->

        </div>
    </div>
@endsection
