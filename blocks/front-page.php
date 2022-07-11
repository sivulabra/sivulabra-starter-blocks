<main id="site-main" class="site-main">
  <div class="entry-content">
    <?php if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        the_content();
      }
    } ?>
  </div>
</main>