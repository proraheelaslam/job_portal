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
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-box mt-80">
    <div class="container">
        <div class="box-info-contact">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30"><a href="#"><img src="{{ asset('front_end/assets/imgs/page/contact/logo.svg') }}" alt="joxBox"></a>
                    <div class="font-sm color-text-paragraph">205 North Michigan Avenue, Suite 810 Chicago, 60601, USA<br> Phone: (123) 456-7890<br> Email: contact@jobbox.com</div><a class="text-uppercase color-brand-2 link-map" href="#">View map</a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <h6>London</h6>
                    <p class="font-sm color-text-paragraph mb-20">2118 Thornridge Cir. Syracuse,<br class="d-none d-lg-block"> Connecticut 35624</p>
                    <h6>New York</h6>
                    <p class="font-sm color-text-paragraph mb-20">4517 Washington Ave.<br class="d-none d-lg-block"> Manchester, Kentucky 39495</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <h6>Chicago</h6>
                    <p class="font-sm color-text-paragraph mb-20">3891 Ranchview Dr. Richardson,<br class="d-none d-lg-block"> California 62639</p>
                    <h6>San Francisco</h6>
                    <p class="font-sm color-text-paragraph mb-20">4140 Parker Rd. Allentown,<br class="d-none d-lg-block"> New Mexico 31134</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <h6>Sysney</h6>
                    <p class="font-sm color-text-paragraph mb-20">3891 Ranchview Dr. Richardson,<br class="d-none d-lg-block"> California 62639</p>
                    <h6>Singapore</h6>
                    <p class="font-sm color-text-paragraph mb-20">4140 Parker Rd. Allentown,<br class="d-none d-lg-block"> New Mexico 31134</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-box mt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-40"><span class="font-md color-brand-2 mt-20 d-inline-block">Contact us</span>
                <h2 class="mt-5 mb-10">Get in touch</h2>
                <p class="font-md color-text-paragraph-2">The right move at the right time saves your investment. live<br class="d-none d-lg-block"> the dream of expanding your business.</p>
                <form class="contact-form-style mt-30" id="contact-form" action="#" method="post">
                    <div class="row wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <div class="col-lg-6 col-md-6">
                            <div class="input-style mb-20">
                                <input class="font-sm color-text-paragraph-2" name="name" placeholder="Enter your name" type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="input-style mb-20">
                                <input class="font-sm color-text-paragraph-2" name="company" placeholder="Comapy (optioanl)" type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="input-style mb-20">
                                <input class="font-sm color-text-paragraph-2" name="email" placeholder="Your email" type="email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="input-style mb-20">
                                <input class="font-sm color-text-paragraph-2" name="phone" placeholder="Phone number" type="tel">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="textarea-style mb-30">
                                <textarea class="font-sm color-text-paragraph-2" name="message" placeholder="Tell us about yourself"></textarea>
                            </div>
                            <button class="submit btn btn-send-message" type="submit">Send message</button>
                            <label class="ml-20">
                                <input class="float-start mr-5 mt-6" type="checkbox"> By clicking contact us button, you agree our terms and policy,
                            </label>
                        </div>
                    </div>
                </form>
                <p class="form-messege"></p>
            </div>
            <div class="col-lg-4 text-center d-none d-lg-block"><img src="{{ asset('front_end/assets/imgs/page/contact/img.png') }}" alt="joxBox"></div>
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
                            <figure><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/about/team1.png') }}"></figure>
                        </div>
                        <div class="card-grid-4-info">
                            <h5 class="mt-10">Arlene McCoy</h5>
                            <p class="font-xs color-text-paragraph-2 mt-5 mb-5">Frontend Developer</p>
                            <div class="rate-reviews-small pt-5"><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span><img src="{{ asset('front_end/assets/imgs/template/icons/star.svg') }}" alt="jobBox"></span><span class="ml-10 color-text-mutted font-xs"><span>(</span><span>65</span><span>)</span></span></div><span class="card-location">New York, US</span>
                            <div class="text-center mt-30"><a class="share-facebook social-share-link" href="#"></a><a class="share-twitter social-share-link" href="#"></a><a class="share-instagram social-share-link" href="#"></a><a class="share-linkedin social-share-link" href="#"></a></div>
                        </div>
                    </div>
                </div>
                <!-- Repeat the same pattern for other team members -->
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
                                <div class="text-center card-grid-3-image"><a href="#">
                                    <figure><img alt="jobBox" src="{{ asset('front_end/assets/imgs/page/homepage1/img-news1.png') }}"></figure></a></div>
                                <div class="card-block-info">
                                    <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">News</a></div>
                                    <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                                    <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world’s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                                    <div class="card-2-bottom mt-20">
                                        <div class="row">
                                            <div class="col-lg-6 col-6">
                                                <div class="d-flex"><img class="img-rounded" src="{{ asset('front_end/assets/imgs/page/homepage1/user1.png') }}" alt="jobBox">
                                                    <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Sarah Harding</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
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
            <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="blog-grid.html">Load More Posts</a></div>
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
                        <!-- Repeat for other customer testimonials -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-box mt-50 mb-20">
    <div class="container">
        <div class="box-newsletter">
            <div class="row">
                <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="{{ asset('front_end/assets/imgs/template/newsletter-left.png') }}" alt="joxBox"></div>
                <div class="col-lg-12 col-xl-6 col-12">
                    <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
                    <div class="box-form-newsletter mt-40">
                        <form class="form-newsletter">
                            <input class="input-newsletter" type="text" value="" placeholder="Enter your email here">
                            <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="{{ asset('front_end/assets/imgs/template/newsletter-right.png') }}" alt="joxBox"></div>
            </div>
        </div>
    </div>
</section>


@endsection
