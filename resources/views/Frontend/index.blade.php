@extends ('Frontend.layouts.layout')

@section('contenido')


<!-- Home -->
<div class="home">
    <div id= "carouselExampleControls" class= " carousel slide" data-ride= "carousel" > 
        <div class= "carousel-inner" > 
            <div class= "carousel-item active" > 
                <div class="home_content">
                    <div class="home_content_innerr">
                        <div class="home_text_large">cubaires</div>
                        <div class="home_text_small">Cubaires Business & Travels</div>
                    </div>
                </div>
                <img class= "d-block w-100" src= "{{asset('images/home.jpg')}}" alt= "First slide" >
            </div> 
            <div class= "carousel-item" > 
                <div class="home_content">
                    <div class="home_content_innerr">
                        <div class="home_text_large">cubaires</div>
                        <div class="home_text_small">Cubaires Business & Travels</div>
                    </div>
                </div>
                <img class= "d-block w-100" src= "{{asset('images/last.jpg')}}" alt= "Second slide" > 
            </div> 
            <div class= "carousel-item" >
                <div class="home_content">
                    <div class="home_content_innerr">
                        <div class="home_text_large">naturaleza</div>
                        <div class="home_text_small">Animales fantasticos</div>
                    </div>
                </div> 
                <img class= "d-block w-100" src= "{{asset('images/about_background.jpg')}}" alt= "Third slide" > 
            </div> 
        </div> 
            <a class= "carousel-control-prev" href= "#carouselExampleControls" role= "button" data-slide= "prev" > 
                <span class= "carousel-control-prev-icon" aria-hidden= "true" ></span> 
                <span class= "sr-only" > Previous </span> 
            </a> 
            <a class= "carousel-control-next" href= "#carouselExampleControls" role= "button" data-slide= "next" > 
                <span class= "carousel-control-next-icon" aria-hidden= "true" ></span> 
                <span class= "sr-only" > Next </span> 
            </a> 
    </div> 
</div>

