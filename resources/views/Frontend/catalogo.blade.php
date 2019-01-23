@extends ('Frontend.layouts.layout')

@section('contenido')

<!-- Home -->
    <div class="home" style="height: 34em;">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_content_inner">
                            <div class="home_title">Catálogo</div>
                            <div class="home_breadcrumbs">
                                <ul class="home_breadcrumbs_list">
                                    <li class="home_breadcrumb"><a href="{{route('/')}}">Inicio</a></li>
                                    <li class="home_breadcrumb">Catálogo</li>
                                </ul>
                            </div>
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
                        <h2>Difruta nuestro catálogo</h2>
                        <div>haz tu reservación</div>
                    </div>
                </div>
            </div>
            {{-- <div class="row filtering_row">
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
            <div class="row">
                <div class="col">
                    <div class="items item_grid clearfix" style="position: relative; height: 1699.6px;">

                        <!-- Item -->
                        <div class="item clearfix rating_5" style="position: absolute; left: 0px; top: 0px;">
                            <div class="item_image">
                                <img src="{{asset('images/top_1.jpg')}}" alt="">
                            </div>
                            <div class="item_content">
                                <div class="item_price"><b>Desde 1645.00€</b></div>
                                <br>
                                <div class="item_title">Fly & Drive: Especial Observación Aves</div>
                                
                                <div class="rating rating_5" data-rating="5">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="item_text">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla
                                    diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh.
                                    Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis
                                    orci id lacus convallis tempus eget sit amet metus.
                                </div>
                                <div class="item_more_link"><a href="{{route('detalle')}}">Detalles</a></div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="item clearfix rating_3" style="position: absolute; left: 0px; top: 424px;">
                            <div class="item_image">
                                <img src="{{asset('images/top_2.jpg')}}" alt="">
                            </div>
                            <div class="item_content">
                                <div class="item_price"><b>Desde 1645.00€</b></div>
                                <br>
                                <div class="item_title">Fly & Drive en Jeep: La Habana, Rio Canimar y Varadero</div>
                               
                                <div class="rating rating_3" data-rating="3">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="item_text">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla
                                    diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh.
                                    Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis
                                    orci id lacus convallis tempus eget sit amet metus.
                                </div>
                                <div class="item_more_link"><a href="{{route('detalle')}}">Detalles</a></div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="item clearfix rating_4" style="position: absolute; left: 0px; top: 849px;">
                            <div class="item_image">
                                <img src="{{('images/top_3.jpg')}}" alt="">
                            </div>
                            <div class="item_content">
                                <div class="item_price"><b>Desde 1645.00€</b></div>
                                <br>
                                <div class="item_title">Entre Flamencos</div>
                               
                                <div class="rating rating_4" data-rating="4">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="item_text">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla
                                    diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh.
                                    Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis
                                    orci id lacus convallis tempus eget sit amet metus.
                                </div>
                                <div class="item_more_link"><a href="{{route('detalle')}}">Detalles</a></div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="item clearfix rating_5" style="position: absolute; left: 0px; top: 1274px;">
                            <div class="item_image">
                                <img src="{{('images/top_4.jpg')}}" alt="">
                            </div>
                            <div class="item_content">
                                <div class="item_price"><b>Desde 1645.00€</b></div>
                                <br>
                                <div class="item_title">Fly & Drive: Occidente al completo</div>
                               
                                <div class="rating rating_5" data-rating="5">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="item_text">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla
                                    diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh.
                                    Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis
                                    orci id lacus convallis tempus eget sit amet metus.
                                </div>
                                <div class="item_more_link"><a href="{{route('detalle')}}">Detalles</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-4">
                    <div class="button about_button">
                        <a href="#">Ver más</a>
                    </div>
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