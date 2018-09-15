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
    <div style="padding-top: 1em;">
        <div class="row" style="padding:2em 0 0;">
                <div class="col-md-10"><h2>Palas</h2></div>
                <div  class="col-md-2"><a href="#caract"><h5>Características</h5></a></div>
            </div>
        <div class="col-md-12 espacio1"  style="margin-bottom:1rem;"></div>
        <a>SERMINSA distribuye las Palas Originales EIMCO 12B Y 21B fabricadas con los más altos estándares de calidad ISO 9001 y 14001. Además de la Pala EIMCO 150/1000B Hooper Loader (equivalente a la Pala Cavo 310 de Atlas Copco).</a>
    </div>
    <div>
        <div class="row">
            <div class="col-md-5" style="padding-top: 2rem;">
                <h3>PALA MODELO 12B</h3>
                <a></a>
            </div>
            <div class="col-md-7" style="padding-top: 2rem; padding-left:6rem;">
                <img src="img/menu/pala.png" class="img-thumbnail" style="max-width:65%"> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-5" style="padding-top: 2rem;">
                <h3>PALA MODELO 21B</h3>
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
                  <th colspan="1" scope="col">Principales Características</th>
                  <th colspan="2" scope="col">Eimco 12B</th>
                  <th colspan="1" scope="col">Eimco 21B</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"></th>
                  <td>Ancho general</td>
                  <td>735 mm</td>
                  <td>29"</td>
                  <td>851 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Ancho de Operación</td>
                  <td>865 mm</td>
                  <td>34"</td>
                  <td>1067 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Largo General</td>
                  <td>1120 mm</td>
                  <td>44"</td>
                  <td>1397 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Largo con cuchara abajo</td>
                  <td>1805 - 1980 mm</td>
                  <td>71" - 78"</td>
                  <td>2210 - 2286 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Alto con cuchara abajo</td>
                  <td>1220 - 1295 mm</td>
                  <td>48" - 51"</td>
                  <td>1422 - 1549 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Alto en descarga (dependiendo del modelo de carro)</td>
                  <td>1995 - 2110 mm</td>
                  <td>78" - 83"</td>
                  <td>2235 - 2515 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Alto de cuchara en descarga</td>
                  <td>1170 - 1500 mm</td>
                  <td>46" - 59"</td>
                  <td>1321 -1727 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Trocha</td>
                  <td>380 - 915 mm</td>
                  <td>15" - 36"</td>
                  <td>457 - 1219 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Rango de presión de aire</td>
                  <td>4.2 - 8.8 kg/cm2</td>
                  <td>60-125 psi</td>
                  <td>4.2 - 7.0 kg/cm2</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Diámetro de manguera</td>
                  <td>20 - 25 mm</td>
                  <td>3/4" - 1"</td>
                  <td>25 - 32 mm</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Ciclo de carga completo en segundos</td>
                  <td>6</td>
                  <td>6</td>
                  <td>7</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Capacidad de cuchara</td>
                  <td>0.13 - 0.17 m3</td>
                  <td>4.6 - 6 ft3</td>
                  <td>0.21 - 0.28 m3</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Capacidad de carga</td>
                  <td>0.5 - 1 m3/min</td>
                  <td>18 - 36 ft3/min</td>
                  <td>0.99 - 1.41 m3/min</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Motores(aires)</td>
                  <td>2</td>
                  <td>2</td>
                  <td>2</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Peso</td>
                  <td>1905 kg</td>
                  <td>4200 lb</td>
                  <td>3266 kg</td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td>Consumo de Aire</td>
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

@endsection