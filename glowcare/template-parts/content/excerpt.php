<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if ( has_post_thumbnail() ) { ?>
<div class="post-thumbnail">
<a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail( 'large' ); ?>
</a>
</div>
<?php } ?>

<div class="post-content">
<header class="entry-header">
<div class="entry-meta">
<?php glowcare_posted_on(); ?>
<?php glowcare_posted_by(); ?>
</div>
<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
</header>

<div class="entry-summary">
<?php the_excerpt(); ?>
</div>

<a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'glowcare' ); ?></a>
</div>
</article>
