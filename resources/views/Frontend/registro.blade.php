@extends ('Frontend.layouts.layout')

@section('contenido')


<div class="offers">
        <div class="last_background parallax-window" style="background-image: url('{{asset('images/last.jpg')}}'); background-position: top; opacity: 0.3;" data-speed="0.8"></div>
    <div class="container">
             
            <div class="row justify-content-center">
                
                <div class="col-lg-6  d-flex formulario" >
                    
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