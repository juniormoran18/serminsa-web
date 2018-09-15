@extends ('page.principal')

@section('content')

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
                <div class="col-md-9"><h2>CARROS MINEROS</h2></div>
                <div  class="col-md-1"><a href="#U-35"><h5>U-35 / V-40</h5></a></div>
                <div  class="col-md-1"><a href="#gramby"><h5>Gramby</h5></a></div>
                <div  class="col-md-1"><a href="#otros"><h5>Otros</h5></a></div>
            </div>
        <div class="col-md-12 espacio1"  style="margin-bottom:1rem;"></div>
        <a>SERMINSA fabrica todo tipo de carros mineros: Tipo U-35, V-40, Gramby con capacidades desde 60p3 hasta 180p3, tipo Kiruna y otros modelos de diseño especial. Los carros SERMINSA son de fabricación robusta, respetando las especificaciones tanto en calidad de soldadura así como calidad y espesor de acero. Asimismo, se fabrican a pedido del cliente con planchas anti-desgaste, todo lo cual lleva a obtener una vida útil superior al estándar. </a>
    </div>
    <div id="U-35">
         <div class="row">
            <div class="col-md-6" style="padding-top: 2rem;">
                <h5>CARROS U-35 / V-40</h5>
                <a style="">Carros de volteo lateral (tolva móvil) utilizados para el acarreo a mano y con locomotora, poseen seguros de volteo de tipo manual y de pie.</a>
            </div>
            
            <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
                <img src="img/vagones/img2.png" class="img-thumbnail" style="max-width:85%"> 
            </div>
            <div>
                <h5 style="padding-left:1rem;">CUADRO DE DIMENSIONES GENERALES PARA CARROS TIPO "U" Y "V-40"</h5>
            </div>
        </div>
        
        <div style="padding-top:2rem">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col"></th>
                  <th colspan="4" scope="col">Medidas de Tolva (mm)</th>
                  <th colspan="4" scope="col">Dimensiones Principales (mm)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Capacidad</th>
                  <th scope="col">Alt/s Riel</th>
                  <th scope="col">Trocha (mm)</th>
                  <th scope="col">Long. Total</th>
                  <th scope="col">Ancho Total</th>
                  <th scope="col">Ancho Tolva</th>
                  <th scope="col">Altura Tolva</th>
                  <th scope="col">Peso Total/ Kg.</th>
                  <th scope="col">Dia. Rueda</th>
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
                <a style="">Los tradicionales carros mineros tipo Gramby son ampliamente utilizados en operaciones mineras subterráneas donde se requiere altos volúmenes de extracción a bajo costo. Estos robustos carros están disponibles en capacidades desde 60 pies cúbicos hasta 180 pies cúbicos.</a>
            </div>
            <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
                <img src="img/vagones/Vagon.png" class="img-thumbnail" style="max-width:100%"> 
            </div>
            <div>
                <h5 style="padding-left:1rem;">CUADRO DE DIMENSIONES GENERALES PARA CARROS GRAMBY DE 60 A 180 p3</h5>
            </div>
        </div>
        <div style="padding-top: 2rem;">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col"></th>
                  <th colspan="5" scope="col">Dimensiones Principales (mm)</th>
                  <th colspan="5" scope="col">Medidas de Tolva (mm)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Capacidad</th>
                  <th scope="col">Alt. al Riel</th>
                  <th scope="col">Dist. Ejes</th>
                  <th scope="col">Trocha (mm)</th>
                  <th scope="col">Long. Total</th>
                  <th scope="col">Ancho Total</th>
                  <th scope="col">Long. Int. Tolva</th>
                  <th scope="col">Ancho Tolva</th>
                  <th scope="col">Altura Tolva</th>
                  <th scope="col">Peso Total / kg.</th>
                  <th scope="col">Dia. Rueda</th>
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
            <a style="">Los shuttlecars están diseñados para operar eficientemente en áreas de trabajo estrechas o limitadas con la capacidad de lograr un rápido transporte dentro y fuera del túnel.</a>
        </div>
            <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
                <img src="img/vagones/Vagon.png" class="img-thumbnail" style="max-width:100%"> 
            </div>
    </div>
    <div class="col-md-12 espacio1"  style="margin-bottom:2rem; margin-top:4rem;"></div>
    <div class="row">
        <div class="col-md-6" style="padding-top: 2rem;">
            <h5>CALESAS PARA TRANSPORTE DE PERSONAL</h5>
            <a style="">Utilizadas para el transporte de personal tanto en minas como en construcción de túneles. La capacidad y otras especificaciones de los vagones son determinados junto con el cliente.</a>
        </div>
            <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
                <img src="img/vagones/Vagon.png" class="img-thumbnail" style="max-width:100%"> 
            </div>
    </div>
    <div class="col-md-12 espacio1"  style="margin-bottom:2rem; margin-top:4rem;"></div>
    <div class="row">
        <div class="col-md-6" style="padding-top: 2rem;">
            <h5>PLATAFORMAS</h5>
            <a style="">Fabricamos  todo tipo de plataformas para las distintas industrias ferroviarias y afines. Acondicionamos Sistemas de frenos para equipos con neumáticos a fin de poder ser transportados y operados también en rieles.</a>
        </div>
            <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
                <img src="img/vagones/Vagon.png" class="img-thumbnail" style="max-width:100%"> 
            </div>
    </div>
    
</div>

@endsection