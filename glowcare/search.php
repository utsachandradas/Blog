<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
	<div class="content-area">
<header class="page-header">
<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'glowcare' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</header>

<?php
if ( have_posts() ) {
while ( have_posts() ) {
the_post();
get_template_part( 'template-parts/content', 'excerpt' );
}
the_posts_pagination();
} else {
echo '<p>' . esc_html__( 'No results found for your search.', 'glowcare' ) . '</p>';
}
?>
	</div><!-- .content-area -->
	
	<?php get_sidebar(); ?>
	</div><!-- .container -->
	</main><!-- #primary -->

<?php get_footer(); ?>
