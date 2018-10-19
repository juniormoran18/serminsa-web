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
                <h1>WR150T</h1>
                <i class="fas fa-angle-left"></i><a href="{{ route('es-locomotoras') }}" style="padding-left:3px">atras</a>
                <button type="button" class="btn btn-dark btn-lg btn-block" style="height:2.6rem;">SOLICITAR COTIZACIÓN</button>
                <h5 style="padding: 1rem 0;">15 Toneladas</h5>
                <div class="col-md-12 espacio1"></div>
                <div style="margin-top: 1rem;">
                    <p align="justify">
                        Gran volumen de extracción con este equipo de 150HP y 15 Ton de peso, permitiendo un arrastre de hasta 150 TM. Robusto equipo con potentes motores eléctricos y eficiente y seguro sistema de frenado hidráulico. Cuenta con opción para uso con control electrónico que brinda mayor eficiencia y reducido costo de manutención.
                    </p>
                </div>
            </div>
            <div class="col-md-7" style="padding-top: 2rem; padding-left:6rem;">
                <img src="img/Locomotoras/WR150T.png" class="img-thumbnail" style="max-width:75%"> 
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
                  <td>15</td>
                </tr>
                <tr>
                  <th scope="row">Trocha (mm)</th>
                  <td>762 ó a solicitud del cliente</td>
                </tr>
                <tr>
                  <th scope="row">Potencia de Motor (HP)</th>
                  <td>150</td>
                </tr>
                <tr>
                  <th scope="row">Voltaje (VDC)</th>
                  <td>250</td>
                </tr>
                <tr>
                  <th scope="row">Control</th>
                  <td>Electrónico  IGBT</td
                </tr>
                <tr>
                  <th scope="row">Freno</th>
                  <td>Con sistema hidráulico tanto en frenos de servicio y parqueo</td>
                </tr>
                <tr>
                  <th scope="row">Capacidad de Arrastre (TM)</th>
                  <td>135-180</td>
                </tr>
                </tr>
              </tbody>
            </table>
            
        </div>
    </div>
    
</div>

@endsection