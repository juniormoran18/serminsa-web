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
<div class="col-md-12 espacio">.</div>
<!--content-->

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

    <div class="container">
        <div >
            <div class="row" style="padding:2em 0 0;">
                <div class="col-md-10"><h2>Locomotoras</h2></div>
                <div  class="col-md-1" ><a  href="#bateria" >Bateria</a></div>
                <div  class="col-md-1" href="#trolley"><a  href="#trolley">Trolley</a></div>
            </div>
            <div class="col-md-12 espacio1"  style="margin-bottom:1rem;"></div>
            <a>SERMINSA manufactures the line of electric locomotives brand BEV (British Electric Vehicles), to Battery and / or Trolley, from 2 to 20 metric tons of weight, for loads up to 200 TM. These equipments are manufactured under the highest quality standards in design, procurement of materials, components and manufacturing, to meet the demanding requirements of extraction of materials in mine interior.</a>
        </div>
        <div name="bateria" id="bateria" class="cold-md-12 subtitulo" style="padding:2em 0; padding-bottom:1em;"><h3>Battery Locomotives</h3></div>
        <a>Powered and energized by electric batteries.</a>
        <div class="row" style="padding-top:2rem;">
            <div class="col-md-3">
                <a href="{{ route('es-wr8') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;" >WR8</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR8-2.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('es-wr9') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR9</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR9.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr19') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR19</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR19.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr20') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR20</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR20.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr25') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR25</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR25.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr35') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR35</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR35.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr50') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <spa style="margin-right:8em;">WR50</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR50.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-12 espacio1"  style="margin-bottom:3rem; margin-top:3rem;"></div>
        <div name="trolley" id="trolley" class="cold-md-12 subtitulo" style="padding:2em 0;"><h3>Trolley locomotives</h3></div>
        <a>Powered and energized by an external source such as the catenary.</a>
        <div class="row" style="padding-top:2rem;">
            <div class="col-sm-3">
                <a href="{{ route('es-wr30t') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR30T de 4TN</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR30T.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr60t') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR60T de 6TN</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR60T.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr90t') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR90T de 8TN</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR90T.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr90t') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR90T de 10TN</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR90T.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr120t') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR120T de 12TN</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR120T.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr150t') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR150T de 12TN</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR150T.png" class="img-thumbnail">  
                    </div>
                </a>
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