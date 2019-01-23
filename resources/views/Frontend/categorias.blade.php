@extends ('Frontend.layouts.layout')

@section('contenido')

    <!-- Home -->
    <div class="home" style="height: 34em;">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/offers.jpg" data-speed="0.8">
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_content_inner">
                            <div class="home_title">Categorías</div>
                            <div class="home_breadcrumbs">
                                <ul class="home_breadcrumbs_list">
                                    <li class="home_breadcrumb"><a href="{{route('/')}}">Inicio</a></li>
                                    <li class="home_breadcrumb">Categorías</li>
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
                        <h2>Conoce nuestras categorías</h2>
                        <div>especialmente para ti</div>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="items item_grid clearfix" style="position: relative; height: 849.8px;">

                    <!-- Item -->
                    <div class="item clearfix rating_5 box" style="position: absolute; left: 0px; top: 0px;">
                        <div class="item_image">
                            <img src="{{asset('images/top_1.jpg')}}" alt="">
                        </div>
                        <div class="item_content">
                            <div class="item_price"><b>Desde 1645.00€</b> </div>
                            
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
                    <div class="item clearfix rating_3 box" style="position: absolute; left: 570px; top: 0px;">
                        <div class="item_image">
                            <img src="{{asset('images/top_2.jpg')}}" alt="">
                        </div>
                        <div class="item_content">
                            <div class="item_price"><b>Desde 1000.00€</b> </div>
                            
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
                    <div class="item clearfix rating_4 box" style="position: absolute; left: 0px; top: 424px;">
                        <div class="item_image">
                            <img src="{{asset('images/top_3.jpg')}}" alt="">
                        </div>
                        <div class="item_content">
                            <div class="item_price"><b>Desde 1985.00€</b> </div>
                           
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
                    <div class="item clearfix rating_5 box" style="position: absolute; left: 570px; top: 424px;">
                        <div class="item_image">
                            <img src="{{asset('images/top_4.jpg')}}" alt="">
                        </div>
                        <div class="item_content">
                            
                            <div class="item_price"><b>Desde 1248.00€</b> </div>
                            
                            <br>
                            <div class="item_title">Fly & Drive: Occidente al completo </div>
                            
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

            <div class="row justify-content-center align-items-center">
                <div class="col-4">
                    <div class="button about_button">
                        <a href="#">Ver más</a>
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
