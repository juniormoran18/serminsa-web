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

<!--Contenido-->
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
                <div class="col-md-9"><h2>MINING CARTS</h2></div>
                <div  class="col-md-1"><a href="#U-35"><h5>U-35 / V-40</h5></a></div>
                <div  class="col-md-1"><a href="#gramby"><h5>Gramby</h5></a></div>
                <div  class="col-md-1"><a href="#otros"><h5>Others</h5></a></div>
            </div>
        <div class="col-md-12 espacio1"  style="margin-bottom:1rem;"></div>
        <a>SERMINSA manufactures all types of mining cars: Type U-35, V-40, Gramby with capacities from 60p3 to 180p3, Kiruna type and other special design models. The SERMINSA trolleys are of robust manufacture, respecting the specifications both in welding quality as well as steel quality and thickness. Likewise, they are manufactured at the customer's request with anti-wear plates, all of which leads to a longer life than the standard. </a>
    </div>
    <div id="U-35">
         <div class="row">
            <div class="col-md-6" style="padding-top: 2rem;">
                <h5>CARS U-35 / V-40</h5>
                <a style="">Side dump trucks (mobile hopper) used for hauling by hand and with locomotive, have manual and foot-type dump locks.</a>
            </div>
            
            <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
                <img src="img/vagones/img2.png" class="img-thumbnail" style="max-width:85%"> 
            </div>
            <div>
                <h5 style="padding-left:1rem;">GENERAL DIMENSIONS TABLE FOR "U" AND "V-40" TYPE CARS</h5>
            </div>
        </div>
        
        <div style="padding-top:2rem">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col"></th>
                  <th colspan="4" scope="col">Hopper measurements (mm)</th>
                  <th colspan="4" scope="col">Main Dimensions (mm)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Capacity</th>
                  <th scope="col">Height Rail</th>
                  <th scope="col">Gauge (mm)</th>
                  <th scope="col">Length Total</th>
                  <th scope="col">Width Total</th>
                  <th scope="col">Width Tolva</th>
                  <th scope="col">Height Tolva</th>
                  <th scope="col">Weight Total/ Kg.</th>
                  <th scope="col">Diameter Wheel</th>
                </tr>
                <tr>
                  <th scope="row">U-21</th>
                  <td>1150</td>
                  <td>500</td>
                  <td>1610</td>
                  <td>680</td>
                  <td>680</td>
                  <td>750</td>
                  <td>450</td>
                  <td>12 pulg.</td>
                </tr>
                <tr>
                  <th scope="row">U-35</th>
                  <td>1250</td>
                  <td>500</td>
                  <td>2030</td>
                  <td>810</td>
                  <td>800</td>
                  <td>890</td>
                  <td>620</td>
                  <td>12 pulg.</td>
                </tr>
                <tr>
                  <th scope="row">V40</th>
                  <td>1313</td>
                  <td>500</td>
                  <td>2457</td>
                  <td>1032</td>
                  <td>965</td>
                  <td>806</td>
                  <td>1220</td>
                  <td>14 pulg.</td>
                </tr>
                </tr>
              </tbody>
            </table>
            
        </div>
    </div>
    <div class="col-md-12 espacio1"  style="margin-bottom:2rem; margin-top:4rem;"></div>
    <div id="gramby">
        <div class="row">
            <div class="col-md-6" style="padding-top: 2rem;">
                <h5> GRAMBY de 60 a 180 p3</h5>
                <a style="">The traditional Gramby mining cars are widely used in underground mining operations where high volumes of extraction are required at low cost. These robust trucks are available in capacities from 60 cubic feet to 180 cubic feet.</a>
            </div>
            <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
                <img src="img/vagones/Vagon.png" class="img-thumbnail" style="max-width:100%"> 
            </div>
            <div>
                <h5 style="padding-left:1rem;">TABLE OF GENERAL DIMENSIONS FOR GRAMBY CARS FROM 60 TO 180 p3</h5>
            </div>
        </div>
        <div style="padding-top: 2rem;">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col"></th>
                  <th colspan="5" scope="col">Main Dimensions (mm)</th>
                  <th colspan="5" scope="col">Hopper measurements (mm)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Capacity</th>
                  <th scope="col">Height Rail</th>
                  <th scope="col">Distance Ejes</th>
                  <th scope="col">Gauge (mm)</th>
                  <th scope="col">Length Total</th>
                  <th scope="col">Weight Total</th>
                  <th scope="col">Length Int. Tolva</th>
                  <th scope="col">Width Tolva</th>
                  <th scope="col">Height Tolva</th>
                  <th scope="col">Weight Total / kg.</th>
                  <th scope="col">Diameter Wheel</th>
                </tr>
                <tr>
                  <th scope="row">60 p3</th>
                  <td>1358</td>
                  <td>833</td>
                  <td>500/600/750</td>
                  <td>2041</td>
                  <td> </td>
                  <td>1927</td>
                  <td>1150</td>
                  <td>785</td>
                  <td> </td>
                  <td> </td>
                </tr>
                <tr>
                  <th scope="row">80 p3</th>
                  <td>1398</td>
                  <td>1060</td>
                  <td>500/600</td>
                  <td>3120</td>
                  <td> </td>
                  <td>2665</td>
                  <td>1200</td>
                  <td>805</td>
                  <td> </td>
                  <td> </td>
                </tr>
                <tr>
                  <th scope="row">100 p3</th>
                  <td>1386</td>
                  <td>1070</td>
                  <td>600</td>
                  <td>3810</td>
                  <td> </td>
                  <td>2700</td>
                  <td>1345</td>
                  <td>800</td>
                  <td> </td>
                  <td> </td>
                </tr>
                <tr>
                  <th scope="row">110 p3</th>
                  <td>1580</td>
                  <td>1220</td>
                  <td>600/750</td>
                  <td>3880</td>
                  <td> </td>
                  <td>2795</td>
                  <td>1219</td>
                  <td>990</td>
                  <td> </td>
                  <td> </td>
                </tr>
                <tr>
                  <th scope="row">120 p3</th>
                  <td>1537</td>
                  <td>1060</td>
                  <td>600/762</td>
                  <td>3454</td>
                  <td> </td>
                  <td>2885</td>
                  <td>1300</td>
                  <td>930</td>
                  <td> </td>
                  <td> </td>
                </tr>
                <tr>
                  <th scope="row">135 p3</th>
                  <td>1580</td>
                  <td>1220</td>
                  <td>600</td>
                  <td>3632</td>
                  <td> </td>
                  <td>3150</td>
                  <td>1219</td>
                  <td>990</td>
                  <td> </td>
                  <td> </td>
                </tr>
                <tr>
                  <th scope="row">140 p3</th>
                  <td>1651</td>
                  <td>1050</td>
                  <td>750</td>
                  <td>3400</td>
                  <td> </td>
                  <td>2854</td>
                  <td>1365</td>
                  <td>1044</td>
                  <td> </td>
                  <td> </td>
                </tr>
                <tr>
                  <th scope="row">160 p3</th>
                  <td>1544</td>
                  <td>1215</td>
                  <td>762</td>
                  <td>3980</td>
                  <td> </td>
                  <td>3250</td>
                  <td>1370</td>
                  <td>960</td>
                  <td> </td>
                  <td> </td>
                </tr>
                <tr>
                  <th scope="row">180 p3</th>
                  <td>1711</td>
                  <td>1215</td>
                  <td>762</td>
                  <td>4000</td>
                  <td> </td>
                  <td>3520</td>
                  <td>1370</td>
                  <td>1100</td>
                  <td> </td>
                  <td> </td>
                </tr>
                </tr>
              </tbody>
            </table>
            
        </div>
    </div>
    
    <div class="col-md-12 espacio1"  style="margin-bottom:2rem; margin-top:4rem;"></div>
          <h3>OTROS</h3>
    <div class="row">
        <div class="col-md-6" style="padding-top: 2rem;">
            <h5>SHUTTLECARS</h5>
            <a style="">The shuttlecars are designed to operate efficiently in narrow or limited work areas with the ability to achieve rapid transport in and out of the tunnel.</a>
        </div>
            <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
                <img src="img/vagones/Vagon.png" class="img-thumbnail" style="max-width:100%"> 
            </div>
    </div>
    <div class="col-md-12 espacio1"  style="margin-bottom:2rem; margin-top:4rem;"></div>
    <div class="row">
        <div class="col-md-6" style="padding-top: 2rem;">
            <h5>CALESAS FOR TRANSPORTATION OF PERSONNEL</h5>
            <a style="">Used for the transport of personnel both in mines and in the construction of tunnels. The capacity and other specifications of the wagons are determined together with the customer.</a>
        </div>
            <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
                <img src="img/vagones/Vagon.png" class="img-thumbnail" style="max-width:100%"> 
            </div>
    </div>
    <div class="col-md-12 espacio1"  style="margin-bottom:2rem; margin-top:4rem;"></div>
    <div class="row">
        <div class="col-md-6" style="padding-top: 2rem;">
            <h5>PLATFORMS</h5>
            <a style="">We manufacture all kinds of platforms for the different railway and related industries. Conditioning braking systems for equipment with tires in order to be transported and operated also on rails.</a>
        </div>
            <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
                <img src="img/vagones/Vagon.png" class="img-thumbnail" style="max-width:100%"> 
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