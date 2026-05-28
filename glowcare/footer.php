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
<div class="site-info">
<span>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</span>
<span> | </span>
<a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Privacy Policy</a>
</div>
</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
