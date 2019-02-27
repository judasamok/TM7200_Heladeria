<?php 
    get_header();
?>

<section class="headerColorLocations">

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
                <h1 class='text-center'><?php the_field('header_title')?></h1>                 
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

<section>
    <!--Texto-->
    <div class="row justify-content-center mt-4">
        <div class="col-lg-4 col-md-4 text-center">
            <h2><?php the_field('section1_title')?></h2>
            <?php                
                $section1_text_area = get_post_meta( get_the_ID(), 'section1_text_area', true);
                echo "<p>".$section1_text_area."</p>";
             ?>
        </div>
    </div>

    <!--Mapa-->
    <div class="row justify-content-center">
        <div class="col-lg-9 col-md-12 mb-4">
            <?php
                if(have_posts()):
                    while(have_posts()) : the_post(); ?>
                    <p><?php the_content(); ?></p>
                    <?php endwhile;
                    else :
                    echo "<p>No hay contenido.</p>";
                endif;
            ?>
        </div>
    </div>
</section>

<?php 
    get_footer();
?>