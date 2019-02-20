
<?php get_header(); ?>  

     <!--Sección arriba-->
    <section class="img-fluid bgImgHeader">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-lg-5 col-md-5 marginLogo">
               <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Logo">
            </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-6">
                <img class="img-fluid iconHome" src="<?php bloginfo('template_directory'); ?>/assets/img/icon00-min.png" alt="Icon Home">
            </div>
      </div>
      
    </section>
     
     <!--Nosotros-->
     <section>
         <div class="row">
             <div class="col-sm-12 col-md-8 col-lg-8 mt-lg-4 p-5">
                
                 <h1 class="text-center">Nuestra<br>Historia</h1>
                    <h3 class="text-center">El principio de todo</h3>
                    <p class="text-center mx-lg-5 px-lg-5">Ut auctor luctus leo eleifend porttitor. Curabitur pretit auctor luctus leo eleifend porttitor. Curabitur pretium rutrum turpis, at varius lacus viverra ac. Donec turpis magna, blandit eget sapien consectetur, cursus interdum dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    <div class="col alignBtn">
                    <a class="buttons " href="./about-us">Leer más</a>
                    </div>
                
             </div>
                 <div class="col-sm-12 col-md-4 col-lg-4">
                     <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/img05-min.jpg" alt="About Us">
                 </div>
          </div>
     </section>
     
     <!--Productos-->
     <section class="parallaxProducts" id="imgParallaxProducts">
         <div class="container-fluid">
           <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-5 pt-5">
              <div class="parallaxSize text-center col-sm-12 col-md-8 col-lg-8">
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
     
      <!--Sabores-->
      <section >
         <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/img01-min.png" alt="Flavors">
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 mt-lg-4 p-5">
                <h1 class="text-center">Sabores</h1>
                <h3 class="text-center">Conoce todos nuestros sabores</h3>
                <p class="text-center">Ut auctor luctus leo eleifend porttitor. Curabitur pretit auctor luctus leo eleifend porttitor. Curabitur pretium rutrum turpis, at varius lacus viverra ac. Donec turpis magna, blandit eget sapien  consectetur, cursus interdum dolor.</p>
                <div class="col alignBtn">
                    <a class="buttons" href="./sabores">Menú</a>
                </div>
            </div>
        </div>
      </section>
      
      <!--Promociones-->
      <section>
          <div class="row justify-content-center ">
             <div class="col-sm-12 col-md-8 col-lg-8 mt-lg-4 p-5 pt-5">
                <div class="p-lg-5">
                 <h1 class="text-center">Promociones</h1>
                    <h3 class="text-center">Enterate de nuestros descuentos</h3>
                    <p class="text-center mx-lg-5 px-lg-5">Suscríbete a nuestro newsletter para obtener más información acerca de nuestras promociones.</p>
                    <!--Formulario de promociones-->
                    <form id="newsletter">                
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <input type="text" class="form-control  formStyle" name="email" placeholder="Correo electrónico"/>
                        </div>
                    </div>                    

                    <div class="row form-group justify-content-center">
                        <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                            <button style="text-center" type="submit" class="formBtn">Suscribirse</button>
                        </div>
                    </div>

                </form>
                </div>
             </div>
             <div class="col-sm-12 col-md-4 col-lg-4">
                 <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/img04-min.jpg" alt="Promotions">
             </div>
          </div>
      </section>
    
    <?php get_footer(); ?>
