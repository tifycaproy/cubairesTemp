@extends ('Backend.layout.layout')

@section('content')
@php
  use Carbon\Carbon;
@endphp

<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-tabs card-header-primary">
      <div class="nav-tabs-navigation">
        <div class="nav-tabs-wrapper">
          <span class="nav-tabs-title">Solicitudes:</span>
          <ul class="nav nav-tabs" data-tabs="tabs">
            <li class="nav-item">
            <a class="nav-link {{$vista_porconfirmar}}" href="#porconfirmar" data-toggle="tab">
                <i class="material-icons">notification_important</i> Por Confirmar
                <div class="ripple-container"></div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{$vista_confirmado}}" href="#confirmado" data-toggle="tab">
                <i class="material-icons">check_circle_outline</i> Confirmados
                <div class="ripple-container"></div>
              </a>
            </li>  
            <li class="nav-item">
              <a class="nav-link {{$vista_rechazado}}" href="#rechazados" data-toggle="tab">
                <i class="material-icons">highlight_off</i> Rechazados
                <div class="ripple-container"></div>
              </a>
            </li>            
          </ul>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="tab-content">
        <div class="tab-pane {{$vista_porconfirmar}}" id="porconfirmar">
          <table class="table">
              @if (count($porconfirmar)>0)
              <thead class=" text-primary">
                  <tr>
                      <th>
                    Solicitante
                  </th>
                  <th>
                    Paquete
                  </th>
                  <th>
                    Desde / Hasta
                  </th>
                  <th>
                    # adulto / # niño
                  </th>
                  <th>
                    Fecha Solicitud
                  </th>
                  <th>
                    Acciones
                  </th>
                </tr></thead>
            <tbody>
              @foreach ($porconfirmar as $item)
              <tr>                  
                <td rel="tooltip" class="btn btn-link" data-original-title="Observ: {{$item["observacion"]}}">{{$item["name"]}}</td>
                <td>{{$item["titulo_servicio"]}}</td>
                <td>{{Carbon::parse($item["fecha_desde"])->format('d-m-Y')}} / {{Carbon::parse($item["fecha_hasta"])->format('d-m-Y')}}</td>
                <td>{{$item["numero_adulto"]}} / {{$item["numero_nino"]}}</td>
                <td>{{Carbon::parse($item["created_at"])->format('d-m-Y')}}</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('actualizarsolicitud',['solicitudes'=>$item['solicitud_id'],'estatus_solicitud'=>1])}}'" class="btn btn-white btn-link btn-sm" data-original-title="Confirmar">
                      <i class="material-icons">done</i>
                    </button>
                    <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('actualizarsolicitud',['solicitudes'=>$item['solicitud_id'],'estatus_solicitud'=>2])}}'" class="btn btn-white btn-link btn-sm" data-original-title="Rechazar">
                      <i class="material-icons">close</i>
                    </button>
                  </td>
                </tr>
              @endforeach
              @else
              <thead class=" text-primary">
                  <tr>
                      <th>No Posee Solicitudes Por Confirmar</th>                      
                </tr></thead>
              @endif
            </tbody>
          </table>
        </div>
        <div class="tab-pane {{$vista_confirmado}}" id="confirmado">
          <table class="table">
            <tbody>
              @if (count($confirmados)>0)
              <thead class=" text-primary">
                  <tr>
                    <tr>
                      <th>
                    Solicitante
                  </th>
                  <th>
                    Paquete
                  </th>
                  <th>
                    Desde / Hasta
                  </th>
                  <th>
                    # adulto / # niño
                  </th>
                  <th>
                    Fecha Solicitud
                  </th>
                  <th>
                    Acciones
                  </th>
                </tr></thead>
            <tbody>
              @foreach ($confirmados as $item)
              <tr>
                 
                <td rel="tooltip" class="btn btn-link" data-original-title="Observ: {{$item["observacion"]}}">{{$item["name"]}}</td>
                <td>{{$item["titulo_servicio"]}}</td>
                <td>{{Carbon::parse($item["fecha_desde"])->format('d-m-Y')}} / {{Carbon::parse($item["fecha_hasta"])->format('d-m-Y')}}</td>
                <td>{{$item["numero_adulto"]}} / {{$item["numero_nino"]}}</td>
                <td>{{Carbon::parse($item["created_at"])->format('d-m-Y')}}</td>
                  <td class="td-actions text-right">
                    {{-- <button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Modificar">
                      <i class="material-icons">edit</i>
                    </button> --}}
                    <button type="button" rel="tooltip" title="" onclick="location.href='{{ route('actualizarsolicitud',['solicitudes'=>$item['solicitud_id'],'estatus_solicitud'=>2])}}'" class="btn btn-white btn-link btn-sm" data-original-title="Rechazar Confirmado">
                      <i class="material-icons">close</i>
                    </button>
                  </td>
                </tr>
              @endforeach
              @else
              <thead class=" text-primary">
                  <tr>
                      <th>No Posee Solicitudes Confirmadas</th>                      
                </tr></thead>
              @endif
            </tbody>
          </table>
        </div>
        <div class="tab-pane {{$vista_rechazado}}" id="rechazados">
          <table class="table">
              @if (count($rechazados)>0)
              <thead class=" text-primary">
                  <tr>
                    <tr>
                      <th>
                    Solicitante
                  </th>
                  <th>
                    Paquete
                  </th>
                  <th>
                    Desde / Hasta
                  </th>
                  <th>
                    # adulto / # niño
                  </th>
                  <th>
                    Fecha Solicitud
                  </th>
                </tr></thead>
            <tbody>
              @foreach ($rechazados as $item)
              <tr>
                <td rel="tooltip" class="btn btn-link" data-original-title="Observ: {{$item["observacion"]}}">{{$item["name"]}}</td>
                <td>{{$item["titulo_servicio"]}}</td>
                <td>{{Carbon::parse($item["fecha_desde"])->format('d-m-Y')}} / {{Carbon::parse($item["fecha_hasta"])->format('d-m-Y')}}</td>
                <td>{{$item["numero_adulto"]}} / {{$item["numero_nino"]}}</td>
                <td>{{Carbon::parse($item["created_at"])->format('d-m-Y')}}</td>
                  <td class="td-actions text-right">
                    {{-- <button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Modificar">
                      <i class="material-icons">edit</i>
                    </button> --}}                    
                  </td>
                </tr>
              @endforeach
              @else
              <thead class=" text-primary">
                  <tr>
                      <th>No Posee Solicitudes Rechazadas</th>                      
                </tr></thead>
              @endif
            </tbody>
          </table>
        </div>
        
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
@endpush
