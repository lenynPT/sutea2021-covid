<!DOCTYPE html>
<html lang="es">
<head>
    
    <?php
        include_once('views/modules/cdnsheader.html');
    ?>
    
    <title>Inscripcion</title>
</head>
<body>

    <?php
        include_once("views/modules/navegacion__.php");        
    ?>

    <div class="my-3"></div>
    <!-- Inscripción -->
    <div class="container container-event ">
    <div class="card card-own p-sm-4 p-md-4">
      <div class="card-body">
        <h2 class="text-center">Ficha de inscripción docente</h2>
        <p class="text-muted pb-4 text-center"></p>
        <form action="" method="POST" class="row" id="formInscription">
          <div class="col-12 col-md-6 col-lg-4 mb-3">
            <label for="document">Documento de identidad</label>
            <input type="text" class="form-control" id="document" name="inscription_document" placeholder="DNI" autocomplete="off"
              required 
              pattern="^[0-9\\s]+$"
              minLength="8"
              maxlength = "8"
              onkeyup="execute_traerinfo(this)" >
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-3">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="inscription_name" placeholder="Nombre" autocomplete="off"
              required 
              pattern="^[A-Za-z\\s]+${1,30}"
              maxlength = "30">
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-3">
            <label for="lastName">Apellido</label>
            <input type="text" class="form-control" id="lastName" name="inscription_lastName" placeholder="Apellido" autocomplete="off"
              required 
              pattern="^[A-Za-z0-9\\s]+${1,50}" 
              maxlength = "50">
          </div>
          <div class="col-6 col-md-6 col-lg-4 mb-3">
            <label for="phone">Nro. Teléfono</label>
            <input type="text" class="form-control" id="phone" name="inscription_phone" placeholder="Teléfono" autocomplete="off"
               
              pattern="^[0-9\\s]+$" 
              minLength="6"
              maxLength="9"
              >
          </div>
          <div class="col-6 col-md-6 col-lg-4 mb-3">
            <label for="email">Correo electronico</label>
            <input type="email" class="form-control" id="email" name="inscription_email" placeholder="email" autocomplete="off"
               
              pattern="/^\s@\"
              maxLength="20">
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-3">
            <label for="specialty">Especialidad</label>
            <input type="text" class="form-control" id="specialty" name="inscription_specialty" 
             
            placeholder="Especialidad" 
            autocomplete="off">
          </div>

          <!-- Arreglar -->
          <div class="col-12 col-md-6 col-lg-4 mb-3">
            <label for="ugelName">Ugel</label>
            <input type="text" class="form-control" id="ugelName" name="inscription_ugelName" 
             
            placeholder="Nombre ugel" 
            autocomplete="off">
          </div>
          <!-- fin -->

          <div class="col-12 col-md-6 col-lg-4 mb-3">
            <label for="operation">Número de operación</label>
            <input type="text" class="form-control" id="operation" name="inscription_operation" 
             
            placeholder="Número de operación" 
            autocomplete="off">
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-3">
            <label for="voucher">Voucher</label>
            <input
              id="imageImport"
              type="file"
              multiple="false"
              accept=".jpg, .jpeg, .png"
              class="mb-3 mt-3 file-import"
              
            >
          </div>
          <div class="d-flex justify-content-end">
            <input type="button" id="inscription_clear" class="next btn btn-secondary-own mx-2" value="Cancelar"/>
            <input type="submit" id="inscriptionSave" class="next btn btn-primary-own mx-2" value="Completar" onclick="execute_inscripcion(this);" />
          </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>


    <?php        
        include_once('views/modules/cdnsfooter.html');
    ?>
    <script src="./public/js/js_inscripcion.js"></script>

</body>
</html>