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
							<img src="smarty/assets/images/ilernus4.png" alt="" />
														
						</a>

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
								<ul id="topMain" class="nav nav-pills nav-main nav-onepage">
									<li class="active"><!-- HOME -->
										<a href="#slider">
											ilernus
										</a>
									</li>
									<li><!-- FEATURES -->
										<a href="#conocenos">
											Conócenos
										</a>
									</li>
									<li><!-- PRICING -->
										<a href="#servicios">
											Servicios
										</a>
									</li>
									<li><!-- TESTIMONIALS -->
										<a href="#">
											Xyz
										</a>
									</li>
									<li><!-- PURCHASE -->
										<a class="external" href="#">
											Contáctanos
										</a>
									</li>
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>


			<!-- HOME -->
			<!-- LAYER SLIDER -->
			<section id="slider">

				<div class="slider">
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

						<!-- SLIDE -->
						<div class="ls-slide" data-ls="slidedelay:8000;transition2d:21,105;">

							<!-- background image -->
							<img src="smarty/assets/images/demo/layerslider/education-2.jpg" class="ls-bg" alt="Slide background"/>

							<p class="ls-l" style="top:44%;left:50%;font-weight: 300;font-size:30px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:50;durationin:750;easingin:easeOutBack;skewxin:-50;offsetxout:-50;durationout:600;showuntil:500;easingout:easeInBack;skewxout:50;">
								<b>bienvenidos a</b>
							</p>
							<p class="ls-l" style="top:52%;left:50%;font-weight: 300;font-size:50px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:-100;durationin:750;delayin:250;easingin:easeOutBack;skewxin:-50;offsetxout:100;durationout:600;showuntil:500;easingout:easeInBack;skewxout:50;">
								<b>ilernus</b>
							</p>

							<p class="ls-l" style="top:47%;left:690px;font-weight: 500;font-size:35px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:1500;rotateyin:90;transformoriginin:left 50% 0;offsetxout:0;durationout:1500;showuntil:1000;rotateyout:-90;transformoriginout:left 50% 0;">
								Propiciamos el acceso<br />
								al conocimiento
							</p>
							<img class="ls-l" style="top:45%;left:585px;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:1500;rotateyin:90;transformoriginin:right 50% 0;offsetxout:0;durationout:1500;showuntil:1000;rotateyout:-90;transformoriginout:right 50% 0;" src="smarty/assets/images/demo/layerslider/mouse.png" alt="">
							<p class="ls-l" style="top:340px;left:150px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#fff;background:#F47741;border-radius:4px;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:3500;rotatein:-45;rotateyin:-1;scalexin:0.5;scaleyin:0.5;transformoriginin:left bottom 0;offsetxout:0;durationout:1000;rotateout:45;scalexout:2;scaleyout:2;transformoriginout:right bottom 0;">
								ESPACIO Y TIEMPO
							</p>
							<p class="ls-l" style="top:300px;left:150px;font-weight: 500;font-size:30px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:3500;rotatein:-45;scalexin:2;scaleyin:2;transformoriginin:right top 0;offsetxout:0;durationout:1000;rotateout:45;scalexout:2;scaleyout:2;transformoriginout:left top 0;">
								Trascendemos las barreras de
							</p>
						</div>

						<!-- SLIDE -->
						<div class="ls-slide" data-ls="slidedelay:8000;transition2d:75,79;">

							<!-- background image -->
							<img src="smarty/assets/images/demo/layerslider/fondo22.jpg" class="ls-bg" alt="Slide background"/>

							<img class="ls-l" data-ls="
								durationin:1500;
								scalexin:0.8;
								scaleyin:0.8;
								scalexout:0.8;
								scaleyout:0.8;" 
								style="top:40px;left:65%;white-space: nowrap;" src="smarty/assets/images/demo/desktop_empty3.png" alt="">

							<p class="ls-l" style="top:50px;left:100px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#F47741;border-radius:4px;white-space: nowrap;" data-ls="durationin:1500;delayin:300;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
								Calidad
							</p>
							<p class="ls-l" style="top:90px;left:100px;font-weight: 300;font-size:24px;color:#fff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:700;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
								<b>en contenido instruccional e-learning</b>
							</p>
							<p class="ls-l" style="top:150px;left:100px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#41B649;border-radius:4px;white-space: nowrap;" data-ls="durationin:1500;delayin:1000;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
								Conocimientos
							</p>
							<p class="ls-l" style="top:190px;left:100px;font-weight: 300;font-size:24px;color:#fff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:1400;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
								<b>que transforman la manera de planificar</b>
							</p>
							<p class="ls-l" style="top:250px;left:100px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#35459C;border-radius:4px;white-space: nowrap;" data-ls="durationin:1500;delayin:1700;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
								Tecnología
							</p>
							<p class="ls-l" style="top:290px;left:100px;font-weight: 300;font-size:24px;color:#fff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:2100;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
								<b>para el desarrollo eficiente</b>
							</p>
							<p class="ls-l" style="top:350px;left:100px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#7952A1;border-radius:4px;white-space: nowrap;" data-ls="durationin:1500;delayin:2400;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
								Control de gestión
							</p>
							<p class="ls-l" style="top:390px;left:100px;font-weight: 300;font-size:24px;color:#fff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:2800;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
								<b>para la formación de empresas en Venezuela</b>
							</p>
						</div>

						<!-- SLIDE -->
						<div class="ls-slide" data-ls="slidedelay:8000;transition2d:21,105;timeshift:-1000;">

							<!-- background -->
							<img src="smarty/assets/images/demo/slide-bg-full-3-dark.jpg" class="ls-bg" alt="Slide background"/>

							<img class="ls-l" data-ls="
								offsetxin:0;
								durationin:1500;
								delayin:3000;
								easingin:linear;
								scalexin:0;
								scaleyin:0;
								offsetxout:0;
								durationout:1500;
								showuntil:1;
								easingout:linear;
								scalexout:2;
								scaleyout:2;" 
								style="top:20px;left:50%;white-space: nowrap;" src="smarty/assets/images/demo/layerslider/circle.png" alt="">
							<img class="ls-l" data-ls="
								offsetxin:0;
								durationin:1500;
								delayin:4000;
								easingin:linear;
								scalexin:0;
								scaleyin:0;
								offsetxout:0;
								durationout:1500;
								showuntil:1;
								easingout:linear;
								scalexout:2;
								scaleyout:2;" 
								style="top:20px;left:50%;white-space: nowrap;" src="smarty/assets/images/demo/layerslider/circle.png" alt="">

							<!-- left -->
							<p class="ls-l" data-ls="
								offsetxin:0;
								durationin:2500;
								delayin:1000;
								scalexin:0;
								scaleyin:0;
								offsetxout:0;
								scalexout:0;
								scaleyout:0;" 
								style="top:124px;left:156px;font-weight: 300; opacity: .4;font-size:200px;color:#fff;white-space: nowrap;">
								
							</p>
							<p class="ls-l" data-ls="
								offsetxin:-50;
								durationin:2000;
								delayin:1000;
								offsetxout:-50;
								durationout:1000;" 
								style="top:320px;left:120px;font-weight: 300; background: white; background: #7952A1; height:40px; padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#fff;white-space: nowrap;">
								INNOVACION
							</p>
							<p class="ls-l" data-ls="
								offsetxin:50;
								delayin:2000;
								skewxin:-60;
								offsetxout:-50;
								durationout:1000;
								skewxout:-60;" 
								style="top:360px;left:273px;font-weight: 500;font-size:30px;color:#fff;white-space: nowrap;">
								y productividad!
							</p>

							<!-- right -->
							<p class="ls-l" data-ls="
								offsetxin:0;
								delayin:2500;
								rotatein:90;
								transformoriginin:right bottom 0;
								offsetxout:0;
								durationout:1500;
								transformoriginout:right bottom 0;" 
								style="top:320px;left:1013px;font-weight: 500; text-align: right;font-size:30px;color:#fff;white-space: nowrap;">
								... para el
							</p>
							<p class="ls-l" data-ls="
								offsetxin:0;
								durationin:2500;
								delayin:3250;
								easingin:easeOutElastic;rotatexin:90;
								transformoriginin:50% top 0;
								offsetxout:0;
								durationout:1000;
								rotatexout:90;
								transformoriginout:50% bottom 0;" 
								style="top:360px;left:890px;font-weight: 300; text-align: center;width:260px;height:40px;padding-right:10px;font-size:30px;line-height:37px;color:#ffffff;background:#35459C;white-space: nowrap;">
								DESARROLLO
							</p>
							<p class="ls-l" data-ls="
								offsetxin:-50;
								delayin:3500;
								skewxin:60;
								scalexin:1.5;
								offsetxout:-50;
								durationout:1000;
								skewxout:60;
								scalexout:1.5;" 
								style="top:405px;left:883px;font-size:30px;color:#fff;white-space: nowrap;">
								de tus colaboradores
							</p>
							<img class="ls-l" data-ls="
								durationin:1500;
								scalexin:0.8;
								scaleyin:0.8;
								scalexout:0.8;
								scaleyout:0.8;" 
								style="top:80px;left:50%;white-space: nowrap;" src="smarty/assets/images/demo/layerslider/emblema.png" alt="">
						</div>

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
						<h2>¿Qué es ilernus?</h2>
						<p class="lead font-lato margin-bottom-60">
							La mejor solución que ofrece la más alta calidad en <strong style="color: #35459C">contenidos y metodología instruccional e-learning,</strong> soluciones de gestión de aprendizaje en línea y virtualización de contenidos especializados en una plataforma que permite planificar, gestionar, preservar y monitorear el proceso de formación y desarrollo profesional de tus colaboradores.
						</p>

						<h2>Un proyecto con visión</h2>
						<p class="lead font-lato margin-bottom-60">
							En el año 2015 nació el concepto y su desarrollo. Establecida por emprendedores comprometidos con la creación de soluciones <strong style="color: #35459C">innovadoras y productivas,</strong> con el objetivo de llevar al mercado un servicio que apalanque el conocimiento y la formación empresarial.
						</p>						
						<hr />

					</header>




				<div class="row">
					<h2 style="text-align: center;">Atributos</h2>


						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title" href="#">
									<i class="icon icon-segumiento"></i>
									<h2>Seguimiento</h2>
								</a>
								<p>Seguimiento y gestión del desarrollo profesional de los colaboradores.</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title" href="#">
									<i class="icon icon-gestiona"></i>
									<h2>Gestiona</h2>
								</a>
								<p>Gestiona, preserva y transmite el know how de tu organización.</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title" href="#">
									<i class="icon icon-consolida"></i>
									<h2>Consolida</h2>
								</a>
								<p>Consolida y simplifica la información de tus colaboradores.</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title" href="#">
									<i class="icon icon-formacin"></i>
									<h2>Formación</h2>
								</a>
								<p>Formación 100% en línea, cuando y donde quieras.</p>
							</div>

						</div>	

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title" href="#">
									<i class="icon icon-estadisticas"></i>
									<h2>Provee</h2>
								</a>
								<p>Provee estadísticas y resultados medibles.</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title" href="#">
									<i class="icon icon-creamos"></i>
									<h2>Creamos</h2>
								</a>
								<p>Creamos tu biblioteca privada desarrollando contenidos a la medida.</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title" href="#">
									<i class="icon icon-biblioteca"></i>
									<h2>Biblioteca</h2>
								</a>
								<p>Biblioteca pública con gran variedad de cursos.</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title" href="#">
									<i class="icon icon-captacion"></i>
									<h2>Capacitación</h2>
								</a>
								<p>Capacitación basada en competencias, con instructores de alto nivel.</p>
							</div>

						</div>			

				</div>


				<div class="row">
					<h2 style="text-align: center;">Beneficios</h2>
						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title" href="#">
									<i class="icon icon-apalanca"></i>
									<h2>Apalancar</h2>
								</a>
								<p>Apalanca la estrategia de retención del talento.</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title" href="#">
									<i class="icon icon-gestion"></i>
									<h2>Facilitar</h2>
								</a>
								<p>Facilita la gestión de formación y entrenamiento.</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title" href="#">
									<i class="icon icon-tiempo"></i>
									<h2>Ahorrar</h2>
								</a>
								<p>Ahorra tiempo y recursos.</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title" href="#">
									<i class="icon icon-refuerza"></i>
									<h2>Reforzar</h2>
								</a>
								<p>Refuerza el proceso de gerencia y preservación del conocimiento.</p>
							</div>

						</div>	

						<div class=""><!--col-md-3-->

							<div class="box-icon box-icon-center box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title" href="#">
									<i class="icon icon-herramientas"></i>
									<h2>Contar</h2>
								</a>
								<p>Cuenta con funciones y herramientas orientadas al aprendizaje y a la productividad</p>
							</div>

						</div>								

				</div>				


				</div>
			</section>
			<!-- / -->


			<!-- PARALLAX -->
			<section class="parallax parallax-2" style="background-image: url('smarty/assets/images/demo/1200x800/36.jpg');">
				<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<!-- Counters -->
					<div class="row countTo-sm text-center">

						<div class="col-xs-6 col-sm-3 col-xs-6">
							<i class="fa fa-users" style="font-size: 50px" aria-hidden="true"></i>
							<div class="block size-50" style="color: #F47741;">
								<strong class="countTo size-50" data-speed="3000">18</strong>
							</div>
							<h3 class="size-15 margin-top-10 margin-bottom-0">INSTRUCTORES</h3>
						</div>

						<div class="col-xs-6 col-sm-3 col-xs-6">
							<i class="fa fa-graduation-cap" style="font-size: 50px" aria-hidden="true"></i>
							<div class="block size-50" style="color: #41B649;">
								<strong class="countTo size-50" data-speed="3000">100</strong>
							</div>
							<h3 class="size-15 margin-top-10 margin-bottom-0">CURSOS E-LEARNING TOMADOS</h3>
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
					<!-- /Counters -->

				</div>

			</section>
			<!-- /PARALLAX -->


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

