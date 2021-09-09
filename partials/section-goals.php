<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<section class="section-goals">

  <div class="container">
    <div class="row mt-5">

      <?php
      $args = array(
        'post_type' => 'goals',
        'orderby'   => 'title',
        'order'     =>  'ASC',
      );

      $post_query = new WP_Query($args);

      if ($post_query->have_posts()) {

        while ($post_query->have_posts()) {
          $post_query->the_post();

      ?>

          <div class="col-12 col-md-6 col-xl-3">
            <a href="<?php the_permalink() ?>">
              GOAL CARD

              <?php the_post_thumbnail('medium_large'); ?>
              <span class="centered-number-circle-over-image"><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_number')); ?></span>
              <span class="show-on-hover-state what-does-mobile-do">

                <p><strong><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_intro_bold_text')); ?></strong></p>
                <p><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_intro_regular_text')); ?></p>
              </span>
            </a>
          </div>

      <?php
        }
      }
      ?>
    </div>

  </div>


</section>