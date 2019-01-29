
<?php get_header(); ?>  

     <!--Sección arriba-->
    <section class="img-fluid bgImgHeader">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-5 col-md-5 marginLogo">
               <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Logo">
            </div>
         </div>
      </div>
    </section>
     
     <!--Nosotros-->
     <section>
         <div class="row no-gutters">
             <div class="col-md-8 col-sm-8 paddingText">
                 <h1 class="text-center">Nuestra<br>Historia</h1>
                    <h3 class="text-center">El principio de todo</h3>
                    <p class="text-center">Ut auctor luctus leo eleifend porttitor. Curabitur <br>pretit auctor luctus leo eleifend porttitor. Curabitur <br> pretium rutrum turpis, at varius lacus viverra ac. <br> Donec turpis magna, blandit eget sapien consectetur, <br> cursus interdum dolor. Pellentesque habitant morbi <br> tristique senectus et netus et malesuada fames ac <br> turpis egestas.</p>
                    <div class="col alignBtn">
                    <a class="buttons " href="./about-us">Leer más</a>
                </div>
             </div>
             <div class="col-md-4">
                 <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/img05-min.jpg" alt="About Us">
             </div>
          </div>
     </section>
     
     <!--Productos-->
     <section>
         <div class="container-fluid bgImgHome textAlignImg">
            <div class="col-md-8">
               <h1 class="text-center">Nuestros<br>Productos</h1>
               <h3 class="text-center">Deliciosa variedad de helados</h3>
               <div class="col alignBtn">
                  <a class="buttons buttonProducts" href="./products">Ver más</a>
            </div>
        </div>
    </div>
     </section>
     
      <!--Sabores-->
      <section>
         <div class="row no-gutters">
            <div class="col-lg-7 col-md-7 col-sm-7 bgCS">
                
            </div>
            <div class="col-md-4 padding">
                <h1 class="text-center">Sabores</h1>
                <h3 class="text-center">Conoce todos nuestros sabores</h3>
                <p class="text-center">Ut auctor luctus leo eleifend porttitor. <br> Curabitur pretit auctor luctus leo <br> eleifend porttitor. Curabitur pretium <br> rutrum turpis, at varius lacus viverra ac. <br> Donec turpis magna, blandit eget sapien <br> consectetur, cursus interdum dolor.</p>
                <div class="col alignBtn">
                    <a class="buttons" href="./sabores">Menú</a>
                </div>
            </div>
        </div>
      </section>
      
      <!--Promociones-->
      <section>
          <div class="row no-gutters">
             <div class="col-md-8 paddingText">
                 <h1 class="text-center">Promociones</h1>
                    <h3 class="text-center">Enterate de nuestros descuentos</h3>
                    <p class="text-center">Suscríbete a nuestro newsletter para <br> obtener más información acerca de <br> nuestras promociones.</p>
                    <!--Formulario de promociones-->
                    <form id="newsletter">                
                    <div class="form-group row">
                        <div class="col-md-4">
                            <input type="text" class="form-control  formStyle" name="email" placeholder="Correo electrónico"/>
                        </div>
                    </div>                    

                    <div class="row form-group">
                        <div class="col text-center">
                            <button type="submit" class="formBtn">Suscribirse</button>
                        </div>
                    </div>

                </form>
             </div>
             <div class="col-md-4">
                 <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/img04-min.jpg" alt="Promotions">
             </div>
          </div>
      </section>
    
    <?php get_footer(); ?>
