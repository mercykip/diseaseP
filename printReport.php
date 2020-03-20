<?php 
session_start();
require_once("Database/Db_functions.php");
function fetch_data(){
  $con = new connect();
  $predicted_disease=$_SESSION['predicted_disease'];
  // var_dump($users[0]['name']);exit;
    $output = '';
    // $query1="SELECT * FROM filter_symptoms WHERE disease_name='$predicted_disease' LIMIT 6";
    $query1="SELECT * FROM filter_symptoms WHERE disease_name='$predicted_disease' LIMIT 8";
    $symptomps= $con->getData($query1);

    $getdoc="SELECT doctors.* FROM doctors JOIN disease_doctor ON disease_doctor.doctor_id=doctors.id JOIN disease ON disease.disease_id=disease_doctor.disease_id WHERE disease.disease_name='$predicted_disease' GROUP BY doctors.id";
   $doctor= $con->getData($getdoc);
   
    foreach($symptomps as $patient)
    {
     $output .= '
      <tr>  
          <td>'.$patient['symptom_name'].'</td>
      </tr>
    ';
    }
      $output .= '
      <tr>
          <td>'.'<b>You are likely suffering from</b> : '.$predicted_disease.'</td>
      </tr>
    ';
      foreach($doctor as $doc)
    {
     $output .= '
      <tr>  
          <td>'.'<b>Doctor Details</b> <br>'.' Name: '.$doc['name'].'<br> Email: '.$doc['email'].'<br> Contact: '.$doc['contact'].' <br>Address: '.$doc['address'].'</td>
      </tr>
    ';
    }
    return $output;
}
 if(isset($_POST["create_pdf"]))
{
  require_once('tcpdf/tcpdf/tcpdf.php');
   $users=$_SESSION['user'];
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('');
$pdf->SetTitle('Patient Report');
$pdf->SetSubject('');
$pdf->SetKeywords('');

$pdf->SetHeaderData('','Patient Report');

$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

$pdf->SetFont('helvetica', 'B', 20);

$pdf->AddPage();

$pdf->Write(0, 'Patient Report', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 16);
   $content='';
   $content.='
    <table cellspacing="1" cellpadding="1" border="1">
      <thead>
      <tr>
           <th><b>'.$users[0]['name'].' Your Symptoms Are :</b></th>
      </tr>
      </thead>
   ';
   $content.=fetch_data();
   $content.='</table>'; 
   $pdf->writeHTML($content);
   ob_end_clean();
   $pdf->Output("report.pdf","I");
}
 ?>
<div class="container" style="width: 700px;">
  <h3 align="center">Patient Report</h3>
   <br />
    <div class="table-responsive">
    <table class=cellspacing="0" cellpadding="1" border="1">
    <thead>
    <tr>
         <th>Your Symptoms Are :</th>
    </tr>
    </thead>
    <?php echo fetch_data();?>
  </table>
</div>
</div>