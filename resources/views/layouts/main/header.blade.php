<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFEST 2024</title>
    <link rel="stylesheet" href="{{ asset('assets/main/app/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/app/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/app/dist/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/aset/font/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/aset/font/risebot.css') }}" />
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/main/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/main/images/favicon.png') }}">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <style>
        @font-face {
            font-family: "resobot-bold";
            src: url("{{ asset('assets/main/aset/font/GeneralSans-Bold.otf') }}");
            font-weight: normal;
            font-style: normal;
            font-display: block;
        }

        .team-details {
            background-color: #1e2835;
            border-radius: 20px;
            padding: 30px;
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            border: 2px solid rgba(255, 255, 255, 0.0784313725);
        }

        .team-details .image_wrapper {
            width: 194px;
            margin-right: 30px;
        }

        .team-details .image {
            z-index: 999;
            background: url("{{ asset('assets/images/backgroup/bg_img_team_4.png') }}") center center no-repeat;
            width: 194px;
            height: 220px;
            min-width: 194px;
            position: relative;
            margin-bottom: 15px;
        }

        .team-details .image img {
            width: 194px;
            height: 220px;
            -webkit-mask-image: url("{{ asset('assets/images/backgroup/bg_img_team_4.png') }}");
            mask-image: url("{{ asset('assets/images/backgroup/bg_img_team_4.png') }}");
            -webkit-mask-position: center center;
            mask-position: center center;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat;
            overflow: hidden;
        }

        .team-details .content .name {
            font-size: 24px;
            margin-bottom: 0;
        }

