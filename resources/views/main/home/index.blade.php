@extends('layouts.main.app')
@section('meta')
    <meta name="description" content="{{ detail_website()->meta_description }}">
    <meta name="keywords" content="{{ detail_website()->meta_keywords }}">
@endsection
@section('style')
@endsection
@section('content')

<section class="page-title">
    <div class="icon_bg">
        <img src="{{ asset('assets/images/backgroup/bg_inner_slider.png') }}" alt="">
    </div>
    <div class="swiper-container slider-main">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slider-st1">
                    <div class="overlay">
                        <img src="{{ asset('assets/images/backgroup/bg-slider.png') }}" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-slider">
                                    <div class="content-box">
                                        <h1 class="title" >Enter the gateway of Blockchain Gaming</h1>
                                        <p class="sub-title">Visually and spatially connecting games in a seamless metaverse experience</p>
                                        <div class="wrap-btn">
                                            <a href="project-list.html" class="tf-button style2">
                                                EXPLORE IGO
                                            </a>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img class="img_main" src="{{ asset('assets/images/slider/Furore.png') }}" alt="">
                                        <div class="icon icon1">
                                            <img src="{{ asset('assets/images/slider/icon_1.png') }}" alt="">
                                        </div>
                                        <div class="icon icon2">
                                            <img src="{{ asset('assets/images/slider/icon_2.png') }}" alt="">
                                        </div>
                                        <div class="icon icon3">
                                            <img src="{{ asset('assets/images/slider/icon_3.png') }}" alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slider-st1">
                    <div class="overlay">
                        <img src="./assets/images//backgroup/bg-slider.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-slider">
                                    <div class="content-box">
                                        <h1 class="title">Enter the gateway of Blockchain Gaming</h1>
                                        <p class="sub-title">Visually and spatially connecting games in a seamless metaverse experience</p>
                                        <div class="wrap-btn">
                                            <a href="#" class="tf-button style2">
                                                EXPLORE IGO
                                            </a>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img class="img_main" src="assets/images/slider/Furore.png" alt="">
                                        <div class="icon icon1">
                                            <img src="{{ asset('assets/images/slider/icon_1.png') }}" alt="">
                                        </div>
                                        <div class="icon icon2">
                                            <img src="{{ asset('assets/images/slider/icon_2.png') }}" alt="">
                                        </div>
                                        <div class="icon icon3">
                                            <img src="{{ asset('assets/images/slider/icon_3.png') }}" alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="btn-next-main"><i class="far fa-angle-right"></i></div>
        <div class="btn-prev-main"><i class="far fa-angle-left"></i></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="tf-section project">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tf-title" data-aos="fade-up" data-aos-duration="800">
                    <h2 class="title">
                        Featured iGO projects <br class="show-destop"> coming soon
                    </h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="project-wrapper">
                    <div class="image-wrapper" data-aos="fade-in" data-aos-duration="1000">
                        <div class="swiper-container slider-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/slider/img_slider_1.jpg') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/slider/img_slider_1.jpg') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/slider/img_slider_1.jpg') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/slider/img_slider_1.jpg') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/slider/img_slider_1.jpg') }}" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination bottom_0"></div>

                        </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="content_inner" data-aos="fade-left" data-aos-duration="1200">
                            <div class="wrapper">
                                <h4>Codyfight IGO</h4>
                            <p class="desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent varius risus sed pellentesque
                            </p>
                            <ul class="price"> 
                                <li>
                                    <span>Price: $0.4</span>
                                </li>
                                <li>
                                   <span>Total sales: $4720</span>
                                </li>
                            </ul>
                            <h6 class="featured_title">Sale end in</h6>
                            <div class="featured-countdown">
                                <span class="slogan"></span>
                                <span class="js-countdown" data-timer="1865550"></span>
                                <ul class="desc">
                                    <li>day</li>
                                    <li>hou</li>
                                    <li>min</li>
                                    <li>sec</li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-section project_2">
    <div class="overlay">
        <img src="{{ asset('assets/images/backgroup/bg_project.png') }}" alt="">
    </div>
    <div class="container w_1690">
        <div class="row">
            <div class="col-md-12">
                <div class="tf-title" data-aos="fade-up" data-aos-duration="800">
                    <h2 class="title">
                        Projects that promise a lot <br class="show-destop"> of potential
                    </h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="container_inner">
                    <div class="swiper-container slider-2" data-aos="fade-in" data-aos-duration="1000">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="image">
                                        <img class="mask" src="{{ asset('assets/images/common/project_1.png') }}" alt="">
                                        <div class="shape">
                                            <img src="{{ asset('assets/images/common/shape.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="boder"></span>
                                        <div class="content-inner">
                                            <h5 class="heading"><a href="./project-list.html">Zombie plant 2</a></h5>
                                            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                Praesent varius risus sed pellentesque</p>
                                        </div>
                                    </div>
                                    <a href="project-list.html" class="tf-button style1">
                                        EXPLORE
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="image">
                                        <img class="mask" src="{{ asset('assets/images/common/project_1.png') }}" alt="">
                                        <div class="shape">
                                            <img src="{{ asset('assets/images/common/shape.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="boder"></span>
                                        <div class="content-inner">
                                            <h5 class="heading"><a href="./project-list.html">Zombie plant 2</a></h5>
                                            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                Praesent varius risus sed pellentesque</p>
                                        </div>
                                    </div>
                                    <a href="project-list.html" class="tf-button style1">
                                        EXPLORE
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="image">
                                        <img class="mask" src="{{ asset('assets/images/common/project_1.png') }}" alt="">
                                        <div class="shape">
                                            <img src="{{ asset('assets/images/common/shape.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="boder"></span>
                                        <div class="content-inner">
                                            <h5 class="heading"><a href="./project-list.html">Zombie plant 2</a></h5>
                                            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                Praesent varius risus sed pellentesque</p>
                                        </div>
                                    </div>
                                    <a href="project-list.html" class="tf-button style1">
                                        EXPLORE
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="image">
                                        <img class="mask" src="{{ asset('assets/images/common/project_1.png') }}" alt="">
                                        <div class="shape">
                                            <img src="{{ asset('assets/images/common/shape.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="boder"></span>
                                        <div class="content-inner">
                                            <h5 class="heading"><a href="./project-list.html">Zombie plant 2</a></h5>
                                            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                Praesent varius risus sed pellentesque</p>
                                        </div>
                                    </div>
                                    <a href="project-list.html" class="tf-button style1">
                                        EXPLORE
                                    </a>
                                </div>
                            </div>
                        </div>
           
                    </div>
                    <div class="next_slider-2 next_slider"><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 8H16.5M16.5 8L9.75 1.25M16.5 8L9.75 14.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </div>
                    <div class="prev_slider-2 prev_slider"><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5 8H1.5M1.5 8L8.25 1.25M1.5 8L8.25 14.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </div>
                </div>
               
            </div>
        </div>
    </div>
