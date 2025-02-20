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
                border: 2px solid  rgb(248, 82, 159);
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
            background-color:  rgb(248, 82, 159);
            position: absolute;
            top: 6%;
            }
            .labelm1 {
                font-size: 13px;
                text-transform: normal;
                text-align: left;
                position: fixed;
                top: 8%;
                left: 1%
            }
            .labellinem1 {
                color: rgb(248, 82, 159);
                position: absolute;
                top: 7%;
                left: 8%;
            }
            .labelm2{
            font-size: 13px;
            text-transform: normal;
            text-align: left;
            position: fixed;
            top: 10%;
            left: 1%
            }
            .labellinem2 {
            color: rgb(248, 82, 159);
            position: absolute;
            top: 9%;
            left: 14%;
            }
            .outputm1 {
            font-size: 13px;
            text-transform: uppercase;
            position: absolute;
            top: 7%;
            left: 10%
            }
            .outputm2 {
            font-size: 13px;
            text-transform: uppercase;
            position: absolute;
            top: 9%;
            left: 15%
            }
            .vertical_linem1 {
            width: 1px; 
            height: 70px; 
            background-color: rgb(248, 82, 159);
            position: absolute; 
            left: 63%;
            top: 6%;
            }
             .labelm3 {
            font-size: 12px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 7%;
            left: 64%; 
            }
            .outputm3 {
            font-size: 18px;
            color: gray;
            position: absolute;
            top: 7%;
            left: 77%; 
            }
            .horizontal_linem2 {
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 11.5%;
            }
            .vertical_linem2 {
            width: 1.3px; 
            height: 510px; 
            background-color: rgb(248, 82, 159);
            position: absolute; 
            left: 10%;
            top: 11.5%;
            }   
            .vertical_linem3 {
            width: 1.3px; 
            height: 510px; 
            background-color: rgb(248, 82, 159);
            position: absolute; 
            left: 55%;
            top: 11.5%;
            }   
            .labelm4 {
            font-size: 12px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 12%;
            left: 28%; 
            }
             .labelm5 {
            font-size: 12px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 12%;
            left: 28%; 
            }

       </style>
    </head>
        <body>
         <div class='page'>
                <div class='content'>
                    <div class='container'>
                    <div class='header_center'>Republic of the Philippines</div>
                    <div class='header_center_mid'>OFFICE OF THE CIVIL REGISTRAR GENERAL</div>
                    <div class='header_center_bellow'>CERTIFICATE OF LIVE MARRIAGE</div>
                    <div class='horizontal_linem1'></div> 
                    <div class='labelm1'>Province</div>
                        <p class='labellinem1'>___________________________________________________________</p>   
                        <p class='outputm1'>Mendez</p>
                    <div class='labelm2'>City/Municipality</div>
                        <p class='labellinem2'>_____________________________________________________</p>    
                        <p class='outputm2'>Cavite</p>
                    <div class='vertical_linem1'></div>
                    <div class='labelm3'>Registry No.</div>
                        <p class='outputm3'>2003-1</p></div>
                    <div class='horizontal_linem2'></div> 
                    <div class='vertical_linem2'></div>
                    <div class='vertical_linem3'></div>
                    <div class='labelm4'>HUSBAND</div>
                    <div class='labelm4'WIFE</div>
                    
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