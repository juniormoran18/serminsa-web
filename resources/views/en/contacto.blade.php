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
  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner general">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row general">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile fa-3x"></i>
                <p>
                  Phone number: (51 1)713 4228 / 7134225<br>
                  <span>Monday-Friday (9am-1pm / 2pm-6:00pm)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fas fa-envelope-square fa-3x"></i>
                <p>
                  Email: serminsa@serminsa.com.pe<br>
                  <span>Web: www.serminsa.com</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker fa-3x"></i>
                <p>
                  Location: Calle 4, Mz. C Lote 6<br>
                  <span>Urb. Industrial Grimanesa, Callao-Perú</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <div class="iframe-container">
              <iframe width="500" height="305" id="gmap_canvas" src="https://maps.google.com/maps?q=serminsa&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
              </iframe>
            </div>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top:10px;">
            <div class="form contact-form">
              <!--<div id="sendmessage">Your message has been sent. Thank you!</div>-->
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Phone number" data-rule="minlen:4" data-msg="Inserte al menos 8 caracteres" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button class="btn btn-dark btn-lg btn-block" type="submit">Send</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

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