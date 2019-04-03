@extends ('Backend.layout.layout')

@section('content')

<input id="mostra_vista" value="servicios" hidden disabled>
<script src="{{ asset('js/core/jquery.min.js') }}"></script>
<script>
$(document).ready(function(){
CKEDITOR.replace( 'editor',{
uiColor:"#DCDCDC",
toolbarGroups : [
  { name: 'basicstyles', groups: [ 'basicstyles'] },
  { name: 'paragraph',   groups: [ 'list', 'indent', 'align', 'bidi' ] },
  { name: 'document',	   groups: [ 'doctools' ] },
  { name: 'editing',     groups: ['spellchecker' ] },
  { name: 'styles' },
  { name: 'colors' },
  { name: 'tools' }
]
// removeButtons: 'Cut,Copy,Paste,Undo,Redo,Anchor,Underline,Strike,Subscript,Superscript'
});
CKEDITOR.replace( 'editor1',{
uiColor:"#DCDCDC",
toolbarGroups : [
  { name: 'basicstyles', groups: [ 'basicstyles'] },
  { name: 'paragraph',   groups: [ 'list', 'indent', 'align', 'bidi' ] },
  { name: 'document',	   groups: [ 'doctools' ] },
  { name: 'editing',     groups: ['spellchecker' ] },
  { name: 'styles' },
  { name: 'colors' },
  { name: 'tools' }
]
// removeButtons: 'Cut,Copy,Paste,Undo,Redo,Anchor,Underline,Strike,Subscript,Superscript'
});
CKEDITOR.replace( 'editor2',{
uiColor:"#DCDCDC",
toolbarGroups : [
  { name: 'basicstyles', groups: [ 'basicstyles'] },
  { name: 'paragraph',   groups: [ 'list', 'indent', 'align', 'bidi' ] },
  { name: 'document',	   groups: [ 'doctools' ] },
  { name: 'editing',     groups: ['spellchecker' ] },
  { name: 'styles' },
  { name: 'colors' },
  { name: 'tools' }
]
// removeButtons: 'Cut,Copy,Paste,Undo,Redo,Anchor,Underline,Strike,Subscript,Superscript'
});
});
</script>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Modificar Paquete</h4>
          <p class="card-category">Complete todos los datos</p>
          <a href="{{ route('formservicio')}}" class="card-category">
              <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                <i class="material-icons">plus_one</i>
              </button>
               Agregar Paquete</a> 
            <a href="{{ route('formcategoria')}}" class="card-category">
              <button  type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Agregar">
                <i class="material-icons">add_circle_outline</i>
              </button>
               Agregar Categoria</a>
        </div>
        <div class="card-body">
          <form action="{{ route('actualizarservicio',['id'=>$servicio->id])}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}

          <div class="row">
            <div class="col-md-3">
              <div class="form-group bmd-form-group {{ $errors->has('titulo_servicio') ? ' has-error' : '' }}">
                {!! Form::label('titulo_servicio', 'Nombre del Paquete') !!}
                <input type="text" name="titulo_servicio" value="{{$servicio->titulo_servicio}}" class="form-control" required autofocus>
                @if ($errors->has('titulo_servicio'))
                    <span class="help-block">
                        <strong>{{ $errors->first('titulo_servicio') }}</strong>
                    </span>
                @endif
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group bmd-form-group {{ $errors->has('monto') ? ' has-error' : '' }}">
                {!! Form::label('monto', 'Costo del Paquete') !!}
                <input type="number" step="0.01" name="monto" value="{{$servicio->monto}}" class="form-control" required autofocus>
                @if ($errors->has('monto'))
                    <span class="help-block">
                        <strong>{{ $errors->first('monto') }}</strong>
                    </span>
                @endif
              </div>
            </div>
          </div>
          <div class="row">
              <h4 class="title col-12 {{ $errors->has('oferta') ? ' has-error' : '' }}">Opcionales: </h4>
              <div class="col-md-3">
                  <div class="form-group bmd-form-group {{ $errors->has('oferta') ? ' has-error' : '' }}">
                    {!! Form::label('oferta', 'Porcentaje de Oferta %') !!}
                    <input type="number" step="0.01" max="100" min="0" name="oferta" value="{{$servicio->oferta}}" class="form-control" >
                    @if ($errors->has('oferta'))
                        <span class="help-block">
                            <strong>{{ $errors->first('oferta') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group bmd-form-group {{ $errors->has('valoracion') ? ' has-error' : '' }}">
        
                      {!! Form::label('valoracion', 'Valoración') !!}
                      <select class="form-control" name="valoracion" required>    
                          @foreach($valoraciones as $key=> $valoracion)
                          @if($valoracion["valoracion_id"]==$servicio->valoracion)
                          <option value="{{$valoracion["valoracion_id"]}}" selected="selected">{{$valoracion["valoracion"]}}</option>
                          @else
                          <option value="{{$valoracion["valoracion_id"]}}">{{$valoracion["valoracion"]}}</option>
                          @endif
                          @endforeach
                      </select>
                      @if ($errors->has('valoracion'))
                          <span class="help-block">
                              <strong>{{ $errors->first('valoracion') }}</strong>
                          </span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-2">
                      <div class="form-group bmd-form-group {{ $errors->has('destacado') ? ' has-error' : '' }}">
                        <div class="form-check form-check-inline">
                        <label id="destacado" class="form-check-label">
                          <input name="destacado" {{$servicio->destacado}} class="form-check-input" type="checkbox">
                          Destacado
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                        @if ($errors->has('destacado'))
                            <span class="help-block">
                                <strong>{{ $errors->first('destacado') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group bmd-form-group {{ $errors->has('estatus') ? ' has-error' : '' }}">
                          <div class="form-check form-check-inline">
                          <label id="estatus" class="form-check-label">
                            <input name="estatus" {{$servicio->estatus}} class="form-check-input" type="checkbox">
                            Estatus
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                          @if ($errors->has('estatus'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('estatus') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>

          </div>
          <div class="row">
            <div class="col-md-10">
            <div class="form-group {{ $errors->has('descripcion') ? ' has-error' : '' }}">
              {!! Form::label('descripcion','Breve Descripcion (Opcional)') !!}
              <div class="form-group bmd-form-group">
                  <textarea id="editor" name="descripcion" class="form-control" rows="4">{{$servicio->descripcion}}</textarea>
                @if ($errors->has('descripcion'))
                    <span class="help-block">
                        <strong>{{ $errors->first('descripcion') }}</strong>
                    </span>
                @endif
              </div>
            </div>
           </div>
          </div>
          <div class="row">
              <div class="col-md-10">
              <div class="form-group {{ $errors->has('detalles') ? ' has-error' : '' }}">
                {!! Form::label('detalles','Breve Descripcion (Opcional)') !!}
                <div class="form-group bmd-form-group">
                    <textarea id="editor1" name="detalles" class="form-control" rows="4">{{$servicio->detalles}}</textarea>
                  @if ($errors->has('detalles'))
                      <span class="help-block">
                          <strong>{{ $errors->first('detalles') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
             </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                <div class="form-group {{ $errors->has('condiciones') ? ' has-error' : '' }}">
                  {!! Form::label('condiciones','Breve Descripcion (Opcional)') !!}
                  <div class="form-group bmd-form-group">
                      <textarea id="editor2" name="condiciones" class="form-control" rows="4">{{$servicio->condiciones}}</textarea>
                    @if ($errors->has('condiciones'))
                        <span class="help-block">
                            <strong>{{ $errors->first('condiciones') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
               </div>
              </div>
          <div class="row">
          <h4 class="title col-12 {{ $errors->has('categoria_id') ? ' has-error' : '' }}">Categorias: </h4>
          @foreach($categoria_id as $categoria)          
          <div class="col-md-2">
            <div class="form-group bmd-form-group {{ $errors->has('categoria_id[]') ? ' has-error' : '' }}">
              <div class="form-check form-check-inline">
              <label  id="categoria_id_ch[]" class="form-check-label">
                @if($categoria["registrado"]==1)
                <input id="categoria_id[]" name="categoria_id[]" value="{{$categoria["categoria_id"]}}"  class="form-check-input" type="checkbox" checked>
                {{$categoria["nombre_categoria"]}}
                @else
                <input id="categoria_id[]" name="categoria_id[]" value="{{$categoria["categoria_id"]}}" class="form-check-input" type="checkbox">
                {{$categoria["nombre_categoria"]}}
                @endif
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
              @if ($errors->has('categoria_id[]'))
                  <span class="help-block">
                      <strong>{{ $errors->first('categoria_id[]') }}</strong>
                  </span>
              @endif
            </div>
          </div>
          @endforeach
        </div>
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <h4 class="title {{ $errors->has('url_imagen') ? ' has-error' : '' }}">Subir Imagen</h4>
              <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                <div class="fileinput-new thumbnail">
                  <img id="preview-file" src="{{URL::to('/images')}}/servicios/{{$servicio->url_imagen}}" alt="...">
                </div>
                <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                <div>
                  <span class="btn btn-rose btn-round btn-file">
                    <span class="fileinput-new no-existente">Buscar</span>
                    <span class="fileinput-exists existente">Cambiar</span>
                    <input id="imagenup" name="url_imagen" type="file" value="{{$servicio->url_imagen}}" href="{{$servicio->url_imagen}}" accept="image/png, .jpeg, .jpg, image/gif">
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

          <input class="btn btn-primary pull-right" type="submit" value="Actualizar Paquete">
          <div class="clearfix"></div>
          </form>
        </div>
      </div>
      <!-- end card -->
    </div>
  </div>
@endsection
