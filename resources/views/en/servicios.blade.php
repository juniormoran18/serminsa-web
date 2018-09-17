<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Serminsa</title>

    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/cardslider.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-default">
    <a class="navbar-brand" href="{{ route('en-inicio') }}" style="max-width: 20%; background: radial-gradient(#FFFFFF, #DADADA);"><img src="img/logo/logo.png" class="img-fluid"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active border1">
                <a class="nav-link a1" href="{{ route('en-inicio') }}" style="margin-right:8px; margin-left:8px;">HOME<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item border1">
                <a class="nav-link a1" href="{{ route('en-nosotros') }}" >ABOUT US</a>
            </li>
            <li class="nav-item dropdown border1 border1">
                <a class="nav-link dropdown-toggle a1" href="{{ route('en-productos') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">PRODUCTS</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:rgba(249,249,249,0.8);">
                    <li class="dropdown-submenu dropright">
                        <a class="test a1" tabindex="-1" href="{{ route('en-locomotoras') }}" style="padding-left:6px;">LOCOMOTIVES</a>
                        <ul class="dropdown-menu" style="background:rgba(249,249,249,0.8);">
                            <li><a class="a1" tabindex="-1" href="{{ route('en-locomotoras') }}" style="padding-left:6px;">BATTERY</a></li>
                            <li><a class="a1" tabindex="-1" href="{{ route('en-locomotoras') }}" style="padding-left:6px;">TROLLEY</a></li>
                        </ul>
                    </li>
                    <li><a class="a1" tabindex="-1" href="{{ route('en-vagones') }}" style="padding-left:6px;">WAGONS</a></li>
                    <li><a class="a1" tabindex="-1" href="{{ route('en-palas') }}" style="padding-left:6px;">SHOVEL</a></li>
                    <li><a class="a1" tabindex="-1" href="{{ route('en-metalmecanica') }}" style="padding-left:6px;">METALMECANICA</a></li>
                    <li><a class="a1" tabindex="-1" href="{{ route('en-servicios') }}" style="padding-left:6px;">SERVICES</a></li>
                </ul>
            </li>
            <li class="nav-item border1 border1">
                <a class="nav-link a1" href="{{ route('en-contacto') }}">CONTACT</a>
            </li>
        </ul>
        <img src="img/logo/descarga.png" style="height:0.7rem;"/> <a style="padding-left: 0.5rem" href="{{ route('es-inicio') }}">Espanish</a>
        <ul style="margin-top:1rem;">
            <div class="search-box">
                <a class="search-btn dropdown">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </ul>
    </div>
</nav>
<!--end of nav -->
<div class="col-md-12 espacio">.</div>
<!--content-->


<!-- slider -->

    <div class="col-md-12 espacio">.</div>
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
                  <h2>TRANSPORT SYSTEMS ON RAILS</h2>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slider/P-2.jpg" alt="Second slide">
              <div class="carousel-caption a3" style="background-color: rgba(0,0,0,0.5);">
                  <h2>45 YEARS AT THE SERVICE OF THE INDUSTRY</h2>
              </div>
            </div>
            <div class="carousel-item" >
              <img class="d-block w-100" src="img/slider/port-3.jpg" alt="Third slide">
              <div class="carousel-caption a3" style="background-color: rgba(0,0,0,0.5);">
                  <h2>PERMANENT TECHNICAL SUPPORT</h2>
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
<!-- Contenido -->

