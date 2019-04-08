@extends ('Frontend.layouts.layout')

@section('contenido')


<div class="offers">
        <div class="last_background parallax-window" style="background-image: url('{{asset('images/last.jpg')}}'); background-position: top; opacity: 0.3;" data-speed="0.8"></div>
    <div class="container">
             
            <div class="row justify-content-center">
                
                <div class="col-lg-6  d-flex formulario" >
                    
                        <div class="last_item_content">
                           
                            <div class="last_title text-center">Ingresa tu e-mail por favor</div><br>
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                                </div>
                            @endif                           
                            <form id="contact_form" class="clearfix" method="POST" action="{{ route('password.email') }}">
                                    {{ csrf_field() }}
                                <input id="contact_input_email" class="contact_input contact_input_email" value="{{ old('email') }}" autofocus name="email" type="email" placeholder="E-mail" required="required" data-error="E-mail is required.">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <input style="color:white;" type="submit" class="button last_button" value="Siguiente">
                            </form> 
                            
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