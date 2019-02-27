<?php 
    get_header();
?>

<section class="headerColorFlavors">

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
            <div class="col-4-lg col-4-md col-4-sm mt-4">
                <?php
                    $title = get_post_meta( get_the_ID(), 'header_title', true);
                    echo "<h1 class='text-center'>".$title."</h1>";
                 ?>
                <h3 class="text-center"><?php the_field('header_subtitle')?></h3>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <?php 
                    $header_icon = get_field('header_icon');
                    if( !empty($header_icon) ): ?>
                        <img class="img-fluid iconHeader" src="<?php echo $header_icon['url']; ?>" alt="<?php echo $header_icon['alt']; ?>" />
                <?php endif; ?>
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-5">
            <h1 class="text-center"><?php the_field('section01_title')?></h1>
            <?php                
                $section01_text_area = get_post_meta( get_the_ID(), 'section01_text_area',true);
                    echo "<p>".$section01_text_area."</p>";
             ?>            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <?php 
                $section01_img = get_field('section01_img');
                if( !empty($section01_img) ): ?>
                    <img class="img-fluid" src="<?php echo $section01_img['url']; ?>" alt="<?php echo $section01_img['alt']; ?>" />
            <?php endif; ?>            
        </div>
    </div>
</section>

<section class="parallaxFlavors" id="imgParallaxFlavors">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-5 py-5">
                <div class="parallaxSize">
                    <div class="row justify-content-center">
                    <div class=" bgParallax">
                        <h1 class="text-center text-light pt-3"><?php the_field('section02_title')?></h1>
                        <h3 class="text-center text-light"><?php the_field('section02_subtitle')?></h3>
                        <div class="col alignBtn pb-3">
                            <a class="buttons text-light buttonProducts" href="./products"><?php the_field('section02_btn')?></a>
                        </div>
                    </div>                   
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row justify-content-center">
       <div class="col-4-lg col-4-md col-4-sm mt-4">
           <h1 class="text-center"><?php the_field('section03_title')?></h1>
       </div>
       
       <div class="container my-5">
          <div class="row">
             <div class="col">
                 <div class="col">
                    <?php 
                        $card01_img = get_field('card01_img');
                        if( !empty($card01_img) ): ?>
                            <img class="img-fluid alignIcon" src="<?php echo $card01_img['url']; ?>" alt="<?php echo $card01_img['alt']; ?>" />
                    <?php endif; ?>                    
                </div>
                <div class="col">
                    <h3 class="text-center"><?php the_field('card01_title')?></h3>
                </div>
             </div>
             <!-- other-->
             <div class="col">
                 <div class="col">
                    <?php 
                        $card02_img = get_field('card02_img');
                        if( !empty($card02_img) ): ?>
                            <img class="img-fluid alignIcon" src="<?php echo $card02_img['url']; ?>" alt="<?php echo $card02_img['alt']; ?>" />
                    <?php endif; ?>                    
                </div>
                <div class="col">
                    <h3 class="text-center"><?php the_field('card02_title')?></h3>
                </div>
             </div>
             <!-- other-->
             <div class="col">
                 <div class="col">
                    <?php 
                        $card03_img = get_field('card03_img');
                        if( !empty($card03_img) ): ?>
                            <img class="img-fluid alignIcon" src="<?php echo $card03_img['url']; ?>" alt="<?php echo $card03_img['alt']; ?>" />
                    <?php endif; ?>                      
                </div>
                <div class="col">
                    <h3 class="text-center"><?php the_field('card03_title')?></h3>
                </div>
             </div>
             <!-- other-->
             <div class="col">
                 <div class="col">
                    <?php 
                        $card04_img = get_field('card04_img');
                        if( !empty($card04_img) ): ?>
                            <img class="img-fluid alignIcon" src="<?php echo $card04_img['url']; ?>" alt="<?php echo $card04_img['alt']; ?>" />
                    <?php endif; ?>                    
                </div>
                <div class="col">
                    <h3 class="text-center"><?php the_field('card04_title')?></h3>
                </div>
             </div>
          </div>
       </div>
    </div>
</section>

<?php 
    get_footer();
?>