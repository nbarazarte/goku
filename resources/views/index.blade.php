@extends('app')

@section('content')

			<!-- HOME -->
			<!-- LAYER SLIDER -->
			<section id="slider">

				<div class="slider hidden-xs"><!-- hidden-xs-->

					<!--
						AVAILABLE CLASSES
							.height-300
							.height-350
							.height-400
							.height-450
							.height-500
							.height-550
							.height-600
							.height-650
							.height-700
							.height-750
							.height-800
					-->
					<div class="layerslider height-500" style="width:100%;">

						@include('slider')

					</div>

					<script type="text/javascript">
						var layer_options = {
							responsive: 		false,
							responsiveUnder: 	1280,
							layersContainer: 	1280,
							hoverPrevNext: 		true,
							skinsPath: 			'smarty/assets/plugins/slider.layerslider/skins/'
						}
					</script>

				</div>


				<div class="slider visible-xs"><!-- visible-xs-->

					<!--
						AVAILABLE CLASSES
							.height-300
							.height-350
							.height-400
							.height-450
							.height-500
							.height-550
							.height-600
							.height-650
							.height-700
							.height-750
							.height-800
					-->
					<div class="layerslider height-200" style="width:100%;">

						@include('slider')

					</div>

					<script type="text/javascript">
						var layer_options = {
							responsive: 		false,
							responsiveUnder: 	1280,
							layersContainer: 	1280,
							hoverPrevNext: 		true,
							skinsPath: 			'smarty/assets/plugins/slider.layerslider/skins/'
						}
					</script>

				</div>				




			</section>
			<!-- /LAYER SLIDER -->
			<!-- /HOME -->

			<!-- -->
			<section>
				<div class="container">

					<header class="text-center margin-bottom-60">
						<h2>¿Qué es iLernus?</h2>
						<p class="lead font-lato margin-bottom-60">
							La mejor solución que ofrece la más alta calidad en <strong style="color: #35459C">contenidos y metodología instruccional e-learning,</strong> soluciones de gestión de aprendizaje en línea y virtualización de contenidos especializados en una plataforma que permite planificar, gestionar, preservar y monitorear el proceso de formación y desarrollo profesional de tus colaboradores.
						</p>

						<h2>Un proyecto con visión</h2>
						<p class="lead font-lato margin-bottom-60">
							En el año 2015 nació el concepto y su desarrollo. Establecida por emprendedores comprometidos con la creación de soluciones <strong style="color: #F47741">innovadoras y productivas,</strong> con el objetivo de llevar al mercado un servicio que apalanque el conocimiento y la formación empresarial.
						</p>						
						<hr />

					</header>


				</div>
			</section>
			<!-- / -->

			<section class="callout-dark heading-title heading-arrow-bottom">
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">¿Por qué elegirnos?</h3>
						<p>En <strong style="color: #F47741; font-size: 20px">iLernus</strong> queremos brindarte lo <em><b>mejor</b></em></p>
					</div>

				</div>
			</section>

			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

				<div class="text-center">

					<h3 style="color: #ffffff">Atributos</h3>

				</div>

			</div>			

				<div class="row">

					<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-segumiento"></i>
									<h2>Revisa</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">Seguimiento y gestión del desarrollo <br>profesional de los colaboradores.</p>

							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-gestiona"></i>
									<h2>Gestiona</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">Gestiona, preserva y transmite <br>el know how de tu organización.</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-consolida"></i>
									<h2>Consolida</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">Consolida y simplifica la información <br>de tus colaboradores.</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-formacin"></i>
									<h2>Forma</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">Formación 100% en línea, <br>cuando y donde quieras.</p>
							</div>

						</div>	

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-estadisticas"></i>
									<h2>Provee</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">Provee estadísticas <br>y resultados medibles.</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-creamos"></i>
									<h2>Desarrolla</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">Creamos tu biblioteca privada <br>desarrollando contenidos a la medida.</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-biblioteca"></i>
									<h2>Dispone</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">Biblioteca pública con <br>gran variedad de cursos.</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-captacion"></i>
									<h2>Capacita</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">Capacitación basada en competencias, <br>con instructores de alto nivel.</p>
							</div>

						</div>			

				</div>
			

			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

				<div class="text-center">

					<h3 style="color: #ffffff">Beneficios</h3>

				</div>

			</div>		

				<div class="row">

						<div class="col-md-5th">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-apalanca"></i>
									<h2>Apalanca</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">Apalanca la estrategia de <br>retención del talento.</p>
							</div>

						</div>

						<div class="col-md-5th">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-gestion"></i>
									<h2>Facilita</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">Facilita la gestión de formación <bR>y entrenamiento.</p>
							</div>

						</div>

						<div class="col-md-5th">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-tiempo"></i>
									<h2>Ahorra</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">Ahorra tiempo y recursos.</p>
							</div>

						</div>

						<div class="col-md-5th">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-refuerza"></i>
									<h2>Refuerza</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">Refuerza el proceso de gerencia y preservación del conocimiento.</p>
							</div>

						</div>	

						<div class="col-md-5th"><!--col-md-3-->

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-herramientas"></i>
									<h2>Aporta</h2>
								</a>
								<p style="font-size: 13px; text-align: center;"> Funciones y herramientas orientadas <br>al aprendizaje y a la productividad</p>
							</div>

						</div>								

				</div>	


			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

				<div class="text-center">

					<h3 style="color: #ffffff">Instructores formados en las más prestigiosas universidades</h3>

				</div>

			</div>		

			<!-- PARALLAX -->

			
			<section class="parallax parallax-2" style="background-image: url('smarty/assets/images/demo/cubes-blur.jpg');">
				<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<!-- 
	controlls-over		= navigation buttons over the image 
	buttons-autohide 	= navigation buttons visible on mouse hover only
	
	data-plugin-options:
		"singleItem": true
		"autoPlay": true
		"navigation": true
		"pagination": true
