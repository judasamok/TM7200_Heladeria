<?php 
    get_header();
?>

<section class="headerColorPromotions">
    <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-5 col-md-5 marginLogo">
            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Logo">
         </div>
      </div>
    </div>

    <div class="container headerMargin">
        <div class="row justify-content-center">
            <div class="col-sm'12 col-4-lg col-4-md col-4-sm mt-4">
                <h1 class="text-center">Promociones</h1>                
            </div>
            <div class="">
                <img class="img-fluid iconHeader" src="<?php bloginfo('template_directory'); ?>/assets/img/icon04-min.png" alt="Icon Contactos">
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/img18-min.png" alt="first promotion">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 mt-lg-4 p-5">
           <h1 class="text-center">Disfruta de lo mejor<br>Todos los lunes</h1>
                    <h3 class="text-center">Obtene un gran descuento todos los lunes</h3>
                    <p class="text-center mx-lg-5 px-lg-5">Para obtener más información acerca de nuestras promociones inscribete en nuestro newsletter al final de la página.</p>
         </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 mt-lg-4 p-5">
           <h1 class="text-center">Disfruta<br>comiendo</h1>
                    <h3 class="text-center">No hay como el sabor de nuestros helados</h3>
                    <p class="text-center mx-lg-5 px-lg-5">Para obtener más información acerca de nuestras promociones inscribete en nuestro newsletter al final de la página.</p>
         </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/img30-min.png" alt="first promotion">

        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/img21-min.png" alt="first promotion">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 mt-lg-4 p-5">
           <h1 class="text-center">Las chispas con chocolate son las preferidas</h1>
                    <h3 class="text-center">Tenes que probarlas</h3>
                    <p class="text-center mx-lg-5 px-lg-5">Para obtener más información acerca de nuestras promociones inscribete en nuestro newsletter al final de la página.</p>
         </div>
    </div>
</section>

<section>
    <div>
        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/img20-min.png" alt="Img Nosotros">
    </div>
</section>

<!--<section class="parallaxPromotions" id="imgParallaxPromotions">
    <div class="container-fluid">
           <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-5 pt-5">
              <div class="parallaxSize">
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section>
     <div class="container my-5">
          <div class="row">
             <div class="col">
                <div class="col">
                    <h1 class="text-center">Inscribete</h1>
                    <h3 class="text-center">Enterate de nuestros descuentos</h3>
                    <p class="text-center mx-lg-5 px-lg-5">Suscríbete a nuestro newsletter para obtener más información acerca de nuestras promociones.</p>
                </div>
                <!--Formulario de promociones-- >
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
             
             <div class="col">
                 <div class="col">
                    <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/img22-min.png" alt="Promotions">
                </div>
             </div>
        </div> 
    </div>
</section> -->

<section>
    <div class="row justify-content-center ">
             <div class="col-sm-12 col-md-6 col-lg-6 mt-lg-4 pt-lg-5">
                 <h1 class="text-center">Inscribete</h1>
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
             <div class="col-sm-12 col-md-6 col-lg-6">
                 <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/assets/img/img22-min.png" alt="Promotions">
             </div>
          </div>
</section>

<?php 
    get_footer();
?>