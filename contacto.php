<?php include('layouts/header.php'); ?>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-upper">Contáctanos</span>
              <span class="section-heading-lower">lunes a viernes</span>
            </h2>
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
              <li class="list-unstyled-item list-hours-item d-flex">
                Domingos
                <span class="ml-auto">Cerrados</span>
              </li>
              
              <li class="list-unstyled-item list-hours-item d-flex">
                Lunes
                <span class="ml-auto">7:00 AM hasta 8:00 PM</span>
              </li>

              <li class="list-unstyled-item list-hours-item d-flex">
                Martes
                <span class="ml-auto">7:00 AM hasta 8:00 PM</span>
              </li>
              
              <li class="list-unstyled-item list-hours-item d-flex">
                Miercoles
                <span class="ml-auto">7:00 AM hasta 8:00 PM</span>
              </li>
              
              <li class="list-unstyled-item list-hours-item d-flex">
                Jueves
                <span class="ml-auto">7:00 AM hasta 8:00 PM</span>
              </li>
              
              <li class="list-unstyled-item list-hours-item d-flex">
                Viernes
                <span class="ml-auto">7:00 AM hasta 6:00 PM</span>
              </li>
              
              <li class="list-unstyled-item list-hours-item d-flex">
                Sábados
                <span class="ml-auto">Cerrados</span>
              </li>
            </ul>
            
            <p class="address mb-5">
              <em>
                <strong>Medios de contacto</strong> <br>
                <i class="fas fa-phone"></i> 809 - 368 - 6629 <br>
                <i class="fas fa-mobile-alt"></i> 829 - 560 - 4193 ó 849 - 751 - 1780 <br>
                <i class="fab fa-whatsapp"></i> 829 - 560 - 4193  (Asesor y Auditor General) <br>
                <i class="fas fa-envelope"></i> taxfilcoservice@gmail.com ó generalservicetfs@gmail.com <br>
              </em>    
            </p>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            
            <h2 class="section-heading mb-5">
              <span class="section-heading-upper"> Envíanos tus mensajes </span>
            </h2>

            <div style=" position: relative; z-index: 1;">

              <?php
                $dejo_un_campo_en_blanco = false;

                if($_POST)
                {
                  if($_POST['name'] != "" && $_POST['email'] != "" && $_POST['phone'] != "" && $_POST['message'] != "")
                  {
                    $name = strip_tags(htmlspecialchars($_POST['name']));
                    $email_address = strip_tags(htmlspecialchars($_POST['email']));
                    $phone = strip_tags(htmlspecialchars($_POST['phone']));
                    $message = strip_tags(htmlspecialchars($_POST['message']));
                    
                    $to = 'taxfilcoservice@gmail.com'; 
                    $email_subject = "Desde la pagina web:  $name";
                    $email_body = "Recibió un nuevo mensaje del formulario de contacto de su sitio web.\n\n"."Aqui están los detalles:\n\nNombre: $name\n\nCorreo: $email_address\n\nTelefono: $phone\n\nMensaje:\n$message";
                    $headers = "From: TaxfilcoService@Hostagor.com\n"; 
                    $headers .= "De: $email_address";   
                    mail($to,$email_subject,$email_body,$headers);
                    
                    echo "<script> swal( '¡Muy bien!', '¡Su mensaje ha sido enviado correctamente!', 'success') </script>";
                  }
                  else
                  {
                    $dejo_un_campo_en_blanco = true;
                  }
                }
              ?>

              <form action="" method="post">
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                  </div>
                  <input type="text" name="name" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required="true">
                </div>
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Correo</span>
                  </div>
                  <input type="email" name="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required="true">
                </div>
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Teléfono</span>
                  </div>
                  <input type="text" name="phone" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required="true">
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Mensaje</span>
                  </div>
                  <textarea class="form-control" name="message" aria-label="With textarea" required="true"></textarea>
                </div>
                <br><br>

                <button type="submit" class="btn btn-primary">ENVIAR MENSAJE</button>
              
              </form>

              <?php 
                if($dejo_un_campo_en_blanco)
                {
              ?>
                  <div class="alert alert-warning alert-dismissible fade show" style="margin-top:20px;" role="alert">
                    <strong>¡Disculpa!</strong>, al parecer que dejaste un campo importante vacio.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
              <?php 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include('layouts/footer.php'); ?>

  
