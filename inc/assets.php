<?php
// Main asset loading
function loadAssets() {
  
  // Enqueue fonts
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', false );

  // Enqueue main CSS
  wp_enqueue_style( 'sivulabra-main-styles', get_theme_file_uri( '/build/index.css' ), NULL, filemtime( get_theme_file_path( '/build/index.css' ) ) );

  // Enqueue main JS
  wp_enqueue_script( 'sivulabra-main-scripts', get_theme_file_uri( '/build/index.js' ), ['jquery'], filemtime( get_theme_file_path( '/build/index.js' ) ), true );
  
}
add_action( 'wp_enqueue_scripts', 'loadAssets' );

// Add the defer tag to script enqueues
add_filter( 'script_loader_tag', function( $url ) {

  if (is_admin()) return $url;
  if (false === strpos( $url, '.js' )) return $url;
  if (strpos($url, 'jquery.js')) return $url;
  if (strpos($url, 'jquery.min.js')) return $url;
  return str_replace(' src', ' defer src', $url);

}, 10 );