<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {!! SEOMeta::generate() !!}

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('image/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('image/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('image/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('image/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('image/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('image/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('image/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('image/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('image/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('image/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('image/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('image/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('image/favicon//manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.min.css" integrity="sha512-Ne9/ZPNVK3w3pBBX6xE86bNG295dJl4CHttrCp3WmxO+8NQ2Vn8FltNr6UsysA1vm7NE6hfCszbXe3D6FUNFsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/datepickerboot.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/main_2.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script>
        const BASE_URL = '{{url()->to('/')}}/';
        const CSRF_TOKEN = '{{csrf_token()}}';
        const SITE_LANG = '{{app()->getLocale()}}';
    </script>

    @stack('scrips.head.bottom')
</head>
<body>

<!-- Preloader Start -->
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="spinner">
        </div>
        <div class="txt-loading">
                    <span data-text-preloader="P" class="letters-loading">
                        P
                    </span>
            <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
            <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
            <span data-text-preloader="B" class="letters-loading">
                        B
                    </span>
            <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
            <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
        </div>
        <p class="text-center">Ładowanie</p>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div>

<!-- Back To Top start -->
<button id="back-top" class="back-to-top">
    <i class="fas fa-long-arrow-up"></i>
</button>
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="/">
                            <img src="{{asset('images/logo.png')}}" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu fix mt-3"></div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
<header id="header-sticky" class="header-section header-1">
    <div class="container-fluid" style="padding: 0px">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="header-left">
                    <a href="/" class="header-logo">
                        <img src="{{asset('images/logo.png')}}" alt="logo-img">
                    </a>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu" style="padding: 7px 40px 7px 0px">
                                @include('default.nav_item.main', ['name' => 'main'])
                            </nav>
                        </div>
                    </div>
                    <div class="header-button d-flex align-items-center">
                        <div class="header__hamburger d-xl-block my-auto">
                            <div class="sidebar__toggle">
                                <img src="{{asset('images/bar.svg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
{{--@include('default._helpers.lang_nav')--}}

@yield('content')

<footer class="footer-section">
    <div class="frame-shape">
        <img src="{{asset('images/footer-shape.png')}}" alt="img">
    </div>
    <div class="container">
        <div class="footer-widget-wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="/" class="footer-logo">
                                <img src="{{asset('images/logo.png')}}" alt="img">
                            </a>
                        </div>
                        <div class="footer-content">
                            {!! getConstField('company_description') !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Dane kontaktowe</h3>
                        </div>
                        <ul class="footer-contact">
                            <li>{{getConstField('company_name')}}</li>
                            <li><a href="{{getConstField('google_map')}}">{{getConstField('company_address')}}, {{getConstField('company_post_code')}} {{getConstField('company_city')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ps-lg-4 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h3>Dane firmy</h3>
                        </div>
                        <ul class="footer-contact">
                            <li>
                                <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a>
                            </li>
                            <li>
                                <a href="mailto:{{getConstField('email')}}" class="link">{{getConstField('email')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-wrapper wow fadeInUp" data-wow-delay=".3s">
                <p class="text-center"><?php echo date("Y") ?> &copy; Wszelkie prawa zastrzeżone. Strona stworzona przez: <a href="https://palmax.pl">Palmax</a></p>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.jquery.min.js" integrity="sha512-iJCzEG+s9LeaFYGzCbDInUbnF03KbE1QV1LM983AW5EHLxrWQTQaZvQfAQgLFgfgoyozb1fhzhe/0jjyZPYbmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="{{asset('js/frontend.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/odometer.min.js')}}"></script>
<script src="{{asset('js/jquery.appear.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@stack('scripts.body.bottom')
</body>
</html>
