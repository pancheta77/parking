@extends('layout')

@section('content')
<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                <div class="row"><div class="container">
                    <div class="col-md-9 text-left">
                        <h3 data-animation="animated bounceInDown">El mejor sistema de Estacionamiento</h3>
                        <h4 data-animation="animated bounceInUp">Fácil y ágil de usar</h4>
                     </div>
                </div></div>
             </div>
            <!-- Item 2 -->
            <div class="item slide2">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">Rápido servicio de Estacionamiento</h3>
                        <h4 data-animation="animated bounceInUp">Administra tu estacionamiento automático </h4>
                     </div>
                </div></div>
            </div>
            <!-- Item 3 -->
            <div class="item slide3">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">Adaptado a tus necesidades</h3>
                        <h4 data-animation="animated bounceInUp">Simple y seguro</h4>
                     </div>
                </div></div>
            </div>
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>

</section>
<!-- header section -->
<!-- intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 text-center">
      <h3>Sistema PAVESUR</h3>
      <p>El Parquímetro Virtual de Estacionamiento Urbano (PARVESUR) determina que el estacionamiento en determinadas zonas de la ciudad es pago dentro de una franja horaria que depende de la zona</p>
    </div>
  </div>
</section>
<!-- intro section -->
<!-- services section -->
<section id="services" class="services service-section">
  <div class="container">
  <div class="section-header">
    <h2 class="wow fadeInDown animated">Servicio de Estacionamiento</h2>
    <p class="wow fadeInDown animated">El sistema muestra los estacionamiento activos en tiempo real</p>
  </div>
    <div class="row">
      <div class="card">
        <div class="card-body">
          <table id="parking-active" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Dominio</th>
              <th>Hora Inicio</th>
              <th>Hora Finalización</th>
              <th>Zona</th>
            </tr>
            </thead>
            <tbody> 
              @foreach ($estacionamientos as $estacionamiento)
                <tr>
                  <td>{{ $estacionamiento->vehiculo->dominio }}</td>
                  <td>{{ $estacionamiento->horaDesde->format('H:i:s') }}</td>
                  <td>{{ $estacionamiento->horaHasta ->format('H:i:s')}}</td>
                  <td>{{ $estacionamiento->zona->nombre }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>

    </div>
  </div>
</section>
<!-- services section -->
<!--About-->
<section id="content-3-10" class="content-block data-section nopad content-3-10">
	<div class="image-container col-sm-6 col-xs-12 pull-left">
		<div class="background-image-holder">

		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
				<div class="editContent">
					<h3>Acerca de nosotros</h3>
				</div>
				<div class="editContent">
					<p>Somos un grupo de estudiantes desarrollando un sistema a medida</p>
					<p>Cátedra de Diseño de sistemas de la UTN - FRLP</p>
				</div>
			</div>
		</div><!-- /.row-->
	</div><!-- /.container -->
</section>

<!-- our team section -->
<section id="teams" class="section teams">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Nuestro equipo</h2>
                <p class="wow fadeInDown animated">Aprendiendo a desarrollar en PHP <br> Conociendo Laravel Framework.</p>
            </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="person"><img src="images/usuario-sin-foto.png" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Marcelo Vanucci</h4>
            <h5 class="role">Estudiante</h5>
            <p>Diseño de Sistemas</p>
          </div>
          <!-- <ul class="social-icons clearfix">
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
          </ul> -->
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/usuario-sin-foto.png" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Diego Taboada</h4>
            <h5 class="role">Estudiante</h5>
            <p>Diseño de Sistemas</p>
          </div>
          <!-- <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
          </ul> -->
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/usuario-sin-foto.png" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Javier Gimenez</h4>
            <h5 class="role">Estudiante</h5>
            <p>Diseño de Sistemas</p>
          </div>
          <!-- <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
          </ul> -->
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/usuario-sin-foto.png" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Pablo Ancheta</h4>
            <h5 class="role">Estudiante</h5>
            <p>Diseño de Sistemas</p>
          </div>
          <!-- <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- our team section -->


<!-- contact section -->
<!-- <section id="contact" class="section">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Contact Us</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">
        <div id="message"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Message..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Send">
          <div id="simple-msg"></div>
        </form>
      </div>
    </div>
  </div>
</section> -->
<!-- contact section -->

@stop
