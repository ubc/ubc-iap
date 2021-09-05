<?php

if(is_home()){
      $ancestors        = [];
      $current_parent   = null;

      if(get_post_parent(get_option('page_for_posts'))) {
            $current_parent   = get_post_parent(get_option('page_for_posts'));
            $ancestors[]      = $current_parent;
      }

      while($current_parent && get_post_parent($current_parent)){
            $current_parent   = get_post_parent($current_parent);
            $ancestors[]      = $current_parent;
      }

      $ancestors = array_reverse($ancestors);
      $ancestors[] = get_post(get_option('page_for_posts'));
} else {
      $ancestors        = [get_post()];
      $current_parent   = null;

      while($current_parent && get_post_parent($current_parent)){
            $current_parent   = get_post_parent($current_parent);
            $ancestors[]      = $current_parent;
      }

      $ancestors = array_reverse($ancestors);
}

?>


<div>
      <div class="breadcrumb expand <?php echo isset($args['class']) ? $args['class'] : '' ?>" itemprop="breadcrumb">
            <?php if(is_front_page()): ?>
                  <span class="trail-end"><?php echo __( 'Home', 'ubc-iap' ) ?></span>
            <?php else: ?>
                  <span class="trail-begin"><a href="<?php echo site_url() ?>" title="<?php echo get_bloginfo('name') ?>" rel="home" class="trail-begin"><?php echo __( 'Home', 'ubc-iap' ) ?></a></span>
            <?php endif ?>

            <?php foreach($ancestors as $i=>$ancestor): ?>
                  <?php if(count($ancestors) == $i + 1): ?>
                        <span class="divider">»</span>
                        <span class="trail-end"><?php echo get_the_title($ancestor) ?></span>
                  <?php else: ?>
                        <span class="divider">»</span>
                        <a href="<?php echo get_the_permalink($ancestor) ?>" title="<?php echo get_the_title($ancestor) ?>"><?php echo get_the_title($ancestor) ?></a>
                  <?php endif ?>
            <?php endforeach ?>
      </div>
      <hr class="mt-2 mb-5 <?php echo isset($args['class']) ? $args['class'] : '' ?>"/>
</div>