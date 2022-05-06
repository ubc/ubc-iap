<?php

/**
 * Single template for the Goals Pages
 */

get_header(); ?>

<div id="bootstrap_iso">
	<?php echo get_template_part('partials/section', 'landing-reduced', [
		'image_background'   => get_the_post_thumbnail_url(),
		'landing_title'   => get_the_title(),
	]) ?>

	<div class="container pb-5">
		<?php echo get_template_part('partials/breadcrumbs') ?>
		<div class="row">
			<div class="col-12 col-lg-8 goals">
				<div class="goal-intro">
					<?php echo the_content(); ?>
				</div>
				
				<?php // Hard Coding with word 'Goal' for now 
				?>
				<h3>Goal <?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_number')); ?></h3>
				<p><strong><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_intro_bold_text')); ?></strong></p>
				<p><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_intro_regular_text')); ?></p>

				<div class="actions">
					<?php

					$actions = carbon_get_the_post_meta('crb_goal_actions');
					foreach ($actions as $action) {

					?>

						<div class="action">
							<h4 class="action-number">Action <?php echo $action['action_number']; ?></h4>
							<p class="action-text"><?php echo $action['action_text']; ?></p>
							<span class="action-circle"></span>
						</div>

					<?php

					}

					?>
				</div>


			</div>
			<section class="col-12 col-lg-4 section-quote mt-5 mt-lg-0">
				<div class="quote-image">
          <span class="quote-clip"></span>
					<?php

					$quote_image = carbon_get_the_post_meta('crb_goal_right_image');
					$quote_img_tall = wp_get_attachment_image_url($quote_image, 'goal-tall');
					$quote_img_wide = wp_get_attachment_image_url($quote_image, 'goal-wide');
					$quote_img_alt = get_post_meta($quote_image, '_wp_attachment_image_alt', true) ? get_post_meta($quote_image, '_wp_attachment_image_alt', true) : get_the_title();

					?>

					<picture>
						<source media="(min-width:992px)" srcset="<?php echo $quote_img_tall; ?>">
						<img src="<?php echo $quote_img_wide; ?>" alt="<?php echo $quote_img_alt; ?>">
					</picture>
				</div>
				<div class="goal-quote-wrapper">

					<span class="quotes leftquote">“</span>
					<p class="goal-quote-text"><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_quote_text')); ?></p>
					<p class="goal-quote-author">&mdash; <?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_quote_author')); ?></p>
					<span class="quotes rightquote">”</span>
				</div>

			</section>
		</div>
		<div class="row goals-prevnext">
			<div class="col-4"><?php previous_post_link(); ?></div>
			<div class="col-4 text-center"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'The Action Plan' ) ) ); ?>">The Action Plan</a></div>
			<div class="col-4 text-right"><?php next_post_link(); ?></div>
		</div>
	</div>

	<?php echo get_template_part('partials/pre-footer'); ?>

</div>

<?php get_footer(); // Loads the footer.php template. 
