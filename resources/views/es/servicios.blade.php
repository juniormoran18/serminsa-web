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
        <h3>SERVICIOS</h3>
        <a>SERMINSA fabrica todo tipo de carros mineros: Tipo U-35, V-40. gramby con capacidades desde 60p3 hasta 180p3, tipo Kurina y otros modelos de diseño especial. Los carros SERMINSA son de fabricaciópn robusta, respetando las especificaciones tanto en calidad de soldadura asi como calidad y espesor de acero. Asímismo, se fabrican a pedido del cliente con planchas antidesgaste, todo lo cual lleva a obtener una vida útil superior al estándar.</a>
    </div>
    <div>
         <div class="row">
            <div class="col-md-5" style="padding-top: 2rem;">
                <h5> U-35 / V-40</h5>
                <a style="">Los tradicionales carros mineros tipo Granby son ampliamente utilizados en operaciones mineras subterraneas donde se requiere altos volúmenes de extracción a bajo costo. Estos robustos carros están disponibles en capacidades desde 40 pies cúbicos hasta 180 pies cúbicos.</a>
            </div>
            <div class="col-md-7" style="padding-top: 2rem; padding-left:6rem;">
                <img src="img/vagones/img2.png" class="img-thumbnail" style="max-width:55%"> 
            </div>
        </div>
        <div>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col"></th>
                  <th colspan="3" scope="col">Medidas de Tolva (mm)</th>
                  <th colspan="4" scope="col">Dimensiones Principales (mm)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Capacidad</th>
                  <td>Alt/ s Riel</td>
                  <td>Long. Total</td>
                  <td>Ancho Total</td>
                  <td>Ancho Tolva</td>
                  <td>Altura Tolva</td>
                  <td>Peso Total/ Kg.</td>
                  <td>Sia. Rueda</td>
                </tr>
                <tr>
                  <th scope="row">U-21</th>
                  <td>1927</td>
                  <td>1150</td>
                  <td>785</td>
                  <td>1358</td>
                  <td>833</td>
                  <td>2401</td>
                  <td>500/600/750</td>
                </tr>
                <tr>
                  <th scope="row">U-35</th>
                  <td>2665</td>
                  <td>1200</td>
                  <td>805</td>
                  <td>1398</td>
                  <td>1060</td>
                  <td>3120</td>
                  <td>500/600</td>
                </tr>
                <tr>
                  <th scope="row">V40</th>
                  <td>2700</td>
                  <td>1345</td>
                  <td>800</td>
                  <td>1386</td>
                  <td>1070</td>
                  <td>3810</td>
                  <td>600</td>
                </tr>
                </tr>
              </tbody>
            </table>
            
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-md-5" style="padding-top: 2rem;">
                <h5> GRAMBY de 60 a 180 p3</h5>
                <a style="">Los tradicionales carros mineros tipo Granby son ampliamente utilizados en operaciones mineras subterraneas donde se requiere altos volúmenes de extracción a bajo costo. Estos robustos carros están disponibles en capacidades desde 40 pies cúbicos hasta 180 pies cúbicos.</a>
            </div>
            <div class="col-md-7" style="padding-top: 2rem; padding-left:6rem;">
                <img src="img/vagones/Vagon.png" class="img-thumbnail"> 
            </div>
        </div>
        <div style="padding-top: 2rem;">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col"></th>
                  <th colspan="3" scope="col">Medidas de Tolva (mm)</th>
                  <th colspan="4" scope="col">Dimensiones Principales (mm)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Capacidad</th>
                  <td>Long. Int. Tolva</td>
                  <td>Ancho int. Tolva</td>
                  <td>Alto. Int. Tolva</td>
                  <td>Alt. al Riel</td>
                  <td>Dist. Ejes</td>
                  <td>Long. Total</td>
                  <td>Trocha (mm)</td>
                </tr>
                <tr>
                  <th scope="row">60 p3</th>
                  <td>1927</td>
                  <td>1150</td>
                  <td>785</td>
                  <td>1358</td>
                  <td>833</td>
                  <td>2401</td>
                  <td>500/600/750</td>
                </tr>
                <tr>
                  <th scope="row">80 p3</th>
                  <td>2665</td>
                  <td>1200</td>
                  <td>805</td>
                  <td>1398</td>
                  <td>1060</td>
                  <td>3120</td>
                  <td>500/600</td>
                </tr>
                <tr>
                  <th scope="row">100 p3</th>
                  <td>2700</td>
                  <td>1345</td>
                  <td>800</td>
                  <td>1386</td>
                  <td>1070</td>
                  <td>3810</td>
                  <td>600</td>
                </tr>
                <tr>
                  <th scope="row">110 p3</th>
                  <td>2795</td>
                  <td>1219</td>
                  <td>990</td>
                  <td>1580</td>
                  <td>1220</td>
                  <td>3880</td>
                  <td>600/750</td>
                </tr>
                <tr>
                  <th scope="row">120 p3</th>
                  <td>2885</td>
                  <td>1300</td>
                  <td>930</td>
                  <td>1537</td>
                  <td>1060</td>
                  <td>3454</td>
                  <td>600/762</td>
                </tr>
                <tr>
                  <th scope="row">135 p3</th>
                  <td>3150</td>
                  <td>1219</td>
                  <td>990</td>
                  <td>1580</td>
                  <td>1220</td>
                  <td>3632</td>
                  <td>600</td>
                </tr>
                <tr>
                  <th scope="row">140 p3</th>
                  <td>1927</td>
                  <td>1150</td>
                  <td>785</td>
                  <td>1358</td>
                  <td>833</td>
                  <td>2401</td>
                  <td>500/600/750</td>
                </tr>
                <tr>
                  <th scope="row">160 p3</th>
                  <td>1927</td>
                  <td>1150</td>
                  <td>785</td>
                  <td>1358</td>
                  <td>833</td>
                  <td>2401</td>
                  <td>500/600/750</td>
                </tr>
                <tr>
                  <th scope="row">180 p3</th>
                  <td>1927</td>
                  <td>1150</td>
                  <td>785</td>
                  <td>1358</td>
                  <td>833</td>
                  <td>2401</td>
                  <td>500/600/750</td>
                </tr>
                </tr>
              </tbody>
            </table>
            
        </div>
    </div>
    
</div>

@endsection