@extends('site.layouts.sitelayout')
@section('title')
    About | Almas Arabic Pack
@endsection
@section('content')
    <!-- breadcrumb__area  -->
    <x-site.breadcrumb-component />
    <!--Contact Us  -->

    <div class="contact__area contact__plr-2 pt-3 pb-5 p-relative fix " id="contac">
        <div class="contact__shape-1 d-none d-lg-block">
            <img src="assets/img/contact/ct-shape-1.png" alt>
        </div>
        <div class="contact__shape-2 d-none d-xxl-block">
            <img src="assets/img/contact/ct-shape-2.png" alt>
        </div>
        <div class="contact__shape-3 d-none d-xxl-block">
            <img src="assets/img/contact/ct-shape-3.png" alt>
        </div>
        <div class="contact__shape-4 d-none d-lg-block">
            <img src="assets/img/communicates.png" width="78px" alt>
        </div>
        <div class="contact__border">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact__section-title pb-10">
                            <h4 class="section-subtitle char-anim wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".3s">Get In Contact</h4>

                        </div>
                        <div class="contact__text wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <p class="char-anim-2">Our approach to itis unique around know work an we know
                                doesn’t work verified factors in play. </p>
                        </div>
                        <div class="contact__form wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                            <form action="#">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="postbox__contact-input">
                                            <input type="text" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="postbox__contact-input">
                                            <input type="email" placeholder="Your Email"
                                                style="    background-color: #f7f9fa;
                                                        width: 100%;
                                                        height: 51px;
                                                        padding: 25px;
                                                        border-radius: 5px;
                                                        font-weight: 400;
                                                        font-size: 17px;
                                                        margin-bottom: 30px;
                                                        border: 1px solid transparent;">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="postbox__contact-textarea">
                                            <textarea placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="contact__button wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.1s">
                            <button class="main-btn-sm tp-btn-hover alt-color"><span>Send Request</span>
                                <b></b>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact__left-side">
                            <div class="contact__item d-flex align-items-center wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".5s">
                                <div class="contact__icon">
                                    <span><a href="#"><i class="fal fa-phone-alt"></i></a></span>
                                </div>
                                <div class="contact__content">
                                    <h4 class="contact__title-sm">Call This Now</h4>
                                    <span><a href="tel:+966535550797">+966535550797 </a>
                                        <br>
                                        <a href="tell:+966 114549530">+966 114549530</a></span>
                                </div>
                            </div>
                            <div class="contact__item d-flex align-items-center wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".7s">
                                <div class="contact__icon">
                                    <span><a href="#"><i class="fal fa-envelope-open-text"></i></a></span>
                                </div>
                                <div class="contact__content">
                                    <h4 class="contact__title-sm">Your Message</h4>
                                    <span><a href="mailto:info@Almaspack.com"><span
                                                class="__cf_email__">info@Almaspack.com</span>
                                            <br>
                                        </a></span>

                                </div>
                            </div>
                            <div class="contact__item d-flex align-items-center wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".9s">
                                <div class="contact__icon">
                                    <span><a href="#"><i class="fal fa-map-marker-check"></i></a></span>
                                </div>
                                <div class="contact__content">
                                    <h4 class="contact__title-sm">Your location</h4>
                                    <span><a href="https://www.google.com/maps/place/%D8%B4%D8%B1%D9%83%D9%87+%D8%A7%D9%84%D9%85%D8%A7%D8%B3+%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A%D9%87+%D9%84%D9%84%D8%AA%D8%BA%D9%84%D9%8A%D9%81+(%D9%85%D9%82%D8%B1+%D8%A7%D9%84%D8%B4%D8%B1%D9%83%D8%A9+)+ALMAS+PACK%E2%80%AD/@24.7982814,46.7842489,17z/data=!3m1!4b1!4m6!3m5!1s0x3e2eff75f2aaf297:0x926a3a1a0f99783e!8m2!3d24.7982814!4d46.7842489!16s%2Fg%2F11h_827dl8?hl=ar-SA&entry=ttu"
                                            target="_blank">

                                            Saudi Arabia Riyadh <br>
                                        </a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Contact Us  -->
    <!-- map  -->
    <section class="pt-4 pb-4">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.9174111590273!2d46.784248899999994!3d24.7982814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2eff75f2aaf297%3A0x926a3a1a0f99783e!2z2LTYsdmD2Ycg2KfZhNmF2KfYsyDYp9mE2LnYsdio2YrZhyDZhNmE2KrYutmE2YrZgSAo2YXZgtixINin2YTYtNix2YPYqSApIEFMTUFTIFBBQ0s!5e0!3m2!1sar!2ssa!4v1685532114970!5m2!1sar!2ssa"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection
