<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// link to page that builds theme options
// require_once(TEMPLATEPATH . '/theme-options/admin-menu.php');

// hide admin bar on front end
show_admin_bar( false );

/*---------- Register sidebars --------------*/
/* by introducing our own custom sidebars, */
/* we can keep consistency, as well as ease in cloning content */

// header call to action area
register_sidebar(array(
  'name'      =>  __( 'RHB - Top Header' ),
  'id'      =>  'rhb-header',
  'description' =>  __( 'Call to action, "insurance accepted" and phone number' ),
  'before_widget' =>  '',
  'after_widget'  =>  '',
  'before_title'  =>  '',
  'after_title' =>  ''
));

// lead gen form
register_sidebar(array(
  'name'      =>  __( 'RHB - Lead Gen Form' ),
  'id'      =>  'rhb-lead-gen-form',
  'description' =>  __( 'Lead gen form, list menus' ),
  'before_widget' =>  '<div class="et_pb_widget">',
  'after_widget'  =>  '</div>',
  'before_title'  =>  '<h4 class="widgettitle">',
  'after_title' =>  '</h4>'
));

// default sidebar
register_sidebar(array(
  'name'      =>  __( 'RHB - Primary Sidebar' ),
  'id'      =>  'rhb-primary',
  'description' =>  __( '' ),
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

// footer widget #1
register_sidebar(array(
  'name'      =>  __( 'RHB - Footer Area #1' ),
  'id'      =>  'rhb-footer-area-1',
  'description' =>  __( '' ),
  'before_widget' =>  '<div class="et_pb_widget">',
  'after_widget'  =>  '</div>',
  'before_title'  =>  '<h4 class="widgettitle">',
  'after_title' =>  '</h4>'
));

// footer widget #2
register_sidebar(array(
  'name'      =>  __( 'RHB - Footer Area #2' ),
  'id'      =>  'rhb-footer-area-2',
  'description' =>  __( '' ),
  'before_widget' =>  '<div class="et_pb_widget">',
  'after_widget'  =>  '</div>',
  'before_title'  =>  '<h4 class="widgettitle">',
  'after_title' =>  '</h4>'
));

// footer widget #3
register_sidebar(array(
  'name'      =>  __( 'RHB - Footer Area #3' ),
  'id'      =>  'rhb-footer-area-3',
  'description' =>  __( '' ),
  'before_widget' =>  '<div class="et_pb_widget">',
  'after_widget'  =>  '</div>',
  'before_title'  =>  '<h4 class="widgettitle">',
  'after_title' =>  '</h4>'
));

// footer widget #4
register_sidebar(array(
  'name'      =>  __( 'RHB - Footer Area #4' ),
  'id'      =>  'rhb-footer-area-4',
  'description' =>  __( '' ),
  'before_widget' =>  '<div class="et_pb_widget">',
  'after_widget'  =>  '</div>',
  'before_title'  =>  '<h4 class="widgettitle">',
  'after_title' =>  '</h4>'
));

// footer bottom widget area
register_sidebar(array(
  'name'      =>  __( 'RHB - Bottom Footer' ),
  'id'      =>  'rhb-bottom-footer',
  'description' =>  __( 'Privacy, terms and sitemap links' ),
  'before_widget' =>  '',
  'after_widget'  =>  '',
  'before_title'  =>  '',
  'after_title' =>  ''
));

// unregister any default and uneeded sidebars throughout all themes
function remove_some_widgets(){
    // divi widget area
    unregister_sidebar( 'et_pb_widget_area_1' );
    // widget accidently created in divi
    unregister_sidebar( 'sidebar-footer' );
    // default sage sidebar
    unregister_sidebar( 'sidebar-primary' );
}
add_action( 'widgets_init', 'remove_some_widgets', 11 );

/*---------- Adds theme sections and settings to customizer --------------*/
function rhb_theme_customizer( $wp_customize ) {

    // add new section for logo
    $wp_customize->add_section('theme_logo_section', array(
        'title'       => __('Logo', 'custom-logo'),
        'priority'    => 30,
        'description' => 'Upload a custom logo',
    ));

    // site logo
    $wp_customize->add_setting('theme_logo');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_logo', array(
        'label'     => __( 'Logo', 'custom-logo' ),
        'section'   => 'theme_logo_section',
        'settings'  => 'theme_logo',
    )));

    // add RHB theme section and settings
    $wp_customize->add_section('rhb_theme_section' , array(
        'title'       => __('RHB Options', 'rhb_theme_settings'),
        'priority'    => 30,
        'description' => 'Various theme settings for the RHB custom theme',
    ) );

    // site phone number
    $wp_customize->add_setting('rhb_phone_number', array(
        'default'   => '(000) 000-0000',
    ));
    $wp_customize->add_control('rhb_phone_number', array(
        'label'     => __( 'Phone Number', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_phone_number',
    ));

    // accent / link color
    $wp_customize->add_setting('rhb_link_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_link_color', array(
        'label'     => __( 'Main link color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_link_color',
    )));

    // accent / link color
    $wp_customize->add_setting('rhb_link_hover_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_link_hover_color', array(
        'label'     => __( 'Main link hover color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_link_hover_color',
    )));

    // header background color
    $wp_customize->add_setting('rhb_header_background_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_header_background_color', array(
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
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_header_top_border_color', array(
        'label'     => __( 'Header Top Border Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_header_top_border_color',
    )));

    // adds a background tile
    $wp_customize->add_setting('body_background_tile');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'body_background_tile', array(
        'label'     => __( 'Background Tile', 'backround-tile' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'body_background_tile',
    )));

    // navbar background
    $wp_customize->add_setting('rhb_navbar_background_color', array(
        'default'   => '#F8F8F8',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_navbar_background_color', array(
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
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_navbar_border_color', array(
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
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_navbar_link_color', array(
        'label'     => __( 'Navbar Link Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_navbar_link_color',
    )));

    // navbar link hover color
    $wp_customize->add_setting('rhb_navbar_link_hover_color', array(
        'default'   => '#333333',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_navbar_link_hover_color', array(
        'label'     => __( 'Navbar Link Hover Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_navbar_link_hover_color',
    )));

    // navbar link active color
    $wp_customize->add_setting('rhb_navbar_link_active_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_navbar_link_active_color', array(
        'label'     => __( 'Navbar Link Active Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_navbar_link_active_color',
    )));

    // navbar link active color
    $wp_customize->add_setting('rhb_navbar_link_active_background_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_navbar_link_active_background_color', array(
        'label'     => __( 'Navbar Link Active Background Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_navbar_link_active_background_color',
    )));

    // main header image
    $wp_customize->add_setting('rhb_header_main_image');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'rhb_header_main_image', array(
        'label'     => __( 'Main header image', 'backround-tile' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_header_main_image',
    )));

    // main body background color
    $wp_customize->add_setting('rhb_main_body_background_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_main_body_background_color', array(
        'label'     => __( 'Main Body Background Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_main_body_background_color',
    )));

    // footer background color
    $wp_customize->add_setting('rhb_footer_background_color', array(
        'default'   => '#E2E2E2',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_footer_background_color', array(
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
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_footer_top_border_color', array(
        'label'     => __( 'Footer Top Border Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_footer_top_border_color',
    )));

    // footer heading color
    $wp_customize->add_setting('rhb_footer_heading_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_footer_heading_color', array(
        'label'     => __( 'Footer Heading Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_footer_heading_color',
    )));

    // footer heading underline color
    $wp_customize->add_setting('rhb_footer_heading_underline_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_footer_heading_underline_color', array(
        'label'     => __( 'Footer Heading Underline Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_footer_heading_underline_color',
    )));

    // footer link color
    $wp_customize->add_setting('rhb_footer_link_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_footer_link_color', array(
        'label'     => __( 'Footer Link Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_footer_link_color',
    )));

    // footer rollover color
    $wp_customize->add_setting('rhb_footer_link_hover_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_footer_link_hover_color', array(
        'label'     => __( 'Footer Link Hover Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_footer_link_hover_color',
    )));

    // footer bottom text and link color
    $wp_customize->add_setting('rhb_footer_bottom_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_footer_bottom_color', array(
        'label'     => __( 'Footer Bottom Text & Link Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_footer_bottom_color',
    )));

    // form main heading background color
    $wp_customize->add_setting('rhb_form_heading_background_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_form_heading_background_color', array(
        'label'     => __( 'Form Main Heading Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_form_heading_background_color',
    )));

    // form main background text color
    $wp_customize->add_setting('rhb_form_heading_background_text_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_form_heading_background_text_color', array(
        'label'     => __( 'Form Main Heading Text Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_form_heading_background_text_color',
    )));

    // form background color
    $wp_customize->add_setting('rhb_form_background_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_form_background_color', array(
        'label'     => __( 'Form Background Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_form_background_color',
    )));

    // form submit button color
    $wp_customize->add_setting('rhb_form_submit_button_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_form_submit_button_color', array(
        'label'     => __( 'Form Submit Button Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_form_submit_button_color',
    )));

    // form submit button text color
    $wp_customize->add_setting('rhb_form_submit_button_text_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_form_submit_button_text_color', array(
        'label'     => __( 'Form Submit Button Text Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_form_submit_button_text_color',
    )));

    // form field heading colors
    $wp_customize->add_setting('rhb_form_field_heading_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'rhb_form_field_heading_color', array(
        'label'     => __( 'Form Field Heading Color', 'rhb_theme_settings' ),
        'section'   => 'rhb_theme_section',
        'settings'  => 'rhb_form_field_heading_color',
    )));

    // custom css
    $wp_customize->add_setting('rhb_custom_css');
    $wp_customize->add_control('rhb_custom_css', array(
        'label'     => __('Custom Theme CSS'),
        'type'      => 'textarea',
        'section'   => 'rhb_theme_section',
    ));

}
add_action( 'customize_register', 'rhb_theme_customizer' );

