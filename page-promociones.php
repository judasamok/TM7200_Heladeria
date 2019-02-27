<?php 
    get_header();
?>

<section class="headerColorPromotions">
    <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-5 col-md-5 marginLogo">
            <?php  
                $logo = get_field('header_logo');
                if( !empty($logo) ): ?>
                    <img class="img-fluid" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
            <?php endif; ?>
         </div>
      </div>
    </div>

    <div class="container headerMargin">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-4-lg col-4-md col-4-sm mt-4">
                <h1 class="text-center"><?php the_field('header_title')?></h1>     
            </div>
        </div>
        <div class="row justify-content-center">
            <?php 
                $header_icon = get_field('header_icon');
                if( !empty($header_icon) ): ?>
                    <img class="img-fluid iconHeader" src="<?php echo $header_icon['url']; ?>" alt="<?php echo $header_icon['alt']; ?>" />
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="container">
    <div class="row justify-content-center mb-4">

        <div class="col-sm-12 col-md-6 col-lg-6 mt-lg-4">
            <h1 class="text-center"><?php the_field('section01_title')?></h1>            
            <h3 class="text-center"><?php the_field('section01_subtitle')?></h3>
            <p class="text-center mx-lg-5 px-lg-5"><?php the_field('section01_text_area')?></p>
            <!--Formulario de promociones-->
            <form id="newsletter">
                <div class="form-group row justify-content-center">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <input type="text" class="form-control  formStyle" name="email" placeholder="<?php the_field('section01_form')?>" />
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 mt-3">                        
                        <button type="submit" class="promotionBtn"><?php the_field('section01_btn')?></button>
                    </div>
                </div>                
            </form>
        </div>
        
    </div><!--end row-->
</section>

<section class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?php 
                $section02_img = get_field('section02_img');
                if( !empty($section02_img) ): ?>
                <img class="img-fluid" src="<?php echo $section02_img['url']; ?>" alt="<?php echo $section02_img['alt']; ?>" />
            <?php endif; ?>            
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 mt-lg-4 p-5">
            <h1 class="text-center"><?php the_field('section02_title')?></h1>            
            <h3 class="text-center"><?php the_field('section02_subtitle')?></h3>
            
            <p class="text-center mx-lg-5 px-lg-5"><?php the_field('section02_text_area')?></p>
         </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 mt-lg-4 p-5">
            <h1 class="text-center"><?php the_field('section03_title')?></h1>            
            <h3 class="text-center"><?php the_field('section03_subtitle')?></h3>
            
            <p class="text-center mx-lg-5 px-lg-5"><?php the_field('section03_text_area')?></p>
         </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?php 
                $section03_img = get_field('section03_img');
                if( !empty($section03_img) ): ?>
                <img class="img-fluid" src="<?php echo $section03_img['url']; ?>" alt="<?php echo $section03_img['alt']; ?>" />
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="parallaxPromotions" id="imgParallaxPromotions">
    <div class="container-fluid">
           <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-5 pt-5">
              <div class="parallaxSize">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?php   
                $section04_img = get_field('section04_img');
                if( !empty($section04_img) ): ?>
                <img class="img-fluid" src="<?php echo $section04_img['url']; ?>" alt="<?php echo $section04_img['alt']; ?>" />
            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 mt-lg-4 p-5">
            <h1 class="text-center"><?php the_field('section04_title')?></h1>            
            <h3 class="text-center"><?php the_field('section04_subtitle')?></h3>
            
            <p class="text-center mx-lg-5 px-lg-5"><?php the_field('section04_text_area')?></p>
         </div>
    </div>
</section>

<?php 
    get_footer();
?>