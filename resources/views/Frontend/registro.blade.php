@extends ('Frontend.layouts.layout')

@section('contenido')


<div class="offers">
        <div class="last_background parallax-window" style="background-image: url('{{asset('images/last.jpg')}}'); background-position: top; opacity: 0.3;" data-speed="0.8"></div>
    <div class="container">
             
            <div class="row justify-content-center">
                
                <div class="col-lg-6  d-flex formulario" >
                    
                        <div class="last_item_content">
                           
                            <div class="last_title text-center">Rellena los siguientes campos para continuar</div><br>
                            <form action="{{ route('registrarcliente')}}" id="contact_form" class="clearfix" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}             
                                <input value="{{ old('email')}}" id="contact_input_email" class="contact_input contact_input_email col-10 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" placeholder="E-mail" required="required" data-error="E-mail is required." autofocus>
                                @if ($errors->has('email'))
                                <br>
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                                <input value="{{ old('firstname')}}" id="contact_input_subject" class="contact_input col-5" type="text" name="firstname" placeholder="Nombre">
                                <input value="{{ old('lastname')}}" id="contact_input_email" class="contact_input col-5" type="text" name="lastname" placeholder="Apellido" required="required" data-error="E-mail is required.">
                                <input value="{{ old('documento_identidad_cliente')}}" id="contact_input_subject" class="contact_input col-10" type="text" name="documento_identidad_cliente" placeholder="Documento de Identidad">                                
                                @if ($errors->has('documento_identidad_cliente'))
                                <br>
                                <span class="help-block">
                                        <strong>{{ $errors->first('documento_identidad_cliente') }}</strong>
                                    </span>
                                @endif
                                <select id="contact_input_email" class="contact_input col-5" name="pais_id" data-error="E-mail is required." required="required">
                                <optgroup label="Paises">
                                <option value="">País</option>
                                @foreach($paises as $pais)
                                <option  id="contact_input_email" class="contact_input col-5" value="{{$pais->id}}">{{$pais->nombre_pais}}</option>
                                @endforeach
                                </optgroup>
                                </select>
                                {{-- <input id="contact_input_email" class="contact_input col-5" type="text" placeholder="País" required="required" data-error="E-mail is required."> --}}
                                <input value="{{ old('telefono_cliente')}}" id="contact_input_subject" class="contact_input col-5" name="telefono_cliente" type="text" placeholder="Teléfono">
                                <input id="contact_input_email" class="contact_input col-10 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" type="password" placeholder="Constraseña" required="required" data-error="E-mail is required.">
                                @if ($errors->has('password'))
                                <br>
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <input id="contact_input_subject" class="contact_input col-10" name="password_confirmation" type="password" placeholder="Confirma tu contraseña">
                            
                            
                            
                            <div >
                                <input class="button last_button" type="submit" value="Registrar">
                            </div>
                        </form>
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