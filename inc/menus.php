<?php

add_action( 'after_setup_theme', function() {

  // Register nav menus.
  register_nav_menus([
    'main-menu' => 'Päävalikko'
  ]);

} );