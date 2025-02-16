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
                border: 2px solid green;
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
            .horizontal_line1a {
                width: 99.5%; 
                height: 0.1%; 
                background-color: green;
                position: fixed;
                top: 6.8%;
            }
            .label1a {
                font-size: 13px;
                text-transform: normal;
                text-align: left;
                position: fixed;
                top: 8%;
                left: 1%
            }
            p.labelline1a {
                color: green;
                position: fixed;
                top: 7%;
                left: 8.9%
            }
            p.output1a {
                font-size: 13px;
                text-transform: uppercase;
                position: fixed;
                top: 7%;
                left: 15%
            }
            .label1b {
                font-size: 13px;
                text-transform: normal;
                font-size: 12px;
                position: fixed;
                top: 9.8%;
                left: 1%
            }
            p.labelline1b {
                color: green;
                position: fixed;
                top: 8.9%;
                left: 13.9%
            }
            p.output1b {
                font-size: 13px;
                position: fixed;
                text-transform: uppercase;
                top: 8.8%;
                left: 15%
            }
            .vertical_line1a {
                width: 1px; 
                height: 58px; 
                background-color: green;
                position: fixed; 
                left: 63%;
                top: 6.9%;
            }
            .label1c {
                font-size: 12px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 7%;
                left: 64%; 
            }
            p.output1c {
                font-size: 18px;
                color: gray;
                position: fixed;
                top: 7%;
                left: 77%; 
            }
            .horizontal_line1b {
                width: 99.5%; 
                height: 0.1%; 
                background-color: green;
                position: fixed;
                top: 11.5%;
            }
            .vertical_line1b {
                width: 1.3px; 
                height: 400px; 
                background-color: green;
                position: fixed; 
                left: 3.5%;
                top: 11.5%;
            }   
            .labelside1 {
                font-size: 15px;
                text-align: center;
                position: fixed;
                top: 16%;
                left: 1%;
            }
            .label2a {
                font-size: 11px;
                position: fixed;
                top: 11.6%;
                left: 4%;
            }
            .label2b {
                font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 11.6%;
                left: 17%;
            }
            p.output2a {
                font-size: 13px;
                position: fixed;
                color: black;
                top: 12.3%;
                left: 13%;
            }
            .label2c {
                font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 11.6%;
                left: 48%; 
            }
            p.output2b {
                font-size: 13px;
                position: fixed;
                color: black;
                top: 12.3%;
                left: 45%;
            }
            .label2d {
                font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 11.6%;
                left: 80%;
            }
            p.output2c {
                font-size: 13px;
                position: fixed;
                color: black;
                top: 12.3%;
                left: 78%;
            }
            .horizontal_line1c {
                width: 96%; 
                height: 0.1%; 
                background-color: green;
                position: fixed;
                top: 14.8%;
                left: 3.7%;
            }
            .label3a {
                font-size: 11px;
                position: fixed;
                top: 15%;
                left: 4%;
            }
            .label3b {
                font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 15%;
                left: 9%; 
            }
            p.output3a {
                font-size: 13px;
                text-transform: uppercase;
                position: fixed;
                color: black;
                top: 15.5%;
                left: 12%;
            }
            .vertical_line1c {
                width: 1px; 
                height: 40px; 
                background-color: green;
                position: fixed; 
                left: 30%;
                top: 14.9%;
            }
            .label3c {
                font-size: 11px;
                position: fixed;
                top: 15.1%;
                left: 31%;
            }
            .label3d {
                font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 15%;
                left: 50%; 
            }
            p.output3b {
                font-size: 13px;
                text-transform: uppercase;
                position: fixed;
                color: black;
                top: 15.5%;
                left: 51%;
            }
            .label3e {
                font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 15%;
                left: 68%; 
            }
            p.output3c {
                font-size: 13px;
                text-transform: uppercase;
                position: fixed;
                color: black;
                top: 15.5%;
                left: 66%;
            }
            .label3f {
                font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 15%;
                left: 86%; 
            }
            p.output3d {
                font-size: 13px;
                text-transform: uppercase;
                position: fixed;
                color: black;
                top: 15.5%;
                left: 86%;
            }
            .horizontal_line1d {
                width: 96%; 
                height: 0.1%; 
                background-color: green;
                position: fixed;
                top: 18%;
                left: 3.7%;
            }
            .label4a {
                font-size: 11px;
                position: fixed;
                top: 18.1%;
                left: 4%;
            }
            .label4b {
                font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 18.1%;
                left: 20%; 
            }
            p.output4a {
                font-size: 13px;
                text-transform: uppercase;
                position: fixed;
                color: black;
                top: 19.3%;
                left: 10%;
            }
            .label4c {
                font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 18.1%;
                left: 50%; 
            }
            p.output4b {
                font-size: 13px;
                text-transform: uppercase;
                position: fixed;
                color: black;
                top: 19.3%;
                left: 48%;
            }
            .label4d {
                font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 18.1%;
                left: 80%; 
            }
            p.output4c {
                font-size: 13px;
                text-transform: uppercase;
                position: fixed;
                color: black;
                top: 19.3%;
                left: 78%;
            }
            .horizontal_line1e {
                width: 96%; 
                height: 0.1%; 
                background-color: green;
                position: fixed;
                top: 21.8%;
                left: 3.7%;
            }
            .label5a {
                font-size: 11px;
                position: fixed;
                top: 22%;
                left: 4%;
            }
            .label5b {
                font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 22.8%;
                left: 7%; 
            }
            p.labelline2a {
                color: green;
                position: fixed;
                top: 24%;
                left: 5%
            }
            p.output5a {
                font-size: 13px;
                text-transform: uppercase;
                position: fixed;
                color: black;
                top: 23.5%;
                left: 12%;
            }
            .vertical_line1d {
                width: 1px; 
                height: 60px; 
                background-color: green;
                position: fixed; 
                left: 30%;
                top: 21.8%;
            }
            .label5c {
                font-size: 11px;
                position: fixed;
                top: 22%;
                left: 30.5%;
            }
            .label5d {
                font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 22.8%;
                left: 33.5%; 
            }
            p.labelline2b {
                color: green;
                position: fixed;
                top: 24%;
                left: 32%
            }
            p.output5b {
                font-size: 13px;
                text-transform: uppercase;
                position: fixed;
                color: black;
                top: 23.5%;
                left: 40%;
            }
            .vertical_line1e {
                width: 1px; 
                height: 60px; 
                background-color: green;
                position: fixed; 
                left: 57%;
                top: 21.8%;
            }
            .label5e {
                font-size: 11px;
                position: fixed;
                top: 22%;
                left: 57.5%;
            }
            .label5f {
                font-size: 8px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 22%;
                left: 72%; 
            }
            .label5g {
                font-size: 8px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 22.2%;
                left: 60.5%; 
            }
            .label5h {
                font-size: 8px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 23%;
                left: 60.5%; 
            }
            p.labelline2c {
                color: green;
                position: fixed;
                top: 24.3%;
                left: 58%
            }
            p.output5c {
                font-size: 13px;
                text-transform: uppercase;
                position: fixed;
                color: black;
                top: 23.5%;
                left: 67%;
            }
            .vertical_line1f {
                width: 1px; 
                height: 60px; 
                background-color: green;
                position: fixed; 
                left: 83%;
                top: 21.8%;
            }
            .label5i {
                font-size: 11px;
                position: fixed;
                top: 22%;
                left: 83.5%;
            }
            .label5j {
                font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 22.8%;
                left: 33.5%; 
            }
            p.labelline2d {
                color: green;
                position: fixed;
                top: 24%;
                left: 83.5%
            }
            p.output5d {
                font-size: 13px;
                text-transform: uppercase;
                position: fixed;
                color: black;
                top: 23.5%;
                left: 88%;
            }
            .horizontal_line1f {
                width: 99.5%; 
                height: 0.1%; 
                background-color: green;
                position: fixed;
                top: 26.5%;
            }
                .labelside2 {
                font-size: 15px;
                text-align: center;
                position: fixed;
                top: 28%;
                left: 1%;
            }
                .label6a {
                font-size: 11px;
                position: fixed;
                top: 27%;
                left: 4%;
            }
               
        </style>
    </head>
        <body>
            <div class='page'>
                <div class='content'>
                    <div class='container'>
                        <div class='header_center'>Republic of the Philippines</div>
                        <div class='header_center_mid'>OFFICE OF THE CIVIL REGISTRAR GENERAL</div>
                        <div class='header_center_bellow'>CERTIFICATE OF LIVE BIRTH</div>
                        <div class='horizontal_line1a'></div> 
                        <div class='vertical_line1b'></div>
                            <div class='labelside1'>C<br>H<br>I<br>L<br>D</div>
                            <div class='label1a'>Province<p class='labelline1a'>_____________________________________________________</p><p class='output1a'>Mendez</p></div>
                            <div class='label1b'>City/Municipality<p class='labelline1b'>____________________________________________________</p><p class='output1b'>Cavite</p></div>
                                <div class='vertical_line1a'></div>
                                <div class='label1c'>Registry No.<p class='output1c'>2003-1</p></div>
                        <div class='horizontal_line1b'></div>   
                            <div class='label2a'>1. Name</div>
                            <div class='label2b'>(First)<p class='output2a'>John Patrick</p></div>
                            <div class='label2c'>(Middle)<p class='output2b'>Sangalang</p></div>
                            <div class='label2d'>(Last)<p class='output2c'>Manalo</p></div>
                        <div class='horizontal_line1c'></div>
                            <div class='label3a'>2. Sex</div>
                                <div class='label3b'>(Male/Female)<p class='output3a'>Male</p></div>
                            <div class='vertical_line1c'></div>
                            <div class='label3c'>3. Date of <br>birth</div>
                                <div class='label3d'>(Day)<p class='output3b'>6</p></div>
                                <div class='label3e'>(Month)<p class='output3c'>9</p></div>
                                <div class='label3f'>(Year)<p class='output3d'>3</p></div>
                        <div class='horizontal_line1d'></div>  
                            <div class='label4a'>4. Place of <br>birth</div>    
                            <div class='label4b'>(Name of hospital/clinic/institution/<br>household no., st., barangay)<p class='output4a'>Hospital</p></div>
                            <div class='label4c'>(City/Municipality)<p class='output4b'>Laurel</p></div>
                            <div class='label4d'>(Province)<p class='output4c'>Batanagas</p></div>
                        <div class='horizontal_line1e'></div>
                            <div class='label5a'>5a. Type of Birth</div>  
                            <div class='label5b'>(Single, Twin, Triplet, Etc.)<p class='labelline2a'>______________________________</p><p class='output5a'>Single</p></div>
                            <div class='vertical_line1d'></div>
                            <div class='label5c'>5b. If Multiple Birth, Child was</div>  
                            <div class='label5d'>(First, Second, Third, Etc.)<p class='labelline2b'>______________________________</p><p class='output5b'>First</p></div>
                            <div class='vertical_line1e'></div>
                            <div class='label5e'>5c. Type of Birth</div>  
                            <div class='label5f'>(Order of this bith to<br><p class='label5g'>previous lives including fetal death)</p><p class='label5h'>(First, Second, Third, Etc.)</p><p class='labelline2c'>_______________________________________</p><p class='output5c'>First</p></div>
                            <div class='vertical_line1f'></div>

                            <div class='label5i'>6. Weight at Birth</div>  

                            <div class='label5j'><p class='labelline2d'>_______________grams</p> <p class='output5d'>3000</p></div>
                        <div class='horizontal_line1f'></div>
                          <div class='horizontal_line1g'></div>
                    <div class='labelside2'>M<br>O<br>T<br>H<br>E<br>R</div>
                      <div class='label6a'>7.MAIDEN <br> NAME</div>
                </div> 
            </div>
            <div class='page-break'></div>
            <div class='page'>
                <div class='content'>
                    <div class='container'>
                        
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
$dompdf->stream("ecopy", ["Attachment" => false]);
// End output bufferin
?>