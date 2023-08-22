<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title', 'Almas Arabic Pack')</title>
    @include('site.partials.meta')
    @include('site.partials.headStyles')
    @include('site.partials.headScripts')
</head>

<body>

    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>


    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="far fa-angle-double-up"></i>
    </button>

    <a href="https://web.whatsapp.com/" class="floatx" target="_blank">
        <i class="fab fa-whatsapp wp-buttonx"></i>

    </a>
    {{-- start header --}}
    @include('site.partials.header')
    {{-- end header --}}

    {{-- start sidebar --}}
    @include('site.partials.sidebar')
    {{-- end sidebar --}}

    <div class="body-overlay"></div>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main class="fix">
                @yield('content')
            </main>
            {{-- start footer --}}
            @include('site.partials.footer')
            {{-- end footer --}}
        </div>
    </div>
    @include('site.partials.footerScripts')
</body>

</html>
