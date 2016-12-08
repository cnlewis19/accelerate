<?php
/**
 * The template for displaying single services.
 *
 * This is the template that displays single services by default.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>


			<?php while ( have_posts() ) : the_post();
					$size = "medium";
					$title = get_field('title');
					$image_1 = get_field('image_1'); ?>

<div class="services">
	<div class="description-pane">
		<h1 class="service-title"><?php the_title(); ?></h1>

		<?php the_content(); ?>

  </div>

	<div class="about-image-pane">
		<?php if($image_1) { ?>
			<?php echo wp_get_attachment_image( $image_1, $size ); ?>
		<?php } ?>
	</div>
</div>

			<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
