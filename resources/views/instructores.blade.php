@extends('app')

@section('content')

			<section class="page-header dark page-header-xs" style="background-color: #35459C">
				<div class="container" style="">

					<h1 style="color: #ffffff">Nuestros Instructores</h1>

				</div>
			</section>
			<!-- /PAGE HEADER -->


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