@extends ('Frontend.layouts.layout')

@section('contenido')

<!-- Home -->

        <div class=" cabecera_an" style="">
        <div class="home_background paralan" style=" background-image: url('{{ asset('images/news.jpg') }}');">
        </div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col">
                    <div class="home_content">
                        <div class="home_content_inner">
                            <div class="home_title pl-3"><b>Catálogo</b></div>
                           {{--  <div class="home_breadcrumbs">
                                <ul class="home_breadcrumbs_list">
                                    <li class="home_breadcrumb"><a href="{{route('/')}}">Inicio</a></li>
                                    <li class="home_breadcrumb">Catálogo</li>
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
                        <h2>Difruta nuestro catálogo</h2>
                        <div>haz tu reservación</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="" id="post-data" >

                        @include('Frontend.paquetes')

                    </div>
                </div>
            </div>
            <div class="d-none" id="">

                   {{ $servicios->links() }}

                
            </div>
            
            <div class="row d-flex  justify-content-center align-items-center col-12">
                @if (count($servicios)>0)
                   <div class="col-4 text-center mt-5 {{ Request::is('catalogo/buscar') ? 'd-none' : '' }}">
                        <div  id="click-load" class="d-none">
                        <img src="{{ asset('images/loading.gif') }}" width="30%" id=""  alt="">
                    </div>
                        <div class="button about_button m-0 " id="click-button" >
                            <a href="" id="click">Ver más</a></div>
                    </div>
                @endif
                
            </div>
        </div>
    </div>

	
</div>

@endsection
@push('scripts')
<script>
     var route='{{asset('images/find.jpg') }}';
    $('.evento').parallax({imageSrc: route});
     var page = 2;


    $('#click').click(function(event){
            event.preventDefault();
        loadMoreData(page)
       page++;
       
    });

    function loadMoreData(page) {
        $.ajax({
            url: '?page=' + page,
            type: "get",
            beforeSend: function() {
                $('#click-load').removeClass('d-none');
               $('#click-button').addClass('d-none');
            }
        }).done(function(data) {
            if(data.html == "") {
                $('#click-load').html("No hay más paquetes");
                return;
            }

            $('#click-load').addClass('d-none');
            $("#post-data").append(data.html);
            $('#click-button').removeClass('d-none');

        })
    }
</script>

@endpush