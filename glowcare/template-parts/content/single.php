<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if ( has_post_thumbnail() ) { ?>
<div class="post-thumbnail">
<?php the_post_thumbnail( 'large' ); ?>
</div>
<?php } ?>

<div class="post-content">
<header class="entry-header">
<div class="entry-meta">
<?php glowcare_posted_on(); ?>
<?php glowcare_posted_by(); ?>
</div>
<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</header>

<div class="entry-content">
<?php the_content(); ?>
</div>

<footer class="entry-footer">
<?php glowcare_entry_footer(); ?>
</footer>
</div>
</article>