<!-- Categorías -->
<div class="special">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h2>Categorías</h2>
                    <div>Echa un vistazo a estas categorías</div>
                </div>
            </div>
        </div>
    </div>
    <div class="special_content">
        <div class="special_slider_container">
            <div class="owl-carousel owl-theme special_slider">

                <!-- Special Offers Item -->
                <div class="owl-item">
                    <div class="special_item">
                        <div class="special_item_background">
                            <img src="{{asset('images/special_1.jpg')}}" >
                        </div>
                        <div class="special_item_content text-center">
                            {{-- <div class="special_category">Visiting</div> --}}
                            <div class="special_title"><a href="{{route('categorias_tours')}}">Experiencias a Medida</a></div>
                        </div>
                    </div>
                </div>
                           
                <!-- Special Offers Item -->
                <div class="owl-item">
                    <div class="special_item d-flex flex-column align-items-center justify-content-center">
                        <div class="special_item_background">
                            <img src="{{asset('images/special_2.jpg')}}" >
                        </div>
                        <div class="special_item_content text-center">
                            {{-- <div class="special_category">Culture</div> --}}
                            <div class="special_title"><a href="{{route('categorias_tours')}}">Circuitos</a></div>
                        </div>
                    </div>
                </div>

                <!-- Special Offers Item -->
                <div class="owl-item">
                    <div class="special_item d-flex flex-column align-items-center justify-content-center">
                        <div class="special_item_background">
                            <img src="{{asset('images/special_3.jpg')}}" >
                        </div>
                        <div class="special_item_content text-center">
                            {{-- <div class="special_category">Sunbathing</div> --}}
                            <div class="special_title"><a href="{{route('categorias_tours')}}">Premium</a></div>
                        </div>
                    </div>
                </div>

                <!-- Special Offers Item -->
                <div class="owl-item">
                    <div class="special_item d-flex flex-column align-items-center justify-content-center">
                        <div class="special_item_background">
                            <img src="{{asset('images/special_4.jpg')}}" >
                        </div>
                        <div class="special_item_content text-center">
                            {{-- <div class="special_category">Visiting</div> --}}
                            <div class="special_title"><a href="{{route('categorias_tours')}}">Business</a></div>
                        </div>
                    </div>
                </div>

                <!-- Special Offers Item -->
                <div class="owl-item">
                    <div class="special_item d-flex flex-column align-items-center justify-content-center">
                        <div class="special_item_background">
                            <img src="{{asset('images/special_5.jpg')}}" >
                        </div>
                        <div class="special_item_content text-center">
                            {{-- <div class="special_category">Visiting</div> --}}
                            <div class="special_title"><a href="{{route('categorias_tours')}}">Cubaires y el Mar</a></div>
                        </div>
                    </div>
                </div>

                <!-- Special Offers Item -->
                <div class="owl-item">
                        <div class="special_item">
                            <div class="special_item_background">
                                <img src="{{asset('images/special_1.jpg')}}" >
                            </div>
                            <div class="special_item_content text-center">
                                {{-- <div class="special_category">Visiting</div> --}}
                                <div class="special_title"><a href="{{route('categorias_tours')}}">Ecoturismo</a></div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Special Offers Item -->
                    <div class="owl-item">
                        <div class="special_item d-flex flex-column align-items-center justify-content-center">
                            <div class="special_item_background">
                                <img src="{{asset('images/special_2.jpg')}}" >
                            </div>
                            <div class="special_item_content text-center">
                                {{-- <div class="special_category">Culture</div> --}}
                                <div class="special_title"><a href="{{route('categorias_tours')}}">Novios</a></div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Special Offers Item -->
                    <div class="owl-item">
                        <div class="special_item d-flex flex-column align-items-center justify-content-center">
                            <div class="special_item_background">
                                <img src="{{asset('images/special_3.jpg')}}" >
                            </div>
                            <div class="special_item_content text-center">
                                {{-- <div class="special_category">Sunbathing</div> --}}
                                <div class="special_title"><a href="{{route('categorias_tours')}}">Alojate</a></div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Special Offers Item -->
                    <div class="owl-item">
                        <div class="special_item d-flex flex-column align-items-center justify-content-center">
                            <div class="special_item_background">
                                <img src="{{asset('images/special_4.jpg')}}" >
                            </div>
                            <div class="special_item_content text-center">
                                {{-- <div class="special_category">Visiting</div> --}}
                                <div class="special_title"><a href="{{route('categorias_tours')}}">Conócela</a></div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Special Offers Item -->
                    <div class="owl-item">
                        <div class="special_item d-flex flex-column align-items-center justify-content-center">
                            <div class="special_item_background">
                                <img src="{{asset('images/special_5.jpg')}}" >
                            </div>
                            <div class="special_item_content text-center">
                                {{-- <div class="special_category">Visiting</div> --}}
                                <div class="special_title"><a href="{{route('categorias_tours')}}">Mírala</a></div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="special_slider_nav d-flex flex-column align-items-center justify-content-center">
                <img src="{{asset('images/special_slider.png')}}" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Ofertas -->
