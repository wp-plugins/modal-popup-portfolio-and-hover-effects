<?php
/*
Plugin Name: Super portfolios and effects 
Plugin URI: http://demo.wpcops.com/
Description: super portfolios and effects plugin providing your modal description for portfolio and few effects on your portfolio image
Author: Prince Chowdhury
Author URI: http://demo.wpcops.com/
Version: 1.3
*/

//Loading CSS
function portfolios_enqueue_screepts() {
    
	wp_enqueue_script('jquery');
	wp_enqueue_style('main_css', plugins_url( '/css/style1.css' , __FILE__ ) );
	wp_enqueue_style('main_csscommon', plugins_url( '/css/style_common.css' , __FILE__ ) );
	wp_enqueue_style('main_js1', plugins_url( '/js/modernizr.custom.97074.js' , __FILE__ ) );
	wp_enqueue_style('main_css2', plugins_url( '/css/noJS.css' , __FILE__ ) );
	wp_enqueue_style('main_cs34', plugins_url( '/css/css2/normalize.css' , __FILE__ ) );
	wp_enqueue_style('main_cs35', plugins_url( '/css/css2/set1.css' , __FILE__ ) );
	wp_enqueue_style('main_cs36', plugins_url( '/css/css2/set2.css' , __FILE__ ) );
	wp_enqueue_style('main_cs33', plugins_url( '/css/style2.css' , __FILE__ ) );
	wp_enqueue_style('main_js4', plugins_url( '/js/main.js' , __FILE__ ) );
	wp_enqueue_style('main_mjs5', plugins_url( '/js/jquery.hoverdir.js' , __FILE__ ) );

	wp_enqueue_style('ahew_stylesheet', plugins_url( '/css/reveal.css' , __FILE__ ) );
	//wp_enqueue_style('ahew_stylesheet_caption', plugins_url( '/css/caption.css' , __FILE__ ) );
	wp_enqueue_script('scrdddipt1', plugins_url( '/js/jquery.reveal.js' , __FILE__ ) );

}

add_action( 'wp_enqueue_scripts', 'portfolios_enqueue_screepts' );




// Loading VafPress Framework
if(!class_exists('VP_osAutoLoader')){
// Setup Contants
defined( 'VP_PORTFOLIOS_VERSION' ) or define( 'VP_PORTFOLIOS_VERSION', '2.0' );
defined( 'VP_PORTFOLIOS_URL' )     or define( 'VP_PORTFOLIOS_URL', plugin_dir_url( __FILE__ ) );
defined( 'VP_PORTFOLIOS_DIR' )     or define( 'VP_PORTFOLIOS_DIR', plugin_dir_path( __FILE__ ) );
defined( 'VP_PORTFOLIOS_FILE' )    or define( 'VP_PORTFOLIOS_FILE', __FILE__ );

// Lood Bootstrap
require 'framework/bootstrap.php';

}


// add Google Web font
$font_face = vp_option('logo_font_face');
$font_weight = vp_option('vp_get_gwf_weight');
$font_style = vp_option('logo_font_style');
VP_Site_GoogleWebFont::instance()->add($font_face, $font_weight, $font_style);
// embed font function
function mytheme_embed_fonts()
{
// you can directly enqueue and register
VP_Site_GoogleWebFont::instance()->register_and_enqueue();
// or register and get the handler to be used as dependency
VP_Site_GoogleWebFont::instance()->register();
wp_register_style('mystyle', 'path_to_style.css', VP_Site_GoogleWebFont::instance()->get_names());
wp_enqueue_style('mystyle');
}
add_action('wp_enqueue_scripts', 'mytheme_embed_fonts');



// Registering Custom Post
add_action( 'init', 'portfolios_custom_post_type' );
function portfolios_custom_post_type() {
	register_post_type( 'portfolios',
		array(
			'labels' => array(
				'name' => __( 'portfolios' ),
				'singular_name' => __( 'portfolio' ),
				'add_new_item' => __( 'Add New portfolio' )
			),
			'public' => true,
			'supports' => array('title'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'portfolio'),
			'menu_icon' => '',
			'menu_position' => 20,
		)
	);
	
}

// Registering Custom post's category
add_action( 'init', 'portfolios_custom_post_type_taxonomy'); 
function portfolios_custom_post_type_taxonomy() {
	register_taxonomy(
		'portfolios_cat',  
		'portfolios',
		array(
			'hierarchical'          => true,
			'label'                         => 'portfolio Category',
			'query_var'             => true,
			'show_admin_column'             => true,
			'rewrite'                       => array(
				'slug'                  => 'he-category',
				'with_front'    => true
				)
			)
	);
}


require 'portfolio-admin/icon.php';


// Load Metaboxes 

new VP_Metabox(array
(
			'id'          => 'infos',
			'types'       => array('portfolios'),
			'title'       => __('Portfolio Information ', 'vp_textdomain'),
			'priority'    => 'high',
			'template' => VP_PORTFOLIOS_DIR . '/portfolio-admin/metabox/main.php'
));


new VP_Metabox(array
(
			'id'          => 'portfoilos-meta',
			'types'       => array('portfolios'),
			'title'       => __('Responsive Hover Effects Setting', 'vp_textdomain'),
			'priority'    => 'high',
			'template' => VP_PORTFOLIOS_DIR . '/portfolio-admin/metabox/portfolio-desc.php'
));



//Loading Shortcode
require_once(VP_PORTFOLIOS_DIR . 'portfolio-admin/shortcode.php');


//Shortcode Generator 
    function acb_init_shortcodegenerator()
    {
    // Built path to shortcode generator template array file
    //$sg_path = VP_TEAM_DIR() . '/admin/shortcode.php';
    // Initialize the ShortcodeGenerator's object
    $tmpl_sg = array(
    'name' => 'sg_1',
    'template' => VP_PORTFOLIOS_DIR . '/portfolio-admin/shortcode_generator.php',
    'modal_title' => __( 'Portfolio Shortcode', 'vp_textdomain'),
    'button_title' => __( 'Portfolio Shortcode', 'vp_textdomain'),
    'types' => array( 'post', 'page' ),
    'main_image' => VP_PORTFOLIOS_URL . '/img/coupon.png',
    'sprite_image' => VP_PORTFOLIOS_URL . '/img/coupon.png',
    //'included_pages' => array( 'appearance_page_vpt_option' ),
    );
    
	$sg = new VP_ShortcodeGenerator($tmpl_sg);
    
	}
	
    // the safest hook to use, since Vafpress Framework may exists in Theme or Plugin
    add_action( 'after_setup_theme', 'acb_init_shortcodegenerator' )


?>