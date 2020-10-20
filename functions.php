<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load functions to secure your WP install.
 */
require get_template_directory() . '/inc/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';


/* --- Adding Google Fonts to Site --- */
function mp_google_fonts() {
    wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Crimson+Text|Lato:300,400,700');
    wp_enqueue_style( 'googleFonts');
}

add_action('wp_print_styles', 'mp_google_fonts');
/* --- End of Adding Google Fonts to Site --- */


/* --- Register Menu --- */
function register_my_menus() {
  register_nav_menus(
    array(
      'sub-menu' => __( 'Sub Menu' ),
      'footer-products-menu' => __( 'Footer Products Menu' ),
      'footer-page-menu' => __( 'Footer Page Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );
/* --- End of Register Menu --- */

/* --- Adding Theme Options to Wordpress Admin Bar --- */
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
		'page_title' 	=> 'General Site Content',
		'menu_title'	=> 'General Site Content',
		'menu_slug' 	=> 'theme-general-content',
		'capability'	=> 'edit_posts',
    'icon_url' => 'dashicons-admin-appearance',
    'position' => 61,
    'redirect'		=> false
	));

}
/* --- End of Adding Theme Options to Wordpress Admin Bar --- */


/* --- GRAVITY FORMS --- */

// add label hidden filter for Forms
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

// filter the Gravity Forms button type
add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='btn' id='gform_submit_button_{$form['id']}'><span>Send Request</span> <i class='fa fa-arrow-right' aria-hidden='true'></i></button>";
}

// filter the Gravity Forms button type for Contact Form
add_filter( 'gform_submit_button_4', 'contact_form_submit_button', 10, 2 );
function contact_form_submit_button( $button, $form ) {
    return "<button class='btn btn-contact pull-right' style='margin-right:15px' id='gform_submit_button_{$form['id']}'><span>Send Message</span> <i class='fa fa-arrow-right' aria-hidden='true'></i></button>";
}

/* --- End of GRAVITY FORMS --- */


/* --- CUSTOMISE WP_LOGIN LOGIN PAGE --- */

/* Changes the Wordpress logo to custom logo */
function custom_login_logo() {
	echo '<style type="text/css">
	 .login h1 a { background-image:url('.get_bloginfo('template_directory').'/img/logos/montpelier_joinery_logo-black@2x.png) !important;
     background-size: 198px 33px !important;
     width: 198px !important;
     height: 33px !important;
     margin-top: 20px;
   }
	</style>';
}

add_action('login_head', 'custom_login_logo');

/* Changes the URL of the image link to blog homepage */
function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );


/* Changes the title attribute of image to name of blog */
function change_wp_login_title() {
	return get_option('blogname');
}
add_filter('login_headertitle', 'change_wp_login_title');

/* --- END OF CUSTOMISE WP_LOGIN LOGIN PAGE --- */


/* --- SECURITY --- */

/* --- Remove Wordpress Version Information --- */
remove_action('wp_head', 'wp_generator');

/* --- Hides if username is correct in failed password attempt message --- */
add_filter('login_errors','login_error_message');
function login_error_message($error){
	//check if that's the error you are looking for

	//its the right error so you can overwrite it
	$error = sprintf(__("Oops sorry login failed, please try again."),get_bloginfo('url'));

	return $error;
}

/* --- End of SECURITY --- */
