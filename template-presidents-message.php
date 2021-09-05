<?php
/**
 * Template Name: President's Message
 */
get_header(); // Loads the header.php template.
?>

<div id="bootstrap_iso">
  <?php echo get_template_part('partials/section', 'left', [
    'image_background'  => get_the_post_thumbnail_url(null, 'header'),
    'image_circular_id' => carbon_get_the_post_meta('crb_circular_image'),
    'heading'           => get_the_title(),
    'content'           => get_the_content(),
    'columns'           => 2,
    'links'             => [],
  ]) ?>

  <?php echo get_template_part('partials/pre-footer') ?>
</div>

<?php
get_footer(); // Loads the footer.php template. ?>