-->
<div class="text-center">
	<div class="owl-carousel nomargin" data-plugin-options='{"singleItem": false, "autoPlay": true}'>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/logos/1.png') }}" alt="Universidad Metropolitana" title="Universidad Metropolitana">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/logos/2.png') }}" alt="Universidad Central de Venezuela" title="Universidad Central de Venezuela">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/logos/3.png') }}" alt="Universidad Simón Bolívar" title="Universidad Simón Bolívar">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/logos/4.png') }}" alt="Universidad de Valencia España"" title="Universidad de Valencia España">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/logos/5.png') }}" alt="Universidad de Almería España" title="Universidad de Almería España">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/logos/6.png') }}" alt="Universidad Complutense de Madrid" title="Universidad Complutense de Madrid">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/logos/1.png') }}" alt="Universidad Metropolitana" title="Universidad Metropolitana">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/logos/2.png') }}" alt="Universidad Central de Venezuela" title="Universidad Central de Venezuela">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/logos/3.png') }}" alt="Universidad Simón Bolívar" title="Universidad Simón Bolívar">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/logos/4.png') }}" alt="Universidad de Valencia España"" title="Universidad de Valencia España">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/logos/5.png') }}" alt="Universidad de Almería España" title="Universidad de Almería España">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/logos/6.png') }}" alt="Universidad Complutense de Madrid" title="Universidad Complutense de Madrid">
		</div>


				</div>

			</section>
			<!-- /PARALLAX -->

			<section id="conocenos" class="callout-dark heading-title heading-arrow-bottom" style="">
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">Conócenos</h3>
						<p>En <strong style="color: #F47741; font-size: 20px">iLernus</strong> ofrecemos la más alta calidad en contenidos y metodología para el <em><b>e-learning</b></em></p>
					</div>

				</div>
			</section>

			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

				<div class="text-center">

					<h3 style="color: #ffffff">Equipo Directivo</h3>

				</div>

			</div>	
<!-- -->
<section >
	<div class="container">
		
<div class="row">

<?php
	$x=0;
