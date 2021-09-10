<?php
$image_background = $args['image_background'];
$image_circular_id = $args['image_circular_id'];
$heading = $args['heading'];
$content = isset($args['content']) ? $args['content'] : '';
$links = $args['links'];

if ($image_circular_id) {
  $image_circular = wp_get_attachment_image_url($image_circular_id, 'circle');
  $image_alt = get_post_meta($image_circular_id, '_wp_attachment_image_alt', true) ? get_post_meta($image_circular_id, '_wp_attachment_image_alt', true) : get_the_title($image_circular_id);
}
?>

<section class="section-right">

  <div class="bg-lightblue">

    <div class="container py-5">
      <div class="row">
        <div class="col-12">

          <h2 class=""><?php echo esc_html($heading) ?></h2>
          <?php echo $content ? wpautop(wp_kses_post($content)) : '' ?>
          <?php if (count($links)): ?>
            <div class="row justify-content-center" style="margin-top:-130px;">
              <?php foreach ($links as $index => $link): ?>
                <div class="col-md-4 mb-4"><a class="btn btn-card text-uppercase" href="<?php echo esc_url($link['link']) ?>" data-index="<?php echo esc_attr($index) ?>"><span><?php echo esc_html($link['label']) ?></span></a></div>
                    <?php endforeach ?>
            </div>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
</section>