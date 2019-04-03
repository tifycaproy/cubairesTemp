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
                        <div class="home_title">Registro</div>
                        <div class="home_breadcrumbs">
                            <ul class="home_breadcrumbs_list">
                                <li class="home_breadcrumb"><a href="{{route('/')}}">Inicio</a></li>
                                <li class="home_breadcrumb">Registro</li>
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
                           
                            <div class="last_title text-center">Rellena los siguientes campos para continuar</div><br>
                                                        
                            <form action="#" id="contact_form" class="clearfix">
                                <input id="contact_input_email" class="contact_input contact_input_email col-10" type="text" placeholder="E-mail" required="required" data-error="E-mail is required.">
                                <input id="contact_input_subject" class="contact_input col-5" type="text" placeholder="Nombre">
                                <input id="contact_input_email" class="contact_input col-5" type="text" placeholder="Apellido" required="required" data-error="E-mail is required.">
                                <input id="contact_input_subject" class="contact_input col-10" type="text" placeholder="Documento de Identidad">
                                <input id="contact_input_email" class="contact_input col-5" type="text" placeholder="País" required="required" data-error="E-mail is required.">
                                <input id="contact_input_subject" class="contact_input col-5" type="text" placeholder="Teléfono">
                                <input id="contact_input_email" class="contact_input col-10" type="text" placeholder="Constraseña" required="required" data-error="E-mail is required.">
                                <input id="contact_input_subject" class="contact_input col-10" type="text" placeholder="Confirma tu contraseña">
                            </form>
                            

                            <div class="button last_button">
                                <a href="">Registrar</a>
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