?>
@foreach ($directores as $director) 

							<div class="modal fade" id="myModal{{$x}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">
							        	<span class="label" style="background-color: #35459C ">{{ $director->str_cargo }}</span>
							        </h4>
							      </div>
							      <div class="modal-body">
							      <h3>
							      	{{ $director->str_nombre }}
							      </h3>

							        {!! $director->str_cv !!}

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
							      </div>
							    </div>
							  </div>
							</div>




	<div class="col-md-3">

		<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
			<div class="front">
				<div class="box1 box-default">
					<div class="box-icon-title">


					
						<img class="img-responsive" src="smarty/assets/images/demo/people/1200x800/{{ $director->str_imagen }}.jpg" alt="" />
					

						<!--<h2>{{ $director->str_nombre }}</h2>-->
					</div>
					
				</div>
			</div>

			<div class="back">
				<div class="box2" style="background-color: #35459C">
					<!--
					<h4>Director</h4>
					<hr />
					-->
					<p style="font-size: 11px"> {{ $director->str_cv_corto }}</p>

					<br>

					<a href="#" style="color: #ffffff; font-weight: bold;" class="btn btn-reveal btn-warning" data-toggle="modal" data-target="#myModal{{$x}}">
						<i class="fa fa-plus"></i>
						<span>Ver más</span>
					</a>


				</div>
			</div>
		</div>

	</div>

<?php
	 $x++;
?>
@endforeach

</div>
	</div>
</section>		

			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

				<div class="text-center">

					<h3 style="color: #ffffff">Equipo Gerencial</h3>

				</div>

			</div>	


<section>
	<div class="container">
		
<div class="row">

<?php
	$x=0;
?>
@foreach ($gerentes as $gerente)


							<div class="modal fade" id="myModalGerente{{$x}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">
							        	<span class="label" style="background-color: #35459C ">{{ $gerente->str_cargo }}</span>
							        </h4>
							      </div>
							      <div class="modal-body">
							      <h3>
							      	{{ $gerente->str_nombre }}
							      </h3>

							        {!! $gerente->str_cv !!}

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
							      </div>
							    </div>
							  </div>
							</div>



	<div class="col-md-5th">

		<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
			<div class="front">
				<div class="box1 box-default">
					<div class="box-icon-title">
						<img class="img-responsive" src="smarty/assets/images/demo/people/1200x800/{{ $gerente->str_imagen }}.jpg" alt="" />

					</div>
					
				</div>
			</div>

			<div class="back">
				<div class="box2" style="background-color: #35459C">

					<p style="font-size: 11px"> {{ $gerente->str_cv_corto }}</p>

					<a href="#" style="color: #ffffff; font-weight: bold;" class="btn btn-reveal btn-warning" data-toggle="modal" data-target="#myModalGerente{{$x}}">
						<i class="fa fa-plus"></i>
						<span>Ver más</span>
					</a>

				</div>
			</div>
		</div>
			<br>
	</div>
<?php
	$x++;
?>
@endforeach

</div>


	</div>


</section>




			<section id="soluciones" class="callout-dark heading-title heading-arrow-bottom" style="">
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">Soluciones</h3>
						<p><em><b>Únete</b></em> a nosotros en <strong style="color: #F47741; font-size: 20px">iLernus</strong> estamos comprometidos con tu crecimiento</p>
					</div>

				</div>
			</section>



			<!-- Portfolio -->
			<section >
				<div class="container">
					
			
					<div class="row">
					
						<div class="col-md-4">
							
							<div class="heading-title heading-border-bottom heading-color">
								<h3>
									<img class="pull-center img-responsive wow fadeInLeft" data-wow-delay="0.4s" src="{{ asset('smarty/assets/images/demo/layerslider/emblema.png') }}" style="width: 10%" alt="" />
									<strong style="color: #35459C; font-size: 25px">iLernus University</strong>
								</h3>

							</div>
							
							<p style="text-align: justify;">Es una plataforma educativa de <strong style="color: #F47741">aprendizaje en línea</strong> que permite capacitar y actualizar a los colaboradores de su empresa a través de la suscripción de planes y paquetes de contenidos de interés.</p>

						</div>

						<div class="col-md-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>
									<img class="pull-center img-responsive wow fadeInLeft" data-wow-delay="0.4s" src="{{ asset('smarty/assets/images/demo/layerslider/emblema.png') }}" style="width: 10%" alt="" />
									<strong style="color: #35459C; font-size: 25px">iLernus Producciones</strong>
								</h3>
							</div>
							<p style="text-align: justify;">Ofrece la concepción, desarrollo y producción de <strong style="color: #F47741">servicios instruccionales y audiovisuales</strong> con fines educativos, diseñándolos a la medida de su empresa bajo altos estándares de calidad.</p>

						</div>

						<div class="col-md-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>
									<img class="pull-center img-responsive wow fadeInLeft" data-wow-delay="0.4s" src="{{ asset('smarty/assets/images/demo/layerslider/emblema.png') }}" style="width: 10%" alt="" />
									<strong style="color: #35459C; font-size: 25px">iLernus Academia</strong>
								</h3>
							</div>
							<p style="text-align: justify;">Brinda <strong style="color: #F47741">soluciones educativas presenciales</strong> in company o en nuestras instalaciones, con un equipo de la más alta talla que diseñan una estratégica de formación a su medida.</p>

						</div>

	

					</div>




