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
</div>

<div class="audio-speaker">
  <?php if (!empty ($content['field_audio_speaker'])) : ?>
    <?php print render($content['field_audio_speaker']); ?>
  <?php endif; ?>
</div>

<div class="audio-data">

  <?php if (!empty ($content['field_audio2_date']) || ($content['field_audio_duration'])) : ?>
    <div class="audio-date"><?php print render($content['field_audio2_date']); ?> / <?php print render($content['field_audio_duration']); ?></div>
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
    <?php print render($content['body']); ?>
  <?php endif; ?>

</div>