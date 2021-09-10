<?php
/**
 * Template Name: Action Plan
 */
get_header(); // Loads the header.php template.
?>

<style>
  .goals-sub-header {
    color: #4C4D4F!important;
  } 

  .goals-header-image {
    height: 600px;
  }
</style>

<div id="bootstrap_iso">
  <?php
  echo get_template_part('partials/section', 'header', [
      'image' => wp_get_attachment_image_url(carbon_get_the_post_meta('crb_header_background_image'), 'header'),
      'title' => get_the_title()
  ])
  ?>
  <section class="bg-beige">
    <div class="container">
      <?php echo get_template_part('partials/breadcrumbs', null, ['class' => 'black', 'margin-bottom' => 'mb-4' ]) ?>

      <!-- Intro --> 
      <h2 class="mb-5"><?php echo wp_kses_post(carbon_get_the_post_meta('crb_header_heading')) ?></h2>
      <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta('crb_introduction'))) ?>

      <!-- Goals --> 
      <h2 class='mb-4'><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goals_heading')) ?></h2>
      <h3 class='goals-sub-header'><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goals_sub_heading')) ?></h3>
    </div>

    <div class="bg-image bg-image--header goals-header-image <?php echo isset($args['white-background']) && $args['white-background'] ? 'white' : ''; ?> <?php echo isset($args['class']) ? $args['class'] : '' ?>" style="background-image:url(<?php echo esc_url(wp_get_attachment_image_url(carbon_get_the_post_meta('crb_goals_header_image'), 'header'),
) ?>)">
    </div>


  </section>

  <?php echo get_template_part('partials/section-goals') ?>

  <?php echo get_template_part('partials/pre-footer') ?>
</div>

<?php
get_footer(); // Loads the footer.php template. ?>
