@extends('site.layouts.sitelayout')
@section('title')
    About | Almas Arabic Pack
@endsection
@section('content')
{{-- @dd($blogs[0]->created_at->format('M d,Y')) --}}
    <!-- breadcrumb__area  -->
    <x-site.breadcrumb-component :img="'site/img/chose-7-2.png'" />
    <!-- end  -->
    <!--blog  -->
    <div class="blog-3__area blog-3__mlr pt-4 ">
        <!-- filter  -->
        <div class="sidebar__wrapper" data-wow-duration=".9s" data-wow-delay=".3s"
            style="visibility: visible;   animation-duration: 0.9s; animation-delay: 0.3s;  animation-name: tpfadeUp;">
            <div class="container   sidebar__widget mb-40 wow tpfadeUp" style="visibility: visible;">
                <form action="#">
                    <div class="row pt-4 pb-4 pl-3 pr-3">
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="country-select">
                                <label>Product type </label>
                                <select>
                                    <option value="Select... ">Select ... </option>
                                    <option value="paper cups">paper cups</option>
                                    <option value="plastic cups">plastic cups</option>
                                    <option value="paper bags">paper bags</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="sidebar__widget-content">
                                <div class="sidebar__search">
                                    <div class="sidebar__search-input-2">
                                        <label>Search using keywords </label>
                                        <input type="text" placeholder="keyword...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 col-sm-12 ">
                            <div class="row mt-3 pt-2">
                                <div class="col-md-6 col-lg-6 col-sm-6 ">
                                    <div class="pt-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Lowest
                                                Price</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 ">
                                    <div class="pt-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                            <label class="form-check-label" for="exampleCheck2">Least
                                                Quantity </label>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12 col-lg-2 mt-4  pt-2">
                            <button class="yellow-btn tp-btn-hover alt-color sub-btn" style="width: 100%;"><span>
                                    <i class="fa fa-search"></i>
                                    Search </span>
                                <b style="top: -86.8646px; left: 126.333px;"></b></button>

                        </div>

                    </div>
                </form>
            </div>
        </div>
        <!-- end  -->
        <div class="container">

            <div class="row">
                @foreach ($blogs as $item)
                    <div class="col-xl-3 col-lg-6 col-md-6 mb-50  wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s"
                        style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.7s;">
                        <div class="blog-3__item">
                            <div class="blog-3__main-thumb fix">
                                <a class="popup-image" href="{{ url($item->getFirstMediaUrl('main_post_img_attache')) }}">
                                    <img src="{{ url($item->getFirstMediaUrl('main_post_img_attache')) }}" alt=""
                                        class="image-blog-size">
                                </a>
                                <div class="blog-3__thumb-overly">
                                    <span>{{$item->categories[0]->category_name}}</span>
                                </div>
                            </div>
                            <div class="blog-3__content">
                                <div class="blog-3__meta">
                                    <span>posted by : Almas / {{$item->created_at->format('M d, Y')}}</span>
                                </div>
                                <div class="blog-3__text">
                                    <h4 class="blog-3__title-sm"><a href="{{ route('blog.show', ['blog'=>$item->id]) }}">{{ $item->title }}.</a></h4>
                                    <p>{{ $item->short_content }}</p>
                                </div>
                                <div class="blog-3__link">
                                    <a href="{{ route('blog.show', ['blog'=>$item->id]) }}">Read More<i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center text-center ">
                <div class="col-md-12 justify-content-center text-center pt-3 pb-3">
                    <div class="basic-pagination wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.5s"
                        style="visibility: hidden; animation-duration: 0.9s; animation-delay: 1.5s; animation-name: none;">
                        <nav>{{ $blogs->links('site.custom-pagination') }}</nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog  -->
@endsection
