<?php

function wordpress_resources(){
	
}

//woocommerce crap

// Display Fields
add_action('woocommerce_product_options_general_product_data', 'woocommerce_product_custom_fields');

// Save Fields
add_action('woocommerce_process_product_meta', 'woocommerce_product_custom_fields_save');


function woocommerce_product_custom_fields()
{
    global $woocommerce, $post;
	echo '<div class="product_custom_field">';
	
    //----------------------------------------------------
    woocommerce_wp_text_input(
        array(
            'id' => 'cfa_prefix',
            'placeholder' => 'cfa_prefix',
            'label' => __('Prefix', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);

	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_width',
            'placeholder' => 'cfa_width',
            'label' => __('width', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);

	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_hb',
            'placeholder' => 'cfa_hb',
            'label' => __('hb', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);

	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_seat',
            'placeholder' => 'cfa_seat',
            'label' => __('seat', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);

	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_sufix',
            'placeholder' => 'cfa_sufix',
            'label' => __('sufix', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);

	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_loadi',
            'placeholder' => 'cfa_loadi',
            'label' => __('loadi', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);

	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_speedi',
            'placeholder' => 'cfa_speedi',
            'label' => __('speedi', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);

	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_tubeless',
            'placeholder' => 'cfa_tubeless',
            'label' => __('tubeless', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);

	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_runflat',
            'placeholder' => 'cfa_runflat',
            'label' => __('runflat', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);

	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_flank',
            'placeholder' => 'cfa_flank',
            'label' => __('flank', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);

	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_winter',
            'placeholder' => 'cfa_winter',
            'label' => __('winter', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);

	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_label_crr',
            'placeholder' => 'cfa_label_crr',
            'label' => __('label_crr', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);

	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_label_g',
            'placeholder' => 'cfa_label_g',
            'label' => __('label_g', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);

	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_label_n',
            'placeholder' => 'cfa_label_n',
            'label' => __('label_n', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);

	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_RecyclingTaxRate',
            'placeholder' => 'cfa_RecyclingTaxRate',
            'label' => __('RecyclingTaxRate', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);

	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_taxAmountRecycling',
            'placeholder' => 'cfa_taxAmountRecycling',
            'label' => __('taxAmountRecycling', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);
	
	/*/----------------------------------------------------
	woocommerce_wp_text_input(
        array(
            'id' => 'cfa_',
            'placeholder' => 'cfa_',
            'label' => __('', 'woocommerce'),
            'desc_tip' => 'true'
        )
	);
	----------------------------------------*/

    echo '</div>';

}

//------------------------------custom taxonomies

add_action( 'init', 'custom_taxonomy_Item' );
function custom_taxonomy_Item()  {
$labels = array(
    'name'                       => 'Tipo',
    'singular_name'              => 'Tipo',
    'menu_name'                  => 'Tipo',
    'all_items'                  => 'Todos los Tipos',
    'parent_item'                => 'Padre',
    'parent_item_colon'          => 'Padre:',
    'new_item_name'              => 'Nuevo nombre de Tipo',
    'add_new_item'               => 'Agregar nuevo Tipo',
    'edit_item'                  => 'Editar Tipo',
    'update_item'                => 'Modificar Tipo',
    'separate_items_with_commas' => 'Separar Tipo con comas',
    'search_items'               => 'Buscar Tipo',
    'add_or_remove_items'        => 'Agragar o remover Tipos',
    'choose_from_most_used'      => 'Escoger Tipo mas usado',
);

$args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
);
register_taxonomy( 'tipo', 'product', $args );
register_taxonomy_for_object_type( 'tipo', 'product' );

$labels2 = array(
    'name'                       => 'Marca',
    'singular_name'              => 'Marca',
    'menu_name'                  => 'Marca',
    'all_items'                  => 'Todos las Marcas',
    'parent_item'                => 'Padre',
    'parent_item_colon'          => 'Padre:',
    'new_item_name'              => 'Nuevo nombre de Marca',
    'add_new_item'               => 'Agregar nueva Marca',
    'edit_item'                  => 'Editar Marca',
    'update_item'                => 'Modificar Marca',
    'separate_items_with_commas' => 'Separar Marca con comas',
    'search_items'               => 'Buscar Marca',
    'add_or_remove_items'        => 'Agragar o remover Marcas',
    'choose_from_most_used'      => 'Escoger Marca mas usada',
);

$args2 = array(
    'labels'                     => $labels2,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
);
register_taxonomy( 'marca', 'product', $args2 );
register_taxonomy_for_object_type( 'marca', 'product' );

}

//----------------------------------------

function woocommerce_product_custom_fields_save($post_id)
{
    //------------------------------------------------------
    $woocommerce_custom_product_text_field = $_POST['_nc_internalcode'];
    if (!empty($woocommerce_custom_product_text_field))
        update_post_meta($post_id, '_nc_internalcode', esc_attr($woocommerce_custom_product_text_field));
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );


add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

//get the most near ancestor of the page

@ini_set( 'upload_max_size' , '64M' );

function get_top_ancestor_id(){
	
	global $post;
	
	if($post->post_parent){
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}
	
	return $post->ID;
}

//customize excerpt

function custom_excerpt_length(){
	return 25;
}

function customexcerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);

	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	} else {
		$excerpt = implode(" ", $excerpt);
	}

	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

	return $excerpt;
}

