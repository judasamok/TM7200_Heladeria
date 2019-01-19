<html>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <title><?php bloginfo('name'); ?></title>
      <?php wp_head(); ?>
       
   </head>
    <body <?php body_class();?> >
       
   <nav class="navbar navbar-expand-md" role="navigation">
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
       
   <!--<h1>Heladeria</h1>-->
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-5 col-md-5 my-5">
            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Logo">
         </div>
      </div>
   </div>
   
   
