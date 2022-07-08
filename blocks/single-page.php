<?php
function getContent() {
  if ( is_cart() ) {
    ?>

    <div class="container">
      <?php if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          the_content();
        }
      } ?>
    </div>

    <?php
  } elseif ( is_checkout() ) {
    ?>
    
    <div class="container">
      <?php if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          the_content();
        }
      } ?>
    </div>

    <?php
  } else {
    ?>

    <div class="container">
      <?php if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          the_content();
        }
      } ?>
    </div>

    <?php
  }
}
?>

<main id="site-main" class="site-main">
  <?php getContent(); ?>
</main>