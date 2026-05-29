<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

function glowcare_posted_on() {
$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
}
printf(
'<span class="posted-on">' . esc_html__( 'Posted on %s', 'glowcare' ) . '</span>',
sprintf(
$time_string,
esc_attr( get_the_date( DATE_W3C ) ),
esc_html( get_the_date() ),
esc_attr( get_the_modified_date( DATE_W3C ) ),
esc_html( get_the_modified_date() )
)
);
}

function glowcare_posted_by() {
printf(
'<span class="by-author"> ' . esc_html__( 'by %s', 'glowcare' ) . '</span>',
'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
);
}

function glowcare_entry_footer() {
if ( 'post' === get_post_type() ) {
$categories = get_the_category();
if ( $categories ) {
echo '<span class="cat-links">';
echo esc_html__( 'Categories: ', 'glowcare' );
echo join( ', ', array_map( function( $cat ) {
return '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">' . esc_html( $cat->name ) . '</a>';
}, $categories ) );
echo '</span>';
}

$tags = get_the_tags();
if ( $tags ) {
echo '<span class="tags-links">';
echo esc_html__( 'Tags: ', 'glowcare' );
echo join( ', ', array_map( function( $tag ) {
return '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">' . esc_html( $tag->name ) . '</a>';
}, $tags ) );
echo '</span>';
}
}
}
