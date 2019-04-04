@extends ('Frontend.layouts.layout')

@section('contenido')


<div class="offers">
        <div class="last_background parallax-window" style="background-image: url('{{asset('images/last.jpg')}}'); background-position: top; opacity: 0.3;" data-speed="0.8"></div>
    <div class="container">
             
            <div class="row justify-content-center">
                
                <div class="col-lg-6  d-flex formulario">
                    
                        <div class="last_item_content">
                           
                            <div class="last_title text-center">Rellena los siguientes campos para continuar</div><br>
                                                        
                            <form action="#" id="contact_form" class="clearfix">
                                <label for="example-date-input" class="col-12 col-form-label">Fecha de Disfrute</label>
                                <input id="contact_input_subject" class="contact_input col-5" type="text" placeholder="10/03/2019">
                                <input id="contact_input_email" class="contact_input col-5" type="text" placeholder="20/03/2019" required="required" data-error="required.">
                                <label for="example-date-input" class="col-5 col-form-label">Número Adultos</label>
                                <label for="example-date-input" class="col-5 col-form-label">Número Niños</label>
                                <input id="contact_input_subject" class="contact_input col-5" type="text" placeholder="-">                                
                                <input id="contact_input_email" class="contact_input col-5" type="text" placeholder="-" required="required" data-error=" required.">
                                <input id="contact_input_subject" class="contact_input col-10" type="text" placeholder="Observaciones">
                            </form>
                            

                            <div class="button last_button">
                                <a href="">Solicitar</a>
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