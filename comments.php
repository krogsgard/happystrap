<?php
/**
 * Comments Template
 *
 * Lists comments and calls the comment form.  Individual comments have their own
 * templates.  The hierarchy for these templates is $comment_type.php, comment.php.
 *
 * @package infobusiness
 * @subpackage Template
 */

if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) )
	die( __( 'Please do not load this page directly. Thanks!', hybrid_get_textdomain() ) );

if ( post_password_required() || ( !have_comments() && !comments_open() && !pings_open() ) )
	return;
?>

<div id="comments-template">

	<div class="comments-wrap">

		<div id="comments">

			<?php if ( have_comments() ) : ?>

				<h3 id="comments-number" class="comments-header"><?php comments_number( __( 'No Responses', hybrid_get_textdomain() ), __( 'One Response', hybrid_get_textdomain() ), __( '% Responses', hybrid_get_textdomain() ) ); ?></h3>

				<?php do_atomic( 'before_comment_list' );// Before comment list hook ?>

				<ol class="comment-list">
					<?php wp_list_comments( hybrid_list_comments_args() ); ?>
				</ol><!-- .comment-list -->

				<?php do_atomic( 'after_comment_list' ); // After comment list hook ?>

				<?php if ( get_option( 'page_comments' ) ) : ?>
					<div class="comment-navigation paged-navigation">
						<?php paginate_comments_links(); ?>
					</div><!-- .comment-navigation -->
				<?php endif; ?>

		<?php else : ?>

			<?php if ( pings_open() && !comments_open() ) : ?>

				<p class="comments-closed pings-open">
					<?php printf( __( 'Comments are closed, but <a href="%1$s" title="Trackback URL for this post">trackbacks</a> and pingbacks are open.', hybrid_get_textdomain() ), trackback_url( '0' ) ); ?>
				</p><!-- .comments-closed .pings-open -->

			<?php elseif ( !comments_open() ) : ?>

				<p class="comments-closed">
					<?php _e( 'Comments are closed.', hybrid_get_textdomain() ); ?>
				</p><!-- .comments-closed -->

			<?php endif; ?>

		<?php endif; ?>

		</div><!-- #comments -->

		<?php comment_form(); // Load the comment form. ?>

	</div><!-- .comments-wrap -->

</div><!-- #comments-template -->