<style>
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
.container.headerInnerWrapper {
    background: <?php echo esc_url(get_theme_mod('rhb_header_background_color')); ?> !important;
    <?php if(get_theme_mod('rhb_link_hover_color')) : ?>

    border-top: 3px solid <?php echo esc_url(get_theme_mod('rhb_header_top_border_color')); ?>;
    <?php endif; ?>

    border-left: 1px solid #E7E7E7 !important;
    border-right: 1px solid #E7E7E7 !important;
}
<?php endif; ?>
<?php else : ?>
body {
   border-top: 3px solid <?php echo esc_url(get_theme_mod('rhb_header_top_border_color')); ?>;
}

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
    nav .container.navWrap {
        background-color: <?php echo esc_url(get_theme_mod('rhb_navbar_background_color')); ?> !important;
        -webkit-box-shadow: 0px 1px 3px 0px rgba(50, 50, 50, 0.2);
        -moz-box-shadow:    0px 1px 3px 0px rgba(50, 50, 50, 0.2);
        box-shadow:         0px 1px 3px 0px rgba(50, 50, 50, 0.2);
    }
    <?php else : ?>

    nav {
        -webkit-box-shadow: 0px 1px 3px 0px rgba(50, 50, 50, 0.2);
        -moz-box-shadow:    0px 1px 3px 0px rgba(50, 50, 50, 0.2);
        box-shadow:         0px 1px 3px 0px rgba(50, 50, 50, 0.2);
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
    <?php if(get_theme_mod('rhb_navbar_link_bold')) : ?>

    nav.navbar.navbar-default #navbar.navbar-collapse.collapse .nav.navbar-nav>li:hover {}
    nav.navbar.navbar-default #navbar.navbar-collapse.collapse .nav.navbar-nav>li>a {
        font-weight: bold;
    }
    <?php endif; ?>

}
<?php if(get_theme_mod('rhb_main_body_background_color')) : ?>
.container.bodyWrap {

    background: <?php echo esc_url(get_theme_mod('rhb_main_body_background_color')); ?> !important;

    border-left: 1px solid #E7E7E7 !important;
    border-right: 1px solid #E7E7E7 !important;
}
<?php endif; ?>
<?php if(get_theme_mod('rhb_boxed_footer')) : ?>
<?php if(get_theme_mod('rhb_footer_background_color')) : ?>
.footerInnerWrapper {
    background: <?php echo esc_url(get_theme_mod('rhb_footer_background_color')); ?> !important;
    <?php if(get_theme_mod('rhb_footer_top_border_color')) : ?>

    border-top: 2px solid <?php echo esc_url(get_theme_mod('rhb_footer_top_border_color')); ?> !important;
    <?php endif; ?>

}
<?php endif; ?>
<?php else : ?>

footer {

    <?php if(get_theme_mod('rhb_footer_background_color')) : ?>

    background: <?php echo esc_url(get_theme_mod('rhb_footer_background_color')); ?> !important;
    <?php endif; ?>

    <?php if(get_theme_mod('rhb_footer_top_border_color')) : ?>

    border-top: 2px solid <?php echo esc_url(get_theme_mod('rhb_footer_top_border_color')); ?> !important;
    <?php endif; ?>
}
<?php endif; ?>
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

<?php if(get_theme_mod('rhb_custom_css')) : ?>
<style>
<?php echo esc_textarea(get_theme_mod('rhb_custom_css')); ?>

</style>
<?php endif; ?>