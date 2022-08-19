<?php 
require('../librerias/fpdf.php');
include_once '../configuraciones/Base_Datos.php';
$conexionBD=BD::crearInstancia();

function agregarTexto($pdf,$texto,$x,$y,$align='L',$fuente,$size=10,$r=0,$g=0,$b=0){
$pdf->SetFont($fuente,"",$size);	
$pdf->SetXY($x,$y);
$pdf->SetTextColor($r,$g,$b);
$pdf->Cell(0,10,$texto,0,0,$align);
}
function AgregarImagen($pdf, $imagen, $x, $y) {
    $pdf->Image($imagen,$x,$y,0);	
    }
$idcurso=(isset($_GET['idcurso']))?$_GET['idcurso']:"";
$idalumno=(isset($_GET['idalumno']))?$_GET['idalumno']:"";
$sql="SELECT alumnos.nombre, alumnos.apellidos, cursos.nombre_curso  
from alumnos,cursos where alumnos.id=:idalumno and cursos.id=:idcurso";
 $consulta=$conexionBD->prepare($sql);
 $consulta->bindParam(':idalumno',$idalumno);
 $consulta->bindParam(':idcurso',$idcurso);
 $consulta->execute();
 $alumno=$consulta->fetch(PDO::FETCH_ASSOC);

 $pdf = new FPDF("L","mm",array(254,194));
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
AgregarImagen($pdf,'../src/certificadoss.jpg', 0,0);
agregarTexto($pdf,ucwords(utf8_decode($alumno['nombre']." ".$alumno['apellidos'])),60,70, 'L', "Helvetica",30,0,84,115);
agregarTexto($pdf,$alumno['nombre_curso'],-250,115, 'C', 'Helvetica',20,0,84,115);
agregarTexto($pdf,date("02/02/2022"),-350,155, 'C', 'Helvetica',11,0,84,115);

$pdf->Output();
 

?>