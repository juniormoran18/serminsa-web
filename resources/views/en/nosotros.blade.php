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

 </div>
        <div class="col-md-12 col-sm-12 col-xs-12" style="padding:3rem;">
          <div class="tab-menu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="active pad" style="background-color:#122087;">
                <a class="active" href="#p-view-1" role="tab" data-toggle="tab" style="color:#F9F9F9;">About us?</a>
              </li>
              <li class="pad" style="background-color:#122087;">
                <a href="#p-view-2" role="tab" data-toggle="tab" style="color:#F9F9F9;">History</a>
              </li>
              <li class="pad" style="background-color:#122087;">
                <a href="#p-view-3" role="tab" data-toggle="tab" style="color:#F9F9F9;">Vision and mission</a>
              </li>
              <li class="pad" style="background-color:#122087;">
                <a href="#p-view-4" role="tab" data-toggle="tab" style="color:#F9F9F9;">Quality Policies</a>
              </li>
            </ul>
          </div>
          <div class="tab-content general5">
            <div class="tab-pane active" id="p-view-1">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>About us?</h4>
                  <div class="row">
                    <div class="col-md-7">
                      <p>
                        SERMINSA is a Peruvian company with more than 44 years of existence, dedicated to the manufacture and service of machinery and equipment for transport on rails, both in the mining industry and in construction and railways. SERMINSA is one of the main companies that supply electric locomotives and wagons for the transport of minerals, waste, materials or people, with presence in several countries of the region - Peru, Colombia, Ecuador, Bolivia and Chile 
                      </p>
                      <p>
                        For this, it has a Design Engineering area that calculates and designs the machinery and equipment to be supplied, an Operations and Plant area with highly trained engineers and a fully equipped infrastructure and plant, as well as a Technical Service area that advises and assists its clients during the pre and post sale process of the equipment.
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img src="img/noticias/img1.jpg" class="img-fluid rounded" alt="Responsive image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-2">
              <div class="tab-inner" id="historia">
                <div class="event-content head-team">
                  <h4>History</h4>
                  <div class="row">
                    <div class="col-md-7">
                      <p>
                        SERMINSA, trade name and acronym of Servicios Mineros S.A. started activities in January 1974 as representative in Peru of important mining equipment manufacturers in Great Britain, the United States, Finland, etc. After several years of service, SERMINSA is consolidated as the main supplier of mining locomotives, traction batteries, mining lamps, transport equipment, drilling, etc.
                      </p>
                      <p>
                        Thus, it consolidates its leadership by implementing a well-implemented service and repairs workshop for mining equipment, which is then complemented to start the machinery manufacturing process. In 2006, SERMINSA acquired from PIKROSE LTD. of England the engineering of the designs of locomotives BEV (British Electric Vehicles), and initiates the process of manufacturing of the whole line of electric locomotives that currently work in the main mining companies of Peru, and also in countries of the region such as Colombia, Ecuador, Bolivia and Chile. Then this line of locomotives is complemented with the complete line of wagons (mining cars) to complete the systems of extraction of minerals on rails.
                      </p>
                      <p>
                        In 2014, SERMINSA obtained the representation of EIMCO ELECON Ltd. of India, the original manufacturer of the EIMCO Pneumatic Blades line, as well as various mineral loading equipment, thus complementing its line of locomotives and wagons, offers complete loading and transport systems on rails.
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img src="img/noticias/img1.jpg" class="img-fluid rounded" alt="Responsive image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-3">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Vision</h4>
                  <div class="row">
                    <div class="col-md-7">
                      <p>
                        To become through the continuous improvement of our processes and services, in a reference in the industry of the manufacture of machinery and equipment, which exceed the expectations of our customers and are recognized nationally and internationally.
                      </p>
                      <h4>Mission</h4>
                      <p>
                        
Design and manufacture efficient and safe machinery and equipment that contribute to the constant productivity of our customers. This, along with a culture of continuous improvement of our production processes and respect for the environment, our environment, and the professional growth of our employees.
                      </p>
                    </div>
                    <div class="col-md-5">
                      <img src="img/noticias/img1.jpg" class="img-fluid rounded" alt="Responsive image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-4">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Quality politics</h4>
                  <div class="row">
                    <div class="col-md-7">
                      <p>
                        SERVICIOS MINEROS S.A- SERMINSA, seeks to be the engineering company of machinery and equipment of global reach, being leaders in the design and manufacture of mining equipment, for which we commit ourselves to:
                      </p>
                      <div style="margin:2rem;">
                        <p>
                          Ensure compliance with the requirements agreed with our customers.
                        </p>
                        <p>
                          Establish standards of operational excellence in their products and services, which allow to achieve the satisfaction of their customers, in terms of performance, duration and cost of their equipment.
                        </p>
                        <p>
                          Monitor the efficiency of our manufacturing and design processes, applying quality control points and analyzing results.
                        </p>
                        <p>
                          Encourage continuous improvement and professional development in its employees, providing the necessary resources to achieve the quality objectives that stem from this policy.
                        </p>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <img src="img/noticias/img1.jpg" class="img-fluid rounded" alt="Responsive image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
  
  <div class="col-md-12 espacio1"></div>


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