<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('templates/head'); ?>
    <body <?php body_class(); ?>>
        <!--[if IE]>
          <div class="alert alert-warning">
            <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
          </div>
        <![endif]-->

        <style>
            body {
               border-top: 3px solid <?php echo esc_url(get_theme_mod('rhb_header_top_border_color')); ?>;
            }
            <?php if(get_theme_mod('body_background_tile')) : ?>
            body {
                background: url('<?php echo esc_url(get_theme_mod('body_background_tile')); ?>');
            }
            <?php endif; ?>
            <?php if(get_theme_mod('rhb_link_color')) : ?>
            a {
                color: <?php echo esc_url(get_theme_mod('rhb_link_color')); ?>;
                text-decoration: none;
            }
            <?php endif; ?>
            <?php if(get_theme_mod('rhb_link_hover_color')) : ?>
            a:hover {
                color: <?php echo esc_url(get_theme_mod('rhb_link_hover_color')); ?>;
                text-decoration: underline;
            }
            <?php endif; ?>
            <?php if(get_theme_mod('rhb_header_boxed')) : ?>
                <?php if(get_theme_mod('rhb_header_background_color')) : ?>
                .container.topHeader {
                    background: <?php echo esc_url(get_theme_mod('rhb_header_background_color')); ?> !important;
                }
                <?php endif; ?>
            <?php else : ?>
                <?php if(get_theme_mod('rhb_header_background_color')) : ?>
                header{
                    background: <?php echo esc_url(get_theme_mod('rhb_header_background_color')); ?> !important;
                }
                <?php endif; ?>
            <?php endif; ?>
            <?php if(get_theme_mod('rhb_header_main_image')) : ?>
            .headerBanner {
                background-image: url('<?php echo esc_url(get_theme_mod('rhb_header_main_image')); ?>');
                background-size: cover;
                min-height: 400px;
                background-position: center;
                background-repeat: no-repeat;
            }
            <?php endif; ?>
            @media (min-width: 768px) {
                nav.navbar.navbar-default {
                    background-color: <?php echo esc_url(get_theme_mod('rhb_navbar_background_color')); ?> !important;
                    border-color: <?php echo esc_url(get_theme_mod('rhb_navbar_border_color')); ?> !important;
                    <?php if(get_theme_mod('rhb_navbar_has_border')) : ?>
                    border: none !important;
                    <?php endif; ?>
                }
                <?php if(get_theme_mod('rhb_navbar_boxed')) : ?>
                nav.navbar.navbar-default {
                    background-color: transparent !important;
                }
                nav .container.wrapper {
                    background-color: <?php echo esc_url(get_theme_mod('rhb_navbar_background_color')); ?> !important;
                }
                <?php endif; ?>
                .navbar-default .navbar-nav>li>a {
                    color: <?php echo esc_url(get_theme_mod('rhb_navbar_link_color')); ?> !important;
                }
                .navbar-default .navbar-nav>li>a:hover {
                    color: <?php echo esc_url(get_theme_mod('rhb_navbar_link_hover_color')); ?> !important;
                }
                <?php if(get_theme_mod('rhb_navbar_link_active_background_color')) : ?>
                .current-menu-item {
                    background: <?php echo esc_url(get_theme_mod('rhb_navbar_link_active_background_color')); ?>;
                }
                .navbar-default .navbar-nav>li.current-menu-item>a {
                    color: <?php echo esc_url(get_theme_mod('rhb_navbar_link_active_color')); ?> !important;
                }
                <?php endif; ?>
            }
            <?php if(get_theme_mod('rhb_main_body_background_color')) : ?>
            .wrap.container {
                background: <?php echo esc_url(get_theme_mod('rhb_main_body_background_color')); ?> !important;
            }
            <?php endif; ?>
            footer {
                <?php if(get_theme_mod('rhb_footer_background_color')) : ?>
                background: <?php echo esc_url(get_theme_mod('rhb_footer_background_color')); ?> !important;
                <?php endif; ?>

                <?php if(get_theme_mod('rhb_footer_top_border_color')) : ?>
                border-top: 2px solid <?php echo esc_url(get_theme_mod('rhb_footer_top_border_color')); ?> !important;
                <?php endif; ?>
            }
            <?php if(get_theme_mod('rhb_footer_heading_color')) : ?>
            footer h4 {
                color: <?php echo esc_url(get_theme_mod('rhb_footer_heading_color')); ?> !important;
            }
            footer .textwidget ul>li {
                color: <?php echo esc_url(get_theme_mod('rhb_footer_heading_color')); ?> !important;
            }
            <?php endif; ?>
            <?php if(get_theme_mod('rhb_footer_heading_underline_color')) : ?>
            footer h4 {
                border-bottom: 1px solid <?php echo esc_url(get_theme_mod('rhb_footer_heading_underline_color')); ?>;
                padding-bottom: 12px;
                margin-bottom: 12px;
            }
            <?php endif; ?>
            <?php if(get_theme_mod('rhb_footer_link_color')) : ?>
            footer a {
                color: <?php echo esc_url(get_theme_mod('rhb_footer_link_color')); ?> !important;
            }
            <?php endif; ?>
            <?php if(get_theme_mod('rhb_footer_link_hover_color')) : ?>
            footer a:hover {
                color: <?php echo esc_url(get_theme_mod('rhb_footer_link_hover_color')); ?> !important;
            }
            <?php endif; ?>
            <?php if(get_theme_mod('rhb_footer_bottom_color')) : ?>
            footer .bottomFooter,
            footer .bottomFooter a,
            footer .bottomFooter a:hover {
                color: <?php echo esc_url(get_theme_mod('rhb_footer_bottom_color')); ?> !important;
            }
            <?php endif; ?>
            <?php if(get_theme_mod('rhb_form_background_color')) : ?>
            form.visual-form-builder,
            form.visual-form-builder fieldset {
                background: <?php echo esc_url(get_theme_mod('rhb_form_background_color')); ?> !important;
            }
            <?php endif; ?>
            <?php if(get_theme_mod('rhb_form_heading_background_color')) : ?>
            .chatWithUsHeader {
                background: <?php echo esc_url(get_theme_mod('rhb_form_heading_background_color')); ?> !important;
            }
            <?php endif; ?>
            <?php if(get_theme_mod('rhb_form_heading_background_text_color')) : ?>
            .chatWithUsHeader {
                color: <?php echo esc_url(get_theme_mod('rhb_form_heading_background_text_color')); ?> !important;
            }
            <?php endif; ?>
            <?php if(get_theme_mod('rhb_form_submit_button_color')) : ?>
            form.visual-form-builder input.vfb-submit {
                background: <?php echo esc_url(get_theme_mod('rhb_form_submit_button_color')); ?> !important;
            }
            <?php endif; ?>
            <?php if(get_theme_mod('rhb_form_submit_button_text_color')) : ?>
            form.visual-form-builder input.vfb-submit {
                color: <?php echo esc_url(get_theme_mod('rhb_form_submit_button_text_color')); ?> !important;
            }
            <?php endif; ?>
            <?php if(get_theme_mod('rhb_form_field_heading_color')) : ?>
            .visual-form-builder label, label.vfb-desc {
                color: <?php echo esc_url(get_theme_mod('rhb_form_field_heading_color')); ?> !important;
            }
            <?php endif; ?>
        </style>

        <?php
          do_action('get_header');
          get_template_part('templates/header');
        ?>

        <div class="wrap container" role="document">
          <div class="content row">
            <main class="main">
              <?php include Wrapper\template_path(); ?>
            </main><!-- /.main -->
            <?php if (Setup\display_sidebar()) : ?>
              <aside class="sidebar">
                <?php include Wrapper\sidebar_path(); ?>
              </aside><!-- /.sidebar -->
            <?php endif; ?>
          </div><!-- /.content -->
        </div><!-- /.wrap -->

        <?php
          do_action('get_footer');
          get_template_part('templates/footer');
          wp_footer();
        ?>

        <link rel='stylesheet' href='http://72.52.171.206/sitev03/wp-content/themes/custom-theme-3/custom.css' type='text/css' media='all' />

    </body>
</html>