<!-- -->
<section id="conocenos">
	<div class="container">
		
		<header class="text-center margin-bottom-60">
			<h2>Conócenos</h2>
			<p class="lead font-lato margin-bottom-60">Nuestro equipo de iLernus</p>
			<hr />
		</header>
<!--
		<p class="lead">Lorem ipsum dolor sit amet. Etharums your template rerum facilis dolores nemis omnis fugats vitaes you need this.</p>
		<p>Lorem ipsum dolor sit amet. Etharums your template rerum facilis dolores nemis omnis fugats vitaes you need this totam rem aperiam, eaque ipsa qu ab illo inventore veritatis et quasi architectos beatae vitae dicta sunt explicabo. Nemo enim sadips ipsums dolores sit.Nemo enims sadips ipsums un inventore veritatis et quasi.</p>
-->
		<div class="row">

			<!-- Member -->
			<section class="nopadding">
				
				<div class="row nomargin">
				
					<!-- LEFT -->
					<div class="col-md-6 col-sm-6 nopadding nomargin">

						<img class="img-responsive" src="smarty/assets/images/demo/people/1200x800/11-min.jpg" alt="image" />

					</div>

					<!-- RIGHT -->
					<div class="col-md-6 col-sm-6 nopadding nomargin">
					
						<div class="padding-40">
				
							<h2>Clover Brito</h2>
							<strong>Presidente</strong>
							<p style="text-align: justify;">
								Es socio fundador de B&G Consultores Corporativos, S.A., creador del concepto ilernus.							Licenciado en Contaduría  Pública  (1997) con  Maestría  en Finanzas en IESA  (2004), especialista tributario por la Universidad  Metropolitana (2004-2005) y Maestría  en Administración de Empresas (MBA) en el IESA (2008). Obtuvo dos becas para cursar estudios en el IESA.
							</p>

							<!-- Modal Ajax Lightbox >-->
							<a class="btn btn-default btn-lg lightbox" href="{{ route('clover') }}" data-lightbox="iframe" data-plugin-options='{"type":"ajax", "closeOnBgClick":false}' style="background-color: #35459C; color: #FFF; border: 0px">
							Leer más</a>

							<hr>

						</div>

					</div>

				</div>

			</section>
			<!-- /Member -->

			<!-- Member -->
			<section class="nopadding">
				
				<div class="row nomargin">

					<!-- RIGHT -->
					<div class="col-md-6 col-sm-6 nopadding nomargin">
					
						<div class="padding-40">
				
							<h2>María Alejandra Aguilar P.</h2>
							<strong>Directora General ilernus Venezuela</strong>
							<p style="text-align: justify;">
								María Alejandra posee más de 15 años de exitosa experiencia en el área docente en la Universidad Metropolitana, así como también en el área de gerencia, liderazgo y desarrollo de proyectos relacionados con tecnología educativa y formación en línea (e-learning).
							</p>

							<!-- Modal Ajax Lightbox >-->
							<a class="btn btn-default btn-lg lightbox" href="{{ route('maria') }}" data-lightbox="iframe" data-plugin-options='{"type":"ajax", "closeOnBgClick":false}' style="background-color: #F47741; color: #FFF; border: 0px">
							Leer más</a>
							<hr>
			
						</div>

					</div>

					<!-- LEFT -->
					<div class="col-md-6 col-sm-6 nopadding nomargin">

						<img class="img-responsive" src="smarty/assets/images/demo/people/1200x800/22-min.jpg" alt="image" />

					</div>

				</div>
				
			</section>
			<!-- /Member -->

		</div>

	</div>
