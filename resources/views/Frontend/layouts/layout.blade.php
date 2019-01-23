
<html lang="en">
<head>
    <title>Cubaires</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Destino project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{asset('images/favicon.png')}} " type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/main_styles.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/about_styles.css">
    <link rel="stylesheet" type="text/css" href="css/about_responsive.css">
    <link rel="stylesheet" type="text/css" href="css/offers_styles.css">
    <link rel="stylesheet" type="text/css" href="css/offers_responsive.css">
    <link rel="stylesheet" type="text/css" href="css/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="css/contact_responsive.css">
    <link rel="stylesheet" type="text/css" href="css/news_styles.css">
<link rel="stylesheet" type="text/css" href="css/news_responsive.css">
</head>

<body>

 

<div class="super_container">

<!-- Header -->
    <header class="header scrolled">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_container d-flex flex-row align-items-center justify-content-start">

                        <!-- Logo -->
                        <div class="logo_container">
                            <div class="logo">
                                
                                <div class="logo_image" style="8.5 em"><img src="{{asset('images/logo_cubaires.png')}}" alt=""></div>
                            </div>
                        </div>

                        <!-- Main Navigation -->
                        <nav class="main_nav ml-auto">
                            <ul class="main_nav_list">
                                <li class="main_nav_item {{ Request::is('/') ? 'active' : '' }}"><a href="{{route('/')}}">Inicio</a></li>
                                <li class="main_nav_item {{ Request::is('ofertas*') ? 'active' : '' }}"><a href="{{route('ofertas')}}">Ofertas</a></li>
                                <li class="main_nav_item {{ Request::is('catalogo*') ? 'active' : '' }}"><a href="{{route('catalogo')}}">Catálogo</a></li>
                            </ul>
                        </nav>

                        <!-- Search -->
                        <div class="search">
                            <form action="#" class="search_form">
                                <input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Buscar">
                                <button type="submit" class="search_button ml-auto ctrl_class"><img src="images/search.png" alt=""></button>
                            </form>
                        </div>

                        <!-- Hamburger -->
                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!-- Menu -->
    <div class="menu_container menu_mm">

        <!-- Menu Close Button -->
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>

        <!-- Menu Items -->
        <div class="menu_inner menu_mm">
            <div class="menu menu_mm">
                <div class="menu_search_form_container">
                    <form action="#" id="menu_search_form">
                        <input type="search" class="menu_search_input menu_mm">
                        <button id="menu_search_submit" class="menu_search_submit" type="submit">
                            <img src="images/search_2.png" alt="">
                        </button>
                    </form>
                </div>
                <ul class="menu_list menu_mm">
                    <li class="menu_item menu_mm"><a href="/">Inicio</a></li>
                    <li class="menu_item menu_mm"><a href="{{route('ofertas')}}">Ofertas</a></li>
                    <li class="menu_item menu_mm"><a href="{{route('catalogo')}}">Catálogo</a></li>
                </ul>

                <!-- Menu Social -->
                <div class="menu_social_container menu_mm">
                    <ul class="menu_social menu_mm">
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <div class="menu_copyright menu_mm">Cubaires….Todo bien!</div>
            </div>
        </div>
    </div>

    @yield('contenido')

<!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                
                <!-- Logo -->
                <div class="logo_container">
                        <div class="logo">
                            <div class="logo_image">
                                <img src="{{('images/logo_cubaires.png')}}" alt="" href="{{route('/')}}">
                            </div>
                        </div>
                    </div>

                <!-- Footer Column -->
                <div class="col-lg-4 footer_col">
                    <div class="footer_about">
                        <div class="footer_about_text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel eleifend quis, tempus rut rum metus. Pellentesque ultricies enim eu quam fermentum hendrerit.
                        </div>
                        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright ©
                            <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js">
                            </script>
                            <script>document.write(new Date().getFullYear());
                            </script>. All rights reserved | This page is made with
                            <i class="fab fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">TIFYCA</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-4 footer_col">
                    <div class="footer_latest">
                        <div class="footer_title">Menu</div>
                        <div class="footer_latest_content">

                            <!-- Footer Latest Post -->
                            <div class="footer_latest_item">
                                    <div class="footer_latest_item_content">
                                    <div class="footer_latest_item_title" style="border-bottom: 1px solid rgb(254, 60, 82);"><a href="{{route('/')}}">Inicio</a></div>
                                </div>
                            </div>

                            <div class="footer_latest_item">
                                <div class="footer_latest_item_content">
                                <div class="footer_latest_item_title" style="border-bottom: 1px solid rgb(254, 60, 82);"><a href="{{route('ofertas')}}">Ofertas</a></div>
                            </div>
                        </div>

                        <div class="footer_latest_item">
                            <div class="footer_latest_item_content" >
                            <div class="footer_latest_item_title" style="border-bottom: 1px solid rgb(254, 60, 82);"><a href="{{route('catalogo')}}">Catálogo</a></div>
                        </div>
                    </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-4 footer_col">
                    <div class="footer_about">
                        <div class="footer_title">Contacto</div>
                        <div class="footer_about_text">
                            <ul>
                                <li>Address: 1481 Creekside Lane Avila Beach, CA 93424</li>
                                <li>Phone: +34 96 381 30 72</li>
                                <li>Email: cubaires@cubairestravel.com</li>
                            </ul>
                            <div class="contact_info_social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/easing.js"></script>
{{-- <script src="js/parallax.min.js"></script> --}}
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/parallax.js"></script>

<script src="js/TweenMax.min.js"></script>
<script src="js/TimelineMax.min.js"></script>
<script src="js/ScrollMagic.min.js"></script>
<script src="js/animation.gsap.min.js"></script>
<script src="js/ScrollToPlugin.min.js"></script>
<script src="js/easing.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/about_custom.js"></script>
<script src="js/offers_custom.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>
<script src="js/news_custom.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

@stack('scripts')
</body>
</html>
