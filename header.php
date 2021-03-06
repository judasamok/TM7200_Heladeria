<!DOCTYPE html>
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <title><?php bloginfo('name'); ?></title>
      <?php wp_head(); ?>
       
   </head>
    <body <?php body_class();?> >
       
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" role="navigation">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
	      </button>
	      <a class="navbar-brand" href="./home"><i class="fas fa-home"></i></a>
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
         <a class="btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
         <a class="btn-small btn-tw mx-2"><i class="fab fa-twitter"></i></a>
         <a class="btn-small btn-dribbble"><i class="fab fa-google-plus-g"></i></a>
         
      </div>
   </nav>
       
   
   
   
