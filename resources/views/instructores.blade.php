@extends('app')

@section('content')

			<section class="page-header dark page-header-xs" style="background-color: #35459C">
				<div class="container" style="">

					<h1 style="color: #ffffff">Instructores</h1>

				</div>
			</section>
			<!-- /PAGE HEADER -->


			<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<!-- POST ITEM -->
						<div class="blog-post-item col-md-3 col-sm-6">

							<!-- IMAGE -->
							<figure class="margin-bottom-20">

								<img class="img-responsive" src="{{ asset('smarty/assets/images/demo/people/300x300/a-min.jpg') }}" alt="">

							</figure>

							<h2><a href="blog-single-default.html">BLOG CAROUSEL POST</a></h2>


							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

							<a href="blog-single-default.html" class="btn btn-reveal btn-default">
								<i class="fa fa-plus"></i>
								<span>Ver más</span>
							</a>

						</div>
						<!-- /POST ITEM -->


						

					</div>



				</div>
			</section>
			<!-- / -->

@endsection					