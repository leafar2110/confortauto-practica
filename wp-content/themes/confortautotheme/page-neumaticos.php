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

<section class="section-caracteristicas container">
          <div class="row">
                    <form id="" action="#" class="form-neumatico">
                      <div class="bd-neumatico">
                      <div class="col-1-8">
                        <label for="ruedamedida">Anchura</label>
                          <select class=".select" name="ruedamedida" id="ruedamedida">
                            <option value="">Todos</option>
                            <option value="145">145</option><option value="155">155</option><option value="165">165</option><option value="175">175</option><option value="185">185</option><option value="195">195</option><option value="205">205</option><option value="215">215</option><option value="225">225</option><option value="235">235</option><option value="245">245</option><option value="255">255</option><option value="265">265</option><option value="275">275</option><option value="285">285</option><option value="295">295</option><option value="305">305</option><option value="315">315</option>                        </select>
      
                      </div>
                      <div class="col-1-8">
                        <label for="ruedaperfil">Altura</label>
                          <select class=".select" name="ruedaperfil" id="ruedaperfil">
                            <option value="">Todos</option>
                            <option value="30">30</option><option value="35">35</option><option value="40">40</option><option value="45">45</option><option value="50">50</option><option value="55">55</option><option value="60">60</option><option value="65">65</option><option value="70">70</option><option value="75">75</option><option value="80">80</option><option value="85">85</option>                        </select>
                        
                      </div>
                      <div class="col-1-8">
                        <label for="ruedaradio">Diámetro</label>
                          <select class=".select" name="ruedaradio" id="ruedaradio">
                            <option value="">Todos</option>
                            <option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option>                        </select>
                      
                      </div>
                        <div class="col-1-8">
                          <label for="ruedaindicecarga">Carga</label>

                            <select class=".select" name="ruedaindicecarga" id="ruedaindicecarga">
                              <option value="">Todos</option>
                              <option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option><option value="100/98">100/98</option><option value="100">100</option><option value="101">101</option><option value="102">102</option><option value="103">103</option><option value="104/102">104/102</option><option value="104">104</option><option value="104/106">104/106</option><option value="105">105</option><option value="106">106</option><option value="107">107</option><option value="108">108</option><option value="109">109</option><option value="110/108">110/108</option><option value="110">110</option><option value="110-112">110-112</option><option value="99/97">99/97</option><option value="111">111</option><option value="112/110">112/110</option><option value="112">112</option><option value="113">113</option><option value="114">114</option><option value="115">115</option><option value="116">116</option><option value="121">121</option>                        </select>
                        
                        </div>
                        <div class="col-1-8">
                        <label for="ruedavelocidad">Velocidad</label>

                            <select class=".select" name="ruedavelocidad" id="ruedavelocidad">
                              <option value="">Todos</option>
                              <option value="h">H</option><option value="q">Q</option><option value="r">R</option><option value="s">S</option><option value="t">T</option><option value="v">V</option><option value="w">W</option><option value="y">Y</option>                        </select>
                          
                        </div>
                        <div class="col-1-8">
                          <label for="marca">Marca</label>

                              <select class=".select" name="marca" id="marca">
                                <option value="">Todos</option>
                                <option value="continental">Continental</option><option value="dunlop">Dunlop</option><option value="feuvert">Feuvert</option><option value="fire">Fire</option><option value="firestone">Firestone</option><option value="michelin">Michelin</option><option value="orium">Orium</option><option value="pirelli">Pirelli</option>                        </select>
                        
                      </div>
                      <div class="col-1-8">
                        <label for="season">Temporada</label>
                            <select class=".select" name="season" id="season">
                              <option value="">Todos</option>
                              <option value="all season">All season</option><option value="invierno">Invierno</option><option value="verano">Verano</option>                        </select>

                      </div>
                    <div class="col-1-8">
                        <label for="antipinchazos">Antipinchazos</label>
                          <select class=".select" name="antipinchazos" id="antipinchazos">
                            <option value="">Todos</option>
                            <option value="no">No</option><option value="si">Si</option>                        </select>
                         </div>
                      </div>
                      
                    <div class="botones">
                      <div class="">
                        <button class="boton-buscar" type="button">Buscar</button>
                      </div>
                      <div class="">
                        <button disabled="" class="clear" type="button">Limpiar búsqueda</button>
                     </div>
                  </div>
            </form>
        </div>
