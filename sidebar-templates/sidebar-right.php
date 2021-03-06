<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$sidebar_id = carbon_get_the_post_meta('qesst_custom_sidebar');

if (( ! is_active_sidebar( 'right-sidebar' ) ) && ( ! is_active_sidebar( $sidebar_id ) )) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
<?php else : ?>
	<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
<?php endif; ?>

<?php 
	if ( is_active_sidebar( $sidebar_id ) ) { 
		dynamic_sidebar( $sidebar_id );
	} else {
		dynamic_sidebar( 'right-sidebar' );
	}
?>

</div><!-- #right-sidebar -->
