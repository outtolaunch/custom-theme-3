<header class="banner">

    <div class="headerContainer container">
        <div class="col-xs-6 col-md-4"><a href="<?= esc_url(home_url('/')); ?>"><img class="logo" src="http://72.52.171.206/sitev03/wp-content/uploads/2015/12/logo-rochester.png"></a></div>
        <div class="col-xs-6 col-md-4"></div>
        <div class="col-xs-6 col-md-4 actionColumn">
            <h2>This is Your Chance.<br><a href="#" class="phone-number">Call us Today! (590) 331-4933</a></h2>
        </div>
    </div>

    <div class="none">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
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
            </div>
        </nav>
    </div>

</header>
<?php if( is_front_page() ) : ?>
<div class="headerBanner">

</div>
<?php endif;?>