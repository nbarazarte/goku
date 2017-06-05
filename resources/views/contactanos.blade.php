@extends('app')

@section('content')

			<section id="contacto" class="heading-title parallax" style="background-image: url('smarty/assets/images/demo/cubes-azul.jpg');">
			<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">Contáctanos</h3>
						<p>En <strong style="color: #F47741; font-size: 20px">iLernus,</strong> nos adaptamos a <em><b>ti</b></em></p>
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
												<input required type="text" class="form-control masked" data-format="(9999) 999-99-99" data-placeholder="X" placeholder="" name="phone" id="phone">

												
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">

											<div class="col-md-4">
												<label for="cargo">Cargo</label>
												<select required class="form-control pointer" id="cargo" name="cargo" onchange="showfield(this.options[this.selectedIndex].value)">
													<option value="">--- Seleccione ---</option>
													<option value="Director">Director</option>
													<option value="Gerente">Gerente</option>
													<option value="otros">Otros</option>
												</select>
												<div id="div1"></div>
											</div>
											<div class="col-md-4">
													<label for="sector">Sector Industrial</label>
													<select required class="form-control pointer" id="sector" name="sector" onchange="showfield2(this.options[this.selectedIndex].value)">
														<option value="">--- Seleccione ---</option>
														<option value="Salud">Salud</option>
														<option value="Medios de Comunicación">Medios de Comunicación</option>
														<option value="Deportes">Deportes</option>
														<option value="Tecnología">Tecnología</option>
														<option value="Educación">Educación</option>
														<option value="Comercio">Comercio</option>
														<option value="Transporte y Comunicaciones">Transporte y Comunicaciones</option>
														<option value="Turismo">Turismo</option>
														<option value="Banca/Finanzas">Banca/Finanzas</option>
														<option value="Seguros">Seguros</option>
														<option value="Administración Pública">Administración Pública</option>
														<option value="Marketing">Marketing</option>
														<option value="Capital Humano">Capital Humano</option>
														<option value="otros">Otros</option>
													</select>
													<div id="div2"></div>
												</div>											
											<div class="col-md-4">
													<label for="contact_asunto">Asunto</label>
													<select required class="form-control pointer" id="asunto" name="asunto">
														<option value="">--- Seleccione ---</option>
														<option value="Comentarios">Comentarios</option>
														<option value="Sugerencias">Sugerencias</option>
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

							<h2><strong style="color: #F47741"><em>¡Visítanos!</em></strong></h2>

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
								<span class="block"><strong><i class="fa fa-map-marker"></i> Dirección:</strong> Urb. Terrazas del Ávila, Zona Rental Universidad Metropolitana. Edif. Andrés German Otero Mezzanina. Oficina B&G (iLernus). Caracas, Edo. Miranda.</span>
								<span class="block"><strong><i class="fa fa-phone"></i> Teléfono:</strong> <a href="tel:+58-212-204-24-31">+58 (212) 204.24.31 </a></span>
								<span class="block"><strong><i class="fa fa-envelope"></i> Correo Electrónico:</strong> <a href="mailto:info@ilernus.com">info@ilernus.com</a></span>
							</p>

						</div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
			<!-- / -->

<script type="text/javascript">
function showfield(name){
  if(name=='otros')
  	document.getElementById('div1').innerHTML='<label for="otroCargo">Indique</label><input type="text" class="form-control pointer" name="otroCargo" />';

  else document.getElementById('div1').innerHTML='';
}

function showfield2(name){
  if(name=='otros')
  	document.getElementById('div2').innerHTML='<label for="otroSector">Indique</label><input type="text" class="form-control pointer" name="otroSector" />';

  else document.getElementById('div2').innerHTML='';
}
</script>

@endsection					