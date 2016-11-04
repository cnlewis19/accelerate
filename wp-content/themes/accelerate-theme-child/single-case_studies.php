<?php
/**
 * The template for displaying single case studies.
 *
 * This is the template that displays single case studies by default.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">


			<?php while ( have_posts() ) : the_post();
					$size = "full";
					$services = get_field('services');
					$clients = get_field('clients');
					$link = get_field('site_link');
					$image_1 = get_field('image_1');
					$image_2 = get_field('image_2');
					$image_3 = get_field('image_3'); ?>

<div class="case-studies">
	<div class="description-pane">
		<h1 class="case-study-title"><?php the_title(); ?></h1>
		<h3 class="case-study-tags"><?php echo $services; ?></h3>
		<h2 class="case-study-client">Client: <?php echo $clients; ?></h2>

		<?php the_content(); ?>

		<p><a href="<?php echo $link; ?>"> Site Link </a></p>
	</div>

	<div class="image-pane">
		<?php if($image_1) { ?>
			<?php echo wp_get_attachment_image( $image_1, $size ); ?>
		<?php } ?>
		<?php if($image_2) { ?>
			<?php echo wp_get_attachment_image( $image_2, $size ); ?>
		<?php } ?>
		<?php if($image_3) { ?>
			<?php echo wp_get_attachment_image( $image_3, $size ); ?>
		<?php } ?>

	</div>
</div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