</section>
		

<section class="section-vehiculo ">
      <div class="page-heading margin-titulo ">
          <h2 class=" text-center">Encuentra tu neumático por tipo de <span class="span">vehículo</span></h2>
      </div>
        <div class="container">
          <div class="separador">
            <div class="row" data-carousel="0">
                  <div class="col-sm-6 col-md-4">
                      <div class="widget-landing-option mobile-hcol-1-1 hcol-1-3 first  current">
                            <div class="widget-image">
                            <a href="" title="Turismo">
                                <img class="limit-size" src="<?php bloginfo('template_url'); ?>/images/turismo.png" alt="Neumáticos para Turismo">
                                <span> <br>Neumáticos para  Turismo</span>
                            </a>
                            </div>
                          <div class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum quos aliquam dignissimo. </div>
                          <div class="links">
                              <a href="">Neumáticos Michelin para turismos</a><br>
                              <a href="">Neumáticos Continental para turismos</a><br>
                              <a href="">Neumáticos Firestone para turismos</a><br>
                              <a href="">Neumaticos FeuVert para turismos</a><br>
                              <a href="">Neumaticos Orium para turismos</a><br>
                          </div>
                        </div>
                  </div>


                   
                   <div class="col-sm-6 col-md-4">
                      <div class="widget-landing-option mobile-hcol-1-1 hcol-1-3 first  current">
                            <div class="widget-image">
                            <a href="" title="Turismo">
                                <img class="limit-size" src="<?php bloginfo('template_url'); ?>/images/4x4.png" alt="Neumáticos para Turismo">
                                <span> <br>Neumáticos para  Turismo</span>
                            </a>
                            </div>
                          <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum quos aliquam dignissimo.                                </div>
                          <div class="links">
                              <a href="">Neumáticos Michelin para turismos</a><br>
                              <a href="">Neumáticos Continental para turismos</a><br>
                              <a href="">Neumáticos Firestone para turismos</a><br>
                              <a href="">Neumaticos FeuVert para turismos</a><br>
                              <a href="">Neumaticos Orium para turismos</a><br>
                          </div>
                        </div>
                  </div>

                  <div class="col-sm-6 col-md-4">
                      <div class="widget-landing-option mobile-hcol-1-1 hcol-1-3 first  current">
                            <div class="widget-image">
                            <a href="" title="Turismo">
                                <img class="limit-size" src="<?php bloginfo('template_url'); ?>/images/furgoneta.png" alt="Neumáticos para Turismo">
                                <span> <br>Neumáticos para  Turismo</span>
                            </a>
                            </div>
                          <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum quos aliquam dignissimo.                                </div>
                          <div class="links">
                              <a href="">Neumáticos Michelin para turismos</a><br>
                              <a href="">Neumáticos Continental para turismos</a><br>
                              <a href="">Neumáticos Firestone para turismos</a><br>
                              <a href="">Neumaticos FeuVert para turismos</a><br>
                              <a href="">Neumaticos Orium para turismos</a><br>
                          </div>
                        </div>
                  </div>
                  </div>
                      <a href="" class="landing-link">Ver todos los tipos de vehículo</a>
                   
            </div>

        </div>
  
</section>