</div>









</section>



			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

				<div class="text-center">

					<h3 style="color: #ffffff">Nuestros Cursos</h3>

				</div>

			</div>	


			<section>

			<div class="container">



					<div class="row">



					<div id="portfolio" class="portfolio-nogutter">

						<ul class="nav nav-pills mix-filter margin-bottom-60">
							<li data-filter="all" class="filter active"><a href="#">Todos</a></li>
							<li data-filter="destacados" class="filter"><a href="#">Destacados</a></li>							
							<li data-filter="negocios" class="filter"><a href="#">Negocios</a></li>
							<li data-filter="tecnologia" class="filter"><a href="#">Tecnología</a></li>
							<li data-filter="desarrollo" class="filter"><a href="#">Desarrollo</a></li>
							<li data-filter="productividad" class="filter"><a href="#">Productividad</a></li>							
						</ul>

						<div class="row mix-grid">

						<?php
							$x=0;
						?>
						@foreach ($cursos as $curso) 

							<!-- Modal -->
							<div class="modal fade" id="myModalCursos{{$x}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">
							        	<span class="label" style="background-color: {{ $curso->str_color }}">{{ $curso->str_categoria }}</span>
							        </h4>
							      </div>
							      <div class="modal-body">

							      <h3>
							      	{!! str_replace("-"," ",$curso->str_curso) !!}
							      </h3>

							        {!! $curso->str_contenido !!}

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
							      </div>
							    </div>
							  </div>
							</div>

							<div class="{{ $curso->str_clase}}"><!-- item -->

								<div class="item-box">
									<figure style="background-color: {{ $curso->str_color }}; cursor: pointer;" title="{!! str_replace("-"," ",$curso->str_curso) !!}">
										<span class="item-hover">
											<span class="overlay dark-5"></span>

	
											<span class="inner">
											<h3 style="color: #ffffff; font-size: 18px">
		
												<!--
												<!-- lightbox - ->
												<a class="ico-rounded lightbox" href="" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-search size-20"></span>
												</a>
												-->

												<!-- details -->
												<!--
													<a class="ico-rounded" href="{{ route('curso',$curso->str_curso) }}" target="_blank">
														<span class="fa fa-share size-20"></span>
													</a>
												-->

													<a href="#" style="color: #ffffff; font-weight: bold;" class="btn btn-reveal btn-warning" data-toggle="modal" data-target="#myModalCursos{{$x}}">
														<i class="fa fa-plus"></i>
														<span >Ver más</span>
													</a>

												</h3>

											</span>
										</span>

										<img class="img-responsive" src="{{ asset('smarty/assets/images/cursosilernus/'.$curso->str_imagen) }}" width="600" height="399" alt="">

									</figure>

									<div class="item-box-desc">
										<h3>
                                        	
                                        	<!--
												aquí iba el titulo corto
                                        	-->

										</h3>
										<!--
										<ul class="list-inline categories nomargin">
											<li>
												<a href="#">
													<span class="label" style="background-color: {{ $curso->str_color }}">{{ $curso->str_categoria }}</span>
												</a>
											</li>
										
										</ul>
										-->
									</div>

								</div>

							</div><!-- /item -->

							<?php
								 $x++;
							?>
						@endforeach
						</div>

					</div>
					</div>
				</div>
			</section>
			<!-- /Portfolio -->

			<!--
			<section id="testimonios" class="callout-dark heading-title heading-arrow-bottom" style="">
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">Testimonios</h3>
						<p><strong style="color: #F47741; font-size: 20px">ilernus,</strong> más que formación es <em><b>gestión</b></em></p>
					</div>

				</div>
			</section>
			-->
			<!--
			<section>
				<div class="container">

					<div class="row">
-->

							<!-- 
								data-plugin-options:
									"transitionStyle":"fadeUp" (fade,backSlide,goDown,fadeUp)

								Note: remove class="rounded" from the img for squared image!
							-->