</section>
<!-- / -->

			<!-- Portfolio -->
			<section id="servicios">
				<div class="container">
					<header class="text-center margin-bottom-60">
						<h2>Servicios</h2>

						<p class="lead font-lato margin-bottom-60" style="">
							iLernus University es una plataforma educativa de aprendizaje en línea que permite <strong style="color: #35459C">capacitar y actualizar</strong> a los colaboradores de su empresa a través de la suscripción de planes y paquetes de contenidos de interés.<br>
							iLernus Producciones ofrece la concepción, <strong style="color: #35459C">desarrollo y producción</strong> de servicios instruccionales y audiovisuales con fines educativos, diseñándolos a la medida de su empresa bajo altos estándares de calidad.<br>
							iLernus Academia brinda <strong style="color: #35459C">soluciones educativas</strong> presenciales in company o en nuestras instalaciones, con un equipo de la más alta talla que diseñan una estratégica de formación a su medida.
				
						</p>




						<hr />
					</header>
					<div id="portfolio" class="portfolio-nogutter">

						<ul class="nav nav-pills mix-filter margin-bottom-60">
							<li data-filter="all" class="filter active"><a href="#">All</a></li>
							<li data-filter="destacados" class="filter"><a href="#">Destacados</a></li>							
							<li data-filter="negocios" class="filter"><a href="#">Negocios</a></li>
							<li data-filter="tecnologia" class="filter"><a href="#">Tecnología</a></li>
							<li data-filter="desarrollo" class="filter"><a href="#">Desarrollo</a></li>
							<li data-filter="productividad" class="filter"><a href="#">Productividad</a></li>							
						</ul>


						<div class="row mix-grid">
						@foreach ($cursos as $curso) 

							<div class="{{ $curso->str_clase}}"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-search size-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="fa fa-share size-20"></span>
												</a>

											</span>
										</span>

										<img class="img-responsive" src="smarty/assets/images/demo/mockups/600x399/9-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>

											

	                                        	@if( strlen(".$curso->str_curso.") < 20 ) 
	                                        	
	                                        		{!! $curso->str_curso !!} 
	                                        		
	                                        	@else 
	                                        		{!! substr($curso->str_curso,0,19)."..." !!}
	                                        		
	                                        	@endif 


										</h3>
										<ul class="list-inline categories nomargin">
											<li>
												<a href="#">
													<span class="label" style="background-color: {{ $curso->str_color }}">{{ $curso->str_categoria }}</span>
												</a>
											</li>
										
										</ul>
									</div>

								</div>

							</div><!-- /item -->
						@endforeach
						</div>

					</div>

				</div>
			</section>
			<!-- /Portfolio -->






			



			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">
						
						<div class="col-md-3">
							<!-- Footer Logo -->
							<img class="footer-logo" src="smarty/assets/images/logo-footer.png" alt="" />

							<!-- Small Description -->
							<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

							<!-- Contact Address -->
							<address>
								<ul class="list-unstyled">
									<li class="footer-sprite address">
										PO Box 21132<br>
										Here Weare St, Melbourne<br>
										Vivas 2355 Australia<br>
									</li>
									<li class="footer-sprite phone">
										Phone: 1-800-565-2390
									</li>
									<li class="footer-sprite email">
										<a href="mailto:support@yourname.com">support@yourname.com</a>
									</li>
								</ul>
							</address>
							<!-- /Contact Address -->

						</div>

						<div class="col-md-3">

							<!-- Latest Blog Post -->
							<h4 class="letter-spacing-1">LATEST NEWS</h4>
							<ul class="footer-posts list-unstyled">
								<li>
									<a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
									<small>29 June 2015</small>
								</li>
								<li>
									<a href="#">Nullam id dolor id nibh ultricies</a>
									<small>29 June 2015</small>
								</li>
								<li>
									<a href="#">Duis mollis, est non commodo luctus</a>
									<small>29 June 2015</small>
								</li>
							</ul>
							<!-- /Latest Blog Post -->

						</div>

						<div class="col-md-2">

							<!-- Links -->
							<h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
							<ul class="footer-links list-unstyled">
								<li><a href="#">Home</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Our Services</a></li>
								<li><a href="#">Our Clients</a></li>
								<li><a href="#">Our Pricing</a></li>
								<li><a href="#">Smarty Tour</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
							<!-- /Links -->

						</div>

						<div class="col-md-4">

							<!-- Newsletter Form -->
							<h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
							<p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>

							<form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
							<!-- /Newsletter Form -->

							<!-- Social Icons -->
							<div class="margin-top-20">
								<a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
					
							</div>
							<!-- /Social Icons -->

						</div>

					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li>&bull;</li>
							<li><a href="#">Privacy</a></li>
						</ul>
						&copy; All Rights Reserved, Company LTD
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
		
	</body>
</html>
