<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include_once('views/modules/cdnsheader.html');
  ?>
  <link rel="stylesheet" href="views/css/home.css">
  <title>Certificado</title>
</head>

<body>
  <?php
  include_once('views/modules/navegacion_inicio.html');
  ?>
  <section class="container-event container">
  <div class="card card-own p-sm-4 p-md-4">
    <div class="card-body">
      <h2 class="text-center">Certificado</h2>
      <img _ngcontent-serverapp-c111="" src="views/assets/animation/certification.svg"
        class="d-none d-md-block" style="margin: 3rem auto;">
      <form action="" method="POST" class="d-flex flex-column align-items-center">
        <div class="col-12 col-md-9 col-lg-6 mb-3">
          <label for="name">Seleccionar año</label>
          <input type="text" class="form-control" id="year" name="certification_name" placeholder="Nombre" autocomplete="off" required pattern="^[A-Za-z0-9\\s]+$" maxlength="30">
        </div>
        <div class="col-12 col-md-9 col-lg-6 mb-3">
          <!-- Definir estandar de tipos de documentos  -->
          <label for="email">Documento de identidad</label>
          <input type="text" class="form-control" id="document" name="certification_document" placeholder="DNI" autocomplete="off" required pattern="^[0-9\\s]+$" minLength="8" maxlength="8">
        </div>
        <input type="submit" id="certificationSave" class="next btn btn-primary-own mx-2" value="Obtener" />
      </form>
    </div>
  </div>
  </section>
  <?php
  include_once('views/modules/footer.html');
  include_once('views/modules/cdnsfooter.html');
  ?>
</body>

</html>