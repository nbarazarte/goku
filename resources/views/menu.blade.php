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
													Inicio
												</a>

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog'))

												<a href="{{ route('home') }}">
													Ilernus
												</a>

											@endif

										</li>
										<li><!--  -->

											@if(Route::current()->getName() == 'home')

												<a href="#conocenos">
													Conócenos
												</a>

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog'))

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

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog'))

												<a href="http://localhost:8000#soluciones">
													Soluciones
												</a>

											@endif
																						
										</li>
										<li><!--  -->
											<a href="{{ route('instructores')}}">
												Instructores
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

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') ||  (Route::current()->getName() == 'blog'))

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
