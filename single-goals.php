<?php

/**
 * Single template for the Goals Pages
 */

get_header(); ?>

<div id="bootstrap_iso">
	<?php
	echo get_template_part(
		'partials/section',
		'header',
		[
			'image'      => get_the_post_thumbnail_url(),
			'title'      => get_the_title(),
			'heading'    => carbon_get_the_post_meta('crb_header_heading'),
			'white-background' => true,
		]
	);
	?>


	<div class="container pb-5">
		<div class="row">
			<div class="col-12 col-lg-8">
				<?php echo the_content(); ?>
				<h3>Goal <?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_number')); ?></h3>
				<p><strong><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_intro_bold_text')); ?></strong></p>
				<p><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_intro_regular_text')); ?></p>

				<div class="actions">
					<?php

					$actions = carbon_get_the_post_meta('crb_goal_actions');

					foreach ($actions as $action) {  
					
					?>

					<div class="action">
						<h4>Action <?php echo $action['action_number'];?></h4>
						<p><?php echo $action['action_text'];?></p>

					</div>

					<?php
						
					}

					?>
				</div>


			</div>
			<div class="col-12 col-lg-4">
				<blockquote>
					
					IMAGE GOES HERE
					<p><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_quote_text')); ?></p>
					<p>&mdash; <?php echo wp_kses_post(carbon_get_the_post_meta('crb_goal_quote_author')); ?></p>
				</blockquote>
			</div>
		</div>
	</div>

	<?php echo get_template_part('partials/pre-footer'); ?>

</div>

<?php
get_footer(); // Loads the footer.php template. ?>