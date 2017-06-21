
<?php
/*
16-06-17
*/
require('fpdf.php');
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetAutoPageBreak(TRUE,10);
$width =($pdf->GetPageWidth()/3)-7;
$height = 10;
$tamFuente = 8;
$hTitulo = 5;
$hEspacio = 7;
/*Encabezado*/
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,$height, texto('Cédula 0 - Currículum Vitae Resumido'),1,1,'C',TRUE);
$pdf->SetFillColor(204,204,204);
$pdf->SetTextColor(0,0,0);
/*Separación entre Sección*/ 
$pdf->Ln(2); 
/*Primera sección*/
$height = 15;
$pdf->SetFont('Arial','',$tamFuente);
$pdf->Cell($width*2,$height, texto('IMPORTANTE: El CV debe limitarse a una extensión máxima de dos(2) cuartillas, no se'),1,0,'L');
$pdf->Cell($width/2,$height,texto('Número de profesor'),1,0,'C',TRUE);
$pdf->Cell($width/2,$height,texto(' '),1,1,'L');
$pdf->Text($pdf->GetX()+22,$pdf->GetY()-2,texto("aceptarán documentos adicionales."));
$pdf->Text($pdf->GetPageWidth()-$width-5,$pdf->GetY()-2,"(de 001 a999)");
/*Separación entre Sección*/ 
$pdf->Ln($hTitulo); 
/*Nombre*/
$pdf->SetFont('Arial','B',$tamFuente);
$pdf->Cell($width,$hTitulo,texto('Apellido Paterno'),1,0,'C', TRUE);
$pdf->Cell($width,$hTitulo,texto('Apellido Materno'),1,0,'C', TRUE);
$pdf->Cell($width,$hTitulo,texto('Nombre'),1,1,'C', TRUE);
$pdf->SetFont('Arial','',$tamFuente);
$pdf->Cell($width,$hEspacio ,texto(' '),1,0,'C');
$pdf->Cell($width,$hEspacio ,texto(' '),1,0,'C');
$pdf->Cell($width,$hEspacio,texto(' '),1,1,'C');
/*Separación entre Sección*/ 
$pdf->Ln(); 
/*Datos*/
$pdf->Cell($width/5,$hTitulo,texto('Edad'),1,0,'C', TRUE);
$pdf->SetFont('Arial','B',7);
$pdf->Cell($width-$width/5,$hTitulo,texto('Fecha de nacimiento (dd/mm/aaaa)'),1,0,'C', TRUE);
$pdf->SetFont('Arial','B',$tamFuente);
$pdf->Cell($width*2,$hTitulo,texto('Puesto en la institución'),1,1,'C', TRUE);
$pdf->SetFont('Arial','',$tamFuente);
$pdf->Cell($width/5,$hEspacio ,texto(' '),1,0,'C');
$pdf->Cell($width-$width/5,$hEspacio ,texto(' '),1,0,'C');
$pdf->Cell($width*2,$hEspacio ,texto(' '),1,1,'C');
/*Separación entre Sección*/ 
$pdf->Ln(); 
/*Formación Académica*/
$pdf->SetFont('Arial','B',$tamFuente);
$pdf->Text($pdf->GetX(),$pdf->GetY(),texto('Formación académica'));
$pdf->Ln(1); 
$pdf->Cell($width/5,$hTitulo,texto('Nivel'),1,0,'C', TRUE);
$pdf->Cell($width-$width/5,$hTitulo,texto('Nombre (incluir especialidad)'),1,0,'C', TRUE);
$pdf->Cell($width,$hTitulo,texto('Institución y país'),1,0,'C', TRUE);
$pdf->Cell($width/2,$hTitulo,texto('Año de obtención'),1,0,'C', TRUE);
$pdf->Cell($width/2,$hTitulo,texto('Cédula Profesional'),1,1,'C', TRUE);
$string = array("L", "E", "M","D");
for ($i = 0; $i < 4; $i++) {
    $pdf->SetFont('Arial','B',$tamFuente);
    $pdf->Cell($width/5,$hEspacio , $string[$i],1,0,'C', TRUE);
    $pdf->SetFont('Arial','',$tamFuente);
    $pdf->Cell($width-$width/5,$hEspacio ,texto(' '),1,0,'C');
    $pdf->Cell($width,$hEspacio ,texto(' '),1,0,'C');
    $pdf->Cell($width/2,$hEspacio,texto(' '),1,0,'C');
    $pdf->Cell($width/2,$hEspacio,texto(' '),1,1,'C');
}
/*Separación entre Sección*/ 
$pdf->Ln(); 
/*Capacitación Docente*/
$pdf->SetFont('Arial','B',$tamFuente);
$pdf->Text($pdf->GetX(),$pdf->GetY(),texto('Capacitación docente'));
$pdf->Ln(1); 
$pdf->Cell($width,$hTitulo,texto('Tipo de Capacitación'),1,0,'C', TRUE);
$pdf->Cell($width,$hTitulo,texto('Institución y país'),1,0,'C', TRUE);
$pdf->Cell($width/2,$hTitulo,texto('Año de obtención'),1,0,'C', TRUE);
$pdf->Cell($width/2,$hTitulo,texto('Horas'),1,1,'C', TRUE);
$pdf->SetFont('Arial','',$tamFuente);
for ($i = 0; $i < 1; $i++) {
    $pdf->Cell($width,$hEspacio ,texto(' '),1,0,'C');
    $pdf->Cell($width,$hEspacio ,texto(' '),1,0,'C');
    $pdf->Cell($width/2,$hEspacio,texto(' '),1,0,'C');
    $pdf->Cell($width/2,$hEspacio,texto(' '),1,1,'C');
}
/*Separación entre Sección*/ 
$pdf->Ln(); 
/*Actialización Disciplinar*/
$pdf->SetFont('Arial','B',$tamFuente);
$pdf->Text($pdf->GetX(),$pdf->GetY(),texto('Actualización disciplinar'));
$pdf->Ln(1);
$pdf->Cell($width,$hTitulo,texto('Tipo de Actualización'),1,0,'C', TRUE);
$pdf->Cell($width,$hTitulo,texto('Institución y país'),1,0,'C', TRUE);
$pdf->Cell($width/2,$hTitulo,texto('Año de obtención'),1,0,'C', TRUE);
$pdf->Cell($width/2,$hTitulo,texto('Horas'),1,1,'C', TRUE);
$pdf->SetFont('Arial','',$tamFuente);
for ($i = 0; $i < 1; $i++) {
    $pdf->Cell($width,$hEspacio ,texto(' '),1,0,'C');
    $pdf->Cell($width,$hEspacio ,texto(' '),1,0,'C');
    $pdf->Cell($width/2,$hEspacio,texto(' '),1,0,'C');
    $pdf->Cell($width/2,$hEspacio,texto(' '),1,1,'C');
}
/*Separación entre Sección*/ 
$pdf->Ln(); 
/*Gestión Académica*/
$pdf->SetFont('Arial','B',$tamFuente);
$pdf->Text($pdf->GetX(),$pdf->GetY(),texto('Gestión académica'));
$pdf->Ln(3); 
$pdf->SetFont('Arial','',7);
$pdf->Text($pdf->GetX(),$pdf->GetY(),texto('Anotar las actvidades o puestos académicos desempeñados en orden cronológico decreciente: primero la más reciente (o actual) y de último la más antigüa.'));
$pdf->SetFont('Arial','B',$tamFuente);
$pdf->Ln(1); 
$pdf->Cell($width,$hTitulo,texto('Actividad o puesto'),1,0,'C', TRUE);
$pdf->Cell($width,$hTitulo,texto('Institución'),1,0,'C', TRUE);
$pdf->Cell($width/2,$hTitulo,texto('De: (mes y año)'),1,0,'C', TRUE);
$pdf->Cell($width/2,$hTitulo,texto('A: (mes y año)'),1,1,'C', TRUE);
$pdf->SetFont('Arial','',$tamFuente);
for ($i = 0; $i < 4; $i++) {
    $pdf->Cell($width,$hEspacio ,texto(' '),1,0,'C');
    $pdf->Cell($width,$hEspacio ,texto(' '),1,0,'C');
    $pdf->Cell($width/2,$hEspacio,texto(' '),1,0,'C');
    $pdf->Cell($width/2,$hEspacio,texto(' '),1,1,'C');
}
/*Separación entre Sección*/ 
$pdf->Ln(); 
/*Productos*/ 
$pdf->SetFont('Arial','B',$tamFuente);
$pdf->Text($pdf->GetX(),$pdf->GetY(),texto('Productos académicos relevantes en los últimos cinco(5) años, relajándose con el PE')); 
$pdf->SetFont('Arial','',7); 
$pdf->MultiCell(0,$hTitulo,texto('Incluir los datos relevantes, tales como: para publicaciones título, autor (es), donde se publicó o presentó, fecha de publicación o presentación, etc.; para patentes o desarrollos tecnológicos, tipo, número de registro, alcance,etc.'),0,'J');
$pdf->SetFont('Arial','B',$tamFuente); 
$pdf->Cell($width/5,$hTitulo,texto('Núm'),1,0,'C', TRUE); 
$pdf->Cell((($width/5)*14),$hTitulo,texto('Descripción del producto académico '),1,1,'C', TRUE); 
$pdf->SetFont('Arial','',$tamFuente); 
for ($i = 0; $i < 1; $i++) {
    $pdf->Cell($width/5,$hEspacio ,texto(' '),1,0,'C'); 
    $pdf->Cell(($width/5)*14,$hEspacio ,texto(' '),1,1,'C'); 
}
/*Separación entre Sección*/ 
$pdf->Ln(); 
/*Experiencia profesional (no académica)*/ 
$pdf->SetFont('Arial','B',$tamFuente); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),texto('Experiencia profesional (no académica)')); 
$pdf->Ln(3); 
$pdf->SetFont('Arial','',7); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),texto('Anotar las actvidades o puestos desempeñados en orden cronológico decreciente: primero la más reciente (o actual) y de último la más antigüa.')); 
$pdf->SetFont('Arial','B',$tamFuente); 
$pdf->Ln(1); 
$pdf->Cell($width,$hTitulo,texto('Actividad o puesto'),1,0,'C', TRUE); 
$pdf->Cell($width,$hTitulo,texto('Organización o empresa'),1,0,'C', TRUE); 
$pdf->Cell($width/2,$hTitulo,texto('De: (mes y año'),1,0,'C', TRUE);  
$pdf->Cell($width/2,$hTitulo,texto('A: (mes y año)'),1,1,'C', TRUE); 
$pdf->SetFont('Arial','',$tamFuente); 
for ($i = 0; $i < 1; $i++) {
    $pdf->Cell($width,$hEspacio ,texto(""),1,0,'C'); 
    $pdf->Cell($width,$hEspacio ,texto(""),1,0,'C'); 
    $pdf->Cell($width/2,$hEspacio,texto(""),1,0,'C'); 
    $pdf->Cell($width/2,$hEspacio,texto(""),1,1,'C'); 
}
 
