<?php
/**
 * Loop Meta Template
 *
 * Displays information at the top of the page about archive and search results when viewing those pages.  
 * This is not shown on the home page and singular views.
 *
 * @package happystraps
 * @subpackage Template
 */
?>

	<?php if ( is_home() && !is_front_page() ) : ?>

		<?php global $wp_query; ?>

		<div class="page-header">

			<h1 class="loop-title"><?php echo get_post_field( 'post_title', $wp_query->get_queried_object_id() ); ?> archives  <small>
				<?php echo apply_filters( 'the_excerpt', get_post_field( 'post_excerpt', $wp_query->get_queried_object_id() ) ); ?>
			</small></h1><!-- .loop-description -->

		</div><!-- .page-header -->

	<?php elseif ( is_category() ) : ?>

		<div class="page-header">

			<h1 class="loop-title">Category archives for <?php single_cat_title(); ?>  <small><?php echo category_description(); ?></small></h1><!-- .loop-description -->

		</div><!-- .page-header -->

	<?php elseif ( is_tag() ) : ?>

		<div class="page-header">

			<h1 class="loop-title">Tag archives for <?php single_tag_title(); ?>  <small><?php echo tag_description(); ?></small></h1><!-- .loop-description -->

		</div><!-- .page-header -->

	<?php elseif ( is_tax() ) : ?>

		<div class="page-header">

			<h1 class="loop-title">Loop archives for <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?>  <small><?php echo term_description( '', get_query_var( 'taxonomy' ) ); ?></small></h1><!-- .loop-description -->

		</div><!-- .page-header -->

	<?php elseif ( is_author() ) : ?>

		<?php $id = get_query_var( 'author' ); ?>

		<div id="hcard-<?php the_author_meta( 'user_nicename', $id ); ?>" class="page-header vcard">

			<h1 class="loop-title fn n"><?php the_author_meta( 'display_name', $id ); ?>  <small><?php echo get_avatar( get_the_author_meta( 'user_email', $id ), '60', '', get_the_author_meta( 'display_name', $id ) ); ?><span class="user-bio author-bio">
					<?php the_author_meta( 'description', $id ); ?></span><!-- .user-bio .author-bio --></small></h1><!-- .loop-description -->

		</div><!-- .page-header -->>

	<?php elseif ( is_search() ) : ?>

		<div class="page-header">

			<h1 class="loop-title">Searching for <em><?php echo esc_attr( get_search_query() ); ?></em>  <small><?php printf( __( 'You are browsing the search results for &quot;%1$s&quot;', hybrid_get_textdomain() ), esc_attr( get_search_query() ) ); ?></small></h1><!-- .loop-description -->

		</div><!-- .page-header -->

	<?php elseif ( is_date() ) : ?>

		<div class="page-header">
			<h1 class="loop-title"><?php _e( 'Archives by date', hybrid_get_textdomain() ); ?>  <small><?php _e( 'You are browsing the site archives by date.', hybrid_get_textdomain() ); ?></small></h1><!-- .loop-description -->

		</div><!-- .page-header -->

	<?php elseif ( function_exists( 'is_post_type_archive' ) && is_post_type_archive() ) : ?>

		<?php $post_type = get_post_type_object( get_query_var( 'post_type' ) ); ?>

		<div class="page-header">

			<h1 class="loop-title"><?php echo $post_type->labels->name; ?><?php if ( !empty( $post_type->description ) ) echo "<small> {$post_type->description}</small>"; ?><!-- .loop-description --></h1>

			

		</div><!-- .page-header -->

	<?php elseif ( is_archive() ) : ?>

		<div class="page-header">

			<h1 class="loop-title"><?php _e( 'Archives', hybrid_get_textdomain() ); ?>  <small><?php _e( 'You are browsing the site archives.', hybrid_get_textdomain() ); ?></small></h1><!-- .loop-description -->

		</div><!-- .page-header -->

	<?php endif; ?>