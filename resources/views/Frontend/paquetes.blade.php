@foreach ($servicios as $paquete)
<div class="mt-5  col-12" style="">
    <div class="row">
      <div class="item_image paral h-paquete col-sm-4 col-12" style="  background-image: url('{{asset('images/servicios') }}/{{ $paquete->url_imagen }}'); ">
     </div>
        <div class="item_content col-sm-8 col-12 mt-4 p-0 px-sm-3">
            <div class="item_price">
                @if ($paquete->oferta != NULL)
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
                @endif

                </div>
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
            <div class="item_text">
                {!! html_entity_decode($paquete->descripcion) !!}
            </div>
            <div class="item_more_link"><a href="{{route('detalle',$paquete->id)}}">Detalles</a></div>
        </div>  
    </div>
    
</div>
@endforeach