<<<<<<< HEAD
        .team-details .content .position {
            font-weight: bold;
            font-family: "resobot-bold";
            font-size: 16px;
            line-height: 1.4;
            margin-bottom: 20px;
        }

        .team-details .content p {
            margin-bottom: 14px;
        }

        .team-details .content p.position {
            margin-bottom: 20px;
        }

        .team-details .content .spacing {
            position: relative;
            height: 1px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.1);
            margin: 25px 0;
        }

        .team-details .content .box .title {
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            font-size: 16px;
        }

        .team-details .content .box .title svg {
            margin-right: 6px;
        }

        .team-details .content .box ul li {
            margin-bottom: 4px;
            position: relative;
            padding-left: 6px;
        }

        .team-details .content .box ul li:last-child {
            margin-bottom: 0;
        }

        .team-details .content .box ul li::before {
            width: 4px;
            height: 4px;
            position: absolute;
            content: "";
            left: 0;
            top: 8px;
            background-color: #999999;
            border-radius: 50%;
        }

        .header .main-nav {
            position: absolute;
            left: 26%;
            top: 50%;
            transform: translateY(-50%);
            padding-left: 10px;
        }

        .icon-box .top {
            text-align: center;
            -webkit-mask-image: url("{{ asset('assets/images/backgroup/bg_box_1.png') }}");
            mask-image: url("{{ asset('assets/images/backgroup/bg_box_1.png') }}");
            -webkit-mask-position: center center;
            mask-position: center center;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat;
            background: url("{{ asset('assets/images/backgroup/bg_box_1.png') }}");
            background-position: center, center;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            max-height: 352px;
            height: 100%;
            padding: 58px 30px 33px;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .team-box-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .team-box {
            width: calc((100% - 90px) / 4);
            position: relative;
            margin-bottom: 20px;
        }

        .team-box .shape {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 4px;
            z-index: 9;
            margin-left: 106px;
            opacity: 1;
            visibility: visible;
            transition: all 0.3s ease;
        }

        .team-box .shape_ecfect {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 4px;
            z-index: 9;
            margin-left: 106px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .team-box .image {
            z-index: 999;
            background: url("{{ asset('assets/images/backgroup/bg_img_team.png') }}") center center no-repeat;
            width: 156px;
            height: 176px;
            margin: 0 auto;
            position: relative;
        }

        .team-box .image img {
            width: 156px;
            height: 176px;
            -webkit-mask-image: url("{{ asset('assets/images/backgroup/bg_img_team.png') }}");
            mask-image: url("{{ asset('assets/images/backgroup/bg_img_team.png') }}");
            -webkit-mask-position: center center;
            mask-position: center center;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat;
            overflow: hidden;
        }

        .team-box .content {
            width: 100%;
            text-align: center;
            padding: 112px 20px 42px;
            margin-top: -102px;
            border-radius: 20px;
            position: relative;
            -webkit-mask-image: url("{{ asset('assets/images/backgroup/bg_team.png') }}");
            mask-image: url("{{ asset('assets/images/backgroup/bg_team.png') }}");
            -webkit-mask-position: center center;
            mask-position: center center;
            -webkit-mask-repeat: no-repeat;
            background: url("{{ asset('assets/images/backgroup/bg_team.png') }}");
            background-position: center, center;
            background-size: cover;
            z-index: 99;
        }

        .team-box .content .name {
            font-size: 24px;
            line-height: 1.4;
            margin-bottom: 0;
        }

        .team-box .content .position {
            font-size: 14px;
            line-height: 1.4;
            margin-bottom: 20px;
        }

        .team-box:hover .shape {
            opacity: 0;
            visibility: hidden;
        }

        .team-box:hover .shape_ecfect {
            opacity: 1;
            visibility: visible;
        }

        .project-info-form.form-login {
            background-image: url("{{ asset('assets/images/backgroup/bg_login.png') }}");
            background-color: transparent;
            border: none;
            position: relative;
            padding: 20px 30px 60px;
        }

        .project-info-form.form-login .title {
            border: none;
            font-size: 28px;
            margin-bottom: 41px;
            padding-bottom: 0;
        }

        .project-info-form.form-login .title a {
            color: #798da3;
        }

        .project-info-form.form-login .title a:hover {
            color: #86ff00;
        }

        .project-info-form.form-login .title.link {
            margin-bottom: 0 !important;
            height: 57px;
            background-image: url("{{ asset('assets/images/backgroup/bg_link_1.png') }}");
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 15px;
            left: 205px;
            width: 237px;
        }

        .project-info-form.form-login fieldset.mb19 {
            margin-bottom: 19px;
        }

        .project-info-form.form-login p {
            margin-bottom: 24px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .project-info-form.form-login .fogot-pass {
            position: absolute;
            bottom: 30px;
            right: 30px;
            color: #fff;
        }

        .project-info-form.form-login .fogot-pass:hover {
            color: #86ff00;
        }

        .project-info-form.form-login.style2 {
            background-image: url("{{ asset('assets/images/backgroup/bg_login_2.png') }}");
            padding: 20px 30px 35px;
        }

        .project-info-form.form-login.style2 .title.link {
            background-image: url("{{ asset('assets/images/backgroup/bg_link_2.png') }}");
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            width: 196px;
        }

        .page-title {
            min-height: 167px;
        }

        .page-title {
            padding: 158px 0 115px;
            position: relative;
        }

        .page-title .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: linear-gradient(180deg,
                    #09121d 3.92%,
                    rgba(9, 18, 29, 0) 36.79%,
                    #09121d 83.98%),
                url("{{ asset('assets/images/backgroup/bg_pagetitle.png') }}"), center, center,
                no-repeat;
            mix-blend-mode: luminosity;
            background-position: center, center;
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.9;
        }
=======
.project-info-form.form-login {
    background-image: url("{{ asset('assets/images/backgroup/bg_login.png') }}");
    background-color: transparent;
    border: none;
    position: relative;
    padding: 20px 30px 60px;
}
.project-info-form.form-login .title {
    border: none;
    font-size: 28px;
    margin-bottom: 41px;
    padding-bottom: 0;
}
.project-info-form.form-login .title a {
    color: #798da3;
}
.project-info-form.form-login .title a:hover {
    color: #86ff00;
}
.project-info-form.form-login .title.link {
    margin-bottom: 0 !important;
    height: 57px;
    background-image: url("{{ asset('assets/images/backgroup/bg_link_1.png') }}");
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 15px;
    left: 205px;
    width: 237px;
}
.project-info-form.form-login fieldset.mb19 {
    margin-bottom: 19px;
}
.project-info-form.form-login p {
    margin-bottom: 24px;
    padding-bottom: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.project-info-form.form-login .fogot-pass {
    position: absolute;
    bottom: 30px;
    right: 30px;
    color: #fff;
}
.project-info-form.form-login .fogot-pass:hover {
    color: #86ff00;
}
.project-info-form.form-login.style2 {
    background-image: url("{{ asset('assets/images/backgroup/bg_login_2.png') }}");
    padding: 20px 30px 35px;
}
.project-info-form.form-login.style2 .title.link {
    background-image: url("{{ asset('assets/images/backgroup/bg_link_2.png') }}");
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    width: 196px;
}
.page-title {
    min-height: 167px;
}
.page-title {
    padding: 158px 0 115px;
    position: relative;
}
.page-title .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: linear-gradient(
            180deg,
            #09121d 3.92%,
            rgba(9, 18, 29, 0) 36.79%,
            #09121d 83.98%
        ),
        url("{{ asset('assets/images/backgroup/bg_pagetitle.png') }}"), center, center,
        no-repeat;
    mix-blend-mode: luminosity;
    background-position: center, center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.9;
}
.tf-section.tf_CTA .overlay {
    /* background: url("{{ asset('assets/images/backgroup/CTA.png') }}"), center, center,
        no-repeat; */
    background-size: cover;
    mix-blend-mode: luminosity;
    opacity: 0.7;
}
>>>>>>> b8ececbb344b0191765fac19b0da2d5cfaab36e2
    </style>
</head>

<body class="header-fixed main home1 counter-scroll">
    <!-- preloade -->
    <div class="preloader">
        <div class="clear-loading loading-effect-2">
            <span></span>
        </div>
    </div>
    <!-- /preload -->
    <div id="wrapper">
        <!-- Header -->
        <header id="header_main" class="header">
            <div class="container">
                <div id="site-header-inner">
                    <div class="header__logo">
                        <a href="/"><img src="{{ asset('assets/images/logo/logo@2x.png') }}" alt=""></a>
                    </div>
                    <nav id="main-nav" class="main-nav">
                        <ul id="menu-primary-menu" class="menu">
                            <li class="menu-item current-menu-item">
                                <a href="/">Home</a>
                            </li>
                            {{-- <li class="menu-item menu-item-has-children"><a href="/inskill">INSKILL</a></li> --}}
                            <li class="menu-item menu-item-has-children">
                                <a href="#">INSHOW</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="/odl">One Day Lecture</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/talkshow">Talk Show</a>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li class="menu-item menu-item-has-children"><a href="/inspection">INSPECTION</a></li>
                            <li class="menu-item menu-item-has-children"><a href="/instraining">INSTRAINING</a></li> --}}

                            <li class="menu-item ">
                                <a href="/contact">Contact</a>
                            </li>
                        </ul>
                    </nav><!-- /#main-nav -->
                    <a href="/loginuser" class="tf-button style1">
                        Login
                    </a>
                    <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                </div>
            </div>
        </header>
        <!-- end Header -->
