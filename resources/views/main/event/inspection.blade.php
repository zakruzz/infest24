@extends('layouts.main.app')
@section('style')
@endsection
@section('content')
<section class="page-title">
    <div class="swiper-container slider-main">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slider-st2">
                    <img
                        class="icon icon_1"
                        src="./assets/images/common/Robot1.png"
                        style="height: auto; width: 10%"
                        alt=""
                    />
                    <img
                        class="icon icon_2"
                        src="./assets/images/common/icon2_slider_2INCOME.png"
                        style="height: auto; width: 10%; top: 12.5%;"
                        alt=""
                    />
                    <img
                        class="icon icon_3"
                        src="./assets/images/common/Robot2.png"
                        style="height: auto; width: 10%"
                        alt=""
                    />
                    <div class="overlay">
                        <img
                            src="{{
                                asset('assets/images/backgroup/bg-odl3.png')
                            }}"
                            alt=""
                        />
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-slider">
                                    <div class="content-box">
                                        <h1 class="title">
                                            "INSPECTION (Instrumentation Paper Competition)"
                                        </h1>
                                        <p class="sub-title">
                                            merupakan sebuah kompetisi dalam bidang Karya Tulis Ilmiah yang ditujukan kepada siswa/siswi SMA/SMK sederajat untuk meningkatkan kreativitas dan inovasi dalam bidang instrumentasi. INSPECTION membawakan tema “Peran Teknik Instrumentasi Dalam Mewujudkan Indonesia Green Growth and Global Goals 2030” dan dari tema tersebut memiliki beberapa subtema. Perlombaan dilakukan dengan beranggotakan maksimal 3 orang dalam satu tim. Terdapat 2 kategori perlombaan, yaitu Gagasan Tertulis untuk siswa SMA dan Karsa Cipta untuk siswa SMK. Peserta melalui berbagai tahap penilaian mulai dari seleksi abstrak, seleksi full paper, seleksi poster hingga tahap grand final. Pada perlombaan ini, tahap grand final dilakukan secara offline.
                                        </p>
                                        <div
                                            class="wrap-btn d-grid gap-2 d-md-flex justify-content-md-center"
                                        >
                                            <a
                                                href="/register"
                                                class="tf-button style2 me-md-2"
                                            >
                                                Daftar
                                            </a>
                                            <a
                                                href="#"
                                                data-toggle="modal"
                                                data-target="#popup_bid1"
                                                class="tf-button style2 me-md-2"
                                            >
                                                Guide Book/Poster
                                            </a>
                                            <a
                                                href="#faq"
                                                class="tf-button style2 me-md-2"
                                            >
                                                Frequently Asked Questions
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--
        <div class="btn-next-main"><i class="far fa-angle-right"></i></div>
        <div class="btn-prev-main"><i class="far fa-angle-left"></i></div>
        <div class="swiper-pagination"></div>
        --}}
    </div>
