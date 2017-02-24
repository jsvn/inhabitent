<?php
/**
 * The template for displaying all single products.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="single-content">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		      <article class="single_product_wrapper" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		      	<header class="entry-header">
		      		<?php if ( has_post_thumbnail() ) : ?>
		      			<?php the_post_thumbnail( 'large' ); ?>
		      		<?php endif; ?>

		      	</header><!-- .entry-header -->

		      	<div class="single-content">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						  <p class="single_product_price">	<?php echo CFS()->get( 'price' ); ?></p>
		      		<?php the_content(); ?>
		      	</div><!-- .entry-content -->
		      </article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

 <?php get_footer(); ?>