/*Separación entre Sección*/ 
$pdf->Ln(); 
           
/*Experiencia en diseño ingenieril */ 
$pdf->SetFont('Arial','B',$tamFuente); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),texto('Experiencia en diseño ingenieril') ); 
$pdf->Ln(3);
$pdf->SetFont('Arial','',7); 
$pdf->Text($pdf->GetX()-1,$pdf->GetY(),texto('Anotar el tipo de experiencia en diseño, en lugar donde se realizó, el número de años y, en su caso, así alguna otra información relevante .')); 
$pdf->SetFont('Arial','B',$tamFuente); 
$pdf->Ln(1); 
$pdf->Cell($width*2,$hTitulo,texto('Organismo'),1,0,'C', TRUE); 
$pdf->Cell($width/2,$hTitulo,texto('Periodo(años)'),1,0,'C', TRUE); 
$pdf->Cell($width/2,$hTitulo,texto('Nivel de experiencia '),1,1,'C', TRUE); 
$pdf->SetFont('Arial','',$tamFuente); 
for ($i = 0; $i < 1; $i++) {
    $pdf->Cell($width*2,$hEspacio ,texto(' ') ,1,0,'C'); 
    $pdf->Cell($width/2,$hEspacio ,texto(' ') ,1,0,'C'); 
    $pdf->Cell($width/2,$hEspacio,texto(' ') ,1,1,'C');
}
           
