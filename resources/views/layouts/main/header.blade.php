<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risebot - Metaverse Web3 IGO Launchpad HTML Template</title>
    <link rel="stylesheet" href="{{ asset('assets/main/app/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/app/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/app/dist/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/aset/font/font-awesome.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicon.png') }}">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <style>
        @font-face {
    font-family: "resobot-bold";
    src: url("{{ asset('assets/main/aset/font/GeneralSans-Bold.otf') }}");
    font-weight: normal;
    font-style: normal;
    font-display: block;
}


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
                    <a href="index.html"><img src="{{ asset('assets/main/images/logo/logo@2x.png') }}" alt=""></a>
                </div>
                <nav id="main-nav" class="main-nav">
                    <ul id="menu-primary-menu" class="menu">
                        <li class="menu-item menu-item-has-children  current-menu-item">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li class="menu-item current-item"><a href="index.html">Home 1</a></li>
                                <li class="menu-item"><a href="home-02.html">Home 2</a></li>
                                <li class="menu-item"><a href="home-03.html">Home 3</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Project</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="project-grid.html">Project 01</a></li>
                                <li class="menu-item"><a href="project-grid-2.html">Project 02</a></li>
                                <li class="menu-item"><a href="project-grid-3.html">Project 03</a></li>
                                <li class="menu-item"><a href="project-grid-4.html">Project 04</a></li>
                                <li class="menu-item"><a href="project-grid-5.html">Project 05</a></li>
                                <li class="menu-item"><a href="project-list.html">Project List</a></li>
                                <li class="menu-item"><a href="project-details.html">Project Details</a></li>
                                <li class="menu-item"><a href="submit-project.html">Submit Project</a></li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Page</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="token.html">Token</a></li>
                                <li class="menu-item"><a href="connect-wallet.html">Connect Wallet</a></li>
                                <li class="menu-item"><a href="team-details.html">Team Details</a></li>
                                <li class="menu-item"><a href="submit-IGO-on-chain.html">Submit IGO on chain</a></li>
                                <li class="menu-item"><a href="faq.html">FAQs</a></li>
                                <li class="menu-item"><a href="login.html">Login</a></li>
                                <li class="menu-item"><a href="register.html">Register</a></li>
                                <li class="menu-item"><a href="forget-password.html">Forget Password</a></li>
                            </ul>
                        </li>
                        <li class="menu-item ">
                            <a href="roadmap.html">Roadmap</a> 
                        </li> 
                       
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="blog-grid.html">Blog Grid</a></li>
                                <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                                <li class="menu-item"><a href="blog-details.html">Blog Detail</a></li>
                            </ul>
                        </li>
                        <li class="menu-item ">
                            <a href="contact.html">Contact</a> 
                        </li>
                    </ul>
                </nav><!-- /#main-nav -->
                <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button style1">
                    Connect
                </a>
                <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
            </div>
        </div>
    </header>
    <!-- end Header -->