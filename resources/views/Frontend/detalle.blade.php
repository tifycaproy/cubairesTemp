@extends ('Frontend.layouts.layout')

@section('contenido')
    
    
<div class="super_container">

    <div class="cabecera_an_detalle">
        <div class="home_background paralan" style=" background-image: url('{{asset('images/servicios') }}/{{ $paquete->url_imagen }}');">
        </div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col">
                    <div class="home_content">
                        <div class="home_content_inner pl-3">
                            <div class="home_title"><b>{{ $paquete->titulo_servicio }}</b></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <div class="offers pb-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="items item_grid clearfix">
                        <div class="item clearfix rating_5">
                            <div class="col-12">
                                <div class="item_price">@if ($paquete->oferta != NULL)
                <b>Antes 
                @php
                    echo (int)$paquete->monto;
                @endphp  € </b> </div>
                <div class="item_title">
                <b>Ahora @php
                    $descuento =  (int)$paquete->monto * $paquete->oferta /100;
                    echo (int)$paquete->monto-$descuento;
                @endphp € </b>

            @else
            <b>Desde @php
                echo (int)$paquete->monto;
            @endphp €</b>
            @endif</div>
                                <br>
                                <div class="item_title">{{ $paquete->titulo_servicio }}</div>
                                
                                <div class="rating rating_5" data-rating="5">
                                    @php
                                            $longitud = $paquete->valoracion;
                                        @endphp
                                        @for ($i = 0; $i < $longitud; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                </div>
                                <div class="item_text">
                                    {!! html_entity_decode($paquete->descripcion) !!}
                                </div>
                                <div class="d-flex">
                                    <div class="button about_button" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"> <a  >Detalles</a></div>

                                <div class="button about_button ml-2" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2"><a >Condiciones</a></div>
                                </div>

                                <div class="button about_button" ><a href="{{route('solicitar',['paquete'=>$paquete->id])}}">Solicitar</a></div>

                                
                            </div>                         
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="section_title" style="border-top: 1px solid rgba(78, 75, 75, 0.18); padding-top: 18px;" >
                                <h2>Detalles</h2>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="contact_text">
                                    {!! html_entity_decode($paquete->detalles) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="section_title" style="border-top: 1px solid rgba(78, 75, 75, 0.18); padding-top: 18px;" >
                                <h2>Condiciones</h2>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="contact_text">
                                    {!! html_entity_decode($paquete->condiciones) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
<div class="popular mt-5 mb-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h2>Otros destino para ti</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="popular_content ">
                    <div class="row">
                       @foreach ($servicios as $paque)
                        <div class=" col-lg-3 col-12 mt-3 col-md-6" >
                            <div class="" style="height: 200px;background-image: url('{{asset('images/servicios') }}/{{ $paque->url_imagen }}'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                               <a href="{{ route('detalle', $paque->id) }}">
                                {{-- <img src="{{asset('images/servicios')}}/{{ $paque->url_imagen }}" > --}}
                                <div class="popular_item_content">
                                    <div class="popular_item_price">Desde @php
                                        echo (int)$paque->monto;
                                    @endphp  €</div>
                                    <div class="popular_item_title">{{ $paque->titulo_servicio }}</div>
                                </div>
                            </a> 
                            </div>
                            
                        </div>
                    @endforeach 
                    </div>

                    
                    


                </div>
            </div>
        </div>
    </div>
</div>
	
</div>

@endsection
@push('scripts')
<script>
</script>

@endpush