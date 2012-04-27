<?php
/**
 * Template Name: Loopy Blogs Template
 *
 * Display posts from the loop and post post types. 
 *
 * @package happystraps
 * @subpackage Template
 */

get_header(); ?>
	
			<?php get_template_part('part','breadcrumbs'); // call breadcrumb template ?>
			
			<div class="row">

			<?php do_atomic( 'open_content' ); // Open content hook ?>

			<div class="hfeed span8">
			
			<?php get_template_part('loop-meta'); ?>
			
				<?php  $args = array(
							'post_type'		=>	array ( 'post', 'happy_loop' ),
							'posts_per_page'	=>	1,
							'paged'		=>	( get_query_var('page') ? get_query_var('page') : 1 )
							); ?>
			
				<?php query_posts( $args ); ?>
	
				<?php if ( have_posts() ) : ?>
	
					<?php while ( have_posts() ) : the_post(); ?>
	
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
				
								<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				
							</header><!-- .entry-header -->
				
				
							<div class="entry-content">
								<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
								<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
							</div><!-- .entry-content -->
				
				
						</article><!-- #post-<?php the_ID(); ?> -->
	
					<?php endwhile; ?>
	
				<?php endif; ?>
				
				<div class="navigation">
					<div class="alignleft"><?php previous_posts_link('&laquo; Previous') ?></div>
					<div class="alignright"><?php next_posts_link('More &raquo;') ?></div>
				</div>
				
				<?php wp_reset_query(); ?>
				
				
	
			</div><!-- .hfeed -->

			<?php do_atomic( 'close_content' ); // Close content hook ?>
			
			<?php get_template_part('part','sidebars'); // call sidebar template part ?>
				
			</div> <!-- .row -->

<?php get_footer(); ?>