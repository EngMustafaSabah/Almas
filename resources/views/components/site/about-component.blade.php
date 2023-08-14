    <!-- about us  -->

    {{-- about page --}}
    {{-- <div class="company__area  pt-4 pb-4 mb-4 p-relative"> --}}

    {{-- home page --}}
    {{-- @dd($sections) --}}
    <div class="company__area  pt-4 pb-4  p-relative back1">

        <div class="container">
            <div class="row align-items-center">
                <div class="slider__shape-top-9">
                    <img src="{{ asset('site/img/slider/coffee.png') }}" class="shape-size" alt>
                </div>
                <div class="col-xl-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".3s">
                    <div class="company__left-img text-center text-xl-start">
                        <img src="{{ asset('site/img/about-1.png') }}" alt>
                    </div>
                </div>
                <div class="col-xl-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                    <div class="company__section-box">

                        <h3 class="section-title  char-anim">{{ json_decode($sections[0]->title)->en }}</h3>

                        <p class="char-anim-2">{{ json_decode($sections[0]->section_content)->en }}</p>
                    </div>
                    <div class="company__service-tab">
                        <ul class="nav nav-tab" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active btn-color-3" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">
                                    <span>{{ ucfirst($sections[1]->name) }}</span>
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn-color-3" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">
                                    <span>{{ ucfirst($sections[2]->name) }}</span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn-color-3" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#goal" type="button" role="tab" aria-controls="contact"
                                    aria-selected="false">
                                    <span>{{ ucfirst($sections[3]->name) }}</span>
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="company__tab-content-wrapper d-flex align-items-center">
                                    <div class="company__tab-icon">
                                        <span><img src="{{ asset('site/img/company/company-tab-1.png') }}" alt></span>
                                    </div>
                                    <div class="company__tab-text">
                                        <h4>{{ json_decode($sections[1]->title)->en }} </h4>
                                        <span>{{ json_decode($sections[1]->section_content)->en }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="company__tab-content-wrapper d-flex align-items-center">
                                    <div class="company__tab-icon">
                                        <span><img src="{{ asset('site/img/company/company-tab-1.png') }}" alt></span>
                                    </div>
                                    <div class="company__tab-text">
                                        <h4>{{ json_decode($sections[2]->title)->en }} </h4>
                                        <span>{{ json_decode($sections[2]->section_content)->en }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="goal" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="company__tab-content-wrapper d-flex align-items-center">
                                    <div class="company__tab-icon">
                                        <span><img src="{{ asset('site/img/company/company-tab-1.png') }}" alt></span>
                                    </div>
                                    <div class="company__tab-text">
                                        <h4>{{ json_decode($sections[3]->title)->en }} </h4>
                                        <span>{{ json_decode($sections[3]->section_content)->en }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="company__button ">
                        <a class="main-btn tp-btn-hover alt-color mb-3" href="#">
                            <span>Read More</span>
                            <b></b>
                        </a>
                        <a class="main-btn tp-btn-hover alt-color  it-btn mb-3" href="#">
                            <span>
                                Download Profile<i class="fal fa-arrow-to-bottom"></i>
                            </span>
                            <b></b>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end about  -->
