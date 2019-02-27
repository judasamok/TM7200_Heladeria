<?php get_header(); ?>



<section class="imageError img-fluid mb-4">
</section>

<section class="container mb-4">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
                <h4 class="text-center"><?php the_field('section01_title')?></h4>
                <p class="text-center p404"><?php the_field('section01_subtitle')?></p>
                <div class="col alignBtn">
                    <a class="buttons" href="./inicio"><?php the_field('section01_btn')?></a>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  ">
            <?php
                $section01_img = get_field('section01_img');
                if( !empty($section01_img) ): ?>
                <img class="img-fluid" src="<?php echo $section01_img['url']; ?>"
                alt="<?php echo $section01_img['alt']; ?>" />
            <?php endif; ?>
            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/img33-min.png" alt="About Us">
        </div>
    </div>
</section>
<br>
<?php get_footer(); ?>