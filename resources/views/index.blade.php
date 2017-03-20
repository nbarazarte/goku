<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>ilernus</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

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
		{!! Html::style('smarty/assets/css/color_scheme/green.css') !!}
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
						<a class="logo pull-left" href="index.html">
							<img src="smarty/assets/images/ilernus3.png" alt="" />
														
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
										<a href="#pricing">
											PRICING
										</a>
									</li>
									<li><!-- TESTIMONIALS -->
										<a href="#testimonials">
											TESTIMONIALS
										</a>
									</li>
									<li><!-- PURCHASE -->
										<a class="external" href="#purchase">
											PURCHASE
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
							<img src="smarty/assets/images/demo/layerslider/slide-corporate-7.jpg" class="ls-bg" alt="Slide background"/>

							<p class="ls-l" style="top:44%;left:50%;font-weight: 300;font-size:30px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:50;durationin:750;easingin:easeOutBack;skewxin:-50;offsetxout:-50;durationout:600;showuntil:500;easingout:easeInBack;skewxout:50;">
								bienvenidos a
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
							<img src="smarty/assets/images/demo/layerslider/slide-corporate-4.jpg" class="ls-bg" alt="Slide background"/>

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
								en contenido instruccional e-learning
							</p>
							<p class="ls-l" style="top:150px;left:100px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#41B649;border-radius:4px;white-space: nowrap;" data-ls="durationin:1500;delayin:1000;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
								Conocimientos
							</p>
							<p class="ls-l" style="top:190px;left:100px;font-weight: 300;font-size:24px;color:#fff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:1400;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
								que transforman la manera de planificar
							</p>
							<p class="ls-l" style="top:250px;left:100px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#35459C;border-radius:4px;white-space: nowrap;" data-ls="durationin:1500;delayin:1700;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
								Tecnología
							</p>
							<p class="ls-l" style="top:290px;left:100px;font-weight: 300;font-size:24px;color:#fff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:2100;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
								para el desarrollo eficiente
							</p>
							<p class="ls-l" style="top:350px;left:100px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#7952A1;border-radius:4px;white-space: nowrap;" data-ls="durationin:1500;delayin:2400;rotatein:20;rotatexin:30;scalexin:1.5;scaleyin:1.5;transformoriginin:left 50% 0;durationout:750;rotateout:20;rotatexout:-30;scalexout:0;scaleyout:0;transformoriginout:left 50% 0;">
								Control de gestión
							</p>
							<p class="ls-l" style="top:390px;left:100px;font-weight: 300;font-size:24px;color:#fff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:2800;rotateyin:90;skewxin:60;transformoriginin:25% 50% 0;offsetxout:100;durationout:750;skewxout:60;">
								para la formación de empresas en Venezuela
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
						<p class="lead font-lato">
							La mejor solución que ofrece la más alta calidad en contenidos y metodología instruccional e-learning, soluciones de gestión de aprendizaje en línea y virtualización de contenidos especializados en una plataforma que permite planificar, gestionar, preservar y monitorear el proceso de formación y desarrollo profesional de tus colaboradores.
						</p>

						<h2>Un proyecto con visión</h2>
						<p class="lead font-lato">
							En el año 2015 nació el concepto y su desarrollo. Establecida por emprendedores comprometidos con la creación de soluciones innovadoras y productivas, con el objetivo de llevar al mercado un servicio que apalanque el conocimiento y la formación empresarial.
						</p>						
						<hr />
					</header>


					<div class="row">
						<div class="col-md-6">
							<h2 style="text-align: center;">Atributos</h2>
							<ul class="list-unstyled list-icons lead font-lato">
								<li><i style="color: #35459C; font-size: 28px" class="icon icon-segumiento"></i>Seguimiento y gestión del desarrollo profesional de los colaboradores.</li>
								<li><i style="color: #35459C; font-size: 28px" class="icon icon-gestiona"></i>Gestiona, preserva y transmite el know how de tu organización.</li>
								<li><i style="color: #35459C; font-size: 28px" class="icon icon-segumiento"></i>Consolida y simplifica la información de tus colaboradores.</li>
								<li><i style="color: #35459C; font-size: 28px" class="icon icon-segumiento"></i>Formación 100% en línea, cuando y donde quieras.</li>
								<li><i style="color: #35459C; font-size: 28px" class="icon icon-segumiento"></i>Provee estadísticas y resultados medibles.</li>
								<li><i style="color: #35459C; font-size: 28px" class="icon icon-creamos"></i>Creamos tu biblioteca privada desarrollando contenidos a la medida.</li>
								<li><i style="color: #35459C; font-size: 28px" class="icon icon-biblioteca"></i>Biblioteca pública con gran variedad de cursos.</li>
								<li><i style="color: #35459C; font-size: 28px" class="icon icon-captacion"></i>Capacitación basada en competencias, con instructores de alto nivel.</li>
							</ul>
						</div>

						<div class="col-md-6">
							<h2 style="text-align: center;">Beneficios</h2>
								<ul class="list-unstyled list-icons lead font-lato">
									<li><i style="color: #F47741; font-size: 28px" class="icon icon-apalanca"></i>Apalanca la estrategia de retención del talento.</li>
									<li><i style="color: #F47741; font-size: 28px" class="icon icon-gestion"></i>Facilita la gestión de formación y entrenamiento.</li>
									<li><i style="color: #F47741; font-size: 28px" class="icon icon-segumiento"></i>Ahorra tiempo y recursos.</li>
									<li><i style="color: #F47741; font-size: 28px" class="icon icon-refuerza"></i>Refuerza el proceso de gerencia y preservación del conocimiento.</li>
									<li><i style="color: #F47741; font-size: 28px" class="icon icon-herramientas"></i>Cuenta con funciones y herramientas orientadas al aprendizaje y a la productividad</li>
								</ul>
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
			<p class="lead font-lato">Nuestro equipo de ilernus</p>
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

						<img class="img-responsive" src="smarty/assets/images/demo/people/1200x800/2-min.jpg" alt="image" />

					</div>

					<!-- RIGHT -->
					<div class="col-md-6 col-sm-6 nopadding nomargin">
					
						<div class="padding-40">
				
							<h2>Clover Brito</h2>
							<strong>Presidente</strong>
							<p style="text-align: justify;">
								Es socio fundador de B&G Consultores Corporativos, S.A., creador del concepto ilernus.							Licenciado en Contaduría  Pública  (1997) con  Maestría  en Finanzas en IESA  (2004), especialista tributario por la Universidad  Metropolitana (2004-2005) y Maestría  en Administración de Empresas (MBA) en el IESA (2008). Obtuvo dos becas para cursar estudios en el IESA.
							</p>
							<p style="text-align: justify;">
								Logró ubicarse  dentro de los primeros quince estudiantes de la Maestría en el IESA (sobre un total de 72 estudiantes) con un promedio de 18/20 puntos y obtuvo el premio a la excelencia ejecutiva en el año 2007 a nivel empresarial.
								Actualmente ocupa el rol de CEO en Venezuela, asiste a un grupo exclusivo de clientes mediante su participación en sus consejos consultivos y juntas directivas.
							</p>

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
							<strong>Director General ilernus Venezuela</strong>
							<p style="text-align: justify;">
								María Alejandra posee más de 15 años de exitosa experiencia en el área docente en la Universidad Metropolitana, así como también en el área de gerencia, liderazgo y desarrollo de proyectos relacionados con tecnología educativa y formación en línea (e-learning).
							</p>
							<p style="text-align: justify;">
								Es egresada de la Universidad Metropolitana como Licenciada en Educación Preescolar, mención Gerencia. Posee posgrados en Informática Educativa (USB) y Entornos virtuales de aprendizaje (OEA-Virtual Educa). 
								Los proyectos de formación en línea son su pasión y el desarrollarlos, llevándolos a feliz término, es su meta firme.
								Actualmente se desempeña como Director General de ilernus Venezuela.
							</p>

							<hr>
			
						</div>

					</div>

					<!-- LEFT -->
					<div class="col-md-6 col-sm-6 nopadding nomargin">

						<img class="img-responsive" src="smarty/assets/images/demo/people/1200x800/1-min.jpg" alt="image" />

					</div>

				</div>
				
			</section>
			<!-- /Member -->

		</div>

	</div>
