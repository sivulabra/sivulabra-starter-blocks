<main id="site-main" class="site-main">
  <?php
    if ( is_cart() ) {
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); 
          the_content();
        }
      }
    } else {
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); 
          the_content();
        }
      }
    }
  ?>
</main>