<div class="container">
    <div style="padding-top: 2rem;">
        <h3>SERVICIOS</h3>
        <a>SERMINSA fabrica todo tipo de carros mineros: Tipo U-35, V-40. gramby con capacidades desde 60p3 hasta 180p3, tipo Kurina y otros modelos de diseño especial. Los carros SERMINSA son de fabricaciópn robusta, respetando las especificaciones tanto en calidad de soldadura asi como calidad y espesor de acero. Asímismo, se fabrican a pedido del cliente con planchas antidesgaste, todo lo cual lleva a obtener una vida útil superior al estándar.</a>
    </div>
    <div>
         <div class="row">
            <div class="col-md-5" style="padding-top: 2rem;">
                <h5> U-35 / V-40</h5>
                <a style="">Los tradicionales carros mineros tipo Granby son ampliamente utilizados en operaciones mineras subterraneas donde se requiere altos volúmenes de extracción a bajo costo. Estos robustos carros están disponibles en capacidades desde 40 pies cúbicos hasta 180 pies cúbicos.</a>
            </div>
            <div class="col-md-7" style="padding-top: 2rem; padding-left:6rem;">
                <img src="img/vagones/img2.png" class="img-thumbnail" style="max-width:55%"> 
            </div>
        </div>
        <div>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col"></th>
                  <th colspan="3" scope="col">Medidas de Tolva (mm)</th>
                  <th colspan="4" scope="col">Dimensiones Principales (mm)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Capacidad</th>
                  <td>Alt/ s Riel</td>
                  <td>Long. Total</td>
                  <td>Ancho Total</td>
                  <td>Ancho Tolva</td>
                  <td>Altura Tolva</td>
                  <td>Peso Total/ Kg.</td>
                  <td>Sia. Rueda</td>
                </tr>
                <tr>
                  <th scope="row">U-21</th>
                  <td>1927</td>
                  <td>1150</td>
                  <td>785</td>
                  <td>1358</td>
                  <td>833</td>
                  <td>2401</td>
                  <td>500/600/750</td>
                </tr>
                <tr>
                  <th scope="row">U-35</th>
                  <td>2665</td>
                  <td>1200</td>
                  <td>805</td>
                  <td>1398</td>
                  <td>1060</td>
                  <td>3120</td>
                  <td>500/600</td>
                </tr>
                <tr>
                  <th scope="row">V40</th>
                  <td>2700</td>
                  <td>1345</td>
                  <td>800</td>
                  <td>1386</td>
                  <td>1070</td>
                  <td>3810</td>
                  <td>600</td>
                </tr>
                </tr>
              </tbody>
            </table>
            
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-md-5" style="padding-top: 2rem;">
                <h5> GRAMBY de 60 a 180 p3</h5>
                <a style="">Los tradicionales carros mineros tipo Granby son ampliamente utilizados en operaciones mineras subterraneas donde se requiere altos volúmenes de extracción a bajo costo. Estos robustos carros están disponibles en capacidades desde 40 pies cúbicos hasta 180 pies cúbicos.</a>
            </div>
            <div class="col-md-7" style="padding-top: 2rem; padding-left:6rem;">
                <img src="img/vagones/Vagon.png" class="img-thumbnail"> 
            </div>
        </div>
        <div style="padding-top: 2rem;">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col"></th>
                  <th colspan="3" scope="col">Medidas de Tolva (mm)</th>
                  <th colspan="4" scope="col">Dimensiones Principales (mm)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Capacidad</th>
                  <td>Long. Int. Tolva</td>
                  <td>Ancho int. Tolva</td>
                  <td>Alto. Int. Tolva</td>
                  <td>Alt. al Riel</td>
                  <td>Dist. Ejes</td>
                  <td>Long. Total</td>
                  <td>Trocha (mm)</td>
                </tr>
                <tr>
                  <th scope="row">60 p3</th>
                  <td>1927</td>
                  <td>1150</td>
                  <td>785</td>
                  <td>1358</td>
                  <td>833</td>
                  <td>2401</td>
                  <td>500/600/750</td>
                </tr>
                <tr>
                  <th scope="row">80 p3</th>
                  <td>2665</td>
                  <td>1200</td>
                  <td>805</td>
                  <td>1398</td>
                  <td>1060</td>
                  <td>3120</td>
                  <td>500/600</td>
                </tr>
                <tr>
                  <th scope="row">100 p3</th>
                  <td>2700</td>
                  <td>1345</td>
                  <td>800</td>
                  <td>1386</td>
                  <td>1070</td>
                  <td>3810</td>
                  <td>600</td>
                </tr>
                <tr>
                  <th scope="row">110 p3</th>
                  <td>2795</td>
                  <td>1219</td>
                  <td>990</td>
                  <td>1580</td>
                  <td>1220</td>
                  <td>3880</td>
                  <td>600/750</td>
                </tr>
                <tr>
                  <th scope="row">120 p3</th>
                  <td>2885</td>
                  <td>1300</td>
                  <td>930</td>
                  <td>1537</td>
                  <td>1060</td>
                  <td>3454</td>
                  <td>600/762</td>
                </tr>
                <tr>
                  <th scope="row">135 p3</th>
                  <td>3150</td>
                  <td>1219</td>
                  <td>990</td>
                  <td>1580</td>
                  <td>1220</td>
                  <td>3632</td>
                  <td>600</td>
                </tr>
                <tr>
                  <th scope="row">140 p3</th>
                  <td>1927</td>
                  <td>1150</td>
                  <td>785</td>
                  <td>1358</td>
                  <td>833</td>
                  <td>2401</td>
                  <td>500/600/750</td>
                </tr>
                <tr>
                  <th scope="row">160 p3</th>
                  <td>1927</td>
                  <td>1150</td>
                  <td>785</td>
                  <td>1358</td>
                  <td>833</td>
                  <td>2401</td>
                  <td>500/600/750</td>
                </tr>
                <tr>
                  <th scope="row">180 p3</th>
                  <td>1927</td>
                  <td>1150</td>
                  <td>785</td>
                  <td>1358</td>
                  <td>833</td>
                  <td>2401</td>
                  <td>500/600/750</td>
                </tr>
                </tr>
              </tbody>
            </table>
            
        </div>
    </div>
    
</div>