/*Separación entre Sección*/ 
$pdf->Ln(); 
/*Logros profesionales (no académicos) relevantes en los últimos cinco (5) años, relacionados con el PE */ 
$pdf->SetFont('Arial','B',$tamFuente); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),texto('Logros profesionales (no académicos) relevantes en los últimos cinco (5) años, relacionados con el PE')); 
$pdf->Ln(3);
$pdf->SetFont('Arial','',7); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),texto('Incluir los datos relevantes, tales como: título, autor(es), nombre del logro, relevancia, donde se realizó, etc .')); 
$pdf->SetFont('Arial','B',$tamFuente); 
$pdf->Ln(1);
$pdf->Cell(0,$hTitulo,texto('Descripción del logro'),1,1,'C', TRUE); 
$pdf->SetFont('Arial','',$tamFuente); 
$pdf->MultiCell(0, $hEspacio ,texto(""), 1 , 'C ',FALSE);
           
/*Separación entre Sección */
$pdf->Ln($hTitulo); 
           
/* Membresía o participación en Colegios, Cámaras, asociaciones científicas, o algún otro tipo de organismo profesional  */ 
$pdf->SetFont('Arial','B',$tamFuente); 
$pdf->Text($pdf->GetX(),$pdf->GetY()+3,texto('Membresía o participación en Colegios, Cámaras, asociaciones científicas, o algún otro tipo de organismo profesional  ')); 
$pdf->Ln($hTitulo); 
$pdf->SetFont('Arial','',7); 
$pdf->MultiCell(0,$hTitulo-2,texto('Anotar el nombre del organismo, el tipo de membresía o participación, el número de años y, en su caso, alguna otra información relevante .'),0,'I'); 
$pdf->SetFont('Arial','B',$tamFuente); 
$pdf->Ln(1); 
$pdf->Cell($width*2,$hTitulo,texto('Organismo'),1,0,'C', TRUE); 
$pdf->Cell($width/2,$hTitulo,texto('Periodo(años)'),1,0,'C', TRUE); 
$pdf->Cell($width/2,$hTitulo,texto('Nivel de participación'),1,1,'C', TRUE); 
$pdf->SetFont('Arial','',$tamFuente); 
for ($i = 0; $i < 1; $i++) {
    $pdf->Cell($width*2,$hEspacio ,texto(' '),1,0,'C'); 
    $pdf->Cell($width/2,$hEspacio ,texto(' '),1,0,'C'); 
    $pdf->Cell($width/2,$hEspacio,texto(' '),1,1,'C'); 
}
 
