<?php
?>

<div class="container">
  <h1>Ostoskori</h1>
  <?php if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      the_content();
    }
  } ?>
</div>