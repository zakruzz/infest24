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
                                        <h1 class="title" >Make Future <br> By Adventure.</h1>
                                        <p class="sub-title">Ayo Membuat Masa Depan Cerah Dengan Berpetualang Di INFEST 2024</p>
                                        <div class="wrap-btn">
                                            <a href="#event" class="tf-button style2">
                                                Event-Event Kami
                                            </a>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img class="img_main" src="{{ asset('assets/images/slider/Furore.png') }}" alt="" style="height: auto; width: 75%;">
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
            {{-- <div class="swiper-slide">
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
            </div> --}}
        </div>
        {{-- <div class="btn-next-main"><i class="far fa-angle-right"></i></div>
        <div class="btn-prev-main"><i class="far fa-angle-left"></i></div>
        <div class="swiper-pagination"></div> --}}
    </div>
</section>

{{-- <section class="tf-section project">
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
</section> --}}

<section class="tf-section project_3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tf-title" data-aos="fade-up" data-aos-duration="800">
                    <h2 class="title mt-5">
                        Manfaat Mengikuti <br class="show-destop">  Petualangan Kami
                    </h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="project-box-style2_wrapper">
                    <div class="project-box-style2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                        <div class="image">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256"
                            style="fill:#40C057;">
                            <g fill="#40c057" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,2c-12.683,0 -23,10.317 -23,23c0,12.683 10.317,23 23,23c12.683,0 23,-10.317 23,-23c0,-4.56 -1.33972,-8.81067 -3.63672,-12.38867l-1.36914,1.61719c1.895,3.154 3.00586,6.83148 3.00586,10.77148c0,11.579 -9.421,21 -21,21c-11.579,0 -21,-9.421 -21,-21c0,-11.579 9.421,-21 21,-21c5.443,0 10.39391,2.09977 14.12891,5.50977l1.30859,-1.54492c-4.085,-3.705 -9.5025,-5.96484 -15.4375,-5.96484zM43.23633,7.75391l-19.32227,22.80078l-8.13281,-7.58594l-1.36328,1.46289l9.66602,9.01563l20.67969,-24.40039z"></path></g></g>
                            </svg>
                        </div>
                        <div class="content">
                            <h5>Dapat Banyak <br> Relasi</h5>
                            <p class="desc">Tentu Saja Kalian Akan Mendapatkan Banyak Sekali Relasi Saat Mengikuti Petualangan Dari Kami.</p>
                            <p class="number">01</p>
                        </div>

                    </div>
                    <div class="project-box-style2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                        <div class="image">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256"
                            style="fill:#40C057;">
                            <g fill="#40c057" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,2c-12.683,0 -23,10.317 -23,23c0,12.683 10.317,23 23,23c12.683,0 23,-10.317 23,-23c0,-4.56 -1.33972,-8.81067 -3.63672,-12.38867l-1.36914,1.61719c1.895,3.154 3.00586,6.83148 3.00586,10.77148c0,11.579 -9.421,21 -21,21c-11.579,0 -21,-9.421 -21,-21c0,-11.579 9.421,-21 21,-21c5.443,0 10.39391,2.09977 14.12891,5.50977l1.30859,-1.54492c-4.085,-3.705 -9.5025,-5.96484 -15.4375,-5.96484zM43.23633,7.75391l-19.32227,22.80078l-8.13281,-7.58594l-1.36328,1.46289l9.66602,9.01563l20.67969,-24.40039z"></path></g></g>
                            </svg>
                        </div>
                        <div class="content">
                            <h5>Dapat Banyak Sertifikat</h5>
                            <p class="desc">Kalau Ini Sudah Pasti Yaa, Kalian Akan Mendapatkan Sertifikat Setiap Mengikuti Petualangan Dari Kami.</p>
                            <p class="number">02</p>
                        </div>

                    </div>
                    <div class="project-box-style2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                        <div class="image">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256"
                            style="fill:#40C057;">
                            <g fill="#40c057" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,2c-12.683,0 -23,10.317 -23,23c0,12.683 10.317,23 23,23c12.683,0 23,-10.317 23,-23c0,-4.56 -1.33972,-8.81067 -3.63672,-12.38867l-1.36914,1.61719c1.895,3.154 3.00586,6.83148 3.00586,10.77148c0,11.579 -9.421,21 -21,21c-11.579,0 -21,-9.421 -21,-21c0,-11.579 9.421,-21 21,-21c5.443,0 10.39391,2.09977 14.12891,5.50977l1.30859,-1.54492c-4.085,-3.705 -9.5025,-5.96484 -15.4375,-5.96484zM43.23633,7.75391l-19.32227,22.80078l-8.13281,-7.58594l-1.36328,1.46289l9.66602,9.01563l20.67969,-24.40039z"></path></g></g>
                            </svg>
                        </div>
                        <div class="content">
                            <h5>Dapat Banyak <br> Ilmu</h5>
                            <p class="desc">Akan Ada Banyakk Sekali Ilmu Yang Didapatkan Jika Kalian Mengikuti Petualangan Kami.</p>
                            <p class="number">03</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-section project_2" id="event">
    <div class="overlay">
        <img src="{{ asset('assets/images/backgroup/bg_project.png') }}" alt="">
    </div>
    <div class="container w_1690">
        <div class="row">
            <div class="col-md-12">
                <div class="tf-title" data-aos="fade-up" data-aos-duration="800">
                    <h2 class="title" style="margin-top: 10%">
                        Event-Event <br class="show-destop"> Kami
                    </h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="container_inner ">
                    <div class="swiper-container slider-2" data-aos="fade-in" data-aos-duration="1000">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="image">
                                        <img class="mask1" src="{{ asset('assets/images/common/project_income.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <span class="boder"></span>
                                        <div class="content-inner">
                                            <h5 class="heading"><a href="#">INSPECTION</a></h5>
                                            <p class="desc">Sebuah Kegiatan Petualang Yang Lebih Berfokus Pada Karya Tulis Ilmiah Khusus Untuk Siswa SMA/MA/SMK Berkelompok <br>[3 Orang/Kelompok]</p>
                                        </div>
                                    </div>
                                    <a href="/inspection" class="tf-button style1">
                                        EXPLORE
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="image">
                                        <img class="mask1" src="{{ asset('assets/images/common/project_income.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <span class="boder"></span>
                                        <div class="content-inner">
                                            <h5 class="heading"><a href="#">INSKILL</a></h5>
                                            <p class="desc">Sebuah Kegiatan Petualang Yang Lebih Berfokus Pada Lomba Programmable Logic Controller untuk Siswa/Siswi Yang Terampil</p>
                                        </div>
                                    </div>
                                    <a href="/inskill" class="tf-button style1">
                                        EXPLORE
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="image">
                                        <img class="mask2" src="{{ asset('assets/images/common/project_instraining.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <span class="boder"></span>
                                        <div class="content-inner">
                                            <h5 class="heading"><a href="#">INSTRAINING</a></h5>
                                            <p class="desc">Sebuah Kegiatan Petualang Yang Lebih Berfokus Pada Webinar-Webinar Dengan Narasumber Kompeten Seputar Teknik Instrumentasi</p>
                                            
                                        </div>
                                    </div>
                                        <a href="#" class="tf-button style1">
                                            EXPLORE
                                        </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="image">
                                        <img class="mask3" src="{{ asset('assets/images/common/project_inshow.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <span class="boder"></span>
                                        <div class="content-inner">
                                            <h5 class="heading"><a href="#">One Day Lecture</a></h5>
                                            <p class="desc">Sebuah Kegiatan Petualang Yang Lebih Berfokus Pada Pengenalan Melalui One Day Lecture Teknik Instrumentasi </p>
                                        </div>
                                    </div>
                                    <a href="/odl" class="tf-button style1">
                                        EXPLORE
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-box">
                                    <div class="image">
                                        <img class="mask3" src="{{ asset('assets/images/common/project_inshow.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <span class="boder"></span>
                                        <div class="content-inner">
                                            <h5 class="heading"><a href="#">Talk Show</a></h5>
                                            <p class="desc">Sebuah Kegiatan Petualang Yang Lebih Berfokus Pada Pengenalan Melalui Talk Show Teknik Instrumentasi </p>
                                        </div>
                                    </div>
                                    <a href="#" class="tf-button style1">
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



{{-- <section class="tf-section tf_partner">
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
</section> --}}

<section class="tf-section tf_CTA">
    <div class="container" style="margin-top: 17%">
        <div class="row">
            <div class="col-md-6">
                <div class="tf-title left mt58" data-aos="fade-up" data-aos-duration="800">
                    <h2 class="title">
                        Terjadi ERROR? atau Kebingungan?
                    </h2>
                    <p class="sub">Isi Formulir Di Kontak Kami Yaa...</p>
                    <div class="wrap-btn">
                        <a href="/contact" class="tf-button style3">
                            Kontak
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