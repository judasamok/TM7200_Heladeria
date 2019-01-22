
<?php 
    get_header();
?>

<section class="headerColor">
       
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
                <h1 class="text-center">Ventas del Producto</h1>
            </div>
        </div><!--end row-->
        <div class="row justify-content-center">
            <div class="col-8">
                <form id="contactUs-Sales-Form">
                    <div class="row form-group">
                        <div class="col">
                            <input type="text" class="form-control formStyle" name="name" placeholder="Nombre completo" />
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <div class="col">
                            <input type="text" class="form-control  formStyle" name="email" placeholder="Correo electrónico" />
                        </div>
                    </div>

                    <div class="row">
                        <label class="col labelFormContactUs">Escoge la razón de la compra de nuestros productos</label>                        
                    </div>

                    <div class="form-group row">                        
                        <div class="col">
                            <select name="typeSale" id="typeSale" class="form-control  formStyle">
                                <option value="Negocio">Negocio</option>
                                <option value="Evento">Evento</option>
                                <option value="Personal">Personal</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col text-center">
                            <button type="submit" class="formBtn">Enviar</button>
                        </div>
                    </div>

                </form>
            </div><!--end col-12-->
        </div>
    </div><!--end container-->
</section>

<section>
    <div class="container">
        <div class="col-12-lg col-12-md col-12-sm">
            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/img/img29-min.jpeg" alt="Img Contact Us - Sales">
        </div>
    </div>
</section>

<?php 
    get_footer();
?>