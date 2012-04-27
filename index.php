<?php
/**
 * Index Template
 *
 * This is the default template.  It is used when a more specific template can't be found to display
 * posts.  It is unlikely that this template will ever be used, but there may be rare cases.
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

				<?php if ( have_posts() ) : ?>
	
					<?php while ( have_posts() ) : the_post(); ?>
	
						<?php do_atomic( 'before_entry' ); // Before entry hook ?>
	
						<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">
	
							<?php do_atomic( 'open_entry' ); // Open entry hook ?>
	
							<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'meta_key' => array( 'Thumbnail' ), 'size' => 'thumbnail' ) ); ?>
	
							<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
	
							<?php echo apply_atomic_shortcode( 'byline', '<div class="byline">' . __( 'By [entry-author] on [entry-published] [entry-edit-link before=" | "]', hybrid_get_textdomain() ) . '</div>' ); ?>
	
							<div class="entry-summary">
								<?php the_excerpt(); ?>
							</div><!-- .entry-summary -->
	
							<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-terms taxonomy="category" before="Posted in "] [entry-terms before="| Tagged "] [entry-comments-link before=" | "]', hybrid_get_textdomain() ) . '</div>' ); ?>
	
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