<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>



<div class="row">
  <div class="span2">
    <?php if (!empty ($content['field_speaker_photo'])) : ?>
      <?php print render($content['field_speaker_photo']); ?>
    <?php endif; ?>
  </div>
  <div class="span10">
    <?php if (!$page): ?>
      <h3><?php print $title_attributes; ?><?php print $title; ?></h3>
    <?php endif; ?>
    <?php if (!empty ($content['body'])) : ?>
      <?php print render($content['body']); ?>
    <?php endif; ?>
  </div>
</div>
