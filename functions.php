<?php
/**
 * The functions file is used to initialize everything in the theme.  It controls how the theme is loaded and 
 * sets up the supported features, default actions, and default filters.  If making customizations, users 
 * should create a child theme and make changes to its functions.php file (not this one).  Friends don't let 
 * friends modify parent theme files. ;)
 *
 * Child themes should do their setup on the 'after_setup_theme' hook with a priority of 11 if they want to
 * override parent theme features.  Use a priority of 9 if wanting to run before the parent theme.
 *
 * @package happystraps
 * @subpackage Functions
 * @version 0.1.0
 * @author Brian Krogsgard <Brian@Krogsgard.com>
 * @copyright Copyright (c) 2011, Brian Krogsgard
 * @link http://krogsgard.com
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Load the core theme framework. */
require_once( trailingslashit( TEMPLATEPATH ) . 'library/hybrid.php' );
$theme = new Hybrid();

/* Do theme setup on the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'happystraps_theme_setup' );

/**
 * Theme setup function.  This function adds support for theme features and defines the default theme
 * actions and filters.
 *
 * @since 0.1.0
 */
function happystraps_theme_setup() {

	/* Get action/filter hook prefix. */
	$prefix = hybrid_get_prefix();

	/* Add theme support for core framework features. */
	add_theme_support( 'hybrid-core-menus', array( 'primary') );
	add_theme_support( 'hybrid-core-sidebars', array( 'primary', 'secondary' ) );
	add_theme_support( 'hybrid-core-widgets' );
	add_theme_support( 'hybrid-core-shortcodes' );
	add_theme_support( 'hybrid-core-post-meta-box' );
	add_theme_support( 'hybrid-core-theme-settings' );
	add_theme_support( 'hybrid-core-meta-box-footer' );
	add_theme_support( 'hybrid-core-template-hierarchy' );
	
	/* Add theme support for extensions. */
	
	add_theme_support( 'theme-layouts', array( '1c', '2c-l', '2c-r') );
	add_theme_support( 'post-stylesheets' );
	add_theme_support( 'dev-stylesheet' );
	add_theme_support( 'loop-pagination' );
	add_theme_support( 'get-the-image' );
	add_theme_support( 'entry-views' );
	add_theme_support( 'cleaner-gallery' );
	
	/* Add theme support for WordPress features. */
	add_theme_support( 'automatic-feed-links' );
	
	
	/* Register sidebars. */
	add_action( 'widgets_init', 'happystraps_register_sidebars', 9 );
	
	/* Remove the page title from the home page. */	
	add_action( 'happystraps_before_entry', 'empty_home_title', 9 );
	
	/* Embed width/height defaults. */
	add_filter( 'embed_defaults', 'happystraps_embed_defaults' );
	
	/* Filter the sidebar widgets. */
	add_filter( 'sidebars_widgets', 'happystraps_disable_sidebars' );
	add_action( 'template_redirect', 'happystraps_one_column' );
	
	/* Change default comment status for pages to false. */	
	add_action( 'load-page-new.php', 'my_change_comment_status' );
	
	/* Call functions-admin.php file for theme settings  THIS MAY NEED TO BE ADDED BACK... TAKEN OUT BC NOT IN PROTOTYPE 0.2. */
	if ( is_admin() )
	require_once( trailingslashit( TEMPLATEPATH ) . 'functions-admin.php' ); 
	
	// Register and load scripts
	
	
	 add_action( 'wp_enqueue_scripts', 'happystraps_load_my_js' );
	 
	 add_shortcode( 'entry-modified', 'krogs_entry_modified_shortcode' );
	 
	
	add_action( '{$prefix}_open_footer', 'happystraps_insert_sidebars', 30 );

}
 
function happystraps_insert_sidebars() {

	?> <div class="well">HEY</div> <?php
}


function krogs_entry_modified_shortcode( $attr ) {

	$domain = hybrid_get_textdomain();
	$attr = shortcode_atts( array( 'before' => '', 'after' => '', 'format' => get_option( 'date_format' ) ), $attr );

	$modified = '<abbr class="modified" title="' . sprintf( get_the_modified_time( esc_attr__( 'l, F jS, Y, g:i a', $domain ) ) ) . '">' . sprintf( get_the_modified_time( $attr['format'] ) ) . '</abbr>';
	return $attr['before'] . $modified . $attr['after'];
	
}

