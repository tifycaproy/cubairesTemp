@extends ('Frontend.layouts.layout')

@section('contenido')

    <div class="parallax-mirror" style="visibility: hidden; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; height: 753.6px; width: 1427px; transform: translate3d(0px, -744.4px, 0px);">
        <img class="parallax-slider" src=" {{asset('images/fact_background.jpg')}} " style="position: absolute; height: 759px; width: 1427px; max-width: none; transform: translate3d(0px, 144.88px, 0px);">
    </div>
    <div class="parallax-mirror" style="visibility: hidden; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, -588px, 0px); height: 601px; width: 1427px;">
        <img class="parallax-slider" src=" {{asset('images/about_background.jpg')}} " style="transform: translate3d(0px, 17.6px, 0px); position: absolute; height: 802px; width: 1427px; max-width: none;">
    </div>

<div class="super_container">

<!-- Home -->
    <div class="home">
        <!-- Image by https://unsplash.com/@peecho -->
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="  {{asset('images/about_background.jpg')}} " data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_content_inner">
                            <div class="home_title">About us</div>
                            <div class="home_breadcrumbs">
                                <ul class="home_breadcrumbs_list">
                                    <li class="home_breadcrumb"><a href="index.php">Home</a></li>
                                    <li class="home_breadcrumb">About us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Find Form -->
    {{-- <div class="find">
        <!-- Image by https://unsplash.com/@garciasaldana_ -->
        <div class="find_background_container prlx_parent">
            <div class="find_background prlx" style="background-image: url('{{asset('images/find.jpg')}}'); transform: matrix(1, 0, 0, 1, 0, 0);"></div>
        </div>
        <!-- <div class="find_background parallax-window" data-parallax="scroll" data-image-src="images/find.jpg" data-speed="0.8"></div> -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="find_title text-center">Find the Adventure of a lifetime</div>
                </div>
                <div class="col-12">
                    <div class="find_form_container">
                        <form action="#" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
                            <div class="find_item">
                                <div>Destination:</div>
                                <input type="text" class="destination find_input" required="required" placeholder="Keyword here">
                            </div>
                            <div class="find_item">
                                <div>Adventure type:</div>
                                <select name="adventure" id="adventure" class="dropdown_item_select find_input">
                                    <option selected="selected">Categories</option>
                                    <option>Categories</option>
                                    <option>Categories</option>
                                </select>
                            </div>
                            <div class="find_item">
                                <div>Min price</div>
                                <select name="min_price" id="min_price" class="dropdown_item_select find_input">
                                    <option selected="selected">&nbsp;</option>
                                    <option>Price</option>
                                    <option>Price</option>
                                </select>
                            </div>
                            <div class="find_item">
                                <div>Max price</div>
                                <select name="max_price" id="max_price" class="dropdown_item_select find_input">
                                    <option selected="selected">&nbsp;</option>
                                    <option>Price</option>
                                    <option>Price</option>
                                </select>
                            </div>
                            <button class="button find_button">Find</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

<!-- About -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h2>We are an award winning Agency</h2>
                        <div>take a look at our story</div>
                    </div>
                </div>
            </div>
            <div class="row about_row">
                <div class="col-lg-6 about_col order-lg-1 order-2">
                    <div class="about_content">
                        <p><b>Cubaires Business & Travels,</b><br>
                                somos tu receptivo especializada en el destino Cuba, con más de una década de experiencia en el mercado.
                                Con un producto único y especializado, a medida; el cual se ajusta a las necesidades del mercado y a la vez te ofrecemos productos singulares y novedosos que van a serguir sorprendiendo a tu cliente.
                        </p>
                        <div class="button about_button"><a href="#">Read More</a></div>
                    </div>
                </div>
                <div class="col-lg-6 about_col order-lg-2 order-1">
                    <div class="about_image">
                        <img src="{{asset('images/about.jpg')}} " alt="https://unsplash.com/@sanfrancisco">
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Milestones -->
    <div class="milestones">
        <div class="milestones_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/fact_background.jpg')}}" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h2>Fun facts about our Agency</h2>
                        <div>take a look</div>
                    </div>
               </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="milestones_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque
                            vel est id justo faucibus dapibus id a nibh
                        </p>
                    </div>
                </div>

            </div>
            <div class="row milestones_container">

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="{{asset('images/milestone_1.svg')}}" alt=""></div>
                        <div class="milestone_counter" data-end-value="17">17</div>
                        <div class="milestone_text">Mountains Climbed</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="{{asset('images/milestone_2.svg')}}" alt=""></div>
                        <div class="milestone_counter" data-end-value="213">213</div>
                        <div class="milestone_text">Islands Visited</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="{{asset('images/milestone_3.svg')}}" alt=""></div>
                        <div class="milestone_counter" data-end-value="11923">11923</div>
                        <div class="milestone_text">Photos Taken</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="{{asset('images/milestone_4.svg')}}" alt=""></div>
                        <div class="milestone_counter" data-end-value="15">15</div>
                        <div class="milestone_text">Cruises Organized</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<!-- Services -->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h2>Popular services that we offer</h2>
                        <div>take a look at these offers</div>
                    </div>
                </div>
            </div>
            <div class="row icon_box_container">

            <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve" width="512px" height="512px" class="svg replaced-svg">
                        <g>
                        <g>
                        <path d="M425.935,500.004l-68.267-153.6c-1.374-3.089-4.42-5.069-7.799-5.069H162.135c-3.371,0-6.426,1.98-7.791,5.069    l-68.267,153.6c-1.178,2.637-0.93,5.692,0.64,8.115c1.57,2.423,4.267,3.883,7.151,3.883h76.8c3.439,0,6.554-2.065,7.876-5.248    l26.291-62.993c8.61-20.753,28.681-34.159,51.149-34.159c0.026-0.009,0.026-0.009,0.043,0c22.46,0,42.53,13.406,51.149,34.176    l26.283,62.976c1.323,3.183,4.437,5.248,7.876,5.248h76.8c2.893,0,5.589-1.459,7.159-3.883    C426.865,505.696,427.112,502.65,425.935,500.004z M347.018,494.935l-24.09-57.711c-11.264-27.145-37.521-44.689-66.91-44.689    c-0.017,0-0.026,0-0.043,0c-29.38,0-55.646,17.536-66.901,44.672l-24.09,57.728h-57.984l60.681-136.533H344.33l60.672,136.533    H347.018z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M349.869,307.202H162.135c-4.71,0-8.533,3.814-8.533,8.533v34.133h17.067v-25.6h170.667v25.6h17.067v-34.133    C358.402,311.017,354.587,307.202,349.869,307.202z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M306.912,185.534c-0.99-3.729-4.378-6.332-8.243-6.332h-85.333c-3.866,0-7.253,2.603-8.252,6.332l-34.133,128    l16.495,4.403l32.444-121.668h72.218l32.452,121.668l16.486-4.403L306.912,185.534z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M264.177,227.953c-1.084-3.61-4.412-6.084-8.175-6.084c-3.763,0-7.091,2.475-8.175,6.084l-25.6,85.333l16.35,4.898    l17.425-58.086l17.425,58.086l16.35-4.898L264.177,227.953z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M298.669,145.069h-85.333c-4.71,0-8.533,3.823-8.533,8.533v34.133c0,4.71,3.823,8.533,8.533,8.533h85.333    c4.719,0,8.533-3.823,8.533-8.533v-34.133C307.202,148.892,303.387,145.069,298.669,145.069z M290.135,179.202h-68.267v-17.067    h68.267V179.202z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M284.077,58.566c-1.929-13.935-13.995-24.431-28.041-24.431c-0.017,0-0.034,0-0.051,0    c-14.054,0-26.12,10.496-28.04,24.294l-14.507,93.867l16.87,2.611l14.524-93.995c0.768-5.538,5.564-9.711,11.17-9.711    c0,0,0,0,0.009,0h0.009c5.589,0,10.394,4.173,11.179,9.839l14.507,93.867l16.862-2.611L284.077,58.566z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="247.469" y="0.002" width="17.067" height="42.667" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="230.402" y="68.269" width="42.667" height="17.067" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="0.002" y="494.935" width="196.267" height="17.067" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="315.735" y="494.935" width="119.467" height="17.067" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M145.069,102.402H8.535c-4.71,0-8.533,3.823-8.533,8.533v119.467c0,4.71,3.823,8.533,8.533,8.533h136.533    c4.71,0,8.533-3.823,8.533-8.533V110.935C153.602,106.225,149.779,102.402,145.069,102.402z M136.535,221.869H17.069v-102.4    h119.467V221.869z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M151.102,104.902l-34.133-34.133c-1.596-1.604-3.772-2.5-6.033-2.5H42.669c-2.261,0-4.437,0.896-6.033,2.5L2.502,104.902    c-2.44,2.441-3.174,6.11-1.852,9.301c1.323,3.183,4.437,5.265,7.885,5.265h136.533c3.448,0,6.562-2.082,7.885-5.265    C154.276,111.012,153.542,107.343,151.102,104.902z M29.135,102.402l17.067-17.067h61.201l17.067,17.067H29.135z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M76.802,136.535c-18.825,0-34.133,15.309-34.133,34.133s15.309,34.133,34.133,34.133s34.133-15.309,34.133-34.133    S95.626,136.535,76.802,136.535z M76.802,187.735c-9.412,0-17.067-7.654-17.067-17.067c0-9.412,7.654-17.067,17.067-17.067    c9.412,0,17.067,7.654,17.067,17.067C93.869,180.081,86.214,187.735,76.802,187.735z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M128.002,221.869h-102.4c-4.71,0-8.533,3.823-8.533,8.533v281.6h17.067V238.935h85.333v187.733h17.067V230.402    C136.535,225.692,132.712,221.869,128.002,221.869z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M110.935,34.135H42.669c-4.71,0-8.533,3.823-8.533,8.533v34.133c0,4.71,3.823,8.533,8.533,8.533h68.267    c4.71,0,8.533-3.823,8.533-8.533V42.669C119.469,37.958,115.646,34.135,110.935,34.135z M102.402,68.269h-51.2V51.202h51.2V68.269    z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M116.968,36.636L82.835,2.502c-3.337-3.336-8.73-3.336-12.066,0L36.635,36.636c-2.441,2.441-3.174,6.11-1.852,9.301    c1.323,3.183,4.437,5.265,7.885,5.265h68.267c3.447,0,6.562-2.082,7.885-5.265C120.143,42.746,119.409,39.076,116.968,36.636z     M63.268,34.135l13.534-13.534l13.534,13.534H63.268z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="51.202" y="256.002" width="17.067" height="51.2" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="85.335" y="256.002" width="17.067" height="51.2" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="51.202" y="460.802" width="17.067" height="51.2" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="85.335" y="460.802" width="17.067" height="51.2" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="51.202" y="392.535" width="17.067" height="51.2" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="85.335" y="392.535" width="17.067" height="51.2" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="51.202" y="324.269" width="17.067" height="51.2" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="85.335" y="324.269" width="17.067" height="51.2" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M486.402,51.202H349.869c-4.719,0-8.533,3.823-8.533,8.533v290.133h17.067v-281.6h119.467v324.267h-102.4v17.067h110.933    c4.719,0,8.533-3.814,8.533-8.533V59.735C494.935,55.025,491.121,51.202,486.402,51.202z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="332.802" y="119.469" width="170.667" height="17.067" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M418.135,85.335c-4.719,0-8.533,3.823-8.533,8.533v34.133c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533V93.869    C426.669,89.158,422.854,85.335,418.135,85.335z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M384.002,85.335c-4.719,0-8.533,3.823-8.533,8.533v34.133c0,4.71,3.814,8.533,8.533,8.533    c4.719,0,8.533-3.823,8.533-8.533V93.869C392.535,89.158,388.721,85.335,384.002,85.335z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M452.269,85.335c-4.719,0-8.533,3.823-8.533,8.533v34.133c0,4.71,3.814,8.533,8.533,8.533    c4.719,0,8.533-3.823,8.533-8.533V93.869C460.802,89.158,456.988,85.335,452.269,85.335z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M469.335,0.002h-102.4c-4.719,0-8.533,3.823-8.533,8.533v51.2c0,4.71,3.814,8.533,8.533,8.533h102.4    c4.719,0,8.533-3.823,8.533-8.533v-51.2C477.869,3.825,474.054,0.002,469.335,0.002z M460.802,51.202h-85.333V17.069h85.333    V51.202z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M401.069,34.135c-4.719,0-8.533,3.823-8.533,8.533v17.067c0,4.71,3.814,8.533,8.533,8.533    c4.719,0,8.533-3.823,8.533-8.533V42.669C409.602,37.958,405.788,34.135,401.069,34.135z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M435.202,34.135c-4.719,0-8.533,3.823-8.533,8.533v8.533c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-8.533    C443.735,37.958,439.921,34.135,435.202,34.135z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M503.469,392.535h-128v17.067h119.467v102.4h17.067V401.069C512.002,396.35,508.188,392.535,503.469,392.535z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M418.135,426.669c-14.114,0-25.6,11.486-25.6,25.6v13.056h17.067v-13.056c0-4.71,3.823-8.533,8.533-8.533    s8.533,3.823,8.533,8.533v51.2h17.067v-51.2C443.735,438.155,432.249,426.669,418.135,426.669z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="418.135" y="494.935" width="85.333" height="17.067" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M486.402,426.669c-14.114,0-25.6,11.486-25.6,25.6v51.2h17.067v-51.2c0-4.71,3.823-8.533,8.533-8.533    s8.533,3.823,8.533,8.533v51.2h17.067v-51.2C512.002,438.155,500.516,426.669,486.402,426.669z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="332.802" y="187.735" width="170.667" height="17.067" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M418.135,153.602c-4.719,0-8.533,3.823-8.533,8.533v34.133c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533    v-34.133C426.669,157.425,422.854,153.602,418.135,153.602z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M384.002,153.602c-4.719,0-8.533,3.823-8.533,8.533v34.133c0,4.71,3.814,8.533,8.533,8.533    c4.719,0,8.533-3.823,8.533-8.533v-34.133C392.535,157.425,388.721,153.602,384.002,153.602z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M452.269,153.602c-4.719,0-8.533,3.823-8.533,8.533v34.133c0,4.71,3.814,8.533,8.533,8.533    c4.719,0,8.533-3.823,8.533-8.533v-34.133C460.802,157.425,456.988,153.602,452.269,153.602z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="332.802" y="256.002" width="170.667" height="17.067" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M418.135,221.869c-4.719,0-8.533,3.823-8.533,8.533v34.133c0,4.719,3.814,8.533,8.533,8.533s8.533-3.814,8.533-8.533    v-34.133C426.669,225.692,422.854,221.869,418.135,221.869z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M384.002,221.869c-4.719,0-8.533,3.823-8.533,8.533v34.133c0,4.719,3.814,8.533,8.533,8.533    c4.719,0,8.533-3.814,8.533-8.533v-34.133C392.535,225.692,388.721,221.869,384.002,221.869z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M452.269,221.869c-4.719,0-8.533,3.823-8.533,8.533v34.133c0,4.719,3.814,8.533,8.533,8.533    c4.719,0,8.533-3.814,8.533-8.533v-34.133C460.802,225.692,456.988,221.869,452.269,221.869z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="349.869" y="324.269" width="153.6" height="17.067" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M418.135,290.135c-4.719,0-8.533,3.814-8.533,8.533v34.133c0,4.719,3.814,8.533,8.533,8.533s8.533-3.814,8.533-8.533    v-34.133C426.669,293.95,422.854,290.135,418.135,290.135z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M384.002,290.135c-4.719,0-8.533,3.814-8.533,8.533v34.133c0,4.719,3.814,8.533,8.533,8.533    c4.719,0,8.533-3.814,8.533-8.533v-34.133C392.535,293.95,388.721,290.135,384.002,290.135z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M452.269,290.135c-4.719,0-8.533,3.814-8.533,8.533v34.133c0,4.719,3.814,8.533,8.533,8.533    c4.719,0,8.533-3.814,8.533-8.533v-34.133C460.802,293.95,456.988,290.135,452.269,290.135z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <rect x="366.935" y="392.535" width="136.533" height="17.067" fill="#afafaf"></rect>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M418.135,358.402c-4.719,0-8.533,3.814-8.533,8.533v34.133c0,4.719,3.814,8.533,8.533,8.533s8.533-3.814,8.533-8.533    v-34.133C426.669,362.217,422.854,358.402,418.135,358.402z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M384.002,358.402c-4.719,0-8.533,3.814-8.533,8.533v34.133c0,4.719,3.814,8.533,8.533,8.533    c4.719,0,8.533-3.814,8.533-8.533v-34.133C392.535,362.217,388.721,358.402,384.002,358.402z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        <g>
                        <path d="M452.269,358.402c-4.719,0-8.533,3.814-8.533,8.533v34.133c0,4.719,3.814,8.533,8.533,8.533    c4.719,0,8.533-3.814,8.533-8.533v-34.133C460.802,362.217,456.988,358.402,452.269,358.402z" fill="#afafaf"></path>
                        </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        </svg>
                    </div>
                        <div class="icon_box_title">Weekend trips</div>
                        <p class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adip iscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis.</p>
                        <a href="#" class="icon_box_more">Read More</a>
                    </div>
                </div>

            <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px" class="svg replaced-svg">
                            <g>
                            <g>
                            <path d="M230.4,110.933H42.667C19.14,110.933,0,130.074,0,153.6v273.067c0,23.526,19.14,42.667,42.667,42.667H153.6v-17.067    H42.667c-14.114,0-25.6-11.486-25.6-25.6V153.6c0-14.114,11.486-25.6,25.6-25.6H230.4c14.114,0,25.6,11.486,25.6,25.6v8.533    h17.067V153.6C273.067,130.074,253.926,110.933,230.4,110.933z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                            <path d="M187.733,0h-102.4c-14.114,0-25.6,11.486-25.6,25.6s11.486,25.6,25.6,25.6h102.4c14.114,0,25.6-11.486,25.6-25.6    S201.847,0,187.733,0z M187.733,34.133h-102.4c-4.702,0-8.533-3.831-8.533-8.533c0-4.702,3.831-8.533,8.533-8.533h102.4    c4.702,0,8.533,3.831,8.533,8.533C196.267,30.302,192.435,34.133,187.733,34.133z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                            <rect x="93.867" y="42.667" width="17.067" height="76.8" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                            <rect x="162.133" y="42.667" width="17.067" height="76.8" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                            <rect x="51.2" y="256" width="17.067" height="153.6" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                            <rect x="153.6" y="162.133" width="17.067" height="68.267" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                            <path d="M38.4,452.267c-16.469,0-29.867,13.397-29.867,29.867S21.931,512,38.4,512c16.469,0,29.867-13.397,29.867-29.867    S54.869,452.267,38.4,452.267z M38.4,494.933c-7.057,0-12.8-5.743-12.8-12.8s5.743-12.8,12.8-12.8s12.8,5.743,12.8,12.8    S45.457,494.933,38.4,494.933z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                            <rect x="102.4" y="162.133" width="17.067" height="247.467" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                            <path d="M93.261,235.759l-17.067-42.667c-0.853-2.133-2.534-3.831-4.659-4.71c-2.133-0.888-4.523-0.879-6.63,0.043l-59.733,25.6    C2.031,215.364,0,218.453,0,221.867v51.2c0,2.893,1.459,5.581,3.883,7.159c1.408,0.905,3.029,1.374,4.651,1.374    c1.178,0,2.355-0.239,3.473-0.742l76.8-34.133C92.996,244.864,94.959,240.026,93.261,235.759z M17.067,259.934V227.49    l46.524-19.934l10.769,26.914L17.067,259.934z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                            <rect x="51.2" y="162.133" width="17.067" height="42.667" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                            <rect x="204.8" y="162.133" width="17.067" height="68.267" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                            <path d="M234.667,452.267c-16.469,0-29.867,13.397-29.867,29.867S218.197,512,234.667,512c16.469,0,29.867-13.397,29.867-29.867    S251.136,452.267,234.667,452.267z M234.667,494.933c-7.057,0-12.8-5.743-12.8-12.8s5.743-12.8,12.8-12.8s12.8,5.743,12.8,12.8    S241.724,494.933,234.667,494.933z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                            <path d="M469.333,213.333H170.667C147.14,213.333,128,232.474,128,256v170.667c0,23.526,19.14,42.667,42.667,42.667h298.667    c23.526,0,42.667-19.14,42.667-42.667V256C512,232.474,492.86,213.333,469.333,213.333z M494.933,426.667    c0,14.114-11.486,25.6-25.6,25.6H170.667c-14.114,0-25.6-11.486-25.6-25.6V256c0-14.114,11.486-25.6,25.6-25.6h298.667    c14.114,0,25.6,11.486,25.6,25.6V426.667z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                            <path d="M358.4,179.2h-76.8c-4.719,0-8.533,3.823-8.533,8.533v34.133h17.067v-25.6h59.733v25.6h17.067v-34.133    C366.933,183.023,363.119,179.2,358.4,179.2z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                            <path d="M358.4,145.067h-76.8c-23.526,0-42.667,19.14-42.667,42.667v34.133H256v-34.133c0-14.114,11.486-25.6,25.6-25.6h76.8    c14.114,0,25.6,11.486,25.6,25.6v34.133h17.067v-34.133C401.067,164.207,381.926,145.067,358.4,145.067z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                            <path d="M356.804,310.775l-42.667-59.733c-3.2-4.489-10.684-4.489-13.884,0l-42.667,59.733c-1.86,2.603-2.108,6.016-0.649,8.866    c1.468,2.842,4.395,4.625,7.595,4.625h85.333c3.2,0,6.127-1.783,7.586-4.625C358.912,316.792,358.665,313.378,356.804,310.775z     M281.114,307.2l26.086-36.514l26.078,36.514H281.114z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                            <path d="M440.004,335.59c-26.846-8.747-54.579,2.33-61.867,24.67c-3.652,11.179-1.749,23.296,5.359,34.133    c6.716,10.24,17.391,18.15,30.046,22.289c6.238,2.031,12.518,2.995,18.586,2.995c20.028,0,37.692-10.513,43.298-27.665    C482.722,369.656,466.833,344.346,440.004,335.59z M459.187,386.722c-4.369,13.414-22.485,19.567-40.354,13.739    c-8.994-2.944-16.478-8.422-21.077-15.428c-4.207-6.417-5.419-13.329-3.413-19.473c0,0,0,0,0.009,0    c3.251-9.975,14.106-15.932,26.803-15.932c4.378,0,8.969,0.7,13.534,2.193C452.574,357.666,463.556,373.316,459.187,386.722z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                            <path d="M166.4,452.267c-16.469,0-29.867,13.397-29.867,29.867S149.931,512,166.4,512c16.469,0,29.867-13.397,29.867-29.867    S182.869,452.267,166.4,452.267z M166.4,494.933c-7.057,0-12.8-5.743-12.8-12.8s5.743-12.8,12.8-12.8s12.8,5.743,12.8,12.8    S173.457,494.933,166.4,494.933z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                            <path d="M473.6,452.267c-16.469,0-29.867,13.397-29.867,29.867S457.131,512,473.6,512c16.469,0,29.867-13.397,29.867-29.867    S490.069,452.267,473.6,452.267z M473.6,494.933c-7.057,0-12.8-5.743-12.8-12.8s5.743-12.8,12.8-12.8s12.8,5.743,12.8,12.8    S480.657,494.933,473.6,494.933z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                            <rect x="204.8" y="392.533" width="17.067" height="68.267" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                            <path d="M213.333,213.333H179.2c-4.71,0-8.533,3.823-8.533,8.533v102.4h17.067V230.4H204.8v110.933h17.067V221.867    C221.867,217.156,218.044,213.333,213.333,213.333z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                            <rect x="170.667" y="366.933" width="17.067" height="93.867" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                            <rect x="452.267" y="401.067" width="17.067" height="59.733" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                            <path d="M460.8,213.333h-34.133c-4.719,0-8.533,3.823-8.533,8.533v119.467H435.2V230.4h17.067v128h17.067V221.867    C469.333,217.156,465.519,213.333,460.8,213.333z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                            <rect x="418.133" y="409.6" width="17.067" height="51.2" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                            <path d="M243.234,351.019l-102.4-59.733l-8.602,14.754l95.488,55.697l-9.37,18.731l-77.431-46.456l-8.781,14.635l85.333,51.2    c1.348,0.802,2.859,1.22,4.395,1.22c0.802,0,1.604-0.111,2.389-0.341c2.278-0.666,4.181-2.253,5.248-4.378l17.067-34.133    C248.576,358.187,247.125,353.297,243.234,351.019z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            </svg>
                        </div>
                            <div class="icon_box_title">Fun leisure trips</div>
                            <p class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adip iscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis.</p>
                            <a href="#" class="icon_box_more">Read More</a>
                    </div>
                </div>

            <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.011 512.011" style="enable-background:new 0 0 512.011 512.011;" xml:space="preserve" width="512px" height="512px" class="svg replaced-svg">
                            <g>
                            <g>
                                <path d="M490.18,148.109c-35.558-13.38-74.445-12.646-109.278,1.997L111.829,255.041l-64.64-40.397    c-1.963-1.229-4.335-1.604-6.588-1.041l-34.133,8.533c-2.62,0.657-4.779,2.517-5.811,5.009c-1.041,2.5-0.828,5.333,0.563,7.654    l51.2,85.333c1.536,2.56,4.318,4.139,7.313,4.139H204.8c1.084,0,2.159-0.205,3.166-0.589l283.23-113.067    c0.034-0.017,0.077-0.034,0.12-0.051c12.732-5.308,20.864-17.655,20.693-31.454C511.829,165.347,503.04,152.888,490.18,148.109z     M484.796,194.77L203.162,307.205H64.572l-42.786-71.322l19.439-4.855l65.195,40.738c2.287,1.425,5.111,1.698,7.62,0.717    l273.271-106.581c30.976-13.013,65.374-13.679,96.887-1.826c6.332,2.355,10.65,8.474,10.735,15.232    C495.019,186.083,491.042,192.141,484.796,194.77z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                                <path d="M328.269,186.441l9.054-14.473L64.256,1.302c-2.159-1.34-4.804-1.664-7.219-0.862l-51.2,17.067    c-2.893,0.973-5.052,3.405-5.666,6.391c-0.606,2.987,0.427,6.076,2.705,8.098l221.867,196.267l11.315-12.783L25.276,29.018    l33.348-11.11L328.269,186.441z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>

                                        <rect x="433.605" y="153.506" transform="matrix(0.9305 -0.3663 0.3663 0.9305 -27.623 178.4901)" width="45.858" height="17.058" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                                <g>
                                        <polygon points="270.592,227.674 276.907,243.546 292.693,237.317 286.464,221.359    " fill="#afafaf"></polygon>
                                        <polygon points="302.336,215.13 308.565,231.002 324.267,224.773 318.123,208.901    " fill="#afafaf"></polygon>

                                                <rect x="241.459" y="236.429" transform="matrix(-0.3653 -0.9309 0.9309 -0.3653 113.2921 567.1495)" width="17.051" height="17.051" fill="#afafaf"></rect>
                                        <polygon points="413.269,171.439 397.397,177.669 403.627,193.541 419.499,187.738    " fill="#afafaf"></polygon>
                                        <polygon points="365.653,190.213 371.968,206.085 387.84,199.855 381.525,183.983    " fill="#afafaf"></polygon>
                                        <polygon points="333.995,202.671 340.224,218.543 356.096,212.143 349.867,196.271    " fill="#afafaf"></polygon>
                                </g>
                            </g>
                            </g>
                            <g>
                            <g>
                                <path d="M477.867,366.938h-34.133c-4.719,0-8.533,3.814-8.533,8.533v128c0,4.719,3.814,8.533,8.533,8.533h34.133    c4.719,0,8.533-3.814,8.533-8.533v-128C486.4,370.753,482.586,366.938,477.867,366.938z M469.333,494.938h-17.067V384.005h17.067    V494.938z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                                <path d="M510.063,327.395c-1.621-1.971-4.036-3.123-6.596-3.123h-85.333c-2.56,0-4.975,1.152-6.596,3.123    c-1.613,1.971-2.27,4.574-1.766,7.083l8.533,42.667c0.794,3.985,4.292,6.861,8.363,6.861h68.267c4.07,0,7.569-2.876,8.363-6.861    l8.533-42.667C512.333,331.969,511.676,329.366,510.063,327.395z M487.936,366.938h-54.281l-5.112-25.6h64.512L487.936,366.938z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                                <path d="M477.867,290.138h-34.133c-4.719,0-8.533,3.814-8.533,8.533v34.133c0,4.719,3.814,8.533,8.533,8.533h34.133    c4.719,0,8.533-3.814,8.533-8.533v-34.133C486.4,293.953,482.586,290.138,477.867,290.138z M469.333,324.271h-17.067v-17.067    h17.067V324.271z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                                <rect x="452.267" y="264.538" width="17.067" height="34.133" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                                <rect y="494.938" width="512" height="17.067" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                                <path d="M409.6,426.671H170.667c-4.71,0-8.533,3.814-8.533,8.533v68.267c0,4.719,3.823,8.533,8.533,8.533H409.6    c4.719,0,8.533-3.814,8.533-8.533v-68.267C418.133,430.486,414.319,426.671,409.6,426.671z M401.067,494.938H179.2v-51.2h221.867    V494.938z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            <g>
                                <rect x="366.933" y="460.805" width="17.067" height="17.067" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                                <rect x="332.8" y="460.805" width="17.067" height="17.067" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                                <rect x="298.667" y="460.805" width="17.067" height="17.067" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                                <rect x="264.533" y="460.805" width="17.067" height="17.067" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                                <rect x="230.4" y="460.805" width="17.067" height="17.067" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                                <rect x="196.267" y="460.805" width="17.067" height="17.067" fill="#afafaf"></rect>
                            </g>
                            </g>
                            <g>
                            <g>
                                <path d="M170.667,452.271h-102.4c-4.71,0-8.533,3.814-8.533,8.533v42.667c0,4.719,3.823,8.533,8.533,8.533h102.4    c4.71,0,8.533-3.814,8.533-8.533v-42.667C179.2,456.086,175.377,452.271,170.667,452.271z M162.133,494.938H76.8v-25.6h85.333    V494.938z" fill="#afafaf"></path>
                            </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            </svg>
                        </div>
                            <div class="icon_box_title">Plane tickets</div>
                                <p class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adip iscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis.</p>
                                <a href="#" class="icon_box_more">Read More</a>
                        </div>
                </div>

            </div>
        </div>
    </div>

<!-- Newsletter -->
    <div class="newsletter">
        <!-- Image by https://unsplash.com/@garciasaldana_ -->
        <div class="newsletter_background" style="background-image:url({{asset('images/newsletter.jpg')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="newsletter_content">
                        <div class="newsletter_title text-center">Subscribe to our Newsletter</div>
                        <div class="newsletter_form_container">
                            <form action="#" id="newsletter_form" class="newsletter_form">
                                <div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
                                    <input type="email" id="newsletter_input" class="newsletter_input" placeholder="Your E-mail Address">
                                    <button type="submit" id="newsletter_button" class="newsletter_button">Subscribe</button>
                                </div>
                            </form>
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