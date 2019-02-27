
<?php 
    get_header();
?>

<section class="headerColorContactUs">

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
        <div class="row justify-content-center">
            <?php 
                    $header_icon = get_field('header_icon');
                    if( !empty($header_icon) ): ?>
                        <img class="img-fluid iconHeader" src="<?php echo $header_icon['url']; ?>" alt="<?php echo $header_icon['alt']; ?>" />
                <?php endif; ?>
        </div>
    </div>
</section>

<!--Option List-->
<section>
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <div class="col">
                    <?php 
                        $form1_img = get_field('form1_img');
                        if( !empty($form1_img) ): ?>
                        <img class="img-fluid alignIcon" src="<?php echo $form1_img['url']; ?>" alt="<?php echo $form1_img['alt']; ?>" />
                    <?php endif; ?> 
                </div>
                <div class="col">
                    <h2 class="text-center"><?php the_field('form1_title')?></h2>
                    <?php                        
                        $form1_description = get_post_meta( get_the_ID(), 'form1_description', true);
                        echo "<p class='text-center'>".$form1_description."</p>";
                     ?>                    
                </div>
                <div class="col alignBtn">
                    <?php
                        $form1_btn = get_post_meta( get_the_ID(), 'form1_btn', true);
                        echo "<a class='buttons' href='./contact-us-sales'>".$form1_btn."</a>";
                     ?>
                </div>
                
            </div><!---end-->

            <div class="col">
                <div class="col">
                    <?php 
                        $form2_img = get_field('form2_img');
                        if( !empty($form2_img) ): ?>
                            <img class="img-fluid alignIcon" src="<?php echo $form2_img['url']; ?>" alt="<?php echo $form2_img['alt']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="col">
                    <h2 class="text-center"><?php the_field('form2_title')?></h2>
                    <?php                        
                        $form2_description = get_post_meta( get_the_ID(), 'form2_description', true);
                        echo "<p class='text-center'>".$form2_description."</p>";
                     ?>                                  
                </div>
                <div class="col alignBtn">
                    <?php
                        $form2_btn = get_post_meta( get_the_ID(), 'form2_btn', true);
                        echo "<a class='buttons' href='./contact-us-food-info'>".$form2_btn."</a>";
                     ?>
                </div>
                                
            </div>
            <div class="col">
                <div class="col">
                    <?php 
                        $form3_img = get_field('form3_img');
                        if( !empty($form3_img) ): ?>
                        <img class="img-fluid alignIcon" src="<?php echo $form3_img['url']; ?>" alt="<?php echo $form3_img['alt']; ?>" />
                    <?php endif; ?> 
                </div>
                <div class="col">
                    <h2 class="text-center"><?php the_field('form3_title')?></h2>
                    <?php                        
                        $form3_description = get_post_meta( get_the_ID(), 'form3_description', true);
                        echo "<p class='text-center'>".$form3_description."</p>";
                     ?>                    
                </div>
                <div class="col alignBtn">
                    <?php
                        $form3_btn = get_post_meta( get_the_ID(), 'form3_btn', true);
                        echo "<a class='buttons' href='./contact-us-questions'>".$form3_btn."</a>";
                     ?>
                </div>
                
            </div>
        </div><!--end row-->        
    </div><!--end container-->
</section>

<?php 
    get_footer();
?>