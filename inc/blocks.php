<?php

// Add custom category to separate custom blocks from core blocks
add_filter( 'block_categories_all', function( $categories ) {
  $categorySlugs = wp_list_pluck( $categories, 'slug' );

  if ( in_array( 'sivulabra', $categorySlugs, true ) ) {
    return $categories;
  } else {
    array_unshift(
      $categories,
        [
          'slug'    => 'sivulabra',
          'title'   => 'Sivulabra',
          'icon'    => 'table-row-after'
        ]
    );
    return $categories;
  }
} );

// Reusable class to instantiate blocks
class JSXBlock {
  function __construct( $name, $renderCallback = null, $data = null ) {
    $this->name = $name;
    $this->renderCallback = $renderCallback;
    $this->data = $data;
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
      get_stylesheet_directory_uri() . "/build/{$this->name}.js",
      ['wp-blocks', 'wp-editor']
    );

    $args = [
      'editor_script' => "{$this->name}BlockScript"
    ];
    
    if ( $this->renderCallback ) {
      $args['render_callback'] = [$this, 'blockRenderCallback'];
    }

    if ( $this->data ) {
      wp_localize_script( "{$this->name}BlockScript", $this->name, $this->data );
    }

    register_block_type(
      "sivulabra/{$this->name}",
      $args
    );
  }
}

// JSXBlock instances
new JSXBlock( 'block', true );
new JSXBlock( 'boxes', true );
new JSXBlock( 'box', true );