<?php
/**
 * The template for displaying archive case studies.
 *
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
      $image_1 = get_field('image_1');
      $clients = get_field('clients');
      ?>

<div class="case-studies">
    <div class="description-pane">
        	<h1 class="case-study-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h1>
        	<h3 class="case-study-tags"><?php echo $services; ?></h3>
        	<h2 class="case-study-client">Client: <?php echo $clients; ?></h2>

        	<?php the_excerpt(); ?>

        	<p><a href="<?php the_permalink(); ?>"> View Project </a></p>
      </div>

      <div class="image-pane">
        <a href="<?php the_permalink(); ?>">
        <?php if($image_1) { ?>
        	<?php echo wp_get_attachment_image( $image_1, $size ); ?>
        <?php } ?>
      </a>
    </div>
			<?php endwhile; // end of the loop. ?>

</div><!-- #primary -->

<?php get_footer(); ?>
