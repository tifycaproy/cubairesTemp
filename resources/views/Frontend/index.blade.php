@extends ('Frontend.layouts.layout')

@section('contenido')

<div class="alert alert-success alert-dismissible fade show alertan" id="alert" role="alert" style="">
  <strong style="margin-right: 40px;">Su mensaje ha sido enviado</strong> 
  <button type="button" class="close " data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<!-- Home -->
<div class="">
    <div id= "carouselExampleControls" class= "carousel slide" data-ride= "carousel" style="" > 
        <div class= "carousel-inner" > 
            @php
                $longitud = count($slider);
            @endphp
            @for ($i = 0; $i < $longitud ; $i++)
                @if ($i == 0)
                    <div class= "carousel-item active carrousel paralan" style=" background-image: url('{{asset('images/sliders') }}/{{ $slider[$i]->url_imagen }}'); "> 
                        <div class="home_content" >
                            <div class="home_content_innerr d-none d-sm-block">
                                <div class="home_text_large">{{ $slider[$i]->titulo }}</div>
                                <div class="home_text_small">{!! html_entity_decode($slider[$i]->contenido) !!}</div>
                            </div>
                        </div>
                    </div> 
                @endif
                @if ($i > 0)
                  <div class= "carousel-item carrousel paralan" style=" background-image: url('{{asset('images/sliders') }}/{{ $slider[$i]->url_imagen }}');"> 
                         <div class="home_content">
                            <div class="home_content_innerr d-none d-sm-block">
                                <div class="home_text_large">{{ $slider[$i]->titulo }}</div>
                                <div class="home_text_small">{!! html_entity_decode($slider[$i]->contenido) !!}</div>
                            </div>
                        </div>
                    </div> 
                @endif
            
            @endfor
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
                @foreach ($categorias as $categoria)
                    <div class="owl-item">
                        <div class="special_item">
                            <div class="special_item_background">
                                <div class="paral" style="background-image: url('{{asset('images/categorias')}}/{{ $categoria->url_imagen }}'); height: 80%; "></div>
                               {{--  <img src="{{asset('images/categorias')}}/{{ $categoria->url_imagen }}" > --}}
                            </div>
                            <div class="special_item_content text-center">
                                {{-- <div class="special_category">Visiting</div> --}}
                                <div class="special_title"><a href="{{route('categorias_tours',$categoria->id)}}">{{ $categoria->nombre_categoria }}</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
                           
                
            </div>

            <div class="special_slider_nav d-flex flex-column align-items-center justify-content-center">
                <img src="{{asset('images/special_slider.png')}}" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Ofertas -->
<div class="last">
        <div class="last_background parallax-window" style="background-size:cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center center;background-image: url('{{asset('images/last.jpg')}}'); " data-speed="0.8"></div>
    
        <div class="container">
            <div class="row">
               {{--  <div class="last_logo">
                    <img src="{{ asset('images/favicon.png') }}" alt="">
                </div> --}}
                @foreach ($ofertas as $paquete)
                    <div class="col-lg-6 last_col">
                        <div class="last_item">
                            <div class="last_item_content">
                                <div class="last_title">Oferta especial</div>
                                <div class="last_percent">-{{ $paquete->oferta }}%</div>
                                <div class="last_subtitle text-center" style="font-size: 1.8rem">{{ $paquete->titulo }}</div>
                                <div class="button last_button">
                                    <a href="{{route('detalle',$paquete->id )}}">Ver Paquete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

<!-- About -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h2>Cubaires Business & Travels</h2>
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
        <div class="video_background parallax-window" @isset ($img_video) style="background-size:cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center center; background-image: url('{{asset('images/img_video')}}/{{ $img_video }}'); @endisset  "></div>
        <div class="video_content">
            <div class="video_title">@isset ($text_video){{ $text_video }} @endisset</div>
            <div class="video_subtitle">Especialmente para tí</div>
            <div class="video_play">
                <a class="video" @isset($video)href="{{$video}}"@endisset>
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
            @foreach ($destacados as $destacado)
                <div class="col-lg-3 col-md-6 top_col">
                    <div class="top_item" style="min-height: 350px; background-image: url('{{asset('images/servicios') }}/{{ $destacado->url_imagen }}'); background-size: cover; background-position: center center; background-repeat: no-repeat; ">
                        <a href="{{route('detalle',$destacado->id)}}">
                            {{-- <div class="top_item_image"><img src="{{asset('images/servicios') }}/{{ $destacado->url_imagen }}" ></div> --}}
                            <div class="top_item_content">
                                <div class="top_item_price">Desde @php
                                    echo (int)$destacado->monto;
                                @endphp € </div>
                                <div class="top_item_text">{{ $destacado->titulo }} </div>
                           </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Popular -->


