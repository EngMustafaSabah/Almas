<div class="about-details__area about-details__plr">
    {{-- @dd($section) --}}
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".3s"
                style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.3s; animation-name: tpfadeLeft;">
                <div class="about-details__main-img">
                    <a href="#"><img src="{{ asset('site/img/about/about-3.jpg') }}" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s"
                style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.7s; animation-name: tpfadeRight;">
                <div class="about-details__content">
                    <h4 class="about-details__title"> {{ json_decode($section->title)->en }} </h4>
                    {!! json_decode($section->section_content)->en !!}
                </div>
            </div>

        </div>
    </div>
</div>
