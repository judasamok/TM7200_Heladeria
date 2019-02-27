<?php 
    get_header();
?>

<section class="headerColorAboutUs">

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
            <div class="col-lg-4 col-md-4 col-sm-4 mt-4">
                <h1 class="text-center"><?php the_field('section01_title')?></h1>                
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

<section class="my-4">
    <div class="container">
        <div class="row justify-content-center">   
            <div class="col-lg-6 col-md-6 col-sm-4 text-center">
                <?php
                    $section01_title = get_post_meta( get_the_ID(), 'section01_title', true);
                    echo "<h2>".$section01_title."</h2>";
                    $section01_subtitle = get_post_meta( get_the_ID(), 'section01_subtitle', true);
                    echo "<h3>".$section01_subtitle."</h3>";
                 ?>
            </div>
        </div>
        <div class="row justify-content-center">   
            <div class="col-lg-8 col-md-8 col-sm-4 text-center">
                <?php 
                    $section01_text_area = get_post_meta( get_the_ID(), 'section01_text_area',true);
                    echo "<p>".$section01_text_area."</p>";
                 ?>
            </div>
        </div>

    </div>
</section><!--end section-->

<section>
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-6 col-sm-6">
            <!--Carousel Wrapper-->
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        <?php 
                            $slider1 = get_field('slider_img01');
                            if( !empty($slider1) ): ?>
                                <img class="d-block w-100" src="<?php echo $slider1['url']; ?>" alt="<?php echo $slider1['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                    <!--/First slide-->
                
                    <!--Second slide-->
                    <div class="carousel-item">
                        <?php 
                            $slider2 = get_field('slider_img02');
                            if( !empty($slider2) ): ?>
                                <img class="d-block w-100" src="<?php echo $slider2['url']; ?>" alt="<?php echo $slider2['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                    <!--/Second slide-->
        
                    <!--Third slide-->
                    <div class="carousel-item">
                        <?php 
                            $slider3 = get_field('slider_img03');
                            if( !empty($slider3) ): ?>
                                <img class="d-block w-100" src="<?php echo $slider3['url']; ?>" alt="<?php echo $slider3['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                    <!--/Third slide-->
                </div>
                <!--/.Slides-->
            
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->

            </div>
            <!--/.Carousel Wrapper-->
        </div><!--end col-->
    </div><!--end row-->
</section>

<section class="my-4">
    <div class="container">
        <div class="row justify-content-center">   
            <div class="col-lg-6 col-md-6 col-sm-4 text-center">
                <?php
                    $section02_title = get_post_meta( get_the_ID(), 'section02_title', true);
                    echo "<h2>".$section02_title."</h2>";
                    $section02_subtitle = get_post_meta( get_the_ID(), 'section02_subtitle', true);
                    echo "<h3>".$section02_subtitle."</h3>";
                 ?>                
            </div>
        </div>
        <div class="row justify-content-center">   
            <div class="col-lg-8 col-md-8 col-sm-6 text-center">
                <?php 
                    $section02_text_area = get_post_meta( get_the_ID(), 'section02_text_area',true);
                    echo "<p>".$section02_text_area."</p>";
                 ?>
            </div>
        </div>

    </div>
</section><!--end section-->


<?php 
    get_footer();
?>