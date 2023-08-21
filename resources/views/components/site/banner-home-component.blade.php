<div class="slider__area slider__space slider__plr p-relative z-index fix">
    <div class="slider-4__shape-1 d-none d-md-block">
        <img src="{{ asset('site/img/slider/slider-4-bg.png') }}" alt="">
    </div>
    <div class="slider__shape-top-1 d-none d-xl-block wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".7s">
        <img src="{{ asset('site/img/slider/shape-1.png') }}" alt>
    </div>
    <div class="slider__shape-top-2 d-none d-xl-block wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay="1.2s">
        <img src="{{ asset('site/img/slider/shape-2.png') }}" alt>
    </div>

    <div class="slider__shape-top-6 d-none d-lg-block">
        <img src="{{ asset('site/img/slider/paper-bag3.png') }}" class="shape-size" alt>
    </div>

    <div class="slider__shape-top-8">
        <img src="{{ asset('site/img/slider/lunch-box.png') }}" class="shape-size" alt>
    </div>

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="slider__section-box">
                    <h4 class="section-subtitle char-anim"> {{ json_decode($section->title)->en }}</h4>
                    <h3 class="hero-title char-anim">{{ json_decode($section->second_title)->en }} </h3>
                </div>
                <div class="slider__content wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                    <p class="char-anim-2">{{ json_decode($section->section_content)->en }}</p>
                </div>
                <div class="slider__btn wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.1s">
                    <a class="main-btn tp-btn-hover alt-color  it-btn " target="_blank">
                        <span>
                            Download Profile<i class="fal fa-arrow-to-bottom"></i>
                        </span>
                        <b></b>
                    </a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                <div class="slider__thumb">
                    <img src="{{ asset('site/img/slider-34.png') }}" alt>
                </div>
            </div>
        </div>
    </div>
</div>
