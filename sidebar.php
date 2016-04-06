<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>
		<div class="widget-area">
			<div class="primary" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' );?>
			</div><!-- .primary -->
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div class="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div><!-- .secondary -->
			<?php endif; ?>
		</div><!-- .widget-area -->