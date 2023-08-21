@extends('site.layouts.sitelayout')
@section('title')
    About | Almas Arabic Pack
@endsection
@section('content')
    <!-- breadcrumb__area  -->
    <x-site.breadcrumb-component :title="'Contact us'" :sTitle="'Contact us'" :img="'site/img/16.png'" />
    <!--Contact Us  -->
    <div class="contact__area contact__plr-2 pt-3 pb-5 p-relative fix " id="contac">
        <div class="contact__shape-1 d-none d-lg-block">
            <img src="{{ asset('site/img/contact/ct-shape-1.png') }}" alt>
        </div>
        <div class="contact__shape-2 d-none d-xxl-block">
            <img src="{{ asset('site/img/contact/ct-shape-2.png') }}" alt>
        </div>
        <div class="contact__shape-3 d-none d-xxl-block">
            <img src="{{ asset('site/img/contact/ct-shape-3.png') }}" alt>
        </div>
        <div class="contact__shape-4 d-none d-lg-block">
            <img src="{{ asset('site/img/communicates.png') }}" width="78px" alt>
        </div>
        <div class="contact__border">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact__section-title pb-10">
                            <h4 class="section-subtitle char-anim wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".3s">{{ json_decode($sections[0]->title)->en }}</h4>

                        </div>
                        <div class="contact__text wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                            <p class="char-anim-2">{{ json_decode($sections[0]->second_title)->en }}</p>
                        </div>
                        <div class="contact__form wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{{ Session::get('success') }}</li>
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('contact.submit') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="postbox__contact-input">
                                            <input type="text" name="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="postbox__contact-input">
                                            <input type="email" name="email" placeholder="Your Email"
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
                                            <textarea placeholder="Message" name="message"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="contact__button wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.1s">
                                    <button class="main-btn-sm tp-btn-hover alt-color"><span>Send Request</span>
                                        <b></b>
                                    </button>
                                </div>
                            </form>
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
                                    <h4 class="contact__title-sm">{{ json_decode($sections[1]->title)->en }}</h4>
                                    <span><a href="tel:{{ json_decode($sections[1]->second_title)->en }}">
                                            {{ json_decode($sections[1]->second_title)->en }}</a>
                                        <br>
                                        <a
                                            href="tel:{{ json_decode($sections[1]->section_content)->en }}">{{ json_decode($sections[1]->section_content)->en }}</a></span>
                                </div>
                            </div>
                            <div class="contact__item d-flex align-items-center wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".7s">
                                <div class="contact__icon">
                                    <span><a href="#"><i class="fal fa-envelope-open-text"></i></a></span>
                                </div>
                                <div class="contact__content">
                                    <h4 class="contact__title-sm">{{ json_decode($sections[2]->title)->en }}</h4>
                                    <span><a href="mailto:info@Almaspack.com"><span
                                                class="__cf_email__">{{ json_decode($sections[2]->second_title)->en }}</span>
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
                                    <h4 class="contact__title-sm">{{ json_decode($sections[3]->title)->en }}</h4>
                                    <span><a href="{{ json_decode($sections[4]->section_content)->en }}" target="_blank">

                                            {{ json_decode($sections[3]->second_title)->en }}<br>
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
            <iframe src="{{ json_decode($sections[4]->section_content)->en }}" width="100%" height="450"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection
