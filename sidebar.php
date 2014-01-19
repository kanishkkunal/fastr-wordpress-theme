<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package fastr
 *
 */
?>

	<div id="secondary" class="widget-area text-center" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>


		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->