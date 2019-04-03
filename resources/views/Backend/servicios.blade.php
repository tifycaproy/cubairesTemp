@extends ('Backend.layout.layout')

@section('content')

<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Paquetes</h4>
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
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <input id="mostra_vista" value="servicios" hidden disabled>
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          Nombre
                        </th>
                        <th>
                          Costo
                        </th>
                        <th>
                          Oferta
                        </th>                       
                        <th>
                        Fecha Publicación
                        </th>
                        <th>
                          Estatus
                        </th>
												<th>
													Acciones
												</th>
                      </tr></thead>
                      <tbody>

                        @foreach($servicios as $servicio)
                        <tr>
                          <td>
                              {{ $servicio->titulo_servicio }}
                          </td>
                          <td>
                            {{ $servicio->monto }}
                          </td>
                          @if ($servicio->oferta==NULL || $servicio->oferta==0)
                          <td>
                            0%
                          </td>
                          @else
                          <td>
                            {{ $servicio->monto-($servicio->monto*$servicio->oferta*0.01).'('. $servicio->oferta.'%)'}}
                          </td>
                          @endif      
                          <td>
                            {{ $servicio->created_at}}
                          </td>
                          @if ($servicio->estatus==1)
                          <td>
                            Si
                          </td>
                          @else
                          <td>
                            No
                          </td>
                          @endif
                          <td class="td-actions">
                            <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('buscarservicio',['id'=>$servicio->id])}}'" class="btn btn-white btn-link btn-sm" data-original-title="Editar">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('eliminarservicio',['id'=>$servicio->id])}}'" class="btn btn-white btn-link btn-sm" data-original-title="Remover">
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
            </div>



@endsection

@push('scripts')
@endpush
