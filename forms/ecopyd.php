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
            .labeld9 {
                font-size: 12px;
                text-transform: normal;
                color: black;
                position: absolute;
                top:15%;
                left: 1%; 
            }
            .outputd9 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 15.5%;
                left:10%; 
            }
            .vertical_lined3 {
                width: 1px; 
                height: 56px; 
                background-color: darkblue;
                position: absolute; 
                left: 30%;
                top: 15%;
            }
            .labeld10 {
                font-size: 12px;
                text-transform: normal;
                color: black;
                position: absolute;
                top:15%;
                left: 31%; 
            }
            .outputd10 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 15.5%;
                left:40%; 
            }
            .vertical_lined4 {
                width: 1px; 
                height: 56px; 
                background-color: darkblue;
                position: absolute; 
                left: 60%;
                top: 15%;
            }
            .labeld11 {
                font-size: 9px;
                text-transform: normal;
                color: black;
                position: absolute;
                top:15%;
                left: 60.5%; 
            }
            .horizontal_linem3 {
                width: 39.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 16%;
                left: 60.2%; 
            }
            .labeld12 {
                font-size: 8.5px;
                text-transform: normal;
                color: black;
                position: absolute;
                top:16.2%;
                left: 60.5%; 
            }
            .labeld13{
                font-size: 8.5px;
                text-transform: normal;
                color: black;
                position: absolute;
                top:16.1%;
                left: 74.5%; 
            }
            .labeld14{
                font-size: 8.5px;
                text-transform: normal;
                color: black;
                position: absolute;
                top:16.1%;
                left: 86.5%; 
            }
            .labeld15{
                font-size: 8.5px;
                text-transform: normal;
                color: darkblue;
                position: absolute;
                top:17%;
                left: 62%; 
            }
            .labeld16{
                font-size: 8.5px;
                text-transform: normal;
                color: darkblue;
                position: absolute;
                top:17%;
                left: 74.5%; 
            }
            .labeld17{
                font-size: 8.5px;
                text-transform: normal;
                color: darkblue;
                position: absolute;
                top:17%;
                left: 81.5%; 
            }
            .labeld18{
                font-size: 8.5px;
                text-transform: normal;
                color: darkblue;
                position: absolute;
                top:17%;
                left: 88%; 
            }
            .labeld19{
                font-size: 8.5px;
                text-transform: normal;
                color: darkblue;
                position: absolute;
                top:17%;
                left: 94%; 
            }
            .outputd11 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 17%;
                left:67%; 
            }
            .outputd12 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 17%;
                left:76%; 
            }
            .outputd13 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 17%;
                left:82.5%; 
            }
            .outputd14 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 17%;
                left:88.5%; 
            }
            .outputd15 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 17%;
                left:95%; 
            }
            .vertical_lined5 {
                width: 1px; 
                height: 45px; 
                background-color: darkblue;
                position: absolute; 
                left: 74%;
                top: 16%;
            }
            .vertical_lined6 {
                width: 1px; 
                height: 45px; 
                background-color: darkblue;
                position: absolute; 
                left: 86%;
                top: 16%;
            } 
            .vertical_lined7 {
                width: 1px; 
                height: 33px; 
                background-color: darkblue;
                position: absolute; 
                left: 80%;
                top: 17%;
            } 
            .vertical_lined8 {
                width: 1px; 
                height: 33px; 
                background-color: darkblue;
                position: absolute; 
                left: 93%;
                top: 17%;
            } 
            .horizontal_linem4{
                width: 39.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 17%;
                left: 60.2%; 
            }
            .horizontal_linem5{
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 19.5%;
            }
            .labeld20{
                font-size: 12px;
                text-transform: normal;
                color: black;
                position: absolute;
                top:20%;
                left: 1%; 
            }
            .labeld21{
                font-size: 9px;
                text-transform: normal;
                color: darkblue;
                position: absolute;
                top:20%;
                left: 17%; 
            }
            .outputd16 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 20.5%;
                left:10%; 
            }
            .labeld22{
                font-size: 12px;
                text-transform: normal;
                color: black;
                position: absolute;
                top:20%;
                left: 70%; 
            }
            .labeld23{
                font-size: 9px;
                text-transform: normal;
                color: darkblue;
                position: absolute;
                top:20%;
                left: 83%; 
            }
            .vertical_lined9 {
                width: 1px; 
                height: 45px; 
                background-color: darkblue;
                position: absolute; 
                left: 68%;
                top: 19.5%;
            } 
            .outputd17 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 20.5%;
                left:73%; 
            }
            .horizontal_linem6{
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 22.9%;
            }
            .labeld24{
                font-size: 12px;
                text-transform: normal;
                color: black;
                position: absolute;
                top:23%;
                left: 1%; 
            }
            .labeld25{
                font-size: 12px;
                text-transform: normal;
                color: black;
                position: absolute;
                top:23%;
                left: 30%; 
            }
            .labeld26{
                font-size: 12px;
                text-transform: normal;
                color: black;
                position: absolute;
                top:23%;
                left: 50%; 
            }
            .labeld27{
                font-size: 9px;
                text-transform: normal;
                color:darkblue;
                position: absolute;
                top:23%;
                left: 63%; 
            }
            .vertical_lined10 {
                width: 1px; 
                height: 45px; 
                background-color: darkblue;
                position: absolute; 
                left: 28%;
                top: 23%;
            } 
            .vertical_lined11 {
                width: 1px; 
                height: 45px; 
                background-color: darkblue;
                position: absolute; 
                left: 49%;
                top: 23%;
            } 
            .outputd18 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 23.5%;
                left:2%; 
                text-transform: uppercase;
            }
            .outputd19 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 23.5%;
                left:30%; 
                text-transform: uppercase;
            }
            .outputd20 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 23.5%;
                left:52%; 
                text-transform: uppercase;
            }
            .horizontal_linem7{
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 26.5%;
            }
            .labeld28{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:27%;
                left: 1%; 
            }
            .labeld29{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:27%;
                left: 28%; 
            }
            .labeld30{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:27%;
                left: 60%; 
            }
            .vertical_lined12 {
                width: 1px; 
                height: 45px; 
                background-color: darkblue;
                position: absolute; 
                left: 28%;
                top: 26.5%;
            }
            .vertical_lined13 {
                width: 1px; 
                height: 45px; 
                background-color: darkblue;
                position: absolute; 
                left: 59.5%;
                top: 26.5%;
            }
            .outputd21 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 27.5%;
                left:2%; 
                text-transform: uppercase;
            }
            .outputd22 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 27.5%;
                left:29%; 
                text-transform: uppercase;
            }
            .outputd23 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 27.5%;
                left:61%; 
                text-transform: uppercase;
            }
            .horizontal_linem8{
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 30%;
            }
            .labeld31{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:30%;
                left: 40%; 
            }
            .labeld32{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:31%;
                left: 26%; 
            }
            .horizontal_linem9{
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 32.5%;
            }
            .labeld33{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:33%;
                left: 1%; 
            }
            .labeld34{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:33%;
                left: 73%; 
            }
            .labeld35{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:34%;
                left: 3%; 
            }
            .labellined3{
                color: black;
                position: absolute;
                top: 33%;
                left:17%;
            }
            .outputd24 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 33%;
                left:20%; 
                text-transform: uppercase;
            }
            .labeld36{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:35.5%;
                left: 4%; 
            }
            .labellined4{
                color: black;
                position: absolute;
                top: 34.5%;
                left:17%;
            }
            .outputd25 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 34.5%;
                left:20%; 
                text-transform: uppercase;
            }
            .labeld37{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:36.9%;
                left: 4%; 
            }
            .labellined5{
                color: black;
                position: absolute;
                top: 35.9%;
                left:17%;
            }
            .outputd26 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 35.9%;
                left:20%; 
                text-transform: uppercase;
            }
            .labellined6{
                color: black;
                position: absolute;
                top: 33%;
                left:73%;
            }
            .outputd27 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 33%;
                left:74%; 
                text-transform: uppercase;
            }
            .labellined7{
                color: black;
                position: absolute;
                top: 34.5%;
                left:73%;
            }
            .outputd28 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 34.5%;
                left:74%; 
                text-transform: uppercase;
            }
            .labellined8{
                color: black;
                position: absolute;
                top: 35.9%;
                left:73%;
            }
            .outputd29 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 35.9%;
                left:74%; 
                text-transform: uppercase;
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
                    <div class='labeld9'>3.DATE OF DEATH (Day,Month,Year)</div>
                        <p class='outputd9'>31 JULY 2024</p></div>
                    <div class='vertical_lined3'></div>
                    <div class='labeld10'>4.DATE OF BIRTH (Day, Month, Year)</div>
                        <p class='outputd10'>31 JULY 2024</p></div>
                    <div class='vertical_lined4'></div>
                    <div class='labeld11'>5. AGE AT THE TIME OF DEATH(Fill-in below accdg. to age category)</div>
                    <div class='horizontal_linem3'></div> 
                    <div class='labeld12'>a.IF 1 YEAR OR ABOVE</div>
                    <div class='labeld13'>b.IF UNDER 1 YEAR</div>
                    <div class='labeld14'>c.IF UNDER  24 HOURS</div>
                    <div class='labeld15'>[2]Completed Years</div>
                    <div class='labeld16'>[1]Month</div>
                    <div class='labeld17'>[0]day</div>
                    <div class='labeld18'>Hours</div>
                    <div class='labeld19'>Min/Sec</div>
                        <p class='outputd11'>56</p></div>
                        <p class='outputd12'>12</p></div>
                        <p class='outputd13'>0</p></div>
                        <p class='outputd14'>20</p></div>
                        <p class='outputd15'>20</p></div>
                    <div class='vertical_lined5'></div>
                    <div class='vertical_lined6'></div>
                    <div class='vertical_lined7'></div>
                    <div class='vertical_lined8'></div>
                    <div class='horizontal_linem4'></div> 
                    <div class='horizontal_linem5'></div> 
                    <div class='labeld20'>6.PLACE OF DEATH</div>
                    <div class='labeld21'>(Name of Hospital/Clinic/Institution/House No., St., Barangay, City/Municipality, Province)</div>
                        <p class='outputd16'>TAGAYTAY HOSPITAL CAVITE</p></div>
                    <div class='labeld22'>7.CIVIL STATUS</div> 
                    <div class='labeld23'>(Single/Married/Widow<br>/Widower/Annulled/Divorced)</div> 
                        <p class='outputd17'>SINGLE</p></div>
                    <div class='vertical_lined9'></div>
                    <div class='horizontal_linem6'></div> 
                    <div class='labeld24'>8.RELIGION/RELIGIOUS</div>
                    <div class='labeld25'>9.CITIZENSHIP</div>  
                    <div class='labeld26'>10.RESIDENCE</div>  
                    <div class='labeld27'>(House No., St., Barangay, City/Municipality, Province, Country)</div>  
                    <div class='vertical_lined10'></div>
                    <div class='vertical_lined11'></div>
                        <p class='outputd18'>CATHOLIC</p></div>
                        <p class='outputd19'>FILIPINO</p></div>
                        <p class='outputd20'>123 BARANGAY 7 MENDEZ,CAVITE</p></div>
                    <div class='horizontal_linem7'></div> 
                    <div class='labeld28'>11.OCCUPATION</div>  
                    <div class='labeld29'>12.NAME OF FATHER(First,Middle, Last)</div>  
                    <div class='labeld30'>13.MAIDEN NAME OF MOTHER(First,Middle, Last)</div>  
                        <p class='outputd21'>DRIVER</p></div>
                        <p class='outputd22'>JUAN m DELA CRUZ</p></div>
                        <p class='outputd23'>JUAN m DELA CRUZ</p></div>
                    <div class='vertical_lined12'></div>
                    <div class='vertical_lined13'></div>
                    <div class='horizontal_linem8'></div> 
                    <div class='labeld31'>MEDICAL CERTIFICATE</div>  
                    <div class='labeld32'>(For ages 0 to 7 days, accomplish items 14-19a at the back)</div>  
                    <div class='horizontal_linem9'></div>  
                    <div class='labeld33'>19b. CAUSES OF DEATH(if deceased is aged days over)</div>    
                    <div class='labeld34'>Interval Between Onset and Death</div>    
                    <div class='labeld35'>I. Immediate cause</div>  
                        <p class='labellined3'> :a__________________________________________________________</p>   
                        <p class='outputd24'>JUAN m DELA CRUZ</p></div>
                    <div class='labeld36'>Antecedent cause</div>  
                        <p class='labellined4'>:b__________________________________________________________</p>   
                        <p class='outputd25'>JUAN m DELA CRUZ</p></div>
                    <div class='labeld37'>Underlying cause</div>  
                        <p class='labellined5'>:c__________________________________________________________</p>   
                        <p class='outputd26'>JUAN m DELA CRUZ</p></div>
                        <p class='labellined6'>____________________________</p> 
                        <p class='outputd27'>JUAN m DELA CRUZ</p></div>  
                        <p class='labellined7'>____________________________</p> 
                        <p class='outputd28'>JUAN m DELA CRUZ</p></div>  
                        <p class='labellined8'>____________________________</p> 
                        <p class='outputd29'>JUAN m DELA CRUZ</p></div>  
                    
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