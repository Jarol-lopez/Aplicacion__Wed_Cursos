<?php 
include_once '../configuraciones/Base_Datos.php';
$conexionBD=BD::crearInstancia();
print_r($_POST);
$sql="SELECT * FROM alumnos";
$listaAlumnos=$conexionBD->query($sql);
$alumnos=$listaAlumnos->fetchAll();
print_r($alumnos);


?>