<div class="milestones">
    <div class="milestones_background parallax-window" style="background-size:cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center center; background-image: url('{{asset('images/fact_background.jpg')}}'); " data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h2>Lo que nuestros clientes dicen</h2>
                </div>
           </div>
        </div>
        <div class="row">
                <div id="carouselExampleIndicators" class="carousel col-12 slide mt-5" data-ride="carousel">
                    <div class="carousel-inner">

                        @php
                            $longitud = count($comentarios);
                        @endphp
                        @for ($i = 0; $i < $longitud ; $i++)
                            @if ($i == 0)
                                <div class="carousel-item active">
                                    <div class="owl-item" style="">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-center">
                                            <img class="rounded-circle mx-auto" src="{{asset('images/comentarios')}}/{{ $comentarios[$i]->url_imagen }}" alt="{{ $comentarios[$i]->nombre }}" width="140" height="140">
                                            </div>
                        
                                            <div class="quote_text">
                                                {!! html_entity_decode($comentarios[$i]->contenido) !!} 
                                                <br> 
                                                <span>–{{ $comentarios[$i]->nombre }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($i > 0)
                                <div class="carousel-item">
                                    <div class="owl-item">
                                        <div class="">
                                            <div class=" d-flex justify-content-center">
                                                <img class="rounded-circle mx-auto" src="{{asset('images/comentarios')}}/{{ $comentarios[$i]->url_imagen }}" alt="{{ $comentarios[$i]->nombre }}" width="140" height="140">
                                            </div>
                        
                                            <div class="quote_text">
                                                {!! html_entity_decode($comentarios[$i]->contenido) !!} 
                                                <br> 
                                                 <span>–{{ $comentarios[$i]->nombre }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endfor
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
                            <div class="respuesta"></div>
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
                                    <li>Address: @isset ($direccion) {{ $direccion }} @endisset</li>
                                    <li>Phone: @isset ($telefono) {{ $telefono }} @endisset</li>
                                    <li>Email: @isset ($email) {{ $email }} @endisset</li>

                                </ul>
                            </div>
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
                <div class="col-lg-7">
                    <div class="contact_form_container">
                        <form  id="contact_form" class="clearfix" onsubmit="return false">
                            <input id="contact_input_name" class="contact_input contact_input_name" type="text" placeholder="Nombre" required="required" data-error="Name is required.">
                            <input id="contact_input_email" class="contact_input contact_input_email" type="email" placeholder="Correo" required="required" data-error="E-mail is required.">
                           {{--  <input id="contact_input_subject" class="contact_input contact_input_subject" type="text" placeholder="Asunto"> --}}
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
                            @isset ($ubicacion){!! html_entity_decode($ubicacion) !!}@endisset
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

    $('#contact_form').submit(function() {

            //$('.loading').removeClass('d-none');
            $("#contact_send_btn").addClass('d-none');

            var name    = $('input#contact_input_name').val();
            var mail    = $('input#contact_input_email').val();
            var mensaje = $('textarea#contact_input_message').val();

            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "post",
                    url: '{{ route('send_mail') }}',
                    dataType: "json",
                    data: { name: name,mail: mail ,mensaje: mensaje,_token: '{{csrf_token()}}' },
                    success: function (data){

                        if (data == 1) {
                            
                            $(".loading").addClass('d-none');
                            $("#contact_send_btn").removeClass('d-none');

                            $("#alert").css("display","block");
                            $("#alert").fadeIn( 300 ).delay( 1500 ).fadeOut( 1500 );

                        }else{
                            //$('.respuesta-contacto').html('El mensaje no pudo ser enviado, intente nuevamente').css('color', 'red');
                        }
                        
                    }

                });


        });

     $(".newsletter_button").click(function(event){
        event.preventDefault();

                var mail = $("input#newsletter_input").val();

                console.log(mail);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "post",
                    url: '{{ route('create_newlester') }}',
                    dataType: "json",
                    data: { mail: mail ,_token: '{{csrf_token()}}' },
                    success: function (data){

                        $('.respuesta').html('Email registrado exitosamente').css('color', 'green');
                    },
                     error: function (data) {

                        var json = data.responseJSON.errors;
                        var error = json['mail'][0];
                        console.log(error)
                        if (error = 'The mail field is required.') {
                            $('.respuesta').html('El email es requerido').css('color', 'red');
                        }
                        if (error = 'The mail has already been taken.') {
                            $('.respuesta').html('Este email ya se encuentra registrado').css('color', 'red');
                        }


                    }

                });
            });
</script>

@endpush