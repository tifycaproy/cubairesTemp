@extends ('Frontend.layouts.layout')

@section('contenido')

  <!-- Home -->
  <div class="home" style="height: 34em;">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/offers.jpg" data-speed="0.8">
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_content">
                    <div class="home_content_inner">
                        <div class="home_title">Recuperar Constraseña</div>
                        <div class="home_breadcrumbs">
                            <ul class="home_breadcrumbs_list">
                                <li class="home_breadcrumb"><a href="{{route('/')}}">Inicio</a></li>
                                <li class="home_breadcrumb">Recuperar Constraseña</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="offers">
        <div class="last_background parallax-window" style="background-image: url('{{asset('images/last.jpg')}}'); background-position: top; opacity: 0.3;" data-speed="0.8"></div>
    <div class="container">
             
            <div class="row justify-content-center">
                
                <div class="col-lg-6  d-flex" style="padding-top: 70px;">
                    
                        <div class="last_item_content">
                           
                            <div class="last_title text-center">Ingresa tu e-mail por favor</div><br>
                                                        
                            <form action="#" id="contact_form" class="clearfix">
                                <input id="contact_input_email" class="contact_input contact_input_email" type="text" placeholder="E-mail" required="required" data-error="E-mail is required.">
                            </form>
                            

                            <div class="button last_button">
                            <a href="{{route('contraseña')}}">Siguiente</a>
                            </div>
                            
                                <br><br>
                                
                            <div >¿Aún no tienes cuenta? <a style="color:white;" href="{{route('registro')}}"><b>Regístrate aquí</b></a></div>
                        </div>
                    
                </div>
            </div>
             
            
    </div>
</div>

@endsection
@push('scripts')
<script>
    var route='{{asset('images/find.jpg') }}';
    $('.evento').parallax({imageSrc: route});
</script>

@endpush