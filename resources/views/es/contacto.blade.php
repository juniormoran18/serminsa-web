@extends ('page.principal')

@section('content')


  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner general">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contáctenos</h2>
            </div>
          </div>
        </div>
        <div class="row general">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile fa-3x"></i>
                <p>
                  Teléfono: (51 1)713 4228 / 7134225<br>
                  <span>Lunes-Viernes (9am-1pm / 2pm-6:00pm)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fas fa-envelope-square fa-3x"></i>
                <p>
                  Email: serminsa@serminsa.com.pe<br>
                  <span>Web: www.serminsa.com</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker fa-3x"></i>
                <p>
                  Ubicación: Calle 4, Mz. C Lote 6<br>
                  <span>Urb. Industrial Grimanesa, Callao-Perú</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <div class="iframe-container">
              <iframe width="500" height="305" id="gmap_canvas" src="https://maps.google.com/maps?q=serminsa&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
              </iframe>
            </div>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top:10px;">
            <div class="form contact-form">
              <!--<div id="sendmessage">Your message has been sent. Thank you!</div>-->
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Teléfono" data-rule="minlen:4" data-msg="Inserte al menos 8 caracteres" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button class="btn btn-dark btn-lg btn-block" type="submit">Enviar</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

@endsection