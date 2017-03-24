@extends('app')

@section('content')

@foreach ($cursos as $curso) 

@endforeach


			<!-- 
				PAGE HEADER 
				
				CLASSES:
					.page-header-xs	= 20px margins
					.page-header-md	= 50px margins
					.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
					.dark			= dark page header

					.shadow-before-1 	= shadow 1 header top
					.shadow-after-1 	= shadow 1 header bottom
					.shadow-before-2 	= shadow 2 header top
					.shadow-after-2 	= shadow 2 header bottom
					.shadow-before-3 	= shadow 3 header top
					.shadow-after-3 	= shadow 3 header bottom
			-->
			


			<?php

				switch ($curso->str_categoria) {
					case 'Negocios':
						
							$imagen_fondo = 'slide-b-bg-blue.jpg';
							$color = '#35459C';

						break;

					case 'Tecnología':

							$imagen_fondo = 'slide-b-bg-yellow.jpg';
							$color = '#F47741';

						break;	

					case 'Desarrollo':

							$imagen_fondo = 'slide-b-bg.jpg';
							$color = '#41B649';

						break;

					case 'Productividad':

							$imagen_fondo = 'slide-b-bg-violet.jpg';
							$color = '#7952A1';

						break;																
					

				}

			?>

			<section class="page-header page-header-lg parallax parallax-3" style="background-image:url('{{ asset('smarty/assets/images/demo/layerslider/'.$imagen_fondo) }}'); ">

				<div class="overlay dark-2"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<h1 style="font-size: 35px"><span class="label" style="background-color: <?=$color?>">{!! $curso->str_categoria !!}</span></h1>

				</div>
			</section>
			<!-- /PAGE HEADER -->

			<section>
				<div class="container">
					
					<!--
					<div class="divider divider-center divider-color"><!-- divider - ->
						<i class="fa fa-chevron-down"></i>
					</div>

					-->

					<!-- BORN TO BE A WINNER -->
					<article class="row">
						<div class="col-md-6">
							<!-- OWL SLIDER -->
								<img class="img-responsive img-rounded" src="{{ asset('smarty/assets/images/cursosilernus/'.$curso->str_imagen) }}" alt="">

							<!-- /OWL SLIDER -->
						</div>
						<div class="col-md-6">
							<h3>{!! str_replace("-"," ",$curso->str_curso) !!}</h3>

							<p>
							{{ $curso->str_contenido }}
							</p>
						</div>
					</article>
					<!-- /BORN TO BE A WINNER -->

				</div>
			</section>
			<!-- / -->


			<!-- 

			FULLWIDTH: OUTSIDE OF <section> 

				Available Classes:
				alert-default
				alert-info
				alert-warning
				alert-danger
				alert-success
			-->

			<div class="alert alert-transparent bordered-bottom">
				<div class="container">

					<div class="row">

						<div class="col-md-8 col-sm-8"><!-- left text -->
							<h3>Estamos para ti <span><strong style="color: #35459C">envíanos tus preguntas y comentarios</strong></span> o visitanos</h3>
							<p class="font-lato weight-300 size-20 nomargin-bottom">
								Urbanización Terrazas del Avila, Zona Rental Universidad Metropolitana. Edificio 1. Piso 1. Oficina ilernus. Caracas, Estado Miranda.
							</p>
						</div><!-- /left text -->

						
						<div class="col-md-4 col-sm-4 text-right" ><!-- right btn -->
							<a href="http://localhost:8000#contacto" rel="nofollow" target="_blank" style="background-color: #F47741; color: #FFF; border: 0px" class="btn btn-primary btn-lg">CONTACTANOS</a>
						</div><!-- /right btn -->

					</div>

				</div>
			</div>


@endsection			