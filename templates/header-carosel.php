<?php if( is_front_page() ) : ?>
<?php if(get_theme_mod('rhb_slider_boxed')) : ?>
<div class="caroselWrapper">
<?php else : ?>
<div class="container caroselWrapper">
<?php endif; ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
    <?php if(get_theme_mod('rhb_slider_image_2')) : ?>
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <?php endif; ?>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="<?php echo esc_url(get_theme_mod('rhb_slider_image_1')); ?>" alt="First slide">
            <?php if(get_theme_mod('rhb_slider_1_content')) : ?>
            <div class="container">
                <div class="carousel-caption">
                    <?php echo get_theme_mod('rhb_slider_1_content'); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php if(get_theme_mod('rhb_slider_image_2')) : ?>
        <div class="item">
            <img class="second-slide" src="<?php echo esc_url(get_theme_mod('rhb_slider_image_2')); ?>" alt="Second slide">
            <?php if(get_theme_mod('rhb_slider_2_content')) : ?>
            <div class="container">
                <div class="carousel-caption">
                    <?php echo get_theme_mod('rhb_slider_2_content'); ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
    <?php if(get_theme_mod('rhb_slider_image_2')) : ?>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <?php endif; ?>
    </div>
</div>
<?php endif;?>