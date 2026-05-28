<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
	<div class="content-area">
<section class="error-404 not-found">
<header class="page-header">
<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'glowcare' ); ?></h1>
</header>

<div class="page-content">
<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'glowcare' ); ?></p>
<?php get_search_form(); ?>
</div>
</section>
	</div><!-- .content-area -->
	
	<?php get_sidebar(); ?>
	</div><!-- .container -->
	</main><!-- #primary -->

<?php get_footer(); ?>
