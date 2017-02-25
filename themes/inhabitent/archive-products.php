<?php
/**
 * The template for displaying archive for the products post type (shop page).
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="product-content">
		<main id="main" class="site-main" role="main">

      		<?php if ( have_posts() ) : ?>

      			<!-- <header class="page-header">
      			</header><! .page-header -->
            <?php the_archive_title( '<h1 class="page-title shop-title">', '</h1>' ); ?>
      			<div class="product_archive_title">
      				<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>

      				<?php
      				$terms = get_terms( array(
      				'taxonomy' => 'product_type',
      				'hide_empty' => false,
      					));
      				?>

      				<?php	foreach ( $terms as $term ): ?>

      						<h3 class="product_sub_catagories"><a href="<?php echo get_term_link($term, '$product_type') ?>"><?php	echo	$term->name; ?></a></h3>

      				<?php endforeach; wp_reset_postdata(); ?>

           </div>

<div class="product_wrapper">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			  <?php get_template_part( 'template-parts/content-products' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content-products', 'none' ); ?>

		<?php endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
