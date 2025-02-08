<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Initialize Dompdf with options
$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);

// Fetch data (simulating as if coming from a database or form submission)

// Create HTML content
$html = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Certificate of Live Marriage</title>
    <style>
     .body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 7.5in; /* Legal paper width in pixels */
            height: 13in; /* Legal paper height in pixels */
            border: 2px solid rgb(248, 82, 159);
        }
        .page-break {
            page-break-after: always;
        }
        .content {
            position: absulote;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .header {
            color:rgb(248, 82, 159);
            text-align: center;
            font-weight: bold;
            font-size: 12px;
            margin-bottom: 10px;
            text-transform: uppercase;
            margin-top: 40px; /* Mas mataas ang value, mas bababa */
}
        .sub-header {
            text-align: center;
            font-size: 14px;
            margin-bottom: 10px;
            color:rgb(248, 82, 159); 
              margin-top: -10px;
                font-weight: bold;
        }
            .header2 {
            text-align: center;
            font-size: 22px;
            margin-bottom: 10px;
            color:rgb(248, 82, 159);
            font-weight: bold;
             margin-top: -10px;
               font-weight: bold;
}
           .Linea {
    margin-bottom: 10px;
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 77px;
    left: 1px;
      font-weight: bold;
}

.label1m{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 105px;
    left: 10px;
     font-size: 12px;
     font-weight: bold;
}
     .outputm1a{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 125px;
    left: 10px;
     font-size: 12px;
     font-weight: bold;
}
   .outputm1b{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 105px;
    left: 550px;
     font-size: 12px;
     font-weight: bold;
}
       .outputm1c{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 130px;
    left: 1px;
     font-weight: bold;
}
     .vertical-line1 {
            width: 2px; /* Thickness of the line */
            height: 50px; /* Length of the line */
            background-color: rgb(248, 82, 159);
            position: absolute; /* Keeps it inside the container */
            left: 73%; /* Adjust horizontal positioning */
            top: 95px; /* Adjust vertical positioning */
            
        }
             .label2m{
    margin-bottom: 10px;
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 150px;
    left: 230px;
     font-size: 14px;
     font-weight: bold;
}
                 .outputm2a{
    margin-bottom: 10px;
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 150px;
    left: 550px;
     font-size: 14px;
     font-weight: bold;
}
       .outputm2b{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 150px;
    left: 108px;
     font-weight: bold;
}
       .outputm2c{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 175px;
    left: 10px;
     font-weight: bold;
    font-size: 12px;
    display: block; /* Siguraduhin na block element ito */
    max-width:60px; /* I-adjust para bumaba sa susunod na linya */

}
     .outputm2c{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 175px;
    left: 10px;
     font-weight: bold;
    font-size: 12px;
    display: block; /* Siguraduhin na block element ito */
    max-width:60px; /* I-adjust para bumaba sa susunod na linya */

}
      .outputm2d{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 175px;
    left: 120px;
     font-weight: bold;
    font-size: 12px;
}
       .outputm2e{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 195px;
    left: 120px;
     font-weight: bold;
    font-size: 12px;
}
     .outputm2f{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 215px;
    left: 120px;
     font-weight: bold;
    font-size: 12px;
}
    .outputm2g{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 177px;
    left: 447px;
     font-weight: bold;
    font-size: 12px;
}
    .outputm2h{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 197px;
    left: 447px;
     font-weight: bold;
    font-size: 12px;
}
    .outputm2i{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 217px;
    left: 447px;
     font-weight: bold;
    font-size: 12px;
}
      .vertical-line2 {
            width: 2px; /* Thickness of the line */
            height: 300px; /* Length of the line */
            background-color: rgb(248, 82, 159);
            position: absolute; /* Keeps it inside the container */
            left: 60%; /* Adjust horizontal positioning */
            top: 150px; /* Adjust vertical positioning */
            
        }
            .vertical-line3 {
            width: 2px; /* Thickness of the line */
            height: 300px; /* Length of the line */
            background-color: rgb(248, 82, 159);
            position: absolute; /* Keeps it inside the container */
            left: 15%; /* Adjust horizontal positioning */
            top: 150px; /* Adjust vertical positioning */
            
        }

    </style>
    </head>
    <body>
     <div class='page'>
        <div class='content'>
        <div class='container'>
            <div class='header'>Republic of the Philippines</div>
            <div class='sub-header'>OFFICE OF THE CIVIL REGISTRAR GENERAL</div>
            <div class='header2'>CERTIFICATE OF MARRIAGE</div> 
              <div class='Linea'>__________________________________________________________________________________________</div>
            </div>
            
                                         <div class='section1m'> </div>
                                           <div class='label1m'> Province_______________________________________________________________________________</div>
                                              <div class='outputm1a'> City/Municipality_______________________________________________________________________</div>
                                                <div class='outputm1b'> Registry No.</div>
                                                 <div class='outputm1c'>__________________________________________________________________________________________</div>
                                                      <div class='vertical-line1'></div>
              </div>
                                                    <div class='section1m'> </div>
                                                      <div class='label2m'> HUSBAND</div>
                                                           <div class='outputm2a'> WIFE</div>
                                                             <div class='outputm2b'> _____________________________________________________________________________</div>
                                                              <div class='outputm2c'> 1.Name of Contracting Parties</div>
                                                                 <div class='outputm2d'>(First)____________________________________________</div>
                                                                   <div class='outputm2e'>(Middle)__________________________________________</div>
                                                                    <div class='outputm2f'>(Last)__________________________________________</div>
                                                                     <div class='outputm2g'>(First)______________________________________</div>
                                                                      <div class='outputm2h'>(Middle)____________________________________</div>
                                                                       <div class='outputm2i'>(Last)______________________________________</div>

                                                         <div class='vertical-line2'></div>
                                                             <div class='vertical-line3'></div>
              </div>
                </div>
                  </div>
                    </div>
                      </div>
                        </div>

</body>
</html>";




// Load HTML into Dompdf
$dompdf->loadHtml($html);

$dompdf->setPaper('legal', 'portrait');

// Render the PDF
$dompdf->render();

$dompdf->setPaper([0, 0, 612, 1008]); 

// Output the generated PDF
$dompdf->stream("birth_certificate.pdf", ["Attachment" => false]);
?>
