@extends('app')

@section('content')

			<section class="callout-dark heading-title heading-arrow-bottom">
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">Academia de Instructores</h3>
						<p>En <strong style="color: #F47741; font-size: 20px">iLernus</strong> contamos con el más alto nivel de <em><b>excelencia</b></em></p>
					</div>

				</div>
			</section>

			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

				<div class="text-center">

					<h3 style="color: #ffffff">Formados en las más prestigiosas casas de estudio</h3>

				</div>

			</div>	




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
</div>




			<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<?php
							$x=0;
						?>
@foreach ($instructores as $instructor) 

							<div class="modal fade" id="myModal{{$x}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">
							        	<span class="label" style="background-color: #35459C ">{{ $instructor->str_profesion }}</span>
							        </h4>
							      </div>
							      <div class="modal-body">
							      <h3>
							      	{{ $instructor->str_nombre }}
							      </h3>

							        {!! $instructor->str_cv !!}

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
							      </div>
							    </div>
							  </div>
							</div>




						<!-- POST ITEM -->
						<div class="blog-post-item col-md-3 col-sm-6" style="text-align: center;">

							<!-- IMAGE -->
							<figure class="margin-bottom-20" style="text-align: center;">

								<img class="img-responsive" src="{{ asset('smarty/assets/images/emblema.png') }}" alt="" style=" width: 100px">

							</figure>

							<h2 style="text-align: center;"><a href="blog-single-default.html">{{ $instructor->str_nombre }}</a></h2>

							<p>
								{{ $instructor->str_profesion}}
							</p>

							<a href="#" style="color: #ffffff; font-weight: bold;" class="btn btn-reveal btn-warning" data-toggle="modal" data-target="#myModal{{$x}}">
								<i class="fa fa-plus"></i>
								<span>Ver más</span>
							</a>


						</div>
						<!-- /POST ITEM -->
							<?php
								 $x++;
							?>
@endforeach
						

					</div>



				</div>
			</section>
			<!-- / -->

@endsection					