//customize comment form

function my_custom_comment_fields( $fields ){
	if(isset($fields['url']))
	  unset($fields['url']);
	return $fields;
  }
  
  add_filter( 'comment_form_default_fields', 'my_custom_comment_fields' );

//has children for page

function has_children(){
	
	global $post;
	
	$pages = get_pages('child_of='.$post->ID);
	return count($pages);
}

//permalinks config

function reset_permalinks() {
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure( '/%category%/%postname%' );
}

add_action( 'init', 'reset_permalinks' );

//widgets

function WidgetInit(){
	
	register_sidebar( array(
		'name' => 'Barra lateral blog',
		'id' => 'sidebar1'
	));
	
	register_sidebar( array(
		'name' => 'Footer 1',
		'id' => 'footer1'
	));
}

add_action('widgets_init', 'WidgetInit');

//general setup



function wordpress_theme_setup(){
	
	register_nav_menus( array(
		'primary' => __( 'Primary Menu' ),
		'footer' => __( 'Footer Menu' ),
	));
		
	add_theme_support("post-thumbnails");
	
	add_image_size("very-small-thumbnail",90,60,array('left','top'));
	add_image_size("small-thumbnail",180,120,true);
	add_image_size("square-thumbnail", 500, 500, true);
	add_image_size("mid-thumbnail",360,240,true);
	add_image_size("large-thumbnail",720,480,true);
	add_image_size("banner-img",900, 400,array('left','top'));
	add_image_size("banner-image",920,620,array('left','top'));
	add_theme_support( 'custom-header' );
}

add_action('after_setup_theme', 'wordpress_theme_setup');

add_filter('excerpt_length', 'custom_excerpt_length');

add_action('wp_enqueue_scripts', 'wordpress_resources');

//customize option

function theme_customize_register($wp_customize){
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////HEADER
	
	
		$wp_customize->add_panel('panel1',
        array(
            'title' => 'Personalizar header',
            'priority' => 1,
            )
        );
		
		//////////////////////////////////////////////////////video
	
		$wp_customize->add_section('header', array (
		'title' => 'Video',
        'panel' => 'panel1'
		));
		
		$wp_customize->add_setting('header_media');
		
		$wp_customize->add_control( 
	new WP_Customize_Upload_Control($wp_customize, 'your_setting_id', array(
		'label'      => 'Video de fondo',
		'section'    => 'header',
		'settings'   => 'header_media',
	) ) 
);

}

add_action('customize_register','theme_customize_register');


function theme_customize_css(){ ?>
	
	
<?php	
}

add_action('wp_head', 'theme_customize_css');
?>