</section>

<section class="tf-section project_3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tf-title" data-aos="fade-up" data-aos-duration="800">
                    <h2 class="title">
                        Easy to join IGO <br class="show-destop">  with 3 steps
                    </h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="project-box-style2_wrapper">
                    <div class="project-box-style2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                        <div class="image">
                            <img src="{{ asset('assets/images/common/project_5.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h5>Submit KYC</h5>
                            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at nunc non ligula suscipit tincidunt at sit amet nunc.</p>
                            <p class="number">01</p>
                        </div>

                    </div>
                    <div class="project-box-style2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                        <div class="image">
                            <img src="./assets/images/common/project_6.png" alt="">
                        </div>
                        <div class="content">
                            <h5>Verify Wallet</h5>
                            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at nunc non ligula suscipit tincidunt at sit amet nunc.</p>
                            <p class="number">02</p>
                        </div>

                    </div>
                    <div class="project-box-style2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                        <div class="image">
                            <img src="./assets/images/common/project_7.png" alt="">
                        </div>
                        <div class="content">
                            <h5>Start Staking</h5>
                            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at nunc non ligula suscipit tincidunt at sit amet nunc.</p>
                            <p class="number">03</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-section tf_partner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tf-title" data-aos="fade-up" data-aos-duration="800">
                    <h2 class="title">
                        Our Partners
                    </h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="partner-wrapper" data-aos="fade-up" data-aos-duration="800">
                    <a href="home-02.html" class="image">
                        <img src="./assets/images/partner/01.png" alt="">
                    </a>
                    <a href="home-02.html" class="image ">
                        <img class="active" src="./assets/images/partner/02.png" alt="">
                    </a>
                    <a href="home-02.html" class="image">
                        <img src="./assets/images/partner/03.png" alt="">
                    </a>
                    <a href="home-02.html" class="image">
                        <img src="./assets/images/partner/04.png" alt="">
                    </a>
                    <a href="home-02.html" class="image">
                        <img src="./assets/images/partner/05.png" alt="">
                    </a>
                    <a href="home-02.html" class="image">
                        <img src="./assets/images/partner/06.png" alt="">
                    </a>
                    <a href="home-02.html" class="image">
                        <img src="./assets/images/partner/07.png" alt="">
                    </a>
                    <a href="home-02.html" class="image">
                        <img src="./assets/images/partner/08.png" alt="">
                    </a>
                    <a href="home-02.html" class="image">
                        <img src="./assets/images/partner/09.png" alt="">
                    </a>
                    <a href="home-02.html" class="image">
                        <img src="./assets/images/partner/10.png" alt="">
                    </a>
                    <a href="home-02.html" class="image">
                        <img src="./assets/images/partner/11.png" alt="">
                    </a>
                    <a href="home-02.html" class="image">
                        <img src="./assets/images/partner/12.png" alt="">
                    </a>
                    <a href="home-02.html" class="image style">
                    </a>
                    <a href="home-02.html" class="image">
                        <img src="./assets/images/partner/13.png" alt="">
                    </a>
                    <a href="home-02.html" class="image">
                        <img src="./assets/images/partner/14.png" alt="">
                    </a>
                    <a href="home-02.html" class="image">
                        <img src="./assets/images/partner/15.png" alt="">
                    </a>
                    <a href="home-02.html" class="image">
                        <img src="./assets/images/partner/16.png" alt="">
                    </a>
                    <a href="home-02.html" class="image style">
                    </a>
                </div>
              
            </div>
        </div>
    </div>
</section>

<section class="tf-section tf_CTA">

    <div class="container relative">
        <div class="overlay">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tf-title left mt58" data-aos="fade-up" data-aos-duration="800">
                    <h2 class="title">
                        Launch on Risebot
                    </h2>
                    <p class="sub">Full support in project incubation</p>
                    <div class="wrap-btn">
                        <a href="submit-IGO-on-chain.html" class="tf-button style3">
                            Apply Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
              <div class="image_cta" data-aos="fade-left" data-aos-duration="1200">
                <img class="move4" src="./assets/images/common/img_cta.png" alt="">
              </div>
            </div>
        </div>
    </div>
</section>

@endsection
