<?php get_header(); ?>

<!--Sección arriba-->
<section class="img-fluid bgImgHeader">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-5 marginLogo">
                <?php 
                    $logo = get_field('header_logo');
                    if( !empty($logo) ): ?>
                        <img class="img-fluid" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                <?php endif; ?>                
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <?php 
                    $header_icon = get_field('header_icon');
                    if( !empty($header_icon) ): ?>
                        <img class="img-fluid iconHeader" src="<?php echo $header_icon['url']; ?>" alt="<?php echo $header_icon['alt']; ?>" />
                <?php endif; ?>             
            </div>
        </div>
    </div>

</section>

<!--Nosotros-->
<section>
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8 mt-lg-4 p-5">
            <h1 class='text-center'><?php the_field('section01_title')?></h1>      
            <h3 class='text-center'><?php the_field('section01_subtitle')?></h3>            
            <p class="text-center mx-lg-5 px-lg-5"><?php the_field('section01_text_area')?></p>
            <div class="col alignBtn">
                <a class="buttons" href="./<?php the_field('section01_btn_link')?>"><?php the_field('section01_btn')?></a>
            </div>

        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <?php 
                $section01_img = get_field('section01_img');
                if( !empty($section01_img) ): ?>
                    <img class="img-fluid" src="<?php echo $section01_img['url']; ?>" alt="<?php echo $section01_img['alt']; ?>" />
            <?php endif; ?> 
        </div>
    </div>
</section>

<!--Productos-->
<section class="parallaxProducts" id="imgParallaxProducts">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-5 pt-5">
                <div class="parallaxSize text-center col-sm-12 col-md-8 col-lg-8">
                    <h1 class='text-center'><?php the_field('section02_title')?></h1>      
                    <h3 class='text-center'><?php the_field('section02_subtitle')?></h3>
                    <div class="col alignBtn">
                        <a class="buttons buttonProducts" href="./<?php the_field('section02_btn_link')?>"><?php the_field('section02_btn')?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Sabores-->
<section>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <?php 
                $section03_img = get_field('section03_img');
                if( !empty($section03_img) ): ?>
                    <img class="img-fluid" src="<?php echo $section03_img['url']; ?>" alt="<?php echo $section03_img['alt']; ?>" />
            <?php endif; ?> 
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mt-lg-4 p-5">
            <h1 class="text-center"><?php the_field('section03_title')?></h1>
            <h3 class="text-center"><?php the_field('section03_subtitle')?></h3>
            <p class="text-center"><?php the_field('section03_text_area')?></p>
            <div class="col alignBtn">
                <a class="buttons" href="./<?php the_field('section03_btn_link')?>"><?php the_field('section03_btn')?></a>
            </div>
        </div>
    </div>
</section>

<!--Promociones-->
<section>
    <div class="row justify-content-center ">
        <div class="col-sm-12 col-md-8 col-lg-8 mt-lg-4 p-5 pt-5">
            <div class="p-lg-5">
                <h1 class="text-center"><?php the_field('section04_title')?></h1>
                <h3 class="text-center"><?php the_field('section04_subtitle')?></h3>
                <p class="text-center mx-lg-5 px-lg-5"><?php the_field('section04_text_area')?></p>
                <!--Formulario de promociones-->
                <form id="newsletter">
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <input type="text" class="form-control  formStyle" name="email"
                                placeholder="<?php the_field('section04_form')?>" />
                        </div>
                    </div>

                    <div class="row form-group justify-content-center">
                        <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                            <?php
                                $section04_btn = get_post_meta( get_the_ID(), 'section04_btn', true);
                                echo "<button style='text-center' type='submit' class='formBtn'>".$section04_btn."</button>";
                             ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <?php 
                $section04_img = get_field('section04_img');
                if( !empty($section04_img) ): ?>
                    <img class="img-fluid" src="<?php echo $section04_img['url']; ?>" alt="<?php echo $section04_img['alt']; ?>" />
            <?php endif; ?>            
        </div>
    </div>
</section>

<?php get_footer(); ?>