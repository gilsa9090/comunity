<?php
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// add a page
$pdf->AddPage();



// set font
$pdf->SetFont('helvetica', '', 12);

$pdf->SetFillColor(212, 105, 126);

// Set border color to same as background color
$pdf->SetDrawColor(212, 105, 126);

$pdf->RoundedRect(55, 10, 100, 140, 5, '1111', 'DF');

// set some text
$html = '
<style>
    .card {
        padding: 10px;
        justify-content: center;
        align-items: center;
    }
    
    .name {
        font-size: 20px;
        font-weight: bold;
        margin-top: 20px;
        text-align: center;
    }
    
    .id-number {
        font-size: 14px;
        margin-top: 10px;
        text-align: center;
        color: #fff;
    }

    .logo h3 {
      font-size: 18px;
      color: #f4f4f3;
      font-style: italic;
      font-weight: bold;
      margin-top: 20px;
    }
</style>


<div class="card">
  <div align="center">
  <img src="assets/image/'.$nama->image.'" alt="Your Image" style="width: 150; height: 150;">
  </div>
  <div class="name" style="color: #fff;">'.$nama->nama.'</div>
      <div class="id-number">'.$nama->divisi_id.'</div>
      <div class="id-number">'.$nama->deskripsi.'</div>
      <div class="logo" align="center"><h3>.Arsmagia</h3></div>
  </div>
  
    
';




// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('id_card.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
