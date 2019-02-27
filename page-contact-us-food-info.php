
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
        <div class="row justify-content-center">
            <div class="col-4-lg col-4-md col-4-sm mt-4 mb-2">
                <h2 class="text-center"><?php the_field('form01_title') ?></h2>
            </div>
        </div><!--end row-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-6">
                <form id="contactUs-Sales-Form">
                    <div class="row form-group">
                        <div class="col">
                            <input type="text" class="form-control formContactUs" name="name" placeholder="Full name - eg: John Black" />
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <div class="col">
                            <input type="text" class="form-control  formContactUs" name="email" placeholder="Email - eg: example@example.com" />
                        </div>
                    </div>                    

                    <div class="row form-group">
                        <div class="col text-center">
                            <button type="submit" class="formBtnContactUs"><?php the_field('form01_btn'); ?></button>
                        </div>
                    </div>

                </form>
            </div><!--end col-12-->
        </div>
    </div><!--end container-->
</section>

<?php 
    get_footer();
?>