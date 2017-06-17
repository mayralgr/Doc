/*
Mayra Lucero García Ramírez
Facultad de Ingeniería UASLP
15/06/17

*/

<?php
require('fpdf.php');
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetAutoPageBreak(TRUE,10);

//$width = 0;
$width =($pdf->GetPageWidth()/3)-7;
$height = 10;
$tamFuente = 8;
$hTitulo = 5;
$hEspacio = 7;

/*Encabezado*/
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',16);
$text=utf8_decode('Cédula 0 - Currículum Vitae Resumido');
$pdf->Cell(0,$height, $text,1,1,'C',TRUE);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
/*Separación entre Sección*/ 
$pdf->Ln(2); 

/*Primera sección*/
$height = 15;
$pdf->SetFont('Arial','',$tamFuente);
$text=utf8_decode('IMPORTANTE: El CV debe limitarse a una extensión máxima de dos(2) cuartillas, no se');// El CV debe limitarse a una extensión máxima de dos(2) cuartillas,no se aceptaran documentos adicionales.
$pdf->Cell($width*2,$height, $text,1,0,'L');
$text=utf8_decode('Número de profesor');
$pdf->Cell($width/2,$height,$text,1,0,'C');
$pdf->Cell($width/2,$height,"",1,1,'L');
$pdf->Text($pdf->GetX()+22,$pdf->GetY()-2,"aceptaran documentos adicionales.");
$pdf->Text($pdf->GetPageWidth()-$width-5,$pdf->GetY()-2,"(de 001 a999)");

/*Separación entre Sección*/ 
$pdf->Ln($hTitulo); 

/*Nombre*/

