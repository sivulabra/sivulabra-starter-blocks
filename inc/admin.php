<?php

// Remove wp-logo, comments and customizer from admin bar
add_action( 'admin_bar_menu', function( $wp_admin_bar ) {
  $wp_admin_bar->remove_node( 'customize' );  
  $wp_admin_bar->remove_node( 'wp-logo' );
  $wp_admin_bar->remove_node( 'comments' );
  $wp_admin_bar->remove_node( 'new-content' );
}, 999 );

// Remove menus from WP Admin, uncomment line to remove
add_action( 'admin_menu', function() {
  // remove_menu_page( 'index.php' );                  // Dashboard.
  // remove_menu_page( 'jetpack' );                    // Jetpack.
  // remove_menu_page( 'edit.php' );                   // Posts.
  // remove_menu_page( 'upload.php' );                 // Media.
  // remove_menu_page( 'edit.php?post_type=page' );    // Pages.
  remove_menu_page( 'edit-comments.php' );          // Comments.
  // remove_menu_page( 'themes.php' );                 // Appearance.
  // remove_menu_page( 'plugins.php' );                // Plugins.
  // remove_menu_page( 'users.php' );                  // Users.
  // remove_menu_page( 'tools.php' );                  // Tools.
  // remove_menu_page( 'options-general.php' );        // Settings.
} );