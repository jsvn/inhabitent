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


// add_filter( 'body_class', 'red_starter_body_classes' );
// inhabitent_login)logo(){
//   '<slyle
//   #login h1 a{
//      background:url('get_template_directory_uri. 'images/inhabitent-logo-text-dark.svg) no-repeat
//      background-size: 300px 53px !important; width: 300px !important; height: 53px
//    }
//    #login .button.button-primary{
//
//    }
//   </style>'
// }
//
// add_action('login_head', 'inhabitent_login_logo');
