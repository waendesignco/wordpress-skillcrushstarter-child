<?php
/**
 * The template for displaying the portfolio archive page
 *
 * This is the template that displays the page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */
 get_header(); ?>

 <div id="primary" class="site-content sidebar">
 	 <div class="main-content" role="main">
    <?php while ( have_posts() ) : the_post();
          $size = "medium";
          $services = get_field('services');
          $client = get_field('client');
          $link = get_field('site_link');
 				  $image_1 = get_field("image_1");
    ?>

     <article class="portfolio">
     	 <aside class="portfolio-sidebar">
     				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
     				<h6><?php echo $services; ?></h6>

             <?php the_excerpt(); ?>

     			  <p class="view-project"><strong><a href="<?php the_permalink(); ?>">View Project</a></strong></p>
     		</aside>

     		<div class="portfolio-images">
             <a href="<?php the_permalink(); ?>">
     				<?php if($image_1) {
     				   echo wp_get_attachment_image( $image_1, $size );
     				} ?>
             </a>
     		</div>
      </article>

 		 <?php endwhile; // end of the loop. ?>
 		 </div><!-- .main-content -->
 	</div><!-- #primary -->

 <?php get_footer(); ?>
