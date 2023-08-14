<div class="about-5__area about-5__plr">
    <div class="container-fluid">
        <div class="about-5__border">
            <div class="row ">
                <div class="col-xl-4 col-lg-4 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s"
                    style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.3s; animation-name: tpfadeUp;">
                    <div class="about-5__main-img text-center ">
                        <a href="#"><img src="{{ asset('site/img/90317e52-81ad-48c1-b125-64c5e0600572.jpg') }}"
                                class="pic-size" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="about-5__content-box">
                        <h4 class="about-5__content-title wow tpfadeUp pt-3" data-wow-duration=".9s"
                            data-wow-delay=".5s"
                            style="visibility: visible; animation-duration: 0.9s; 
                                    animation-delay: 0.5s; animation-name: tpfadeUp;">
                        {{ json_decode($section->title)->en }}
                    </h4>
                        {!! json_decode($section->section_content)->en !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
