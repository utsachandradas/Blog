<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
	<div class="content-area">
<?php
if ( have_posts() ) {
while ( have_posts() ) {
the_post();
get_template_part( 'template-parts/content', 'excerpt' );
}
the_posts_pagination();
} else {
echo '<p>' . esc_html__( 'No posts found.', 'glowcare' ) . '</p>';
}
?>
	</div><!-- .content-area -->
	
	<?php get_sidebar(); ?>
	</div><!-- .container -->
	</main><!-- #primary -->

<?php get_footer(); ?>
