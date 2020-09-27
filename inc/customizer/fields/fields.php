<?php 
/**
 * @Packge     : Leopet
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Epsilon_Customizer::add_field(
    'leopet_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'leopet' ),
        'description' => esc_html__( 'Select the theme color.', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_general_section',
        'default'     => '#53c9bb',
    )
);

 // Secondary Theme color field
Epsilon_Customizer::add_field(
    'leopet_secondary_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Secondary Theme Color', 'leopet' ),
        'description' => esc_html__( 'Select the secondary theme color.', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_general_section',
        'default'     => '#ff5b5b',
    )
);

// Header phone number
Epsilon_Customizer::add_field(
    'leopet_phone_number',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Phone Number', 'leopet' ),
        'section'     => 'leopet_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( '+02 213 - 256 (365)', 'leopet' ),
    )
);

// Header book button label
Epsilon_Customizer::add_field(
    'leopet_book_btn_label',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Button Label', 'leopet' ),
        'section'     => 'leopet_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'Become a Volunteer', 'leopet' ),
    )
);
// Header book button url
Epsilon_Customizer::add_field(
    'leopet_book_btn_url',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Button URL', 'leopet' ),
        'section'     => 'leopet_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '#',
    )
);
// Header book button bg color
Epsilon_Customizer::add_field(
    'leopet_book_btn_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Book Button BG Color', 'leopet' ),
        'description' => esc_html__( 'Select the background color.', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_header_section',
        'default'     => '#ff5b5b',
    )
);
// Header book button hover color
Epsilon_Customizer::add_field(
    'leopet_book_btn_hvr_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Book Button Hover Color', 'leopet' ),
        'description' => esc_html__( 'Select the hover color.', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_header_section',
        'default'     => '#53c9bb',
    )
);


// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'leopet' ),
        'section'     => 'leopet_header_section',

    )
);
 
// Navbar background color field
Epsilon_Customizer::add_field(
    'leopet_navbar_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Navbar BG Color', 'leopet' ),
        'description' => esc_html__( 'Navbar background color.', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_header_section',
        'default'     => '#082b49',
    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'leopet_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'leopet' ),
        'description' => esc_html__( 'Select the header background color.', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_header_section',
        'default'     => '#53c9bb',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'leopet_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'leopet_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_header_section',
        'default'     => '#53c9bb',
    )
);

// Dropdown menu color field
Epsilon_Customizer::add_field(
    'leopet_dropdown_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_header_section',
        'default'     => '#53c9bb',
    )
);

// Dropdown menu hover bg color field
Epsilon_Customizer::add_field(
    'leopet_dropdown_menu_hover_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover Bg color', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_header_section',
        'default'     => '#ff5b5b',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'leopet_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'leopet' ),
        'description' => esc_html__( 'Set post excerpt length.', 'leopet' ),
        'section'     => 'leopet_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'leopet_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'leopet' ),
        'section'     => 'leopet_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'leopet_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'leopet' ),
        'section'     => 'leopet_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'leopet_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'leopet' ),
        'section'     => 'leopet_blog_section',
        'default'     => true
    )
);

 
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'leopet_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'leopet' ),
        'section'           => 'leopet_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'leopet_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'leopet' ),
        'section'           => 'leopet_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'leopet_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'leopet_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'leopet_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_fof_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'leopet' ),
        'section'     => 'leopet_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'leopet_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'leopet' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'leopet' ),
        'section'     => 'leopet_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'leopet_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'leopet' ),
        'section'     => 'leopet_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'leopet' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'leopet_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'leopet' ),
        'section'     => 'leopet_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'leopet_footer_widget_heading_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Heading Color', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'leopet_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'leopet_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_footer_section',
        'default'     => '#e5e5e5',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'leopet_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'leopet' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'leopet_footer_section',
        'default'     => '#53c9bb',
    )
);

