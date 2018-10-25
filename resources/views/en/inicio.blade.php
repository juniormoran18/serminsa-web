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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-default navbar-light nav_hide1">
    <a class="navbar-brand" href="{{ route('en-inicio') }}" style="max-width: 20%; background: radial-gradient(#FFFFFF, #DADADA);"><img src="img/logo/logo.png" class="img-fluid"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon navbar-light"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active border1">
                <a class="nav-link a1" href="{{ route('en-inicio') }}" style="margin-right:8px; margin-left:8px;">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item border1">
                <a class="nav-link a1" href="{{ route('en-nosotros') }}" >ABOUT US</a>
            </li>
            <li class="nav-item dropdown border1 border1">
                <a class="nav-link dropdown-toggle a1" href="{{ route('en-productos') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">PRODUCTS</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:rgba(249,249,249,0.8);">
                    <li class="dropdown-submenu dropright">
                        <a class="a1" tabindex="-1" href="{{ route('es-locomotoras') }}" style="padding-left:6px;">LOCOMOTIVES</a>
                    <!--<ul class="dropdown-menu" style="background:rgba(249,249,249,0.8);">
                                <li><a class="a1" tabindex="-1" href="{{ route('es-locomotoras') }}" style="padding-left:6px;">BATERIA</a></li>
                                <li><a class="a1" tabindex="-1" href="{{ route('es-locomotoras') }}" style="padding-left:6px;">TROLLEY</a></li>
                            </ul>-->
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
        <img src="img/logo/descarga.png" style="height:1rem;"/> <a href="{{ route('es-inicio') }}">Español</a>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-default nav_hide">
    <a class="navbar-brand" href="{{ route('en-inicio') }}" style="max-width: 20%; background: radial-gradient(#FFFFFF, #DADADA);"><img src="img/logo/logo.png" class="img-fluid"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon navbar-light"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active border1">
                <a class="nav-link a1" href="{{ route('en-inicio') }}" style="margin-right:8px; margin-left:8px;">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item border1">
                <a class="nav-link a1" href="{{ route('en-nosotros') }}" >ABOUT US</a>
            </li>
            <li class="nav-item dropdown border1 border1">
                <a class="nav-link dropdown-toggle a1" href="{{ route('en-productos') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">PRODUCTS</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:rgba(249,249,249,0.8);">
                    <li class="dropdown-submenu dropright">
                        <a class="a1" tabindex="-1" href="{{ route('en-locomotoras') }}" style="padding-left:6px;">LOCOMOTIVES</a>
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
        <img src="img/logo/descarga.png" style="height:0.8rem;"/> <a href="{{ route('es-inicio') }}">Español</a>

    </div>
</nav>

<!--end of nav -->
<div class="col-md-12 espacio"></div>
<!--content-->
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

<!-- Botones principales -->

    <div class="row row-custom text-center">
        <div id="btnref" class="col-sm-2 offset-md-1 border">
            <a class="text-center title-button a2">LOCOMOTIVES</a>
                <img src="img/menu/locomotora.png" class="img-thumbnail d-none d-sm-block">
        </div>
        
        <div id="btnref2" class="col-sm-2 border">
                 <a class="text-center a2">WAGONS</a>
                <img src="img/menu/vagon.png" class="img-thumbnail d-none d-sm-block">
        </div>  
        
        <div id="btnref3" class="col-sm-2 border a2">
            <a class="text-center">PALLAS EIMCO</a>
            
                <img src="img/menu/pala.png" class="img-thumbnail center d-none d-sm-block">
        
        </div>
        <div id="btnref4" class="col-sm-2 border a2">
            <a class="text-center" >METALMECANICA</a>
            
                <img src="img/menu/metalmecanica.png" class="img-thumbnail d-none d-sm-block">
           
        </div>
        <div id="btnref5" class="col-sm-2 border a2">
            <a class="text-center">SERVICES</a>
           
                <img src="img/menu/servicio.png" class="img-thumbnail d-none d-sm-block">
            
        </div>
    </div>

    <div class="col-md-12 espacio"></div>

<!-- Noticias -->    
    <div class="container general">
        
        
    </div>

    <!-- Noticias -->    
    <div class="container general"></div>

<section class="carousel slide general3 small_hidden" data-ride="carousel" id="postsCarousel">
    <div class="container ">
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
            @foreach($noticiasingles as $noticia)
                <div class="col-md-4" style="height: 50rem;">
                    <div class="card">
                        <div class="card-img-top card-img-top-250" style="min-height:250px;">
                            <img class="img-fluid" src="{{$noticia->imagen}}" alt="Carousel 1">
                        </div>
                        <div class="card-block p-t-2">
                            <div class="card-header"><h4>{{ $noticia->titulo }}</h4></div>
                            <div class="card-text" align="justify" style="padding:1rem;">{{ $noticia->contenido }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!--Segunda lista de noticias -->
        <div class="row row-equal carousel-item m-t-0">
            @foreach($noticiasingles1 as $noticia)
                <div class="col-md-4"  style="height: 50rem;">
                    <div class="card">
                        <div class="card-img-top card-img-top-250" style="min-height:250px;">
                            <img class="img-fluid" src="{{$noticia->imagen}}" alt="Carousel 1">
                        </div>
                        <div class="card-block p-t-2">
                            <div class="card-header"><h3>{{ $noticia->titulo }}</h3></div>
                            <div class="card-text" align="justify" style="padding:1rem;">{{ $noticia->contenido }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
    
    
<!-- Fin de la noticias -->


    <div class="col-md-12" style="padding-left:4rem; border-top-width:2px">
        <div class="col-md-4"><h5>Our clients</h5></div>
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
        window.open('en-locomotoras');
    })
    $('#btnref2').on('click', function() {
        window.open('en-vagones');
    })
    $('#btnref3').on('click', function() {
        window.open('en-palas');
    })
    $('#btnref4').on('click', function() {
        window.open('en-metalmecanica');
    })
    $('#btnref5').on('click', function() {
        window.open('en-servicios');
    })
</script>


</body>
</html>