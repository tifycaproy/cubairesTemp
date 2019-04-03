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
                        <div class="home_title">Nueva Contraseña</div>
                        <div class="home_breadcrumbs">
                            <ul class="home_breadcrumbs_list">
                                <li class="home_breadcrumb"><a href="{{route('/')}}">Inicio</a></li>
                                <li class="home_breadcrumb">Nueva Contraseña</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="offers">
    <div class="container">
             
            <div class="row justify-content-center">
                
                <div class="col-lg-6  d-flex" style="padding-top: 70px;">
                    
                        <div class="last_item_content">
                           
                            <div class="last_title text-center">Ingresa tu nueva contraseña por favor</div><br>
                                                        
                            <form action="#" id="contact_form" class="clearfix">
                                <input id="contact_input_subject" class="contact_input contact_input_subject" type="text" placeholder="Contraseña">
                                <input id="contact_input_subject" class="contact_input contact_input_subject" type="text" placeholder="Confirme Contraseña">
                            </form>
                            

                            <div class="button last_button">
                            <a href="{{route('sesion')}}">Cambiar Contraseña</a>
                            </div>
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