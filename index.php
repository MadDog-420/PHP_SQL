<?php
  include_once('utilities.php');
  include_once('db/database_utilities.php');
  $result = run_query();
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Manejo de base de datos</h3>
          <p>Listado</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <table>
                <thead>
                  <tr>
                    <th width="50">ID</th>
                    <th width="100">Nombre</th>
                    <th width="50">DNI</th>
                    <th>Dirección</th>
                    <th width="50">Teléfono</th>
                    <th>Correo</th>
                    <th width="150">Contraseña</th>
                    <th>Observaciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    while ($user = $result->fetch_assoc()){
                  ?>
                  <tr>
                      <td><?php echo $user['id']; ?></td>
                      <td><?php echo $user['nombre']; ?></td>
                      <td><?php echo $user['dni']; ?></td>
                      <td><?php echo $user['direccion']; ?></td>
                      <td><?php echo $user['telefono']; ?></td>
                      <td><?php echo $user['email']; ?></td>
                      <td><?php echo $user['password']; ?></td>
                      <td><?php echo $user['observaciones']; ?></td>
                  </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>