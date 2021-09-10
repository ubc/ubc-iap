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

      if ($post_query->have_posts()) {

        while ($post_query->have_posts()) {
          $post_query->the_post();

      ?>

      <?php
        for ($i = 0; $i < 1; $i++) {
      ?>

          <style>
            .goal-card {
              display: block;
              width: 100%;
              padding-top: 100%;
              position: relative;
              margin-bottom: 1em;
            }

            .goal-card-layer {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
            }

            .goal-card-background {
              background: #002145;
              background-size: cover;
            }

            .goal-card-overlay {
              background: #002145;
              mix-blend-mode: hard-light;
              transition: opacity 300ms;
            }

            .goal-card-details {
              color: white;
              font-size: 32px;
              padding: 32px;
              
              display: flex;
              flex-direction: column;
              align-items: center;
              transition: opacity 300ms;
            }

            .goal-number-large {
              display: flex;
              justify-content: center;
              align-items: center;
              transition: opacity 300ms;
            }

            .goal-number-large p {
              font-size: 60px!important;
              color: #481700!important;
              background-color: #DACAB5;
              padding: 0px 26px;
              border-radius: 100%;
              border: 4px solid white;
              box-shadow: 0px 4px 10px -2px black;
            }

            @media(min-width: 1140px) {
              .goal-card-details {
                opacity: 0;
              }
              .goal-card:hover .goal-card-details,
              .goal-card:focus .goal-card-details {
                opacity: 1;
              }

              .goal-card:hover .goal-card-overlay,
              .goal-card:focus .goal-card.details {
                mix-blend-mode: normal;
              }

              .goal-card:hover .goal-number-large,
              .goal-card:focus .goal-number-large {
                opacity: 0;
              }

            }

            .goal-number {
              border-radius: 100%;
              border: 2px solid white;
              padding: 12px 14px;
            }

            .goal-text {
              flex: 1;
              display: flex;
              flex-direction: column;
              justify-content: space-evenly; 
            }

            .goal-text p {
              color: white!important;
              text-align: center;
            }

            .goal-header {
              font-size: 18px!important;
              margin-bottom: 0!important;
            }

            .goal-intro-text {
              font-size: 16px!important;
            }

            @media(max-width: 1140px) {
              .goal-number {
                font-size: 40px!important;
                font-weight: bold;
                padding: 18px 20px;
                border: 4px solid white;
              }
              .goal-header {
                font-size: 30px!important;
              }
              .goal-intro-text {
                font-size: 24px!important;
              }
            }
            @media(max-width: 992px) {
              .goal-number {
                font-size: 25px!important;
                font-weight: bold;
                padding: 12px 16px;
                border: 4px solid white;
                margin-bottom: 8px;
              }

              .goal-header {
                font-size: 20px!important;
              }
              .goal-intro-text {
                font-size: 18px!important;
              }
            }

            @media(max-width: 768px) {
              .goal-number {
                font-size: 40px!important;
                font-weight: bold;
                padding: 18px 20px;
                border: 4px solid white;
                margin-top: 8px;
              }
              .goal-header {
                font-size: 34px!important;
              }
              .goal-intro-text {
                font-size: 28px!important;
              }
            }
 
            @media(max-width: 576px) {
              .goal-card {
                padding-top: 0;
              }

              .goal-card-details {
                position: relative;
              }

              .goal-text {
                justify-content: center;
              }

              .goal-number {
                font-size: 40px!important;
                font-weight: bold;
                padding: 18px 20px;
                border: 4px solid white;
                margin-top: 8px;
              }
              .goal-header {
                font-size: 25px!important;
                margin-bottom: 12px!important;
              }
              .goal-intro-text {
                font-size: 20px!important;
              }
            }
 

          </style>
  
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

<!--
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
-->
       <?php } ?>

      <?php
        }
      }
      ?>
    </div>

  </div>


</section>
