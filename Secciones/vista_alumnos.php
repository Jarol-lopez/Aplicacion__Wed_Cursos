<?PHP INCLUDE('../templates/cabeceras.php'); ?>
<?php include('../secciones/alumnos.php') ?>
<div class="row">
<div class="col-5">

<form action="" method="post">
    <div class="card">
        <div class="card-header">
            Alumnos
        </div>
        <div class="card-body">
            <div class="mb-3">
              <label for="" class="form-label">ID</label>
              <input type="text"
                class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID">
             </div>
             <div class="mb-3">
               <label for="" class="form-label">Nombre</label>
               <input type="text"
                 class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del Alumno">
             </div>
             <div class="mb-3">
               <label for="" class="form-label">Apellidos</label>
               <input type="text"
                 class="form-control" name="Apellido" id="Apellido" aria-describedby="helpId" placeholder="Escriba su Apellido">
              
             </div>
             <div class="mb-3">
               <label for="cursos[]" class="form-label">Cursos Del Alumno:</label>
               <select class="form-control" name="cursos[]" id="ListaCursos">
                 <option>Selecciones una opcion</option>
                 <option>Curso 1</option>
                 <option>Curso 2</option>
               </select>
             </div>
             <div class="btn-group" role="group" aria-label="">
                <button type="submit" class="btn btn-primary">Agregar</button>
                <button type="submit" class="btn btn-warning">Editar</button>
                <button type="submit" class="btn btn-danger">Borrar</button>
             </div>
        </div>
        <div class="card-footer text-muted">
          
        </div>
    </div>
</form>
</div>
<div class="col-7">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($alumnos as $alumno): ?>
            <tr>
              <td><?php echo $alumno['id'];?></td>
              <td></td>
              <td>Seleccionar</td>
            
            <tr>
            <?php endforeach; ?>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    
</div>
</div>


<?PHP INCLUDE('../templates/pie_pagina.php'); ?>