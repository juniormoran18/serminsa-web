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
            <div class="carousel-item">
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
            <a>Con el fin de brindar el mayor soporte técnico a nuestros clientes, SERMINSA pone a disposición el area
                de servicios, la cual brinda asesoría técnica y ofrece a su vez servicios destinados para mejorar su
                productividad, tales como: </a>
        </div>
        <div>
            <div class="row">
                <div class="col-md-7">
                    <div class="" style="padding-top: 2rem;">
                        <h5>ASESORAMIENTO PARA EL CÁLCULO Y ADQUISICIÓN DE EQUIPOS</h5>
                        <a style="">Con la finalidad de lograr la máxima satisfacción de nuestros clientes durante el
                            proceso de compra, SERMINSA ofrece asesoramiento para el cálculo de tonelaje de locomotoras; de
                            esta manera nos aseguramos de que los equipos ofrecidos satisfagan la necesidad de nuestros
                            clientes.</a>
                    </div>
                    <div class="" style="padding-top: 1rem;">
                        <h5>SERVICIO POST-VENTA</h5>
                        <a style="">Nuestro servicio post-venta se centra en la confianza de nuestros clientes al momento de
                            cerrar una compra, nuestros ingenieros y técnicos especializados se asegurarán de brindar el
                            mayor soporte luego de la entrega de cada equipo, comprometiéndonos así a cumplir con nuestra
                            garantía y garantía extendida según sea el caso.</a>
                    </div>
                    <div class="" style="padding-top: 3rem;">
                        <h5>CONTRATOS DE ALQUILER DE LOCOMOTRAS</h5>
                        <a style="">Ofrecemos locomotoras en alquiler bajo la modalidad de “a todo costo” es decir; mano de
                            obra especializada y repuestos en stock cubiertos al 100% por SERMINSA; lo cual le asegura
                            obtener una disponibilidad mecánica mayor al 90%, incrementando así su productividad.
                        </a>
                    </div>
                    <div class="" style="padding-top: 2rem;">
                        <h5>CAPACITACIONES TEÓRICO-PRÁCTICAS</h5>
                        <a style="">Con la finalidad de incrementar la productividad de sus clientes basándose en la mejora
                            de eficiencia tanto en mantenimiento como en operación de equipos, SERMINSA ofrece
                            capacitaciones teórico-prácticas en campo y en nuestras instalaciones, las cuales serán dictadas
                            por ingenieros y técnicos especializados en la operación y mantenimiento de equipos.
                        </a>
                    </div>
                    <div class="" style="padding-top: 2rem;">
                        <h5>SERVICIO DE REPARACIÓN</h5>
                        <a style="">Encuentre en SERMINSA su mayor aliado en cuanto a reparación de equipos y componentes,
                            nuestros técnicos especializados y nuestra experiencia adquirida como fabricantes de equipos
                            garantizan reparaciones de calidad, ofreciendo también nuestra garantía a los productos
                            reparados.
                        </a>
                    </div>
                    <div class="" style="padding-top: 2rem;">
                        <h5>REPUESTOS</h5>
                        <a style="">Fabricamos y distribuimos una gran variedad de repuestos para nuestras líneas de
                            producto,  - Repuestos para locomotoras a batería y trolley - Repuestos para carros mineros
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="" style="padding-top: 6rem; padding-left:3rem;">
                        <img src="img/servicios/img-3.jpg" class="img" style="max-width:90%">
                    </div>
                    <div class="" style="padding-top: 6rem; padding-left:3rem;">
                        <img src="img/servicios/img1.jpg" class="img" style="max-width:90%">
                    </div>
                    <div class="" style="padding-top: 6rem; padding-left:3rem;">
                        <img src="img/servicios/img2.jpg" class="img" style="max-width:90%">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection