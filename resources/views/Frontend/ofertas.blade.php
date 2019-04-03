@extends ('Frontend.layouts.layout')

@section('contenido')

    <!-- Home -->
    <div class="cabecera_an" >
        <div class="home_background paralan" style="background-image: url('{{ asset('images/news_2.jpg') }}');"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col">
                    <div class="home_content">
                        <div class="home_content_inner">
                            <div class="home_title pl-3"><b>Ofertas</b></div>
                           {{--  <div class="home_breadcrumbs">
                                <ul class="home_breadcrumbs_list">
                                    <li class="home_breadcrumb"><a href="{{route('/')}}">Inicio</a></li>
                                    <li class="home_breadcrumb">Ofertas</li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Offers -->
    <div class="offers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h2>Conoce nuestras ofertas</h2>
                        <div>especialmente para ti</div>
                    </div>
                </div>
            </div>
           {{--  <div class="row filtering_row">
                <div class="col">
                    <div class="sorting_group_1">
                        <ul class="item_sorting">
                            <li>
                                <span class="sorting_text">Filter by</span>
                                <i class="fa fa-angle-down"></i>
                                <ul>
                                    <li class="item_sorting_btn" data-isotope-option="{ &quot;sortBy&quot;: &quot;original-order&quot; }"><span>Show All</span></li>
                                    <li class="item_sorting_btn" data-isotope-option="{ &quot;sortBy&quot;: &quot;price&quot; }"><span>Price</span></li>
                                    <li class="item_sorting_btn" data-isotope-option="{ &quot;sortBy&quot;: &quot;name&quot; }"><span>Name</span></li>
                                </ul>
                            </li>
                            <li>
                                <span class="sorting_text">Stars</span>
                                <i class="fa fa-angle-down"></i>
                                <ul>
                                    <li class="item_filter_btn" data-filter="*"><span>Show All</span></li>
                                    <li class="item_sorting_btn" data-isotope-option="{ &quot;sortBy&quot;: &quot;stars&quot; }"><span>Ascending</span></li>
                                    <li class="item_filter_btn" data-filter=".rating_1"><span>1</span></li>
                                    <li class="item_filter_btn" data-filter=".rating_2"><span>2</span></li>
                                    <li class="item_filter_btn" data-filter=".rating_3"><span>3</span></li>
                                    <li class="item_filter_btn" data-filter=".rating_4"><span>4</span></li>
                                    <li class="item_filter_btn" data-filter=".rating_5"><span>5</span></li>
                                </ul>
                            </li>
                            <li>
                                <span class="sorting_text">Price</span>
                                <i class="fa fa-angle-down"></i>
                                <ul>
                                    <li class="item_sorting_btn" data-isotope-option="{ &quot;sortBy&quot;: &quot;original-order&quot; }"><span>Default</span></li>
                                    <li class="item_sorting_btn" data-isotope-option="{ &quot;sortBy&quot;: &quot;price&quot; }"><span>Price</span></li>
                                </ul>
                            </li>
                            <li>
                                <span class="sorting_text">Facility</span>
                                <i class="fa fa-angle-down"></i>
                                <ul>
                                    <li><span>Facility</span></li>
                                    <li><span>Facility</span></li>
                                    <li><span>Facility</span></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="sorting_group_2 clearfix">
                        <ul>
                            <li>Airplane X</li>
                            <li>5 stars X</li>
                            <li>Romantic X</li>
                        </ul>
                        <div class="sorting_icons clearfix">
                            <div class="detail_view"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            <div class="box_view"><i class="fa fa-th-large" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div> --}}

           <div class="col">
                    <div class=" row" >
                        @foreach ($ofertas as $paquete)
                            <div class="col-12 col-sm-6 mt-5" style="">
                                <div class="row">
                                    
                                
                                 <div class="item_image paral h-paquete col-sm-6 col-12" style="  background-image: url('{{asset('images/servicios') }}/{{ $paquete->url_imagen }}');">
                                    
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
                                    <div class="item_more_link"><a href="{{route('detalle',$paquete->id )}}">Detalles</a></div>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-4">
                        {{-- <div class="button about_button">
                            <a href="#">Ver más</a>
                        </div> --}}
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
