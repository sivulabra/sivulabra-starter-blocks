<?php

?>

<a href="#site-main" class="skip-link font-semibold">Siirry suoraan sisältöön</a>
<header class="site-header">
  Site Header
  <?php
  wp_nav_menu(
    [
      'theme_location'    => 'main-menu',
      'menu_id'           => 'main-menu'
    ]
  );
  ?>
</header>