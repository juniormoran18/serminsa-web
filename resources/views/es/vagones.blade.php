@extends ('page.principal')

@section('content')

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
                <div class="col-md-9"><h2>VAGONES</h2></div>
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
<<<<<<< HEAD
                <img src="img/vagones/U35.jpg" class="img-thumbnail" style="max-width:85%">
=======
                <img src="img/vagones/u35.jpg" class="img-thumbnail" style="max-width:85%">
>>>>>>> e4dbbb94d0e6ed75fe699712d79bf609a1079426
            </div>
            <div>
                <h5 style="padding-left:1rem;">CUADRO DE DIMENSIONES GENERALES PARA CARROS TIPO "U" Y "V-40"</h5>
            </div>
        </div>
        
        <div style="padding-top:2rem">
            <table class="table">
              <thead class="thead-dark">
                <tr>

                  <th colspan ="2" scope="col" style="background: white; border:0;"></th>
                  <th colspan="7" scope="col" class="text-center">Dimensiones Principales (mm)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Modelo</th>
                  <th scope="col">Capacidad(p3)</th>
                  <th scope="col">Alt/s Riel</th>
                    <th scope="col">Dist. Ejes</th>
                  <th scope="col">Trocha (mm)</th>
                  <th scope="col">Long. Total</th>
                    <th scope="col">Ancho Total</th>
                    <th scope="col">Dia. Rueda</th>
                  <th scope="col">Peso Total/ Kg.</th>

                </tr>
                <tr>
                  <th scope="row">U-21</th>
                    <th scope="row">21</th>
                  <td>1150</td>
                  <td>620</td>
                  <td>500/600</td>
                  <td>1610</td>
                  <td>680</td>
                  <td>12 pulg.</td>
                  <td>450Kg</td>
                </tr>
                <tr>
                  <th scope="row">U-35</th>
                    <th scope="row">35</th>
                  <td>1250</td>
                  <td>620</td>
                  <td>500/600</td>
                  <td>1610</td>
                    <td>810</td>
                  <td>12 pulg.</td>
                  <td>620Kg</td>

                </tr>
                <tr>
                  <th scope="row">V40</th>
                    <th scope="row">40</th>
                  <td>1313</td>
                  <td>620</td>
                  <td>500/600</td>
                  <td>2155</td>
                  <td>1045</td>
                  <td>14 pulg.</td>
                  <td>1220Kg</td>
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
                    <th colspan ="2" scope="col" style="background: white; border:0;"></th>
                  <th colspan="7" scope="col" class="text-center">Dimensiones Principales (mm)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <th scope="row">Modelo</th>
                  <th scope="row">Capacidad (p3)</th>
                  <th scope="col">Alt/s Riel</th>
                  <th scope="col">Dist. Ejes</th>
                  <th scope="col">Trocha (mm)</th>
                  <th scope="col">Long. Total</th>
                  <th scope="col">Ancho Total</th>
                  <th scope="col">Dia. Rueda</th>
                  <th scope="col">Peso Total / kg.</th>
                </tr>
                <tr>
                  <th scope="row">60 p3 - Retráctil</th>
                    <th scope="row">60</th>
                  <td>1358</td>
                  <td>834</td>
                  <td>500/600/750</td>
                  <td>2041</td>
                  <td>1357</td>
                  <td>14 pulg.</td>
                  <td>1840 Kg</td>
                </tr>
                <tr>
                  <th scope="row">80 p3 - Fija</th>
                    <th scope="row">80</th>
                  <td>1398</td>
                  <td>1060</td>
                  <td>500/600</td>
                  <td>3120</td>
                  <td>1587</td>
                  <td>14 pulg.</td>
                  <td>2100 Kg</td>
                </tr>
                <tr>
                  <th scope="row">80 p3 - Retráctil</th>
                    <th scope="row">100</th>
                  <td>1398</td>
                  <td>1060</td>
                  <td>500/600</td>
                  <td>3120</td>
                  <td>1422</td>
                  <td>14 pulg.</td>
                  <td>2150 Kg</td>
                </tr>
                <tr>
                  <th scope="row">100 p3 - Fija</th>
                    <th scope="row">100</th>
                  <td>1386</td>
                  <td>1070</td>
                  <td>600</td>
                  <td>3160</td>
                  <td>1665</td>
                  <td>16 pulg.</td>
                  <td>2900 Kg</td>
                </tr>
                <tr>
                    <th scope="row">110 p3 - Fija</th>
                    <th scope="row">100</th>
                    <td>1580</td>
                    <td>1220</td>
                    <td>600/750</td>
                    <td>3880</td>
                    <td>1701</td>
                    <td>16 pulg.</td>
                    <td>2800 Kg</td>
                </tr>
                <tr>
                  <th scope="row">120 p3 - Fija</th>
                    <th scope="row">120</th>
                  <td>1537</td>
                  <td>1060</td>
                  <td>600/762</td>
                  <td>3454</td>
                  <td>1701</td>
                    <td>16 pulg.</td>
                  <td>3100kg</td>
                </tr>
                <tr>
                    <th scope="row">120 p3 - Retráctil</th>
                    <th scope="row">120</th>
                    <td>1537</td>
                    <td>1060</td>
                    <td>600/762</td>
                    <td>3454</td>
                    <td>1493</td>
                    <td>16 pulg.</td>
                    <td>3150kg</td>
                </tr>
                <tr>
                  <th scope="row">140 p3 - Fija</th>
                    <th scope="row">140</th>
                  <td>1651</td>
                  <td>1050</td>
                  <td>750</td>
                  <td>3400</td>
                  <td>1794</td>
                  <td>16 pulg.</td>
                  <td>3500kg</td>
                </tr>
                <tr>
                  <th scope="row">160 - Fija</th>
                    <th scope="row">160</th>
                  <td>1544</td>
                  <td>1215</td>
                  <td>762</td>
                  <td>3980</td>
                  <td>1823</td>
                  <td>16 pulg.</td>
                  <td>4250kg</td>
                </tr>
                <tr>
                    <th scope="row">160 - Retráctil</th>
                    <th scope="row">160</th>
                    <td>1544</td>
                    <td>1215</td>
                    <td>762</td>
                    <td>3500</td>
                    <td>1662</td>
                    <td>16 pulg.</td>
                    <td>4000kg</td>
                </tr>
                <tr>
                  <th scope="row">180 p3 - Fija</th>
                    <th scope="row">180</th>
                  <td>1711</td>
                  <td>1215</td>
                  <td>762</td>
                  <td>4000</td>
                  <td>1805</td>
                  <td>16 pulg.</td>
                  <td>4500kg</td>
                </tr>
                </tr>
              </tbody>
            </table>
            <p>·Las medidas y pesos son referenciales y varían  de acuerdo a las especificaciones de cada unidad minera.</p>
        </div>
    </div>
    
    <div class="col-md-12 espacio1"  style="margin-bottom:2rem; margin-top:4rem;" id="otros"></div>
          <h3>OTROS</h3>
    <div class="row">
        <div class="col-md-6" style="padding-top: 2rem;">
            <h5>VAGON DE CICLO CONTINUO (SHUTTLECAR)</h5>
            <a style="">Los vagones de ciclo contínuo (Shuttlecar) son principalmente utilizados en la excavación de túneles de larga distancia y dimensiones angostas, donde su accionamiento eléctrico y traslado continuo de material de vagón a vagón permite la extracción de grandes volúmenes en corto tiempo. Serminsa fabrica estos vagones en capacidades de 11 y 14 m3 (22,000 kgs) con accionamiento eléctrico y a control remoto.</a>
        </div>
            <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
                <img src="img/vagones/Shuttlecar.jpg" class="img-thumbnail" style="max-width:100%">
            </div>
    </div>
    <div class="col-md-12 espacio1"  style="margin-bottom:2rem; margin-top:4rem;"></div>
    <div class="row">
        <div class="col-md-6" style="padding-top: 2rem;">
            <h5>CALESA DE TRANSPORTE DE PERSONAL</h5>
            <a style="">Utilizadas para el transporte de personal tanto en minas como en construcción de túneles. La capacidad y otras especificaciones de los vagones son determinados junto con el cliente.</a>
        </div>
            <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
                <img src="img/vagones/Calesa-2.jpg" class="img-thumbnail" style="max-width:100%">
            </div>
    </div>
    <div class="col-md-12 espacio1"  style="margin-bottom:2rem; margin-top:4rem;"></div>
    <div class="row">
        <div class="col-md-6" style="padding-top: 2rem;">
            <h5>PLATAFORMAS</h5>
            <a style="">Fabricamos  todo tipo de plataformas para las distintas industrias ferroviarias y afines. Acondicionamos Sistemas de frenos para equipos con neumáticos a fin de poder ser transportados y operados también en rieles.</a>
        </div>
            <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
                <img src="img/vagones/im2.jpg" class="img-thumbnail" style="max-width:100%">
            </div>
    </div>
    <div class="col-md-12 espacio1"  style="margin-bottom:2rem; margin-top:4rem;"></div>
    <div class="row">
        <div class="col-md-6" style="padding-top: 2rem;">
            <h5>MIXERS</h5>
            <a style="">Utilizados principalmente en la construcción de túneles, estos robustos mixers de concreto de 4m3 permiten un rápido traslado de concreto al interior de la obra. Su accionamiento neumático o eléctrico permite un rápido vaciado en el interior del túnel.</a>
        </div>
        <div class="col-md-6" style="padding-top: 0rem; padding-left:6rem;">
            <img src="img/vagones/Charuto.jpg" class="img-thumbnail" style="max-width:100%">
        </div>
    </div>
    
</div>

@endsection