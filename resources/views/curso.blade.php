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
			<section class="page-header page-header-lg parallax parallax-3" style="background-image:url('assets/images/imgpattern2.jpg')">
				<div class="overlay dark-2"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<h1> {!! $curso->str_categoria !!}<small> </small></h1>


				</div>
			</section>
			<!-- /PAGE HEADER -->



			<!-- -->
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
								<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/mockups/800x553/2-min.jpg') }}" alt="">

								<img class="img-responsive" src="{{ asset('smarty/assets/images/cursosilernus/cover-desarrollo-autoestima.jpg') }}" alt="">
							<!-- /OWL SLIDER -->
						</div>
						<div class="col-md-6">
							<h3>{!! $curso->str_curso !!} </h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore dolore magnm aliquam quaerat voluptatem.</p>
							<p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
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
							<a href="#" rel="nofollow" target="_blank" style="background-color: #F47741; color: #FFF; border: 0px" class="btn btn-primary btn-lg">CONTACTANOS</a>
						</div><!-- /right btn -->

					</div>

				</div>
			</div>


@endsection			