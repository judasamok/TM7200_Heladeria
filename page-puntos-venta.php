<?php 
    get_header();
?>

<section class="headerColorLocations">

    <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-5 col-md-5 marginLogo">
            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Logo">
         </div>
      </div>
    </div>

    <div class="container headerMargin">
        <div class="row justify-content-center">
            <div class="col-4-lg col-4-md col-4-sm mt-4">
                <h1 class="text-center">Puntos<br>de venta</h1>                
            </div>
            <div class="">
                <img class="img-fluid iconHeader" src="<?php bloginfo('template_directory'); ?>/assets/img/icon02-min.png" alt="Icon Contactos">
            </div>
        </div>
    </div>
</section>

<section>
    <!--Texto-->
    <div class="row justify-content-center mt-4">
        <div class="col-lg-4 col-md-4 text-center">
            <h2>Conoce nuestros<br>puntos de venta</h2>
            <p>Cu eum meis dictas, an per mentitum aliquando intellegam. Et vix consul regione. At nec accusam omnesque, rebum recteque vel ex.</p>
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