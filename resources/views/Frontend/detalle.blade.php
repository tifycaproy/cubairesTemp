@extends ('Frontend.layouts.layout')

@section('contenido')
    
    
<div class="super_container">

<!-- Home -->
    <div class="home" style="height: 34em;">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_content_inner">
                            <div class="home_title">Detalles</div>
                            <div class="home_breadcrumbs">
                                <ul class="home_breadcrumbs_list">
                                    <li class="home_breadcrumb"><a href="{{route('/')}}">Inicio</a></li>
                                    <li class="home_breadcrumb">Detalles</li>
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
                    <div class="items item_grid clearfix" style="position: relative; height: 1699.6px;">

                        <!-- Item -->
                        <div class="item clearfix rating_5">
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
                                <div class="button about_button" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"> <a href="#multiCollapseExample1" >Detalles</a></div>
                                <div class="button about_button" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2"><a href="#multiCollapseExample2">Condiciones</a></div>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                        fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque
                                        vel est id justo faucibus dapibus id a nibh. Aenean suscipit consequat
                                        lacus, sit amet mollis nulla. Morbi sagittis orci id lacus convallis
                                        tempus eget sit amet metus.
                                    </p>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                        fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque
                                        vel est id justo faucibus dapibus id a nibh. Aenean suscipit consequat
                                        lacus, sit amet mollis nulla. Morbi sagittis orci id lacus convallis
                                        tempus eget sit amet metus.
                                    </p>
                                </div>
                            </div>
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
    var route='{{asset('images/find.jpg') }}';
    $('.evento').parallax({imageSrc: route});
</script>

@endpush