<?php
/**
* Template Name: The Engagement Process
*/

get_header(); // Loads the header.php template.?>

<div id="bootstrap_iso">
  <?php echo get_template_part('partials/section', 'header', [
    'image'   => wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_header_background_image' ), 'header'),
    'title'   => get_the_title(),
    'heading' => carbon_get_the_post_meta( 'crb_header_heading' ),
  ]) ?>
  <section class="bg-beige">
    <div class="clip-ellipse">
      <div class="bg-image py-3 py-md-5 py-lg-6 py-xl-10" style="background-image:url(<?php echo esc_url(wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_bubble_background_image' ), 'full')) ?>);">
        <div class="container py-5 py-lg-10">
          <div class="row pt-0 pt-md-10 pb-md-5">
            <div class="col-md-5 offset-md-1">
              <figure class="graph-section graph-section--1">
                <figure class="img-rounded--text">
                  <div><h2 class="mb-0"><?php echo esc_html(carbon_get_the_post_meta( 'crb_main_bubble_1_heading' )) ?></h2></div>
                </figure>
                <?php foreach(array(1, 2, 3) as $i): ?>
                  <?php echo get_template_part('partials/bubble', 'sub', [
                    'image'   => wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_sub_bubble_' . $i . '_image' ), 'circle'),
                    'heading' => carbon_get_the_post_meta( 'crb_sub_bubble_' . $i . '_heading' ),
                    'text'    => carbon_get_the_post_meta( 'crb_sub_bubble_' . $i . '_text' ),
                  ]) ?>
                <?php endforeach ?>
                <?php echo get_template_part('partials/bubble', 'sub', [
                  'image'   => wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_sub_bubble_4_image' ), 'circle'),
                  'heading' => carbon_get_the_post_meta( 'crb_sub_bubble_4_heading' ),
                  'text'    => carbon_get_the_post_meta( 'crb_sub_bubble_4_text' ),
                  'mini_image'  => wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_mini_bubble_1_image' ), 'circle'),
                  'mini_text'   => carbon_get_the_post_meta( 'crb_mini_bubble_1_text' ),
                ]) ?>
              </figure>
            </div>
            <div class="col-md-5 offset-md-4">
              <figure class="graph-section graph-section--2">
                <figure class="d-none d-md-block img-rounded--text"><div></div></figure>
                <?php echo get_template_part('partials/bubble', 'sub', [
                  'image'   => wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_sub_bubble_5_image' ), 'circle'),
                  'heading' => carbon_get_the_post_meta( 'crb_sub_bubble_5_heading' ),
                  'text'    => carbon_get_the_post_meta( 'crb_sub_bubble_5_text' ),
                ]) ?>
                <?php foreach(array(2, 3, 4, 5, 6) as $i): ?>
                  <?php echo get_template_part('partials/bubble', 'mini', [
                    'image' => wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_mini_bubble_' . $i . '_image' ), 'circle'),
                    'text'  => carbon_get_the_post_meta( 'crb_mini_bubble_' . $i . '_text' ),
                  ]) ?>
                <?php endforeach ?>
                <?php echo get_template_part('partials/bubble', 'mini', [
                  'image' => wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_mini_bubble_7_image' ), 'circle'),
                  'text'  => carbon_get_the_post_meta( 'crb_mini_bubble_6_and_7_text' ),
                ]) ?>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-beige">
    <div class="container py-5">
      <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta( 'crb_section_1_content' ))) ?>
    </div>
  </section>
  <?php echo get_template_part('partials/pre-footer') ?>
</div>

<?php get_footer(); // Loads the footer.php template. ?>