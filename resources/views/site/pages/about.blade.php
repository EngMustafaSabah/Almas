@extends('site.layouts.sitelayout')
@section('title')
    About | Almas Arabic Pack
@endsection
@section('content')
    <!-- breadcrumb__area  -->
    <x-site.breadcrumb-component :title="'About us'" :sTitle="'About us'" :img="'site/img/about-shape-7-2.png'"/>

    <!-- end  -->

    <!-- about us  -->
    <x-site.about-component />
    <!-- end about  -->

    <!-- start about ceo -->
    <x-site.about-ceo-component />

    <!-- Word from ceo -->
    <x-site.word-from-ceo-component />
@endsection
