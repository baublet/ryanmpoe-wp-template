	</div><!-- div.main -->
	
	<?php if(is_active_sidebar('sidebar-1') || is_active_sidebar('sidebar-2')): ?>
	<div class="sidebars">
		<?php if (is_active_sidebar('sidebar-1')) : ?>
		<div class="sidebar-1 widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
		<?php endif; ?>
		<?php if (is_active_sidebar('sidebar-2')) : ?>
		<div class="sidebar-2 widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
		<?php endif; ?>
	</div>
	<?php endif; ?>
	
	<?php if(is_active_sidebar('sidebar-3') || is_active_sidebar('sidebar-4') || is_active_sidebar('sidebar-5')): ?>
	<footer class="footer" id="nav">
		<?php if (is_active_sidebar('sidebar-3')) : ?>
		<div class="footer-sidebar-3 widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div>
		<?php endif; ?>
		<?php if (is_active_sidebar('sidebar-4' )) : ?>
		<div class="footer-sidebar-4 widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		</div>
		<?php endif; ?>
		<?php if (is_active_sidebar('sidebar-5')) : ?>
		<div class="footer-sidebar-5 widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-5' ); ?>
		</div>
		<?php endif; ?>
	</footer>
	<?php endif; ?>

</div><!-- .page -->

<?php wp_footer(); ?>

<script type="text/javascript">
  // Reload Masonry layout when an image loads
  var msnry = new Masonry(".grid,.gallery", { itemSelector: '.item', gutter: 10 })
  var imgLoad = imagesLoaded("body")
  imgLoad.on( 'progress', function( instance, image ) {
    msnry.layout()
  });
</script>

</body>
</html>