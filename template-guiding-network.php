<?php
/**
 * Template Name: Guiding Network
 */
get_header(); // Loads the header.php template.
?>

<div id="bootstrap_iso">
  <?php
  echo get_template_part('partials/section', 'header', [
      'image' => wp_get_attachment_image_url(carbon_get_the_post_meta('crb_header_background_image'), 'header'),
      'title' => get_the_title(),
      'heading' => carbon_get_the_post_meta('crb_header_heading'),
  ])
  ?>
  <section class="bg-beige">
    <div class="container position-relative pt-md-5 text-burnt">
      <?php echo get_template_part('partials/breadcrumbs') ?>
      <?php the_content(); ?>
    </div>
  </section>
  <section class="bg-beige">
    <div class="clip-ellipse">
      <div class="text-white">
        <div class="container position-relative text-burnt">
          <span class="vertical top"><h3 class="mb-0 text-whitney text-uppercase text-burnt"><?php echo esc_html(carbon_get_the_post_meta('crb_vertical_text_1')) ?></h3></span>
          <div class="row mt-5">
            <div class="col-md-5 pl-md-5 pl-lg-6 pl-xl-7 mb-3">
              <figure class="img-rounded--text blue text-white">
                <div class="line-diagonal-right p-3"><h3 class="mb-0 text-whitney text-white"><?php echo esc_html(carbon_get_the_post_meta('crb_main_bubble_heading')) ?></h3></div>
              </figure>
            </div>
            <div class="col-md-6 offset-md-1 text-burnt">
              <div class="mb-5 text-burnt">
                <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta('crb_main_bubble_side_content'))) ?>    
              </div>
              <?php
              echo get_template_part('partials/bubble', '', array(
                  'bubble_image' => wp_get_attachment_image_url(carbon_get_the_post_meta('crb_sub_bubble_image'), 'circle'),
                  'bubble_heading' => carbon_get_the_post_meta('crb_sub_bubble_heading'),
                  'bubble_content' => carbon_get_the_post_meta('crb_sub_bubble_content'),
                  'class' => 'line-diagonal-left'
              ))
              ?>
            </div>
          </div>
          <?php foreach (carbon_get_the_post_meta('crb_bubble_1_rows') as $row): ?>
            <?php
            echo get_template_part('partials/row', 'bubble', array(
                'bubble_image' => wp_get_attachment_image_url($row['bubble_image'], 'circle'),
                'bubble_heading' => $row['bubble_heading'],
                'bubble_content' => $row['bubble_text'],
                'content' => $row['bubble_side_content'],
            ))
            ?>
          <?php endforeach ?>
        </div>

        <div style="background:#B4A189">
          <div class="container position-relative">
            <span class="vertical"><h3 class="mb-0 text-whitney text-uppercase text-burnt"><?php echo esc_html(carbon_get_the_post_meta('crb_vertical_text_2')) ?></h3></span>
            <?php foreach (carbon_get_the_post_meta('crb_bubble_2_rows') as $row): ?>
              <?php
              echo get_template_part('partials/row', 'bubble', array(
                  'alignment' => 'align-items-start',
                  'bubble_image' => wp_get_attachment_image_url($row['bubble_image'], 'circle'),
                  'bubble_heading' => $row['bubble_heading'],
                  'bubble_content' => $row['bubble_text'],
                  'content' => $row['bubble_side_content'],
              ))
              ?>
            <?php endforeach ?>
          </div>
        </div>
        <div style="background:#83503A">
          <div class="container position-relative">
            <span class="vertical"><h3 class="mb-0 text-whitney text-uppercase"><?php echo esc_html(carbon_get_the_post_meta('crb_vertical_text_3')) ?></h3></span>
            <?php foreach (carbon_get_the_post_meta('crb_bubble_3_rows') as $row): ?>
              <?php
              echo get_template_part('partials/row', 'bubble', array(
                  'alignment' => 'align-items-start',
                  'bubble_image' => wp_get_attachment_image_url($row['bubble_image'], 'circle'),
                  'bubble_heading' => $row['bubble_heading'],
                  'bubble_content' => $row['bubble_text'],
                  'content' => $row['bubble_side_content'],
              ))
              ?>
            <?php endforeach ?>
          </div>
        </div>
        <div style="background:#481700">
          <div class="container position-relative">
            <span class="vertical"><h3 class="mb-0 text-whitney text-uppercase"><?php echo esc_html(carbon_get_the_post_meta('crb_vertical_text_4')) ?></h3></span>
            <div class="row row-bubble flex-column-reverse flex-md-row my-5 my-md-0">
              <div class="col-md-5 offset-md-1 py-md-5 line-right-reduced">
                <div class="line-horizontal-right">
                  <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta('crb_large_bubble_side_content'))) ?>
                </div>
              </div>
              <div class="col-md-6 py-md-5">
                <div class="line-horizontal-left pl-md-3">
                  <div class="bg-image bg-horizontal position-relative" style="background-image:url(<?php echo wp_get_attachment_image_url(carbon_get_the_post_meta('crb_large_bubble_image'), 'full') ?>)"></div>
                  <h3 class="mt-4 text-whitney-semibold"><?php echo esc_html(carbon_get_the_post_meta('crb_large_bubble_heading')) ?></h3>
                </div>
              </div>
            </div>
            <div class="row mb-5 mb-lg-8">
              <div class="col-md-11 offset-md-1">
                <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta('crb_ending_text'))) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php echo get_template_part('partials/pre-footer') ?>
</div>

<?php
get_footer(); // Loads the footer.php template. ?>