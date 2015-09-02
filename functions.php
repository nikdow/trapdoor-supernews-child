<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.min.css' );

}/* Adds the child theme setup function to the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'supernews_child_theme_setup', 11 );

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
