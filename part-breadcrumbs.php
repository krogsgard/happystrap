<?php
/**
 * Breadcrumb Template
 *
 * Displays breadcrumbs when the theme supports them
 *
 * @package happystraps
 * @subpackage Template
 */
?>

<?php if ( function_exists('yoast_breadcrumb') ) {
									yoast_breadcrumb('<div class="container"><div class="breadcrumb">','</div></div>');
								} ?>