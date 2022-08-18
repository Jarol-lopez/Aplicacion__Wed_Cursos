<?php 
//INSERT INTO `cursos` (`id`, `nombre_curso`) VALUES (NULL, 'Aplicacion_Wed_Cursos');
include_once '../configuraciones/Base_Datos.php';
$conexionBD=BD::crearInstancia();


$id=isset($_POST['id'])?$_POST['id']:'';
$nombre=isset($_POST['nombre'])?$_POST['nombre']:'';
$apellidos=isset($_POST['apellidos'])?$_POST['apellidos']:'';

$cursos=isset($_POST['cursos'])?$_POST['cursos']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';

if ($accion!=""){
    switch($accion){
        case 'Agregar':
            $sql="INSERT INTO alumnos (id,nombre, apellidos) VALUES (NULL,:nombre,:apellidos)";

            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':nombre',$nombre);
            $consulta->bindParam(':apellidos',$apellidos);
            $consulta->execute();
            $idAlumno=$conexionBD->lastInsertId();

            foreach($cursos as $curso){
            $sql="INSERT INTO alumnos_cursos (id,idalumno, idcurso) VALUES (NULL,:idalumno,:idcurso)";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':idalumno',$idAlumno);
            $consulta->bindParam(':idcurso',$curso);
            $consulta->execute(); 
            }
            break;
            
            case 'seleccionar':
             echo "presiono seleccionar";
                $sql="SELECT * FROM alumnos WHERE id=:id";
                          $consulta=$conexionBD->prepare($sql);
                          $consulta->bindParam(":id",$id);
                          $consulta->execute(); 
                          $alumno=$consulta->fetch(PDO::FETCH_ASSOC);
                          $nombre=$alumno['nombre'];
                          $apellidos=$alumno['apellidos'];

                          $sql="SELECT cursos.id FROM alumnos_cursos
                           inner join cursos on cursos.id=alumnos_cursos.idcurso
                          WHERE alumnos_cursos.idalumno=:idalumno";  
                          $consulta=$conexionBD->prepare($sql);
                          $consulta->bindParam(':idalumno',$id);
                         $consulta->execute();   
                         $cursosAlumno=$consulta->fetch(PDO::FETCH_ASSOC);

                         foreach($cursosAlumno as $curso){
                           
                         }
            break;
            case 'Borrar':
                $sql="DELETE FROM alumnos WHERE id=:id";
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':id',$id);
                $consulta->execute();
                break;
        }
}


$sql=("SELECT * FROM alumnos");
$listaAlumnos=$conexionBD->query($sql);
$alumnos=$listaAlumnos->fetchAll();
foreach($alumnos as $clave =>$alumno){
    $sql="SELECT * FROM cursos WHERE id IN (SELECT idcurso FROM alumnos_cursos WHERE idalumno=:idalumno)";
    $consulta=$conexionBD->prepare($sql);
    $consulta->bindParam(':idalumno',$alumno['id']);
    $consulta->execute();
    $cursosAlumno=$consulta->fetchAll();
    $alumnos[$clave]['cursos']=$cursosAlumno;

}
$sql="SELECT * FROM cursos";
$listaCursos=$conexionBD->query($sql);
$cursos=$listaCursos->fetchAll();


?>