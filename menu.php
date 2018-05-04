
  <?php
require('FPDF/fpdf.php');
class PDF extends FPDF
{
//Pie de página
function Footer()
{
$this->SetY(-10);
$this->SetFont('Arial','I',8);
$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
//Creación del objeto de la clase heredada
$pdf=new PDF();
$pdf->AddPage();

$pdf->Image('IMG/logo.png',120,10, 'PNG');
$pdf->Ln(); 
$pdf->SetFont('Times','B',36);
$pdf->Cell(50,10,'Menu');
$pdf->Ln(); 
$pdf->SetFont('Times','B',12);
$pdf->Cell(50,5,'Producto',1,0,'C'); 
$pdf->Cell(50,5,'Precio',1,0,'C'); 
$pdf->Ln(); 
$pdf->SetFont('Times','',12);
$pdf->SetLineWidth(.0);
//Aquí escribimos lo que deseamos mostrar
mysql_connect("200.23.158.4","zv","zv11300054");
mysql_select_db("blackmonkey");
$consulta = mysql_query("SELECT * FROM menu");
while($resultado = mysql_fetch_array($consulta)){ 

$pdf->Cell(50,5,$resultado['Producto'],1,0,'C'); 
$pdf->Cell(50,5,$resultado['Precio'],1,0,'C'); 
$pdf->Ln(); 
}  
 
$pdf->Output();
 
?>   