<!--
							<div class="row">

								<div class="col-md-6">

									<div class="testimonial-bordered">
										<div class="owl-carousel text-center owl-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"fade"}'>
											
											<div class="testimonial">
												<figure>
													<img class="rounded" src="{{ asset('smarty/assets/images/demo/people/300x300/11-min.jpg') }}" alt="" />
												</figure>
												<div class="testimonial-content nopadding">
													<p class="lead">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero.</p>
													<cite>
														Joana Doe
														<span>Company Ltd.</span>
													</cite>
												</div>
											</div>

											<div class="testimonial">
												<figure>
													<img class="rounded" src="{{ asset('smarty/assets/images/demo/people/300x300/12-min.jpg') }}" alt="" />
												</figure>
												<div class="testimonial-content nopadding">
													<p class="lead">voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa.</p>
													<cite>
														Melissa Doe
														<span>Company Ltd.</span>
													</cite>
												</div>
											</div>

										</div>
									</div>


								</div>

							<div class="col-md-6">

								<div class="testimonial-bordered">
									<div class="owl-carousel text-center owl-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"fade"}'>
										
										<div class="testimonial">
											<figure>
												<img class="rounded" src="{{ asset('smarty/assets/images/demo/people/300x300/11-min.jpg') }}" alt="" />
											</figure>
											<div class="testimonial-content nopadding">
												<p class="lead">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero.</p>
												<cite>
													Joana Doe
													<span>Company Ltd.</span>
												</cite>
											</div>
										</div>

										<div class="testimonial">
											<figure>
												<img class="rounded" src="{{ asset('smarty/assets/images/demo/people/300x300/12-min.jpg') }}" alt="" />
											</figure>
											<div class="testimonial-content nopadding">
												<p class="lead">voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa.</p>
												<cite>
													Melissa Doe
													<span>Company Ltd.</span>
												</cite>
											</div>
										</div>

									</div>
								</div>							
							
							</div>



							</div>




					</div>
				</div>
			</section>		

-->


			<!-- PARALLAX -->

			<!--
			<section class="parallax parallax-2" style="background-image: url('smarty/assets/images/demo/1200x800/35.jpg');">
				<div class="overlay dark-5"></div>

				<div class="container">

									
					<div class="row countTo-sm text-center">

						<div class="col-xs-6 col-sm-3 col-xs-6" style="cursor: pointer;" title="Instructores de ilernus">
							

							<a href="{{ route('instructores') }}" target="_blank">

								<i class="fa fa-users" style="font-size: 50px" aria-hidden="true"></i>
								<div class="block size-50" style="color: #F47741;">
									<strong class="countTo size-50" data-speed="3000">18</strong>
								</div>
								<h3 class="size-15 margin-top-10 margin-bottom-0">INSTRUCTORES</h3>

							</a>


						</div>

						<div class="col-xs-6 col-sm-3 col-xs-6">
							<i class="fa fa-graduation-cap" style="font-size: 50px" aria-hidden="true"></i>
							<div class="block size-50" style="color: #41B649;">
								<strong class="countTo size-50" data-speed="3000">100</strong>
							</div>
							<h3 class="size-15 margin-top-10 margin-bottom-0">CURSOS E-LEARNING IMPARTIDOS</h3>
						</div>

						<div class="col-xs-6 col-sm-3 col-xs-6">
							<i class="fa fa-laptop" style="font-size: 50px" aria-hidden="true"></i>
							<div class="block size-50" style="color: #35459C;">
								<strong class="countTo size-50" data-speed="3000">30</strong>
							</div>
							<h3 class="size-15 margin-top-10 margin-bottom-0">PROYECTOS Y CONTENIDOS VIRTUALIZADOS</h3>
						</div>

						<div class="col-xs-6 col-sm-3 col-xs-6">
							<i class="fa fa-smile-o" style="font-size: 50px" aria-hidden="true"></i>
							<div class="block size-50" style="color: #7952A1;">
								<strong class="countTo size-50" data-speed="3000">3</strong>
							</div>
							<h3 class="size-15 margin-top-10 margin-bottom-0">CLIENTES FELICES</h3>
						</div>

					</div>

					

				</div>

			</section>-->
			<!-- /PARALLAX -->
			






@endsection