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
    <a href="#">Book Detail</a>
  <?php endif; ?>
</div>

<div class="audio-embed">
  <?php if (!empty ($content['field_kaltura_entry_id'])) : ?>
    <?php print render($content['field_kaltura_entry_id']); ?>
  <?php endif; ?>
</div>

<div class="audio-speaker">
  <?php if (!empty ($content['field_audio_speaker'])) : ?>
    <?php print render($content['field_audio_speaker']); ?>
  <?php endif; ?>
</div>

<div class="audio-data">

  <?php if (!empty ($content['field_audio2_date']) || ($content['field_audio_duration'])) : ?>
    <div class="audio-date"><?php print render($content['field_audio2_date']); ?></div>
    <div class="audio-duration"><?php print render($content['field_audio_duration']); ?></div>
  <?php endif; ?>

  <?php if (!empty ($content['field_audio_context'])) : ?>
    <div class="audio-context"><?php print render($content['field_audio_context']); ?></div>
  <?php endif; ?>

  <?php if (!empty ($content['field_audio_language'])) : ?>
    <div class="audio-language"><?php print render($content['field_audio_language']); ?></div>
  <?php endif; ?>

  <?php if (!empty ($content['field_audio_rights'])) : ?>
    <div class="audio-rights"><?php print render($content['field_audio_rights']); ?></div>
  <?php endif; ?>

  <?php if (!empty ($content['body'])) : ?>
    <div class="audio-body"><?php print render($content['body']); ?></div>
  <?php endif; ?>

</div>

<p>
  <a href="/multimedia-supplements">All Multimedia Supplements <i class="icon-chevron-right"> </i></a>
</p>

<p>
  <?php
  echo 'field_book_node_id: ' . print_r(array_pop(array_pop($content['field_book_node_id'])), TRUE);
  ?>
</p>
