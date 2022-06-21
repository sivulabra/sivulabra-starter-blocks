<?php
function sivulabraSetup() {

  // Let WordPress manage the document title
  add_theme_support( 'title-tag' );

  // Enable support for Post Thumbnails on posts and pages
  add_theme_support( 'post-thumbnails' );

  // Add support for editor styles, then add them
  add_theme_support( 'editor-styles' );
  add_editor_style( [
    'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap',
    'build/index.css'
  ] );

  // Remove default block template skip link
  remove_action( 'wp_footer', 'the_block_template_skip_link' );

}
add_action( 'after_setup_theme', 'sivulabraSetup' );

// Load assets
require get_template_directory() . '/inc/assets.php';

// Load blocks
require get_template_directory() . '/inc/blocks.php';
require get_template_directory() . '/inc/placeholder-blocks.php';

// Load menus
require get_template_directory() . '/inc/menus.php';

// Load WP REST API file
require get_template_directory() . '/inc/rest-api.php';

// Load WooCommerce compatibility file
if ( class_exists( 'WooCommerce' ) ) {
  require get_template_directory() . '/inc/woocommerce.php';
}