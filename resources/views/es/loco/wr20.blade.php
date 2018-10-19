@extends ('page.principal')

@section('content')

<!-- Contenido -->

<div class="container">
    <div style="padding-top: 2rem;">
        <h5>LOCOMOTORAS A BATERIA </h5>
    </div>
    <div>
        <div class="row">
            <div class="col-md-5">
                <h1>WR20</h1>
                <i class="fas fa-angle-left"></i><a href="{{ route('es-locomotoras') }}" style="padding-left:3px">atras</a>
                <button type="button" class="btn btn-dark btn-lg btn-block" style="height:2.6rem;">SOLICITAR COTIZACIÓN</button>
                <h5 style="padding: 1rem 0;">4 Toneladas</h5>
                <div class="col-md-12 espacio1"></div>
                <div style="margin-top: 1rem;">
                    <p align="justify">
                        Un robusto equipo de 4 toneladas con potente motor de 20HP, permite mayor extracción a menor costo. Su diseño de motor posterior permite obtener una dstancia entre ejes reducida, haciéndola muy versátil en vetas angostas.

                    </p>
                </div>
            </div>
            <div class="col-md-7" style="padding-top: 2rem; padding-left:6rem;">
                <img src="img/Locomotoras/WR20.png" class="img-thumbnail" style="max-width:75%"> 
            </div>
        </div>
        <div style="padding-top: 2rem;">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col"></th>
                  <th colspan="3" scope="col">Caracteristicas Técnicas</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Peso (TM)</th>
                  <td>4.0</td>
                </tr>
                <tr>
                  <th scope="row">Trocha (mm)</th>
                  <td>500 ó a solicitud del cliente</td>
                </tr>
                <tr>
                  <th scope="row">Potencia de Motor (HP)</th>
                  <td>20</td>
                </tr>
                <tr>
                  <th scope="row">Voltaje (VDC)</th>
                  <td>84</td>
                </tr>
                <tr>
                  <th scope="row">Control</th>
                  <td>Electromecánico de levas y contactos, Modelo: SPC-493 </td
                </tr>
                <tr>
                  <th scope="row">Freno</th>
                  <td>Con sistema hidráulico tanto en frenos de servicio y parqueo</td>
                </tr>
                <tr>
                  <th scope="row">Capacidad de Arrastre (TM)</th>
                  <td>26</td>
                </tr>
                <tr>
                  <th scope="row">Bancos de batería</th>
                  <td>42 celdas (84VDC) de 455Ah</td>
                </tr>
                <tr>
                  <th scope="row">Cargador</th>
                  <td>Automático de 84VDC 90Amp desde un suministro de 440V/60Hz trifásico</td>
                </tr>
                </tr>
              </tbody>
            </table>
            
        </div>
    </div>
    
</div>

@endsection