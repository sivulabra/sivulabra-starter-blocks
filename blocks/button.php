<?php
/**
 * Text fallback
 */
if ( !isset( $attributes['text'] ) ) {
  $text = 'Linkkiteksti';
} else {
  $text = $attributes['text'];
}

/**
 * Size fallback
 */
if ( !isset( $attributes['size'] ) ) {
  $size = 'md';
} else {
  $size = $attributes['size'];
}

/**
 * URL fallback
 */
if ( !isset( $attributes['linkObject']['url'] ) ) {
  $url = '#';
} else {
  $url = $attributes['linkObject']['url'];
}
?>

<a href="<?php echo $url; ?>" class="btn btn--<?php echo $size; ?>">
  <?php echo $text; ?>
</a>