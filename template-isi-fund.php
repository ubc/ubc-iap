<?php
/**
 * Template Name: ISI Fund
 */
get_header(); // Loads the header.php template.
?>

<div id="bootstrap_iso">
  <?php echo get_template_part('partials/section', 'header', [
      'class'   => 'white',
      'image'   => get_the_post_thumbnail_url(),
      'title'   => get_the_title(),
      'heading' => carbon_get_the_post_meta( 'crb_header_heading' ),
  ]) ?>

  <section>
    <div class="container my-5">
      <?php echo get_template_part('partials/breadcrumbs') ?>

      <?php if(carbon_get_the_post_meta('crb_content_1')) :?>
      <div class="inner-content">
        <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta('crb_content_1'))) ?>
      </div>
      <?php endif ?>

      <?php if(carbon_get_the_post_meta('crb_content_2')) :?>
        <div class="inner-content">
          <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta('crb_content_2'))) ?>
        </div>
      <?php endif ?>

      <?php if(carbon_get_the_post_meta('crb_content_2')) :?>
        <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta('crb_content_3'))) ?>
      <?php endif ?>
    </div>
  </section>

  <?php $links = carbon_get_the_post_meta('crb_cards') ?>
  <?php if (count($links)): ?>
    <section>
      <div class="container my-5">
          <div class="row justify-content-center">
            <?php foreach ($links as $index => $link): ?>
              <div class="col-md-4 mb-4"><a class="btn btn-card text-uppercase" href="<?php echo esc_url($link['link']) ?>" data-index="<?php echo esc_attr($index) ?>"><span><?php echo esc_html($link['label']) ?></span></a></div>
            <?php endforeach ?>
          </div>
      </div>
    </section>
  <?php endif ?>

  <?php $columns = carbon_get_the_post_meta('crb_columns') ?>
  <?php if (count($columns)): ?>
    <section>
      <div class="container my-5">
          <div class="row justify-content-center">
            <?php foreach ($columns as $index => $column): ?>
              <div class="col-md-4 mb-4">
                <div class="px-4 py-5 column <?= $index % 2 == 0 ? 'column-beige':'column-blue' ?>">
                  <?php echo wpautop(wp_kses_post($column['content'])); ?>
                </div>
              </div>
            <?php endforeach ?>
          </div>
      </div>
    </section>
  <?php endif ?>

  <?php echo get_template_part('partials/pre-footer') ?>
</div>

<?php get_footer(); // Loads the footer.php template. ?>