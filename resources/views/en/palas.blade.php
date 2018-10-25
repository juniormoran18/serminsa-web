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
    <div style="padding-top: 1em;">
        <div class="row" style="padding:2em 0 0;">
                <div class="col-md-10"><h2>Palas</h2></div>
                <div  class="col-md-2"><a href="#caract"><h5>Características</h5></a></div>
            </div>
        <div class="col-md-12 espacio1"  style="margin-bottom:1rem;"></div>
        <a>SERMINSA distributes the original EIMCO 12B and 21B blades manufactured to the highest quality standards ISO 9001 and 14001. In addition to the EIMCO 150 / 1000B Hooper Loader blade (equivalent to the Atlas Copco 310 Cavo blade).</a>
    </div>
    <div>
        <div class="row">
            <div class="col-md-5" style="padding-top: 2rem;">
                <h3>MODEL SHOVEL 12B</h3>
                <a></a>
            </div>
            <div class="col-md-7" style="padding-top: 2rem; padding-left:6rem;">
                <img src="img/menu/pala.png" class="img-thumbnail" style="max-width:65%"> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-5" style="padding-top: 2rem;">
                <h3>MODEL SHOVEL 21B</h3>
                <a></a>
            </div>
            <div class="col-md-7" style="padding-top: 2rem; padding-left:6rem;">
                <img src="img/menu/pala.png" class="img-thumbnail" style="max-width:65%"> 
            </div>
        </div>
        <div id="caract" style="padding-top: 2rem;">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col"></th>
                  <th colspan="1" scope="col">Main features</th>
                  <th colspan="2" scope="col">Eimco 12B</th>
                  <th colspan="1" scope="col">Eimco 21B</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"></th>
                  <td>Overall width</td>
                  <td>735 mm</td>
                  <td>29"</td>
                  <td>851 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Operating width</td>
                  <td>865 mm</td>
                  <td>34"</td>
                  <td>1067 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Length General</td>
                  <td>1120 mm</td>
                  <td>44"</td>
                  <td>1397 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Long with spoon below</td>
                  <td>1805 - 1980 mm</td>
                  <td>71" - 78"</td>
                  <td>2210 - 2286 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Tall with spoon below</td>
                  <td>1220 - 1295 mm</td>
                  <td>48" - 51"</td>
                  <td>1422 - 1549 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>High in discharge (depending on the car model)</td>
                  <td>1995 - 2110 mm</td>
                  <td>78" - 83"</td>
                  <td>2235 - 2515 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>High of spoon in unloading</td>
                  <td>1170 - 1500 mm</td>
                  <td>46" - 59"</td>
                  <td>1321 -1727 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Gauge</td>
                  <td>380 - 915 mm</td>
                  <td>15" - 36"</td>
                  <td>457 - 1219 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Air pressure range</td>
                  <td>4.2 - 8.8 kg/cm2</td>
                  <td>60-125 psi</td>
                  <td>4.2 - 7.0 kg/cm2</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Hose diameter</td>
                  <td>20 - 25 mm</td>
                  <td>3/4" - 1"</td>
                  <td>25 - 32 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Full load cycle in seconds</td>
                  <td>6</td>
                  <td>6</td>
                  <td>7</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Bucket capacity</td>
                  <td>0.13 - 0.17 m3</td>
                  <td>4.6 - 6 ft3</td>
                  <td>0.21 - 0.28 m3</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Loading capacity</td>
                  <td>0.5 - 1 m3/min</td>
                  <td>18 - 36 ft3/min</td>
                  <td>0.99 - 1.41 m3/min</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Motors (air)</td>
                  <td>2</td>
                  <td>2</td>
                  <td>2</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Weight</td>
                  <td>1905 kg</td>
                  <td>4200 lb</td>
                  <td>3266 kg</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Air Consumption</td>
                  <td>7 m3 / min</td>
                  <td>250 cfm</td>
                  <td>300 cfm</td>
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