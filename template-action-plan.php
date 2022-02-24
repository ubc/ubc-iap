<?php
/**
 * Template Name: Action Plan
 */
get_header(); // Loads the header.php template.
?>

<div id="bootstrap_iso">
  <?php
  echo get_template_part('partials/section', 'landing-reduced', [
      'class' => 'white',
      'image_background' => wp_get_attachment_image_url(carbon_get_the_post_meta('crb_header_background_image'), 'header'),
      'landing_title' => get_the_title()
  ])
  ?>
  <section class="template-action-plan">
    <div class="container">
      <?php echo get_template_part('partials/breadcrumbs', null, ['class' => 'black', 'margin-bottom' => 'mb-4' ]) ?>

      <div class='row'>
        <div class='col-12 col-lg-8'>
          <!-- Intro --> 
          <h2 class="mb-5"><?php echo wp_kses_post(carbon_get_the_post_meta('crb_header_heading')) ?></h2>
          <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta('crb_introduction'))) ?>
        </div>
			  <div class="col-12 col-lg-4 section-quote mt-lg-5 mt-lg-0">
          <div class="goal-quote-wrapper">
            <span class="quotes leftquote">“</span>
            <p class="goal-quote-text"><?php echo wp_kses_post(carbon_get_the_post_meta('crb_quote_text')); ?></p>
            <p class="goal-quote-author">&mdash; <?php echo wp_kses_post(carbon_get_the_post_meta('crb_quote_author')); ?></p>
            <span class="quotes rightquote">”</span>
          </div>
        </div>
			</div>

      <!-- Goals --> 
      <h2 class='mb-4'><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goals_heading')) ?></h2>
      <h3 class='goals-sub-header'><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goals_sub_heading')) ?></h3>

    </div>
    
    <?php $file = wp_get_attachment_url(carbon_get_the_post_meta('crb_goals_strategic_plan')) ?>
    <?php $label = wp_kses_post(carbon_get_the_post_meta('crb_goals_strategic_plan_label')) ?>

  </section>

  <?php echo get_template_part('partials/section-goals') ?>

  <div class='container'>
    <a class="strategic-plan" href="<?php echo $file ?>" download><?php echo $label ?></a>
  </div>

  <?php echo get_template_part('partials/pre-footer') ?>
</div>

<?php
get_footer(); // Loads the footer.php template. ?>
