<?php
//add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.min.css' );

}/* Adds the child theme setup function to the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'supernews_child_theme_setup', 11 );

//add_filter('widget_text', 'do_shortcode');


/**
 * Setup function. All child themes should run their setup within this function. The idea is to add/remove 
 * filters and actions after the parent theme has been set up. This function provides you that opportunity.
 *
 * @since 1.0
 */
function supernews_child_theme_setup() {
	// Add your custom functions here.
}

if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar( false );
}
function cbdweb_deregister_scripts(){
  wp_deregister_script('supernews-retina-js');
}
add_action( 'wp_enqueue_scripts', 'cbdweb_deregister_scripts', 99 );
