<?php
/**
* Template Name: Totem
*/

get_header(); // Loads the header.php template.?>

<div id="bootstrap_iso">
  <section class="bg-white">
    <div class="container py-5">
      <div class="row pb-5">
        <div class="col-12">
        <?php echo the_content(); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 col-lg-6">
          <figure id="totem">
            <div><img class="img-fluid svg" src="<?php echo get_stylesheet_directory_uri() . ('/dist/images/UBC-Totem-Base-Outline.svg'); ?>" loading="lazy"></div>
            <?php foreach(array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10") as $i): ?>
              <div><img class="img-fluid svg" src="<?php echo get_stylesheet_directory_uri() . ('/dist/images/' . $i . '-UBC-Totem.svg'); ?>" loading="lazy"></div>
            <?php endforeach ?>
            <div><img class="img-fluid svg" src="<?php echo get_stylesheet_directory_uri() . ('/dist/images/UBC-Totem-Base-Coloured.svg'); ?>" loading="lazy"></div>
          </figure>
        </div>
        <div class="col-md-7 col-lg-6">
          <h3 class="text-whitney"><?php echo esc_html(carbon_get_the_post_meta( 'crb_totem_heading' )) ?></h3>
          <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta( 'crb_totem_content' ))) ?>
          <ol id="totem-list" class="list-unstyled">
            <?php foreach(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) as $i): ?>
              <li data-index="<?php echo $i - 1 ?>"><span><?php echo $i ?></span> <span><?php echo esc_html(carbon_get_the_post_meta( 'crb_totem_description_' . $i)) ?></span></li>
            <?php endforeach ?>
          </ol>
          <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta( 'crb_totem_sub_content' ))) ?>
        </div>
      </div>
    </div>
  </section>
  <script>
    jQuery(document).on('ready', function(){
      var $       = jQuery;
      var $list   = $('#totem-list > li');

      $('#totem').on('click', 'svg[data-index]', function(){
        var index             = $(this).data('index');
        var $highlighted_item = $list.eq(index);

        $highlighted_item.addClass('state-highlight');

        setTimeout(function(){
          $highlighted_item.removeClass('state-highlight');
        }, 1500)

        if(window.innerWidth < 768) {
          $("html").animate({ scrollTop: $highlighted_item.offset().top - 100 }, 500);
        }
      });

      $('#totem').on('mouseenter', 'svg[data-index]', function(){
        var index             = $(this).data('index');
        var $highlighted_item = $list.eq(index);

        if(window.innerWidth >= 768) {
          var list_index        = $list.length - index - 1;
          var $positioned_item  = $list.eq(list_index);

          var distanceY = $positioned_item.offset().top - $highlighted_item.offset().top;

          $highlighted_item.css('transform', 'translateY(' + distanceY + 'px)');

          var $items_to_hide  = $list.not($highlighted_item);
              $items_to_hide.addClass('state-hide');
        }
      });

      $('#totem').on('mouseleave', 'svg[data-index]', function(){
        var index             = $(this).data('index');
        var $highlighted_item = $list.eq(index);

        if(window.innerWidth >= 768) {
          $highlighted_item.css('transform', 'translateY(0px)');
          $list.removeClass('state-hide');
        }
      });
    });
  </script>
  <?php echo get_template_part('partials/pre-footer') ?>
</div>

<?php get_footer(); // Loads the footer.php template. ?>