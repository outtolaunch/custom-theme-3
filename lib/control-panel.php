<?php

/*---------- Adds theme sections and settings to customizer --------------*/
function rhb_theme_customizer($wp_customize ) {

    //--------------------------------------------------------------------------------
    // add new section for logo
    $wp_customize->add_section('theme_logo_section', array(
        'title'       => __('RHB Logo', 'custom-logo'),
        'priority'    => 30,
        'description' => 'Upload a custom logo',
    ));

    // site logo
    $wp_customize->add_setting('theme_logo');
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'theme_logo', array(
        'label'     => __( 'Logo', 'custom-logo' ),
        'section'   => 'theme_logo_section',
        'settings'  => 'theme_logo',
    )));

    //--------------------------------------------------------------------------------
    // add RHB theme section and settings
    $wp_customize->add_section('rhb_phone_number_section' , array(
        'title'       => __('RHB Phone Number', 'rhb-phone-number-section'),
        'priority'    => 30,
        'description' => 'The main site phone number',
    ) );

    // site phone number
    $wp_customize->add_setting('rhb_phone_number', array(
        'default'   => '(000) 000-0000',
    ));
    $wp_customize->add_control('rhb_phone_number', array(
        'label'     => __( 'Phone Number', 'rhb_theme_settings' ),
        'section'   => 'rhb_phone_number_section',
        'settings'  => 'rhb_phone_number',
    ));

    //--------------------------------------------------------------------------------

    // body background color
    $wp_customize->add_setting('body_background_color', array(
        'default'   => '#FFFFFF',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'body_background_color', array(
        'label'     => __( 'Body Background Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'body_background_color',
    )));

    // adds a background tile
    $wp_customize->add_setting('body_background_tile');
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'body_background_tile', array(
        'label'     => __( 'Background Tile', 'backround-tile' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'body_background_tile',
    )));


    // add RHB theme section and settings
    $wp_customize->add_section('rhb_theme_section' , array(
        'title'       => __('RHB Colors', 'rhb-theme-settings'),
        'priority'    => 30,
        'description' => 'Various theme settings for the RHB custom theme',
    ) );

    // accent / link color
    $wp_customize->add_setting('rhb_link_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_link_color', array(
        'label'     => __( 'Main link color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_link_color',
    )));

    // accent / link color
    $wp_customize->add_setting('rhb_link_hover_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_link_hover_color', array(
        'label'     => __( 'Main link hover color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_link_hover_color',
    )));

    // header background color
    $wp_customize->add_setting('rhb_header_background_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_header_background_color', array(
        'label'     => __( 'Header Background Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_header_background_color',
    )));

    // is header boxed
    $wp_customize->add_setting('rhb_header_boxed');
    $wp_customize->add_control('rhb_header_boxed', array(
        'type'      => 'checkbox',
        'label'     => 'Boxed header',
        'section'   => 'rhb_theme_section',
        )
    );

    // header top border color
    $wp_customize->add_setting('rhb_header_top_border_color', array(
        'default'   => '#FFFFFF',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_header_top_border_color', array(
        'label'     => __( 'Header Top Border Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_header_top_border_color',
    )));

    // navbar background
    $wp_customize->add_setting('rhb_navbar_background_color', array(
        'default'   => '#F8F8F8',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_navbar_background_color', array(
        'label'     => __( 'Navbar Background Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_navbar_background_color',
    )));

    // navbar boxed
    $wp_customize->add_setting('rhb_navbar_boxed');
    $wp_customize->add_control('rhb_navbar_boxed', array(
        'type'      => 'checkbox',
        'label'     => 'Boxed navbar',
        'section'   => 'rhb_theme_section',
        )
    );

    // asks if the navbar has a border
    $wp_customize->add_setting('rhb_navbar_has_border');
    $wp_customize->add_control('rhb_navbar_has_border', array(
        'type'      => 'checkbox',
        'label'     => 'Hide navbar border?',
        'section'   => 'rhb_theme_section',
        )
    );

    // navbar background border color
    $wp_customize->add_setting('rhb_navbar_border_color', array(
        'default'   => '#E7E7E7',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_navbar_border_color', array(
        'label'     => __( 'Navbar Border Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_navbar_border_color',
    )));

    // asks if the navbar has a border
    $wp_customize->add_setting('rhb_navbar_link_bold');
    $wp_customize->add_control('rhb_navbar_link_bold', array(
        'type'      => 'checkbox',
        'label'     => 'Bold Nav Links',
        'section'   => 'rhb_theme_section',
        )
    );

    // navbar link color
    $wp_customize->add_setting('rhb_navbar_link_color', array(
        'default'   => '#777777',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_navbar_link_color', array(
        'label'     => __( 'Navbar Link Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_navbar_link_color',
    )));

    // navbar link hover color
    $wp_customize->add_setting('rhb_navbar_link_hover_color', array(
        'default'   => '#333333',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_navbar_link_hover_color', array(
        'label'     => __( 'Navbar Link Hover Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_navbar_link_hover_color',
    )));

    // navbar link active color
    $wp_customize->add_setting('rhb_navbar_link_active_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_navbar_link_active_color', array(
        'label'     => __( 'Navbar Link Active Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_navbar_link_active_color',
    )));

    // navbar link active color
    $wp_customize->add_setting('rhb_navbar_link_active_background_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_navbar_link_active_background_color', array(
        'label'     => __( 'Navbar Link Active Background Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_navbar_link_active_background_color',
    )));

    // main body background color
    $wp_customize->add_setting('rhb_main_body_background_color', array(
        'default'   => '#FFFFFF',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_main_body_background_color', array(
        'label'     => __( 'Main Body Background Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_main_body_background_color',
    )));

    // footer background color
    $wp_customize->add_setting('rhb_footer_background_color', array(
        'default'   => '#E2E2E2',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_footer_background_color', array(
        'label'     => __( 'Footer Background Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_footer_background_color',
    )));

    // asks if the navbar has a border
    $wp_customize->add_setting('rhb_boxed_footer');
    $wp_customize->add_control('rhb_boxed_footer', array(
        'type'      => 'checkbox',
        'label'     => 'Boxed Footer',
        'section'   => 'rhb_theme_section',
        )
    );

    // footer top border color
    $wp_customize->add_setting('rhb_footer_top_border_color', array(
        'default'   => '#E2E2E2',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_footer_top_border_color', array(
        'label'     => __( 'Footer Top Border Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_footer_top_border_color',
    )));

    // footer heading color
    $wp_customize->add_setting('rhb_footer_heading_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_footer_heading_color', array(
        'label'     => __( 'Footer Heading Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_footer_heading_color',
    )));

    // footer heading underline color
    $wp_customize->add_setting('rhb_footer_heading_underline_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_footer_heading_underline_color', array(
        'label'     => __( 'Footer Heading Underline Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_footer_heading_underline_color',
    )));

    // footer link color
    $wp_customize->add_setting('rhb_footer_link_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_footer_link_color', array(
        'label'     => __( 'Footer Link Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_footer_link_color',
    )));

    // footer rollover color
    $wp_customize->add_setting('rhb_footer_link_hover_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_footer_link_hover_color', array(
        'label'     => __( 'Footer Link Hover Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_footer_link_hover_color',
    )));

    // footer bottom text and link color
    $wp_customize->add_setting('rhb_footer_bottom_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_footer_bottom_color', array(
        'label'     => __( 'Footer Bottom Text & Link Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_footer_bottom_color',
    )));

    // form main heading background color
    $wp_customize->add_setting('rhb_form_heading_background_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_form_heading_background_color', array(
        'label'     => __( 'Form Main Heading Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_form_heading_background_color',
    )));

    // form main background text color
    $wp_customize->add_setting('rhb_form_heading_background_text_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_form_heading_background_text_color', array(
        'label'     => __( 'Form Main Heading Text Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_form_heading_background_text_color',
    )));

    // form background color
    $wp_customize->add_setting('rhb_form_background_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_form_background_color', array(
        'label'     => __( 'Form Background Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_form_background_color',
    )));

    // form submit button color
    $wp_customize->add_setting('rhb_form_submit_button_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_form_submit_button_color', array(
        'label'     => __( 'Form Submit Button Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_form_submit_button_color',
    )));

    // form submit button text color
    $wp_customize->add_setting('rhb_form_submit_button_text_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_form_submit_button_text_color', array(
        'label'     => __( 'Form Submit Button Text Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_form_submit_button_text_color',
    )));

    // form field heading colors
    $wp_customize->add_setting('rhb_form_field_heading_color');
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'rhb_form_field_heading_color', array(
        'label'     => __( 'Form Field Heading Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_form_field_heading_color',
    )));

    //--------------------------------------------------------------------------------

    // add RHB theme section and settings
    $wp_customize->add_section('rhb_custom_css_section' , array(
        'title'       => __('RHB Custom CSS', 'rhb-custom-css-section'),
        'priority'    => 30,
        'description' => 'Custom Theme CSS',
    ) );

    // custom css
    $wp_customize->add_setting('rhb_custom_css');
    $wp_customize->add_control('rhb_custom_css', array(
        'label'     => __('Custom Theme CSS'),
        'type'      => 'textarea',
        'section'   => 'rhb_custom_css_section',
    ));

    //--------------------------------------------------------------------------------

    // add new section for header carosel
    $wp_customize->add_section('rhb_slider', array(
        'title'       => __('RHB Slider', 'rhb-header-carosel'),
        'priority'    => 30,
        'description' => 'Uplodad Images and add slider text',
    ));

    // is the carosel boxed
    $wp_customize->add_setting('rhb_slider_boxed');
    $wp_customize->add_control('rhb_slider_boxed', array(
        'type'      => 'checkbox',
        'label'     => 'Is the carosel full width?',
        'section'   => 'rhb_slider',
        )
    );

    // header carosel slider 1
    $wp_customize->add_setting('rhb_slider_image_1');
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'rhb_slider_image_1', array(
        'label'     => __( 'Slider Image 1', 'rhb-slider-1-image' ),
        'section'   => 'rhb_slider',
        'settings'  => 'rhb_slider_image_1',
    )));

    // header carosel slider 1 markup
    $wp_customize->add_setting('rhb_slider_1_content');
    $wp_customize->add_control('rhb_slider_1_content', array(
        'label'     => __('Slider 1 Content'),
        'type'      => 'textarea',
        'section'   => 'rhb_slider',
        'description'   => '&lt;h1&gt;Example headline&lt;/h1&gt;&lt;p&gt;Sub-headline&lt;/p&gt;&lt;p&gt;&lt;a class=&quot;btn btn-lg btn-primary&quot; href=&quot;#&quot; role=&quot;button&quot;&gt;Sign up today&lt;/a&gt;&lt;/p&gt;',
    ));

    // header carosel slider 2
    $wp_customize->add_setting('rhb_slider_image_2');
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'rhb_slider_image_2', array(
        'label'     => __( 'Slider Image 2', 'rhb-slider-2-image' ),
        'section'   => 'rhb_slider',
        'settings'  => 'rhb_slider_image_2',
    )));

    // header carosel slider 2 markup
    $wp_customize->add_setting('rhb_slider_2_content');
    $wp_customize->add_control('rhb_slider_2_content', array(
        'label'         => __('Slider 2 Content'),
        'type'          => 'textarea',
        'section'       => 'rhb_slider',
        'description'   => '&lt;h1&gt;Example headline&lt;/h1&gt;&lt;p&gt;Sub-headline&lt;/p&gt;&lt;p&gt;&lt;a class=&quot;btn btn-lg btn-primary&quot; href=&quot;#&quot; role=&quot;button&quot;&gt;Sign up today&lt;/a&gt;&lt;/p&gt;',
    ));

}
add_action( 'customize_register', 'rhb_theme_customizer' );

?>