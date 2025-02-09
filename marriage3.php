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
            height: 53px; /* Length of the line */
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
        .outputm2j{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 220px;
    left: 1px;
     font-weight: bold;
}
      .vertical-line2 {
            width: 2px; /* Thickness of the line */
            height: 600px; /* Length of the line */
            background-color: rgb(248, 82, 159);
            position: absolute; /* Keeps it inside the container */
            left: 58.5%; /* Adjust horizontal positioning */
            top: 150px; /* Adjust vertical positioning */
            
        }
            .vertical-line3 {
            width: 2px; /* Thickness of the line */
            height: 600px; /* Length of the line */
            background-color: rgb(248, 82, 159);
            position: absolute; /* Keeps it inside the container */
            left: 15%; /* Adjust horizontal positioning */
            top: 150px; /* Adjust vertical positioning */
            
        }
   .label3m{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 240px;
    left: 10px;
     font-weight: bold;
    font-size: 12px;

}
     .outputm3a{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 255px;
    left: 10px;
     font-weight: bold;
    font-size: 12px;

}
    .outputm3b{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 240px;
    left: 130px;
     font-weight: bold;
    font-size: 12px;

}
     .outputm3c{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 240px;
    left: 200px;
     font-weight: bold;
    font-size: 12px;

}
    .outputm3d{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 240px;
    left: 280px;
     font-weight: bold;
    font-size: 12px;

}
    .outputm3e{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 240px;
    left: 380px;
     font-weight: bold;
    font-size: 12px;

}
      .outputm3f{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 240px;
    left: 455px;
     font-weight: bold;
    font-size: 12px;

}
      .outputm3g{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 240px;
    left: 525px;
     font-weight: bold;
    font-size: 12px;

}
    .outputm3h{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 240px;
    left: 605px;
     font-weight: bold;
    font-size: 12px;

}
     .outputm3i{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 240px;
    left: 680px;
     font-weight: bold;
    font-size: 12px;

}
      .outputm3j{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 260px;
    left: 1px;
     font-weight: bold;


}
     .vertical-line4 {
            width: 2px; /* Thickness of the line */
            height: 40px; /* Length of the line */
            background-color: rgb(248, 82, 159);
            position: absolute; /* Keeps it inside the container */
            left: 50%; /* Adjust horizontal positioning */
            top: 240px; /* Adjust vertical positioning */
            
        }
             .vertical-line5 {
            width: 2px; /* Thickness of the line */
            height: 40px; /* Length of the line */
            background-color: rgb(248, 82, 159);
            position: absolute; /* Keeps it inside the container */
            left: 91%; /* Adjust horizontal positioning */
            top: 240px; /* Adjust vertical positioning */
            
        }
             .label4m{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 280px;
    left: 10px;
     font-weight: bold;
    font-size: 12px;

}
          .outputm4a{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 280px;
    left: 120px;
     font-weight: bold;
    font-size: 12px;

}
            .outputm4b{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 280px;
    left: 265px;
     font-weight: bold;
    font-size: 12px;

}
       .outputm4c{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 280px;
    left: 370px;
     font-weight: bold;
    font-size: 12px;

}
      .outputm4d{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 280px;
    left: 445px;
     font-weight: bold;
    font-size: 12px;
}
  .outputm4e{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 280px;
    left: 575px;
     font-weight: bold;
    font-size: 12px;
}
      .outputm4f{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 280px;
    left: 660px;
     font-weight: bold;
    font-size: 12px;
}
    
      .outputm4g{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 300px;
    left: 1px;
     font-weight: bold;

}
       .label5m{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 320px;
    left: 10px;
     font-weight: bold;
       font-size: 12px;

}
       
       .outputm5a{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 335px;
    left: 10px;
     font-weight: bold;
       font-size: 12px;

}
        .outputm5b{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 320px;
    left: 300px;
     font-weight: bold;
       font-size: 12px;

}
        .outputm5c{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 320px;
    left: 585px;
     font-weight: bold;
       font-size: 12px;

}
        .outputm5d{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 340px;
    left: 1px;
     font-weight: bold;
}
       .vertical-line6 {
            width: 2px; /* Thickness of the line */
            height: 40px; /* Length of the line */
            background-color: rgb(248, 82, 159);
            position: absolute; /* Keeps it inside the container */
            left: 40%; /* Adjust horizontal positioning */
            top: 320px; /* Adjust vertical positioning */
            
        }
            .vertical-line7 {
            width: 2px; /* Thickness of the line */
            height: 40px; /* Length of the line */
            background-color: rgb(248, 82, 159);
            position: absolute; /* Keeps it inside the container */
            left: 79%; /* Adjust horizontal positioning */
            top: 320px; /* Adjust vertical positioning */
            
        }
                .label6m{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 360px;
    left: 10px;
     font-weight: bold;
      font-size: 12px;
}
                    .outputm6a{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 360px;
    left: 125px;
     font-weight: bold;
      font-size: 11px;
}
                   .outputm6b{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 360px;
    left: 430px;
     font-weight: bold;
      font-size: 11px;
}
                    .outputm6c{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 380px;
    left: 1px;
     font-weight: bold;
}
                    .label7m{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 400px;
    left: 5px;
     font-weight: bold;
     font-size: 12px;
       display: block; /* Siguraduhin na block element ito */
    max-width:0px; /* I-adjust para bumaba sa susunod na linya */
}
                  .outputm7a{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 410px;
    left: 1px;
     font-weight: bold;
}
                    .label8m{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 5px;
     font-weight: bold;
     font-size: 12px;
}
                   .outputm8a{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top: 30px;
    left: 1px;
     font-weight: bold;
}
                   .label9m{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 5px;
     font-weight: bold;
     font-size: 12px;
}
                .outputm9a{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 120px;
     font-weight: bold;
     font-size: 12px;
}
                 .outputm9b{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 230px;
     font-weight: bold;
     font-size: 12px;
}
     
                 .outputm9c{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 360px;
     font-weight: bold;
     font-size: 12px;
}
                .outputm9d{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 440px;
     font-weight: bold;
     font-size: 12px;
}
                  .outputm9e{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 550px;
     font-weight: bold;
     font-size: 12px;
}
                .outputm9f{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 660px;
     font-weight: bold;
     font-size: 12px;
}
                 .outputm9g{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:35px;
    left: 1px;
     font-weight: bold;
}
                 .label10m{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 5px;
     font-weight: bold;
      font-size: 12px;
}
                   .outputm10a{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:30px;
    left: 1px;
     font-weight: bold;
}
     
                   .label11m{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 1px;
     font-weight: bold;
      font-size: 12px;
      display: block; /* Siguraduhin na block element ito */
    max-width:90px; /* I-adjust para bumaba sa susunod na linya */
}
                .outputm11a{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 120px;
     font-weight: bold;
      font-size: 12px;
    
}
               .outputm11b{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 230px;
     font-weight: bold;
      font-size: 12px;
    
}
               .outputm11c{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 355px;
     font-weight: bold;
      font-size: 12px;
    
}
      .outputm11d{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 440px;
     font-weight: bold;
      font-size: 12px;
    
}
     .outputm11e{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 540px;
     font-weight: bold;
      font-size: 12px;

}
  .outputm11f{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:20px;
    left: 670px;
     font-weight: bold;
      font-size: 12px;

}
      .outputm11g{
    color: rgb(248, 82, 159);
    position: absolute; /* Idinagdag ito */
    top:45px;
    left: 1px;
     font-weight: bold;

}
     .label12m{
     color:rgb(248,82,159);
     position: absolute;
     top:20px;
     left:3px;
     font-weight:bold;
     font-size:12px;
     
}
  .outputm12a{
  color.rgb(248,82,159);
  position: absolute;
  top:30px;
  left:1px;
  font-weight:bold;
}
  .label13m{
   color.rgb(248,82,159);
  position: absolute;
  top:100px;
  left:1px;
  font-weight:bold;
  font-size:12px;
    display: block; 
     max-width:80px; 
}
     .outputm13a{
   color.rgb(248,82,159);
  position: absolute;
  top:100px;
  left:120px;
  font-weight:bold;
  font-size:12px;
}
  .outputm13b{
   color.rgb(248,82,159);
  position: absolute;
  top:100px;
  left:230px;
  font-weight:bold;
  font-size:12px;
}
  .outputm13c{
   color.rgb(248,82,159);
  position: absolute;
  top:100px;
  left:360px;
  font-weight:bold;
  font-size:12px;
}
   .outputm13d{
   color.rgb(248,82,159);
  position: absolute;
  top:100px;
  left:440px;
  font-weight:bold;
  font-size:12px;
}
   .outputm13e{
   color.rgb(248,82,159);
  position: absolute;
  top:100px;
  left:540px;
  font-weight:bold;
  font-size:12px;
}
.outputm13f{
   color.rgb(248,82,159);
  position: absolute;
  top:100px;
  left:665px;
  font-weight:bold;
  font-size:12px;
}
.outputm13g{
   color.rgb(248,82,159);
  position: absolute;
  top:155px;
  left:1px;
  font-weight:bold;
}
  .labelm14{
   color.rgb(248,82,159);
  position: absolute;
  top:175px;
  left:1px;
  font-weight:bold;
  font-size:12px;
}
.outputm14a{
   color.rgb(248,82,159);
  position: absolute;
  top:180px;
  left:1px;
}
   .labelm15{
   color.rgb(248,82,159);
  position: absolute;
  top:230px;
  left:3px;
  font-weight:bold;
  font-size:12px;
}
  .outputm15a{
   color.rgb(248,82,159);
  position: absolute;
  top:2px;
  left:3px;
  font-weight:bold;
  font-size:12px;
}
    .outputm15a{
   color.rgb(248,82,159);
  position: absolute;
  top:2px;
  left:3px;
  font-weight:bold;
  font-size:12px;
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
                                                    <div class='section2m'> </div>
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
                                                                         <div class='outputm2j'> __________________________________________________________________________________________</div>
                                                         <div class='vertical-line2'></div>
                                                             <div class='vertical-line3'></div>
              </div>
                                            <div class='section3m'> </div>
                                              <div class='label3m'>2a.Date of Birth</div>
                                              <div class='outputm3a'>2b. Age</div>
                                              <div class='outputm3b'> (Day)</div>
                                                <div class='outputm3c'> (Month)</div>
                                                  <div class='outputm3d'> (Year)</div>
                                                  <div class='outputm3e'> (Age)</div>
                                                   <div class='outputm3f'> (Day)</div>
                                                       <div class='outputm3g'> (Month)</div>
                                                         <div class='outputm3h'> (Year)</div>
                                                           <div class='outputm3i'> (Age)</div>
                                                           <div class='outputm3j'> __________________________________________________________________________________________</div>
                                                              <div class='vertical-line4'></div>
                                                                   <div class='vertical-line5'></div>
                </div>
                   <div class='section4m'> </div>
                      <div class='label4m'>3.Place of Birth</div>
                      <div class='outputm4a'>(City/Municipality)</div>
                       <div class='outputm4b'>(Province)</div>
                            <div class='outputm4c'>(Country)</div>
                               <div class='outputm4d'>(City/Municipality)</div>
                                  <div class='outputm4e'>(Province)</div>
                                      <div class='outputm4f'>(Country)</div>
                                      <div class='outputm4g'> __________________________________________________________________________________________</div>
                </div>
                <div class='section5m'> </div>
                      <div class='label5m'>4a.Sex</div>
                        <div class='outputm5a'>4b.Citizenship</div>
                           <div class='outputm5b'>(Citizenship)</div>
                              <div class='outputm5c'>(Citizenship)</div>
                              <div class='outputm5d'> __________________________________________________________________________________________</div>
                                   <div class='vertical-line6'></div>
                                      <div class='vertical-line7'></div>
                  </div>
                  <div class='section6m'> </div>
                     <div class='label6m'>5.Residence</div>
                       <div class='outputm6a'>(House No,.St.,Barangay,City/Municipality,Province,Country)</div>
                        <div class='outputm6b'>(House No,.St.,Barangay,City/Municipality,Province,Country)</div>
                          <div class='outputm6c'> __________________________________________________________________________________________</div>
                    </div>
                     <div class='section7m'> </div>
                     <div class='label7m'>6.Religion/Religious Sect</div>
                     <div class='outputm7a'>__________________________________________________________________________________________<div>
                      </div>
                        <div class='section8m'> </div>
                     <div class='label8m'>7.Civil Status</div>
                       <div class='outputm8a'>__________________________________________________________________________________________<div>
                        </div>
                              <div class='section9m'> </div>
                                   <div class='label9m'>8.Name of Father</div>
                                      <div class='outputm9a'>(First)</div>
                                        <div class='outputm9b'>(Middle)</div>
                                         <div class='outputm9c'>(Last)</div>
                                          <div class='outputm9d'>(First)</div>
                                        <div class='outputm9e'>(Middle)</div>
                                         <div class='outputm9f'>(Last)</div>
                                          <div class='outputm9g'>__________________________________________________________________________________________<div>
                                  </div>
                          <div class='section10m'> </div>
                                   <div class='label10m'>9.Citizenship</div>
                                   <div class='outputm10a'>__________________________________________________________________________________________<div>

                                    <div class='section11m'> </div>
                                     <div class='label11m'>10.Maiden Name of mother </div>
                                     <div class='outputm11a'>(First)</div>
                                       <div class='outputm11b'>(Middle)</div>
                                          <div class='outputm11c'>(Last)</div>
                                                  <div class='outputm11d'>(First)</div>
                                                     <div class='outputm11e'>(Middle)</div>
                                                            <div class='outputm11f'>(Last)</div>
                                                             <div class='outputm11g'>__________________________________________________________________________________________<div>
                                  </div>
                                  <div class='section12m'></div>
                                  <div class='label12m'>11.Citizenship</div>
                                  <div class='outputm12a'>__________________________________________________________________________________________</div>
                                  
                                    </div>
                                    <div class='section13m'></div>
                                    <div class='label13m'>12.Name of Person/Wall Who Gave Consent or Advice</div>
                                    <div class='outputm13a'>(First)</div>
                                            <div class='outputm13b'>(Middle)</div>
                                                  <div class='outputm13c'>(Last)</div>
                                                    <div class='outputm13d'>(First)</div>
                                                      <div class='outputm13e'>(Middle)</div>
                                                          <div class='outputm13f'>(Last)</div>
                                                            <div class='outputm13g'>__________________________________________________________________________________________</div>





                                      </div>
                                         <div class='section14m'></div>
                                             <div class='labelm14'>13.Relationship</div>
                                               <div class='outputm14a'>__________________________________________________________________________________________</div>
                                        </div>
                                         <div class='section15m'></div>
                                             <div class='labelm15'>14.Residence</div>
                                                <div class='outputm15a'>(House No,. St,.Barangay,City/Municipality,Province,Country)/div>
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
