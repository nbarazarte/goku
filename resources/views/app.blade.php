<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>ilernus</title>
		<meta name="keywords" content="e-learning" />
		<meta name="description" content="" />
		<meta name="Author" content="" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		{!! Html::style('smarty/assets/plugins/bootstrap/css/bootstrap.min.css') !!}

		<!-- LAYER SLIDER -->
		{!! Html::style('smarty/assets/plugins/slider.layerslider/css/layerslider.css') !!}

		<!-- THEME CSS -->
		{!! Html::style('smarty/assets/css/essentials.css') !!}
		{!! Html::style('smarty/assets/css/layout.css') !!}
		{!! Html::style('smarty/assets/css/customilernus.css') !!}

		<!-- PAGE LEVEL SCRIPTS -->
		{!! Html::style('smarty/assets/css/header-1.css') !!}
		{!! Html::style('smarty/assets/css/color_scheme/blue.css') !!}
	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

		<!-- wrapper -->
		<div id="wrapper">

			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<!-- <div id="header" class="sticky transparent clearfix"> -->
			<div id="header" class="sticky shadow-after-3 clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Logo -->
						<a class="logo pull-left" href="{{ route('home') }}">
							<img src="{{ asset('smarty/assets/images/ilernus4.png') }}" alt="" />														
						</a>


						<div class="sticky-side sticky-side-left visible-md visible-lg">
							<a href="#" class="social-icon social-icon-sm social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
								<i class="fa fa-facebook"></i>
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#" class="social-icon social-icon-sm social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
								<i class="fa fa-twitter"></i>
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" class="social-icon social-icon-sm social-youtube" data-toggle="tooltip" data-placement="top" title="Youtube">
								<i class="fa fa-youtube-play"></i>
								<i class="fa fa-youtube-play"></i>
							</a>
							<a href="#" class="social-icon social-icon-sm social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
								<i class="fa fa-linkedin"></i>
								<i class="fa fa-linkedin"></i>
							</a>
						</div>				





						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse">
							<nav class="nav-main">

								<!-- 
									.nav-onepage
									Required for onepage navigation links
									
									Add .external for an external link!
								-->


								 @if(Route::current()->getName() == 'home')

									<ul id="topMain" class="nav nav-pills nav-main nav-onepage" style="font-size: 14px">
										<li class="active"><!-- HOME -->
											<a href="#slider">
												ilernus
											</a>
										</li>
										<li><!--  -->
											<a href="#conocenos">
												Conócenos
											</a>
										</li>
										<li><!--  -->
											<a  href="#servicios">
												Servicios
											</a>
											
											<!-- class="dropdown-toggle"
											<ul class="dropdown-menu" style="font-size: 14px">
												@foreach ($tiposCursos as $tipo) 
													<li class="dropdown">
														
														<a class="dropdown-toggle" href="#">
															{{ $tipo->str_categoria }}
														</a>
														<ul class="dropdown-menu">

				                                        	@if($tipo->str_categoria == 'Negocios') 
				                                        	
																@foreach ($cursosNegocios as $negocio) 
																	<li>
																		<a href="{{ route('curso',$negocio->str_curso) }}">

																			{!! str_replace("-"," ",$negocio->str_curso) !!}

																		</a>
																	</li>
																@endforeach				                                        		
				                                        		
				                                        	@elseif($tipo->str_categoria == 'Desarrollo')

																@foreach ($cursosDesarrollo as $desarrollo) 
																	<li>
																		<a href="{{ route('curso',$desarrollo->str_curso) }}">

																			{!! str_replace("-"," ",$desarrollo->str_curso) !!}

																		</a>
																	</li>
																@endforeach					                                        	

				                                        	@elseif($tipo->str_categoria == 'Productividad')

																@foreach ($cursosProductividad as $productividad) 
																	<li>
																		<a href="{{ route('curso',$productividad->str_curso) }}">

																			{!! str_replace("-"," ",$productividad->str_curso) !!}

																		</a>
																	</li>
																@endforeach					                                        	

				                                        	@elseif($tipo->str_categoria == 'Tecnología') 

																@foreach ($cursosTecnologia as $tecnologia) 
																	<li>
																		<a href="{{ route('curso',$tecnologia->str_curso) }}">

																			{!! str_replace("-"," ",$tecnologia->str_curso) !!}

																		</a>
																	</li>
																@endforeach					                                        		
				                                        		
				                                        	@endif 

														</ul>
														
													</li>
												@endforeach
																																															
											</ul>

											-->
											
										</li>
										<li><!--  -->
											<a href="#">
												Blog
											</a>
										</li>
										<li><!--  -->
											<a class="" href="#contacto">
												Contáctanos
											</a>
										</li>																				


									</ul>								 

								 @elseif(Route::current()->getName() == 'curso')

									<ul id="topMain" class="nav nav-pills nav-main nav-onepage">
										<li class="active"><!-- HOME -->
											<a href=" {{ route('home') }} ">
												ilernus
											</a>
										</li>
										<li><!--  -->
											<a href="#">
												Negocios
											</a>

											<ul class="dropdown-menu">
	                                        	
												@foreach ($cursosNegocios as $negocio)

													<li style="cursor: pointer;" title="{!! str_replace("-"," ",$negocio->str_curso) !!}">
														<a href="{{ route('curso',$negocio->str_curso) }}">

				                                        	{!! str_replace("-"," ",$negocio->str_titulocorto) !!} 

														</a>
													</li>

												@endforeach

											</ul>		

										</li>
										<li><!--  -->
											<a href="#">
												Tecnología
											</a>

											<ul class="dropdown-menu">
	                                        	
												@foreach ($cursosTecnologia as $tecnologia)

													<li style="cursor: pointer;" title="{!! str_replace("-"," ",$tecnologia->str_curso) !!}">
														<a href="{{ route('curso',$tecnologia->str_curso) }}">

				                                        	{!! str_replace("-"," ",$tecnologia->str_titulocorto) !!} 

														</a>
													</li>

												@endforeach

											</ul>

										</li>
										<li><!--  -->
											<a href="#">
												Desarrollo
											</a>

											<ul class="dropdown-menu">
	                                        	
												@foreach ($cursosDesarrollo as $desarrollo)

													<li style="cursor: pointer;" title="{!! str_replace("-"," ",$desarrollo->str_curso) !!}">
														<a href="{{ route('curso',$desarrollo->str_curso) }}">

				                                        	{!! str_replace("-"," ",$desarrollo->str_titulocorto) !!} 

														</a>
													</li>

												@endforeach

											</ul>

										</li>
										<li><!--  -->
											<a class="" href="#">
												Productividad
											</a>

											<ul class="dropdown-menu">
	                                        	
												@foreach ($cursosProductividad as $productividad)

													<li style="cursor: pointer;" title="{!! str_replace("-"," ",$productividad->str_curso) !!}">
														<a href="{{ route('curso',$productividad->str_curso) }}">

				                                        	{!! str_replace("-"," ",$productividad->str_titulocorto) !!} 

														</a>
													</li>

												@endforeach

											</ul>

										</li>																				


									</ul>

								 @endif

							</nav>

						</div>

					</div>

				</header>
				<!-- /Top Nav -->

			</div>

  					@yield('content')


			<!-- FOOTER -->
			<footer id="footer">

				<div class="copyright">
					<div class="container">

						<div class="row">
							<div class="col-md-2">
								<b>Copyright &copy; <?=date('Y')?> iLernus</b>
							</div>

							<div class="col-md-8">

							</div>

							<div class="col-md-2">
								<a href="#" class="social-icon social-icon-sm social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
									<i class="fa fa-facebook"></i>
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="fa fa-twitter"></i>
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-youtube" data-toggle="tooltip" data-placement="top" title="Youtube">
									<i class="fa fa-youtube-play"></i>
									<i class="fa fa-youtube-play"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="fa fa-linkedin"></i>
									<i class="fa fa-linkedin"></i>
								</a>										
							</div>
						</div>


					</div>
				</div>
			</footer>
			<!-- /FOOTER -->
		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'smarty/assets/plugins/';</script>
		{!! Html::script('smarty/assets/plugins/jquery/jquery-2.1.4.min.js') !!}
		{!! Html::script('smarty/assets/js/scripts.js') !!}
		<!-- STYLESWITCHER - REMOVE -->

		<!-- LAYER SLIDER -->
		{!! Html::script('smarty/assets/plugins/slider.layerslider/js/layerslider_pack.js') !!}
		{!! Html::script('smarty/assets/js/view/demo.layerslider_slider.js') !!}

		<!-- PAGELEVEL SCRIPTS -->
		<script type="text/javascript" src="smarty/assets/js/contact.js"></script>

		<!-- 
			GMAP.JS 
			http://hpneo.github.io/gmaps/
		-->
		<script type="text/javascript" src="//maps.google.com/maps/api/js?key=AIzaSyDn4Fqtci9trC4i6iJjbC-UfdnwONchtQ0"></script>
		{!! Html::script('smarty/assets/plugins/gmaps.js') !!}
		<script type="text/javascript">

			jQuery(document).ready(function(){

				/**
					@BASIC GOOGLE MAP
				**/
				var map2 = new GMaps({
					div: '#map2',
					lat: 10.4985307,
					lng: -66.7909896,
					scrollwheel: false
				});

				var marker = map2.addMarker({
					lat: 10.4985307,
					lng: -66.7909896,
					title: 'ilernus'
				});

			});

		</script>		
	</body>
</html>
