<?php
get_header();
?>

<div id="banner-header page-nav">
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
		</div>

<div class="page-heading text-center">

	<div class="container zoomIn animated">
		<div class="nc_links">
			<a href="<?php echo get_home_url()?>">Inicio</a>
			<a class="arrow">></a>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>

		<h2 class="page-title"><?php the_title(); ?><span class="title-under"></span></h2>
		
	</div>

</div>

<?php
if(have_posts()){
	
	while(have_posts()){
		the_post();
		?>
<section class=" section-oferta">
<div class="page-heading titulo">
          <h2 class="text-center">Encuentra tu neumático por <span class="span" >temporada</span></h2>
      </div>
    <div class="widget-landing season container">
      
          <div class=" separador">
          <div class="row">
              <div class="col-sm-6 col-md-4">
                  <div class="widget-image"> 
                      <a href="" title="Verano">
                        <img class="img" src="<?php bloginfo('template_url'); ?>/images/revision-standard.png" alt="Neumáticos Verano">
                        <br>
                        <span>Neumáticos  Verano</span>
                      </a>
                    </div>
                    </div>
                <div class="col-sm-6 col-md-4  ">
                    <div class="widget-image">
                      <a href="" title="Invierno">
                          <img class="img" src="<?php bloginfo('template_url'); ?>/images/revision-super.png" alt="Neumáticos Invierno">
                          <br>
                          <span>Neumáticos  Invierno</span>
                      </a>
                    </div>
                     </div>
                <div class="col-sm-6 col-md-4">
                    <div class="widget-image">
                        <a href="" title="All season">  
                          <img class="img" src="<?php bloginfo('template_url'); ?>/images/revision-integral.png" alt="Neumáticos All season">
                            <br>
                          <span>Neumáticos  All season</span>
                          </a>
                      </div>
      </div>
</section>


<section class="section-dimensiones">
<div class="page-heading">
              <h2 class="h2 container text-center">Encuentra tus neumáticos por <span class="span" >dimensiones</span></h2>
          </div> 
      <div class="widget-landing dimensions container">
            <div class="separador">
            <div class="row">
                <div class="col-sm-4 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-4 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ2.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-4 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ3.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-4 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ4.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-4 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ5.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-4 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ6.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-4 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ7.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-4 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ8.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-4 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ9.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-4 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ10.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				<div class="col-sm-4 col-md-3 item e1">
                  <div class="links widget-image">
					  <a href="" title="205/55 R16">
					  <div class="contenedor">
					  	  <img class="img img-fluid" src="<?php bloginfo('template_url'); ?>/images/categ11.png" alt="Generic tyre">
							<span class="description-service text1">Neúmatico 205/55 R16</span>
					  </div>
                       
                        </a>
                    </div>
				</div>
				
   </div>
</section>
<div class="container">
<p class="text-justify texto">
En la red de autocentros ( taller + tienda) de Feu Vert te daremos la mejor atención y garantía para el mantenimiento de tu coche: cambios de aceite y filtro, pastillas de freno, montaje de amortiguadores, tubos de escape, baterías de coche, carga de aire acondicionado, correa de distribución, embrague... En definitiva, tu coche en buenas manos, con calidad y garantía al mejor precio. Llámanos y te asesoraremos.</p>

</div>
	
<?php	
	}
}else {
	
	?>
		<article class="post page <?php if(has_post_thumbnail()) { echo 'has-thumbnail'; }?> archive">
	
	<h2>Este post no existe</h2>
	<br>
	<a href="<?php bloginfo("url")?>" style="padding: 10px 0;">Volver a la pagina principal</a>
	<p></p>
	
	</article>
	<?php
}	
?>
	
<?php
get_footer();
?>