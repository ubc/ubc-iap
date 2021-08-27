<?php get_header(); ?>

<div id="bootstrap_iso">
  <?php echo get_template_part('partials/section', 'header', [
      'image'   => get_the_post_thumbnail_url(),
      'title'   => get_the_title(),
      'heading' => carbon_get_the_post_meta( 'crb_header_heading' ),
  ]) ?>

  <section class="bg-beige">
    <div class="container pb-5">
      <?php echo the_content() ?>
    </div>
  </section>

  <?php echo get_template_part('partials/pre-footer') ?>
</div>

<?php get_footer(); // Loads the footer.php template. ?>