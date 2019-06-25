<?php
include('../fpdf.php');
$db = new PDO('mysql:host=localhost;dbname=pulilan','root','');
if(isset($_SESSION['lol'])&&!empty($_SESSION['lol'])){
                    $lol = $_SESSION['lol'];
                }
                global $lol;

class myPDF extends FPDF
{
// Page header
function Header()
{


    
    // Logo
    $size="100";  //(min 0, max 210; it's for making image big or small,
    $absx=(200-$size);
    $this->Image('logo.png',$absx,5,$size);
    $this->Ln(35);



// HEADER TITLE
    $this->SetFont('Times','B',15);
    $this->CELL(0,0,'Resident Religion Report',0,0,'C');
    $this->Ln();
    $this->SetFont('Times','',12);
    $this->Cell(0,14,'',0,0,'C');
    $this->Ln(5);

 
// FOR DATE
        $this->SetX(50);
        $this->SetFont('Times', 'I', 10);
        date_default_timezone_set('UTC');
        $Date=date('m-d-Y');
        $this->Cell(0, 5, 'Date: '.$Date, 0, 'R', 0);
        $this->Ln(10);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Times','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}


function headerTable(){
  ;
 $this->SetFont('Times','B',12, True, 0);
 $this->Cell(40,10,'ID',1,0,'C');
 $this->Cell(40,10,' Fullname ',1,0,'C');
 $this->Cell(40,10,' Barangay ',1,0,'C');
 $this->Cell(40,10,' Religion',1,0,'C');
 $this->Cell(40,10,'Number of Family',1,0,'C');
  $this->Cell(40,10,' Register in Registrar',1,0,'C');
   $this->Cell(40,10,' Skills',1,0,'C');
  
 $this->Ln();

}
function viewTable($db){
    $this->SetFont('Times','',12);

      
    $stmt = $db->query('SELECT * from   resident_q ORDER BY user_id DESC');
    while($data = $stmt->fetch(PDO::FETCH_OBJ)){
    $this->Cell(40,10,$data->user_id,1,0,'L');
    $this->Cell(40,10,$data->name,1,0,'L');
    $this->Cell(40,10,$data->brgy_location,1,0,'L');
    $this->Cell(40,10,$data->religion,1,0,'L');
    $this->Cell(40,10,$data->no_fam_house,1,0,'L');
    $this->Cell(40,10,$data->registered_civil,1,0,'L');
    $this->Cell(40,10,$data->skills,1,0,'L');
    $this->Ln(10);

  }
// TOTAL RECORD COUNT
          $conn=mysqli_connect("localhost","root","","pulilan");
          // Check connection
          if (mysqli_connect_errno())
          {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          $sql="SELECT count(*) from resident_q where type = 'resident'";
          $result=mysqli_query($conn,$sql);
          $row=mysqli_fetch_array($result);
          // echo "$row[0]";
                 $this->SetFont('Times','B',12);
                 $this->Cell(195,12, 'Total: '.$row[0] ,0, 'L',0);
          mysqli_close($conn);
}
} 


// Instanciation of inherited class

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L'); // LANDSCAPE PRINT
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->SetFont('Times','',12);
//for($i=1;$i<=40;$i++)
    //$pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output();