</section>
{{-- <section class="tf-section fueture">
    <div class="container w_1320">
        <div class="row">
            <div class="col-md-12">
                <div
                    class="tf-title"
                    data-aos="fade-up"
                    data-aos-duration="800"
                >
                    <h2 class="title">Alur Pendaftaran</h2>
                </div>
                <div class="container_inner">
                    <div
                        class="swiper-container slider-10"
                        data-aos="fade-in"
                        data-aos-duration="1000"
                    >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="icon-box">
                                    <div class="top">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256"
                                            style="fill:#40C057;">
                                            <g fill="#40c057" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,2c-12.683,0 -23,10.317 -23,23c0,12.683 10.317,23 23,23c12.683,0 23,-10.317 23,-23c0,-4.56 -1.33972,-8.81067 -3.63672,-12.38867l-1.36914,1.61719c1.895,3.154 3.00586,6.83148 3.00586,10.77148c0,11.579 -9.421,21 -21,21c-11.579,0 -21,-9.421 -21,-21c0,-11.579 9.421,-21 21,-21c5.443,0 10.39391,2.09977 14.12891,5.50977l1.30859,-1.54492c-4.085,-3.705 -9.5025,-5.96484 -15.4375,-5.96484zM43.23633,7.75391l-19.32227,22.80078l-8.13281,-7.58594l-1.36328,1.46289l9.66602,9.01563l20.67969,-24.40039z"></path></g></g>
                                            </svg>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">Daftar</a></h5>
                                            <p>
                                                Klik Tombol Daftar Pada Website,
                                                Yang Nanti Akan Diarahkan Ke
                                                Halaman Login.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <img
                                            src="./assets/images/backgroup/bg_bt_box_1.png"
                                            alt=""
                                        />
                                    </div>
                                    <div class="number">1</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="icon-box">
                                    <div class="top">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256"
                                            style="fill:#40C057;">
                                            <g fill="#40c057" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,2c-12.683,0 -23,10.317 -23,23c0,12.683 10.317,23 23,23c12.683,0 23,-10.317 23,-23c0,-4.56 -1.33972,-8.81067 -3.63672,-12.38867l-1.36914,1.61719c1.895,3.154 3.00586,6.83148 3.00586,10.77148c0,11.579 -9.421,21 -21,21c-11.579,0 -21,-9.421 -21,-21c0,-11.579 9.421,-21 21,-21c5.443,0 10.39391,2.09977 14.12891,5.50977l1.30859,-1.54492c-4.085,-3.705 -9.5025,-5.96484 -15.4375,-5.96484zM43.23633,7.75391l-19.32227,22.80078l-8.13281,-7.58594l-1.36328,1.46289l9.66602,9.01563l20.67969,-24.40039z"></path></g></g>
                                            </svg>
                                        </div>
                                        <div class="content">
                                            <h5>
                                                <a href="#"
                                                    >Login/Register</a
                                                >
                                            </h5>
                                            <p>
                                                Jika Sudah Memiliki Akun Silahkan Langsung Login dengan Akun yang Telah Terdaftar Sebelumnya, Jika Belum Mempunyai Akun Silahkan Klik Tulisan "Register" yang Ada Pada Halaman Login, dan buatlah akunnya.                                            </p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <img
                                            src="./assets/images/backgroup/bg_bt_box_1.png"
                                            alt=""
                                        />
                                    </div>
                                    <div class="number">2</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="icon-box">
                                    <div class="top">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256"
                                            style="fill:#40C057;">
                                            <g fill="#40c057" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,2c-12.683,0 -23,10.317 -23,23c0,12.683 10.317,23 23,23c12.683,0 23,-10.317 23,-23c0,-4.56 -1.33972,-8.81067 -3.63672,-12.38867l-1.36914,1.61719c1.895,3.154 3.00586,6.83148 3.00586,10.77148c0,11.579 -9.421,21 -21,21c-11.579,0 -21,-9.421 -21,-21c0,-11.579 9.421,-21 21,-21c5.443,0 10.39391,2.09977 14.12891,5.50977l1.30859,-1.54492c-4.085,-3.705 -9.5025,-5.96484 -15.4375,-5.96484zM43.23633,7.75391l-19.32227,22.80078l-8.13281,-7.58594l-1.36328,1.46289l9.66602,9.01563l20.67969,-24.40039z"></path></g></g>
                                            </svg>
                                        </div>
                                        <div class="content">
                                            <h5>
                                                <a href="#"
                                                    >Lengkapi
                                                    Persyaratan-Persyaratan</a
                                                >
                                            </h5>
                                            <p>
                                                Setelah Login Peserta Akan Diarahkan Ke Halaman Dashboard dan Pilih Kolom Event Pada Navbar Sebelah Kiri, Kemudian Pilih "INSPECTION", dan Lanjut dengan  Melengkapi Persyaratan-Persyaratan
                                                Yang Telah Ditentukan Oleh
                                                Panitia.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <img
                                            src="./assets/images/backgroup/bg_bt_box_1.png"
                                            alt=""
                                        />
                                    </div>
                                    <div class="number">3</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="icon-box">
                                    <div class="top">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256"
                                            style="fill:#40C057;">
                                            <g fill="#40c057" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,2c-12.683,0 -23,10.317 -23,23c0,12.683 10.317,23 23,23c12.683,0 23,-10.317 23,-23c0,-4.56 -1.33972,-8.81067 -3.63672,-12.38867l-1.36914,1.61719c1.895,3.154 3.00586,6.83148 3.00586,10.77148c0,11.579 -9.421,21 -21,21c-11.579,0 -21,-9.421 -21,-21c0,-11.579 9.421,-21 21,-21c5.443,0 10.39391,2.09977 14.12891,5.50977l1.30859,-1.54492c-4.085,-3.705 -9.5025,-5.96484 -15.4375,-5.96484zM43.23633,7.75391l-19.32227,22.80078l-8.13281,-7.58594l-1.36328,1.46289l9.66602,9.01563l20.67969,-24.40039z"></path></g></g>
                                            </svg>
                                        </div>
                                        <div class="content">
                                            <h5>
                                                <a href="#"
                                                    >Kirim
                                                    Persyaratan-Persyaratan</a
                                                >
                                            </h5>
                                            <p>
                                                Klik Tombol Kirim Yang Telah
                                                Tertera Pada Formulir Website
                                                Untuk Menyelesaikan Pendaftaran.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <img
                                            src="./assets/images/backgroup/bg_bt_box_1.png"
                                            alt=""
                                        />
                                    </div>
                                    <div class="number">4</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="icon-box">
                                    <div class="top">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256"
                                            style="fill:#40C057;">
                                            <g fill="#40c057" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,2c-12.683,0 -23,10.317 -23,23c0,12.683 10.317,23 23,23c12.683,0 23,-10.317 23,-23c0,-4.56 -1.33972,-8.81067 -3.63672,-12.38867l-1.36914,1.61719c1.895,3.154 3.00586,6.83148 3.00586,10.77148c0,11.579 -9.421,21 -21,21c-11.579,0 -21,-9.421 -21,-21c0,-11.579 9.421,-21 21,-21c5.443,0 10.39391,2.09977 14.12891,5.50977l1.30859,-1.54492c-4.085,-3.705 -9.5025,-5.96484 -15.4375,-5.96484zM43.23633,7.75391l-19.32227,22.80078l-8.13281,-7.58594l-1.36328,1.46289l9.66602,9.01563l20.67969,-24.40039z"></path></g></g>
                                            </svg>
                                        </div>
                                        <div class="content">
                                            <h5>
                                                <a href="#"
                                                    >Masuk WhatsApp Grup</a
                                                >
                                            </h5>
                                            <p>
                                                Masuk WhatsApp Grup Yang Telah
                                                Disediakan Panitia Sehabis
                                                Mengirim Formulir dan
                                                Persyaratan.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <img
                                            src="./assets/images/backgroup/bg_bt_box_1.png"
                                            alt=""
                                        />
                                    </div>
                                    <div class="number">5</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="next_slider-10 next_slider">
                        <svg
                            width="18"
                            height="16"
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M1.5 8H16.5M16.5 8L9.75 1.25M16.5 8L9.75 14.75"
                                stroke="white"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </div>
                    <div class="prev_slider-10 prev_slider">
                        <svg
                            width="18"
                            height="16"
                            viewBox="0 0 18 16"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M16.5 8H1.5M1.5 8L8.25 1.25M1.5 8L8.25 14.75"
                                stroke="white"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<div class="bg_body">
    {{--
    <div class="bg_h2">
        <img src="{{ asset('assets/images/backgroup/bg_home2.png') }}" alt="" />
    </div>
    --}}

    {{-- <section class="tf-section technology">
        <div class="container w_1490">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div
                        class="tf-title"
                        data-aos="fade-right"
                        data-aos-duration="800"
                    >
                        <div class="img_technology">
                            <img
                                src="./assets/images/common/img_technology1.png"
                                alt=""
                            />
                            <img
                                class="coin coin_1"
                                src="./assets/images/common/coin1.png"
                                alt=""
                            />
                            <img
                                class="coin coin_2"
                                src="./assets/images/common/coin2.png"
                                alt=""
                            />
                            <img
                                class="coin coin_3"
                                src="./assets/images/common/coin3.png"
                                alt=""
                            />
                            <img
                                class="coin coin_4"
                                src="./assets/images/common/coin4.png"
                                alt=""
                            />
                            <img
                                class="coin coin_5"
                                src="./assets/images/common/coin5.png"
                                alt=""
                            />
                            <img
                                class="coin coin_6"
                                src="./assets/images/common/coin6.png"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div
                        class="content_technology"
                        data-aos="fade-up"
                        data-aos-duration="800"
                    >
                        <div class="tf-title left">
                            <h2 class="title mb20">
                                Our technology supports multiple platforms
                            </h2>
                        </div>
                        <p class="sub_technology">
                            Cras molestie ullamcorper augue nec pulvinar. Ut
                            suscipit tempor justo, sed aliquet eros ultricies
                            eu. Nam mollis sapien ut sapien gravida
                            sollicitudin. Mauris vel nisl quis dolor accumsan
                            luctus.
                        </p>
                        <div class="swiper-container slider-6">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img
                                        src="./assets/images/common/logo_tech_1.png"
                                        alt=""
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./assets/images/common/logo_tech_2.png"
                                        alt=""
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./assets/images/common/logo_tech_3.png"
                                        alt=""
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./assets/images/common/logo_tech_4.png"
                                        alt=""
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./assets/images/common/logo_tech_5.png"
                                        alt=""
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./assets/images/common/logo_tech_6.png"
                                        alt=""
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./assets/images/common/logo_tech_4.png"
                                        alt=""
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./assets/images/common/logo_tech_5.png"
                                        alt=""
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./assets/images/common/logo_tech_6.png"
                                        alt=""
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./assets/images/common/logo_tech_1.png"
                                        alt=""
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./assets/images/common/logo_tech_2.png"
                                        alt=""
                                    />
                                </div>
                                <div class="swiper-slide">
                                    <img
                                        src="./assets/images/common/logo_tech_3.png"
                                        alt=""
                                    />
                                </div>
                            </div>
                            <div
                                class="swiper-pagination pagination_slider-6"
                            ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="tf-section roadmap">
        <div class="container w_1850">
            <div class="row" style="padding-top: 10%">
                <div class="col-md-12">
                    <div
                        class="tf-title"
                        data-aos="fade-up"
                        data-aos-duration="800"
                    >
                        <h2 class="title">Timeline Event</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="container_inner roadmap_boder">
                        <div
                            class="roadmap-wrapper"
                            data-aos="fade-in"
                            data-aos-duration="1000"
                        >
                            <div class="swiper-container slider-7">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img
                                                    src="./assets/images/common/icon_roadmap.svg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="content">
                                                <h6 class="date">
                                                    1-30 November 2023
                                                </h6>
                                                <ul>
                                                    <li>
                                                        Pendaftaran
                                                    </li>
                                                    <li>
                                                        Pengumpulan Abstrak
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img
                                                    src="./assets/images/common/icon_roadmap.svg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="content">
                                                <h6 class="date">
                                                    8-21 Desember 2023
                                                </h6>
                                                <ul>
                                                    <li>
                                                        Seleksi Abstrak
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img
                                                    src="./assets/images/common/icon_roadmap.svg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="content">
                                                <h6 class="date">
                                                    23 Desember 2023
                                                </h6>
                                                <ul>
                                                    <li>
                                                        Pengumuman Abstrak
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img
                                                    src="./assets/images/common/icon_roadmap.svg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="content">
                                                <h6 class="date">
                                                    24 Desember 2023 - 6 Januari 2024
                                                </h6>
                                                <ul>
                                                    <li>
                                                        Pengumpulan Full Paper Batch 1
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img
                                                    src="./assets/images/common/icon_roadmap.svg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="content">
                                                <h6 class="date">
                                                    7-16 Januari 2024
                                                </h6>
                                                <ul>
                                                    <li>
                                                        Pengumpulan Full Paper Batch 2
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img
                                                    src="./assets/images/common/icon_roadmap.svg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="content">
                                                <h6 class="date">
                                                    9-23 Januari 2024
                                                </h6>
                                                <ul>
                                                    <li>
                                                        Penjurian Full Paper
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img
                                                    src="./assets/images/common/icon_roadmap.svg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="content">
                                                <h6 class="date">
                                                    27 Januari 2024
                                                </h6>
                                                <ul>
                                                    <li>
                                                        Pengumuman Finalis
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img
                                                    src="./assets/images/common/icon_roadmap.svg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="content">
                                                <h6 class="date">
                                                    3 Februari 2024
                                                </h6>
                                                <ul>
                                                    <li>
                                                        Technical Meeting
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img
                                                    src="./assets/images/common/icon_roadmap.svg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="content">
                                                <h6 class="date">
                                                    4-8 Februari 2024
                                                </h6>
                                                <ul>
                                                    <li>
                                                        Pengumpulan Poster
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img
                                                    src="./assets/images/common/icon_roadmap.svg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="content">
                                                <h6 class="date">
                                                    10-15 Februari 2024
                                                </h6>
                                                <ul>
                                                    <li>
                                                        Vote Poster
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img
                                                    src="./assets/images/common/icon_roadmap.svg"
                                                    alt=""
                                                />
                                            </div>
                                            <div class="content">
                                                <h6 class="date">
                                                    17 Februari 2024
                                                </h6>
                                                <ul>
                                                    <li>
                                                        Grand Final (Presentasi Offline)
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="next_slider-7 next_slider">
                            <svg
                                width="18"
                                height="16"
                                viewBox="0 0 18 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M1.5 8H16.5M16.5 8L9.75 1.25M16.5 8L9.75 14.75"
                                    stroke="white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>
                        <div class="prev_slider-7 prev_slider">
                            <svg
                                width="18"
                                height="16"
                                viewBox="0 0 18 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M16.5 8H1.5M1.5 8L8.25 1.25M1.5 8L8.25 14.75"
                                    stroke="white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="tf-section FAQs" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div
                    class="tf-title"
                    data-aos="fade-up"
                    data-aos-duration="800"
                >
                    <h2 class="title">frequently asked questions</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div
                    class="flat-accordion aos-init aos-animate"
                    data-aos="fade-up"
                    data-aos-duration="800"
                >
                    <div class="flat-toggle">
                        <div class="h7 toggle-title">
                            <span class="icon-Icon"> </span>
                            <span>Apa itu INSPECTION?</span>
                        </div>
                        <p class="toggle-content" style="display: none">
                            INSPECTION atau Instrumentation Paper Competition merupakan sebuah kompetisi dalam bidang Karya Tulis Ilmiah yang ditujukan kepada siswa/siswi SMA/SMK sederajat untuk meningkatkan kreativitas dan inovasi dalam bidang instrumentasi.
                        </p>
                    </div>
                    <div class="flat-toggle">
                        <div class="h7 toggle-title">
                            <span class="icon-Icon"> </span>
                            <span
                                >Kapan dan di mana INSPECTION?</span
                            >
                        </div>
                        <p class="toggle-content" style="display: none">
                            Kegiatan ini akan berlangsung pada tanggal 1 November 2023  – 17 Februari 2024 . Kegiatan ini akan dilaksanakan secara online dan offline di kawasan Departemen Teknik Instrumentasi dan Kampus ITS Sukolilo Surabaya. 
                        </p>
                    </div>
                    <div class="flat-toggle">
                        <div class="h7 toggle-title">
                            <span class="icon-Icon"> </span>
                            <span>Bagaimana Tata Cara Pendaftaran INSPECTION?</span>
                        </div>
                        <p class="toggle-content" style="display: none">
                            <b>1. Daftar</b> <br><br>Klik Tombol Daftar Pada Website,
                            Yang Nanti Akan Diarahkan Ke
                            Halaman Login. <br><br>
                            <b>2.1 Login</b> <br><br>Jika Sudah Memiliki Akun Silahkan Langsung Login dengan Akun yang Telah Terdaftar Sebelumnya<br><br>
                            <b>2.2 Register</b> <br><br>Jika Belum Mempunyai Akun Silahkan Klik Tulisan "Register" yang Ada Pada Halaman Login, dan Buatlah Akunnya Dengan Mengisi Kolom Formulir yang Telah Disediakan Panitia, Kemudian Klik Tombol Register, Setelah itu akan di direct Link Grup WhatsApp Peserta [Semua Peserta Wajib Gabung Ke WhatsApp Grup] yang Menandakan Bahwa Registrasi Berhasil, dan Silahkan Kembali Ke Halaman Login Untuk Memasukkan Akun yang Telah Terdaftar. <br><br>
                            <b>3. Pengumpulan Abstrak </b> <br><br> Jika Peserta Telah Massuk/Login Maka Peserta Akan Diarahkan Ke Halaman Dashboard, dan Jika Peserta Hendak Mengumpulkan Abstrak Silahkan Klik "Pengumpulan Abstrak" yang Ada di Tampilan Utama Dashboard, dan Silahkan Upload Abstraknya Di Kolom Upload yang Sudah Disediakan Panitia
                        </p>
                    </div>
                    <div class="flat-toggle">
                        <div class="h7 toggle-title">
                            <span class="icon-Icon"> </span>
                            <span
                                >Di mana letak Departemen Teknik Instrumentasi
                                ITS?
                            </span>
                        </div>
                        <p class="toggle-content" style="display: none">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6704046170007!2d112.79054184228602!3d-7.278292796285293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa16b44ff3e7%3A0x7ef77086cc2efb44!2sDepartemen+Teknik+Instrumentasi+ITS!5e0!3m2!1sen!2sus!4v1539063689843"
                                width="100%"
                                height="450"
                                style="justify-content: center"
                            ></iframe>
                        </p>
                    </div>
                    <div class="flat-toggle">
                        <div class="h7 toggle-title">
                            <span class="icon-Icon"> </span>
                            <span
                                >Siapa yang dapat mengikuti INSPECTION?</span
                            >
                        </div>
                        <p class="toggle-content" style="display: none">
                            Kegiatan ini dapat diikuti oleh semua siswa/siswi SMA/SMK sederajat dari seluruh Indonesia.
                        </p>
                    </div>
                    <div class="flat-toggle">
                        <div class="h7 toggle-title">
                            <span class="icon-Icon"> </span>
                            <span
                                >Apakah ada biaya yang harus dikeluarkan untuk INSPECTION?</span
                            >
                        </div>
                        <p class="toggle-content" style="display: none">
                            Untuk tahap pendaftaran tidak dikenakan biaya namun bagi tim yang lolos pada tahap fulpaper dikenai biaya yakni : 
                            <br>Batch 1 dikenai biaya sebesar Rp. 100.000/Tim.
                            <br>Batch 2 dikenai biaya sebesar Rp. 130.000/Tim.
                        </p>
                    </div>
                    <div class="flat-toggle">
                        <div class="h7 toggle-title">
                            <span class="icon-Icon"> </span>
                            <span
                                >Bagaimana saya bisa menghubungi panitia jika memiliki pertanyaan tambahan?</span
                            >
                        </div>
                        <p class="toggle-content" style="display: none">
                            Jika peserta kegiatan memiliki pertanyaan tambahan, maka dapat langsung menghubungi Contact Person yang tertera pada poster kegiatan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="content_faq text-center">
                    <p>
                        Masih Dibingungkan Perihal Inspection Ini? Klik
                        Tombol Dibawah Ini
                    </p>
                    <div class="wrap-btn">
                        <a href="https://wa.me/+628815090130" class="tf-button style1">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div
    class="modal fade popup"
    id="popup_bid1"
    tabindex="-1"
    role="dialog"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="close icon" data-dismiss="modal" aria-label="Close">
                <img src="./assets/images/backgroup/bg_close.png" alt="" />
            </div>
            <div class="header-popup">
                <h5>Guide Book/Poster</h5>
                <div class="spacing"></div>
            </div>

            <div class="modal-body center">
                <div class="connect-wallet">
                    <section class="tf-section FAQs">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div
                                        class="flat-accordion aos-init aos-animate"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <div class="flat-toggle active">
                                            <div class="h7 toggle-title">
                                                <span class="icon-Icon"> </span>
                                                <span>Guide Book</span>
                                            </div>
                                            <p
                                                class="toggle-content"
                                                style="display: none"
                                            >
                                            <a
                                                href="https://drive.google.com/file/d/1utGTy4M_fl2QBsX17HmZpd2bWQ7hqHUk/view?usp=sharing"
                                                class="tf-button style2 me-md-2"
                                            >
                                                Guide Book
                                            </a>
                                            </p>
                                        </div>
                                        <div class="flat-toggle">
                                            <div class="h7 toggle-title">
                                                <span class="icon-Icon"> </span>
                                                <span>Poster</span>
                                            </div>
                                            <p
                                                class="toggle-content"
                                                style="display: none"
                                            >
                                                <img
                                                    src="{{
                                                        asset(
                                                            'assets/event/PosterINSPECTION.png'
                                                        )
                                                    }}"
                                                    alt=""
                                                    srcset=""
                                                    class="justify-content-center"
                                                />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div
    class="modal fade popup"
    id="popup_bid2"
    tabindex="-1"
    role="dialog"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="close icon" data-dismiss="modal" aria-label="Close">
                <img src="./assets/images/backgroup/bg_close.png" alt="" />
            </div>
            <div class="header-popup">
                <h5>Form Pendaftaran</h5>
                <div class="spacing"></div>
            </div>

            <div class="modal-body center">
                <div class="connect-wallet">
                    <section class="tf-section project-info pt60 pb60">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="#">
                                        <div
                                            class="project-info-form check-radio"
                                        >
                                            <h6 class="title mb30">
                                                Jalur Pendaftaran
                                            </h6>
                                            
                                            <div
                                            class="wrap-btn d-grid gap-2 d-md-flex justify-content-md-center"
                                        >
                                            <a
                                                href="/odlumum"
                                                class="tf-button style2 me-md-2"
                                            >
                                                Umum
                                            </a>
                                            <a
                                                href="/odlundangan"
                                                class="tf-button style2 me-md-2"
                                            >
                                                Undangan
                                            </a>
                                        </div>
                                            </div>
                                            </div>
                                        </div>
                                      
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<a id="scroll-top"></a>
@endsection