<!--footer-->
<footer class="footer1 general5" style="background-color:#F0F0F0" >
    <div class="container">
        <div class="row"><!-- row -->
            <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                    <li class="widget-container widget_nav_menu"><!-- widgets list -->

                        <h1 class="title-widget">Home</h1>

                        <ul>
                            <li><a  href="{{ route('en-inicio') }}"><i class="fa fa-angle-double-right"></i> Home</a></li>
                            <li><a  href="{{ route('en-inicio') }}"><i class="fa fa-angle-double-right"></i> News</a></li>
                            <li><a  href="{{ route('en-inicio') }}"><i class="fa fa-angle-double-right"></i> Clients</a></li>

                        </ul>

                    </li>

                </ul>


            </div><!-- widgets column left end -->



            <div class="col-lg-3 col-md-3"><!-- widgets column left -->

                <ul class="list-unstyled clear-margins"><!-- widgets -->

                    <li class="widget-container widget_nav_menu"><!-- widgets list -->

                        <h1 class="title-widget">About us</h1>

                        <ul>
                            <li><a  href="{{ route('en-nosotros') }}"><i class="fa fa-angle-double-right"></i> About us?</a></li>
                            <li><a  href="{{ route('en-nosotros') }}"><i class="fa fa-angle-double-right"></i>  History</a></li>
                            <li><a  href="{{ route('en-nosotros') }}"><i class="fa fa-angle-double-right"></i>  Mission and vision</a></li>
                            <li><a  href="{{ route('en-nosotros') }}"><i class="fa fa-angle-double-right"></i>  Quality politics</a></li>
                        </ul>

                    </li>

                </ul>


            </div><!-- widgets column left end -->



            <div class="col-lg-3 col-md-3"><!-- widgets column left -->

                <ul class="list-unstyled clear-margins"><!-- widgets -->

                    <li class="widget-container widget_nav_menu"><!-- widgets list -->

                        <h1 class="title-widget">Products</h1>

                        <ul>
                            <li><a href="{{ route('en-locomotoras') }}"><i class="fa fa-angle-double-right"></i> Locomotives</a></li>
                            <li><a href="{{ route('en-vagones') }}"><i class="fa fa-angle-double-right"></i> Wagons</a></li>
                            <li><a href="{{ route('en-palas') }}"><i class="fa fa-angle-double-right"></i> Pallas Eimco</a></li>
                            <li><a href="{{ route('en-metalmecanica') }}"><i class="fa fa-angle-double-right"></i> Metalmecánica</a></li>
                            <li><a href="{{ route('en-servicios') }}"><i class="fa fa-angle-double-right"></i> Services</a></li>
                        </ul>

                    </li>

                </ul>


            </div><!-- widgets column left end -->


            <div class="col-lg-3 col-md-3"><!-- widgets column center -->



                <ul class="list-unstyled clear-margins"><!-- widgets -->

                    <li class="widget-container widget_recent_news"><!-- widgets list -->

                        <h1 class="title-widget">Contact </h1>

                        <div class="footerp">

                            <p><b>Email:</b> <a href="mailto:serminsa@serminsa.com.pe">serminsa@serminsa.com.pe</a></p>
                            <p><b>Phone Number</b>

                                <b style="color:#ffc106;">(9am a 6pm):</b>  <p>01 713 4228, 01 713 4225</p>  </p>


                            <div class="social-icons">

                                <ul class="nomargin">

                                    <a href="https://www.facebook.com/bootsnipp"><i class="fab fa-facebook-square fa-3x" id="social"></i></a>
                                    <a href="https://twitter.com/bootsnipp"><i class="fab fa-youtube-square fa-3x social-tw" id="social"></i></a>
                                    <a href="https://plus.google.com/+Bootsnipp-page"><i class="fab fa-linkedin fa-3x social-gp" id="social"></i></a>
                                    <a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>

                                </ul>
                            </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--header-->

<div class="footer-bottom">

    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <div class="copyright text-center">

                    © 2018, Serminsa, All rights reserved

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Scripts -->
<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/js/popper.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/owl.carousel.js"></script>

<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: false,
        autoplay:true,
        autoplayTimeout:1500,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>

<script>
    (function($){
        "use strict";
        $('.next').click(function(){ $('.carousel').carousel('next');return false; });
        $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
    })
    (jQuery);
</script>
<script >
    $(document).ready(function() {
        $(".dropdown-toggle").dropdown();
    });
</script>

<script>
    $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });

    $('#btnref').on('click', function() {
        window.open('locomotoras.html');
    })
    $('#btnref2').on('click', function() {
        window.open('vagones.html');
    })
    $('#btnref3').on('click', function() {
        window.open('palas.html');
    })
    $('#btnref4').on('click', function() {
        window.open('metalmecanica.html');
    })
    $('#btnref5').on('click', function() {
        window.open('servicios.html');
    })
</script>


</body>
</html>