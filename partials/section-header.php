<section class="section-header">
  <div class="bg-image bg-image--header clip-bottom-concave--right <?php echo isset($args['white-background']) && $args['white-background'] ? 'white' : ''; ?> <?php echo isset($args['class']) ? $args['class'] : '' ?>" style="background-image:url(<?php echo esc_url($args['image']) ?>)">
    <div class="container d-flex align-items-center">
      <h1 class="landing-heading"><span><?php echo esc_html($args['title']) ?></span></h1>
    </div>
  </div>
  <?php if($args['heading']): ?>
    <div class="bg-beige">
      <div class="container py-3 pt-md-0 pb-md-4 pb-lg-5">
        <h2 class="mb-0"><?php echo esc_html($args['heading']) ?></h2>
      </div>
    </div>
  <?php endif ?>
</section>