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
} elseif(get_query_var('post_type') == 'goals') {
  $goalsPage = true;
} else {
      $ancestors = array_reverse( get_post_ancestors(get_the_ID()) );
      array_push( $ancestors, get_the_ID() );
}

?>


<div>
      <div class="breadcrumb expand <?php echo isset($args['class']) ? $args['class'] : '' ?>" itemprop="breadcrumb">
            <?php if(is_front_page()): ?>
                  <span class="trail-end"><?php echo __( 'Home', 'ubc-iap' ) ?></span>
            <?php else: ?>
                  <span class="trail-begin"><a href="<?php echo site_url() ?>" title="<?php echo get_bloginfo('name') ?>" rel="home" class="trail-begin"><?php echo __( 'Home', 'ubc-iap' ) ?></a></span>
            <?php endif ?>

            <?php if($goalsPage): ?>

                  <span class="divider">»</span>
                  <a href="/implementation" title="Implementation>">Implementation</a>

                  <span class="divider">»</span>
                  <a href="/the-action-plan/" title="The Action Plan>">The Action Plan</a>


                  <span class="divider">»</span>
                  <span class="trail-end"><?php echo get_the_title() ?></span>


            <?php else: ?>
              <?php foreach($ancestors as $i=>$ancestor): ?>
                    <?php if(count($ancestors) == $i + 1): ?>
                          <span class="divider">»</span>
                          <span class="trail-end"><?php echo get_the_title($ancestor) ?></span>
                    <?php else: ?>
                          <span class="divider">»</span>
                          <a href="<?php echo get_the_permalink($ancestor) ?>" title="<?php echo get_the_title($ancestor) ?>"><?php echo get_the_title($ancestor) ?></a>
                    <?php endif ?>
              <?php endforeach ?>

            <?php endif ?>
      </div>

      <?php
        if($args['margin-bottom']): 
          $breadCrumbSpacing = $args['margin-bottom'];
        else: 
          $breadCrumbSpacing = "mb-5";
        endif
      ?>

        <hr class="mt-2 <?php echo $breadCrumbSpacing ?> <?php echo isset($args['class']) ? $args['class'] : '' ?>"/>
</div>
