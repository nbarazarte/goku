@extends('app')

@section('content')

			<section id="contacto" class="callout-dark heading-title heading-arrow-bottom" style="">
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">Contáctanos</h3>
						<p>En <strong style="color: #F47741; font-size: 20px">ilernus,</strong> nos adaptamos a <em><b>ti</b></em></p>
					</div>

				</div>
			</section>
		
			<!--
			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

				<div class="text-center">

					<h3 style="color: #ffffff">Da un recorrido virtual por nuestras instalaciones</h3>

				</div>

			</div>

			<section>
				<div class="container">

					<div class="row">

						
						<div class="col-md-12 col-sm-12" style="">

							<iframe src="http://avirtum.com/demo/ipanorama/fullscreen.html" width="100%" height="400px"></iframe>

						</div>

					</div>	


				</div>
			</section>
			-->
			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

				<div class="text-center">

					<h3 style="color: #ffffff">Estamos para ti</h3>

				</div>

			</div>

			<section>
				<div class="container">		

					<div class="row">

						<!-- FORM -->
						<div class="col-md-8 col-sm-8">

							<h3>Envíanos tus preguntas y comentarios</h3>

				
                    			@if(Session::has('message'))
					            
									<div id="mensaje-enviado" class="alert alert-success" role="alert">
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									  <span aria-hidden="true">&times;</span></button>
									  <strong><i class="fa fa-check"></i></strong> {{Session::get('message')}}
									</div>

								@endif  							

							{!! Form::open(['route' => 'enviar', 'method'=>'PUT', 'id' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 

								<fieldset>
									<input type="hidden" name="action" value="contact_send" />

									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label for="name">Nombre y Apellido *</label>
												<input required type="text" value="" class="form-control" name="name" id="name">
											</div>
											<div class="col-md-4">
												<label for="email">Correo Electrónico *</label>
												<input required type="email" value="" class="form-control" name="email" id="email">
											</div>
											<div class="col-md-4">
												<label for="phone">Teléfono</label>
												<input type="text" value="" class="form-control" name="phone" id="phone">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">

											<div class="col-md-4">
												<label for="contact_asunto">Cargo</label>
												<select class="form-control pointer" id="cargo" name="cargo">
													<option value="">--- Seleccione ---</option>
													<option value="director">Director</option>
													<option value="gerente">Gerente</option>
													<option value="otros">Otros</option>
												</select>
											</div>
											<div class="col-md-4">
													<label for="contact_asunto">Sector Industrial</label>
													<select class="form-control pointer" id="sector" name="sector">
														<option value="">--- Seleccione ---</option>
														<option value="salud">Salud</option>
														<option value="medios_comunicacion">Medios de Comunicación</option>
														<option value="deportes">Deportes</option>
														<option value="tecnologia">Tecnología</option>
														<option value="educacion">Educación</option>
														<option value="comercio">Comercio</option>
														<option value="transporte_comunicaciones">Transporte y Comunicaciones</option>
														<option value="turismo">Turismo</option>
														<option value="banca_finanzas">Banca/Finanzas</option>
														<option value="seguros">Seguros</option>
														<option value="admin_publica">Administración Pública</option>
														<option value="marketing">Marketing</option>
														<option value="capital_humano">Capital Humano</option>
														<option value="otros">Otros</option>
													</select>
												</div>											
											<div class="col-md-4">
													<label for="contact_asunto">Asunto</label>
													<select class="form-control pointer" id="asunto" name="asunto">
														<option value="">--- Seleccione ---</option>
														<option value="comentarios">Comentarios</option>
														<option value="sugerencias">Sugerencias</option>
														<option value="otros">Otros</option>
													</select>
												</div>											
											</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="message">Mensaje *</label>
												<textarea required maxlength="10000" rows="8" class="form-control" name="message" id="message"></textarea>
											</div>
										</div>
									</div>

								</fieldset>

								<div class="row">
									<div class="col-md-12">
										{!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
									</div>
								</div>
							{!! Form::close() !!}

						</div>
						<!-- /FORM -->

						<!-- INFO -->
						<div class="col-md-4 col-sm-4">

							<h2><strong style="color: #F47741"><em>¡Visitanos!</em></strong></h2>

							<!-- 
							Available heights
								height-100
								height-150
								height-200
								height-250
								height-300
								height-350
								height-400
								height-450
								height-500
								height-550
								height-600
							-->
							<div id="map2" class="height-200 grayscale"></div>

							<hr />

							<p>
								<span class="block"><strong><i class="fa fa-map-marker"></i> Dirección:</strong> Urb. Terrazas del Avila, Zona Rental Universidad Metropolitana. Edif. 1. P1. Oficina ilernus, (B&G). Caracas, Edo. Miranda.</span>
								<span class="block"><strong><i class="fa fa-phone"></i> Teléfono:</strong> <a href="tel:1800-555-1234">+58 (212) 204.24.31 </a></span>
								<span class="block"><strong><i class="fa fa-envelope"></i> Correo Electrónico:</strong> <a href="mailto:mail@yourdomain.com">info@ilernus.com</a></span>
							</p>

						</div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
			<!-- / -->

@endsection					