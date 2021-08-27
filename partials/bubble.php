<div class="row <?php echo isset($args['alignment']) ? $args['alignment'] : 'align-items-center' ?> flex-md-nowrap">
  <div class="col-md-5 ml-xl-3 mb-3">
    <div class="<?php echo isset($args['class']) ? $args['class'] : '' ?>">
      <figure class="img-rounded--image" style="background-image:url(<?php echo esc_url($args['bubble_image']) ?>);"></figure>
    </div>
  </div>
  <div class="col-md-7 col-xxl-8 content-bubble text-white <?php echo isset($args['alignment']) ? 'mt-md-2 mt-lg-0 mt-xl-5' : '' ?>">
    <h3 class="mb-3 text-whitney-semibold"><?php echo esc_html($args['bubble_heading']) ?></h3>
    <?php echo wpautop(wp_kses_post($args['bubble_content'])) ?>
  </div>
</div>