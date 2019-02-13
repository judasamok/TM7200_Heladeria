
<?php 
    get_header();
?>

<section class="headerColorContactUs">

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
        <div class="row justify-content-center">
            <div class="col-4-lg col-4-md col-4-sm mt-4 mb-2">
                <h1 class="text-center">Marco<br>Alimenticio</h1>
            </div>
        </div><!--end row-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-6">
                <form id="contactUs-Sales-Form">
                    <div class="row form-group">
                        <div class="col">
                            <input type="text" class="form-control formContactUs" name="name" placeholder="Nombre completo" />
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <div class="col">
                            <input type="text" class="form-control  formContactUs" name="email" placeholder="Correo electrónico" />
                        </div>
                    </div>                    

                    <div class="row form-group">
                        <div class="col text-center">
                            <button type="submit" class="formBtnContactUs">Enviar</button>
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