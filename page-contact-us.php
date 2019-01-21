<html>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <title><?php bloginfo('name'); ?></title>
      <?php wp_head(); ?>
       
   </head>
   <body <?php body_class();?> >


<section class="headerColor">

<nav class="navbar navbar-expand-md navText" role="navigation">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
	      </button>
	      <a class="navbar-brand" href="#">inicio</a>
         <?php
         wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
		   ) );
         ?>
      </div>
   </nav>
       
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-5 col-md-5 my-5">
            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Logo">
         </div>
      </div>
   </div>



    <div class="container headerMargin">
        <div class="row justify-content-center">
            <div class="col-4-lg col-4-md col-4-sm mt-4">
                <h1 class="text-center">Contáctenos</h1>
                <h3 class="text-center">Realiza consultas sobre nuestros<br>productos</h3>
            </div>
            <div class="">
                <img class="img-fluid iconHeader" src="<?php bloginfo('template_directory'); ?>/assets/img/icon06-min.png" alt="Icon Contactos">
            </div>
        </div>
    </div>
</section>

<!--Option List-->
<section>
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <div class="col">
                    <img class="img-fluid  alignIcon" src="<?php bloginfo('template_directory'); ?>/assets/img/icon07-min.png" alt="Icon Contact Us">
                </div>
                <div class="col">
                    <h1 class="text-center">Venta<br>del producto</h1>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col alignBtn">
                    <a class="buttons" href="page-contact-us-sales.php">Ver más</a>
                </div>
                
            </div><!---end-->

            <div class="col">
                <div class="col">
                    <img class="img-fluid alignIcon" src="<?php bloginfo('template_directory'); ?>/assets/img/icon08-min.png" alt="Img Contact Us">
                </div>
                <div class="col">
                    <h1 class="text-center">Marco<br>Alimenticio</h1>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col alignBtn">
                    <a class="buttons" href="">Ver más</a>
                </div>
                                
            </div>
            <div class="col">
                <div class="col">
                    <img class="img-fluid alignIcon" src="<?php bloginfo('template_directory'); ?>/assets/img/icon09-min.png" alt="Img Contact Us">
                </div>
                <div class="col">
                    <h1 class="text-center">Consultas<br>del Cliente</h1>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col alignBtn">
                    <a class="buttons" href="">Ver más</a>
                </div>
                
            </div>
        </div><!--end row-->        
    </div><!--end container-->
</section>

<section>
    <div class="container">
        <div class="col-12-lg col-12-md col-12-sm">
            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/img31-min.jpeg" alt="Img Contact Us">
        </div>
    </div>
</section>

<div>
    
</div>

<?php 
    get_footer();
?>