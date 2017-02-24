<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


function my_login_logo() { ?>
<style type="text/css">
#login h1 a, .login h1 a {
   background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
   background-size: 100%;
   width: 320px;
   margin-top: 20px;
   padding-bottom: 0px;
}
.wp-core-ui .button.button-large {
background-color: #248A83;
}
</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo_url() {
return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
function my_login_logo_url_title() {
return 'Inhabitent';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );



function inhabitent_about_css() {
  if (!is_page_template('page-templates/about.php')) {
    return;
  }
  CFS()->get( 'about_header_img' );
  $image= CFS()->get( 'about_header_img' );

 if (!$image){
     return;
   }
     $hero_css = ".page-template-about .entry-header {
             background:
                 linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
                 url({$image}) no-repeat center bottom;
             background-size: cover, cover;
     }";

wp_add_inline_style('red-starter-style', $hero_css);
  }

add_action('wp_enqueue_script', 'inhabitent_about_img_css');

function my_theme_archive_title( $title ) {
	if ( is_post_type_archive('products') ) {
        $title = 'Shop Stuff';
	}
		return $title;
	}
	add_filter( 'get_the_archive_title', 'my_theme_archive_title' );
