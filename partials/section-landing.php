<section class="section-landing">
  <div class="bg-image bg-image--landing clip-bottom-concave white" style="background-image:url(<?php echo esc_url($args['image_background']) ?>)">
    <div class="container d-flex align-items-center">
      <h1 class="landing-heading"><span><?php echo esc_html($args['landing_title']) ?></span></h1>
    </div>
  </div>
  <div class="bg-white">
    <div class="container pt-3 pt-lg-5 pb-4 pb-lg-5">
      <div class="row">
        <div class="col-12">
          <h2 class=""><?php echo esc_html($args['landing_heading']) ?></h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-7">
          <?php echo wpautop(wp_kses_post($args['landing_content'])) ?>
        </div>
        <div class="col-md-5 text-center mt-1">
          <?php if ($args['landing_embed']): ?>
            <button class="btn toggle-lightbox text-uppercase"><?php echo esc_html($args['landing_label']) ?></button>
            <div id="lightbox"><?php echo ($args['landing_embed']) ?></div>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
</section>