/*---------- Creates shortcodes for phone number --------------*/
// adds a new shortcode [base]
function base() {
    return site_url();
}
add_shortcode('base', 'base');

// outputs the bare phone number with class [phone]
function rhb_phone_number($atts) {
    $options = get_theme_mod('rhb_phone_number');
    $output = '<span class="inlinePhoneNumber">' . $options . '</span>';
    return $output;
}
add_shortcode('phone', 'rhb_phone_number');

// outputs the bare phone number with class [phonebare]
function rhb_phone_number_homebutton($atts) {
    $themePhoneNumber = get_theme_mod('rhb_phone_number');
    $themePhoneBare = strtr($themePhoneNumber, array('(' => '', ')' => '', '-' => '', ' ' => ''));
    $output = $themePhoneBare;
    return $output;
}
add_shortcode('phonebare', 'rhb_phone_number_homebutton');

// clickable phone number [phonelink]
function rhb_phone_number_linkable($atts) {
    $themePhoneNumber = get_theme_mod('rhb_phone_number');
    $themePhoneBare = strtr($themePhoneNumber, array('(' => '', ')' => '', '-' => '', ' ' => ''));
    $output = '<a href="tel:+1' . $themePhoneBare . '" class="inlinePhoneLink">' . $themePhoneNumber . '</a>';
    return $output;
}
add_shortcode('phonelink', 'rhb_phone_number_linkable');

// clickable phone number with text inside [phonewrap]Call [phone] Today!![/phonewrap]
function phonewrap($atts, $content = null) {
    $themePhoneNumber = get_theme_mod('rhb_phone_number');
    $themePhoneBare = strtr($themePhoneNumber, array('(' => '', ')' => '', '-' => '', ' ' => ''));
    $output = '<a href="tel:+1' . $themePhoneBare . '" class="inlinePhoneLink">' . do_shortcode($content) . '</a>';
    return $output;
}
add_shortcode('phonewrap', 'phonewrap');

// shortcodes don't render in wigets by default
// this helps them do so
add_filter('widget_text', 'do_shortcode');