<section class="section-marca">
        <div class="page-heading">
            <h2 class=" text-center">Encuentra tu neumático por <span class="span">marca</span></h2>
        </div>
    <div class="widget-landing marca container">
        <div class=" separador">
            <div class="columns-5">
           
                    <div class="col-1-5">
                    <div class="widget-landing-option mobile-hcol-1-1 hcol-1-5 first  current">
                        <div class="widget-image">
                          <a href="" title="FIRESTONE">
                              <img class="img" src="<?php bloginfo('template_url'); ?>/images/firestone.jpg" width="100%" alt="Neumáticos FIRESTONE">
                              <span>Neumáticos  FIRESTONE</span>
                            </a>
                        </div>
                        <div class="description">Acierta con los neumáticos Firestone y encuéntralos a los precios más bajos.                                </div>
                            <div class="links">
                              <a href="">Firestone Roadhawk</a><br>
                              <a href="">Firestone Multihawk 2</a><br>
                              <a href="">Firestone TZ</a><br>
                              <a href="">Firestone Firehawk</a><br>
                              <a href="">Firestone Winterhawk 3</a><br>
                              <a href="">Firestone Vanhawk 2</a><br>
                            </div>
                        </div>
                    </div>

                    <div class="col-1-5">
                    <div class="widget-landing-option mobile-hcol-1-1 hcol-1-5 first  current">
                        <div class="widget-image">
                          <a href="" title="FIRESTONE">
                              <img class="img" src="<?php bloginfo('template_url'); ?>/images/feuvert.jpg" width="100%" alt="Neumáticos FIRESTONE">
                              <span>Neumáticos  FIRESTONE</span>
                            </a>
                        </div>
                        <div class="description">Acierta con los neumáticos Firestone y encuéntralos a los precios más bajos.                                </div>
                            <div class="links">
                              <a href="">Firestone Roadhawk</a><br>
                              <a href="">Firestone Multihawk 2</a><br>
                              <a href="">Firestone TZ</a><br>
                              <a href="">Firestone Firehawk</a><br>
                              <a href="">Firestone Winterhawk 3</a><br>
                              <a href="">Firestone Vanhawk 2</a><br>
                            </div>
                    </div>
                    </div>
                    <div class="col-1-5">
                    <div class="widget-landing-option mobile-hcol-1-1 hcol-1-5 first  current">
                        <div class="widget-image">
                          <a href="" title="FIRESTONE">
                              <img class="img" src="<?php bloginfo('template_url'); ?>/images/michelin.jpg" width="100%" alt="Neumáticos FIRESTONE">
                              <span>Neumáticos  FIRESTONE</span>
                            </a>
                        </div>
                        <div class="description">Acierta con los neumáticos Firestone y encuéntralos a los precios más bajos.                                </div>
                            <div class="links">
                              <a href="">Firestone Roadhawk</a><br>
                              <a href="">Firestone Multihawk 2</a><br>
                              <a href="">Firestone TZ</a><br>
                              <a href="">Firestone Firehawk</a><br>
                              <a href="">Firestone Winterhawk 3</a><br>
                              <a href="">Firestone Vanhawk 2</a><br>
                            </div>
                    </div>
                    </div>
                    <div class="col-1-5">
                    <div class="widget-landing-option mobile-hcol-1-1 hcol-1-5 first  current">
                        <div class="widget-image">
                          <a href="" title="FIRESTONE">
                              <img class="img" src="<?php bloginfo('template_url'); ?>/images/continental.jpg" width="100%" alt="Neumáticos FIRESTONE">
                              <span>Neumáticos  FIRESTONE</span>
                            </a>
                        </div>
                        <div class="description">Acierta con los neumáticos Firestone y encuéntralos a los precios más bajos.                                </div>
                            <div class="links">
                              <a href="">Firestone Roadhawk</a><br>
                              <a href="">Firestone Multihawk 2</a><br>
                              <a href="">Firestone TZ</a><br>
                              <a href="">Firestone Firehawk</a><br>
                              <a href="">Firestone Winterhawk 3</a><br>
                              <a href="">Firestone Vanhawk 2</a><br>
                            </div>
                        </div>
                    </div>

                    <div class="col-1-5">
                    <div class="widget-landing-option mobile-hcol-1-1 hcol-1-5 first  current">
                        <div class="widget-image">
                          <a href="" title="FIRESTONE">
                              <img class="img" src="<?php bloginfo('template_url'); ?>/images/orium.jpg" width="100%" alt="Neumáticos FIRESTONE">
                              <span>Neumáticos  FIRESTONE</span>
                            </a>
                        </div>
                        <div class="description">Acierta con los neumáticos Firestone y encuéntralos a los precios más bajos.                                </div>
                            <div class="links">
                              <a href="">Firestone Roadhawk</a><br>
                              <a href="">Firestone Multihawk 2</a><br>
                              <a href="">Firestone TZ</a><br>
                              <a href="">Firestone Firehawk</a><br>
                              <a href="">Firestone Winterhawk 3</a><br>
                              <a href="">Firestone Vanhawk 2</a><br>
                            </div>
                         </div>
                        </div>
                        </div>
                    <a href="" class="landing-link">Ver todas las marcas de neumáticos</a>
                    
                 </div>
             </div>