</section>
<!-- / -->












			<!-- FEATURES -->
			<section id="features">
				<div class="container">

					<header class="text-center margin-bottom-60">
						<h2>Our Features</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>

					<!-- FEATURED BOXES 3 -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="text-center">
								<i class="ico-light ico-lg ico-rounded ico-hover et-circle-compass"></i>
								<h4>Pixel Perfect</h4>
								<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="text-center">
								<i class="ico-light ico-lg ico-rounded ico-hover et-piechart"></i>
								<h4>Graphs</h4>
								<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="text-center">
								<i class="ico-light ico-lg ico-rounded ico-hover et-strategy"></i>
								<h4>Startegy</h4>
								<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="text-center">
								<i class="ico-light ico-lg ico-rounded ico-hover et-streetsign"></i>
								<h4>SEO Optimized</h4>
								<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus. </p>
							</div>
						</div>
					</div>
					<!-- /FEATURED BOXES 3 -->

					<!-- FEATURED BOXES 3 -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="text-center">
								<i class="ico-light ico-lg ico-rounded ico-hover et-trophy"></i>
								<h4>Winners</h4>
								<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="text-center">
								<i class="ico-light ico-lg ico-rounded ico-hover et-gears"></i>
								<h4>Responsive</h4>
								<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="text-center">
								<i class="ico-light ico-lg ico-rounded ico-hover et-tools"></i>
								<h4>Costomizable</h4>
								<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="text-center">
								<i class="ico-light ico-lg ico-rounded ico-hover et-layers"></i>
								<h4>Easy to Modify</h4>
								<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus. </p>
							</div>
						</div>
					</div>
					<!-- /FEATURED BOXES 3 -->

				</div>
			</section>
			<!-- /FEATURES -->




			<!-- PRICING -->
			<section id="pricing">
				<div class="container">

					<header class="text-center margin-bottom-60">
						<h2>Our Pricing</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>

					<div class="row">

						<div class="col-md-3 col-sm-3">
							
							<div class="price-clean">                                
								<h4>
									<sup>$</sup>15<em>/month</em>
								</h4>
								<h5> Starter </h5>
								<hr />
								<p>For individuals looking for something simple to get started.</p>
								<hr />
								<a href="#" class="btn btn-3d btn-teal">Learn More</a>
							</div>
						
						</div>

						<div class="col-md-3 col-sm-3">
							
							<div class="price-clean">                                
								<h4>
									<sup>$</sup>25<em>/month</em>
								</h4>
								<h5> BUSINESS </h5>
								<hr />
								<p>For individuals looking for something simple to get started.</p>
								<hr />
								<a href="#" class="btn btn-3d btn-teal">Learn More</a>
							</div>
						
						</div>

						<div class="col-md-3 col-sm-3">
							
							<div class="price-clean price-clean-popular"> 
								<div class="ribbon"> 
									<div class="ribbon-inner">POPULAR</div>
								</div>
								
								<h4>
									<sup>$</sup>35<em>/month</em>
								</h4>
								<h5> DEVELOPER </h5>
								<hr />
								<p>For individuals looking for something simple to get started.</p>
								<hr />
								<a href="#" class="btn btn-3d btn-primary">Learn More</a>
							</div>
						
						</div>

						<div class="col-md-3 col-sm-3">
							
							<div class="price-clean">                                
								<h4>
									<sup>$</sup>50<em>/month</em>
								</h4>
								<h5> VIP </h5>
								<hr />
								<p>For individuals looking for something simple to get started.</p>
								<hr />
								<a href="#" class="btn btn-3d btn-teal">Learn More</a>
							</div>
						
						</div>

					</div>

				</div>
			</section>
			<!-- /PRICING -->



			<!-- TESTIMONIALS -->
			<section id="testimonials" class="alternate">
				<div class="container">

					<header class="text-center margin-bottom-60">
						<h2>Testimonials</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>

					<!-- 
						Note: remove class="rounded" from the img for squared image!
					-->
					<div class="row margin-bottom-60">
						<div class="col-md-4">
							<div class="testimonial testimonial-bordered padding-15">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/2-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
									<cite>
										Felicia Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimonial testimonial-bordered padding-15">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/1-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
									<cite>
										Joana Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimonial testimonial-bordered padding-15">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/6-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
									<cite>
										Melissa Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</div>
					</div>

					<!-- 
						Note: remove class="rounded" from the img for squared image!
					-->
					<ul class="row clearfix testimonial-dotted list-unstyled">
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/2-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Joana Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/6-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Melissa Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/7-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Stephany Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/8-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Pamela Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/11-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Simina Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="smarty/assets/images/demo/people/300x300/12-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Mihaela Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
					</ul>

				</div>
			</section>
			<!-- /TESTIMONIALS -->




			<!-- -->
			<section>
				<div class="container">
					
					<div class="row">
					
						<div class="col-lg-4">

							<div class="heading-title heading-border-bottom">
								<h3>Smarty Vision</h3>
							</div>

							<div class="toggle toggle-transparent-body toggle-accordion">

								<div class="toggle active">
									<label>Who we are?</label>
									<div class="toggle-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>
								</div>

								<div class="toggle">
									<label>Our long-term vison</label>
									<div class="toggle-content">
										<p>Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc.</p>
									</div>
								</div>

								<div class="toggle">
									<label>How can we help you?</label>
									<div class="toggle-content">
										<p>Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
									</div>
								</div>

							</div>

						</div>

						<div class="col-lg-4">

							<div class="heading-title heading-border-bottom">
								<h3>Smarty Skills</h3>
							</div>

							<div class="progress progress-lg"><!-- progress bar -->
								<div class="progress-bar progress-bar-warning progress-bar-striped active text-left" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%; min-width: 2em;">
									<span>WEB DESIGN 90%</span>
								</div>
							</div><!-- /progress bar -->

							<div class="progress progress-lg"><!-- progress bar -->
								<div class="progress-bar progress-bar-danger progress-bar-striped active text-left" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%; min-width: 2em;">
									<span>HTML/CSS 98%</span>
								</div>
							</div><!-- /progress bar -->

							<div class="progress progress-lg"><!-- progress bar -->
								<div class="progress-bar progress-bar-success progress-bar-striped active text-left" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%; min-width: 2em;">
									<span>JAVASCRIPT 60%</span>
								</div>
							</div><!-- /progress bar -->

							<div class="progress progress-lg"><!-- progress bar -->
								<div class="progress-bar progress-bar-info progress-bar-striped active text-left" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%; min-width: 2em;">
									<span>PHP/MYSQL 88%</span>
								</div>
							</div><!-- /progress bar -->

						</div>

						<div class="col-lg-4">

							<div class="heading-title heading-border-bottom">
								<h3>Smarty Special</h3>
							</div>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aliquam id pariatur accusantium perspiciatis deserunt officiis similique nihil dolor blanditiis dignissimos iure praesentium vero suscipit doloribus aperiam unde hic non sint neque molestiae consectetur voluptatum beatae ratione corporis.</p>
							
							<a href="#" class="btn btn-default btn-block btn-lg">Join Us Now</a>
							
						</div>

					</div>

				</div>
			</section>
			<!-- / -->



			<!-- -->
			<section class="alternate">
				<div class="container">
					
					<div class="text-center">
						<h2 class="wow fadeInUp nomargin" data-wow-delay="0.3s">DOES SMARTY CONVINCED YOU?</h2>

						<p class="lead font-lato size-30 wow fadeInUp margin-bottom-60" data-wow-delay="0.5s">Building a Landing Page was never so Easy &amp; Interactive.</p>
						
						<div class="margin-top-30">
							<a href="#" class="btn btn-3d btn-lg wow fadeInUp btn-teal" data-wow-delay="0.7"><i class="glyphicon glyphicon-th-large"></i>FREE TRIAL</a>
							<span class="size-17 hidden-xs wow fadeInUp" data-wow-delay="1s">&nbsp; OR &nbsp;</span>
							<a href="#" class="btn btn-3d btn-lg wow fadeInUp btn-red" data-wow-delay="0.59"><i class="glyphicon glyphicon-user"></i>START FOR A SIBSCRIPTION</a>
						</div>
					</div>

				</div>
			</section>
			<!-- / -->





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
