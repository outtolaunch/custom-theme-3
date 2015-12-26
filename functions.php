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

// file that builds the customizer
require_once(TEMPLATEPATH . '/lib/control-panel.php');

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
