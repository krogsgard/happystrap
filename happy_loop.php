<?php
/**
 * happy_loop CPT Singular Template
 *
 * This is the default happy_loop post type template.  It is used when a more specific template can't be found to display
 * singular views of happy_loop posts.
 *
 * @package happystrap
 * @subpackage Template
 */

get_header(); ?>
	
			<?php get_template_part('part','breadcrumbs'); // call breadcrumb template ?>

			<div class="row">
			
			<?php do_atomic( 'open_content' ); // Open content hook ?>
		
			<div class="hfeed span8">

				<?php if ( have_posts() ) : ?>
	
					<?php while ( have_posts() ) : the_post(); ?>
	
						<?php do_atomic( 'before_entry' ); // Before entry hook ?>
	
						<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">
	
							<?php do_atomic( 'open_entry' ); // Open entry hook ?>
	
							<?php echo apply_atomic( 'entry_title', the_title( '<h1 class="entry-title page-header"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h1>', false ) ); ?>
							
							
							<?php echo apply_atomic_shortcode( 'byline', '<div class="byline">' . __( 'By [entry-author] | Published [entry-published] | Last Updated [entry-modified] [entry-edit-link before=" | "]', hybrid_get_textdomain() ) . '</div>' ); ?>
							
	
							<div class="entry-content">
								<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', hybrid_get_textdomain() ) ); ?>
								<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', hybrid_get_textdomain() ), 'after' => '</p>' ) ); ?>
							</div><!-- .entry-content -->
	
							<?php do_atomic( 'close_entry' ); // Close entry hook ?>
	
						</div><!-- .hentry -->
	
						<?php do_atomic( 'after_entry' ); // After entry hook ?>
	
						<?php comments_template( '/comments.php', false ); ?>
	
					<?php endwhile; ?>
	
				<?php endif; ?>
				
				<?php get_template_part( 'loop-nav' ); ?>
	
			</div><!-- .hfeed -->

			<?php do_atomic( 'close_content' ); // Close content hook ?>
			
			<?php get_template_part('part','sidebars'); // call sidebar template part ?>
				
			</div> <!-- .row -->

<?php get_footer(); ?>