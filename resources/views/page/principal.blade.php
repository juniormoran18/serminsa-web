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
            <a class="navbar-brand" href="{{ route('es-inicio') }}" style="max-width: 20%; background: radial-gradient(#FFFFFF, #DADADA);"><img src="img/logo/logo.png" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navbar-light"></span>
             </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active border1">
                        <a class="nav-link a1" href="{{ route('es-inicio') }}" style="margin-right:8px; margin-left:8px;">INICIO <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item border1">
                        <a class="nav-link a1" href="{{ route('es-nosotros') }}" >NOSOTROS</a>
                    </li>
                    <li class="nav-item dropdown border1 border1">
                        <a class="nav-link dropdown-toggle a1" href="{{ route('es-productos') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">PRODUCTOS</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:rgba(249,249,249,0.8);">
                          <li class="dropdown-submenu dropright">
                            <a class="a1" tabindex="-1" href="{{ route('es-locomotoras') }}" style="padding-left:6px;">LOCOMOTORAS</a>
                            <!--<ul class="dropdown-menu" style="background:rgba(249,249,249,0.8);">
                                <li><a class="a1" tabindex="-1" href="{{ route('es-locomotoras') }}" style="padding-left:6px;">BATERIA</a></li>
                                <li><a class="a1" tabindex="-1" href="{{ route('es-locomotoras') }}" style="padding-left:6px;">TROLLEY</a></li>
                            </ul>-->
                          </li>
                          <li><a class="a1" tabindex="-1" href="{{ route('es-vagones') }}" style="padding-left:6px;">VAGONES</a></li>
                          <li><a class="a1" tabindex="-1" href="{{ route('es-palas') }}" style="padding-left:6px;">PALAS</a></li>
                          <li><a class="a1" tabindex="-1" href="{{ route('es-metalmecanica') }}" style="padding-left:6px;">METALMECANICA</a></li>
                          <li><a class="a1" tabindex="-1" href="{{ route('es-servicios') }}" style="padding-left:6px;">SERVICIOS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item border1 border1">
                        <a class="nav-link a1" href="{{ route('es-contacto') }}">CONTACTO</a>
                    </li>
                </ul>
                <img src="img/logo/english.png" style="height:1rem;"/> <a href="{{ route('en-inicio') }}">English</a>
                <!--<ul style="margin-top:1rem;">
                    <div class="search-box">
                        <a class="search-btn dropdown">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </ul>-->
            </div>
        </nav>
    <nav class="navbar navbar-expand-lg navbar-default  nav_hide">
        <a class="navbar-brand" href="{{ route('es-inicio') }}" style="max-width: 20%; background: radial-gradient(#FFFFFF, #DADADA);"><img src="img/logo/logo.png" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon navbar-light"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active border1">
                    <a class="nav-link a1" href="{{ route('es-inicio') }}" style="margin-right:8px; margin-left:8px;">INICIO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item border1">
                    <a class="nav-link a1" href="{{ route('es-nosotros') }}" >NOSOTROS</a>
                </li>
                <li class="nav-item dropdown border1 border1">
                    <a class="nav-link dropdown-toggle a1" href="{{ route('es-productos') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">PRODUCTOS</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:rgba(249,249,249,0.8);">
                        <li class="dropdown-submenu dropright">
                            <a class="a1" tabindex="-1" href="{{ route('es-locomotoras') }}" style="padding-left:6px;">LOCOMOTORAS</a>
                        <!--<ul class="dropdown-menu" style="background:rgba(249,249,249,0.8);">
                                <li><a class="a1" tabindex="-1" href="{{ route('es-locomotoras') }}" style="padding-left:6px;">BATERIA</a></li>
                                <li><a class="a1" tabindex="-1" href="{{ route('es-locomotoras') }}" style="padding-left:6px;">TROLLEY</a></li>
                            </ul>-->
                        </li>
                        <li><a class="a1" tabindex="-1" href="{{ route('es-vagones') }}" style="padding-left:6px;">VAGONES</a></li>
                        <li><a class="a1" tabindex="-1" href="{{ route('es-palas') }}" style="padding-left:6px;">PALAS</a></li>
                        <li><a class="a1" tabindex="-1" href="{{ route('es-metalmecanica') }}" style="padding-left:6px;">METALMECANICA</a></li>
                        <li><a class="a1" tabindex="-1" href="{{ route('es-servicios') }}" style="padding-left:6px;">SERVICIOS</a></li>
                    </ul>
                </li>
                <li class="nav-item border1 border1">
                    <a class="nav-link a1" href="{{ route('es-contacto') }}">CONTACTO</a>
                </li>
            </ul>
            <img src="img/logo/english.png" style="height:1rem;"/> <a href="{{ route('en-inicio') }}">English</a>
            <!--<ul style="margin-top:1rem;">
                <div class="search-box">
                    <a class="search-btn dropdown">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
            </ul>-->
        </div>
    </nav>
<!--end of nav -->        
         <div class="col-md-12 espacio"></div>
