<?php

function registerRoute() {
  register_rest_route( 'sivulabra/v1', 'search', array(
    'methods' => WP_REST_SERVER::READABLE,
    'callback' => 'sivulabraResults',
    'permission_callback' => '__return_true'
  ) );
}
add_action( 'rest_api_init', 'registerRoute' );

function sivulabraResults( $data ) {

  // Sanitize the data
  $term = sanitize_text_field( $data['term'] );
  $lowerCaseTerm = mb_strtolower( $term );

  return "It works!";
}


// Methods
function getResponse( $products, $term ) {
  $data = [];
  $i = 0;

  return $data;
}