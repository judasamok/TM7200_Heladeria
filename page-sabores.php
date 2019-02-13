<?php 
    get_header();
?>

<section class="headerColorFlavors">

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
                <h1 class="text-center">Sabores</h1>
                <h3 class="text-center">Conoce los sabores que te ofrecemos</h3>
            </div>
            <div class="">
                <img class="img-fluid iconHeader" src="<?php bloginfo('template_directory'); ?>/assets/img/icon05-min.png" alt="Icon Contactos">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-5">
                   <h1 class="text-center">Nuestro<br>M E N Ú</h1>
                <p class="text-center">Ut auctor luctus leo eleifend porttitor. Curabitur pretit auctor luctus leo eleifend porttitor. Curabitur pretium rutrum turpis, at varius lacus viverra ac. Donec turpis magna, blandit eget sapien consectetur, cursus interdum dolor.</p>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                 <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/img01-min.png" alt="Flavors">
             </div>
             </div>
</section>

<section class="parallaxFlavors" id="imgParallaxFlavors">
    <div class="container-fluid">
           <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-5 py-5">
              <div class="parallaxSize text-center">
               <h1 class="text-center">Nuestros<br>Productos</h1>
               <h3 class="text-center">Deliciosa variedad de helados</h3>
               <div class="col alignBtn">
                  <a class="buttons buttonProducts" href="./products">Ver más</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-4-lg col-4-md col-4-sm mt-4">
           <h1 class="text-center">Sabores<br>tradicionales</h1>
       </div>
       
       <div class="container my-5">
          <div class="row">
             <div class="col">
                 <div class="col">
                    <img class="img-fluid  alignIcon" src="<?php bloginfo('template_directory'); ?>/assets/img/img25-min.jpg" alt="Ice cream Cherry Amaretto">
                </div>
                <div class="col">
                    <h3 class="text-center">Cherry Amaretto</h3>
                </div>
             </div>
             <!-- other-->
             <div class="col">
                 <div class="col">
                    <img class="img-fluid  alignIcon" src="<?php bloginfo('template_directory'); ?>/assets/img/img24-min.jpg" alt="Ice cream Butter Bickle">
                </div>
                <div class="col">
                    <h3 class="text-center">Butter Bickle</h3>
                </div>
             </div>
             <!-- other-->
             <div class="col">
                 <div class="col">
                    <img class="img-fluid  alignIcon" src="<?php bloginfo('template_directory'); ?>/assets/img/img23-min.jpg" alt="Ice cream Vainilla">
                </div>
                <div class="col">
                    <h3 class="text-center">Vainilla</h3>
                </div>
             </div>
             <!-- other-->
             <div class="col">
                 <div class="col">
                    <img class="img-fluid  alignIcon" src="<?php bloginfo('template_directory'); ?>/assets/img/img26-min.jpg" alt="Ice cream Chocolate">
                </div>
                <div class="col">
                    <h3 class="text-center">Chocolate</h3>
                </div>
             </div>
          </div>
       </div>
    </div>
</section>

<?php 
    get_footer();
?>