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
    <title>Certificate of Live Birth</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 7.5in; /* Legal paper width in pixels */
            height: 13in; /* Legal paper height in pixels */
            border: 2px solid darkblue;
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
            color: darkblue;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
            text-transform: uppercase;
            margin-top: 40px; /* Mas mataas ang value, mas bababa */
}

        }
        .sub-header {
            text-align: center;
            font-size: 14px;
            margin-bottom: 10px;
            color: darkblue;
              margin-top: -10px;
        }
            .header2 {
            text-align: center;
            font-size: 18px;
            margin-bottom: 10px;
            color: darkblue ;
            font-weight: bold;
             margin-top: -px;

        }
   
.labeld1 {
    position: absolute;
    top: 97px; /* Bawasan ang value para umakyat */
    left: 1px;
    text-align: left;
    font-size: 12px;
    color: darkblue;
    padding-left: 0; /* Alisin ang padding para hindi madala sa ibang area */
}
.outputda {
    position: absolute;
    top: 120px; /* Bawasan ang value para umakyat */
    left: 1px;
    text-align: left;
    font-size: 12px;
    color: darkblue;
    padding-left: 10; /* Alisin ang padding para hindi madala sa ibang area */
}
    .outputdb {
    position: absolute;
    top: 140px; /* Bawasan ang value para umakyat */
    left: 1px;
    text-align: left;
    font-size: 12px;
    color: darkblue;
    padding-left: 10; /* Alisin ang padding para hindi madala sa ibang area */
}
      .outputdc {
    position: absolute;
    top: 150px;
    left: -1px; /* Ilipat sa mas kaliwa */
    text-align: left;
    font-size: 12px;
    color: darkblue;
}
    .outputdd {
    position: absolute;
    top: 120px;
    left: 500px; /* Ilipat sa mas kaliwa */
    text-align: left;
    font-size: 12px;
    color: darkblue;
}
 .vertical-line3 {
            width: 2px; /* Thickness of the line */
            height: 55px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 66%; /* Adjust horizontal positioning */
            top: 110px; /* Adjust vertical positioning */
        }
   .labeld2{
    position: absolute;
    top: 170px;
    left: 10px; /* Ilipat sa mas kaliwa */
    text-align: left;
    font-size: 12px;
    color: darkblue;
}
       .output2a{
    position: absolute;
    top: 170px;
    left: 140px; /* Ilipat sa mas kaliwa */
    text-align: left;
    font-size: 12px;
    color: darkblue;
}
    .output2b{
    position: absolute;
    top: 170px;
    left: 280px; /* Ilipat sa mas kaliwa */
    text-align: left;
    font-size: 12px;
    color: darkblue;
}
    .output2c{
    position: absolute;
    top: 170px;
    left: 430px; /* Ilipat sa mas kaliwa */
    text-align: left;
    font-size: 12px;
    color: darkblue;
}
      .output2d{
    position: absolute;
    top: 195px;
    left: 1px; /* Ilipat sa mas kaliwa */
    text-align: left;
    font-size: 12px;
    color: darkblue;
}
      .output2e{
    position: absolute;
    top: 170px;
    left: 550px; /* Ilipat sa mas kaliwa */
    text-align: left;
    color: darkblue;
     font-size: 12px;
}
 .vertical-line4 {
            width: 2px; /* Thickness of the line */
            height: 45px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left:75%; /* Adjust horizontal positioning */
            top: 165px; /* Adjust vertical positioning */
        }
 .label3a{
    position: absolute;
    top: 210px;
    left: 10px; /* Ilipat sa mas kaliwa */
    text-align: left;
    color: darkblue;
     font-size: 12px;
}
      .output3a{
    position: absolute;
    top: 215px;
    left: 10px; /* Ilipat sa mas kaliwa */
    text-align: left;
    color: darkblue;
     font-size: 12px;
}
       .output3b{
    position: absolute;
    top: 210px;
    left: 240px; /* Ilipat sa mas kaliwa */
    text-align: left;
    color: darkblue;
     font-size: 12px;
}
      .output3c{
    position: absolute;
    top: 210px;
    left: 460px; /* Ilipat sa mas kaliwa */
    text-align: left;
    color: darkblue;
     font-size: 8px;
}
      .output3d{
    position: absolute;
    top: 205px;
    left: 457px; /* Ilipat sa mas kaliwa */
    text-align: left;
    color: darkblue;
}
      .output3e{
    position: absolute;
    top: 225px;
    left: 460px; /* Ilipat sa mas kaliwa */
    text-align: left;
    color: darkblue;
     font-size: 8px;
}
  .output3f{
    position: absolute;
    top: 225px;
    left: 555px; /* Ilipat sa mas kaliwa */
    text-align: left;
    color: darkblue;
     font-size: 8px;
}
      .output3g{
    position: absolute;
    top: 225px;
    left: 640px; /* Ilipat sa mas kaliwa */
    text-align: left;
    color: darkblue;
     font-size: 8px;
}
        .output3h{
    position: absolute;
    top: 215px;
    left: 457px; /* Ilipat sa mas kaliwa */
    text-align: left;
    color: darkblue;
}
    .output3i{
    position: absolute;
    top: 233px;
    left: 467px; /* Ilipat sa mas kaliwa */
    color: darkblue;
     font-size: 8px;
}
      .output3j{
    position: absolute;
    top: 233px;
    left: 555px; /* Ilipat sa mas kaliwa */
    color: darkblue;
     font-size: 8px;
}
 .output3k{
    position: absolute;
    top: 233px;
    left: 605px; /* Ilipat sa mas kaliwa */
    color: darkblue;
     font-size: 8px;
}
.output3l{
    position: absolute;
    top: 233px;
    left: 645px; /* Ilipat sa mas kaliwa */
    color: darkblue;
     font-size: 8px;
}
.output3m{
    position: absolute;
    top: 233px;
    left: 680px; /* Ilipat sa mas kaliwa */
    color: darkblue;
     font-size: 8px;
}
 .output3n{
    position: absolute;
    top: 238px;
    left: 1px; /* Ilipat sa mas kaliwa */
    text-align: left;
    color: darkblue;
}
.vertical-line5 {
            width: 2px; /* Thickness of the line */
            height: 45px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left:32%; /* Adjust horizontal positioning */
            top: 210px; /* Adjust vertical positioning */
        }
