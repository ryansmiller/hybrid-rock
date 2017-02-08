<?php
/**
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation; either version 2 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write
 * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 *
 * @package    Hybrid Rock
 * @subpackage Functions
 * @version    1.0.0
 * @author     Ryan Miller <ryan@ryanmiller.me>
 * @copyright  Copyright (c) 2013 - 2015, Ryan Miller
 * @link       http://themehybrid.com/themes/hybrid-base
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

// Get the template directory and make sure it has a trailing slash.
$hybrid_rock_dir = trailingslashit( get_template_directory() );

// Load the Hybrid Core framework and theme files.
require_once( $hybrid_rock_dir . 'library/hybrid.php'        );
require_once( $hybrid_rock_dir . 'inc/custom-background.php' );
require_once( $hybrid_rock_dir . 'inc/custom-header.php'     );
require_once( $hybrid_rock_dir . 'inc/theme.php'             );

// Launch the Hybrid Core framework.
new Hybrid();

// Do theme setup on the 'after_setup_theme' hook.
add_action( 'after_setup_theme', 'hybrid_rock_theme_setup', 5 );

/**
 * Theme setup function.  This function adds support for theme features and defines the default theme
 * actions and filters.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function hybrid_rock_theme_setup() {

	// Theme layouts.
	// add_theme_support( 'theme-layouts', array( 'default' => is_rtl() ? '2c-r' :'2c-l' ) );

	// Enable custom template hierarchy.
	add_theme_support( 'hybrid-core-template-hierarchy' );

	// The best thumbnail/image script ever.
	add_theme_support( 'get-the-image' );

	// Breadcrumbs. Yay!
	add_theme_support( 'breadcrumb-trail' );

	// Nicer [gallery] shortcode implementation.
	add_theme_support( 'cleaner-gallery' );

	// Automatically add feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// Post formats.
	/* add_theme_support(
		'post-formats',
		array( 'aside', 'audio', 'chat', 'image', 'gallery', 'link', 'quote', 'status', 'video' )
	); */

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Handle content width for embeds and images.
	hybrid_set_content_width( 1280 );
}


// Enqueue scripts and styles
add_action( 'wp_enqueue_scripts', 'hybrid_rock_scripts' );

/**
 * Scripts and styles setup function.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function hybrid_rock_scripts() {

	wp_deregister_style( 'font-awesome' );

	wp_enqueue_style( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all' );

	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all' );


	wp_enqueue_script( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js', array(), '3.3.7', true );

	wp_enqueue_script( 'webfontloader', 'https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.27/webfontloader.js', array(), '1.6.27', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}

/**
 * Custom Customizer functions.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */

require( $hybrid_rock_dir . 'inc/customizer.php' );




/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */

require_once( $hybrid_rock_dir . 'inc/tgm-plugin-activation/class-tgm-plugin-activation.php'	);


add_action( 'tgmpa_register', 'hybrid_rock_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function hybrid_rock_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Kirki',
			'slug'      => 'kirki',
			'required'  => true,
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'hybrid-rock',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'hybrid-rock' ),
			'menu_title'                      => __( 'Install Plugins', 'hybrid-rock' ),
			/* translators: %s: plugin name. * /
			'installing'                      => __( 'Installing Plugin: %s', 'hybrid-rock' ),
			/* translators: %s: plugin name. * /
			'updating'                        => __( 'Updating Plugin: %s', 'hybrid-rock' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'hybrid-rock' ),
			'notice_can_install_required'     => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'hybrid-rock'
			),
			'notice_can_install_recommended'  => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'hybrid-rock'
			),
			'notice_ask_to_update'            => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'hybrid-rock'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				/* translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'hybrid-rock'
			),
			'notice_can_activate_required'    => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'hybrid-rock'
			),
			'notice_can_activate_recommended' => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'hybrid-rock'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'hybrid-rock'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'hybrid-rock'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'hybrid-rock'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'hybrid-rock' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'hybrid-rock' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'hybrid-rock' ),
			/* translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'hybrid-rock' ),
			/* translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'hybrid-rock' ),
			/* translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'hybrid-rock' ),
			'dismiss'                         => __( 'Dismiss this notice', 'hybrid-rock' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'hybrid-rock' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'hybrid-rock' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);

	tgmpa( $plugins, $config );
}

/**
 * Unregister Nav Menus
 *
 * @since  1.0.0
 * @access public
 * @return void
 */


