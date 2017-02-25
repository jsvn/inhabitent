<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( has_post_thumbnail() ) : ?>

            <div class="thumbnail-wrapper">
            <?php the_post_thumbnail( 'large' ); ?>
            </div>
        <!-- <?php endif; ?> -->
        <div class="product-info">
          <?php the_title( sprintf( '<h2 class="entry-title"><span a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></span></h2>' ); ?>
          <p><?php echo CFS()->get('price'); ?></p>
        </div>
        <?php if ( 'post' === get_post_type() ) : ?>

        <?php endif; ?>
    </header><!-- .entry-header -->


</article><!-- #post-## -->
