@extends ('Frontend.layouts.layout')

@section('contenido')

    <!-- Home -->
    <div class=" cabecera_an" style="">
        <div class="home_background paralan" style=" background-image: url('{{asset('images/categorias') }}/{{ $categoria->url_imagen }}');">
        </div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col">
                    <div class="home_content">
                        <div class="home_content_inner pl-3">
                            <div class="home_title"><b>{{ $categoria->nombre_categoria }}</b></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Offers -->
    <div class="offers mt-0 mt-sm-5">
        <div class="container ">            
            <div class="col">
                <div class="row" style="">

                @foreach ($servicios as $paquete)
                     <div class="col-12 col-sm-6 mt-5" style="">
                        <div class="row">
                            <div class="item_image paral h-paquete col-sm-6 col-12" style="  background-image: url('{{asset('images/servicios') }}/{{ $paquete->url_imagen }}'); ">
                                </div>
                                <div class="item_content col-sm-6 col-12 mt-4 p-0 px-sm-3">
                                    <div class="item_price"><b>Antes @php
                                        echo (int)$paquete->monto;
                                    @endphp  €</b> </div>
                                    <div class="item_title"><b>Ahora @php
                                      $descuento =  (int)$paquete->monto * $paquete->oferta /100;
                                      echo (int)$paquete->monto-$descuento;
                                    @endphp €</b></div>
                                    <br>
                                    <div class="item_title"><a style="color: black" href="{{route('detalle',$paquete->id)}}">{{ $paquete->titulo_servicio }}</a></div>
                                    
                                    <div class="rating rating_5" data-rating="5">
                                        @php
                                            $longitud = $paquete->valoracion;
                                        @endphp
                                        @for ($i = 0; $i < $longitud; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                         
                                    </div>
                                    {{-- <div class="item_text">
                                        {!! html_entity_decode($paquete->descripcion) !!}
                                    </div> --}}
                                    <div class="item_more_link"><a href="{{route('detalle',$paquete->id)}}">Detalles</a></div>
                                </div>
                        </div>
                                
                            </div>
                @endforeach

                </div>
            </div>

            {{-- <div class="row justify-content-center align-items-center">
                <div class="col-4">
                    <div class="button about_button">
                        <a href="#">Ver más</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
   

@endsection
@push('scripts')

@endpush
