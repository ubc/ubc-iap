<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<section class="section-news bg-white">

  <div class="container">
    <div class="row mt-5">

      <?php
      $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3
      );

      $post_query = new WP_Query($args);

      if ($post_query->have_posts()) {

        while ($post_query->have_posts()) {
          $post_query->the_post();
          ?>

          <?php $post_date = get_the_date('M j, Y'); ?>

          <div class="col-md-4">
            <p class="mt-2"><?php the_post_thumbnail('medium_large'); ?></p>
            <p class="mb-1">Posted: <?php echo $post_date; ?></p>
            <h3><a class="news-link" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            <p><a href="<?php the_permalink() ?>">Read More</a></p>
          </div>


          <?php
        }
      }
      ?>


    </div>
  </div>


</section>
