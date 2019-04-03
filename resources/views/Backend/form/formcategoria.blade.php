@extends ('Backend.layout.layout')

@section('content')

<input id="mostra_vista" value="servicios" hidden disabled>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Crear Categoría</h4>
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
          <form action="{{ route('ingresarcategoria')}}" method="POST" enctype="multipart/form-data">
 {{ csrf_field() }}

          <div class="row">
              <div class="col-md-2">
                  <div class="form-group bmd-form-group {{ $errors->has('posicion') ? ' has-error' : '' }}">
      
                    {!! Form::label('posicion', 'Posición') !!}
                    <select class="form-control" name="posicion" required>
                      @foreach($posiciones_disponibles as $key=> $posicion_disponible)
                      @if($key==0)
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
                <input type="text" name="nombre_categoria" class="form-control" required autofocus>
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
                    <img src="{{URL::to('/material-dashboard-dark-edition-v2.1.0/assets')}}/img/image_placeholder.jpg" alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                  <div>
                    <span class="btn btn-rose btn-round btn-file">
                      <span class="fileinput-new">Buscar</span>
                      <span class="fileinput-exists">Cambiar</span><input id="imagen" name="url_imagen" type="file" name="..." >
                      @if ($errors->has('url_imagen'))
                          <span class="help-block">
                              <strong>{{ $errors->first('url_imagen') }}</strong>
                          </span>
                      @endif
                    </span>
                    <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i>Quitar</a>
                  </div>
                </div>
              </div>
            </div>
          <input class="btn btn-primary pull-right" type="submit" value="Crear Categoría">
          <div class="clearfix"></div>
          </form>

        </div>
      </div>
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Categorías</h4>
          <p class="card-category">Todas las categorías registradas</p>
          <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
        </div>
        <div class="card-body">
          <div class="table-responsive">            
            <table class="table">
              <thead class=" text-primary">
                <tr><th>
                  Categorías
                </th>                
                <th>
                Fecha Publicación
                </th>
                <th>
                  Acciones
                </th>
              </tr></thead>
              <tbody>

                @foreach($categorias as $categoria)
                <tr>
                  <td>
                      {{ $categoria->nombre_categoria }}
                  </td>                  
                  <td>
                    {{ $categoria->updated_at}}
                  </td>
                  <td class="td-actions">
                    <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('buscarcategoria',['id'=>$categoria->id])}}'" class="btn btn-white btn-link btn-sm" data-original-title="Editar">
                      <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('eliminarcategoria',['id'=>$categoria->id])}}'" class="btn btn-white btn-link btn-sm" data-original-title="Remover">
                      <i class="material-icons">close</i>
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- end card -->
    </div>
  </div>
@endsection
@push('scripts')
<script  type="text/javascript" charset="utf-8" async defer></script>
@endpush