function happystraps_load_my_js() {

if( !is_admin()){

	// other scripts
	
	wp_register_script('easing', get_template_directory_uri() . '/js/jquery.easing-1.3.pack.js', array('jquery'), '1.3', true );
	wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true ); 
	
	wp_enqueue_script('easing');
	wp_enqueue_script('custom');
	
	// Bootstrap scripts
	
//	wp_register_script('prettify.js', get_template_directory_uri().'/js/prettify.js', array('jquery'),'1.0', true );
	
	wp_register_script('alert.js', get_template_directory_uri().'/js/bootstrap-alerts.js', array('jquery'),'2.0.1', true );
	wp_register_script('button.js', get_template_directory_uri().'/js/bootstrap-buttons.js', array('jquery'),'2.0.1', true );
	wp_register_script('carousel.js', get_template_directory_uri().'/js/bootstrap-carousel.js', array('jquery'),'2.0.1', true );
	wp_register_script('collapse.js', get_template_directory_uri().'/js/bootstrap-collapse.js', array('jquery'),'2.0.1', true );
	wp_register_script('dropdown.js', get_template_directory_uri().'/js/bootstrap-dropdown.js', array('jquery'),'2.0.1', true );
	wp_register_script('modal.js', get_template_directory_uri().'/js/bootstrap-modal.js', array('jquery'),'2.0.1', true );
	wp_register_script('popover.js', get_template_directory_uri().'/js/bootstrap-popover.js', array('tooltip.js'),'2.0.1', true );
	wp_register_script('scrollspy.js', get_template_directory_uri().'/js/bootstrap-scrollspy.js', array('jquery'),'2.0.1', true );
	wp_register_script('tab.js', get_template_directory_uri().'/js/bootstrap-tabs.js', array('jquery'),'2.0.1', true );
	wp_register_script('tooltip.js', get_template_directory_uri().'/js/bootstrap-tooltip.js', array('jquery'),'2.0.1', true );
	wp_register_script('transition.js', get_template_directory_uri().'/js/bootstrap-transition.js', array('jquery'),'2.0.1', true );
	
	
	
	
//	wp_enqueue_script('prettify.js');
	
	wp_enqueue_script('alert.js');
	wp_enqueue_script('carousel.js');
	wp_enqueue_script('collapse.js');
	wp_enqueue_script('dropdown.js');
	wp_enqueue_script('modal.js');
	wp_enqueue_script('scrollspy.js');
	wp_enqueue_script('tab.js');
	wp_enqueue_script('tooltip.js');
	wp_enqueue_script('transition.js');
	wp_enqueue_script('popover.js');
	wp_enqueue_script('button.js');


	}
}

/**
 * Unregisters some of the core framework sidebars that the theme doesn't use.
 *
 * @since 0.1.0
 */
//function happystraps_unregister_sidebars() {
//	unregister_sidebar( 'primary' );
//	unregister_sidebar( 'secondary' );
//}


/**
 * Registers new sidebars for the theme.
 *
 * @since 0.1.0.
 */
function happystraps_register_sidebars() {

/*	register_sidebar( array( 'name' => __( 'Feature', hybrid_get_textdomain() ), 'id' => 'feature', 'description' => __( 'Displayed in the feature area.', hybrid_get_textdomain() ), 'before_widget' => '<div id="%1$s" class="widget %2$s widget-%2$s"><div class="widget-inside">', 'after_widget' => '</div></div>', 'before_title' => '<h3 class="widget-title">', 'after_title' => '</h3>' ) ); */

}


/**
 * Sets default comment and ping status
 * to off for "Page" post types
 * 
 */

function my_change_comment_status() {
	add_filter( 'option_default_comment_status', '__return_false' );
	add_filter( 'option_default_ping_status', '__return_false' );
}

/**
 * Adds custom image sizes for use
 * typically with feature widget areas
 * 
 */

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'tiny', 160, 120, true );
}

/**
 * Function for deciding which pages should have a one-column layout.
 *
 * @since 0.1.0
 */
function happystraps_one_column() {

	if ( !is_active_sidebar( 'primary' ) )
		add_filter( 'get_theme_layout', 'happystraps_post_layout_one_column' );

	elseif ( is_attachment() )
		add_filter( 'get_theme_layout', 'happystraps_post_layout_one_column' );
}


/**
 * Filters 'get_post_layout' by returning 'layout-1c'.
 *
 * @since 0.1.0
 */
function happystraps_post_layout_one_column( $layout ) {
	return 'layout-1c';
}

/**
 * Disables sidebars if viewing a one-column page.
 *
 * @since 0.1.0
 */
function happystraps_disable_sidebars( $sidebars_widgets ) {
	global $wp_query;

	if ( current_theme_supports( 'theme-layouts' ) ) {

		if ( 'layout-1c' == theme_layouts_get_layout() ) {
			$sidebars_widgets['primary'] = false;
			$sidebars_widgets['secondary'] = false;
		}
	}

	return $sidebars_widgets;
}


/**
 * Overwrites the default widths for embeds.  This is especially useful for making sure videos properly
 * expand the full width on video pages.  This function overwrites what the $content_width variable handles
 * with context-based widths.
 *
 * @since 0.1.0
 */
function happystraps_embed_defaults( $args ) {

	if ( current_theme_supports( 'theme-layouts' ) ) {

		$layout = theme_layouts_get_layout();

		if ( 'layout-1c' == $layout )
			$args['width'] = 928;
		else
			$args['width'] = 650;
	}
	else
		$args['width'] = 650;

	return $args;
}
		


?>