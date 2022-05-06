<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<section class="section-goals">
  <div class="container">
    <div class="row mt-4">
      <?php
        $args = array(
          'post_type' => 'goals',
          'orderby'   => 'title',
          'order'     =>  'ASC',
        );
        $post_query = new WP_Query($args);
      ?>
      <?php if ($post_query->have_posts()): while ($post_query->have_posts()): $post_query->the_post(); ?>
        <div class="col-12 col-md-6 col-xl-3">
          <a class="goal-card" href="<?php echo get_permalink(get_the_ID()) ?>">
              <div class='goal-card-background goal-card-layer' style='background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>)'>
                <div class='goal-card-overlay goal-card-layer'></div>
              </div>
              <div class='goal-number-large goal-card-layer d-none d-xl-flex'>
                <p><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_number')); ?></p>
              </div>
              <div class='goal-card-details goal-card-layer'>
                <div class='goal-number d-xl-none'><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_number')); ?></div>
                <div class='goal-text'>
                  <p class='goal-header'><strong><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_intro_bold_text')); ?>:</strong></p>
                  <p class='goal-intro-text'><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_intro_regular_text')); ?></p>
                </div>
              </div>
          </a>
        </div>
      <?php endwhile; endif ?>
    </div>
  </div>
</section>
