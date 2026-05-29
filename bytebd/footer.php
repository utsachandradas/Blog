<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
</div><!-- #content -->

<footer id="colophon" class="site-footer">
<div class="container">
<?php
if ( is_active_sidebar( 'footer-1' ) ) {
echo '<div class="footer-widgets">';
dynamic_sidebar( 'footer-1' );
echo '</div>';
}
?>
	<div class="footer-navigation">
	<?php
	wp_nav_menu(
	array(
	'theme_location' => 'footer-menu',
	'menu_id'        => 'footer-menu',
	'depth'          => 1,
	'fallback_cb'    => false,
	)
	);
	?>
	</div>
	<div class="site-info">
	<span>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</span>
	</div>
</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
