<?php
/**
* Default posts template.
*/

get_header(); // Loads the header.php template.?>

<div id="bootstrap_iso">
  <?php echo get_template_part('partials/section', 'landing-reduced', array(
    'image_background'  => get_the_post_thumbnail_url(get_option('page_for_posts', true)),
    'landing_title'     => get_the_title(get_option('page_for_posts', true)),
  )) ?>
  <section class="bg-white">
    <div class="container py-5">
      <?php echo get_template_part('partials/breadcrumbs') ?>
      <?php while(have_posts()): the_post(); ?>
        <div class="row mb-5">
          <div class="col-md-4">
            <a href="<?php the_permalink() ?>"><img class="img-fluid mb-3 w-100" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true) ?>" loading="lazy"/></a>
          </div>
          <div class="col-md-8">
            <h3 class="text-whitney-semibold"><?php echo get_the_title() ?></h3>
            <p class="mb-3 small">By <span><?php echo get_the_author_meta('display_name') ?></span> on <span><?php echo get_the_date( 'F jS, Y' ) ?></span></p>
            <p class="text-whitney-book"><?php echo excerpt(40) ?></p>
            <p class="small"><a href="<?php the_permalink() ?>">Read More</a> | <span><?php echo get_comments_number() ? ( get_comments_number() . " " . ngettext('comment', 'comments', get_comments_number()) ) : 'No comments' ?></span></p>
          </div>
        </div>
      <?php endwhile ?>
      <div class="text-center">
        <?php echo the_posts_pagination() ?>
      </div>
    </div>
  </section>
  <?php echo get_template_part('partials/pre-footer') ?>
</div>

<?php get_footer(); // Loads the footer.php template. ?>