<div class="last">
        <div class="last_background parallax-window" style="background-image: url('{{asset('images/last.jpg')}}'); " data-speed="0.8"></div>
    
        <div class="container">
            <div class="row">
                {{-- <div class="last_logo">
                    <img src="images/last_logo.png" alt="">
                </div> --}}
                <div class="col-lg-6 last_col">
                    <div class="last_item">
                        <div class="last_item_content">
                            <div class="last_subtitle">La Habana</div>
                            <div class="last_percent">900€</div>
                            <div class="last_title">Oferta especial</div>
                            <div class="last_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel.</div>
                            <div class="button last_button">
                                <a href="{{route('detalle')}}">Ver Oferta</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 last_col">
                    <div class="last_item">
                        <div class="last_item_content">
                            <div class="last_subtitle">Cayo Coco</div>
                            <div class="last_percent">1200€</div>
                            <div class="last_title">Oferta especial</div>
                            <div class="last_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel.</div>
                            <div class="button last_button">
                                <a href="{{route('detalle')}}">Ver Oferta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Find Form -->
{{-- <div class="find">
    <div class="find_background parallax-window evento" data-parallax="scroll" data-image-src="{{asset('images/find.jpg') }}" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="find_title text-center">Find the Adventure of a lifetime</div>
            </div>
            <div class="col-12">
                <div class="find_form_container">
                    <form action="#" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
                        <div class="find_item">
                            <div>Destination:</div>
                            <input type="text" class="destination find_input" required="required" placeholder="Keyword here">
                        </div>
                        <div class="find_item">
                            <div>Adventure type:</div>
                            <select name="adventure" id="adventure" class="dropdown_item_select find_input">
                                <option>Categories</option>
                                <option>Categories</option>
                                <option>Categories</option>
                            </select>
                        </div>
                        <div class="find_item">
                            <div>Min price</div>
                            <select name="min_price" id="min_price" class="dropdown_item_select find_input">
                                <option>&nbsp;</option>
                                <option>Price</option>
                                <option>Price</option>
                            </select>
                        </div>
                        <div class="find_item">
                            <div>Max price</div>
                            <select name="max_price" id="max_price" class="dropdown_item_select find_input">
                                <option>&nbsp;</option>
                                <option>Price</option>
                                <option>Price</option>
                            </select>
                        </div>
                        <button class="button find_button">Find</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- About -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h2>Cubaires Business & Travels</h2>
                    <div>todo bien</div>
                </div>
            </div>
        </div>
        <div class="row about_row">
            <div class="col-lg-6 about_col order-lg-1 order-2">
                <div class="about_content">
                    <p><b>Cubaires Business & Travels,</b><br>
                            somos tu receptivo especializada en el destino Cuba, con más de una década de experiencia en el mercado.
                            Con un producto único y especializado, a medida; el cual se ajusta a las necesidades del mercado y a la vez te ofrecemos productos singulares y novedosos que van a serguir sorprendiendo a tu cliente.
                            <br><br>
                            Porque Cuba no es solo sol y playa, es mucho más…
                            es ÚNICA por la personalidad de sus gentes, y la calidez de su atención…
                        </p>
                </div>
            </div>
            <div class="col-lg-6 about_col order-lg-2 order-1">
                <div class="about_image">
                    <img src="{{asset('images/about.jpg')}} " alt="https://unsplash.com/@sanfrancisco">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Video -->
<div class="video_section d-flex flex-column align-items-center justify-content-center">
        <div class="video_background parallax-window" style="background-image: url('{{asset('images/video.jpg')}}'); "></div>
        <div class="video_content">
            <div class="video_title">Un día en la Isla</div>
            <div class="video_subtitle">Especialmente para tí</div>
            <div class="video_play">
                <a class="video" href="https://www.youtube.com/watch?v=BzMLA8YIgG0">
                    <svg version="1.1" id="Layer_1" class="play_button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="140px" height="140px" viewBox="0 0 140 140" enable-background="new 0 0 140 140" xml:space="preserve">
                        <g id="Layer_2">
                            <circle class="play_circle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" cx="70.333" cy="69.58" r="68.542"></circle>
                            <polygon class="play_triangle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" points="61.583,56 61.583,84.417 84.75,70 	"></polygon>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>

<!-- Top Servicios -->
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h2>Paquetes Destacados</h2>
                    <div>no te los puedes perder</div>
               </div>
            </div>
        </div>
        <div class="row top_content">

            <div class="col-lg-3 col-md-6 top_col">

                <!-- Top Destination Item -->
                <div class="top_item">
                    <a href="{{route('detalle')}}">
                        <div class="top_item_image"><img src="{{asset('images/top_1.jpg') }}" ></div>
                        <div class="top_item_content">
                            <div class="top_item_price">Desde 900€</div>
                            <div class="top_item_text">Fly & Drive: Occidente al completo </div>
                       </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 top_col">
                <!-- Top Destination Item -->
                <div class="top_item">
                    <a href="{{route('detalle')}}">
                        <div class="top_item_image"><img src="{{asset('images/top_2.jpg') }}" ></div>
                        <div class="top_item_content">
                            <div class="top_item_price">Desde 900€</div>
                            <div class="top_item_text">Kitesurf en Cayo Guillermo</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 top_col">
                <!-- Top Destination Item -->
                <div class="top_item">
                    <a href="{{route('detalle')}}">
                        <div class="top_item_image"><img src="{{asset('images/top_3.jpg') }}" ></div>
                        <div class="top_item_content">
                            <div class="top_item_price">Desde 900€</div>
                            <div class="top_item_text">Pesca Fly - Ciénaga de Zapata</div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 top_col">
                <!-- Top Destination Item -->
                <div class="top_item">
                    <a href="{{route('detalle')}}">
                        <div class="top_item_image"><img src="{{asset('images/top_4.jpg')}}" ></div>
                        <div class="top_item_content">
                            <div class="top_item_price">Desde 900€</div>
                            <div class="top_item_text">Eco-paraísos cubanos</div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>





<!-- Popular -->
{{-- <div class="popular">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h2>Popular destinations in 2018</h2>
                    <div>take a look at these offers</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="popular_content d-flex flex-md-row flex-column flex-wrap align-items-md-center align-items-start justify-content-md-between justify-content-start">

                    <!-- Popular Item -->
                    <div class="popular_item">
                        <a href="offers.html">
                            <img src="{{asset('images/popular_1.jpg')}}" >
                            <div class="popular_item_content">
                                <div class="popular_item_price">From $890</div>
                                <div class="popular_item_title">Turkey</div>
                            </div>
                        </a>
                    </div>

                    <!-- Popular Item -->
                    <div class="popular_item">
                        <a href="offers.html">
                            <img src="{{asset('images/popular_2.jpg')}}" >
                            <div class="popular_item_content">
                                <div class="popular_item_price">From $890</div>
                                <div class="popular_item_title">Hawai</div>
                            </div>
                        </a>
                    </div>

                    <!-- Popular Item -->
                    <div class="popular_item">
                        <a href="offers.html">
                            <img src="{{asset('images/popular_3.jpg')}}" >
                            <div class="popular_item_content">
                                <div class="popular_item_price">From $890</div>
                                <div class="popular_item_title">Ireland</div>
                            </div>
                        </a>
                    </div>

                    <!-- Popular Item -->
                    <div class="popular_item">
                        <a href="offers.html">
                            <img src="{{asset('images/popular_4.jpg')}}" >
                            <div class="popular_item_content">
                                <div class="popular_item_price">From $890</div>
                                <div class="popular_item_title">Thailand</div>
                            </div>
                        </a>
                    </div>

                    <!-- Popular Item -->
                    <div class="popular_item">
                        <a href="offers.html">
                            <img src="{{asset('images/popular_5.jpg')}}" >
                            <div class="popular_item_content">
                                <div class="popular_item_price">From $890</div>
                                <div class="popular_item_title">Croatia</div>
                            </div>
                        </a>
                    </div>

                    <!-- Popular Item -->
                    <div class="popular_item">
                        <a href="offers.html">
                            <img src="{{asset('images/popular_6.jpg')}}">
                            <div class="popular_item_content">
                                <div class="popular_item_price">From $890</div>
                                <div class="popular_item_title">Bali</div>
                            </div>
                        </a>
                    </div>

                    <!-- Popular Item -->
                    <div class="popular_item">
                        <a href="offers.html">
                            <img src="{{asset('images/popular_7.jpg')}}">
                            <div class="popular_item_content">
                                <div class="popular_item_price">From $890</div>
                                <div class="popular_item_title">France</div>
                            </div>
                        </a>
                    </div>

                    <!-- Popular Item -->
                    <div class="popular_item">
                        <a href="offers.html">
                            <img src="{{asset('images/popular_8.jpg')}}">
                            <div class="popular_item_content">
                                <div class="popular_item_price">From $890</div>
                                <div class="popular_item_title">Vietnam</div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="milestones">
    <div class="milestones_background parallax-window" style="background-image: url('{{asset('images/fact_background.jpg')}}'); " data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h2>Lo que nuestros clientes dicen</h2>
                </div>
           </div>
        </div>
        <div class="row">

                <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
			  
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="owl-item" style="width: 1110px; margin-right: 20px;">
                                <div class="col-lg-8 offset-lg-2 ">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                            <img class="rounded-circle mx-auto" src="{{asset('images/top_4.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                                    </div>
                
                                    <div class="quote_text">
                                        “Traveling it leaves you speechless, then turns you into a storyteller.” 
                                        <br> 
                                        <span>–Joe Smith</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <div class="carousel-item">
                            <div class="owl-item" style="width: 1110px; margin-right: 20px;">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                            <img class="rounded-circle mx-auto" src="{{asset('images/top_4.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                                    </div>
                
                                    <div class="quote_text">
                                        “Traveling it leaves you speechless, then turns you into a storyteller.” 
                                        <br> 
                                        <span>–Joe Smith</span>
                                    </div>
                                </div>
                          </div>
          
                          </div>
                          <div class="carousel-item active">
                            <div class="owl-item" style="width: 1110px; margin-right: 20px;">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                            <img class="rounded-circle mx-auto" src="{{asset('images/top_4.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                                    </div>
                
                                    <div class="quote_text">
                                        “Traveling it leaves you speechless, then turns you into a storyteller.” 
                                        <br> 
                                        <span>–Joe Smith</span>
                                    </div>
                                </div>
                          </div>
          
                          </div>
                        <div class="carousel-item">
                            <div class="owl-item" style="width: 1110px; margin-right: 20px;">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <img class="rounded-circle mx-auto" src="{{asset('images/top_4.jpg')}}" alt="Generic placeholder image" width="140" height="140">
                                    </div>
                
                                    <div class="quote_text">
                                        “Traveling it leaves you speechless, then turns you into a storyteller.” 
                                        <br> 
                                        <span>–Joe Smith</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        
    </div>
</div>

<!-- Newsletter -->
<div class="newsletter">
    <div class="newsletter_background" style="background-image:url('{{asset('images/newsletter.jpg')}}');"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="newsletter_content">
                    <div class="newsletter_title text-center">Subscríbete a nuestro Newsletter</div>
                    <div class="newsletter_form_container">
                        <form action="#" id="newsletter_form" class="newsletter_form">
                            <div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
                                <input type="email" id="newsletter_input" class="newsletter_input" placeholder="Tu correo electrónico">
                                <button type="submit" id="newsletter_button" class="newsletter_button">Subscribirse</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->
<div class="contact">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="contact_title">Contáctanos</div>
                    
                </div>
            </div>
            <div class="row contact_content">
                <div class="col-lg-5">
                   
                    <div class="contact_info">
                        <div class="contact_info_box">i</div>
                        <div class="contact_info_container">
                            <div class="contact_info_content">
                                <ul>
                                    <li>Address: 1481 Creekside Lane Avila Beach, CA 93424</li>
                                    <li>Phone: +34 96 381 30 72</li>
                                    <li>Email: cubaires@cubairestravel.com</li>
                                </ul>
                            </div>
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
                <div class="col-lg-7">
                    <div class="contact_form_container">
                        <form action="#" id="contact_form" class="clearfix">
                            <input id="contact_input_name" class="contact_input contact_input_name" type="text" placeholder="Nombre" required="required" data-error="Name is required.">
                            <input id="contact_input_email" class="contact_input contact_input_email" type="text" placeholder="Correo" required="required" data-error="E-mail is required.">
                            <input id="contact_input_subject" class="contact_input contact_input_subject" type="text" placeholder="Asunto">
                            <textarea id="contact_input_message" class="contact_message_input contact_input_message" name="message" placeholder="Mensaje" required="required" data-error="Please, write us a message."></textarea>
                            <button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" value="Sumbit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row contact_map">

            <!-- Google Map -->
                <div class="col">
                    <div id="google_map">
                        <div class="map_container">
                            <div id="map" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;" class="gm-style"><div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;" tabindex="0"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 987; transform: matrix(1, 0, 0, 1, -66, -66);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="width: 230px; height: 150px; overflow: hidden; position: absolute; left: -281px; top: -125px; z-index: 0;"><img style="position: absolute; left: 0px; top: 0px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 230px; height: 150px;" alt="" src="contact_files/marker.png" draggable="false"></div><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; z-index: 987; transform: matrix(1, 0, 0, 1, -66, -66);"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 256px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 987; transform: matrix(1, 0, 0, 1, -66, -66);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" role="presentation" src="contact_files/vt_007.png"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" role="presentation" src="contact_files/vt_010.png"></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" role="presentation" src="contact_files/vt_009.png"></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" role="presentation" src="contact_files/vt_012.png"></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" role="presentation" src="contact_files/vt_014.png"></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" role="presentation" src="contact_files/vt_008.png"></div><div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" role="presentation" src="contact_files/vt_015.png"></div><div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" role="presentation" src="contact_files/vt_003.png"></div><div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" role="presentation" src="contact_files/vt_002.png"></div><div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" role="presentation" src="contact_files/vt_005.png"></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" role="presentation" src="contact_files/vt_013.png"></div><div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" role="presentation" src="contact_files/vt_004.png"></div><div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" role="presentation" src="contact_files/vt.png"></div><div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" role="presentation" src="contact_files/vt_006.png"></div><div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" role="presentation" src="contact_files/vt_011.png"></div></div></div></div><div style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;" class="gm-style-pbc"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div style="width: 230px; height: 150px; overflow: hidden; position: absolute; opacity: 0; cursor: pointer; touch-action: none; left: -281px; top: -125px; z-index: 0;" title=""><img style="position: absolute; left: 0px; top: 0px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 230px; height: 150px;" alt="" src="contact_files/marker.png" draggable="false"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div></div><iframe aria-hidden="true" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: medium none;" src="contact_files/a.html" frameborder="0"></iframe><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a style="position: static; overflow: visible; float: none; display: inline;" target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=34.043238,-118.245463&amp;z=13&amp;t=m&amp;hl=es-ES&amp;gl=US&amp;mapclient=apiv3" title="Open this area in Google Maps (opens a new window)"><div style="width: 66px; height: 26px; cursor: pointer;"><img style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" alt="" src="contact_files/google4.png" draggable="false"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 420px; top: 191px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Datos de mapas</div><div style="font-size: 13px;">Datos de mapas ©2018 Google</div><button style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; border: 0px none; margin: 0px; padding: 0px; position: absolute; cursor: pointer; -moz-user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;" draggable="false" title="Close" aria-label="Close" type="button" class="gm-ui-hover-effect"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 233px; bottom: 0px; width: 151px;"><div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Datos de mapas</a><span>Datos de mapas ©2018 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Datos de mapas ©2018 Google</div></div><div class="gmnoprint gm-style-cc" style="z-index: 1000001; -moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 147px; bottom: 0px;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);" href="https://www.google.com/intl/es-ES_US/help/terms_maps.html" target="_blank" rel="noopener">Términos de uso</a></div></div><button style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; margin: 10px; padding: 0px; position: absolute; cursor: pointer; -moz-user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;" draggable="false" title="Cambiar a la vista en pantalla completa" aria-label="Cambiar a la vista en pantalla completa" type="button" class="gm-control-active gm-fullscreen-control"><img style="height: 18px; width: 18px; margin: 11px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img style="height: 18px; width: 18px; margin: 11px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img style="height: 18px; width: 18px; margin: 11px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"></button><div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Informar a Google acerca de errores en las imágenes o en el mapa de carreteras" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;" href="https://www.google.com/maps/@34.043238,-118.2454634,13z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3">Notificar un problema de Maps</a></div></div><div class="gmnoprint gm-bundled-control" style="margin: 10px; -moz-user-select: none; position: absolute; right: 40px; top: 231px;" draggable="false" controlwidth="40" controlheight="81"><div class="gmnoprint" style="position: absolute; left: 0px; top: 0px;" controlwidth="40" controlheight="81"><div draggable="false" style="-moz-user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"><button style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; border: 0px none; margin: 0px; padding: 0px; position: relative; cursor: pointer; -moz-user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;" draggable="false" title="Acerca la imagen" aria-label="Acerca la imagen" type="button" class="gm-control-active"><img style="height: 18px; width: 18px; margin: 9px 11px 13px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img style="height: 18px; width: 18px; margin: 9px 11px 13px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img style="height: 18px; width: 18px; margin: 9px 11px 13px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div><button style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; display: block; border: 0px none; margin: 0px; padding: 0px; position: relative; cursor: pointer; -moz-user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;" draggable="false" title="Aleja la imagen" aria-label="Aleja la imagen" type="button" class="gm-control-active"><img style="height: 18px; width: 18px; margin: 13px 11px 9px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img style="height: 18px; width: 18px; margin: 13px 11px 9px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"><img style="height: 18px; width: 18px; margin: 13px 11px 9px;" src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"></button></div></div></div></div></div><div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;"><div><img alt="" src="contact_files/google_gray.svg" style="padding: 0px; margin: 0px; border: 0px none; height: 17px; vertical-align: middle; width: 52px; -moz-user-select: none;" draggable="false"></div><div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">Esta página no puede cargar Google&nbsp;Maps correctamente.</span></div><table style="width: 100%;"><tr><td style="line-height: 16px; vertical-align: middle;"><a href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=billing#api-key-and-billing-errors" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Do you own this website?</a></td><td style="text-align: right;"><button class="dismissButton">OK</button></td></tr></table></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bottom-banner-w3layouts contact " style="padding:3em;">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-4 text-center">
                        <a href="http://valencuba.com/">
                             <img class="col-8 gris opacidad" src="{{asset('images/logo_valencuba.png')}}">
                        </a>
                    </div>
                    <div class="col-4 text-center">
                        <a href="http://consuljuridica.com/">
                            <img class="col-8 gris opacidad" src="{{asset('images/logo_consultoria.png')}}">
                        </a>
                    </div>
                    <div class="col-4 text-center">
                        <a href="http://valencuba.com/">
                            <img class="col-8 gris opacidad" src="{{asset('images/logo_luxury.png')}}"> 
                        </a>
                    </div>
                </div>
            </div>	
        </section>

@endsection
@push('scripts')
<script>
    var route='{{asset('images/find.jpg') }}';
    $('.evento').parallax({imageSrc: route});
</script>

@endpush