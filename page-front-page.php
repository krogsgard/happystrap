<?php
/**
 * Front Page Singular Template
 *
 * This is the front page singular template.  It is used for creating custom home pages.
 * singular views of posts (any post type).
 *
 * Template Name: Front Page
 * @package happystrap
 * @subpackage Template
 */

 get_header(); ?>


						
			<?php do_atomic( 'open_content' ); // Open content hook ?>
			
			<!-- Example row of columns -->
			<section id="ways-to-loop">
				
			<h2 class="page-header">Ways to loop in WordPress</h2>
				
				<div class="row">
					
					<?php 
					
					$args = array (
					'post_type'	=>	'page', // need to say page to make post__in work
					'post__in'	=>	array (34,68), // page IDs
					'order'	=>	'ASC' // bc i put them in backward
					);
					
					$query_ways = new WP_Query($args); 
					
					while ( $query_ways->have_posts() ) : $query_ways->the_post(); ?>
					
						<div <?php post_class('span6'); ?> id="post-<?php the_ID(); ?>">
						
							<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
						
							<?php the_excerpt(); ?>
						
							<p><a class="btn" href="<?php the_permalink(); ?>">Read More &raquo;</a></p>
						
						</div>
					
					<?php endwhile; ?>
					<?php wp_reset_postdata(); // reset the query ?>
				
				</div><!-- .row -->
				
			</section>
			
			<!--  Row of columns -->
			
			<section id="loops">
			
			<h2 class="page-header">Loop Examples</h2>

				<div class="row">
					<?php 
					$args = array (
					'post_type'		=>	'happy_loop', // need to say page to make post__in work
					'posts_per_page'	=>	6
					);
					
					$query_ways = new WP_Query($args); 
					
					while ( $query_ways->have_posts() ) : $query_ways->the_post(); ?>
					
						<div <?php post_class('span4'); ?> id="post-<?php the_ID(); ?>">
					
							<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
					
							<?php the_excerpt(); ?>
					
							<p><a class="btn" href="<?php the_permalink(); ?>">View Loop &raquo;</a></p>
					
						</div>
					
					<?php endwhile; ?>
					<?php wp_reset_postdata(); // reset the query ?>        
				
				</div><!-- .row -->
				
					<p><a class="btn btn-info btn-large" href="/wordpress-loop">View Loop Archives &raquo;</a></p>
			
			</section><!-- #loops -->
	
			
			<!-- Example row of columns -->
			
			<section id="posts">
			
			<h2 class="page-header">Recent Blog Posts</h2>

				<div class="row">
				<?php 
				$args = array (
				'post_type'		=>	'post', // need to say page to make post__in work
				'posts_per_page'	=>	2
				);
				
				$query_ways = new WP_Query($args); 
				
				while ( $query_ways->have_posts() ) : $query_ways->the_post(); ?>
				
					<div <?php post_class('span6'); ?> id="post-<?php the_ID(); ?>">
					
						<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
					
						<?php the_excerpt(); ?>
					
						<p><a class="btn" href="<?php the_permalink(); ?>">Read Full Post &raquo;</a></p>
					
					</div><!-- post -->
				
				<?php endwhile; ?>
				<?php wp_reset_postdata(); // reset the query ?>        
				
				</div><!-- .row -->
			
					<p><a class="btn btn-info btn-large" href="/blog">View Blog Archives &raquo;</a></p>
			
			</section><!-- #posts -->
			
			<div id="submit-a-loop" class="hero-unit">
			
				<h2>Submit a loop.</h2>
				
				<p>Did you make a WordPress loop happy? Submit it here! Share with the community so we can learn together. Fill out the form below, and it will be reviewed to make sure it's halfway decent. But don't worry, code can <em>always</em> be improved on - so if you have something cool let's all check it out : ).</p>
				
				<p><a class="btn btn-large btn-info" href="/submit-a-loop" >Submit a loop &raquo;</a></p>
			
			</div>
			
			<div id="about" class="hero-unit">
			
				<h2>Who's behind all this?</h2>
				
				<p>My name is <a href="http://krogsgard.com">Brian Krogsgard</a>. I'm just like any other WordPress developer. I got involved, and slowly learned after following a number of blogs, reading my eyes out, and just hacking away. Hopefully Happy Loops will help you learn one of the most important aspects of WordPress a bit faster so you can go make your clients happy.</p>
				<p>You may also know me as a contributing editor for <a href="http://wpcandy.com">WPCandy</a>. You can consider Happy Loops to be under the broad umbrella of WPCandy. Ryan and I would like to eventually see a number of these focused informational sites to help people learn about specific aspects of WordPress.</p>
				
				<p><a class="btn btn-large btn-info" href="/about">Learn more &raquo;</a></p>
			
			</div>
			
			<div id="contact" class="hero-unit">
			
				<h2>Get in touch.</h2>
				
				<p>I'm pretty easy to get hold of. You can find me at my personal <a href="http://krogsgard.com">website</a>, on Twitter <a href="http://twitter.com/krogsgard">@krogsgard</a> or just fill out the form below.</p>
				<p>You can also follow <a href="http://twitter.com/happyloops">@HappyLoops</a> on Twitter to get updates for this site.</p>
				
				<?php gravity_form(3, false, false, false, '', true); ?>

			
			</div>
        
			<?php do_atomic( 'close_content' ); // Close content hook ?>
	
	<?php get_template_part( 'loop-nav' ); ?>
        
<?php get_footer(); ?>