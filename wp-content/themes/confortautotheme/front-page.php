<?php

get_header();
?>

<div id="banner-header" 
style=" 
	background: url(<?php bloginfo('template_url'); ?>/images/portada.jpg)no-repeat center 0px;
	background-size: cover;"
>
			<div class="navbar-main">             
              <div class="container">
                <div id="navbar" class="navbar-collapse collapse">
					<?php
						$args = array(
						  'theme_location' => 'primary',
						  'menu' => 'top_menu',
						  'depth' => 2,
						  'container' => false,
						  'menu_class' => 'nav navbar-nav'
						);
						
						?>
					
						<?php wp_nav_menu($args); ?>
                </div> 
              </div>   
			</div> 
			
			<div class="banner-caption">
                  <h2 class="bounceInDown animated slow title">Todos los servicios que necesitas en un mismo taller</h2>
			</div> 
		</div>
		<div class="cintillo">
			<img src="<?php bloginfo('template_url'); ?>/images/bannerinferior.jpg" width="100%" height="auto">
		</div>
		<div class="panel1">
			<div class="container" style="width: 100%;">
				<div class="row">
					<div class="col-sm-6 sm">
						<div class="menu search-menu">
							<ul class="search-btns">
								<li class="searchbtn">
									<div class="search-icon">
										<img src="<?php bloginfo('template_url'); ?>/images/icons/neumatico.png" width="100%" height="auto">
									</div>
									<p>NEUMATICOS</p>
								</li>
								<li class="searchbtn">
									<div class="search-icon">
										<img src="<?php bloginfo('template_url'); ?>/images/icons/pistola.png" width="100%" height="auto">
									</div>
									<p><span class="textp1">CHAPA Y </span>PINTURA</p>
								</li>
								<li class="searchbtn">
									<div class="search-icon">
										<img src="<?php bloginfo('template_url'); ?>/images/icons/engranajes.png" width="100%" height="auto">
									</div>
									<p>MANTENIMIENTO</p>
								</li>
								<li class="searchbtn">
									<div class="search-icon">
										<img src="<?php bloginfo('template_url'); ?>/images/icons/itv.png" width="100%" height="auto">
									</div>
									<p>REVISION ITV</p>
								</li>
								<ul>
									<li></li>
								</ul>
							</ul>
							<ul class="search-options">
								<li>
									<p>Anchura</p>
									<select name="anchura" id="anchura">
										<option value="0">Todos</option>
									</select>
								</li>
								<li>
									<p>Altura</p>
									<select name="altura" id="altura">
										<option value="0">Todos</option>
									</select>
								</li>
								<li>
									<p>Diametro</p>
									<select name="diametro" id="diametro">
										<option value="0">Todos</option>
									</select>
								</li>
								<li>
									<p>Carga</p>
									<select name="carga" id="carga">
										<option value="0">Todos</option>
									</select>
								</li>
								<li>
									<p>Velocidad</p>
									<select name="velocidad" id="velocidad">
										<option value="0">Todos</option>
									</select>
								</li>
							</ul>

							<div class="tyre-img">
								<img src="<?php bloginfo('template_url'); ?>/images/tyre.png" width="100%" height="auto"/>
							</div>

							<ul class="search-options2">
								<li>
									<label><input type="checkbox" name="season"><p><i class="far fa-sun" style="color: #fbff00"></i></p><p>Verano</p></label>
								</li>
								<li>
									<label><input type="checkbox" name="season"><p><i class="fas fa-snowflake" style="color: #a7caff"></i></p><p> Invierno</p></label>
								</li>
								<li>
									<label><input type="checkbox" name="season"><p><i class="fas fa-cloud" style="color: #717171"></i></p><p> All seasons</p></label>
								</li>
								<li>
									<label><input type="checkbox" name="season"><p><i class="fas fa-car"></i></p><p> Antipinchazos</p></label>
								</li>
							</ul>
							<div class="ssubmit-container">
								<a href="#" class="search-submit">Buscar</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="menu banner-menu">
							<img src="<?php bloginfo('template_url'); ?>/images/garantiacoche.jpg" width="100%" height="auto">
						<div class="messagebanner">
							<h3>GARANTÍA COCHE SEGURO CON <span class="yellow-text">NEW CAR</span></h3>
							<P>Durante <span class="blue-text">2 años</span> o <span class="blue-text">20.000 Km</span></P>
							<a href="#">¡DESCUBRE MÁS!</a>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="services1">
			<h3 class="header-title">TODO LO QUE NECESITA TU COCHE LO ENCUENTRAS EN <span class="blue-text">Taller Newcar</span></h3>
			<div class="container">
				<div class="service-ul">
					<div class="service-list">
						<div class="service-box">
							<p class="anuncio">BATERÍAS</p>
							<img src="<?php bloginfo('template_url'); ?>/images/services/s1.jpg">
							<!--div class="price">
								<p class="type">s4019 40Ah 330A</p>
								<p class="amount">69</p>
								<p class="eur">euros</p>
								<p class="amount2">95</p>

								<p class="buy">Comprar</p>
							</div-->
						</div>
					</div>
					<div class="service-list">
						<div class="service-box">
							<p class="anuncio">CAMBIO DE ACEITE</p>
							<img src="<?php bloginfo('template_url'); ?>/images/services/s2.jpg">
						</div>
					</div>
					<div class="service-list">
						<div class="service-box">
							<p class="anuncio">LIMPIEZA DE INYECCIÓN</p>
							<img src="<?php bloginfo('template_url'); ?>/images/services/s3.jpg">
						</div>
					</div>
					<div class="service-list">
						<div class="service-box">
							<p class="anuncio">COFRE 53 HYDRA 320</p>
							<img src="<?php bloginfo('template_url'); ?>/images/services/s4.jpg">
						</div>
					</div>
					<div class="service-list">
						<div class="service-box">
							<p class="anuncio">PORTABICICLETAS</p>
							<img src="<?php bloginfo('template_url'); ?>/images/services/s5.jpg">
						</div>
					</div>
					<div class="service-list">
						<div class="service-box">
							<p class="anuncio">OFERTA DEL MES</p>
							<img src="<?php bloginfo('template_url'); ?>/images/services/s6.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="atrbs">
			<h3 class="header-title">TU COCHE SIEMPRE EN BUENAS MANOS</h3>

			<ul class="adv-menu">
				<li class="adv-obj">
					<div>
						<p>Servicio rapido, cumplimos o lo regalamos</p>
					</div>
				</li>
				<li class="adv-obj">
					<div>
						<p>Todos los recambios para tu vehículo</p>
					</div>
				</li>
				<li class="adv-obj">
					<div>
						<p>Revisión Oficial<br><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
					</div>
				</li>
				<li class="adv-obj">
					<div>
						<p>Garantía de por vida</p>
					</div>
				</li>
				<li class="adv-obj">
					<div>
						<p>Disponible en dos horas</p>
					</div>
				</li>
			</ul>
		</div>

		<div class="notice-section clearfix">
			<ul>
				<?php
				
				$args=array(
					'posts_per_page'=>4
					);
	
				$my_query = new WP_Query($args);
				
				if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post(); 
					
							?>
								<li>
									<a href="<?php the_permalink(); ?>">
										<div class="notice-box">
											<div class="n-up">
												<img src="<?=the_post_thumbnail_url()?>">
											</div>
											<div class="n-down">
												<div>
													<h4><?php the_title(); ?></h4>
													<p><?php echo customexcerpt(5); ?></p>
												</div>
											</div>
										</div>
									</a>
								</li>

							<?php
					
					endwhile;
					}
					
				wp_reset_query();
				?>
			</ul>
		</div>

	<?php
get_footer();