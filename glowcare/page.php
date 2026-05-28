<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
	<div class="content-area">
<?php
while ( have_posts() ) {
the_post();
get_template_part( 'template-parts/content', 'page' );
if ( comments_open() || get_comments_number() ) {
comments_template();
}
}
?>
	</div><!-- .content-area -->
	
	<?php get_sidebar(); ?>
	</div><!-- .container -->
	</main><!-- #primary -->

<?php get_footer(); ?>