/*Separación entre Sección*/ 
$pdf->Ln(); 
 
/*Premios, distinciones o reconocimientos recibidos */ 
 $pdf->SetFont('Arial','B',$tamFuente); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),texto('Premios, distinciones o reconocimientos recibidos')); 
$pdf->Ln(3);
$pdf->SetFont('Arial','',7); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),texto('Incluir los datos relevantes, nombre del premio, organismo que lo otorga, motivos por los que se otorga, etc .')); 
$pdf->SetFont('Arial','B',$tamFuente); 
$pdf->Ln(1); 
$pdf->Cell(0,$hTitulo,texto('Descripción del premio o reconocimiento'),1,1,'C', TRUE); 
$pdf->SetFont('Arial','',$tamFuente); 
$pdf->MultiCell(0, $hEspacio ,texto(""), 1 , 'C ',FALSE); 
           
/*Separación entre Sección */ 
$pdf->Ln($hTitulo);  
/*participación en el análisis o actualización del PE, o en actividades extra curriculares relacionadas con el PE  */ 
$pdf->SetFont('Arial','B',$tamFuente); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),texto('Participación en el análisis o actualización del PE, o en actividades extra curriculares relacionadas con el PE')); 
$pdf->Ln(1); 
$pdf->SetFont('Arial','',7); 
$pdf->MultiCell(0,$hTitulo-2,texto('Con un máximo de 200 palabras, reseñe cuál ha sido su participación en actividades relevantes del PE, tales como: diseño el PE, diseño de asignatura(s), del PE, análisis de indicados del PE, participación en grupos de mejora continua del PE, etc.; en actividades extra curriculares relacionadas con el PE,; o en ambos tipos de actividades.'),0,'J'); 
$pdf->Ln(1); 
$pdf->MultiCell(0, $hEspacio ,texto(""), 1 , 'C ',FALSE);
 
$pdf->Output();
function texto(String $s)
{
    $text=utf8_decode($s);
    return $text;
}
function titulo(String $s)
{
    $text=utf8_decode($s);
    return $text;
}
?>