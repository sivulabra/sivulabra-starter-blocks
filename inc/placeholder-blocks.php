<?php
class PlaceholderBlock {
  function __construct( $name ) {
    $this->name = $name;
    add_action( 'init', [$this, 'onInit'] );
  }

  function blockRenderCallback( $attributes, $content ) {

    // Initialize output buffer
    ob_start();
    require get_theme_file_path( "/blocks/{$this->name}.php" );
    return ob_get_clean();
    
  }

  function onInit() {
    wp_register_script(
      "{$this->name}BlockScript",
      get_stylesheet_directory_uri() . "/blocks/{$this->name}.js",
      ['wp-blocks', 'wp-editor']
    );

    register_block_type(
      "sivulabra/{$this->name}",
      [
        'editor_script'     => "{$this->name}BlockScript",
        'render_callback'   => [$this, 'blockRenderCallback']
      ]
    );
  }
}

new PlaceholderBlock( "site-header" );
new PlaceholderBlock( "site-footer" );
new PlaceholderBlock( "single-page" );
new PlaceholderBlock( "front-page" );

// WooCommerce blocks
if ( class_exists( 'WooCommerce' ) ) {
  new PlaceholderBlock( "cart" );
  new PlaceholderBlock( "checkout" );
}