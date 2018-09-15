@extends ('page.principal')

@section('content')


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
                  <h2>SISTEMAS DE TRANSPORTE SOBRE RIELES</h2>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slider/P-2.jpg" alt="Second slide">
              <div class="carousel-caption a3" style="background-color: rgba(0,0,0,0.5);">
                  <h2>45 AÑOS AL SERVICIO DE LA INDUSTRIA</h2>
              </div>
            </div>
            <div class="carousel-item" >
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
<!-- Contenido -->

<div class="container">
    <div style="padding-top: 2rem;">
        <h3>METALMECANICA</h3>
    </div>
    <div class="row">
        <div class="col-md-6" style="padding-top: 2rem;">
        <a>Nuestra División de Diseño y Metalmecánica fabrica tanques, estructuras, plataformas, etc. en acero estructural e inoxidable. Las fabricaciones son bajo estándares internacionales, con personal homologado en procesos de soldadura GMAW-FCAW-SMAW y con una planta de fabricación completa.  </a>
        </div>
            <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
                <img src="img/menu/metalmecanica.png" class="img-thumbnail" style="max-width:100%"> 
            </div>
    </div>
    
    
</div>

@endsection