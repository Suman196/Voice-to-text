 <?php
// $server = "localhost"
// $username = "root"
// $password = ""

// $con = mysqli_connect($server,$username,$password);

// $sql = INSERT INTO `conv` (`text`) VALUES ('hello');  -->




if(!empty($_POST['final']))
  $text = $_POST['final'];

  require("fpdf/fpdf.php");
  $pdf = new FPDF;
  $pdf->AddPage();
  
  $pdf->SetFont("Arial","",16);
  $pdf->Cell(0,10,$text,1,1);
  $pdf->output();
    
?>