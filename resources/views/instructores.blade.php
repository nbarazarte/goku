@extends('app')

@section('content')

			<section class="callout-dark heading-title heading-arrow-bottom">
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">Nuestros Instructores</h3>
						<p>En <strong style="color: #F47741; font-size: 20px">ilernus</strong> contamos con el más alto nivel de <em><b>excelencia</b></em></p>
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
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/brands/universidades/1.png') }}" alt="">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/brands/universidades/2.png') }}" alt="">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/brands/universidades/3.png') }}" alt="">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/brands/universidades/1.png') }}" alt="">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/brands/universidades/2.png') }}" alt="">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/brands/universidades/3.png') }}" alt="">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/brands/universidades/1.png') }}" alt="">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/brands/universidades/2.png') }}" alt="">
		</div>
		<div>
			<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/brands/universidades/3.png') }}" alt="">
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
							        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
							      </div>
							    </div>
							  </div>
							</div>




						<!-- POST ITEM -->
						<div class="blog-post-item col-md-3 col-sm-6" style="text-align: center;">

							<!-- IMAGE -->
							<figure class="margin-bottom-20" style="text-align: center;">


							@if( $instructor->str_sexo == 'm' )

								<img class="img-responsive" src="{{ asset('smarty/assets/images/emblema.png') }}" alt="" style=" width: 100px">

							@else

								<img class="img-responsive" src="{{ asset('smarty/assets/images/emblema.png') }}" alt="" style=" width: 100px">


							@endif

								

							</figure>

							<h2 style="text-align: center;"><a href="blog-single-default.html">{{ $instructor->str_nombre }}</a></h2>


							<p>
								{{ $instructor->str_profesion}}
							</p>

							<a href="#" class="btn btn-reveal btn-default" data-toggle="modal" data-target="#myModal{{$x}}">
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