@extends('site.layouts.sitelayout')
@section('title')
    About | Almas Arabic Pack
@endsection
@section('content')
    {{-- @dd($blog->getFirstMediaUrl('main_post_img_attache')) --}}
    <!-- breadcrumb__area  -->
    <x-site.breadcrumb-component :title="'Blog Details'" :sTitle="$blog->title" :img="'site/img/chose-7-2.png'" />
    <!-- end  -->
    <!--blog  -->
    <div class="postbox__area pt-3 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="postbox__details-wrapper pr-20">
                        <article>
                            <div class="postbox__thumb w-img wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s"
                                style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.3s;">
                                <a href="#">
                                    <img src="{{ url($blog->getFirstMediaUrl('main_post_img_attache')) }}" alt="">
                                </a>
                            </div>
                            <div class="bread-date">
                                <div class="postbox__meta">
                                    <span><a href="#">
                                            <i class="fa fa-user"></i>
                                            posted by : Almas</a></span>
                                    <span><a href="#">
                                            <i class="fa fa-calendar-alt"></i>
                                            {{ $blog->created_at->format('M d, Y') }}</a></span>
                                    <span><a href="#">
                                            <i class="fa fa-paper-plane"></i>
                                            Categorey : {{ $blog->categories[0]->category_name }}</a></span>
                                </div>

                            </div>
                            <div class="postbox__details-title-box pb-2 wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".5s"
                                style="visibility: hidden; animation-duration: 0.9s; animation-delay: 0.5s; animation-name: none;">
                                <h4 class="postbox__details-title">The History Of Web Design</h4>
                                <p>While you want your sales team to be spending most of their time
                                    prospecting and selling, making sure they have the time and space to
                                    keep the CRM up to date is critical. Remember to factor in time for
                                    these tasks when setting goals and benchmarks for them. Provide sales
                                    support where you can to ensure your sales team is spending.</p>
                            </div>
                            <div class="postbox__details-img-box d-flex wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".7s"
                                style="visibility: hidden; animation-duration: 0.9s; animation-delay: 0.7s; animation-name: none;">
                                <span class="text-center img-mr">
                                    <img src="assets/img/blog/blog-details-2.jpg" alt="">
                                </span>
                                <span class="text-center">
                                    <img src="assets/img/blog/blog-details-3.jpg" alt="">
                                </span>
                            </div>
                            <div class="postbox__details-title-box pb-2 wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".9s"
                                style="visibility: hidden; animation-duration: 0.9s; animation-delay: 0.9s; animation-name: none;">
                                <h4 class="postbox__details-title">How to Update your Theme</h4>
                                <p>Felis morbi ut tristique pretium libero. Eget purus, enim, orci, quis
                                    tempor sed. Sed nec eget nibh et Ut orci, sagittis tellus dui congue.
                                    Blandit laoreet nullam amet eget. Ut tincidunt diam tempor sed turpis
                                    odio vitae sem lobortis.</p>
                            </div>
                            <div class="postbox__details tagcloud mb-1 wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay="1s"
                                style="visibility: hidden; animation-duration: 0.9s; animation-delay: 1s; animation-name: none;">
                                <span>Tags:</span>
                                @foreach ($blog->tags as $tag)
                                    <a href="#">{{ $tag->tag_name }}</a>
                                @endforeach
                            </div>
                            <div class="product-details__social-box mt-1 mb-2 wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay="1.5s"
                                style="visibility: hidden; animation-duration: 0.9s; animation-delay: 1.5s; animation-name: none;">
                                <span class="text-share">Share :</span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                            </div>
                            <hr>
                            <div class="postbox__comment mb-65 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.3s"
                                style="visibility: hidden; animation-duration: 0.9s; animation-delay: 1.3s; animation-name: none;">
                                <h3 class="postbox__comment-title">3 Comments</h3>
                                <ul>
                                    <li>
                                        <div class="postbox__comment-box d-flex">
                                            <div class="postbox__comment-info ">
                                                <div class="postbox__comment-avater mr-20">
                                                    <img src="assets/img/testimonial/testi-shape-7.png" alt="">
                                                </div>
                                            </div>
                                            <div class="postbox__comment-text">
                                                <div class="postbox__comment-name d-flex">
                                                    <h5>Justin Case</h5>
                                                    <span class="post-meta"> April 8, 2022 at 7:38 am</span>
                                                </div>
                                                <p>Patient Comments are a collection of comments submitted
                                                    by viewers in <br> response to a question posed by a
                                                    MedicineNet doctor.</p>

                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="postbox__comment-box d-flex">
                                            <div class="postbox__comment-info ">
                                                <div class="postbox__comment-avater mr-20">
                                                    <img src="assets/img/testimonial/testi-shape-9.png" alt="">
                                                </div>
                                            </div>
                                            <div class="postbox__comment-text">
                                                <div class="postbox__comment-name d-flex">
                                                    <h5>Justin Case</h5>
                                                    <span class="post-meta"> April 8, 2022 at 7:38 am</span>
                                                </div>
                                                <p>Patient Comments are a collection of comments submitted
                                                    by viewers in <br> response to a question posed by a
                                                    MedicineNet doctor.</p>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="postbox__comment-box d-flex">
                                            <div class="postbox__comment-info ">
                                                <div class="postbox__comment-avater mr-20">
                                                    <img src="assets/img/testimonial/testi-shape-7.png" alt="">
                                                </div>
                                            </div>
                                            <div class="postbox__comment-text">
                                                <div class="postbox__comment-name d-flex">
                                                    <h5>Justin Case</h5>
                                                    <span class="post-meta"> April 8, 2022 at 7:38 am</span>
                                                </div>
                                                <p>Patient Comments are a collection of comments submitted
                                                    by viewers in <br> response to a question posed by a
                                                    MedicineNet doctor.</p>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="postbox__comment-form wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.5s"
                                style="visibility: hidden; animation-duration: 0.9s; animation-delay: 1.5s; animation-name: none;">
                                <h3 class="postbox__comment-form-title">Leave A Comment</h3>
                                <form action="#" class="box">
                                    <div class="row gx-20">
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
                                            <div class="postbox__contact-textarea mb-30">
                                                <textarea placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="postbox__comment-agree">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        I agree that my submitted data is being collected
                                                        and stored.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="postbox__comment-btn">
                                                <button type="submit" class="main-btn tp-btn-hover alt-color"><span>Post
                                                        comment</span><b></b></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="sidebar__wrapper">

                        <div class="sidebar__widget mb-2 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s"
                            style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s;">
                            <div class="sidebar__widge-title-box">
                                <h3 class="sidebar__widget-title">Recent Post</h3>
                            </div>
                            <div class="sidebar__widget-content  padding-con">
                                <div class="sidebar__post rc__post">
                                    @foreach ($recent as $recentBlog)
                                        <div class="rc__post mb-20 d-flex">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="#"><img
                                                        src="{{ url($recentBlog->getFirstMediaUrl('main_post_img_attache')) }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                    <a
                                                        href="{{ route('blog.show', ['blog' => $recentBlog->id]) }}">{{ $recentBlog->title }}</a>
                                                </h3>
                                                <div class="rc__meta">
                                                    <span>{{$recentBlog->created_at->format('M d, Y')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="sidebar__widget mb-2 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s"
                            style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.7s;">
                            <div class="sidebar__widge-title-box">
                                <h3 class="sidebar__widget-title">Categories</h3>
                            </div>
                            <div class="sidebar__widget-content  padding-con">
                                <ul>
                                    <li><a href="#"><span><i
                                                    class="fal fa-angle-right"></i>Technology</span><span>01</span></a>
                                    </li>
                                    <li><a href="#"><span><i
                                                    class="fal fa-angle-right"></i>Software</span><span>02</span></a>
                                    </li>
                                    <li><a href="#"><span><i
                                                    class="fal fa-angle-right"></i>Development</span><span>03</span></a>
                                    </li>
                                    <li><a href="#"><span><i class="fal fa-angle-right"></i>Tips &amp;
                                                Tricks</span><span>04</span></a></li>
                                    <li><a href="#"><span><i
                                                    class="fal fa-angle-right"></i>News</span><span>05</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog  -->
@endsection
