@extends ('page.principal')

@section('content')


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
        <a>Con la finalidad de brindarle nuevas soluciones a la necesidad de sus clientes, SERMINSA pone a disposición su área de METAL MECÁNICA, la cual ha sido creada para brindarle los siguientes productos:</a>
            <div>
                <div>
                    <p>1.	Diseño y fabricación de estructuras:</p>
                    <a>
                        •	Nos especializamos en el desarrollo y fabricación de estructuras metálicas, tanques reservorios, escaleras metálicas, racks de equipos y proyectos de acuerdo a las necesidades del cliente.
                    </a>
                </div>
                <div>
                    <p>2.	Servicios de soldadura (GMAW-FCAW-SMAW):</p>
                    <a style="padding: 2rem;">•	Contamos con soldadores homologados e inspectores de soldadura, ofreciendo así la mejor calidad en servicios de soldadura y recuperación de piezas a través de los procesos de soldadura MIG, Eléctrica y Autógena.
                    </a>
                </div>
                <div>
                    <p>3.	Mecanizado de piezas (Tornos verticales, fresadoras)</p>
                    <p>
                        •	Contamos con maquinaria, equipamiento y profesionales altamente calificados para atender sus necesidades de maestranza, tales como: Maquinado de piezas en tornos convencionales, fresadoras y taladros.
                    </p>
                    <p>
                        •	Fabricación de piñones, engranajes, y repuestos para maquinaria en general.
                    </p>
                    <p>
                        •	Fabricación de ejes, coronas de bronce y ruedas.
                    </p>
                </div>
            </div>
        </div>

            <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
                <img src="img/menu/metalmecanica.png" class="img-thumbnail" style="max-width:75%">
                <img src="img/Metal/Tanque-2.jpg" class="img-thumbnail" style="max-width:75%">
                <img src="img/Metal/Tanque-3.jpg" class="img-thumbnail" style="max-width:75%">
            </div>
    </div>
    
    
</div>

@endsection