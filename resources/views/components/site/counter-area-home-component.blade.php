<div class="counter__area   z-index  ">
    <div class="counter__shape-1">
        <img src="{{ asset('site/img/counter/counter-shape-1.png') }}" alt>
    </div>
    <div class="counter__shape-2">
        <img src="{{ asset('site/img/counter/counter-shape-2.png') }}" alt>
    </div>
    <div class="counter__black-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                    <div class="counter__section-box text-center pb-35">
                        <h4 class="section-subtitle section-white-bg title-anim">{{ json_decode($section->title)->en }}
                        </h4>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                    <div class="counter__item  text-center">
                        <div class="counter__text">
                            <h4 class="counter__title">{{ json_decode($section->childSections[0]->title)->en }}</h4>
                        </div>
                        <div class="counter__icon">
                            <span>{!! json_decode($section->childSections[0]->second_title)->en !!}</span>
                        </div>
                        <div class="counter__text">
                            <span>
                                <i class="counter">
                                    {{ json_decode($section->childSections[0]->section_content)->en }}
                                </i>
                                K
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                    <div class="counter__item  text-center">
                        <div class="counter__text">
                            <h4 class="counter__title">{{ json_decode($section->childSections[1]->title)->en }}</h4>
                        </div>
                        <div class="counter__icon">
                            <span>{!! json_decode($section->childSections[1]->second_title)->en !!}</span>
                        </div>
                        <div class="counter__text">
                            <span>
                                <i class="counter">
                                    {{ json_decode($section->childSections[1]->section_content)->en }}
                                </i>
                                +
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                    <div class="counter__item  text-center">
                        <div class="counter__text">
                            <h4 class="counter__title">{{ json_decode($section->childSections[2]->title)->en }}</h4>
                        </div>
                        <div class="counter__icon">
                            <span>{!! json_decode($section->childSections[2]->second_title)->en !!}</span>
                        </div>
                        <div class="counter__text">
                            <span>
                                <i class="counter">
                                    {{ json_decode($section->childSections[2]->section_content)->en }}
                                </i>
                                +
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                    data-wow-delay="1.1s">
                    <div class="counter__item  text-center">
                        <div class="counter__text">
                            <h4 class="counter__title">{{ json_decode($section->childSections[3]->title)->en }}</h4>
                        </div>
                        <div class="counter__icon">
                            <span>{!! json_decode($section->childSections[3]->second_title)->en !!}</span>
                        </div>
                        <div class="counter__text">
                            <span>
                                <i class="counter">
                                    {{ json_decode($section->childSections[3]->section_content)->en }}
                                </i>
                                K
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
