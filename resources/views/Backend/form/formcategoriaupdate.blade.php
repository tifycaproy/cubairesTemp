@extends ('Backend.layout.layout')

@section('content')

<input id="mostra_vista" value="servicios" hidden disabled>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Modificar Categoría</h4>
          <p class="card-category">Complete todos los datos</p>
          <a href="{{ route('formservicio')}}" class="card-category">
          <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
            <i class="material-icons">add_to_queue</i>
          </button>
           Agregar Servicio</a>           
            <a href="{{ route('formcampo')}}" class="card-category">
              <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                <i class="material-icons">edit_attributes</i>
              </button>
               Agregar Campo</a>
        </div>
        <div class="card-body">
          <form action="{{ route('actualizarcategoria',['id'=>$categoria->id])}}" method="POST" enctype="multipart/form-data">
 {{ csrf_field() }}

          <div class="row">
              <div class="col-md-2">
                  <div class="form-group bmd-form-group {{ $errors->has('posicion') ? ' has-error' : '' }}">
      
                    {!! Form::label('posicion', 'Posición') !!}
                    <select class="form-control" name="posicion" required>
                      @foreach($posiciones_disponibles as $key=> $posicion_disponible)
                      @if($posicion_disponible==$categoria->posicion)
                      <option value="{{$posicion_disponible}}" selected="selected">{{$posicion_disponible}}</option>
                      @else
                      <option value="{{$posicion_disponible}}">{{$posicion_disponible}}</option>
                      @endif
                      @endforeach
                    </select>
                    @if ($errors->has('posicion'))
                        <span class="help-block">
                            <strong>{{ $errors->first('posicion') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
            <div class="col-md-3">
              <div class="form-group bmd-form-group {{ $errors->has('nombre_categoria') ? ' has-error' : '' }}">
                {!! Form::label('nombre_categoria', 'Nombre de la Categoría') !!}
                <input type="text" name="nombre_categoria" class="form-control" value="{{$categoria->nombre_categoria}}" required autofocus>
                @if ($errors->has('nombre_categoria'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre_categoria') }}</strong>
                    </span>
                @endif
              </div>
            </div>            
          </div>
          <div class="row">
              <div class="col-md-4 col-sm-4">
                <h4 class="title {{ $errors->has('url_imagen') ? ' has-error' : '' }}">Subir Imagen</h4>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
                    <img id="preview-file" src="{{URL::to('/images')}}/categorias/{{$categoria->url_imagen}}" alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                  <div>
                    <span class="btn btn-rose btn-round btn-file">
                      <span class="fileinput-new no-existente">Buscar</span>
                      <span class="fileinput-exists existente">Cambiar</span>
  
                      <input id="imagenup" name="url_imagen" type="file" value="{{$categoria->url_imagen}}" href="{{$categoria->url_imagen}}" accept="image/png, .jpeg, .jpg, image/gif" >
  
                      @if ($errors->has('url_imagen'))
                          <span class="help-block">
                              <strong>{{ $errors->first('url_imagen') }}</strong>
                          </span>
                      @endif
                    </span>
                    <a href="#" class="btn btn-danger btn-round fileinput-exists quitarexistente" data-dismiss="fileinput"><i class="fa fa-times"></i>Quitar</a>
                  </div>
                </div>
              </div>
            </div>
          <input class="btn btn-primary pull-right" type="submit" value="Modificar Categoría">
          <div class="clearfix"></div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
