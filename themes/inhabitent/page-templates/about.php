<?php
/**
 * Template Name: About Page
 *
 * @package Inhabitent
 */
get_header();

?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

  <h2>About</h2>
  <?php echo CFS()->get( 'about_header_img' ); ?>
  <?php echo CFS()->get( 'about_header_story' ); ?>
  <?php echo CFS()->get( 'about_header_team' ); ?>
</main>
</div>

<?php get_footer(); ?>
