@extends('app')

@section('content')

			<section id="" class="heading-title parallax" style="background-image: url('smarty/assets/images/demo/cubes-azul.jpg');">
			<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">Mapa del Sitio</h3>
						<p>En <strong style="color: #F47741; font-size: 20px">iLernus,</strong> nos adaptamos a <em><b>ti</b></em></p>
					</div>

				</div>
			</section>
		

			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

				<div class="text-center">

					<h3 style="color: #ffffff">Estamos para ti</h3>

				</div>

			</div>



			<section>
				<div class="container">		



			<!-- -->
			<section>
				<div class="container">
					
					<div class="heading-title heading-border">
						<h3><span><span class="countTo" data-speed="2000">12</span>+</span> iLernus</h3>
						<p class="font-lato size-17">Nuestras páginas de interés</p>
					</div>

					<div class="row">

						<div class="col-md-4 col-sm-4">
							<ul class="list-unstyled href-reset">
								<li><a href="http://www.ilernus.com/#">Inicio</a></li>
								<li><a href="{{ route('home')}}">ILernus</a></li>
								<li><a href="http://www.ilernus.com/#conocenos">Conócenos</a>

									<ul>
										<li><a href="http://www.ilernus.com/#directores">Equipo Directivo</a></li>
										<li><a href="http://www.ilernus.com/#gerentes">Equipo Gerencial</a></li>	
									</ul>

								</li>
								<li><a href="http://www.ilernus.com/#soluciones">Soluciones</a></li>
								<li><a href="http://www.ilernus.com/#cursos">Nuestros Cursos</a></li>
								<li><a href="{{ route('instructores')}}">Academia de Instructores</a></li>
								<!--
									<li><a href="{{ route('blog')}}">Blog</a></li>
									<li><a href="http://www.ilernus.com/#testimonios">Testimonios</a></li>
								-->
								<li><a href="{{ route('contactanos')}}">Contáctanos</a></li>
								<!--
									<li><a href="#">Laboral</a>
										<ul>
											<li><a href="{{ route('trabaja')}}">Trabaja con Nosotros</a></li>
										</ul>
									</li>
								-->
								<li><a href="#">Soporte</a>
									<ul>
										<li><a href="{{ route('mapa')}}">Mapa del Sitio</a></li>
										<li><a href="{{ route('terminos')}}">Términos del Servicio</a></li>
										<li><a href="{{ route('politicas')}}">Políticas de Privacidad</a></li>	
									</ul>
								</li>								
							

							</ul>
						</div>

					</div>

				</div>
			</section>
			<!-- / -->


				</div>
			</section>
			<!-- / -->

@endsection					