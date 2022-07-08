<?php

// Add WooCommerce support
add_action( 'after_setup_theme', function() {
  add_theme_support( 'woocommerce' );
} );

// Remove all WooCommerce generated styles
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/*
// Wrap all WooCommerce content in wrappers that match the theme markup
add_action( 'woocommerce_before_main_content', function() { ?>
  <main id="site-main" class="site-main">
<?php } );
add_action( 'woocommerce_after_main_content', function() { ?>
  </main>
<?php } );
*/

// AJAX update cart quantity when a product is added to the cart
add_filter( 'woocommerce_add_to_cart_fragments', function( $fragments ) {
  global $woocommerce;

  ob_start();
  ?>
  <div id="header-cart" class="bottom-header__cart__amount flex justify-center items-center">
    <span class="font-medium">
      <?php echo WC()->cart->get_cart_contents_count(); ?>
    </span>
  </div>
  <?php
  $fragments['#header-cart'] = ob_get_clean();
  return $fragments;
} );