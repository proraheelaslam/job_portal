@extends('front_end.layouts.app')

@section('content')
<section class="section-box">
    <div class="breacrumb-cover bg-img-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mb-10">About Us</h2>
                    <p class="font-lg color-text-paragraph-2">Get the latest news, updates and tips</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="breadcrumbs mt-40">
                        <li><a class="home-icon" href="#">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-box mt-50">
    <div class="post-loop-grid">
        <div class="container">
            <div class="text-center">
                <h6 class="f-18 color-text-mutted text-uppercase">Our company</h6>
                <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">About Our Company</h2>
                <p class="font-sm color-text-paragraph wow animate__animated animate__fadeInUp w-lg-50 mx-auto"> Discover how Prashant Daebak leverages advanced AI technology to simplify job interviews, exam preparation, and everyday problem-solving. Learn about our commitment to personalized support, innovation, and your success.</p>
            </div>
            <div class="row mt-70">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="{{ asset('front_end/assets/imgs/page/about/img-about2.png') }}" alt="joxBox">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h3 class="mt-15">What we can do?</h3>
                    <div class="mt-20">
                        <p class="font-md color-text-paragraph mt-20">Aenean sollicitudin, lorem quis bibendum auctor nisi elit consequat ipsum sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris orci accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor ornare odio.</p>
                        <p class="font-md color-text-paragraph mt-20">Aenean sollicitudin, lorem quis bibendum auctor nisi elit consequat ipsum sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris orci accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor ornare odio.</p>
                        <p class="font-md color-text-paragraph mt-20">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis non nisi purus. Integer sit nostra, per inceptos himenaeos.</p>
                    </div>
                    <div class="mt-30">
                        <a class="btn btn-brand-1" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-box mt-80">
    <div class="post-loop-grid">
        <div class="container">
            <div class="text-center">
                <h6 class="f-18 color-text-mutted text-uppercase">Our company</h6>
                <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Meet Our Team</h2>
                <p class="font-sm color-text-paragraph w-lg-50 mx-auto wow animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ligula ante, dictum non aliquet eu, dapibus ac quam. Morbi vel ante viverra orci tincidunt tempor eu id ipsum. Sed consectetur, risus a blandit tempor, velit magna pellentesque risus, at congue tellus dui quis nisl.</p>
            </div>
            <div class="row mt-70">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-md-30">
                    <div class="card-grid-4 text-center hover-up">
                        <div class="image-top-feature">
                            <figure>
                                <img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/about/team1.png') }}">
                            </figure>
                        </div>
                        <div class="card-grid-4-info">
                            <h5 class="mt-10">Arlene McCoy</h5>
                            <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                            <div class="rate-reviews-small pt-5">
                                <span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span>
                                <span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span>
                                <span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span>
                                <span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span>
                                <span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span>
                                <span class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span>
                            </div>
                            <span class="card-location">New York, US</span>
                            <div class="text-center mt-30">
                                <a class="share-facebook social-share-link" href="#"></a>
                                <a class="share-twitter social-share-link" href="#"></a>
                                <a class="share-instagram social-share-link" href="#"></a>
                                <a class="share-linkedin social-share-link" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repeat for other team members as needed -->
            </div>
        </div>
    </div>
</section>

<section class="section-box mt-50 mb-50">
    <div class="container">
        <div class="text-start">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">News and Blog</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest news, updates and tips</p>
        </div>
    </div>
    <div class="container">
        <div class="mt-50">
            <div class="box-swiper style-nav-top">
                <div class="swiper-container swiper-group-3 swiper">
                    <div class="swiper-wrapper pb-70 pt-5">
                        <div class="swiper-slide">
                            <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                <div class="text-center card-grid-3-image">
                                    <a href="#">
                                        <figure>
                                            <img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/homepage1/img-news1.png') }}">
                                        </figure>
                                    </a>
                                </div>
                                <div class="card-block-info">
                                    <div class="tags mb-15">
                                        <a class="btn btn-tag" href="blog-grid.html">News</a>
                                    </div>
                                    <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                                    <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world’s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                                    <div class="card-2-bottom mt-20">
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="d-flex">
                                                    <img class="img-rounded" src="{{ asset('front_end/assets/imgs/page/homepage1/user1.png') }}" alt="jobBox">
                                                    <div class="info-right-img">
                                                        <span class="font-sm font-bold color-brand-1 op-70">Sarah Harding</span><br>
                                                        <span class="font-xs color-text-paragraph-2">06 September</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-end col-6 pt-15">
                                                <span class="color-text-paragraph-2 font-xs">8 mins to read</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat for other news posts -->
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="text-center">
                <a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="blog-grid.html">Load More Posts</a>
            </div>
        </div>
    </div>
</section>
<section class="section-box mt-30 mb-40">
    <div class="container">
        <h2 class="text-center mb-15 wow animate__animated animate__fadeInUp">Our Happy Customer</h2>
        <div class="font-lg color-text-paragraph-2 text-center wow animate__animated animate__fadeInUp">When it comes to choosing the right web hosting provider, we know how easy it<br class="d-none d-lg-block"> is to get overwhelmed with the number.</div>
        <div class="row mt-50">
            <div class="box-swiper">
                <div class="swiper-container swiper-group-3 swiper">
                    <div class="swiper-wrapper pb-70 pt-5">
                        <div class="swiper-slide">
                            <div class="card-grid-6 hover-up">
                                <div class="card-text-desc mt-10">
                                    <p class="font-md color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet neque finibus egestas ut at magna. Cras tincidunt tortor sed eros aliquam eleifend.</p>
                                </div>
                                <div class="card-image">
                                    <div class="image">
                                        <figure><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/about/user1.png') }}"></figure>
                                    </div>
                                    <div class="card-profile">
                                        <h6>Mark Adair</h6><span>Businessmen</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-6 hover-up">
                                <div class="card-text-desc mt-10">
                                    <p class="font-md color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet neque finibus egestas ut at magna. Cras tincidunt tortor sed eros aliquam eleifend.</p>
                                </div>
                                <div class="card-image">
                                    <div class="image">
                                        <figure><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/about/user2.png') }}"></figure>
                                    </div>
                                    <div class="card-profile">
                                        <h6>Mark Adair</h6><span>Businessmen</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-6 hover-up">
                                <div class="card-text-desc mt-10">
                                    <p class="font-md color-text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae neque metus. Vivamus consectetur ultricies commodo. Pellentesque at nisl sit amet neque finibus egestas ut at magna. Cras tincidunt tortor sed eros aliquam eleifend.</p>
                                </div>
                                <div class="card-image">
                                    <div class="image">
                                        <figure><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/about/user3.png') }}"></figure>
                                    </div>
                                    <div class="card-profile">
                                        <h6>Mark Adair</h6><span>Businessmen</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination3"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
