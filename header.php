<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the top of the file. It is used mostly as an opening
 * wrapper, which is closed with the footer.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * @package happystraps
 * @subpackage Template
 */
 
 
 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>">
    <title><?php hybrid_document_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />

<?php if ( is_user_logged_in() ) {
	echo '<style>.navbar-fixed-top { top: 28px; }</style>';
	} ?>


    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_uri(); ?>/assets/ico/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_uri(); ?>/assets/ico/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_uri(); ?>/assets/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_uri(); ?>/assets/ico/apple-touch-icon-114x114.png">
  </head>

<?php wp_head(); // WP head hook ?>

<body class="<?php hybrid_body_class(); ?>" data-spy="scroll" data-target=".nav-collapse">

	<?php do_atomic( 'open_body' ); // Open body hook ?>

    
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
           <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
          <?php /* if ( !is_front_page() ) {
          		wp_nav_menu( array( 'menu' => 'primary', 'container_class' => 'nav-collapse', 'menu_class' => 'nav', 'menu_id' => 'main-menu') );
          		} 
          		
          		else { ?>
			          <div class="nav-collapse">
			            <ul class="nav">
			              <li class="">
			                <a href="#">Home</a>
			              </li>
			              <li class="">
			                <a href="#loops">Loops</a>
			              </li>
			              <li class="">
			                <a href="#posts">Posts</a>
			              </li>
			              <li class="">
			                <a href="#about">About</a>
			              </li>
			              <li class="">
			                <a href="#contact">Contact</a>
			              </li>
			            </ul>
			          </div>
          		<?php } */ ?>
          		
          

        </div>
      </div>
    </div>
    <?php do_atomic( 'close_header' ); // Close header hook ?>

    		
    		<?php do_atomic( 'after_header' ); // After header hook ?>
    		
    	<div class="container">
    	
<!-- here -->
	<?php get_template_part('feature', 'home'); ?>
	
		<?php do_atomic( 'before_content' ); // Before content hook ?>
	
	<div id="content" class="row">
		
	<div class="span12">			