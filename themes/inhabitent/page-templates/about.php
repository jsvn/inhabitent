<?php
/**
 * Template Name: About Page
 *
 * @package Inhabitent
 */
get_header();

?>


<div id="primary" class="about-content">
		<main id="main" class="site-main" role="main">

      <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

  <!-- <h2>About</h2> -->
  <?php echo CFS()->get( 'about_header_img' ); ?>
  </header>
  <div class="text">
  <?php echo CFS()->get( 'about_header_story' ); ?>
  <?php echo CFS()->get( 'about_header_team' ); ?>
</div>
</main>
</div>

<?php get_footer(); ?>
