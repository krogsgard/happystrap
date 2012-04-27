<?php
/**
 * Attachment Template
 *
 * This is the default attachment template.  It is used when visiting the singular view of a post attachment 
 * page (images, videos, audio, etc.).
 *
 * @package infobusiness
 * @subpackage Template
 */

get_header(); ?>
	
			<?php get_template_part('part','breadcrumbs'); // call breadcrumb template ?>

			<div class="row">
			
			<?php do_atomic( 'open_content' ); // Open content hook ?>
		
			<div class="hfeed span8">
		
				<?php if ( have_posts() ) : ?>
	
					<?php while ( have_posts() ) : the_post(); ?>
	
						<?php do_atomic( 'before_entry' ); // Before loop hook ?>
	
						<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">
	
							<?php do_atomic( 'open_entry' ); // Open loop hook ?>
	
							<?php echo apply_atomic( 'entry_title', the_title( '<h1 class="entry-title page-header"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h1>', false ) ); ?>
	
							<div class="entry-content">
								<?php if ( wp_attachment_is_image( get_the_ID() ) ) : ?>
	
									<p class="attachment-image">
										<img class="aligncenter" src="<?php echo wp_get_attachment_url(); ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" />
									</p><!-- .attachment-image -->
	
								<?php else : ?>
	
									<?php hybrid_attachment(); ?>
	
									<p class="download">
										<a href="<?php echo wp_get_attachment_url(); ?>" title="<?php the_title_attribute(); ?>" rel="enclosure" type="<?php echo get_post_mime_type(); ?>"><?php printf( __( 'Download &quot;%1$s&quot;', hybrid_get_textdomain() ), the_title( '<span class="fn">', '</span>', false) ); ?></a>
									</p><!-- .download -->
	
								<?php endif; ?>
	
								<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', hybrid_get_textdomain() ) ); ?>
								<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', hybrid_get_textdomain() ), 'after' => '</p>' ) ); ?>
							</div><!-- .entry-content -->
	
							<?php do_atomic( 'close_loop' ); // Close loop hook ?>
	
						</div><!-- .hentry -->
	
						<?php do_atomic( 'after_entry' ); // After loop hook ?>
	
						<?php get_sidebar( 'after-singular' ); ?>
	
						<?php do_atomic( 'after_singular' ); // After singular hook ?>
	
						<?php comments_template( '/comments.php', true ); ?>
	
					<?php endwhile; ?>
	
				<?php endif; ?>
			
				<?php get_template_part( 'loop-nav' ); ?>

			</div><!-- .hfeed -->

		<?php do_atomic( 'close_content' ); // Close content hook ?>
		
		<?php get_template_part('part','sidebars'); // call sidebar template part ?>
				
			</div> <!-- .row -->

<?php get_footer(); ?>