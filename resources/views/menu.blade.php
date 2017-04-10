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

												<a href="#slider">
													ILernus
												</a>

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog') || (Route::current()->getName() == 'terminos') || (Route::current()->getName() == 'politicas') || (Route::current()->getName() == 'faq') || (Route::current()->getName() == 'mapa'))

												<a href="{{ route('home') }}">
													ILernus
												</a>

											@endif

										</li>
										<li><!--  -->

											@if(Route::current()->getName() == 'home')

												<a href="#conocenos">
													Conócenos
												</a>

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog') || (Route::current()->getName() == 'terminos') || (Route::current()->getName() == 'politicas') || (Route::current()->getName() == 'faq') || (Route::current()->getName() == 'mapa'))

												<a href="http://localhost:8000#conocenos">
													Conócenos
												</a>

											@endif

										</li>
										<li><!--  -->

											@if(Route::current()->getName() == 'home')

												<a  href="#soluciones">
													Soluciones
												</a>

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog') || (Route::current()->getName() == 'terminos') || (Route::current()->getName() == 'politicas') || (Route::current()->getName() == 'faq') || (Route::current()->getName() == 'mapa'))

												<a href="http://localhost:8000#soluciones">
													Soluciones
												</a>

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

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog') || (Route::current()->getName() == 'terminos') || (Route::current()->getName() == 'politicas') || (Route::current()->getName() == 'faq') || (Route::current()->getName() == 'mapa'))

												<a href="http://localhost:8000#testimonios">
													Testimonios
												</a>

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
