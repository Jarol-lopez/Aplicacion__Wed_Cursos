<?PHP INCLUDE('../templates/cabeceras.php'); ?>
<?php include('../secciones/cursos.php') ?>



<div class="row">
                   <div class="col-12">
                    <div class="row">


<div class="col-5">

<form action="" method="post">

<div class="card">
    <div class="card-header">
       Cursos Matriculados
    </div>
    <div class="card-body">
    <div class="mb-3">
<label for="" class="form-label">ID</label>
<input type="text"
  class="form-control" 
  name="id" 
  id="id" 
  value="<?php echo $id; ?>"
  aria-describedby="helpId" placeholder="ID">
</div>
<div class="mb-3">
<label for="nombre_curso" class="form-label">nombre</label>
<input type="text"
  class="form-control" 
  name="nombre_curso" 
  id="nombre_curso" 
  value="<?php echo $nombre_curso; ?>" 
  aria-describedby="helpId" placeholder="Nombre del curso">
</div>

<div class="btn-group" role="group" aria-label="">
    <button type="submit" name="accion" value ="Agregar" class ="btn btn-primary">Agregar</button>
    <button type="submit" name="accion" value ="Editar" class="btn btn-warning">Editar</button>
    <button type="submit" name="accion" value ="Borrar" class="btn btn-danger">Borrar</button>
</div>



       </div>

</div>


</form>
</div>
<div class="col-md-7">

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones_realizadas</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaCursos as $curso ) {?>
          <tr>
                <td > <?php echo $curso['id'];?> </td>
                <td><?php echo $curso['nombre_curso'];?></td>
                <td>
                <form action="" method="post">
                  <input type="hidden" name="id" id="accion" value="<?php echo $curso["id"];?>" />
                    <input class="btn btn-info" type="submit" name="accion" value="seleccionar" />
                </form>

                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
</div>


</div>
    </div>

<?PHP INCLUDE('../templates/pie_pagina.php'); ?>