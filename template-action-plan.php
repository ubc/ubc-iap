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

  #bootstrap_iso .clip-bottom-concave--right::after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTc1MyIgaGVpZ2h0PSIyMjEiIHZpZXdCb3g9IjAgMCAxNzUzIDIyMSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4NCjxtYXNrIGlkPSJtYXNrMCIgbWFzay10eXBlPSJhbHBoYSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgd2lkdGg9IjE3NTMiIGhlaWdodD0iMjIxIj4NCjxyZWN0IHdpZHRoPSIxNzUzIiBoZWlnaHQ9IjIyMSIgZmlsbD0iI2ZmZiIvPg0KPC9tYXNrPg0KPGcgbWFzaz0idXJsKCNtYXNrMCkiPg0KPGcgZmlsdGVyPSJ1cmwoI2ZpbHRlcjBfaSkiPg0KPHBhdGggZD0iTTE3NzggMzkyVjBDMTY0OS4zOSAwIDEyNzUuNzIgOC4yMzU3NCA4MDkuOTMyIDQxLjE3ODdDMzQ0LjE0NiA3NC4xMjE3IDYzLjIzMzIgMTU2Ljg3MSAtMTkgMTk0LjEyOFYzOTJIMTc3OFoiIGZpbGw9IiNmZmYiLz4NCjwvZz4NCjwvZz4NCjxkZWZzPg0KPGZpbHRlciBpZD0iZmlsdGVyMF9pIiB4PSItMTkiIHk9IjAiIHdpZHRoPSIxNzk3IiBoZWlnaHQ9IjQwMiIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBjb2xvci1pbnRlcnBvbGF0aW9uLWZpbHRlcnM9InNSR0IiPg0KPGZlRmxvb2QgZmxvb2Qtb3BhY2l0eT0iMCIgcmVzdWx0PSJCYWNrZ3JvdW5kSW1hZ2VGaXgiLz4NCjxmZUJsZW5kIG1vZGU9Im5vcm1hbCIgaW49IlNvdXJjZUdyYXBoaWMiIGluMj0iQmFja2dyb3VuZEltYWdlRml4IiByZXN1bHQ9InNoYXBlIi8+DQo8ZmVDb2xvck1hdHJpeCBpbj0iU291cmNlQWxwaGEiIHR5cGU9Im1hdHJpeCIgdmFsdWVzPSIwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAxMjcgMCIgcmVzdWx0PSJoYXJkQWxwaGEiLz4NCjxmZU9mZnNldCBkeT0iMTAiLz4NCjxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249IjkiLz4NCjxmZUNvbXBvc2l0ZSBpbjI9ImhhcmRBbHBoYSIgb3BlcmF0b3I9ImFyaXRobWV0aWMiIGsyPSItMSIgazM9IjEiLz4NCjxmZUNvbG9yTWF0cml4IHR5cGU9Im1hdHJpeCIgdmFsdWVzPSIwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwIDAgMCAwLjMgMCIvPg0KPGZlQmxlbmQgbW9kZT0ibm9ybWFsIiBpbjI9InNoYXBlIiByZXN1bHQ9ImVmZmVjdDFfaW5uZXJTaGFkb3ciLz4NCjwvZmlsdGVyPg0KPC9kZWZzPg0KPC9zdmc+DQo=);
  }

  .strategic-plan {
    display: block;
    margin-top: 32px!important;
    margin-bottom: 32px!important;
    font-size: 40px; 
    text-decoration: none!important;
  }

  .strategic-plan:hover, .strategic-plan:focus {
    text-decoration: underline!important;
  }
</style>

<div id="bootstrap_iso">
  <?php
  echo get_template_part('partials/section', 'header', [
      'image' => wp_get_attachment_image_url(carbon_get_the_post_meta('crb_header_background_image'), 'header'),
      'title' => get_the_title()
  ])
  ?>
  <section>
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
    
    <?php $strategicPlanLink = wp_get_attachment_url(carbon_get_the_post_meta('crb_goals_strategic_plan')) ?>

  </section>

  <?php echo get_template_part('partials/section-goals') ?>

  <div class='container'>

    <a class="strategic-plan" href="<?php echo $strategicPlanLink ?>">Download the Indigenous Strategic Plan</a>
  </div>

  <?php echo get_template_part('partials/pre-footer') ?>
</div>

<?php
get_footer(); // Loads the footer.php template. ?>