.vertical-line6 {
            width: 2px; /* Thickness of the line */
            height: 45px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left:63%; /* Adjust horizontal positioning */
            top: 210px; /* Adjust vertical positioning */
        }
            .vertical-line7 {
            width: 2px; /* Thickness of the line */
            height: 35px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left:76%; /* Adjust horizontal positioning */
            top: 223px; /* Adjust vertical positioning */
        }
              .vertical-line8 {
            width: 2px; /* Thickness of the line */
            height: 35px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left:87.5%; /* Adjust horizontal positioning */
            top: 223px; /* Adjust vertical positioning */
        }
            .vertical-line9 {
            width: 2px; /* Thickness of the line */
            height: 25px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left:83%; /* Adjust horizontal positioning */
            top: 232px; /* Adjust vertical positioning */
        }
         .vertical-line10 {
            width: 2px; /* Thickness of the line */
            height: 25px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left:93%; /* Adjust horizontal positioning */
            top: 232px; /* Adjust vertical positioning */
        }
        .label4a{
    position: absolute;
    top: 255px;
    left: 12px; /* Ilipat sa mas kaliwa */
    color: darkblue;
      font-size: 12px;
}
.output4a{
    position: absolute;
    top: 255px;
    left: 135px; /* Ilipat sa mas kaliwa */
    color: darkblue;
      font-size: 8px;
}
.output4b{
    position: absolute;
    top: 255px;
    left: 352px; /* Ilipat sa mas kaliwa */
    color: darkblue;
      font-size: 9px;
}
.output4c{
    position: absolute;
    top: 255px;
    left: 420px; /* Ilipat sa mas kaliwa */
    color: darkblue;
      font-size: 9px;
}
.output4d{
    position: absolute;
    top: 275px;
    left: 3px; /* Ilipat sa mas kaliwa */
    color: darkblue;
}
.output4e {
    position: absolute;
    top: 255px;
    left: 505px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 9px;
    max-width: 100px; /* Depende sa haba ng text */
    word-wrap: break-word;
}
.output4f {
    position: absolute;
    top: 255px;
    left: 565px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 8px;
     max-width: 150px; /* Depende sa haba ng text */
    word-wrap: break-word;
}
   .vertical-line11 {
            width: 2px; /* Thickness of the line */
            height: 37px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left:69%; /* Adjust horizontal positioning */
            top: 258px; /* Adjust vertical positioning */
        }
    .label5a{
    position: absolute;
    top: 292px;
    left: 12px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
   .output5a{
    position: absolute;
    top: 292px;
    left: 205px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
 .output5b{
    position: absolute;
    top: 292px;
    left: 205px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
 </style>
</head>
<body> 
    <div class='page'>
        <div class='content'>
        <div class='container'>
            <div class='header'>Republic of the Philippines</div>
            <div class='sub-header'>OFFICE OF THE CIVIL REGISTRAR GENERAL</div>
            <div class='header2'>CERTIFICATE OF DEATH</div> 
            </div>
            <div class='section1d'>  </div>
            <div class='labeld1'>____________________________________________________________________________________________________________</div>
              <div class='outputda'>Province_______________________________________________________________</div>
                 <div class='outputdb'>City/Municipality_________________________________________________________</div>
                    <div class='vertical-line3'></div>
                     <div class='outputdc'>_____________________________________________________________________________________________________________</div>
                        <div class='outputdd'>Registry No.</div>
                     </div>
                      <div class='section2d'> </div>
                         <div class='labeld2'>1.NAME</div>
                             <div class='output2a'>(First)</div>
                             <div class='output2b'>(Midlle)</div>
                                  <div class='output2c'>(Last)</div>
                                     <div class='output2d'>____________________________________________________________________________________________________________</div>
                                       <div class='output2e'>2. SEX (Male/Female)</div>
                                     <div class='vertical-line4'></div>
                                     </div>
                        <div class='section3c'> </div>
                         <div class='label3a'>3. DATE OF DEATH (Day, Month, Year)</div>
                        <div class='output3b'>4. DATE OF BIRTH(Day, Month, Year)</div>
                         <div class='output3c'>5. AGE AT THE TIME OF DEATH(Fill-in below accdg. to age category)</div>
                          <div class='output3d'>______________________________</div>
                           <div class='output3e'>a. IF 1 YEAR OR ABOVE</div>
                              <div class='output3f'>b. IF UNDER 1 YEAR</div>
                                 <div class='output3g'>c. IF UNDER 24 HRS</div>
                                    <div class='output3h'>______________________________</div>
                                       <div class='output3i'>[2]Completed years</div>
                                         <div class='output3j'>[1]Month</div>
                                          <div class='output3k'>[0] Days</div>
                                              <div class='output3l'>Hours</div>
                                               <div class='output3m'>Min/Sec</div>
                                                <div class='output3n'>_________________________________________________________________________________</div>
                        <div class='vertical-line5'></div>
                             <div class='vertical-line6'></div>
                                   <div class='vertical-line7'></div>   
                                    <div class='vertical-line8'></div>
                                          <div class='vertical-line9'></div>
                                                <div class='vertical-line10'></div>
          <div class='section3d'> </div>
             <div class='label4a'>6. PLACE OF DEATH</div>
                 <div class='output4a'>(Name of Hospital/Clinic/Institution/House No., St., Barangay,</div>
                  <div class='output4b'>City/Municipality,</div>
                        <div class='output4c'>Province</div>
                           <div class='output4d'>_________________________________________________________________________________</div>
                         <div class='output4e'>7.CIVIL STATUS</div>
                          <div class='output4f'>(Single/Married/Widow/Widower/Annulled/Divorced)</div>
                        <div class='vertical-line11'></div>
            </div>
                <div class='section4c'> </div>
             <div class='label5a'>8.RELIGION/RELIGOUS SECT</div>
            <div class='output5b'>9.CITIZENSHIP</div> 

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
