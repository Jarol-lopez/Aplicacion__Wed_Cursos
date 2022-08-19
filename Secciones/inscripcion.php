
<?php  ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body background ="../images/Loginn.jpg">

  <div class="container">
    <div class="row">
    <div class="col-md-4">
        
      </div>
      <div class="col-md-5">
       
        <div class="card">
            <div class="card-header">
                Inscripcion
            </div>
            <div class="card-body">
                <div class="mb-3">
                  <label for="" class="form-label">Nombre</label>
                  <input type="text"
                    class="form-control" 
                    name="nombre" 
                    id="nombre" 
                    aria-describedby="helpId" placeholder="NOMBRE"></small>
                    <small id="helpId" class="form-text text-muted"></small>
                  <div class="mb-3">
                  <label for="" class="form-label">Apellido</label>
                  <input type="text"
                    class="form-control" 
                    name="apellido" 
                    id="apellido" 
                    aria-describedby="helpId" placeholder="APELLIDO">
                  <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Correo Electronico</label>
                  <input type="text"
                    class="form-control" 
                    name="correo" 
                    id="correo" 
                    aria-describedby="helpId" placeholder="CORREO">
                  <small id="helpId" class="form-text text-muted"></small>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">CONTRASEÑA</label>
                  <input type="password"
                    class="form-control" name="contraseña" id="contraseña" aria-describedby="helpId" placeholder="password">
                  <small id="helpId" class="form-text text-muted">Escriba su CONTRASEÑA </small>

                </div>
                <form action="../Secciones/login.php" method="post">
                  <button type="submit" class="btn btn-primary">Inscribirse </button>
                  </form>
                  
                  
                  
                  
            </div>
            
            
            </div>
        </div>
    
</div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>
<?PHP INCLUDE('../templates/pie_pagina.php'); ?>