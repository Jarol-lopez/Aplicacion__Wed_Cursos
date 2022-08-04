<?php
//INSERT INTO `cursos` (`id`, `nombre_curso`) VALUES (NULL, 'Aplicacion_Wed_Cursos');
include_once '../configuraciones/Base_Datos.php';
$conexionBD=BD::crearInstancia();

$id=isset($_POST['id'])?$_POST['id']:'';
$nombre_curso=isset($_POST['nombre_curso'])?$_POST['nombre_curso']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';

if ($accion!=''){
    switch($accion){
        case 'Agregar':
            $sql="INSERT INTO cursos (id, nombre_curso) values (NULL,:nombre_curso)";

            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':nombre_curso',$nombre_curso);
            $consulta->execute();

            echo $sql;
        break;
        case 'Editar':
                $sql= "UPDATE cursos SET  nombre_curso='$nombre_curso' WHERE id=$id";
                echo $sql;
                break;
                case 'Borrar':
                    $sql= "DELETE FROM cursos WHERE id=$id";
                    echo $sql; 
                    break;
    }
}

$consulta=$conexionBD->prepare("SELECT * FROM cursos");
$consulta->execute();
$listaCursos=$consulta->fetchAll();


?>