<?php
//INSERT INTO `cursos` (`id`, `nombre_curso`) VALUES (NULL, 'Aplicacion_Wed_Cursos');
include_once '../configuraciones/Base_Datos.php';
$conexionBD=BD::crearInstancia();

$id=isset($_POST['id'])?$_POST['id']:'';
$nombre=isset($_POST['nombre'])?$_POST['nombre']:'';
$apellido=isset($_POST['apellido'])?$_POST['apellido']:'';
$correo=isset($_POST['correo'])?$_POST['correo']:'';
$contraseña=isset($_POST['contraseña'])?$_POST['contraseña']:'';
$accio=isset($_POST['accio'])?$_POST['accio']:'';

if ($accio!=''){
    switch($accio){
        case 'Inscribirse':
            $sql="INSERT INTO login_usuario (id, nombre,apellido,correo,contraseña) values (NULL,:nombre,:apellido,:correo,:contraseña)";

            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':nombre',$nombre,':Apellido',$apellido,'correo',$correo,'contraseña',$contraseña);
            $consulta->execute();

            echo $sql;
        break;
     
    }
}

$consulta=$conexionBD->prepare("SELECT * FROM login_usuario");
$consulta->execute();
$listaCursos=$consulta->fetchAll();


?>