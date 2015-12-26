<header>
    <div class="container headerInnerWrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="headerContainer">
                    <div class="row">
                        <div class="col-md-6 col-md-6 col-sm-6 col-xs-12 headerLogo">
                            <?php if ( get_theme_mod( 'theme_logo' ) ) : ?>
                            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'theme_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6 col-md-6 col-sm-6 col-xs-12 callToAction">
                            <?php dynamic_sidebar('rhb-header'); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php if(get_theme_mod('rhb_navbar_boxed')) : ?>

    <nav class="navbar container navBoxed navbar-default" role="navigation">

    <?php else : ?>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container navFullWidth">

    <?php endif; ?>

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php
            if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
            endif;
            ?>
        </div>

    <?php if(get_theme_mod('rhb_navbar_boxed')) : ?>
    <?php else : ?>

    </div>

    <?php endif; ?>

    </nav>
</header>
<?php include('header-carosel.php'); ?>