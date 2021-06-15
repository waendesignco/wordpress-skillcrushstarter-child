<?php
/**
 * The template for displaying single portfolip page
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
$size = "full";
get_header(); ?>

<div id="primary" class="site-content-sidebar">
		<div class="main-content" role="main">

		<?php while ( have_posts() ) : the_post();
			$services = get_field('services');
			$client = get_field('client');
			$link = get_field('site_link');
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3');	?>

		<article class="portfolio">
			<aside class="portfolio-sidebar">
				<h3><?php the_title(); ?></h3>
				<h6 class="services">Service: <?php echo $services; ?></h6>
				<h6>Client: <?php echo $client; ?></h6>

			  <?php the_content(); ?>

			  <p class="read-more-link"><a href="<?php echo $link; ?>" target="_blank">Visit Live Site &rsaquo;</a></p>
		  </aside>

			<div class="portfolio-images">
				<?php if($image_1) {
				   echo wp_get_attachment_image( $image_1, $size );
				} ?>
				<?php if($image_2) {
					 echo wp_get_attachment_image( $image_2, $size );
				} ?>
				<?php if($image_3) {
					 echo wp_get_attachment_image( $image_3, $size );
				} ?>
			</div>

    </article>
		<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

 </div><!-- #primary -->

 <nav id="navigation" class="container">
 	<div class="left"><a href="<?php echo site_url('/portfolios/') ?>">&larr; <span>Back to portfolios</span></a></div>
 </nav>

<?php get_footer(); ?>
