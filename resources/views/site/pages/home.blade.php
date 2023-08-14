@extends('site.layouts.sitelayout')
@section('title')
    Home | Almas Arabic Pack
@endsection
@section('content')
    <!-- banner  -->
    <x-site.banner-home-component />
    <!-- end banner  -->
    <!-- about us  -->
    <x-site.about-component />
    <!-- end about  -->
    <!-- way of work  -->
    <x-site.customer-journey-component />
    <!-- end  -->
    <!-- offer  -->
    <x-site.offer-home-component />
    <!-- end  -->
    <!-- product section  -->
    <x-site.product-home-component />
    <!-- end  -->
    <!-- booking order -->
    <x-site.booking-order-home-component />
    <!-- end booking order -->
    <!-- blog  -->
    <x-site.blog-home-component />
    <!-- end  -->
    <!-- counter area  -->
    <x-site.counter-area-home-component />
    <!-- end  -->
    <!-- client  -->
    <x-site.client-home-component />
    <!-- end  -->

    <!-- testimonial -->
    <x-site.testimonial-home-component />
    <!-- end  -->
@endsection
