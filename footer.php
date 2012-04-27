<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * @package InfoBusiness
 * @subpackage Template
 */
?>

	
	<?php do_atomic( 'after_content' ); // After content hook ?>

	</div><!-- .span12 from header -->
		
      </div><!-- #content .row -->

    	
		
		<footer class="row">
			
	
			<?php do_atomic( 'open_footer' ); // Open footer hook ?>
			
				
	
					<?php do_atomic( 'before_footer' ); // Before footer hook ?>
	
					<?php echo apply_atomic_shortcode( 'footer_content', hybrid_get_setting( 'footer_insert' ) ); ?>
	
					<?php do_atomic( 'footer' ); // Footer hook ?>
	
			<?php do_atomic( 'close_footer' ); // Close footer hook ?>
			
			
		</footer>
		
	</div><!-- .container -->	
	
        
        	<?php do_atomic( 'after_footer' ); // After footer hook ?>
      



	<?php wp_footer(); // WordPress footer hook ?>
	<?php do_atomic( 'close_body' ); // After HTML hook ?>
	
	
  </body>
</html>
<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->