$text=utf8_decode('Apellido Paterno');
$pdf->Cell($width,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Apellido Materno');
$pdf->Cell($width,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Nombre');
$pdf->Cell($width,$hTitulo,$text,1,1,'C');
$text=utf8_decode(' ');
$pdf->Cell($width,$hEspacio ,$text,1,0,'C');
$pdf->Cell($width,$hEspacio ,$text,1,0,'C');
$pdf->Cell($width,$hEspacio,$text,1,1,'C');

/*Separación entre Sección*/ 
$pdf->Ln(); 

/*Datos*/
$text=utf8_decode('Edad');
$pdf->Cell($width/5,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Fecha de nacimiento (dd/mm/aaaa)');
$pdf->SetFont('Arial','',7);
$pdf->Cell($width-$width/5,$hTitulo,$text,1,0,'C');
$pdf->SetFont('Arial','',$tamFuente);
$text=utf8_decode('Puesto en la institución');
$pdf->Cell($width*2,$hTitulo,$text,1,1,'C');
$text=utf8_decode(' ');
$pdf->Cell($width/5,$hEspacio ,$text,1,0,'C');
$pdf->Cell($width-$width/5,$hEspacio ,$text,1,0,'C');
$pdf->Cell($width*2,$hEspacio ,$text,1,1,'C');

/*Separación entre Sección*/ 
$pdf->Ln(); 

/*Formación Académica*/
$text=utf8_decode('Formación académica');
$pdf->Text($pdf->GetX(),$pdf->GetY(),$text);
$pdf->SetY($pdf->GetY()+1);
$text=utf8_decode('Nivel');
$pdf->Cell($width/5,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Nombre (incluir especialidad)');
$pdf->Cell($width-$width/5,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Institución y país');
$pdf->Cell($width,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Año de obtención');
$pdf->Cell($width/2,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Cédula Profesional');
$pdf->Cell($width/2,$hTitulo,$text,1,1,'C');
$text=utf8_decode(' ');

$string = array("L", "E", "M","D");

for ($i = 0; $i < 4; $i++) {
    $pdf->Cell($width/5,$hEspacio , $string[$i],1,0,'C');
    $pdf->Cell($width-$width/5,$hEspacio ,$text,1,0,'C');
    $pdf->Cell($width,$hEspacio ,$text,1,0,'C');
    $pdf->Cell($width/2,$hEspacio,$text,1,0,'C');
    $pdf->Cell($width/2,$hEspacio,$text,1,1,'C');
}

/*Separación entre Sección*/ 
$pdf->Ln(); 

/*Capacitación Docente*/
$text=utf8_decode('Capacitación docente');
$pdf->Text($pdf->GetX(),$pdf->GetY(),$text);
$pdf->SetY($pdf->GetY()+1);
$text=utf8_decode('Tipo de Capacitación');
$pdf->Cell($width,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Institución y país');
$pdf->Cell($width,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Año de obtención');
$pdf->Cell($width/2,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Horas');
$pdf->Cell($width/2,$hTitulo,$text,1,1,'C');
$text=utf8_decode(' ');

$pdf->Cell($width,$hEspacio ,$text,1,0,'C');
$pdf->Cell($width,$hEspacio ,$text,1,0,'C');
$pdf->Cell($width/2,$hEspacio,$text,1,0,'C');
$pdf->Cell($width/2,$hEspacio,$text,1,1,'C');


/*Separación entre Sección*/ 
$pdf->Ln(); 

/*Actialización Disciplinar*/
$text=utf8_decode('Actualización disciplinar');
$pdf->Text($pdf->GetX(),$pdf->GetY(),$text);
$pdf->SetY($pdf->GetY()+1);
$text=utf8_decode('Tipo de Actualización');
$pdf->Cell($width,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Institución y país');
$pdf->Cell($width,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Año de obtención');
$pdf->Cell($width/2,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Horas');
$pdf->Cell($width/2,$hTitulo,$text,1,1,'C');
$text=utf8_decode(' ');

$pdf->Cell($width,$hEspacio ,$text,1,0,'C');
$pdf->Cell($width,$hEspacio ,$text,1,0,'C');
$pdf->Cell($width/2,$hEspacio,$text,1,0,'C');
$pdf->Cell($width/2,$hEspacio,$text,1,1,'C');

/*Separación entre Sección*/ 
$pdf->Ln(); 

/*Gestión Académica*/
$text=utf8_decode('Gestión cadémica');
$pdf->Text($pdf->GetX(),$pdf->GetY(),$text);
$pdf->SetY($pdf->GetY()+3);
$text=utf8_decode('Anotar las actvidades o puestos académicos desempeñados en orden cronológico decreciente: primero la más reciente (o actual) y de último la más antigüa.');
$pdf->SetFont('Arial','',7);
$pdf->Text($pdf->GetX(),$pdf->GetY(),$text);
$pdf->SetFont('Arial','',$tamFuente);
$pdf->SetY($pdf->GetY()+1);
$text=utf8_decode('Tipo de Actualización');
$pdf->Cell($width,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Institución y país');
$pdf->Cell($width,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Año de obtención');
$pdf->Cell($width/2,$hTitulo,$text,1,0,'C');
$text=utf8_decode('Horas');
$pdf->Cell($width/2,$hTitulo,$text,1,1,'C');
$text=utf8_decode(' ');
for ($i = 1; $i <= 4; $i++) {
    $pdf->Cell($width,$hEspacio ,$text,1,0,'C');
    $pdf->Cell($width,$hEspacio ,$text,1,0,'C');
    $pdf->Cell($width/2,$hEspacio,$text,1,0,'C');
    $pdf->Cell($width/2,$hEspacio,$text,1,1,'C');
}

/*Separación entre Sección*/ 
$pdf->Ln(); 

/*Productos*/ 
$text=utf8_decode('Productos académicos relevantes en los últimos cinco(5) años, relajándose con el PE'); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),$text); 
//$pdf->SetY($pdf->GetY()+3); 
$text=utf8_decode('Incluir los datos relevantes, tales como: para publicaciones título, autor (es), donde se publicó o presentó, fecha de publicación o presentación, etc.; para patentes o desarrollos tecnológicos, tipo, número de registro, alcance,etc.'); 
$pdf->SetFont('Arial','',7); 
//$pdf->Text($pdf->GetX(),$pdf->GetY(),$text); 
$pdf->MultiCell(0,$hTitulo,$text,0,'J');
$pdf->SetFont('Arial','',$tamFuente); 
$text=utf8_decode('Núm'); 
$pdf->Cell($width/5,$hTitulo,$text,1,0,'C'); 
$text=utf8_decode('Descripción del producto académico '); 
$pdf->Cell((($width/5)*14),$hTitulo,$text,1,1,'C'); 
$text=utf8_decode(' '); 
$pdf->Cell($width/5,$hEspacio ,$text,1,0,'C'); 
$pdf->Cell(($width/5)*14,$hEspacio ,$text,1,1,'C'); 

/*Separación entre Sección*/ 
$pdf->Ln(); 

/*Experiencia profesional (no académica)*/ 
$text=utf8_decode('Experiencia profesional (no académica)'); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),$text); 
$pdf->SetY($pdf->GetY()+3); 
$text=utf8_decode('Anotar las actvidades o puestos desempeñados en orden cronológico decreciente: primero la más reciente (o actual) y de último la más antigüa.'); 
$pdf->SetFont('Arial','',7); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),$text); 
$pdf->SetFont('Arial','',$tamFuente); 
$pdf->SetY($pdf->GetY()+1); 
$text=utf8_decode('Actividad o puesto'); 
$pdf->Cell($width,$hTitulo,$text,1,0,'C'); 
$text=utf8_decode('Organización o empresa'); 
$pdf->Cell($width,$hTitulo,$text,1,0,'C'); 
$text=utf8_decode('De: (mes y año'); 
$pdf->Cell($width/2,$hTitulo,$text,1,0,'C');  
$text=utf8_decode('A: (mes y año)'); 
$pdf->Cell($width/2,$hTitulo,$text,1,1,'C'); 
$text=utf8_decode(' '); 
$pdf->Cell($width,$hEspacio ,$text,1,0,'C'); 
$pdf->Cell($width,$hEspacio ,$text,1,0,'C'); 
$pdf->Cell($width/2,$hEspacio,$text,1,0,'C'); 
$pdf->Cell($width/2,$hEspacio,$text,1,1,'C'); 
 
/*Separación entre Sección*/ 
$pdf->Ln(); 
           
/*Experiencia en diseño ingenieril */ 
$text=utf8_decode('Experiencia en diseño ingenieril'); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),$text); 
$pdf->SetY($pdf->GetY()+3); 
$text=utf8_decode('Anotar el tipo de experiencia en diseño, en lugar donde se realizó, el número de años y, en su caso, así alguna otra información relevante .'); 
$pdf->SetFont('Arial','',7); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),$text); 
$pdf->SetFont('Arial','',$tamFuente); 
$pdf->SetY($pdf->GetY()+1); 
$text=utf8_decode('Organismo'); 
$pdf->Cell($width*2,$hTitulo,$text,1,0,'C'); 
$text=utf8_decode('Periodo(años)'); 
$pdf->Cell($width/2,$hTitulo,$text,1,0,'C'); 
$text=utf8_decode('Nivel de experiencia '); 
$pdf->Cell($width/2,$hTitulo,$text,1,1,'C'); 
$text=utf8_decode(' '); 
$pdf->Cell($width*2,$hEspacio ,$text,1,0,'C'); 
$pdf->Cell($width/2,$hEspacio ,$text,1,0,'C'); 
$pdf->Cell($width/2,$hEspacio,$text,1,1,'C');
           
/*Separación entre Sección*/ 
$pdf->Ln(); 

/*Logros profesionales (no académicos) relevantes en los últimos cinco (5) años, relacionados con el PE */ 
$text=utf8_decode('Logros profesionales (no académicos) relevantes en los últimos cinco (5) años, relacionados con el PE'); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),$text); 
$pdf->SetY($pdf->GetY()+3); 
$text=utf8_decode('Incluir los datos relevantes, tales como: título, autor(es), nombre del logro, relevancia, donde se realizó, etc .'); 
$pdf->SetFont('Arial','',7); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),$text); 
$pdf->SetFont('Arial','',$tamFuente); 
$pdf->SetY($pdf->GetY()+1); 
$text=utf8_decode('Descripción del logro'); 
$pdf->Cell(0,$hTitulo,$text,1,1,'C'); 
$pdf->Cell(0,40,"",1,1,'C'); 
           
/*Separación entre Sección */
$pdf->Ln($hTitulo); 
           
/* Membresía o participación en Colegios, Cámaras, asociaciones científicas, o algún otro tipo de organismo profesional  */ 
$text=utf8_decode('Membresía o participación en Colegios, Cámaras, asociaciones científicas, o algún otro tipo de organismo profesional  '); 
$pdf->Text($pdf->GetX(),$pdf->GetY()+3,$text); 
$pdf->Ln($hTitulo); 
$text=utf8_decode('Anotar el nombre del organismo, el tipo de membresía o participación, el número de años y, en su caso, alguna otra información relevante .'); 
$pdf->SetFont('Arial','',7); 
$pdf->MultiCell(0,$hTitulo-2,$text,0,'I'); 
$pdf->SetFont('Arial','',$tamFuente); 
$pdf->SetY($pdf->GetY()+1); 
$text=utf8_decode('Organismo'); 
$pdf->Cell($width*2,$hTitulo,$text,1,0,'C'); 
$text=utf8_decode('Periodo(años)'); 
$pdf->Cell($width/2,$hTitulo,$text,1,0,'C'); 
$text=utf8_decode('Nivel de participación  '); 
$pdf->Cell($width/2,$hTitulo,$text,1,1,'C'); 
$text=utf8_decode(' '); 
$pdf->Cell($width*2,$hEspacio ,$text,1,0,'C'); 
$pdf->Cell($width/2,$hEspacio ,$text,1,0,'C'); 
$pdf->Cell($width/2,$hEspacio,$text,1,1,'C'); 
 
/*Separación entre Sección*/ 
$pdf->Ln(); 
 
/*Premios, distinciones o reconocimientos recibidos */ 
$text=utf8_decode('Premios, distinciones o reconocimientos recibidos'); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),$text); 
$pdf->SetY($pdf->GetY()+3); 
$text=utf8_decode('Incluir los datos relevantes, nombre del premio, organismo que lo otorga, motivos por los que se otorga, etc .'); 
$pdf->SetFont('Arial','',7); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),$text); 
$pdf->SetFont('Arial','',$tamFuente); 
$pdf->SetY($pdf->GetY()+1); 
$text=utf8_decode('Descripción del premio o reconocimiento'); 
$pdf->Cell(0,$hTitulo,$text,1,1,'C'); 
$pdf->Cell(0,40,"",1,1,'C'); 
           
/*Separación entre Sección */ 
$pdf->Ln($hTitulo);  

/*participación en el análisis o actualización del PE, o en actividades extra curriculares relacionadas con el PE  */ 
$text=utf8_decode('Participación en el análisis o actualización del PE, o en actividades extra curriculares relacionadas con el PE'); 
$pdf->Text($pdf->GetX(),$pdf->GetY(),$text); 
$text=utf8_decode('Con un máximo de 200 palabras, reseñe cuál ha sido su participación en actividades relevantes del PE, tales como: diseño el PE, diseño de asignatura(s), del PE, análisis de indicados del PE, participación en grupos de mejora continua del PE, etc.; en actividades extra curriculares relacionadas con el PE,; o en ambos tipos de actividades.'); 
$pdf->SetFont('Arial','',7); 
$pdf->MultiCell(0,$hTitulo-2,$text,0,'J'); 
$pdf->SetFont('Arial','',$tamFuente); 
$pdf->SetY($pdf->GetY()+1); 
$pdf->Cell(0,80,"",1,1,'C'); 
 
$pdf->Output();
?>