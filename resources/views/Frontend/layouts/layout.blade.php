
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@isset ($title) {{ $title }} @endisset</title>
    <!-- Search Engine -->
    <meta name="description" content="@isset ($meta_description) {{ $meta_description }} @endisset">
    <meta name="image" content="{{asset('images/logo.png')}}">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="@isset ($meta_name) {{ $meta_name }} @endisset">
    <meta itemprop="description" content="@isset ($meta_description) {{ $meta_description }} @endisset">
    <meta itemprop="image" content="{{asset('images/logo.png')}}">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="@isset ($meta_name) {{ $meta_name }} @endisset">
    <meta name="og:description" content="@isset ($meta_description) {{ $meta_description }} @endisset">
    <meta name="og:image" itemprop="image" content="{{asset('images/logo.png')}}">
    <meta name="og:url" content="@isset ($meta_url) {{ $meta_url }} @endisset">
    <meta name="og:site_name" content="@isset ($meta_name) {{ $meta_name }} @endisset ">
    <meta name="og:locale" content="en_ES">
    <meta name="fb:admins" content="@isset ($meta_description) {{ $meta_description }} @endisset">
    <meta name="og:type" content="website">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="{{asset('images/favicon.png')}} " type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about_responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/offers_styles.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/offers_responsive.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact_responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news_responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
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
                                
                                <div class="logo_image" style=""><img src="{{asset('images/logo.png')}}" alt=""></div>
                            </div>
                        </div>

                        <!-- Main Navigation -->
                        <nav class="main_nav ml-auto">
                            <ul class="main_nav_list">
                                <li class="main_nav_item {{ Request::is('/') ? 'active' : '' }}"><a href="{{route('/')}}">Inicio</a></li>
                                <li class="main_nav_item {{ Request::is('ofertas*') ? 'active' : '' }}"><a href="{{route('ofertas')}}">Ofertas</a></li>
                                <li class="main_nav_item {{ Request::is('catalogo*') ? 'active' : '' }}"><a href="{{route('catalogo')}}">Catálogo</a></li>
                                @if(Auth::user())
                                @if (Auth::user()->hasRole('client'))
                                    <li class="main_nav_item {{ Request::is('sesion*') ? 'active' : '' }}"><a href="{{route('usuario')}}">{{Auth::user()->name}}</a></li>
                                @endif                                
                                @else
                                <li class="main_nav_item {{ Request::is('sesion*') ? 'active' : '' }}"><a href="{{route('sesion')}}">Ingresa</a></li>
                                @endif
                            </ul>
                        </nav>

                        <!-- Search -->
                        <div class="search ">
                            <form action="{{ route('catalogo/buscar') }}" method="post" class="search_form">
                                {{ csrf_field() }}
                                <input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Buscar">

                                <button type="submit" class="search_button ml-auto ctrl_class"><img src="{{ asset('images/search.png') }}" alt=""></button>
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
    <div class="menu_container menu_mm" style="overflow: scroll;">

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

                <div class="sidebar-content menu_mm">
                        <div class="sidebar-user px-0 d-flex d-sm-block ">
                          <img src="{{asset('images/avatar.png')}}" class="img-fluid rounded-circle mb-2">
                            <div class="text-left pl-2 text-sm-center">
                                <div class="font-weight-bold">José Perez</div>
                                <small>V-11.345.678 - @jperez.com<br>Venezuela - +58 412 845 8485</small>
                            </div>
                        </div>
                </div>

                <ul class="menu_list menu_mm mt-1">
                    <li class="menu_item menu_mm"><a href="/">Inicio</a></li>
                    <li class="menu_item menu_mm"><a href="{{route('ofertas')}}">Ofertas</a></li>
                    <li class="menu_item menu_mm"><a href="{{route('catalogo')}}">Catálogo</a></li>
                    <li class="menu_item menu_mm"><a href="{{route('sesion')}}">Ingresa</a></li>
                </ul>

                <ul class="menu_list menu_mm">
                          
                        <li class="menu_mm">
                          <a href="#layouts" class="sidebar-link p-0 m-0">
                              <i class="align-middle mr-2 fas fa-key"></i>
                              <span class="align-middle" style="font-size:14px">Cambiar Contraseña</span>
                            </a>                    
                        </li>
              
                        <li class=" menu_mm">
                          <a href="#layouts" class="sidebar-link p-0 m-0">
                              <i class="align-middle mr-2 fas fa-door-open"></i>
                              <span class="align-middle" style="font-size:14px">Salir</span>
                            </a>                    
                        </li>
                      </ul>

                

                <!-- Menu Social -->
                <div class="menu_social_container menu_mm">
                    <ul class="menu_social menu_mm">
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <div class="menu_copyright menu_mm"></div>
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
                            <div class="logo_image" style="top: 0px;">
                                <img src="{{ asset('images/logo.png') }}" alt="" href="{{route('/')}}">
                            </div>
                        </div>
                    </div>

                <!-- Footer Column -->
                <div class="col-lg-4 footer_col">
                    <div class="footer_about">
                        <div class="footer_about_text">
                           @isset ($descripcion){{ $descripcion }}@endisset 
                        </div>  
                        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright ©
                            <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js">
                            </script>
                            <script>document.write(new Date().getFullYear());
                            </script>. @isset ($title) {{ $title }} @endisset. Todos los Derechos Reservados - Desarrollado
                            <i class="fab fa-heart-o" aria-hidden="true"></i> por <a href="" target="_blank">TIFYCA</a>
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
                                    <div class="footer_latest_item_title"  style="border-bottom: 1px solid rgb(254, 60, 82);"><a href="{{route('/')}}">Inicio</a></div>
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
                                <li>Address: @isset ($direccion) {{ $direccion }} @endisset</li>
                                <li>Phone: @isset ($telefono) {{ $telefono }} @endisset</li>
                                <li>Email: @isset ($email) {{ $email }} @endisset</li>
                            </ul>
                            <div class="contact_info_social">
                                <ul>
                                    @isset ($facebook)<li><a href="{{ $facebook }}"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>  @endisset
                                    @isset ($twitter)<li><a href="{{ $twitter }}"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>  @endisset
                                    @isset ($instagram)<li><a href="{{ $instagram }}"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>  @endisset
                                    
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
</div>

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/TweenMax.min.js') }}"></script>
<script src="{{ asset('js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('js/about_custom.js') }}"></script>
<script src="{{ asset('js/offers_custom.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>



<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');

 
</script>

@stack('scripts')
</body>
</html>