</section>
   
           
<section class="section-temporada ">
<div class="page-heading">
          <h2 class=" text-center">Encuentra tu neumático por <span class="span" >temporada</span></h2>
      </div>
    <div class="widget-landing season container">
       <div class="separador">
          <div class="row">

              <div class="col-sm-6 col-md-4">
                  <div class="widget-image"> 
                      <a href="" title="Verano">
                        <img class="" src="<?php bloginfo('template_url'); ?>/images/verano.png" alt="Neumáticos Verano">
                        <br>
                        <span>Neumáticos  Verano</span>
                      </a>
                    </div>
                  <div class="description"> Localiza en Feu Vert el mejor neumático de verano para los lugares más calurosos. </div>
                    <div class="links">
                      <a href="">Neumáticos para verano Continental</a><br>
                      <a href="">Neumáticos para verano Firestone</a><br>
                      <a href="">Neumáticos para verano Michelin</a><br>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4  ">
                    <div class="widget-image">
                      <a href="" title="Invierno">
                          <img class="" src="<?php bloginfo('template_url'); ?>/images/invierno.png" alt="Neumáticos Invierno">
                          <br>
                          <span>Neumáticos  Invierno</span>
                      </a>
                    </div>
                    <div class="description"> Disfruta de la carretera haya nieve o hielo con los neumáticos de invierno de Feu Vert.                                </div>
                    <div class="links">
                      <a href="">Neumáticos para invierno Continental</a><br>
                      <a href="">Neumáticos para invierno Firestone</a><br>
                      <a href="">Neumáticos para invierno Michelin</a><br>
                    </div>
                  </div>

                <div class="col-sm-6 col-md-4">
                    <div class="widget-image">
                        <a href="" title="All season">  
                          <img class="" src="<?php bloginfo('template_url'); ?>/images/mixto.png" alt="Neumáticos All season">
                            <br>
                          <span>Neumáticos  All season</span>
                          </a>
                      </div>
                      <div class="description"> Descubre los neumáticos All Season de todas las marcas disponibles en Feu Vert.                                </div>
                          <div class="links">
                            <a href="">Neumáticos all season Michelin</a><br>
                          </div>                                                                                                                                                                                          </div>
                   </div>
                  
            <a href="" class="landing-link">Ver todas las temporadas de neumáticos</a>
        </div>
        </div>
      </div>
</section>

<section class="section-dimensiones">
    <div class="page-heading">
        <h2 class="text-center">Encuentra tus neumáticos por <span class="span" >dimensiones</span></h2>
    </div> 
      <div class="widget-landing dimensions container">
          
            <div class=" separador">
            <div class="columns-5">
                <div class="col-1-5">
                  <div class="links widget-image">
                      <a href="" title="205/55 R16">
                        <img class="img" src="<?php bloginfo('template_url'); ?>/images/tyres.png" alt="Generic tyre">
                          <span>Neúmatico 205/55 R16</span>
                        </a>
                    </div>
                </div>
                <div class="col-1-5">
                  <div class="links widget-image">
                      <a href="" title="205/55 R16">
                        <img class="img" src="<?php bloginfo('template_url'); ?>/images/tyres.png" alt="Generic tyre">
                          <span>Neúmatico 205/55 R16</span>
                        </a>
                    </div>
                </div>
                <div class="col-1-5">
                  <div class="links widget-image">
                      <a href="" title="205/55 R16">
                        <img class="img" src="<?php bloginfo('template_url'); ?>/images/tyres.png" alt="Generic tyre">
                          <span>Neúmatico 205/55 R16</span>
                        </a>
                    </div>
                </div>
                <div class="col-1-5">
                  <div class="links widget-image">
                      <a href="" title="205/55 R16">
                        <img class="img" src="<?php bloginfo('template_url'); ?>/images/tyres.png" alt="Generic tyre">
                          <span>Neúmatico 205/55 R16</span>
                        </a>
                    </div>
                </div>
                <div class="col-1-5">
                  <div class="links widget-image">
                      <a href="" title="205/55 R16">
                        <img class="img" src="<?php bloginfo('template_url'); ?>/images/tyres.png" alt="Generic tyre">
                          <span>Neúmatico 205/55 R16</span>
                        </a>
                    </div>
                </div>
              </div>
          <a class="landing-link" href="">Ver todas las neumáticos por dimensiones</a>
      </div>       
   </div>
</section>   
       
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