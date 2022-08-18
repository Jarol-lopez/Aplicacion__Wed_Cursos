<?PHP INCLUDE('../templates/cabeceras.php'); ?>
<?php include('../secciones/alumnos.php'); ?>

<div class="row">
  <div class="col-5">
    <form action="" method="post">

    <div class="card">
        <div class="card-header">
            Alumnos
        </div>
        <div class="card-body">

            <div class="mb-3">
              <label for="id" class="form-label">ID</label>
              <input type="text"
                class="form-control" name="id" value="<?php echo $id;?>"  id="id" aria-describedby="helpId" placeholder="ID">
             </div>
             <div class="mb-3">
               <label for="nombre" class="form-label">Nombre</label>
               <input type="text"
                 class="form-control" name="nombre" value="<?php echo $nombre;?>" id="nombre"  aria-describedby="helpId" placeholder="Nombre del Alumno">
             </div>

             <div class="mb-3">
               <label for="apellidos" class="form-label">Apellidos</label>
               <input type="text"
                 class="form-control" name="apellidos" value="<?php echo $apellidos;?>" id="apellidos"  aria-describedby="helpId" placeholder="Escriba su Apellido">
              
             </div>

             <div class="mb-3">
               <label for="" class="form-label">Cursos Del Alumno:</label>
               <select multiple class="form-control" name="cursos[]" id="listaCursos">
                 <option>Selecciones una opcion</option>
                 <?php foreach($cursos as $curso){ ?>
                 <option 
                 <?php
                 if(!empty($arregloCursos)):
                  if(in_array($curso['id'],$arregloCursos)):
                    echo 'selected';
                  endif;
                endif;
                ?>
                 value="<?php echo $curso['id'];?>"> 
                 <?php echo $curso['id'];?> - <?php echo $curso['nombre_curso'];?>
                </option>
                 <?php } ?>
               </select>
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
        <?php foreach( $alumnos as $alumno):?>
            <tr>
                <td> <?php echo $alumno['id'];?></td>
                <td><?php echo $alumno['nombre'];?> <?php echo $alumno['apellidos'];?> 

                <?php foreach($alumno["cursos"] as $curso){ ?>
                  <br/>
                  - <a href="certificado.php?idcurso=<?php echo $curso["id"]; ?>&idalumno=<?php echo $alumno["id"]; ?>">
                         <?php echo $curso["nombre_curso"]; ?></a><br/>
                  
                
                <?php } ?>
              </td>
                <td>
                <form action="" method="post">
                  <input type="hidden" name="id"  value="<?php echo $alumno["id"];?>" />
                    <input class="btn btn-info" type="submit" name="accion" value="seleccionar" />
                </form>
              </td>
                
            </tr>
            <?php endforeach; ?>
             
           </tbody>
     </table>
    
  </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/js/tom-select.complete.min.js"></script>
<script>new TomSelect('#listaCursos')

</script>
<?PHP INCLUDE('../templates/pie_pagina.php'); ?>