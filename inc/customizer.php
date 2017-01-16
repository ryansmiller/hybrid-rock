<?php
/**
 * Hybrid Rock Theme Customizer.
 *
 * @since  1.0.0
 * @access public
 * @return void
 * 
 */


/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.

function rock_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )
        -> transport    = 'postMessage';
	
    $wp_customize->get_setting( 'blogdescription' )
        -> transport    = 'postMessage';
	
    $wp_customize->get_setting( 'header_textcolor' )
        -> transport    = 'postMessage';
    
    $wp_customize->get_section( 'title_tagline' )
        -> title        = 'Logo &amp; Title';
    
    $wp_customize->get_section( 'title_tagline' )
        -> priority     = 10;
    

    $wp_customize->remove_section( 'header_image' );
    $wp_customize->remove_section( 'background_image' );
    $wp_customize->remove_panel( 'nav_menus' );
    $wp_customize->remove_panel( 'widgets' );
    $wp_customize->remove_section( 'static_front_page' );
    $wp_customize->remove_panel( 'tribe_events_pro_customizer' );

    $wp_customize->remove_control( 'blogname' );
    $wp_customize->remove_control( 'blogdescription' );
    $wp_customize->remove_control( 'display_header_text' );
}
add_action( 'customize_register', 'rock_customize_register' );
*/

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.

