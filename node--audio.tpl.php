<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>

<div class="audio-book">
  <?php if (!empty ($content['field_audio_book'])) : ?>
    <h3><?php print render($content['field_audio_book']); ?></h3>
  <?php endif; ?>
  <?php if (!empty ($content['field_book_node_id'])) : ?>
    <span class="audio-book-link"><a href="/books/<?php print render($content['field_book_node_id']); ?>">Book detail</a></span>
  <?php endif; ?>
</div>