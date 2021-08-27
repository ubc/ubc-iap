<?php
/**
* Frontpage Option 1
*
* Slider | Widget Area
* Content 
*
**/

get_header(); // Loads the header.php template.

//Since this is the first frontpage layout option, the span will be 8 and 4
 ?>

<div id="bootstrap_iso">
    <?php echo get_template_part('partials/section', 'landing', array(
      'image_background'  => wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_landing_background_image' ), 'landing'),
      'landing_content'   => carbon_get_the_post_meta( 'crb_landing_content' ),
      'landing_embed'     => carbon_get_the_post_meta( 'crb_landing_embed' ),
      'landing_label'     => carbon_get_the_post_meta( 'crb_landing_label' ),
      'landing_heading'   => carbon_get_the_post_meta( 'crb_landing_heading' ),
      'landing_title'     => get_the_title(),
    )) ?>

    <?php echo get_template_part('partials/section' , 'right', [
        'image_background'  => wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_section_1_background_image' ), 'header'),
        'image_circular_id' => carbon_get_the_post_meta( 'crb_section_1_circular_image' ),
        'heading'           => carbon_get_the_post_meta( 'crb_section_1_heading' ),
        'content'           => carbon_get_the_post_meta( 'crb_section_1_content' ),
        'links'             => [],
    ]) ?>

    <?php // echo get_template_part('partials/section', 'left', [
        // 'image_background'  => wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_section_2_background_image' ), 'header'),
        // 'image_circular_id' => carbon_get_the_post_meta( 'crb_section_2_circular_image' ),
        // 'heading'           => carbon_get_the_post_meta( 'crb_section_2_heading' ),
        // 'content'           => carbon_get_the_post_meta( 'crb_section_2_content' ),
        // 'columns'           => 2,
        // 'links'             => [],
    // ]) ?>

    <?php echo get_template_part('partials/section' , 'right', [
        'image_background'  => wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_section_3_background_image' ), 'header'),
        'image_circular_id' => carbon_get_the_post_meta( 'crb_section_3_circular_image' ),
        'heading'           => carbon_get_the_post_meta( 'crb_section_3_heading' ),
        'links'             => carbon_get_the_post_meta( 'crb_section_3_links' ),
    ]) ?>

    <?php // echo get_template_part('partials/section', 'left', [
        // 'image_background'  => wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_section_4_background_image' ), 'header'),
        // 'image_circular_id' => carbon_get_the_post_meta( 'crb_section_4_circular_image' ),
        // 'heading'           => carbon_get_the_post_meta( 'crb_section_4_heading' ),
        // 'content'           => carbon_get_the_post_meta( 'crb_section_4_content' ),
        // 'links'             => [],
    // ]) ?>

    <?php echo get_template_part('partials/section' , 'right', [
        'image_background'  => wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_section_5_background_image' ), 'header'),
        'image_circular_id' => carbon_get_the_post_meta( 'crb_section_5_circular_image' ),
        'heading'           => carbon_get_the_post_meta( 'crb_section_5_heading' ),
        'links'             => carbon_get_the_post_meta( 'crb_section_5_links' ),
    ]) ?>

    <?php // echo get_template_part('partials/section', 'left', [
        // 'image_background'  => wp_get_attachment_image_url(carbon_get_the_post_meta( 'crb_section_6_background_image' ), 'header'),
        // 'image_circular_id' => carbon_get_the_post_meta( 'crb_section_6_circular_image' ),
        // 'heading'           => carbon_get_the_post_meta( 'crb_section_6_heading' ),
        // 'content'           => carbon_get_the_post_meta( 'crb_section_6_content' ),
        // 'links'             => [],
    // ]) ?>

    <?php echo get_template_part('partials/pre-footer') ?>

    <script>
    jQuery(document).on('ready', function(){
      var $         = jQuery;
      var $lightbox = $('#lightbox');

      $('.toggle-lightbox').on('click', function(){
        $lightbox.addClass('state-active');
      })

      $lightbox.on('click', function(){
        $lightbox.removeClass('state-active');
      });
    });
    </script>
</div>

<?php get_footer(); // Loads the footer.php template. ?>