<!--content-->
         @yield('content')
        
 <!--footer-->
        <footer class="footer1 general5" style="background-color:#F0F0F0;" >
        <div class="container">
        <div class="row"><!-- row -->
                        <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                            <ul class="list-unstyled clear-margins"><!-- widgets -->
                                	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                            
                                        <h1 class="title-widget">Inicio</h1>
                                        
                                        <ul>
                                        	<li><a  href="index.html"><i class="fa fa-angle-double-right"></i> Inicio</a></li>
                                            <li><a  href="index.html#noticias"><i class="fa fa-angle-double-right"></i> Noticias</a></li>
                                            <li><a  href="index.html#clientes"><i class="fa fa-angle-double-right"></i> Clientes</a></li>
                                            
                                        </ul>
                            
        							</li>
                                    
                                </ul>
                                 
                              
                        </div><!-- widgets column left end -->
                        
                        
                        
                        <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                                
                                	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                            
                                        <h1 class="title-widget">Nosotros</h1>
                                        
                                        <ul>
         									<li><a  href="{{ route('es-nosotros') }}"><i class="fa fa-angle-double-right"></i>  ¿Quiénes somos?</a></li>
                                            <li><a  href="nosotros.html#historia"><i class="fa fa-angle-double-right"></i>  Historia</a></li>
                                            <li><a  href="nosotros.html#mision"><i class="fa fa-angle-double-right"></i>  Misión y visión</a></li>
                                            <li><a  href="nosotros.html#politica"><i class="fa fa-angle-double-right"></i>  Política de calidad</a></li>
                                        </ul>
                            
        							</li>
                                    
                                </ul>
                                 
                              
                        </div><!-- widgets column left end -->
                        
                        
                        
                        <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                                
                                	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                            
                                        <h1 class="title-widget">Productos</h1>
                                        
                                        <ul>
                                        <li><a href="{{ route('es-locomotoras') }}"><i class="fa fa-angle-double-right"></i> Locomotoras</a></li>
                         				<li><a href="{{ route('es-vagones') }}"><i class="fa fa-angle-double-right"></i> Vagones</a></li>
                        				<li><a href="{{ route('es-palas') }}"><i class="fa fa-angle-double-right"></i> Palas Eimco</a></li>
                        				<li><a href="{{ route('es-metalmecanica') }}"><i class="fa fa-angle-double-right"></i> Metalmecánica</a></li>
                        				<li><a href="{{ route('es-servicios') }}"><i class="fa fa-angle-double-right"></i> Servicios</a></li>
                                        </ul>
                            
        							</li>
                                    
                                </ul>
                                 
                              
                        </div><!-- widgets column left end -->
                        
                        
                        <div class="col-lg-3 col-md-3"><!-- widgets column center -->
                        
                           
                            
                                <ul class="list-unstyled clear-margins"><!-- widgets -->
                                
                                	<li class="widget-container widget_recent_news"><!-- widgets list -->
                            
                                        <h1 class="title-widget">Contacto </h1>
                                        
                                        <div class="footerp">
                                        
                                            <p><b>Email:</b> <a href="mailto:serminsa@serminsa.com.pe">serminsa@serminsa.com.pe</a></p>
                                            <p><b>Teléfonos:</b>
        
                                            <b style="color:#ffc106;">(9am a 6pm):</b>  <p>01 713 4228 / 01 7134225</p>
                                            <p><i class="fab fa-whatsapp-square fa-2x"></i> <a style="padding-left: 1rem;">989 167 440</a></p>
                                        </div>
        
                                        
                                        <div class="social-icons">
                                        
                                        	<ul class="nomargin">
                                            
                        <a href="https://www.facebook.com/pg/Serminsa-Oficial-2207308156147993/about/?ref=page_internal"><i class="fab fa-facebook-square fa-3x" id="social"></i></a>
        	             <a href="https://www.youtube.com/channel/UChNepOOwLW_8WzP8sa5egsw?view_as=subscriber"><i class="fab fa-youtube-square fa-3x social-tw" id="social"></i></a>
        	            <a href="https://www.linkedin.com/company/servicios-mineros-s-a/"><i class="fab fa-linkedin fa-3x social-gp" id="social"></i></a>
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
        
        					© 2018, Serminsa, Todos los derechos reservados
        
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
    <script type="text/javascript" src="/js/jquery.liveFilter.js"></script>
    
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
            window.open('{{ route('es-locomotoras') }}');
        })
        $('#btnref2').on('click', function() {
            window.open('{{ route('es-vagones') }}');
        })
        $('#btnref3').on('click', function() {
            window.open('{{ route('es-palas') }}');
        })
        $('#btnref4').on('click', function() {
            window.open('{{ route('es-metalmecanica') }}');
        })
        $('#btnref5').on('click', function() {
            window.open('{{ route('es-servicios') }}');
        })
        </script>

        <script type="text/javascript">
            $('#directory').liveFilter('#search-box', 'li', { filterChildSelector: '.name'});
        </script>
    
    
</body>
</html>