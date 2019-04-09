@extends ('Frontend.layouts.layout')

@section('contenido')


<div class="offers">
        <div class="last_background parallax-window" style="background-image: url('{{asset('images/last.jpg')}}'); background-position: top; opacity: 0.3;" data-speed="0.8"></div>
    <div class="container">
             
            <div class="row justify-content-center">
                
                <div class="col-lg-6  d-flex formulario">
                    
                        <div class="last_item_content">
                          
                            <div class="last_title text-center">Rellena los siguientes campos para continuar</div><br>
                            
                            <form action="{{ route('ingresarsolicitud',['servicio'=>$_REQUEST["paquete"]]) }}" id="contact_form" class="clearfix" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }} 
                                <label for="example-date-input" class="col-12 col-form-label">Fecha de Disfrute</label>
                                <label for="example-date-input" class="col-5 col-form-label">Desde</label>
                                <label for="example-date-input" class="col-5 col-form-label">Hasta</label>
                                <input id="contact_input_subject" name="fecha_desde" class="contact_input col-5" type="date">
                                <input id="contact_input_email" name="fecha_hasta" class="contact_input col-5" type="date" required="required" data-error="required.">
                                <label for="example-date-input" class="col-5 col-form-label">Número Adultos</label>
                                <label for="example-date-input" class="col-5 col-form-label">Número Niños</label>
                                <input id="contact_input_subject" name="numero_adulto" class="contact_input col-5" type="tel" placeholder="-">                                
                                <input id="contact_input_email" name="numero_nino" class="contact_input col-5" type="tel" placeholder="-" required="required" data-error=" required.">
                                <input id="contact_input_subject" name="observacion" class="contact_input col-10" type="text" placeholder="Observaciones">
                            <input id="contact_input_subject" name="servicio_id" value="{{$_REQUEST["paquete"]}}" hidden class="contact_input col-10" type="password" placeholder="Observaciones">
                            
                            

                            
                                <input type="submit" class="button last_button" value="Solicitar">
                           
                        </form>
                        </div>
                    
                </div>
            </div>
             
            
    </div>
</div>

@endsection
@push('scripts')

<script>
    var today = new Date().toISOString().split('T')[0];
document.getElementsByName("fecha_desde")[0].setAttribute('min', today);
document.getElementsByName("fecha_hasta")[0].setAttribute('min', today);
    var route='{{asset('images/find.jpg') }}';
    $('.evento').parallax({imageSrc: route});
</script>

@endpush