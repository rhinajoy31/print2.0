<?php
require '../vendor/autoload.php'; 
use Dompdf\Dompdf;
use Dompdf\Options;

// Initialize Dompdf with options
$options = new Options();
$options->set('isRemoteEnabled', true);
$options->set('isPhpEnabled', true);
$options->set('chroot',realpath(''));
$dompdf = new Dompdf($options);

// Create HTML content
$html = "
<!DOCTYPE html>
<html>attendant_type
    <head>
    <title>Ecopy</title>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.title = document.title.toUpperCase();
            });
        </script>
        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 12px;
                text-transform: uppercase;
            }
            .container {
                width: 7.5in; 
                height: 13in; 
                border: 2px solid darkblue;
            }
            .page-break {
                page-break-after: always;
            }
            .content {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .header_center {
                font-size: 11px;
                text-align: center;
                margin-top: 3%;
            }
            .header_center_mid {
                font-size: 12px;
                text-align: center;
            }
            .header_center_bellow {
                font-size: 20px;
                text-align: center;
                font-weight: bold;
                letter-spacing: 2px;
            }
            .horizontal_linem1 {
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 6%;
            }
            .labeld1 {
                font-size: 13px;
                text-transform: normal;
                text-align: left;
                position: absolute;
                top: 7%;
                left: 1%
            }
            .labellined1 {
                color: darkblue;
                position: absolute;
                top: 6%;
                left: 8%;
            }
            .outputd1 {
                font-size: 13px;
                text-transform: uppercase;
                position: absolute;
                top: 5.8%;
                left: 9%
            }
            .labeld2 {
                font-size: 13px;
                text-transform: normal;
                text-align: left;
                position: absolute;
                top: 8.5%;
                left: 1%
            }
            .labellined2 {
                color: darkblue;
                position: absolute;
                top: 7.7%;
                left: 13.5%;
            }
            .outputd2 {
                font-size: 13px;
                text-transform: uppercase;
                position: absolute;
                top: 7.5%;
                left: 15%
            }
            .vertical_lined1 {
                width: 1px; 
                height: 56px; 
                background-color: darkblue;
                position: absolute; 
                left: 69%;
                top: 6%;
            }
            .labeld3 {
                font-size: 12px;
                text-transform: normal;
                color: black;
                position: absolute;
                top: 7%;
                left: 70%; 
            }
            .outputd3 {
                font-size: 18px;
                color: gray;
                position: absolute;
                top: 7%;
                left: 77%; 
            }
            .horizontal_lined1 {
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 10.5%;
            }
            .labeld4 {
                font-size: 12px;
                text-transform: normal;
                color: black;
                position: absolute;
                top:11%;
                left: 1%; 
            }
            .labeld5 {
                font-size: 12px;
                text-transform: normal;
                color: darkblue;
                position: absolute;
                top:11%;
                left: 15%; 
            }
            .outputd4 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 12%;
                left: 11%; 
            }
            .labeld6 {
                font-size: 12px;
                text-transform: normal;
                color: darkblue;
                position: absolute;
                top:11%;
                left: 37%; 
            }
            .outputd5 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 12%;
                left: 35%; 
            }
            .labeld7 {
                font-size: 12px;
                text-transform: normal;
                color: darkblue;
                position: absolute;
                top:11%;
                left: 60%; 
            }
            .outputd7 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 12%;
                left:58%; 
            }
            .vertical_lined2 {
                width: 1px; 
                height: 56px; 
                background-color: darkblue;
                position: absolute; 
                left: 73%;
                top: 10.5%;
            }
            .labeld8 {
                font-size: 12px;
                text-transform: normal;
                color: black;
                position: absolute;
                top:11%;
                left: 73.5%; 
            }
            .outputd8 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 12%;
                left:80%; 
            }
            .horizontal_linem2 {
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 15%;
            }
    </style>
    </head>
        <body>
         <div class='page'>
                <div class='content'>
                    <div class='container'>
                    <div class='header_center'>Republic of the Philippines</div>
                    <div class='header_center_mid'>OFFICE OF THE CIVIL REGISTRAR GENERAL</div>
                    <div class='header_center_bellow'>CERTIFICATE OF DEATH</div>
                    <div class='horizontal_linem1'></div> 
                    <div class='labeld1'>Province</div>
                        <p class='labellined1'>__________________________________________________________________</p>
                        <p class='outputd1'>CAVITE</p>
                    <div class='labeld2'>City/Municipality</div>
                        <p class='labellined2'>____________________________________________________________</p>
                        <p class='outputd2'>Mendez</p>
                    <div class='vertical_lined1'></div>
                    <div class='labeld3'>Registry No.</div>
                        <p class='outputd3'>2003-1</p></div>
                    <div class='horizontal_lined1'></div> 
                    <div class='labeld4'>1.NAME</div>
                    <div class='labeld5'>(First)</div>
                        <p class='outputd4'>JOHN MARK</p></div>
                    <div class='labeld6'>(Middle)</div>
                        <p class='outputd5'>DELA CRUZ</p></div>
                    <div class='labeld7'>(Last)</div>
                        <p class='outputd7'>DELA CRUZ</p></div>
                    <div class='vertical_lined2'></div>
                    <div class='labeld8'>2.SEX(Male/Female)</div>
                        <p class='outputd8'>Male</p></div>
                    <div class='horizontal_linem2'></div> 

                  </body>
                    </html>";
                    // Load HTML into Dompdf
                    $dompdf->loadHtml($html);
                    
                    $dompdf->setPaper('legal', 'portrait');
                    
                    // Render the PDF
                    $dompdf->render();
                    
                    $dompdf->setPaper([0, 0, 612, 1008]); 
                    
                    // Output the generated PDF
                    $dompdf->stream("ecopy", ["Attachment" => false]);
                    // End output bufferin
                    ?>