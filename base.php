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

        <?php include('templates/header-styles.php'); ?>

        <?php
          do_action('get_header');
          get_template_part('templates/header');
        ?>

        <div class="container wrap bodyWrap" role="document">
          <div class="row content">

                <main class="main">
                    <?php include Wrapper\template_path(); ?>
                </main>

                <?php if (Setup\display_sidebar()) : ?>
                <aside class="sidebar">
                    <?php include Wrapper\sidebar_path(); ?>
                </aside>
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