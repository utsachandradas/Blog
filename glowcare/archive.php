<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
	<div class="content-area">
<header class="page-header">
<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
</header>

<?php
if ( have_posts() ) {
while ( have_posts() ) {
the_post();
get_template_part( 'template-parts/content', 'excerpt' );
}
the_posts_pagination();
}
?>
	</div><!-- .content-area -->
	
	<?php get_sidebar(); ?>
	</div><!-- .container -->
	</main><!-- #primary -->

<?php get_footer(); ?>