function rock_customize_preview_js() {
	wp_enqueue_script( 'rock_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'rock_customize_preview_js' );
 */




/*

Kirki::add_config( 'rock', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'option',
    'option_name'   => 'rock',
) );

Kirki::add_config( 'rock_theme_mod', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
    'option_name'   => 'rock_theme_mod',
) );

Kirki::add_config( 'wpseo_social', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'option',
    'option_name'   => 'wpseo_social',
) );

*/




/**
 * Panels and Sections:
 * 
 *  1.  General
 *      1a. Layout
 *          - Container Type
 *          - Top Spacing
 *      1b. Background
 *          - Background Color
 *          - Background Image
 *      1c. Colors
 *      1d. Headings
 *          - Color
 *          - Font Family
 *          - Font Weight
 *          - Font Format
 *          - H1: Font Size, Line Height, Letter Spacing
 *          - H2: Font Size, Line Height, Letter Spacing
 *          - H3: Font Size, Line Height, Letter Spacing
 *          - H4: Font Size, Line Height, Letter Spacing
 *          - H5: Font Size, Line Height, Letter Spacing
 *          - H6: Font Size, Line Height, Letter Spacing
 *      1e. Text
 *          - Color
 *          - Font Family
 *          - Font Weight
 *          - Font Size
 *          - Line Height
 *  2.  Header
 *      2a. Header Layout
 *          - Layout
 *          - Padding
 *          - Fixed Header
 *      2b. Header Style
 *          - Background Color
 *          - Background Opacity
 *          - Background Image
 *          - Text Color
 *          - Link Color
 *          - Hover Color
 *      2c. Header Logo
 *          - Logo Type
 *          - Logo Text
 *          - Font Family
 *          - Font Weight
 *          - Font Size
 *          - Logo Image (Regular)
 *          - Logo Image (Retina)
 *      2d. Nav Layout
 *          - Nav Item Spacing
 *          - Nav Search Icon
 *          - Mobile Nav Toggle
 *      2e. Nav Style
 *          - Font Family
 *          - Font Weight
 *          - Font Format
 *          - Font Size   
 *      2f. Top Bar Layout
 *          - Layout
 *          - Column Layout
 *          - Text / Menu / Social Icons
 *      2g. Top Bar Style
 *          - Background Color
 *          - Background Opacity
 *          - Background Image
 *          - Text Color
 *          - Link Color
 *          - Hover Color   
 *  3.  Content
 *      3a. Content Background
 *      3b. Blog Layout
 *          - Sidebar Position
 *          - Sidebar Size
 *          - Sidebar Display
 *          - Post Author
 *          - Post Date
 *          - Comment Count
 *      3c. Archive Layout
 *          - Show Full Text
 *          - "Read More" Text
 *          - Featured Image
 *      3d. Post Layout
 *          - Featured Image
 *          - Post Categories
 *          - Post Tags
 *          - Prev / Next Post Links
 *      3e. WooCommerce Layout
 *          - Sidebar Position
 *          - "Add to Cart" Button
 *  4.  Footer
 *      4a. Footer Widgets Layout
 *          - Footer Widgets Display
 *      4b. Footer Widgets Style
 *      4c. Footer Layout
 *          - Layout
 *          - Column Layouts
 *      4d. Footer Style
 *      4e. Footer Parallax   
 *  5.  Widgets
 *  6.  Code
 *      6a. CSS Code
 *      6b. JavaScript Code
 *      6c. Head Code
 *      6d. Header Code
 *      6e. Footer Code
 *  7.  Settings
 *      7a. Site Identity
 *      7b. Static Front Page
 *      7c. Social Links
*/




/**
 * Panels and Sections: 1. General
*/



Kirki::add_panel( 'general', array(
    'priority'    => 10,
    'title'       => __( 'General', 'rock' ),
) );

    Kirki::add_section( 'general_layout', array(
        'title'          => __( 'Layout' ),
        'panel'          => 'general',
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
    ) );

    Kirki::add_section( 'general_background', array(
        'title'          => __( 'Background' ),
        'panel'          => 'general',
        'priority'       => 20,
        'capability'     => 'edit_theme_options',
    ) );

    Kirki::add_section( 'general_colors', array(
        'title'          => __( 'Colors' ),
        'panel'          => 'general',
        'priority'       => 30,
        'capability'     => 'edit_theme_options',
    ) );

    Kirki::add_section( 'general_headings', array(
        'title'          => __( 'Headings' ),
        'panel'          => 'general',
        'priority'       => 40,
        'capability'     => 'edit_theme_options',
    ) );

    Kirki::add_section( 'general_text', array(
        'title'          => __( 'Text' ),
        'panel'          => 'general',
        'priority'       => 50,
        'capability'     => 'edit_theme_options',
    ) );


/**
 * Panels and Sections: 2. Header
*/

Kirki::add_panel( 'header', array(
    'priority'    => 20,
    'title'       => __( 'Header', 'rock' ),
) );

    Kirki::add_section( 'header_top_bar_layout', array(
        'title'          => __( 'Top Bar: Layout' ),
        'panel'          => 'header',
        'priority'       => 80,
        'capability'     => 'edit_theme_options',
    ) );

    Kirki::add_section( 'header_top_bar_style', array(
        'title'          => __( 'Top Bar: Style' ),
        'panel'          => 'header',
        'priority'       => 90,
        'capability'     => 'edit_theme_options',
    ) );

    Kirki::add_section( 'header_layout', array(
        'title'          => __( 'Header: Layout' ),
        'panel'          => 'header',
        'priority'       => 30,
        'capability'     => 'edit_theme_options',
    ) );

    Kirki::add_section( 'header_style', array(
        'title'          => __( 'Header: Style' ),
        'panel'          => 'header',
        'priority'       => 40,
        'capability'     => 'edit_theme_options',
    ) );

    Kirki::add_section( 'header_logo', array(
        'title'          => __( 'Header: Logo' ),
        'panel'          => 'header',
        'priority'       => 50,
        'capability'     => 'edit_theme_options',
    ) );

    Kirki::add_section( 'header_nav_layout', array(
        'title'          => __( 'Nav: Layout' ),
        'panel'          => 'header',
        'priority'       => 60,
        'capability'     => 'edit_theme_options',
    ) );

    Kirki::add_section( 'header_nav_style', array(
        'title'          => __( 'Nav: Style' ),
        'panel'          => 'header',
        'priority'       => 70,
        'capability'     => 'edit_theme_options',
    ) );




/**
 * Fields: 1. General > 1a. Layout
*/

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'select',
    'settings'    => 'general_layout_container_type',
    'label'       => __( 'Container Type', 'rock' ),
    'description' => __( 'A wrapper for the site content. Use "container" for a responsive fixed width container. Use "container-fluid" for a full width container, spanning the entire width of your viewport.', 'rock' ),
    'section'     => 'general_layout',
    'default'     => 'container',
    'priority'    => 10,
    'choices'     => array(
        'container'         => __( 'Container', 'rock' ),
        'container-fluid'   => __( 'Container-Fluid', 'rock' ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'general_layout_spacing',
    'label'       => __( 'Spacing', 'kirki' ),
    'description' => __( 'Spacing at the top and bottom of the page.', 'rock' ),
    'section'     => 'general_layout',
    'default'     => 0,
    'priority'    => 20,
    'choices'     => array(
        'min'  => 0,
        'max'  => 150,
        'step' => 1,
    ),
) );

/**
 * Fields: 1. General > 1b. Background
*/


/**
 * Fields: 1. General > 1c. Colors
 */



/**
 * Fields: 1. General > 1d. Headings > H1
 */

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'custom',
    'settings'    => 'general_headings_h1',
    'section'     => 'general_headings',
    'default'     => '<h2>H1</h2>',
    'priority'    => 10,
) );


Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'general_headings_h1_font_size',
    'label'       => __( 'H1: Font Size', 'rock' ),
    'section'     => 'general_headings',
    'priority'    => 10,
    'default'     => 36,
    'choices'     => array(
        'min'  => 11,
        'max'  => 72,
        'step' => 1,
    ),
    'output' => array(
        array(
            'element'  => 'h1',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'general_headings_h1_line_height',
    'label'       => __( 'H1: Line Height', 'rock' ),
    'section'     => 'general_headings',
    'priority'    => 12,
    'default'     => 1.1,
    'choices'     => array(
        'min'  => 0.5,
        'max'  => 2.5,
        'step' => 0.1,
    ),
    'output' => array(
        array(
            'element'   => 'h1',
            'property'  => 'line-height',
            'units'    => 'em'
        ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'general_headings_h1_letter_spacing',
    'label'       => __( 'H1: Letter Spacing', 'rock' ),
    'section'     => 'general_headings',
    'priority'    => 13,
    'default'     => 0,
    'choices'     => array(
        'min'  => -5,
        'max'  => 20,
        'step' => 1,
    ),
    'output' => array(
        array(
            'element'   => 'h1',
            'property'  => 'letter-spacing',
            'units'     => 'px'
        ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'select',
    'settings'    => 'general_headings_h1_text_transform',
    'label'       => __( 'H1: Text Transform', 'rock' ),
    'section'     => 'general_headings',
    'priority'    => 14,
    'default'     => 'uppercase',
    'choices'     => array(
        'none'          => __( 'None', 'rock' ),
        'capitalize'    => __( 'Capitalize', 'rock' ),
        'uppercase'     => __( 'Uppercase', 'rock' ),
        'lowercase'     => __( 'Lowercase', 'rock' ),
    ),
    'output' => array(
        array(
            'element'  => 'h1',
            'property' => 'text-transform',
        ),
    ),
) );


/**
 * Fields: 1. General > 1d. Headings > H2
 */

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'custom',
    'settings'    => 'general_headings_h2',
    'section'     => 'general_headings',
    'default'     => '<hr /><h2>H2</h2>',
    'priority'    => 20,
) );


Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'general_headings_h2_font_size',
    'label'       => __( 'H2: Font Size', 'rock' ),
    'section'     => 'general_headings',
    'priority'    => 21,
    'default'     => 30,
    'choices'     => array(
        'min'  => 10,
        'max'  => 72,
        'step' => 1,
    ),
    'output' => array(
        array(
            'element'  => 'h2',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'general_headings_h2_line_height',
    'label'       => __( 'H2: Line Height', 'rock' ),
    'section'     => 'general_headings',
    'priority'    => 22,
    'default'     => 1.1,
    'choices'     => array(
        'min'  => 0.5,
        'max'  => 2.5,
        'step' => 0.1,
    ),
    'output' => array(
        array(
            'element'   => 'h2',
            'property'  => 'line-height',
            'units'    => 'em'
        ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'general_headings_h2_letter_spacing',
    'label'       => __( 'H2: Letter Spacing', 'rock' ),
    'section'     => 'general_headings',
    'priority'    => 23,
    'default'     => 0,
    'choices'     => array(
        'min'  => -5,
        'max'  => 20,
        'step' => 1,
    ),
    'output' => array(
        array(
            'element'   => 'h2',
            'property'  => 'letter-spacing',
            'units'     => 'px'
        ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'select',
    'settings'    => 'general_headings_h2_text_transform',
    'label'       => __( 'H2: Text Transform', 'rock' ),
    'section'     => 'general_headings',
    'priority'    => 24,
    'default'     => 'uppercase',
    'choices'     => array(
        'none'          => __( 'None', 'rock' ),
        'capitalize'    => __( 'Capitalize', 'rock' ),
        'uppercase'     => __( 'Uppercase', 'rock' ),
        'lowercase'     => __( 'Lowercase', 'rock' ),
    ),
    'output' => array(
        array(
            'element'  => 'h2',
            'property' => 'text-transform',
        ),
    ),
) );

/**
 * Fields: 1. General > 1d. Headings > H2
 */

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'custom',
    'settings'    => 'general_headings_32',
    'section'     => 'general_headings',
    'default'     => '<hr /><h2>H3</h2>',
    'priority'    => 30,
) );


Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'general_headings_h3_font_size',
    'label'       => __( 'H3: Font Size', 'rock' ),
    'section'     => 'general_headings',
    'priority'    => 31,
    'default'     => 24,
    'choices'     => array(
        'min'  => 10,
        'max'  => 72,
        'step' => 1,
    ),
    'output' => array(
        array(
            'element'  => 'h3',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'general_headings_h3_line_height',
    'label'       => __( 'H3: Line Height', 'rock' ),
    'section'     => 'general_headings',
    'priority'    => 32,
    'default'     => 1.1,
    'choices'     => array(
        'min'  => 0.5,
        'max'  => 2.5,
        'step' => 0.1,
    ),
    'output' => array(
        array(
            'element'   => 'h3',
            'property'  => 'line-height',
            'units'    => 'em'
        ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'general_headings_h3_letter_spacing',
    'label'       => __( 'H3: Letter Spacing', 'rock' ),
    'section'     => 'general_headings',
    'priority'    => 33,
    'default'     => 0,
    'choices'     => array(
        'min'  => -5,
        'max'  => 20,
        'step' => 1,
    ),
    'output' => array(
        array(
            'element'   => 'h3',
            'property'  => 'letter-spacing',
            'units'     => 'px'
        ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'select',
    'settings'    => 'general_headings_h3_text_transform',
    'label'       => __( 'H3: Text Transform', 'rock' ),
    'section'     => 'general_headings',
    'priority'    => 34,
    'default'     => 'uppercase',
    'choices'     => array(
        'none'          => __( 'None', 'rock' ),
        'capitalize'    => __( 'Capitalize', 'rock' ),
        'uppercase'     => __( 'Uppercase', 'rock' ),
        'lowercase'     => __( 'Lowercase', 'rock' ),
    ),
    'output' => array(
        array(
            'element'  => 'h3',
            'property' => 'text-transform',
        ),
    ),
) );

/**
 * Fields: 1. General > 1e. Text
 */


Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'general_text_font_size',
    'label'       => __( 'Text: Font Size', 'rock' ),
    'section'     => 'general_text',
    'priority'    => 11,
    'default'     => 14,
    'choices'     => array(
        'min'  => 10,
        'max'  => 72,
        'step' => 1,
    ),
    'output' => array(
        array(
            'element'  => 'body',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'general_text_line_height',
    'label'       => __( 'Text: Line Height', 'rock' ),
    'section'     => 'general_text',
    'priority'    => 12,
    'default'     => 1.1,
    'choices'     => array(
        'min'  => 0.5,
        'max'  => 2.5,
        'step' => 0.1,
    ),
    'output' => array(
        array(
            'element'   => 'body',
            'property'  => 'line-height',
            'units'    => 'em'
        ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'general_text_letter_spacing',
    'label'       => __( 'Text: Letter Spacing', 'rock' ),
    'section'     => 'general_text',
    'priority'    => 13,
    'default'     => 0,
    'choices'     => array(
        'min'  => -5,
        'max'  => 20,
        'step' => 1,
    ),
    'output' => array(
        array(
            'element'   => 'body',
            'property'  => 'letter-spacing',
            'units'     => 'px'
        ),
    ),
) );


/**
 * Fields: 2. Header > 1a. Header Layout
*/

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'select',
    'settings'    => 'header_layout',
    'label'       => __( 'Layout', 'rock' ),
    'section'     => 'header_layout',
    'priority'    => 11,
    'default'     => 'nav-right',
    'choices'     => array(
        'nav-none'                  => __( 'None', 'rock' ),
        'nav-bottom'                => __( 'Nav Bottom', 'rock' ),
        'nav-right'                 => __( 'Nav Right', 'rock' ),
        'nav-left'                  => __( 'Nav Left', 'rock' ),
        'nav-centered'              => __( 'Nav Centered', 'rock' ),
        'nav-centered-inline-logo'  => __( 'Nav Centered + Inline Logo', 'rock' ),
        'nav-vertical-left'         => __( 'Nav Vertical Left', 'rock'),
        'nav-vertical-right'        => __( 'Nav Vertical Right', 'rock' ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'header_padding',
    'label'       => __( 'Padding', 'rock' ),
    'section'     => 'header_layout',
    'priority'    => 12,
    'default'     => 30,
    'choices'     => array(
        'min'  => 0,
        'max'  => 100,
        'step' => 1,
    ),
    'required'  => array(
        array(
                'setting'  => 'header_layout',
                'operator' => '!=',
                'value'    => 'nav-none',
            ),
       
        array(
                'setting'  => 'header_layout',
                'operator' => '!=',
                'value'    => 'nav-vertical-left',
            ),
       
        array(
                'setting'  => 'header_layout',
                'operator' => '!=',
                'value'    => 'nav-vertical-right',
            ),
       ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'select',
    'settings'    => 'header_fixed',
    'label'       => __( 'Fixed Header', 'rock' ),
    'description' => __( 'Show a fixed header as the page is scrolled.', 'rock'),
    'section'     => 'header_layout',
    'priority'    => 13,
    'default'     => 'header-fixed-fade-in',
    'choices'     => array(
        'header-fixed-disabled'     => __( 'Disabled', 'rock' ),
        'header-fixed-fade-in'      => __( 'Fade In', 'rock' ),
        'header-fixed-shrink'       => __( 'Shrink', 'rock' ),
        'header-fixed'              => __( 'Fixed', 'rock' ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'select',
    'settings'    => 'header_hide',
    'label'       => __( 'Hide Header Until Scroll', 'rock' ),
    'section'     => 'header_layout',
    'priority'    => 14,
    'default'     => 'header-hide-disabled',
    'choices'     => array(
        'header-hide-disabled'     => __( 'Disabled', 'rock' ),
        'header-hide-enabled'  => __( 'Enabled', 'rock' ),
    ),
    'required'  => array(
        array(
                'setting'  => 'header_fixed',
                'operator' => '==',
                'value'    => 'header-fixed-disabled',
            ),
        ),

) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'header_scroll_distance',
    'label'       => __( 'Scroll Distance', 'rock' ),
    'section'     => 'header_layout',
    'priority'    => 15,
    'default'     => 200,
    'choices'     => array(
        'min'  => 50,
        'max'  => 1000,
        'step' => 1,
    ),
    'required'  => array(
        array(
                'setting'  => 'header_fixed',
                'operator' => '==',
                'value'    => 'header-fixed-disabled',
            ),
        ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'header_vertical_nav_width',
    'label'       => __( 'Vertical Nav Width', 'rock' ),
    'section'     => 'header_layout',
    'priority'    => 14,
    'default'     => 230,
    'choices'     => array(
        'min'  => 200,
        'max'  => 400,
        'step' => 15,
    ),
    'required'  => array(
        array(
                'setting'  => 'header_layout',
                'operator' => '!=',
                'value'    => 'nav-none',
            ),
       
        array(
                'setting'  => 'header_layout',
                'operator' => '!=',
                'value'    => 'nav-bottom',
            ),
       
        array(
                'setting'  => 'header_layout',
                'operator' => '!=',
                'value'    => 'nav-right',
            ),

         array(
                'setting'  => 'header_layout',
                'operator' => '!=',
                'value'    => 'nav-left',
            ),
          array(
                'setting'  => 'header_layout',
                'operator' => '!=',
                'value'    => 'nav-centered',
            ),
           array(
                'setting'  => 'header_layout',
                'operator' => '!=',
                'value'    => 'nav-centered-inline-logo',
            ),
       ),
) );




/**
 * Fields: 2. Header > 2c. Header Logo
*/


Kirki::add_field( 'rock', array(
    'type'        => 'select',
    'settings'    => 'header_logo_type',
    'label'       => __( 'Logo Type', 'rock' ),
    'section'     => 'header_logo',
    'priority'    => 10,
    'default'     => 'text',
    'choices'     => array(
        'text'      => __( 'Text', 'rock' ),
        'image'     => __( 'Image', 'rock' ),
    ),
) );



Kirki::add_field( 'rock', array(
    'type'        => 'text',
    'settings'    => 'blogname',
    'label'       => __( 'Site Title', 'rock' ),
    'section'     => 'header_logo',
    'default'     => '',
    'priority'    => 11,
    'required'  => array(
        array(
                'setting'  => 'header_logo_type',
                'operator' => '==',
                'value'    => 'text',
            ),
        ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'slider',
    'settings'    => 'logo_image_height',
    'label'       => __( 'Logo Height', 'rock' ),
    'description' => __( 'Height of your logo in header.', 'rock' ),
    'section'     => 'header_logo',
    'priority'    => 19,
    'default'     => 40,
    'choices'     => array(
        'min'  => 30,
        'max'  => 200,
        'step' => 1,
    ),
    'required'  => array(
        array(
                'setting'  => 'header_logo_type',
                'operator' => '==',
                'value'    => 'image',
            ),
        ),
) );


Kirki::add_field( 'rock', array(
    'type'        => 'image',
    'settings'    => 'logo_image',
    'label'       => __( 'Logo Image (Regular)', 'rock' ),
    'description' => __( 'Upload a logo image to be used in the place of your site title.', 'rock' ),
    'section'     => 'header_logo',
    'default'     => '',
    'priority'    => 20,
    'required'  => array(
        array(
                'setting'  => 'header_logo_type',
                'operator' => '==',
                'value'    => 'image',
            ),
        ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'image',
    'settings'    => 'logo_image_retina',
    'label'       => __( 'Logo Image (Retina)', 'rock' ),
    'description' => __( 'Upload a logo image 2x the size of your regular sized logo. This will be used for Retina displays.', 'rock' ),
    'section'     => 'header_logo',
    'default'     => '',
    'priority'    => 21,
    'required'  => array(
        array(
                'setting'  => 'header_logo_type',
                'operator' => '==',
                'value'    => 'image',
            ),
        ),
) );




/**
 * Fields: 2. Header > 2d. Nav Layout
*/

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'nav_item_spacing',
    'label'       => __( 'Nav Item Spacing', 'rock' ),
    'section'     => 'header_nav_layout',
    'priority'    => 10,
    'default'     => 15,
    'choices'     => array(
        'min'  => 5,
        'max'  => 30,
        'step' => 1,
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'select',
    'settings'    => 'nav_search_icon',
    'label'       => __( 'Nav Search Icon', 'rock' ),
    'section'     => 'header_nav_layout',
    'priority'    => 20,
    'default'     => 'enabled',
    'choices'     => array(
        'enabled'      => __( 'Enabled', 'rock' ),
        'disabled'     => __( 'Disabled', 'rock' ),
    ),
) );


/**
 * Fields: 2. Header > 2e. Top Bar Layout
*/

Kirki::add_field( 'rock', array(
    'type'        => 'select',
    'settings'    => 'top_bar_layout',
    'label'       => __( 'Top Bar Layout', 'rock' ),
    'section'     => 'header_top_bar_layout',
    'priority'    => 10,
    'default'     => 'none',
    'choices'     => array(
        'none'          => __( 'None', 'rock' ),
        'column-1'      => __( '1 Column', 'rock' ),
        'column-2'    => __( '2 Columns', 'rock' ),
    ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'custom',
    'settings'    => 'top_bar_layout_column_1_hr',
    'section'     => 'header_top_bar_layout',
    'default'     => '<hr />',
    'priority'    => 19,
    'required'  => array(
        array(
                'setting'  => 'top_bar_layout',
                'operator' => '!=',
                'value'    => 'none',
            ),
        ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'select',
    'settings'    => 'top_bar_layout_column_1',
    'label'       => __( 'Column 1 Layout', 'rock' ),
    'description' => __( 'Type of items in top menu. Social icons are set from in Customizer > Social. Menus can be created from Customizer > Menus.', 'rock' ),
    'section'     => 'header_top_bar_layout',
    'priority'    => 20,
    'default'     => 'text',
    'choices'     => array(
        'text'          => __( 'Text', 'rock' ),
        'text-social'   => __( 'Text and Social Icons', 'rock' ),
        'menu'          => __( 'Menu', 'rock' ),
        'menu-social'   => __( 'Menu and Social Icons', 'rock' ),
        'social'        => __( 'Social Icons', 'rock' ),
    ),
    'required'  => array(
        array(
                'setting'  => 'top_bar_layout',
                'operator' => '!=',
                'value'    => 'none',
            ),
        ),

) );

Kirki::add_field( 'rock', array(
    'type'        => 'textarea',
    'settings'    => 'top_bar_column_1_text',
    'label'       => __( 'Column 1 Text', 'rock' ),
    'section'     => 'header_top_bar_layout',
    'priority'    => 21,
    'default'     => __( '', 'rock' ),
    'required'  => array(
        array(
                'setting'  => 'top_bar_layout',
                'operator' => '!=',
                'value'    => 'none',
            ),
        array(
                'setting'  => 'top_bar_layout_column_1',
                'operator' => '!=',
                'value'    => 'menu',
            ),

        array(
                'setting'  => 'top_bar_layout_column_1',
                'operator' => '!=',
                'value'    => 'menu-social',
            ),
        array(
                'setting'  => 'top_bar_layout_column_1',
                'operator' => '!=',
                'value'    => 'social',
            ),
        ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'custom',
    'settings'    => 'top_bar_layout_column_2_hr',
    'section'     => 'header_top_bar_layout',
    'default'     => '<hr />',
    'priority'    => 29,
    'required'  => array(
        array(
                'setting'  => 'top_bar_layout',
                'operator' => '==',
                'value'    => 'column-2',
            ),
        ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'select',
    'settings'    => 'top_bar_layout_column_2',
    'label'       => __( 'Column 2 Layout', 'rock' ),
    'description' => __( 'Type of items in top menu. Social icons are set from in Customizer > Social. Menus can be created from Customizer > Menus.', 'rock' ),
    'section'     => 'header_top_bar_layout',
    'priority'    => 30,
    'default'     => 'text',
    'choices'     => array(
        'text'          => __( 'Text', 'rock' ),
        'text-social'   => __( 'Text and Social Icons', 'rock' ),
        'menu'          => __( 'Menu', 'rock' ),
        'menu-social'   => __( 'Menu and Social Icons', 'rock' ),
        'social'        => __( 'Social Icons', 'rock' ),
    ),
    'required'  => array(
        array(
                'setting'  => 'top_bar_layout',
                'operator' => '==',
                'value'    => 'column-2',
            ),
        ),

) );


Kirki::add_field( 'rock', array(
    'type'        => 'textarea',
    'settings'    => 'top_bar_column_2_text',
    'label'       => __( 'Column 2 Text', 'rock' ),
    'section'     => 'header_top_bar_layout',
    'priority'    => 31,
    'default'     => __( '', 'rock' ),
    'required'  => array(
                array(
                'setting'  => 'top_bar_layout',
                'operator' => '==',
                'value'    => 'column-2',
            ),
        array(
                'setting'  => 'top_bar_layout_column_2',
                'operator' => '!=',
                'value'    => 'menu',
            ),

        array(
                'setting'  => 'top_bar_layout_column_2',
                'operator' => '!=',
                'value'    => 'menu-social',
            ),
        array(
                'setting'  => 'top_bar_layout_column_2',
                'operator' => '!=',
                'value'    => 'social',
            ),
        ),
) );





/*

Kirki::add_panel( 'header', array(
    'priority'    => 20,
    'title'       => __( 'Header', 'textdomain' ),
    'description' => __( 'Settings for site header.', 'textdomain' ),
) );

    Kirki::add_section( 'header_layout', array(
        'title'          => __( 'Header Layout' ),
        'description'    => __( 'The layout structure of your site header.' ),
        'panel'          => 'header', // Not typically needed.
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ) );



Kirki::add_section( 'header_layout', array(
    'title'          => __( 'Header Layout' ),
    'description'    => __( 'The layout structure of your site header.' ),
    'panel'          => 'header', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'header_colors', array(
    'title'          => __( 'Header Colors' ),
    'description'    => __( 'The colors of your site header.' ),
    'panel'          => 'header', // Not typically needed.
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'header_spacing', array(
    'title'          => __( 'Header Spacing' ),
    'description'    => __( 'The spacing of your site header.' ),
    'panel'          => 'header', // Not typically needed.
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


*/
/**
 * Panels and Sections: Social Media
*/

/*

Kirki::add_section( 'social_media', array(
    'title'          => __( 'Social Media' ),
    'description'    => __( 'Links to social media accounts.' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

*/


/**
 * Fields: Title &amp; Logo






Kirki::add_field( 'rock', array(
    'type'        => 'text',
    'settings'    => 'blogdescription',
    'label'       => __( 'Tagline', 'rock' ),
    'description' => __( 'The Tagline is used on some templates where applicable.', 'rock' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'priority'    => 20,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'image',
    'settings'    => 'logo_image',
    'label'       => __( 'Logo Image', 'rock' ),
    'description' => __( 'Upload a logo image to be used in the place of your site title.', 'rock' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'priority'    => 30,
) );

/**
 * Fields: Header




Kirki::add_field( 'rock', array(
    'type'        => 'radio',
    'settings'    => 'header_container',
    'label'       => __( 'Header Container', 'rock' ),
    'description' => __( 'Responsive fixed width or full-width container.', 'rock' ),
    'section'     => 'header_layout',
    'default'     => 'container',
    'priority'    => 9,
    'choices'     => array(
        'container'   		=> __( 'Responsive Fixed-width Container', 'rock' ),
        'container-fluid' 	=> __( 'Full-width Container', 'rock' ),
        
    ),
) );


Kirki::add_field( 'rock', array(
    'type'        => 'custom',
    'settings'    => 'logo_title',
    'default'      => '<h3 style="text-transform: uppercase;">Logo</h3>',
    'section'     => 'header_layout',
    'priority'    => 10,
) );


Kirki::add_field( 'rock_theme_mod', array( 
    'type'          => 'radio',
    'settings'      => 'logo_align',
    'label'         => __('Logo: Alignment', 'rock' ),
    'section'       => 'header_layout',
    'default'       => 'left',
    'priority'      => 11,
    'choices'       => array(
        'left'      => __( 'Left Align', 'rock' ),
        'center'    => __( 'Center Align ', 'rock' ),
        'right'     => __( 'Right Align', 'rock' ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'logo-height',
    'label'       => __( 'Logo Height', 'rock' ),
    'section'     => 'header_spacing',
    'default'     => 50,
    'priority'    => 11,
    'choices'     => array(
        'min'  => 20,
        'max'  => 200,
        'step' => 1,
    ),
    'output' => array(
        array(
            'element'  => '.header-middle .navbar-nav li a',
            'property' => 'line-height',
            'units'    => 'px',
            'suffix'    => '!important',
        ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'slider',
    'settings'    => 'header-row-middle-padding',
    'label'       => __( 'Header Row Middle Padding', 'rock' ),
    'section'     => 'header_spacing',
    'default'     => 15,
    'priority'    => 12,
    'choices'     => array(
        'min'  => 0,
        'max'  => 100,
        'step' => 5,
    ),
    'output' => array(
        array(
            'element'  => '.header-middle',
            'property' => 'padding-top',
            'units'    => 'px',
            'suffix'    => '!important',
        ),

        array(
            'element'  => '.header-middle',
            'property' => 'padding-bottom',
            'units'    => 'px',
            'suffix'    => '!important',
        ),
    ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'custom',
    'settings'    => 'primary_nav_title',
    'default'      => '<h3 style="text-transform: uppercase;">Primary Navigation</h3>',
    'section'     => 'header_layout',
    'priority'    => 12,
) );


Kirki::add_config( 'rock_theme_mod', array(
    'option_type'   => 'theme_mod',
    'capability'    => 'edit_theme_options',
) );


Kirki::add_field( 'rock_theme_mod', array( 
    'type'          => 'radio',
    'settings'      => 'nav_primary_location',
    'label'         => __('Primary Nav: Location', 'rock' ),
    'section'       => 'header_layout',
    'default'       => 'middle',
    'priority'      => 13,
    'choices'       => array(
        'top'      => __( 'Top Row', 'rock' ),
        'middle'    => __( 'Middle Row', 'rock' ),
        'bottom'     => __( 'Bottom Row', 'rock' ),
    ),
) );


Kirki::add_field( 'rock_theme_mod', array( 
    'type'          => 'radio',
    'settings'      => 'nav_primary_align',
    'label'         => __('Primary Nav: Alignment', 'rock' ),
    'section'       => 'header_layout',
    'default'       => 'right',
    'priority'      => 14,
    'choices'       => array(
        'left'      => __( 'Left Align', 'rock' ),
        'center'    => __( 'Center Align', 'rock' ),
        'right'     => __( 'Right Align', 'rock' ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array(
    'type'        => 'switch',
    'settings'    => 'nav_social_switch',
    'label'       => __( 'Social Navigation: On / Off', 'rock' ),
    'section'     => 'header_layout',
    'default'     => '0',
    'priority'    => 14,
    'choices'     => array(
        'on'  => __( 'On', 'kirki' ),
        'off' => __( 'Off', 'kirki' ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array( 
    'type'          => 'radio',
    'settings'      => 'nav_social_location',
    'label'         => __('Social Navigation: Location', 'rock' ),
    'section'       => 'header_layout',
    'default'       => 'middle',
    'priority'      => 15,
    'choices'       => array(
        'top'       => __( 'Top Row', 'rock' ),
        'middle'    => __( 'Middle Row', 'rock' ),
        'bottom'    => __( 'Bottom Row', 'rock' ),
    ),
    'required'  => array(
      array(
        'setting'  => 'nav_social_switch',
        'operator' => '==',
        'value'    => '1',
      ),
    ),
) );

Kirki::add_field( 'rock_theme_mod', array( 
    'type'          => 'radio',
    'settings'      => 'nav_social_align',
    'label'         => __('Social Navigation: Alignment', 'rock' ),
    'section'       => 'header_layout',
    'default'       => 'right',
    'priority'      => 16,
    'choices'       => array(
        'left'      => __( 'Left Align', 'rock' ),
        'center'    => __( 'Center Align', 'rock' ),
        'right'     => __( 'Right Align', 'rock' ),
    ),
    'required'  => array(
      array(
        'setting'  => 'nav_social_switch',
        'operator' => '==',
        'value'    => '1',
      ),
    ),
) );

/*

Kirki::add_field( 'rock', array(
    'type'        => 'switch',
    'settings'    => 'announcement_nav_switch',
    'label'       => __( 'Announcement: On / Off', 'rock' ),
    'description' => __( 'This turns on or off the ability to have a text announcement on the top row of the header.', 'rock' ),
    'section'     => 'header_layout',
    'default'     => '1',
    'priority'    => 14,
    'choices'     => array(
        'on'  => __( 'On', 'kirki' ),
        'off' => __( 'Off', 'kirki' ),
    ),
) );



Kirki::add_field( 'rock', array(
    'type'        => 'editor',
    'settings'    => 'announcement_nav_editor',
    'label'       => __( 'Announcement Text', 'kirki-demo' ),
    'section'     => 'header_layout',
    'default'     => '',
    'priority'    => 15,
) );



Kirki::add_field( 'rock', array(
    'type'        => 'radio',
    'settings'    => 'header_layout',
    'label'       => __( 'Header Layout', 'rock' ),
    'description' => __( 'Basic layouts for site header.', 'rock' ),
    'section'     => 'header_layout',
    'default'     => 'one-row-align-left',
    'priority'    => 12,
    'choices'     => array(
        'one-row-align-left'   		=> __( 'One Row / Align Left', 'rock' ),
        'one-row-align-left-right' 	=> __( 'One Row / Align Left and Right', 'rock' ),
        'one-row-align-right'  		=> __( 'One Row / Align Right', 'rock' ),
        'one-row-align-center'		=> __( 'One Row / Align Center', 'rock' ),
        'one-row-align-center-left-right'	=> __( 'One Row / Align Center, Left, and Right', 'rock' ),
        'two-row-align-left'		=> __( 'Two Row / Align Left', 'rock' ),
        'two-row-align-left-right'  => __( 'Two Row / Align Left and Right', 'rock' ),
        'two-row-align-center'		=> __( 'Two Row / Align Center', 'rock' ),
    ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'radio',
    'settings'    => 'header_position',
    'label'       => __( 'Header Position', 'rock' ),
    'description' => __( 'Either static or fixed positioning.', 'rock' ),
    'section'     => 'header_layout',
    'default'     => 'static-top',
    'priority'    => 20,
    'choices'     => array(
        'static-top'   	=> __( 'Static', 'rock' ),
        'fixed-top' 		=> __( 'Fixed', 'rock' ),
        'absolute-top'  => __( 'Absolute', 'rock' ),
    ),
) );



Kirki::add_field( 'rock', array(
    'type'        => 'radio',
    'settings'    => 'header_color',
    'label'       => __( 'Header Color', 'rock' ),
    'description' => __( 'Default, dark, or custom colors.', 'rock' ),
    'section'     => 'header_colors',
    'default'     => '255,255,255',
    'priority'    => 10,
    'choices'     => array(
        '255,255,255'     => __( 'White', 'rock' ),
        '0,0,0' 		  => __( 'Black', 'rock' ),
        'transparent'       => __( 'Transparent', 'rock'),
    ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'radio',
    'settings'    => 'header_link_color',
    'label'       => __( 'Header Link Color', 'rock' ),
    'description' => __( 'White or Black.', 'rock' ),
    'section'     => 'header_colors',
    'default'     => 'link-white',
    'priority'    => 20,
    'choices'     => array(
        'link-white'     => __( 'White', 'rock' ),
        'link-black'     => __( 'Black', 'rock' ),
    ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'slider',
    'settings'    => 'header_opacity',
    'label'       => __( 'Header Opacity', 'rock' ),
    'description' => __( 'The level of transparency for the background color. 100 is fully opaque. 0 is fully transparent.', 'rock' ),
    'section'     => 'header_colors',
    'default'     => 1,
    'priority'    => 30,
    'choices'     => array(
        'min'    => 0,
        'max'    => 1,
        'step'   => 0.05,
    ),
    'required'  => array(
      array(
        'setting'  => 'header_color',
        'operator' => '!=',
        'value'    => 'transparent',
      ),
    ),
) );


Kirki::add_field( 'rock', array(
    'type'        => 'slider',
    'settings'    => 'header-padding',
    'label'       => __( 'Header Padding', 'rock' ),
    'section'     => 'header_spacing',
    'default'     => 0,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 0,
        'max'  => 100,
        'step' => 5,
    ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'slider',
    'settings'    => 'logo-height',
    'label'       => __( 'Logo Height', 'rock' ),
    'section'     => 'header_spacing',
    'default'     => 30,
    'priority'    => 20,
    'choices'     => array(
        'min'  => 20,
        'max'  => 100,
        'step' => 1,
    ),
) );

*/

/**
 * Fields: Social Media



Kirki::add_field( 'rock', array(
    'type'        => 'social_media',
    'settings'    => 'test',
    'label'       => __( 'Social List', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 10,
) );



Kirki::add_field( 'wpseo_social', array(
    'type'        => 'text',
    'settings'    => 'facebook_site',
    'label'       => __( 'Facebook URL', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 20,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'facebook_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 21,
) );

Kirki::add_field( 'wpseo_social', array(
    'type'        => 'text',
    'settings'    => 'twitter_site',
    'label'       => __( 'Twitter Username', 'rock' ),
    'description' => __( 'The username (without @) for Twitter.', 'wpseo_social' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 30,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'twitter_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 31,
) );

Kirki::add_field( 'wpseo_social', array(
    'type'        => 'text',
    'settings'    => 'instagram_url',
    'label'       => __( 'Instagram URL', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 40,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'instagram_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 41,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'text',
    'settings'    => 'snapchat_username',
    'label'       => __( 'Snapchat Username', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 50,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'snapchat_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 51,
) );

Kirki::add_field( 'wpseo_social', array(
    'type'        => 'text',
    'settings'    => 'linkedin_url',
    'label'       => __( 'LinkedIn URL', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 60,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'linkedin_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 61,
) );

Kirki::add_field( 'wpseo_social', array(
    'type'        => 'text',
    'settings'    => 'pinterest_url',
    'label'       => __( 'Pinterest URL', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 70,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'pinterest_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 71,
) );

Kirki::add_field( 'wpseo_social', array(
    'type'        => 'text',
    'settings'    => 'google_plus_url',
    'label'       => __( 'Google+ URL', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 80,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'google_plus_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 81,
) );

Kirki::add_field( 'wpseo_social', array(
    'type'        => 'text',
    'settings'    => 'youtube_url',
    'label'       => __( 'YouTube URL', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 90,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'youtube_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 91,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'text',
    'settings'    => 'vimeo_url',
    'label'       => __( 'Vimeo URL', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 100,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'vimeo_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 101,
) );

/*
Kirki::add_field( 'rock', array(
    'type'        => 'custom',
    'settings'    => 'socia_media_menu',
    'label'       => __( 'Social Media Menu', 'rock' ),
    'description' => __( 'Display social links on site social media menu.', 'rock' ),
    'section'     => 'social_media',
    'priority'    => 100,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'facebook_menu',
    'label'       => __( 'Facebook', 'rock' ),
    'section'     => 'social_media',
    'default'     => '1',
    'priority'    => 110,
) );
*/

