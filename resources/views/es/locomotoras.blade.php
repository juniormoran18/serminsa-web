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

    <div class="container">
        <div >
            <div class="row" style="padding:2em 0 0;">
                <div class="col-md-10"><h2>Locomotoras</h2></div>
                <div  class="col-md-1" ><a  href="#bateria" >Bateria</a></div>
                <div  class="col-md-1" href="#trolley"><a  href="#trolley">Trolley</a></div>
            </div>
            <div class="col-md-12 espacio1"  style="margin-bottom:1rem;"></div>
            <a>SERMINSA fabrica la línea de locomotoras eléctricas marca BEV (British Electric Vehicles), a Batería y/o Trolley, desde 2 hasta 20 toneladas métricas de peso, para cargas de hasta 200 TM. Estos equipos son fabricados bajo los más altos estándares de calidad en diseño, procura de materiales, componentes y manufactura, para cumplir con los exigentes requerimientos de extracción de materiales en interior mina.</a>
        </div>
        <div name="bateria" id="bateria" class="cold-md-12 subtitulo" style="padding:2em 0; padding-bottom:1em;"><h3>Locomotoras a Bateria</h3></div>
        <a>Alimentada y energizada por baterías eléctricas.</a>
        <div class="row" style="padding-top:2rem;">
            <div class="col-md-3">
                <a href="{{ route('es-wr8') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;" >WR8</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR8.png" class="img-thumbnail">
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('es-wr9') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR9</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR9.jpg" class="img-thumbnail">
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr19') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR19</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR19.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr20') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR20</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR20.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr25') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR25</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR25.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr35') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR35</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR35.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr50') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <spa style="margin-right:8em;">WR50</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR50.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-12 espacio1"  style="margin-bottom:3rem; margin-top:3rem;"></div>
        <div name="trolley" id="trolley" class="cold-md-12 subtitulo" style="padding:2em 0;"><h3>Locomotoras a Trolley</h3></div>
        <a>Alimentada y energizada por una fuente externa como la catenaria.</a>
        <div class="row" style="padding-top:2rem;">
            <div class="col-sm-3">
                <a href="{{ route('es-wr30t') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR30T de 4TN</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR30T.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr60t') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR60T de 6TN</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR60T.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr90t') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR90T de 8TN</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR90T.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr90t') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR90T de 10TN</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR90T.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr120t') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR120T de 12TN</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR120T.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="{{ route('es-wr150t') }}">
                    <h5 class="border" onmouseover="this.style.background='#131B52', this.style.color='white'" onmouseout="this.style.background='white',this.style.color='#122087'">
                        <div style="margin: 10px;">
                            <span style="margin-right:8em;">WR150T de 12TN</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </h5>
                    <div>
                        <img src="img/Locomotoras/WR150T.png" class="img-thumbnail">  
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection