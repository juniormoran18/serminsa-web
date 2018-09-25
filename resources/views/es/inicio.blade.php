@extends ('page.principal')

@section('content')

    <!-- slider -->


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/slider/P-1.jpg" alt="First slide">
                <div class="carousel-caption a3" style="background-color: rgba(0,0,0,0.5);">
                    <h2>SISTEMAS DE TRANSPORTE SOBRE RIELES</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slider/P-2.jpg" alt="Second slide">
                <div class="carousel-caption a3" style="background-color: rgba(0,0,0,0.5);">
                    <h2>45 AÑOS AL SERVICIO DE LA INDUSTRIA</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slider/port-3.jpg" alt="Third slide">
                <div class="carousel-caption a3" style="background-color: rgba(0,0,0,0.5);">
                    <h2>RESPALDO TECNICO PERMANENTE</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- final del slide -->

    <!-- Botones principales -->

    <div class="row row-custom text-center">
        <div id="btnref" class="col-sm-2 offset-md-1 border">
            <a class="text-center title-button a2">LOCOMOTORAS</a>
            <img src="img/menu/locomotora.png" class="img-thumbnail d-none d-sm-block">
        </div>

        <div id="btnref2" class="col-sm-2 border">
            <a class="text-center a2">VAGONES</a>
            <img src="img/menu/vagon.png" class="img-thumbnail d-none d-sm-block">
        </div>

        <div id="btnref3" class="col-sm-2 border a2">
            <a class="text-center">PALAS EIMCO</a>

            <img src="img/menu/pala.png" class="img-thumbnail center d-none d-sm-block">

        </div>
        <div id="btnref4" class="col-sm-2 border a2">
            <a class="text-center">METALMECANICA</a>

            <img src="img/menu/metalmecanica.png" class="img-thumbnail d-none d-sm-block">

        </div>
        <div id="btnref5" class="col-sm-2 border a2">
            <a class="text-center">SERVICIOS</a>

            <img src="img/menu/servicio.png" class="img-thumbnail d-none d-sm-block">

        </div>
    </div>

    <div class="col-md-12 espacio"></div>

    <!-- Noticias -->
    <div class="container general">


    </div>

    <!-- Noticias -->

    <!--
        <section class="carousel slide general3" data-ride="carousel" id="postsCarousel">
            <div class="container p-t-0 m-t-2 carousel-inner">
                <div class="row row-equal carousel-item active m-t-0">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-top card-img-top-250">
                                <img class="img-fluid" src="img/noticias/img1.jpg" alt="Carousel 1">
                            </div>
                            <div class="card-block p-t-2">
                                <div class="card-header"><h3>Noticia 1</h3></div>
                                <div class="card-text" style="padding:1rem;">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non
                                    reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et!
                                    Ipsa, maiores, ratione.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-top card-img-top-250">
                                <img class="img-fluid" src="img/noticias/img1.jpg" alt="Carousel 1">
                            </div>
                            <div class="card-block p-t-2">
                                <div class="card-header"><h3>Noticia 1</h3></div>
                                <div class="card-text" style="padding:1rem;">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non
                                    reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et!
                                    Ipsa, maiores, ratione.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-top card-img-top-250">
                                <img class="img-fluid" src="img/noticias/img1.jpg" alt="Carousel 1">
                            </div>
                            <div class="card-block p-t-2">
                                <div class="card-header"><h3>Noticia 1</h3></div>
                                <div class="card-text" style="padding:1rem;">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non
                                    reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et!
                                    Ipsa, maiores, ratione.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-equal carousel-item m-t-0">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-top card-img-top-250">
                                <img class="img-fluid" src="img/noticias/img1.jpg" alt="Carousel 1">
                            </div>
                            <div class="card-block p-t-2">
                                <div class="card-header"><h3>Noticia 1</h3></div>
                                <div class="card-text" style="padding:1rem;">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non
                                    reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et!
                                    Ipsa, maiores, ratione.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-top card-img-top-250">
                                <img class="img-fluid" src="img/noticias/img1.jpg" alt="Carousel 1">
                            </div>
                            <div class="card-block p-t-2">
                                <div class="card-header"><h3>Noticia 1</h3></div>
                                <div class="card-text" style="padding:1rem;">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non
                                    reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et!
                                    Ipsa, maiores, ratione.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-top card-img-top-250">
                                <img class="img-fluid" src="img/noticias/img1.jpg" alt="Carousel 1">
                            </div>
                            <div class="card-block p-t-2">
                                <div class="card-header"><h3>Noticia 1</h3></div>
                                <div class="card-text" style="padding:1rem;">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non
                                    reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et!
                                    Ipsa, maiores, ratione.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


    <!-- Fin de la noticias -->


    <section class="carousel slide general3" data-ride="carousel" id="postsCarousel">
        <div class="container">
            <div class="row">
                <div class="col-md-10 margin-title"><h2>NOTICIAS</h2></div>
                <div class="col-2 text-right mb-4">
                    <a class="btn btn-outline-secondary prev" href="" title="go back"><i
                                class="fa fa-lg fa-chevron-left"></i></a>
                    <a class="btn btn-outline-secondary next" href="" title="more"><i
                                class="fa fa-lg fa-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <div class="container p-t-0 m-t-2 carousel-inner">
            <div class="row row-equal carousel-item active m-t-0">
                @foreach($noticias as $noticia)
                    <div class="col-md-4" style="height: 50rem;">
                        <div class="card">
                            <div class="card-img-top card-img-top-250" style="min-height:250px;">
                                <img class="img-fluid" src="{{$noticia->imagen}}" alt="Carousel 1">
                            </div>
                            <div class="card-block p-t-2">
                                <div class="card-header"><h4>{{ $noticia->titulo }}</h4></div>
                                <div class="card-text" style="padding:1rem;">{{ $noticia->contenido }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--Segunda lista de noticias -->
            <div class="row row-equal carousel-item m-t-0">
                @foreach($segundasNoticias as $noticia)
                    <div class="col-md-4"  style="height: 50rem;">
                        <div class="card">
                            <div class="card-img-top card-img-top-250" style="min-height:250px;">
                                <img class="img-fluid" src="{{$noticia->imagen}}" alt="Carousel 1">
                            </div>
                            <div class="card-block p-t-2">
                                <div class="card-header"><h3>{{ $noticia->titulo }}</h3></div>
                                <div class="card-text" style="padding:1rem;">{{ $noticia->contenido }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <div class="col-md-12" style="padding-left:4rem; border-top-width:2px">
        <div class="col-md-4"><h5>Nuestros Clientes</h5></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
    <div class="col-md-12 espacio1"></div>

    <div class="container mt-5">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <div class="item2"><img src="img/logos/1.jpg" class="img-thumbnail" style="max-width:65%"></div>
                <div class="item2"><img src="img/logos/2.jpg" class="img-thumbnail" style="max-width:65%"></div>
                <div class="item2"><img src="img/logos/3.jpg" class="img-thumbnail" style="max-width:65%"></div>
                <div class="item2"><img src="img/logos/4.png" class="img-thumbnail" style="max-width:65%"></div>
                <div class="item2"><img src="img/logos/5.png" class="img-thumbnail" style="max-width:65%"></div>
                <div class="item2"><img src="img/logos/6.png" class="img-thumbnail" style="max-width:65%"></div>
                <div class="item2"><img src="img/logos/7.png" class="img-thumbnail" style="max-width:65%"></div>
                <div class="item2"><img src="img/logos/8.jpg" class="img-thumbnail" style="max-width:65%"></div>
                <div class="item2"><img src="img/logos/9.png" class="img-thumbnail" style="max-width:65%"></div>
            </div>
        </div>
    </div>

    <div class="col-md-12 espacio1"></div>
    <!-- Fin de Slider infinitive -->

@endsection