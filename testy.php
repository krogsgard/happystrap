<?php if ( have_posts() ) { 
		
		while ( have_posts() ) {
			
			the_post(); 

			// You can do stuff here to display aspects of the posts which meet the criteria of the current loop. 

		}

	} else { ?>

		<p><?php _e('The Loop did not find anything.'); ?></p>
<?php } ?>