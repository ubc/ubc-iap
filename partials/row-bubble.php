<div class="row row-bubble flex-column-reverse flex-md-row my-5 my-md-0">
  <div class="col-md-5 offset-md-1 py-md-5 line-right">
    <?php if(isset($args['content']) && $args['content']): ?>
      <div class="line-horizontal-right">
        <?php echo wpautop(wp_kses_post($args['content'])) ?>
      </div>
    <?php endif ?>
  </div>
  <div class="col-md-6 py-md-5">
    <div class="line-horizontal-left">
      <?php echo get_template_part('partials/bubble', '', $args) ?>
    </div>
  </div>
</div>