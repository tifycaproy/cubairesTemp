@extends ('Frontend.layouts.layout')

@section('contenido')

<div class="offers">
        <div class="last_background parallax-window" style="background-image: url('{{asset('images/last.jpg')}}'); background-position: top; opacity: 0.3;" data-speed="0.8"></div>
    <div class="container">
             
            <div class="row justify-content-center">
                
                <div class="col-lg-6  d-flex formulario" >
                    
                        <div class="last_item_content">
                           
                            <div class="last_title text-center">Ingresa tu nueva contraseña por favor</div><br>
                                                        
                            <form action="#" id="contact_form" class="clearfix">
                                <input id="contact_input_subject" class="contact_input contact_input_subject" type="text" placeholder="Contraseña">
                                <input id="contact_input_subject" class="contact_input contact_input_subject" type="text" placeholder="Confirme Contraseña">
                            </form>
                            

                            <div class="button last_button">
                            <a href="{{route('sesion')}}">Cambiar</a>
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