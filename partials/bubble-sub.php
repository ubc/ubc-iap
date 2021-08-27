<div class="bubble-sub">
  <figure class="img-rounded--image" style="background-image:url(<?php echo esc_url($args['image']) ?>);"></figure>
  <div class="bubble-text">
    <div>
      <h2 class="mb-1 text-white"><?php echo esc_html($args['heading']) ?></h2>
      <p class="mb-0 text-white"><?php echo esc_html($args['text']) ?></p>
    </div>
  </div>
  <?php if(isset($args['mini_image'])): ?>
    <?php echo get_template_part('partials/bubble', 'mini', [
      'image' => $args['mini_image'],
      'text'  => $args['mini_text'],
    ]) ?>
  <?php endif ?>
</div>