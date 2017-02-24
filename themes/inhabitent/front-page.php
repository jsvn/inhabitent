<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<section class="hero">
<img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-full.svg';
?>" class="hero-img" alt="inhabitent circle logo" />
</section>

      <h2 class="title">Shop Stuff</h2>
    <div class="shopstuff container">

  <?php
      $terms = get_terms( array(
        'taxonomy' => 'product_type',
        'hide_empty'  => 'false',
         ));
      foreach ($terms as $term) :
        $url = get_term_link( $term->slug , 'product_type');
  ?>
    <div class="shop-stuff-item">
        <div>
            <img src="<?php echo get_template_directory_uri();?>/images/product-type-icons/<?php echo $term->slug; ?>.svg" alt="">
        </div>
        <p><?php echo $term->description; ?></p>
        <button class="read-button"><a href='<?php echo $url?>' class='button-link'><?php echo $term->name." "; ?>Stuff</a></button>
</div>

  <?php endforeach; ?>
</div>


    <section class= "news-feed">
      <h2 class="inb">Inhabitent Journal</h2>
    <ul class="news-wrapper">
     <?php
       $args = array( 'post_type' => 'post', 'order' => 'DSC', 'numberposts' => 3 );
       $product_posts = get_posts( $args ); // returns an array of posts
        ?>

           <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
             <li>
          <?php get_template_part( 'template-parts/content-front-page' ); ?>
          <p><?php the_date(); ?> / <?php comments_number();?></p>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>Label</h2>
					<a class="read-button" href="<?php the_permalink(); ?>">Read Entry</a>
          </li>
            <?php endforeach; wp_reset_postdata(); ?>
      </ul>
    </section>
	</div><!-- #primary -->
  </main><!-- #main -->


<?php get_footer(); ?>
