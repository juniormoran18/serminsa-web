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
                        <a class="nav-link dropdown-toggle a1" href="{{ route('en-productos') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">PRODUCTOS</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:rgba(249,249,249,0.8);">
                          <li class="dropdown-submenu dropright">
                            <a class="test a1" tabindex="-1" href="{{ route('en-locomotoras') }}" style="padding-left:6px;">LOCOMOTIVES</a>
                            <ul class="dropdown-menu" style="background:rgba(249,249,249,0.8);">
                                <li><a class="a1" tabindex="-1" href="{{ route('en-locomotoras') }}" style="padding-left:6px;">BATTERY</a></li>
                                <li><a class="a1" tabindex="-1" href="{{ route('en-locomotoras') }}" style="padding-left:6px;">TROLLEY</a></li>
                            </ul>
                          </li>
                          <li><a class="a1" tabindex="-1" href="{{ route('en-vagones') }}" style="padding-left:6px;">WAGONS</a></li>
                          <li><a class="a1" tabindex="-1" href="{{ route('en-palas') }}" style="padding-left:6px;">PALLAS</a></li>
                          <li><a class="a1" tabindex="-1" href="{{ route('en-metalmecanica') }}" style="padding-left:6px;">METALMECANICA</a></li>
                          <li><a class="a1" tabindex="-1" href="{{ route('en-servicios') }}" style="padding-left:6px;">SERVICES</a></li>
                        </ul>
                    </li>
                    <li class="nav-item border1 border1">
                        <a class="nav-link a1" href="{{ route('es-contacto') }}">CONTACT</a>
                    </li>
                </ul>
                <img src="img/logo/english.png" style="height:1rem;"/> <a href="{{ route('es-inicio') }}">Espanish</a>
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
         @yield('content')
        
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