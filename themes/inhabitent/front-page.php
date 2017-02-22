<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
    <a class="hero"  href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
       <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-full.svg" alt="Logo" width="HERE" height="HERE" /> -->
       <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/home-hero.jpg" alt="Logo" width="HERE" height="HERE" /> -->
    </a>
     <!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/images/inhabitent-logo-full.svg">
     <img src="<?php bloginfo('stylesheet_directory'); ?>/images/home-hero.jpg"> -->

    </main><!-- #main -->
    <section class= "news-feed">
      <h2>Inhabitent Journal</h2>
    <ul class="news-wrapper">
     <?php
       $args = array( 'post_type' => 'post', 'order' => 'DSC', 'numberposts' => 3 );
       $product_posts = get_posts( $args ); // returns an array of posts
        ?>

           <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
             <li>
          <?php get_template_part( 'template-parts/content-front-page' ); ?>
          <p><?php the_date(); ?> / <?php comments_number();?></p>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
          </li>
            <?php endforeach; wp_reset_postdata(); ?>
      </ul>
    </section>
	</div><!-- #primary -->


<?php get_footer(); ?>
