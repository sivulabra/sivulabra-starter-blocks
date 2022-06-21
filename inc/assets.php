<?php
function loadAssets() {
  
  // Enqueue fonts
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', false );

  // Enqueue main CSS
  wp_enqueue_style( 'sivulabra-main-styles', get_theme_file_uri( '/build/index.css' ) );

  // Enqueue main JS
  wp_enqueue_script( 'sivulabra-main-scripts', get_theme_file_uri( '/build/index.js' ), NULL, NULL, true );
  
}
add_action( 'wp_enqueue_scripts', 'loadAssets' );