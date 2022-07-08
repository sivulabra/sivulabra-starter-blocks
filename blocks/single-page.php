<?php
function getContent() {

  if ( is_cart() ) {
    get_template_part( 'template-parts/cart' );
  } elseif ( is_checkout() ) {
    get_template_part( 'template-parts/checkout' );
  } else {
    get_template_part( 'template-parts/content' );
  }
  
}
?>

<main id="site-main" class="site-main">
  <?php getContent(); ?>
</main>