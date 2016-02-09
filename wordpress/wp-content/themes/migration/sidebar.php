
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div class="sidebar1 col-xs-12 col-sm-2" id="sidebar1 secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div class="sidebar2 col-xs-12 col-sm-10" id="sidebar2 secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div>
<?php endif; ?>