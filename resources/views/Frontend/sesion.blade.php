@extends ('Frontend.layouts.layout')

@section('contenido')

<div class="offers">
        <div class="last_background parallax-window" style="background-image: url('{{asset('images/last.jpg')}}'); background-position: top; opacity: 0.3;" data-speed="0.8"></div>
    <div class="container">
             
            <div class="row justify-content-center">
                
                <div class="col-lg-6  d-flex formulario" >
                    
                        <div class="last_item_content ">
                           
                            <div class="last_title text-center ">Ingresa tu e-mail y contraseña por favor</div><br>
                                                        
                            <form action="{{ route('login') }}" id="contact_form" class="clearfix" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}   
                                <input id="contact_input_email" autofocus class="contact_input contact_input_email" name="email" type="text" placeholder="E-mail" required="required" data-error="E-mail is required.">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <input id="contact_input_subject" class="contact_input contact_input_subject" name="password" type="password" placeholder="Contraseña">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            <div>
                                    <input class="button last_button" type="submit" value="Ingresar">
                            </div>
                        </form>
                            
                                <br><br>
                                <div >¿Olvidaste tu contraseña? <a style="color:white;" href="{{route('recuperar')}}"><b>Recupérala aquí</b></a></div>
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