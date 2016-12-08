<?php
/* Template Name: About
 * The template for displaying the about page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
 get_header(); ?>

<section class="about-page">
  <div id="primary" class="site-content">
 		<div id="content" role="main">
 			<?php while ( have_posts() ) : the_post(); ?>
 				<h4 class="about-heading"><?php the_content(); ?></h4>
 			<?php endwhile; // end of the loop. ?>
</section>

<section class="service-posts">
	<div class="service-content clearfix">

	<ul class="homepage-featured-work">
		<?php query_posts('posts_per_page=4&post_type=services'); ?>
		<?php while ( have_posts() ): the_post();
			$image_1 = get_field("image_1");
			$size = "medium";
			?>
		<li class="individual-service">
			<figure>
					<?php echo wp_get_attachment_image($image_1, $size); ?>
			</figure>

			<div class="service-content">
				<h3> <?php the_title(); ?> </h3>
				<p> <?php the_content(); ?> </p>
			</div>
		</li>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</ul>
	</div>
</section>

 <?php get_footer(); ?>
