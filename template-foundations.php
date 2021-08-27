<?php
/**
* Template Name: Foundations
*/

get_header(); // Loads the header.php template.?>

<div id="bootstrap_iso">
  <?php echo get_template_part('partials/section', 'header', [
      'image'   => wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_header_background_image' ), 'header'),
      'title'   => get_the_title(),
      'heading' => carbon_get_the_post_meta( 'crb_header_heading' ),
  ]) ?>
  <section class="bg-beige">
    <div class="container pb-5">
      <div class="row justify-content-center">
        <div class="col-12 mb-5">
          <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta( 'crb_section_1_content_1' ))) ?>
        </div>
        <div class="col-md-6 col-lg-5 mb-4 mb-md-0 mx-lg-4 mx-xl-5">
          <figure class="img-rounded--text blue">
            <div class="text-white">
              <h2 class="mb-2 mb-md-3"><?php echo esc_html(carbon_get_the_post_meta( 'crb_section_1_bubble_1_heading' )) ?></h2>
              <p><?php echo wp_kses_post(carbon_get_the_post_meta( 'crb_section_1_bubble_1_content' )) ?></p>
            </div>
          </figure>
        </div>
        <div class="col-md-6 col-lg-5 mx-lg-5">
          <figure class="img-rounded--text blue">
            <div class="text-white">
              <h2 class="mb-2 mb-md-3"><?php echo esc_html(carbon_get_the_post_meta( 'crb_section_1_bubble_2_heading' )) ?></h2>
              <p><?php echo wp_kses_post(carbon_get_the_post_meta( 'crb_section_1_bubble_2_content' )) ?></p>
            </div>
          </figure>
        </div>
        <div class="col-12 mt-5">
          <h2><?php echo esc_html(carbon_get_the_post_meta( 'crb_section_1_heading' )) ?></h2>
          <div class="columns-2">
            <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta( 'crb_section_1_content_2' ))) ?>
          </div>
          <hr/>
          <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta( 'crb_section_1_content_3' ))) ?>
        </div>
      </div>
    </div>
  </section>
  <?php echo get_template_part('partials/pre-footer') ?>
</div>

<?php get_footer(); // Loads the footer.php template. ?>