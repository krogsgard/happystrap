<?php
/**
 * Loop Nav Template
 *
 * This template is used to show your your next/previous post links on singular pages and
 * the next/previous posts links on the home/posts page and archive pages.
 *
 * @package happystraps
 * @subpackage Template
 */
?>

	<?php if ( is_attachment() ) : ?>

		<div class="loop-nav btn-toolbar">
			<?php previous_post_link( '%link', '<span class="previous pager">' . __( '&larr; Return to entry', hybrid_get_textdomain() ) . '</span>' ); ?>
		</div><!-- .loop-nav -->

	<?php elseif ( is_singular( 'post' ) ) : ?>

		<div class="loop-nav btn-toolbar">
			<?php previous_post_link( '<div class="previous pager">' . __( '%link', hybrid_get_textdomain() ) . '</div>', 'Previous Entry: %title' ); ?>
			<?php next_post_link( '<div class="next pager">' . __( '%link', hybrid_get_textdomain() ) . '</div>', 'Next Entry: %title' ); ?>
		</div><!-- .loop-nav -->

	<?php elseif ( !is_singular() && current_theme_supports( 'loop-pagination' ) ) : loop_pagination(); ?>

	<?php elseif ( !is_singular() && $nav = get_posts_nav_link( array( 'sep' => '', 'prelabel' => '<span class="previous pager">' . __( '&larr; Previous', hybrid_get_textdomain() ) . '</span>', 'nxtlabel' => '<span class="next pager">' . __( 'Next &rarr;', hybrid_get_textdomain() ) . '</span>' ) ) ) : ?>

		<div class="loop-nav btn-toolbar">
			<?php echo $nav; ?>
		</div><!-- .loop-nav -->

	<?php endif; ?>