<div class="breadcrumb__area breadcrumb__plr breadcrumb__space breadcrumb__bg breadcrumb__overlay p-relative fix"
    data-background="{{ asset('site/img/slider/slider-bg-3.png') }}">

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="breadcrumb__content z-index">
                    <h3 class="breadcrumb__title char-anim wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        {{$title}}
                    </h3>
                    <div class="breadcrumb__button wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <a href="#">Home<i class="far fa-angle-right"></i><span>{{$sTitle}}</span></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="breadcrumb__main-img text-end">
                    <img src="{{ asset($img) }}" class="width-bread" alt>
                </div>
            </div>
        </div>
    </div>
</div>