add_action( 'init', 'hybrid_rock_unregister_nav_menus');

function hybrid_rock_unregister_nav_menus() {

	unregister_nav_menu( 'secondary' );
	unregister_nav_menu( 'subsidiary' );

}

/**
 * Unregister Sidebars
 *
 * @since  1.0.0
 * @access public
 * @return void
 */

add_action( 'widgets_init', 'hybrid_rock_unregister_sidebars', 11 );

function hybrid_rock_unregister_sidebars() {

	unregister_sidebar( 'primary' );
	unregister_sidebar( 'subsidiary' );
}


/**
 * Unregister Widgets
 *
 * @since  1.0.0
 * @access public
 * @return void
 */

add_action('widgets_init', 'hybrid_rock_unregister_widgets', 11);

function hybrid_rock_unregister_widgets() {     

	// Default Widgets

	unregister_widget('WP_Widget_Pages');     
	unregister_widget('WP_Widget_Calendar');     
	unregister_widget('WP_Widget_Archives');     
	unregister_widget('WP_Widget_Links');     
	unregister_widget('WP_Widget_Meta');     
	unregister_widget('WP_Widget_Search');     
	unregister_widget('WP_Widget_Text');     
	unregister_widget('WP_Widget_Categories');     
	unregister_widget('WP_Widget_Recent_Posts');     
	unregister_widget('WP_Widget_Recent_Comments');     
	unregister_widget('WP_Widget_RSS');     
	unregister_widget('WP_Widget_Tag_Cloud');     
	unregister_widget('WP_Nav_Menu_Widget');     
	unregister_widget('Twenty_Eleven_Ephemera_Widget'); 

	// WooCommerce Widgets

	unregister_widget( 'WC_Widget_Recent_Products' );
	unregister_widget( 'WC_Widget_Featured_Products' );
	unregister_widget( 'WC_Widget_Product_Categories' );
	unregister_widget( 'WC_Widget_Product_Tag_Cloud' );
	unregister_widget( 'WC_Widget_Cart' );
	unregister_widget( 'WC_Widget_Layered_Nav' );
	unregister_widget( 'WC_Widget_Layered_Nav_Filters' );
	unregister_widget( 'WC_Widget_Price_Filter' );
	unregister_widget( 'WC_Widget_Product_Search' );
	unregister_widget( 'WC_Widget_Top_Rated_Products' );
	unregister_widget( 'WC_Widget_Recent_Reviews' );
	unregister_widget( 'WC_Widget_Recently_Viewed' );
	unregister_widget( 'WC_Widget_Best_Sellers' );
	unregister_widget( 'WC_Widget_Onsale' );
	unregister_widget( 'WC_Widget_Random_Products' );
	unregister_widget( 'WC_Widget_Rating_Filter' );
	unregister_widget( 'WC_Widget_Products' );

	// Other Widgets

	unregister_widget( 'WPForms_Widget' );
	unregister_widget( 'Tribe_Events_List_Widget' );

} 


/**
 * Whitelabel: Envira Gallery
 *
 * @since  1.0.0
 * @access public
 * @return void
 */


add_filter( 'gettext', 'tgm_envira_whitelabel', 10, 3 );
function tgm_envira_whitelabel( $translated_text, $source_text, $domain ) {
    
    // If not in the admin, return the default string.
    if ( ! is_admin() ) {
        return $translated_text;
    }

    if ( strpos( $source_text, 'an Envira' ) !== false ) {
        return str_replace( 'an Envira', '', $translated_text );
    }
    
    if ( strpos( $source_text, 'Envira' ) !== false ) {
        return str_replace( 'Envira', '', $translated_text );
    }
    
    return $translated_text;
    
}

add_action( 'admin_init', 'tgm_envira_remove_header' );
function tgm_envira_remove_header() {
    
    // Remove the Envira banner
    remove_action( 'in_admin_header', array( Envira_Gallery_Posttype_Admin::get_instance(), 'admin_header' ), 100 );

}


