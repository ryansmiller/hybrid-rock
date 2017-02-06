<?php
/**
 * Hybrid Rock Theme Customizer.
 *
 * @since  1.0.0
 * @access public
 * @return void
 * 
 */


if ( function_exists( 'Kirki' ) ) {


/**
 * Remove default Customizer settings, panels, and sections
 *
 * @since  1.0.0
 * @access public
 * @return void
 * 
 */

add_action( 'customize_register', 'hybrid_rock_remove_customize_register' );

function hybrid_rock_remove_customize_register( $wp_customize ) {

    $wp_customize->remove_section( 'themes' );
    $wp_customize->remove_section( 'header_image' );
    $wp_customize->remove_section( 'background_image' );
    $wp_customize->remove_section( 'static_front_page' );
    $wp_customize->remove_section( 'colors' );
    $wp_customize->remove_section( 'title_tagline' );
    $wp_customize->remove_control( 'blogname' );
    $wp_customize->remove_control( 'blogdescription' );
    $wp_customize->remove_control( 'display_header_text' );

    $wp_customize->remove_panel('widgets')->active_callback = '__return_false';

    $wp_customize->add_panel( 'tribe_customizer' )->title = "Events";
  //  $wp_customize->add_panel( 'widgets' )->title = "Widgets";
  //  $wp_customize->get_panel( 'widgets' )->priority = 250;


}


/**
 * Panel Priority
 *
 * @since  1.0.0
 * @access public
 * @return void
 * 
 */

add_action( 'customize_register', 'hybrid_rock_edit_customize_register', 12 );

function hybrid_rock_edit_customize_register( $wp_customize ) {

    $wp_customize->get_panel('nav_menus')->title = "Navigation Menus";
    $wp_customize->get_panel('nav_menus')->priority = 20;

}


/**
 * Filter Customizer text
 *
 * @since  1.0.0
 * @access public
 * @return void
 * 
 */


add_filter( 'gettext', 'hybrid_rock_change_label_names', 20, 3 );

function hybrid_rock_change_label_names( $translated_text, $text, $domain ){
    
    if (is_admin()){
    
        switch ( $translated_text ) {

      

            
        }

    }

    return $translated_text;

}


/**
 * Add Configuration Settings
 *
 * @since  1.0.0
 * @access public
 * @return void
 * 
 */

Kirki::add_config('hybrid_rock_theme_mod', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
) );

Kirki::add_config('hybrid_rock_option', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'option',
) );



/**
 * Panel: Header
 *
 * @since  1.0.0
 * @access public
 * @return void
 * 
 */


Kirki::add_panel( 'general', array(
    'priority'    => 10,
    'title'       => __( 'General Settings', 'rock' ),
) );


/**
 * Section: Header Navigation
 *
 * @since  1.0.0
 * @access public
 * @return void
 * 
 */


Kirki::add_section( 'header_layout', array(
    'title'          => __( 'Layout' ),
    'panel'          => 'general', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


Kirki::add_field( 'hybrid_rock_option', array(
    'type'        => 'text',
    'settings'    => 'wpseo_social[facebook_site]',
    'label'       => __( 'Facebook URL', 'hybrid_rock' ),
    'default'      => esc_attr__( '', 'hybrid_rock' ),
    'section'     => 'header_layout',
    'priority'    => 10,
) );


Kirki::add_field( 'hybrid_rock_option', array(
    'type'        => 'text',
    'settings'    => 'blogname',
    'label'       => __( 'Site Title', 'hybrid_rock' ),
    'default'      => esc_attr__( '', 'hybrid_rock' ),
    'section'     => 'header_layout',
    'priority'    => 20,
) );







}

