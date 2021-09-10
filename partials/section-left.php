<?php
  $image_background  = $args['image_background'];
  $image_circular_id = $args['image_circular_id'];
  $heading           = $args['heading'];
  $content           = isset($args['content']) ? $args['content'] : '';
  $links             = $args['links'];
  $columns           = isset($args['columns']) ? $args['columns'] : [];

  if($image_circular_id){
    $image_circular = wp_get_attachment_image_url($image_circular_id, 'circle');
    $image_alt      = get_post_meta($image_circular_id, '_wp_attachment_image_alt', true) ? get_post_meta($image_circular_id, '_wp_attachment_image_alt', true) : get_the_title($image_circular_id);
  }
?>

<section class="section-left">
  <div class="bg-image section-header clip-bottom-concave--left" style="background-image:url(<?php echo esc_url($image_background) ?>);z-index:1;">
    <div class="container">
      <div class="row">
        <div class="col-6 offset-6 pt-5">
          <?php if(isset($image_circular)): ?>
          <figure class="img-rounded">
            <img class="img-fluid" src="<?php echo esc_url($image_circular) ?>" alt="<?php echo isset($image_alt) ? esc_attr($image_alt) : '' ?>" loading="lazy"/>
          </figure>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-beige">
    <div class="container pt-3 pb-3 pb-md-5">
      <div class="row">
        <div class="col-md-8 col-lg-10">
          <h2 class="mb-0 mt-5 mt-md-0"><?php echo esc_html($heading) ?></h2>
        </div>
      </div>
    </div>
    <div class="clip-right-rounded" <?php echo count($links) ? 'style="margin-top: 90px"' : '' ?>>
      <div class="bg-white">
        <div class="container">
          <?php echo get_template_part('partials/breadcrumbs') ?>
        </div>
        <div class="container pt-4 pt-xl-5 pb-5 <?php echo $columns ? 'columns-' . $columns : '' ?>">
          <?php echo $content ? wpautop(wp_kses_post($content)) : '' ?>
          <?php if(count($links)): ?>
            <div class="row justify-content-center" style="margin-top:-130px;">
              <?php foreach($links as $index=>$link): ?>
                <div class="col-md-4 mb-4"><a class="btn btn-card text-uppercase" href="<?php echo esc_url($link['link']) ?>" data-index="<?php echo esc_attr($index) ?>"><span><?php echo esc_html($link['label']) ?></span></a></div>
              <?php endforeach ?>
            </div>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
</section>