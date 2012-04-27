<?php
/*
 *
 * Template Name: Home Page
 *
 */
 get_header(); ?>


						
			<?php do_atomic( 'open_content' ); // Open content hook ?>
			
			<!-- Example row of columns -->
			
			<div id="about" class="hero-unit">
			
				<h2>Who's behind all this?</h2>
				
				<p>My name is <a href="http://krogsgard.com">Brian Krogsgard</a>. I'm just like any other WordPress developer. I got involved, and slowly learned after following a number of blogs, reading my eyes out, and just hacking away. Hopefully Happy Loops will help you learn one of the most important aspects of WordPress a bit faster so you can go make your clients happy.</p>
				<p>Oh yeah, I'll launch when I feel like it : )</p>
				
				<p><a class="btn btn-large btn-info" href="#">Learn more &raquo;</a></p>
			
			</div>

        
			<?php do_atomic( 'close_content' ); // Close content hook ?>
	
	<?php get_template_part( 'loop-nav' ); ?>
        
<?php get_footer(); ?>