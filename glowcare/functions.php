<?php
/**
 * GlowCare functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GlowCare
 */

if ( ! defined( 'GLOWCARE_VERSION' ) ) {
define( 'GLOWCARE_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function glowcare_setup() {
// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

/*
 * Let WordPress manage the document title.
 */
add_theme_support( 'title-tag' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1200, 400, true );
add_image_size( 'glowcare-featured', 1200, 400, true );
add_image_size( 'glowcare-thumbnail', 400, 300, true );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus(
array(
'menu-1' => esc_html__( 'Primary', 'glowcare' ),
'footer-menu' => esc_html__( 'Footer Menu', 'glowcare' ),
)
);

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support(
'html5',
array(
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
'style',
'script',
)
);

// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

/**
 * Add support for core custom logo.
 */
add_theme_support(
'custom-logo',
array(
'height'      => 250,
'width'       => 250,
'flex-width'  => true,
'flex-height' => true,
)
);

// Add support for responsive embeds.
add_theme_support( 'responsive-embeds' );

// Add support for block styles.
add_theme_support( 'wp-block-styles' );

// Add support for full and wide align images.
add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'glowcare_setup' );

/**
 * Register widget area.
 */
function glowcare_widgets_init() {
register_sidebar(
array(
'name'          => esc_html__( 'Sidebar', 'glowcare' ),
'id'            => 'sidebar-1',
'description'   => esc_html__( 'Add widgets here.', 'glowcare' ),
'before_widget' => '<section id="%1$s" class="widget %2$s">',
'after_widget'  => '</section>',
'before_title'  => '<h2 class="widget-title">',
'after_title'   => '</h2>',
)
);

register_sidebar(
array(
'name'          => esc_html__( 'Footer Widgets', 'glowcare' ),
'id'            => 'footer-1',
'description'   => esc_html__( 'Add widgets here for the footer.', 'glowcare' ),
'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
'after_widget'  => '</div>',
'before_title'  => '<h3 class="footer-widget-title">',
'after_title'   => '</h3>',
)
);
}
add_action( 'widgets_init', 'glowcare_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function glowcare_scripts() {
wp_enqueue_style( 'glowcare-style', get_stylesheet_uri(), array(), GLOWCARE_VERSION );
	wp_enqueue_style( 'glowcare-main', get_template_directory_uri() . '/assets/css/main.css', array(), GLOWCARE_VERSION );

// Google Fonts: Playfair Display for headings, Montserrat for body
wp_enqueue_style(
'glowcare-fonts',
'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap',
array(),
null
);

wp_enqueue_script( 'glowcare-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), GLOWCARE_VERSION, true );

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
add_action( 'wp_enqueue_scripts', 'glowcare_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customize the excerpt length.
 */
function glowcare_excerpt_length( $length ) {
if ( is_admin() ) {
return $length;
}
return 25;
}
add_filter( 'excerpt_length', 'glowcare_excerpt_length' );

/**
 * Customize the excerpt more text.
 */
function glowcare_excerpt_more( $more ) {
if ( is_admin() ) {
return $more;
}
return '...';
}
add_filter( 'excerpt_more', 'glowcare_excerpt_more' );

/**
 * Add custom body classes.
 */
function glowcare_body_classes( $classes ) {
// Add a class if we're viewing a single post.
if ( is_singular( 'post' ) ) {
$classes[] = 'single-post';
}

// Add a class if we're viewing a page.
if ( is_page() && ! is_front_page() ) {
$classes[] = 'page-template';
}

// Add a class if we're viewing an archive.
if ( is_archive() ) {
$classes[] = 'archive-page';
}

return $classes;
}
add_filter( 'body_class', 'glowcare_body_classes' );

/**
 * Add theme customizer options.
 */
function glowcare_customize_register( $wp_customize ) {
// Add custom color section.
$wp_customize->add_section(
'glowcare_colors',
array(
'title'       => esc_html__( 'GlowCare Colors', 'glowcare' ),
'priority'    => 30,
'description' => esc_html__( 'Customize the theme colors', 'glowcare' ),
)
);

// Primary color setting.
$wp_customize->add_setting(
'glowcare_primary_color',
array(
'default'           => '#d4a373',
'sanitize_callback' => 'sanitize_hex_color',
)
);

$wp_customize->add_control(
new WP_Customize_Color_Control(
$wp_customize,
'glowcare_primary_color',
array(
'label'    => esc_html__( 'Primary Color', 'glowcare' ),
'section'  => 'glowcare_colors',
'settings' => 'glowcare_primary_color',
)
)
);

// Text color setting.
$wp_customize->add_setting(
'glowcare_text_color',
array(
'default'           => '#4a4a4a',
'sanitize_callback' => 'sanitize_hex_color',
)
);

$wp_customize->add_control(
new WP_Customize_Color_Control(
$wp_customize,
'glowcare_text_color',
array(
'label'    => esc_html__( 'Text Color', 'glowcare' ),
'section'  => 'glowcare_colors',
'settings' => 'glowcare_text_color',
)
)
);

// Heading color setting.
$wp_customize->add_setting(
'glowcare_heading_color',
array(
'default'           => '#2d2d2d',
'sanitize_callback' => 'sanitize_hex_color',
)
);

$wp_customize->add_control(
new WP_Customize_Color_Control(
$wp_customize,
'glowcare_heading_color',
array(
'label'    => esc_html__( 'Heading Color', 'glowcare' ),
'section'  => 'glowcare_colors',
'settings' => 'glowcare_heading_color',
)
)
);

// Background color setting.
$wp_customize->add_setting(
'glowcare_background_color',
array(
'default'           => '#fffaf9',
'sanitize_callback' => 'sanitize_hex_color',
)
);

$wp_customize->add_control(
new WP_Customize_Color_Control(
$wp_customize,
'glowcare_background_color',
array(
'label'    => esc_html__( 'Background Color', 'glowcare' ),
'section'  => 'glowcare_colors',
'settings' => 'glowcare_background_color',
)
)
);
}
add_action( 'customize_register', 'glowcare_customize_register' );

/**
 * Output custom colors to the front end.
 */
function glowcare_custom_colors() {
$primary_color = get_theme_mod( 'glowcare_primary_color', '#d4a373' );
$text_color = get_theme_mod( 'glowcare_text_color', '#4a4a4a' );
$heading_color = get_theme_mod( 'glowcare_heading_color', '#2d2d2d' );
$background_color = get_theme_mod( 'glowcare_background_color', '#fffaf9' );

$custom_css = "
:root {
--primary-color: {$primary_color};
--text-color: {$text_color};
--heading-color: {$heading_color};
--background-color: {$background_color};
}
a { color: {$primary_color}; }
a:hover { color: " . glowcare_adjust_brightness( $primary_color, -20 ) . "; }
h1, h2, h3, h4, h5, h6 { color: {$heading_color}; }
body { color: {$text_color}; background-color: {$background_color}; }
";

wp_add_inline_style( 'glowcare-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'glowcare_custom_colors' );

/**
 * Adjust brightness of a color.
 */
function glowcare_adjust_brightness( $hex, $steps ) {
// Sanitize the hex color.
$hex = str_replace( '#', '', $hex );
if ( strlen( $hex ) == 3 ) {
$hex = str_repeat( substr( $hex, 0, 1 ), 2 ) . str_repeat( substr( $hex, 1, 1 ), 2 ) . str_repeat( substr( $hex, 2, 1 ), 2 );
}

// Determine if we're darkening or lightening.
$rgb = hexdec( substr( $hex, 0, 2 ) ) . ',' . hexdec( substr( $hex, 2, 2 ) ) . ',' . hexdec( substr( $hex, 4, 2 ) );
$r = hexdec( substr( $hex, 0, 2 ) );
$g = hexdec( substr( $hex, 2, 2 ) );
$b = hexdec( substr( $hex, 4, 2 ) );

$r = max( 0, min( 255, $r + $steps ) );
$g = max( 0, min( 255, $g + $steps ) );
$b = max( 0, min( 255, $b + $steps ) );

return '#' . str_pad( dechex( $r ), 2, '0', STR_PAD_LEFT ) . str_pad( dechex( $g ), 2, '0', STR_PAD_LEFT ) . str_pad( dechex( $b ), 2, '0', STR_PAD_LEFT );
}

/**
 * Add pingback header.
 */
function glowcare_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'wp_head', 'glowcare_pingback_header' );
