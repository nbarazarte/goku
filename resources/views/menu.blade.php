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

									<ul id="topMain" class="nav nav-pills nav-main nav-onepage" style="font-size: 14px">

										<li class=""><!-- HOME -->

											@if(Route::current()->getName() == 'home')

												<a href="#">
													Inicio
												</a>

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog') || (Route::current()->getName() == 'terminos') || (Route::current()->getName() == 'politicas') || (Route::current()->getName() == 'faq') || (Route::current()->getName() == 'mapa') || (Route::current()->getName() == 'trabaja') || (Route::current()->getName() == 'blogPost'))

												@if( $_SERVER['SERVER_NAME'] == 'localhost' )

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#">
														Inicio
													</a>

												@else

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}#">
														Inicio
													</a>

												@endif

											@endif

										</li>
										<li class=""><!-- HOME -->

											@if(Route::current()->getName() == 'home')

												<a href="#ilernus">
													iLernus
												</a>

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog') || (Route::current()->getName() == 'terminos') || (Route::current()->getName() == 'politicas') || (Route::current()->getName() == 'faq') || (Route::current()->getName() == 'mapa') || (Route::current()->getName() == 'trabaja') || (Route::current()->getName() == 'blogPost'))

												@if( $_SERVER['SERVER_NAME'] == 'localhost' )

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#ilernus">
														iLernus
													</a>

												@else

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}#ilernus">
														iLernus
													</a>

												@endif

											@endif

										</li>




										<li class="dropdown"><!--  -->

											@if(Route::current()->getName() == 'home')

												<a class="dropdown-toggle" href="#conocenos">
													Conócenos
												</a>

												<ul class="dropdown-menu">
													<li class="dropdown">
														<a class="" href="#directores">
															Equipo Directivo
														</a>
													</li>
													<li class="dropdown">
														<a class="" href="#gerentes">
															Equipo Gerencial
														</a>
													</li>												
												</ul>											

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog') || (Route::current()->getName() == 'terminos') || (Route::current()->getName() == 'politicas') || (Route::current()->getName() == 'faq') || (Route::current()->getName() == 'mapa') || (Route::current()->getName() == 'trabaja') || (Route::current()->getName() == 'blogPost'))


												@if( $_SERVER['SERVER_NAME'] == 'localhost' )

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#conocenos">
														Conócenos
													</a>
													<ul class="dropdown-menu">
														<li class="dropdown">
															<a class="" href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#directores">
																Equipo Directivo
															</a>
														</li>
														<li class="dropdown">
															<a class="" href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#gerentes">
																Equipo Gerencial
															</a>
														</li>												
													</ul>													

												@else

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#conocenos">
														Conócenos
													</a>
													<ul class="dropdown-menu">
														<li class="dropdown">
															<a class="" href="http://{{ $_SERVER['SERVER_NAME'] }}#directores">
																Equipo Directivo
															</a>
														</li>
														<li class="dropdown">
															<a class="" href="http://{{ $_SERVER['SERVER_NAME'] }}#gerentes">
																Equipo Gerencial
															</a>
														</li>												
													</ul>													

												@endif

											@endif

										</li>





										<li><!--  -->

											@if(Route::current()->getName() == 'home')

												<a  href="#soluciones">
													Soluciones
												</a>

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog') || (Route::current()->getName() == 'terminos') || (Route::current()->getName() == 'politicas') || (Route::current()->getName() == 'faq') || (Route::current()->getName() == 'mapa') || (Route::current()->getName() == 'trabaja') || (Route::current()->getName() == 'blogPost'))

												@if( $_SERVER['SERVER_NAME'] == 'localhost' )

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#soluciones">
														Soluciones
													</a>

												@else

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}#soluciones">
														Soluciones
													</a>

												@endif

											@endif
																						
										</li>




										<li><!--  -->

											@if(Route::current()->getName() == 'home')

												<a  href="#cursos">
													Nuestros Cursos
												</a>

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog') || (Route::current()->getName() == 'terminos') || (Route::current()->getName() == 'politicas') || (Route::current()->getName() == 'faq') || (Route::current()->getName() == 'mapa') || (Route::current()->getName() == 'trabaja') || (Route::current()->getName() == 'blogPost'))

												@if( $_SERVER['SERVER_NAME'] == 'localhost' )

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#cursos">
														Nuestros Cursos
													</a>

												@else

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}#cursos">
														Nuestros Cursos
													</a>

												@endif

											@endif
																						
										</li>



										<li><!--  -->
											<a href="{{ route('instructores')}}">
												Academia de Instructores
											</a>
										</li>

										<!--
										<li>
											<a href="{{ route('blog')}}" target="_blank">
												Blog
											</a>
										</li>
										-->

										<!--
										<li>
											@if(Route::current()->getName() == 'home')

												<a  href="#testimonios">
													Testimonios
												</a>

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog') || (Route::current()->getName() == 'terminos') || (Route::current()->getName() == 'politicas') || (Route::current()->getName() == 'faq') || (Route::current()->getName() == 'mapa') || (Route::current()->getName() == 'trabaja') || (Route::current()->getName() == 'blogPost'))

												@if( $_SERVER['SERVER_NAME'] == 'localhost' )

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#testimonios">
														Testimonios
													</a>

												@else

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}#testimonios">
														Testimonios
													</a>

												@endif

											@endif										
										</li>

										-->
										<li><!--  -->
											<a href="{{ route('contactanos')}}">
												Contáctanos
											</a>
										</li>																			


									</ul>						 

							</nav>

						</div>
