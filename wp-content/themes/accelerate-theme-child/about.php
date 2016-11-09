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

 		</div><!-- #content -->
 	</div><!-- #primary -->
</section>

 <?php get_footer(); ?>
