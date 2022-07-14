<main id="site-main" class="site-main">
  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      ?>
      <h1><?php the_title(); ?></h1>
      <?php
    }
  }
  get_template_part( 'template-parts/content', get_post_type() );
  ?>
</main>