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
  top:230px;
  left:120px;
  font-weight:bold;
  font-size:11px;
}
   .outputm15b{
   color.rgb(248,82,159);
  position: absolute;
  top:230px;
  left:424px;
  font-weight:bold;
  font-size:11px;
}
   .outputm15c{
   color.rgb(248,82,159);
  position: absolute;
  top:257px;
  left:1px;
  font-weight:bold;
}
  .labelm16{
   color.rgb(248,82,159);
  position: absolute;
  top:310px;
  left:1px;
  font-weight:bold;
   font-size:12px;
}
     .outputm16a{
   color.rgb(248,82,159);
  position: absolute;
  top:320px;
  left:140px;
  font-weight:bold;
 
}
     .outputm16b{
   color.rgb(248,82,159);
  position: absolute;
  top:340px;
  left:160px;
  font-weight:bold;
   font-size:10px;
}
    .outputm16c{
   color.rgb(248,82,159);
  position: absolute;
  top:340px;
  left:470px;
  font-weight:bold;
   font-size:10px;
}
   .outputm16d{
   color.rgb(248,82,159);
  position: absolute;
  top:340px;
  left:620px;
  font-weight:bold;
   font-size:10px;
}
     .labelm17{
   color.rgb(248,82,159);
  position: absolute;
  top:390px;
  left:5px;
  font-weight:bold;
   font-size:12px;
}
    .outputm17a{
   color.rgb(248,82,159);
  position: absolute;
  top:390px;
  left:145px;
  font-weight:bold;
}
     .outputm17b{
   color.rgb(248,82,159);
  position: absolute;
  top:410px;
  left:180px;
  font-weight:bold;
   font-size:12px;
}
   
     .outputm17c{
   color.rgb(248,82,159);
  position: absolute;
  top:410px;
  left:260px;
  font-weight:bold;
   font-size:12px;
}
    .outputm17d{
   color.rgb(248,82,159);
  position: absolute;
  top:410px;
  left:350px;
  font-weight:bold;
   font-size:12px;
}
   .outputm17e{
   color.rgb(248,82,159);
  position: absolute;
  top:390px;
  left:420px;
  font-weight:bold;
   font-size:12px;
}
  .labelm18 {
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 840px;
  left: 5px;
  font-weight: bold;
  font-size: 12px;
}
  .outputm18a {
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 860px;
  left: 20px;
  font-weight: bold;
  font-size: 11px;
}
 .outputm18b {
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 880px;
  left: 5px;
  font-weight: bold;
  font-size: 11px;
}
  .outputm18c {
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 895px;
  left: 5px;
  font-weight: bold;
  font-size: 11px;
}
   .outputm18d {
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 895px;
  left: 280px;
  font-weight: bold;
  font-size: 11px;
}
     .outputm18e {
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 895px;
  left: 535px;
  font-weight: bold;
  font-size: 10px;
}
     .outputm18f {
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 920px;
  left: 70px;
  font-weight: bold;
  font-size: 10px;
}
    .outputm18g {
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 925px;
  left: 70px;
  font-weight: bold;
}
     .outputm18h {
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 940px;
  left: 150px;
  font-weight: bold;
    font-size: 10px;
}
     .outputm18i {
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 925px;
  left: 400px;
  font-weight: bold;
}
    .outputm18j {
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 940px;
  left: 500px;
  font-weight: bold;
    font-size: 10px;
}
 .resizable-box1 {
    width: 20px;
    height: 15px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 895px;
    left: 250px;
}
     .resizable-box2 {
    width: 20px;
    height: 15px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 895px;
    left: 510px;
}
     .labelm19{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 950px;
  left: 5px;
  font-weight: bold;
  font-size: 11px;
}
    .outputm19a{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 960px;
  left: 60px;
  font-weight: bold;
  font-size: 11px;
}
      .outputm19b{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 970px;
  left: 20px;
  font-weight: bold;
  font-size: 11px;
}
    .outputm19c{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 980px;
  left: 30px;
  font-weight: bold;
  font-size: 11px;
}
    .labelm20{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1000px;
  left: 50px;
  font-weight: bold;
  font-size: 11px;
}
   .outputm20a{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1025px;
  left: 50px;
  font-weight: bold;
  font-size: 11px;
}

        .outputm20c{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1040px;
  left: 50px;
  font-weight: bold;
  font-size: 11px;
}
        .outputm20d{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1055px;
  left: 5px;
  font-weight: bold;
}
      .outputm20e{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1075px;
  left: 8px;
  font-weight: bold;
  font-size: 9px;
}
  .outputm20f{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1055px;
  left: 240px;
  font-weight: bold;
}
 .outputm20g{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1075px;
  left: 300px;
  font-weight: bold;
  font-size: 10px;
}
  .outputm20h{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1055px;
  left: 470px;
  font-weight: bold;
}
   .outputm20i{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1075px;
  left: 470px;
  font-weight: bold;
  font-size: 10px;
}
 
     .resizable-box3 {
    width: 20px;
    height: 15px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 1000px;
    left: 15px;
}
    
     .resizable-box4 {
    width: 20px;
    height: 15px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 1020px;
    left: 15px;
}
       .resizable-box5 {
    width: 20px;
    height: 15px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 1040px;
    left: 15px;
}
     .labelm21{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1090px;
  left: 20px;
  font-weight: bold;
  font-size: 11px;
}  
  .outputm21a{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1100px;
  left: 15px;
  font-weight: bold;
}
    .outputm21b{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1100px;
  left: 195px;
  font-weight: bold;
}
  
    .outputm21c{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1100px;
  left: 370px;
  font-weight: bold;
}
    .outputm21d{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1100px;
  left: 545px;
  font-weight: bold;
}
  .outputm21e{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1103px;
  left: 1px;
  font-weight: bold;
}
   .labelm22{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1120px;
  left: 10px;
  font-weight: bold;
  font-size: 11px;
}
    .outputm22a{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1135px;
  left: 10px;
  font-weight: bold;
  font-size: 11px;
}
      .outputm22b{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1150px;
  left: 10px;
  font-weight: bold;
  font-size: 11px;
}
     .outputm22c{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1165px;
  left: 10px;
  font-weight: bold;
  font-size: 11px;
}
    .outputm22d{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1180px;
  left: 10px;
  font-weight: bold;
  font-size: 11px;
}
   .labelm23{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1120px;
  left: 335px;
  font-weight: bold;
  font-size: 11px;
    font-weight: bold;
}
     .outputm23a{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1135px;
  left: 335px;
  font-weight: bold;
  font-size: 11px;
}
  .outputm23b{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1150px;
  left: 335px;
  font-weight: bold;
  font-size: 11px;
}
  .outputm23c{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1165px;
  left: 335px;
  font-weight: bold;
  font-size: 11px;
}
    .outputm23d{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1180px;
  left: 335px;
  font-weight: bold;
  font-size: 11px;
}
  .outputm23e{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1180px;
  left: 1px;
  font-weight: bold;
}
   .vertical-line8 {
            width: 2px; /* Thickness of the line */
            height: 75px; /* Length of the line */
            background-color: rgb(248, 82, 159);
            position: absolute; /* Keeps it inside the container */
            left: 45%; /* Adjust horizontal positioning */
            top: 1123px; /* Adjust vertical positioning */
            
        }
              .labelm24{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 1200px;
  left: 10px;
  font-weight: bold;
  font-size: 11px;
    font-weight: bold;
}
      /* BIRTH BACK PAGE */
 .header2m {
            color: darkblue;
            text-align: center;
            font-weight: bold;
            font-size: 12px;
            text-transform: uppercase;
            margin-top: 1px; /* Mas mataas ang value, mas bababa */
}
  .labelma{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 5px;
  left: 10px;
  font-weight: bold;
  font-size: 11px;
    font-weight: bold;
}
      .outputma{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 15px;
  left: 5px;
  font-weight: bold;
    font-weight: bold;
}
      .outputmb{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 15px;
  left: 190px;
  font-weight: bold;
    font-weight: bold;
}
      .outputmc{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 15px;
  left: 370px;
  font-weight: bold;
    font-weight: bold;
}
      .outputmd{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 15px;
  left: 550px;
  font-weight: bold;
    font-weight: bold;
}
        .outputme{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 40px;
  left: 5px;
  font-weight: bold;
    font-weight: bold;
}
    .outputmf{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 40px;
  left: 190px;
  font-weight: bold;
    font-weight: bold;
}
      .outputmg{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 40px;
  left: 370px;
  font-weight: bold;
    font-weight: bold;
}
     .outputmh{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 40px;
  left: 550px;
  font-weight: bold;
    font-weight: bold;
}
      .outputmi{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 50px;
  left: 1px;
  font-weight: bold;
    font-weight: bold;
}
 .labelmb{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 70px;
  left: 220px;
  font-weight: bold;
  font-size: 14px;
    font-weight: bold;
}
   .outputm1{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 100px;
  left: 20px;
  font-weight: bold;
  font-size: 12px;
    font-weight: bold;
}
   .outputm2{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 120px;
  left: 20px;
  font-weight: bold;
  font-size: 12px;
    font-weight: bold;
}
       .outputm3{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 140px;
  left: 20px;
  font-weight: bold;
  font-size: 12px;
    font-weight: bold;
}
      .outputm4{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 160px;
  left: 20px;
  font-weight: bold;
  font-size: 12px;
    font-weight: bold;
}
        .outputm5{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 160px;
  left: 65px;
  font-weight: bold;
  font-size: 11px;
    font-weight: bold;
}
        .outputm6{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 205px;
  left: 65px;
  font-weight: bold;
  font-size: 11px;
    font-weight: bold;
}
        .outputm7{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 220px;
  left: 65px;
  font-weight: bold;
  font-size: 11px;
    font-weight: bold;
}
     .outputm8{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 265px;
  left: 65px;
  font-weight: bold;
  font-size: 11px;
    font-weight: bold;
}
  .outputm9{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 295px;
  left: 65px;
  font-weight: bold;
  font-size: 11px;
    font-weight: bold;
}
     .outputm10{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 330px;
  left: 20px;
  font-weight: bold;
  font-size: 11px;
    font-weight: bold;
}
        .outputm11{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 360px;
  left: 20px;
  font-weight: bold;
  font-size: 11px;
    font-weight: bold;
}
        .outputm12{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 380px;
  left: 20px;
  font-weight: bold;
  font-size: 11px;
    font-weight: bold;
}
         .outputm13{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 400px;
  left: 20px;
  font-weight: bold;
  font-size: 11px;
    font-weight: bold;
}
       .outputm14{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 420px;
  left: 400px;
  font-weight: bold;
    font-weight: bold;
}
    .outputm15{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 435px;
  left: 405px;
  font-weight: bold;
    font-weight: bold;
      font-size: 11px;
}
.outputm16{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 455px;
  left: 40px;
  font-weight: bold;
    font-weight: bold;
      font-size: 11px;
}
      .outputm17{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 470px;
  left: 10px;
  font-weight: bold;
    font-weight: bold;
      font-size: 11px;
}
        .outputm18{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 485px;
  left: 10px;
  font-weight: bold;
    font-weight: bold;
      font-size: 11px;
}
          .outputm19{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 505px;
  left: 40px;
  font-weight: bold;
    font-weight: bold;
      
}
           .outputm20{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 520px;
  left: 80px;
  font-weight: bold;
    font-weight: bold;
       font-size: 11px;
      
}
       
           .outputm21{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 505px;
  left: 400px;
  font-weight: bold;
    font-weight: bold;
      
}
               .outputm22{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 520px;
  left: 470px;
  font-weight: bold;
    font-weight: bold;
       font-size: 11px;
      
}
              .outputm23{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 530px;
  left: 400px;
  font-weight: bold;
    font-weight: bold;
      
}
              .outputm24{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 545px;
  left: 120px;
  font-weight: bold;
     font-size: 11px;
      
}
     .outputm25{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 530px;
  left: 40px;
  font-weight: bold;
    font-weight: bold;
      
}
              .outputm26{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 545px;
  left: 500px;
  font-weight: bold;
     font-size: 11px;
      
}
          .outputm27{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 540px;
  left: 1px;
  font-weight: bold;
    font-weight: bold;
      
}
       .resizable-box6 {
    width: 20px;
    height: 25px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 160px;
    left: 35px;
}
  
       .resizable-box7 {
    width: 20px;
    height: 25px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 190px;
    left: 35px;
}
       .resizable-box8 {
    width: 20px;
    height: 25px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 220px;
    left: 35px;
}
    .resizable-box9 {
    width: 20px;
    height: 25px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 260px;
    left: 35px;
}
    
    .resizable-box10 {
    width: 20px;
    height: 25px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 295px;
    left: 35px;
}
        .labelmc{
  color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 560px;
  left: 150px;
  font-weight: bold;
  font-size: 14px;
      
}
  .outputm28{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 580px;
  left: 25px;
  font-weight: bold;
  font-size: 11px;
}
    .outputm29{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 600px;
  left: 25px;
  font-weight: bold;
  font-size: 11px;
}
    .outputm30{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 620px;
  left: 25px;
  font-weight: bold;
  font-size: 11px;
}
   .outputm31{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 635px;
  left: 25px;
  font-weight: bold;
  font-size: 11px;
}
   .outputm32{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 650px;
  left: 65px;
  font-weight: bold;
  font-size: 11px;
}
  .outputm33{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 680px;
  left: 65px;
  font-weight: bold;
  font-size: 11px;
}
  .outputm34{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 695px;
  left: 40px;
  font-weight: bold;
  font-size: 11px;
}


  .resizable-box11{
    width: 20px;
    height: 15px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 650px;
    left: 35px;
}
     .resizable-box12{
    width: 20px;
    height: 15px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 675px;
    left: 35px;
}
      .labelmd{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 715px;
  left: 20px;
  font-weight: bold;
  font-size: 11px;
}
   .outputm35{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 735px;
  left: 35px;
  font-weight: bold;
  font-size: 11px;
}
    .outputm36{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 735px;
  left: 75px;
  font-weight: bold;
  font-size: 11px;
}
     .outputm37{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 735px;
  left: 165px;
  font-weight: bold;
  font-size: 11px;
}
     .outputm38{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 735px;
  left: 205px;
  font-weight: bold;
  font-size: 11px;
}
     .outputm39{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 735px;
  left: 280px;
  font-weight: bold;
  font-size: 11px;
}
   .outputm40{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 735px;
  left: 315px;
  font-weight: bold;
  font-size: 11px;
}
  .outputm41{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 735px;
  left: 375px;
  font-weight: bold;
  font-size: 11px;
}
    .outputm42{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 735px;
  left: 415px;
  font-weight: bold;
  font-size: 11px;
}
     .resizable-box13{
    width: 20px;
    height: 15px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 735px;
    left: 50px;
}
        .resizable-box14{
    width: 20px;
    height: 15px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 735px;
    left: 180px;
}
    .resizable-box15{
    width: 20px;
    height: 15px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 735px;
    left: 290px;
}
     .resizable-box16{
    width: 20px;
    height: 15px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 735px;
    left: 390px;
}
       .labelme{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 755px;
  left: 20px;
  font-weight: bold;
  font-size: 11px;
}
     .outputm43{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 770px;
  left: 100px;
  font-weight: bold;
  font-size: 11px;
}
    .outputm44{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 792px;
  left: 100px;
  font-weight: bold;
  font-size: 11px;
}
  .outputm45{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 830px;
  left: 20px;
  font-weight: bold;
  font-size: 11px;
}
    .outputm46{
    color: rgb(248, 82, 159); /* Tama ang syntax ng color */
  position: absolute;
  top: 860px;
  left: 20px;
  font-weight: bold;
  font-size: 11px;
}
  
   .resizable-box17{
    width: 20px;
    height: 15px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 770px;
    left: 70px;
}
      .resizable-box18{
    width: 20px;
    height: 15px;
    position: absolute;
    resize: both;
    overflow: auto;
    border: 2px solid rgb(248, 82, 159); /* Ayusin ang kulay ng border */
    top: 790px;
    left: 70px;
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
                                                <div class='outputm15a'>(House No,. St,.Barangay,City/Municipality,Province,Country)</div>
                                                <div class='outputm15b'>(House No,. St,.Barangay,City/Municipality,Province,Country)</div>
                                                 <div class='outputm15c'>__________________________________________________________________________________________</div>
                                          </div>
                                           <div class='section16m'></div>
                                             <div class='labelm16'>15.Place of Marriage:</div>
                                             <div class='outputm16a'>_______________________________________________________________________</div>
                                              <div class='outputm16b'>(Office of the/House of/Barangay of/Church of/Mosque of)</div>
                                                <div class='outputm16c'>(City/Municipality)</div>
                                                 <div class='outputm16d'>(Province)</div>
                                          </div>
                                          <div class='section17m'></div>
                                            <div class='labelm17'>16. Date of Marriage: </div>
                                              <div class='outputm17a'>_________________________________</div>
                                              <div class='outputm17b'>(Day)</div>
                                               <div class='outputm17c'>(Month)</div>
                                               <div class='outputm17d'>(Year)</div>
                                                <div class='outputm17e'>17.Time of Marriage: _______________________am/pm</div>
                                            </div>
                                             <div class='section18m'></div>
                                                 <div class='labelm18'>18.CERTIFICATION OF THE CONTRACTING PARTIES:</div></div>
                                                  <div class='outputm18a'>THIS IS TO CERTIFY: That, I____________________________________and I,_______________________________________,both of</div>
                                               <div class='outputm18b'>legal age, of our own free will and accord, and in the presence of the person soleminizing this marriage and of the witnesses named below, take each other</div>
                                              <div class='outputm18c'>as husband and wife and certifying, further that we: </div>
                                                <div class='outputm18d'>have entered, a copy of which is here to attached/</div>
                                               <div class='outputm18e'>have not entered into a marriage settlement/</div>
                                                       <div class='outputm18f'>IN WITNESS WHEREOF, we have signed/marked with our fingerprint this certificate in quadruplicate this______day of_______,______</div>
                                                      <div class='outputm18g'>_________________________________</div>
                                                       <div class='outputm18h'>(Signature of Husband)</div>
                                                         <div class='outputm18i'>_________________________________</div>
                                                       <div class='outputm18j'>(Signature of Wife)</div>
                                                       <div class='resizable-box1'> </div>
                                                     <div class='resizable-box2'> </div>
                                              </div>
                                               <div class='section19m'></div>
                                                 <div class='labelm19'>19.CERTIFICATION OF THE SOLEMNIZING OFFICER</div></div>
                                                  <div class='outputm19a'>THIS CERTIFY: THAT BEFORE ME, on the date and place above-written, personally appeared tha above-mentioned parties with</div>
                                               <div class='outputm19b'>their mutual consent,lawfully joined together in marriage which was solemnied by me in the presence of the witnesses named baelow,all of legal age.</div>
                                                <div class='outputm19c'>I CERTIFY FURTHER THAT:</div>
                                               </div>
                                               </div>
                                               <div class='section20m'></div>
                                                 <div class='labelm20'>a. Marriage Licensed No.________________________________issued on________________, at ________________ in favor of said parties, was exhibited to me</div>
                                               <div class='outputm20a'>b.no marriage license was necessary, the marriage being solemnized under Art______of Executive Order No. 209.</div>
                                            <div class='outputm20c'>c.the marriage was soleminized in accordance with the provisions of Presidential Decree No. 1083.</div>
                                               <div class='outputm20d'>____________________________</div>
                                                       <div class='outputm20e'>(Signature Over Printed Name of Solemnizing Officer)</div>
                                                       <div class='outputm20f'>____________________________</div>
                                                       <div class='outputm20g'>(Postion/Designation)</div>
                                                        <div class='outputm20h'>____________________________</div>
                                                       <div class='outputm20i'>(Religious Sect,Registry No. and Expiration date)</div>
                                            <div class='resizable-box3'> </div>
                                               <div class='resizable-box4'> </div>
                                               <div class='resizable-box5'> </div>
                                               </div>
                                                  <div class='section21m'></div>
                                                   <div class='labelm21'>20a.WITNESSES(Print Name and Sign):</div>
                                                     <div class='outputm21a'>_____________________</div>
                                                       <div class='outputm21b'>_____________________</div>
                                                        <div class='outputm21c'>_____________________</div>
                                                         <div class='outputm21d'>_____________________</div>
                                                         <div class='outputm21e'>__________________________________________________________________________________________</div>
                                                 </div>
                                                 <div class='section21m'></div>
                                                   <div class='labelm22'>21.RECEIVED BY:</div>
                                                     <div class='outputm22a'>Signature_________________________________________________</div>
                                                         <div class='outputm22b'>Name in Print_____________________________________________</div>
                                                           <div class='outputm22c'>Title or Position___________________________________________</div>
                                                           <div class='outputm22d'>Date_____________________________________________________</div>
                                                  </div>
                                                  <div class='section21m'></div>
                                                   <div class='labelm23'>22.REGISTERED AT THE OFFICE OF THE CIVIL REGISTRAR</div>
                                                    <div class='outputm23a'>Signature__________________________________________________________</div>
                                                         <div class='outputm23b'>Name in Print______________________________________________________</div>
                                                           <div class='outputm23c'>Title or Position_____________________________________________________</div>
                                                           <div class='outputm23d'>Date______________________________________________________________</div>
                                                           <div class='outputm23e'>__________________________________________________________________________________________</div>
                                                              <div class='vertical-line8'></div>
                                                  </div>
                                                  <div class='section22m'></div>
                                                   <div class='labelm24'>REMARKS/ANNOTATIONS(For LCRO/OCRG/Shari'a Circuit Registrar Use Only)</div>
                                                  </div>
                                                  </div>
<div class='page-break'></div>
<div class='page'>
    <div class='content'>
       <div class='container'> 
         <div class='header2d'> </div>
           <div class='section21m'></div>
         <div class='labelma'>20b. WITNESSES(Print Name and Sign)</div>
           <div class='outputma'>_____________________</div>
            <div class='outputmb'>____________________</div>
               <div class='outputmc'>____________________</div>
                  <div class='outputmd'>_____________________</div>
                   <div class='outputme'>_____________________</div>
            <div class='outputmf'>____________________</div>
               <div class='outputmg'>____________________</div>
                  <div class='outputmh'>_____________________</div>
                    <div class='outputmi'>__________________________________________________________________________________________</div>
                                                </div>
                                                  <div class='section22m'></div>
                                                <div class='labelmb'>AFFIDAVIT OF SOLEMINIZINF OFFICER</div>
                                                  <div class='outputm1'>I,_____________________________________,of legal age, Soleminizing Officer of_________________________________with address at</div>
                                                <div class='outputm2'>_________________________________________________________,after having sworn to in accordance with law, do hereby depose say:</div>
                                              <div class='outputm3'>1.That I hav solemized the marriage between________________________________and_______________________________________:</div>
                                              <div class='outputm4'>2.</div>
                                               <div class='outputm5'>a.That i have ascertained the qualifications of the contracting parties and have found no legal impediment for them to marry as required by Article 34 of the Family Code;</div>
                                                <div class='outputm6'>b.That this marriage was performed in articulo mortis or at the point of death;</div>
                                                <div class='outputm7'>c.That the contracting parties_________________________and ______________________________, beng ath the point of death and physicaly unable to sign he foregoing certificate of marriage by signature or mark, one od the witnesses to the marriage sign for him or her by writing the dying partys nae and beneathit it, thw winess' own signature preceded by the preposition </div>
                                                  <div class='outputm8'>d.That the residence of either party is so located that there is no means of transportation to enable concerned party/parties to appear personnaly before the civil regstrar;</div>
                                                 <div class='outputm9'>e.That the marriage was among muslims or among members of the Ethic Cultural Communities and that the marriage was soleminized personally before the civil registrar </div>
                                               <div class='outputm10'>3.That I took the necessary steps to ascertain the ages and relatiosnhip of the contracting parties and that neither of them are uner any legal impediment to marry each other;</div>
                                                   <div class='outputm11'>4.That I am executing this affidavit to attest to the truthfulness of the foregoing statements for all legal intents and purposes.</div>
                                                <div class='outputm12'>In truth wheref, I have affixed my signature below this________________day of______________________________,__________________________at</div>
                                                   <div class='outputm13'>________________________________________________________________,Philippines</div>
                                                  <div class='outputm14'>__________________________________</div>
                                                     <div class='outputm15'>Signature Over Printed Name of the Solemnizing Officer</div>
                                                       <div class='outputm16'>SUBSCRIBED AND SWORN to before me this_________________day of____________________________,______________________at</div>
                                                       <div class='outputm17'>__________________________________________,Philippines, affiant who exhibited ti me hisher CTC/valid ID__________________________________</div>
                                                       <div class='outputm18'>issued on_____________________________________,______________________________________at___________________________________.</div>
                                                         <div class='outputm19'>__________________________________</div>
                                                          <div class='outputm20'>Signature of the Administering Officer</div>
                                                           <div class='outputm21'>__________________________________</div>
                                                          <div class='outputm22'>Position/Title/Designation</div>
                                                             <div class='outputm23'>__________________________________</div>
                                                          <div class='outputm24'>Name in Print</div>
                                                            <div class='outputm25'>__________________________________</div>
                                                                    <div class='outputm26'>Address</div>
                                                                        <div class='outputm27'>__________________________________________________________________________________________</div>
                                                   <div class='resizable-box6'> </div>
                                              <div class='resizable-box7'> </div>
                                                 <div class='resizable-box8'> </div>
                                                        <div class='resizable-box9'> </div>
                                                                <div class='resizable-box10'> </div>
                                                </div>
                                                  <div class='section23m'></div>
                                                   <div class='labelmc'>AFFIDAVIT FOR DELAYED REGISTRATION OF MARRIAGE</div>
                                                       <div class='outputm28'>I,________________________________________________________,of legal age, single/married/divorced/widow/widower, with residence and postal</div>
                                               <div class='outputm29'>postal address________________________________________________________________________________________________________________</div>
                                                <div class='outputm30'>____________________________________________________,after having duly sworn in accordance with law do hereby depose and say:</div>
                                                <div class='outputm31'>1. That I am the applicant for the delayed registration of</div>
                                                   <div class='outputm32'>my marriage with_______________________in___________________________on_______________________________.</div>
                                                        <div class='outputm33'>the marriage between_______________________________________and ____________________________________________in</div>
                                                      <div class='outputm34'>______________________________________on ____________________________________________.</div>                             
                                                               <div class='resizable-box11'> </div>
                                                                <div class='resizable-box12'> </div>
                                               </div>
                                                <div class='section24m'></div>
                                            <div class='labelmd'>2.That said marriage was solemnized by________________________________________________________(Solemnizing Officer's name) under</div>
                                        <div class='outputm35'>a.</div>
                                         <div class='outputm36'>religous ceremony</div>
                                           <div class='outputm37'>b.</div>
                                             <div class='outputm38'>civil ceremony</div>
                                                <div class='outputm39'>c.</div>
                                                   <div class='outputm40'>Musli rites</div>
                                                    <div class='outputm41'>d.</div>
                                                     <div class='outputm42'>tribal rites</div>
                                           <div class='resizable-box13'> </div>
                                           <div class='resizable-box14'> </div>
                                              <div class='resizable-box15'> </div>
                                              <div class='resizable-box16'> </div>

                                                       </div>
                                                        <div class='section25m'></div>
                                                       <div class='labelme'> 3.That the marriage was solemnized:</div>
                                                       <div class='outputm43'>a.with marriage license no.______________issued on _____________________ at___________________________________</div>
                                                         <div class='outputm44'>b.under Article__________(marriages of exceptional character);</div>
                                                         <div class='outputm45'>4.(if the aplicant is either the wife or husband)That i am a citizen of____________________________________and my spouse is citizen of______________________________;</div>
                                                        <div class='outputm46'>5.That the reason for the delay in registering our/their marriage is____________________________________________________________</div>
                                                        
                                                       
                                                       
                                                       <div class='resizable-box17'> </div>
                                                           <div class='resizable-box18'> </div>
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
