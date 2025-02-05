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
        .header {
            color: green;
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
            color: green;
              margin-top: -10px;
        }
            .header2 {
            text-align: center;
            font-size: 18px;
            margin-bottom: 10px;
            color: green;
            font-weight: bold;
             margin-top: -10px;

        }
        .section {
            margin-top: 15px;
            display: flex;
            align-items: center;
            width: 100%;
        }
        .label {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 150px;
    position: relative;
    top: 10px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
}
         .output {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 150px;
    position: relative;
    top: -40px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
}
 .output1a {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 150px;
    position: relative;
    top: 5px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
}
      .vertical-line3 {
            width: 2px; /* Thickness of the line */
            height: 63px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 65%; /* Adjust horizontal positioning */
            top: 109px; /* Adjust vertical positioning */
        }

 .output1b {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 650px;
    position: relative;
    top: -40px;
    left: -160px; /* Dagdagan ito para lumipat pa kanan */
}
    .output1c {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 150px;
    position: relative;
    top: -20px;
    left: -150px; /* Dagdagan ito para lumipat pa kanan */
}
  .label2 {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 150px;
    position: relative;
    top: -px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
}
      .output2a {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 150px;
    position: relative;
    top: -px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
}
       .output2a {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 150px;
    position: relative;
    top: 7px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
}
      .output2b {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 150px;
    position: relative;
    top: 9px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
}
         .output2c {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 150px;
    position: relative;
    top: 11px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
}
          .output2d {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 150px;
    position: relative;
    top: 13px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
}
 
    .vertical-line4 {
            width: 2px; /* Thickness of the line */
            height: 580px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 3%; /* Adjust horizontal positioning */
            top: 172px; /* Adjust vertical positioning */
        }
 .output2e {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 200px;
    position: relative;
    top: -110px;
    left: -170px; /* Dagdagan ito para lumipat pa kanan */
}
    .output2f {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 200px;
    position: relative;
    top: -123px;
    left: -5px; /* Dagdagan ito para lumipat pa kanan */
}
     .output2g {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 200px;
    position: relative;
    top: -138px;
    left: 170px; /* Dagdagan ito para lumipat pa kanan */
}
      .output2h {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 200px;
    position: relative;
    top: -153px;
    left: 370px; /* Dagdagan ito para lumipat pa kanan */
}
        .output2i {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -150px;
    left: -130px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
}
       .label3 {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -150px;
    left: -120px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
    font-size: 12px;
}
    .vertical-line5 {
            width: 2px; /* Thickness of the line */
            height: 40px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 30%; /* Adjust horizontal positioning */
            top: 207px; /* Adjust vertical positioning */
        }
    .output3a {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -165px;
    left: 75px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
 font-size: 12px;
}
  .output3b {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -180px;
    left: 240px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
 font-size: 12px;
}
   .output3c {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -195px;
    left: 380px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
 font-size: 12px;
}
    .output3d {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -210px;
    left: 520px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
 font-size: 12px;
}
   .output3e {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -200px;
    left: -130px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
 font-size: 12px;
}
  .label4 {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -200px;
    left: -120px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
 font-size: 12px;
}
  .output4a {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -218px;
    left: 20px;
    font-size: 12px;
    word-wrap: break-word; /* Ensures long words break */
    width: 240px; /* Adjust this to control line break */
    display: block; /* Ensures it's treated as a block element */
}
    .output4b {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -245px;
    left: 300px;
    font-size: 12px;
}
      .output4c {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -260px;
    left: 470px;
    font-size: 12px;
}
 .output4d {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -230px;
    left: -130px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
 font-size: 12px;
}
  .label5 {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -275px;
    left: -120px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
 font-size: 12px;
 word-wrap: break-word; /* Ensures long words break */
    width: 190px; /* Adjust this to control line break */
    display: block; /* Ensures it's treated as a block element */
}
    .label5 {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -230px;
    left: -120px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
 font-size: 12px;
 word-wrap: break-word; /* Ensures long words break */
    width: 120px; /* Adjust this to control line break */
    display: block; /* Ensures it's treated as a block element */
}
     .output5a {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -275px;
    left: 30px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
 font-size: 12px;
 word-wrap: break-word; /* Ensures long words break */
    width: 180px; /* Adjust this to control line break */
    display: block; /* Ensures it's treated as a block element */
}
      .output5b {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -305px;
    left: 230px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
 font-size: 12px;
 word-wrap: break-word; /* Ensures long words break */
    width: 200px; /* Adjust this to control line break */
    display: block; /* Ensures it's treated as a block element */
}
       .output5c {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -345px;
    left: 445px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
 font-size: 12px;
 word-wrap: break-word; /* Ensures long words break */
    width: 200px; /* Adjust this to control line break */
    display: block; /* Ensures it's treated as a block element */
}
       .output5d {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -300px;
    left: -150px; /* Dagdagan ito para lumipat pa kanan */
    color: green;

}
    
    .vertical-line6 {
            width: 2px; /* Thickness of the line */
            height: 79px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 23%; /* Adjust horizontal positioning */
            top: 304px; /* Adjust vertical positioning */
        }
              .vertical-line7 {
            width: 2px; /* Thickness of the line */
            height: 79px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 50%; /* Adjust horizontal positioning */
            top: 304px; /* Adjust vertical positioning */
        }
              .vertical-line8 {
            width: 2px; /* Thickness of the line */
            height: 79px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 80%; /* Adjust horizontal positioning */
            top: 304px; /* Adjust vertical positioning */
        }

 .label6 {
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 150px;
    position: relative;
    top: -300px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
}
     .output6a{
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 150px;
    position: relative;
    top: -290px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
}
  .output6b{
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 151px;
    position: relative;
    top: -280px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
}
   .output6c{
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 150px;
    position: relative;
    top: -270px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
}
      .output6d{
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 151px;
    position: relative;
    top: -260px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
}
      .output6e{
           text-align: left;
    font-size: 12px;
    color: green;
    padding-left: 151px;
    position: relative;
    top: -250px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
}
 .output6f {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -390px;
    left: -125px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
    font-size: 12px;

}
     .output6g {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -405px;
    left: 40px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
    font-size: 12px;

}
       .output6h {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -420px;
    left: 230px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
    font-size: 12px;

}
     .output6i {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -430px;
    left: 480px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
    font-size: 12px;

}
   .output6j {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -425px;
    left: -130px; /* Dagdagan ito para lumipat pa kanan */
    color: green;

}
     .label7 {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -425px;
    left: -125px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
    font-size: 12px;

}
    .output7a {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -440px;
    left: 250px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
    font-size: 12px;

}
      .output7b {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -430px;
    left: -130px; /* Dagdagan ito para lumipat pa kanan */
    color: green;

}
      .vertical-line9 {
            width: 2px; /* Thickness of the line */
            height: 45px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 45%; /* Adjust horizontal positioning */
            top: 425px; /* Adjust vertical positioning */
        }

   .label8 {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -430px;
    left: -130px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
   font-size: 12px;
   word-wrap: break-word; /* Ensures long words break */
    width: 130px; /* Adjust this to control line break */
    display: block; /* Ensures it's treated as a block element */
  
}
      .output8a {
    padding-left: 150px;
    position: relative;
     color: green;
    top: -460px;
    left: 5px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
   font-size: 12px;
   word-wrap: break-word; /* Ensures long words break */
    width: 130px; /* Adjust this to control line break */
    display: block; /* Ensures it's treated as a block element */
  
}
     .output8b {
    position: relative;
    color: green;
    padding-left: 150px;
    position: relative;
    top: -490px;
    left: 150px; /* Dagdagan ito para lumipat pa kanan */
   font-size: 12px;
   word-wrap: break-word; /* Ensures long words break */
    width: 130px; /* Adjust this to control line break */
    display: block; /* Ensures it's treated as a block element */
  
}
    .output8c {
    color: green;
    padding-left: 150px;
    position: relative;
    color: green;
    position: relative;
    top: -520px;
    left: 300px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
   font-size: 12px;

  
}
    .output8d {
    position: relative;
     color: green;
    padding-left: 150px;
    position: relative;
    top: -530px;
    left: 430px; /* Dagdagan ito para lumipat pa kanan */
   font-size: 12px;
   word-wrap: break-word; /* Ensures long words break */
    width: 130px; /* Adjust this to control line break */
    display: block; /* Ensures it's treated as a block element */
}
    .output8e {
    color: green;
    padding-left: 150px;
    position: relative;
    top:-526px;
    left: -130px; /* Dagdagan ito para lumipat pa kanan */

}
    .output8f {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -525px;
    left: -125px; /* Dagdagan ito para lumipat pa kanan */
    font-size: 12px;

}
    .output8g {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -540px;
    left: -10px; /* Dagdagan ito para lumipat pa kanan */
    font-size: 12px;

}
     .output8h {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -555px;
    left: 180px; /* Dagdagan ito para lumipat pa kanan */
    font-size: 12px;

}
      .output8i {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -570px;
    left: 340px; /* Dagdagan ito para lumipat pa kanan */
    font-size: 12px;

}
     .output8j {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -585px;
    left: 470px; /* Dagdagan ito para lumipat pa kanan */
    font-size: 12px;

}
       .output8k {
    color: green;
    padding-left: 150px;
    position: relative;
    top: -575px;
    left: -150px; /* Dagdagan ito para lumipat pa kanan */

}
  
      .vertical-line10 {
            width: 2px; /* Thickness of the line */
            height: 70px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 20%; /* Adjust horizontal positioning */
            top: 468px; /* Adjust vertical positioning */
        }
             .vertical-line11 {
            width: 2px; /* Thickness of the line */
            height: 70px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 40%; /* Adjust horizontal positioning */
            top: 468px; /* Adjust vertical positioning */
        }
.vertical-line12 {
            width: 2px; /* Thickness of the line */
            height: 70px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 60%; /* Adjust horizontal positioning */
            top: 468px; /* Adjust vertical positioning */
        }
.vertical-line13 {
            width: 2px; /* Thickness of the line */
            height: 70px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 79%; /* Adjust horizontal positioning */
            top:468px; /* Adjust vertical positioning */
        }

.label9{
    color: green;
    padding-left: 150px;
    position: relative;
    top: -560px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
    font-size: 12px;

}
    .output9a{
    color: green;
    padding-left: 150px;
    position: relative;
    top: -550px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
    font-size: 12px;

}
       .output9b{
    color: green;
    padding-left: 150px;
    position: relative;
    top: -540px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
    font-size: 12px;

}
    .output9c{
    color: green;
    padding-left: 150px;
    position: relative;
    top: -530px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
    font-size: 12px;

}
     .output9d{
    color: green;
    padding-left: 150px;
    position: relative;
    top: -520px;
    left: -145px; /* Dagdagan ito para lumipat pa kanan */
    color: green;
    font-size: 12px;

}
     .output9e{
    color: green;
    padding-left: 150px;
    position: relative;
    top: -645px;
    left: -125px; /* Dagdagan ito para lumipat pa kanan */
    font-size: 12px;

}

   .output9f {
    color: green;
    font-size: 12px;
    position: absolute;
    top: 585px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 180px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
.output9g {
    color: green;
    font-size: 12px;
    position: absolute;
    top: 585px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 400px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
    .output9h {
    color: green;
    font-size: 12px;
    position: absolute;
    top: 585px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 600px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
    
    .output9i {
    color: green;
    padding-left: 150px;
    position: absolute;
    top: 605px; /* Subukan muna ang 50px at i-adjust depende sa gusto mo */
    left: -127px; /* Ayusin kung gusto mong ilipat sa kanan */
}
     .output9j {
    color: green;
    font-size: 12px;
    position: absolute;
    top: 630px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 25px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
     .output9k {
    color: green;
    font-size: 12px;
    position: absolute;
    top: 630px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 170px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
    .output9l {
    color: green;
    font-size: 12px;
    position: absolute;
    top: 630px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 410px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
     .output9m {
    color: green;
    font-size: 12px;
    position: absolute;
    top: 630px;
    left: 580px;
    width: 130px; /* Mas maliit na width para mas mabilis mag-break */
    word-break: break-word;
    display: block;
}
    .output9n{
  color: green;
    padding-left: 150px;
    position: absolute;
    top: 680px; /* Subukan muna ang 50px at i-adjust depende sa gusto mo */
    left: -127px; /* Ayusin kung gusto mong ilipat sa kanan */
}
   .vertical-line14 {
            width: 2px; /* Thickness of the line */
            height: 75px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 165px; /* Adjust horizontal positioning */
            top:624px; /* Adjust vertical positioning */
        }
.vertical-line15 {
            width: 2px; /* Thickness of the line */
            height: 75px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 405px; /* Adjust horizontal positioning */
            top:624px; /* Adjust vertical positioning */
        }
.vertical-line16 {
            width: 2px; /* Thickness of the line */
            height: 75px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 570px; /* Adjust horizontal positioning */
            top:624px; /* Adjust vertical positioning */
        }
   .label10 {
    color: green;
    font-size: 12px;
    position: absolute;
    top: 700px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 25px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
    .output10a{
    color: green;
    font-size: 12px;
    position: absolute;
    top: 700px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 135px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
    .output10b{
    color: green;
    font-size: 12px;
    position: absolute;
    top: 700px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 330px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
     .output10c{
    color: green;
    font-size: 12px;
    position: absolute;
    top: 700px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 500px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
     .output10d{
    color: green;
    font-size: 12px;
    position: absolute;
    top: 700px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 630px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
       .output10e{
  color: green;
    padding-left: 150px;
    position: absolute;
    top: 732px; /* Subukan muna ang 50px at i-adjust depende sa gusto mo */
    left: -150px; /* Ayusin kung gusto mong ilipat sa kanan */
}
      .label11 {
    color: green;
    font-size: 12px;
    position: absolute;
    top: 750px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 5px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
      .output11a{
    color: green;
    padding-left: 150px;
    position: absolute;
   top: 748px; /* Subukan muna ang 50px at i-adjust depende sa gusto mo */
    left: -150px; /* Ayusin kung gusto mong ilipat sa kanan */
}
     .output11b{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 767px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 5px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
     .output11c{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 767px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 80px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
      .output11d{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 767px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 160px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
        .output11e{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 767px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 250px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
       .output11f{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 767px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 320px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
    .output11g{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 767px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 400px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
  .output11h{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 767px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 530px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
      .output11i{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 767px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 635px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
     .output11j {
    color: green;
    padding-left: 150px;
    position: absolute;
    top: 795px; /* Ayusin ang value para itaas o ibaba */
    left: -150px; /* Ilipat sa kanan o kaliwa */
}
.vertical-line17 {
            width: 2px; /* Thickness of the line */
            height: 45px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 300px; /* Adjust horizontal positioning */
            top:767px; /* Adjust vertical positioning */
        }
 .label12{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 813px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 5px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
     .output12a{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 830px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 5px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
    .output12b{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 830px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 100px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
    .output12c{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 830px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 180px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
      .output12d{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 830px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 270px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
      .output12e{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 830px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 490px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
  .output12f {
    color: green;
    padding-left: 150px;
    position: absolute;
    top: 830px; /* Bawasan ang value para itaas */
    left: -150px; /* Ayusin kung gusto mong ilipat sa kanan */
}
    .label13{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 850px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 5px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
     .output13a{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 863px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 20px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
    .output13b{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 885px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 20px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
      .output13c{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 905px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 20px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
     .output13d{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 925px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 20px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
  .output13e {
    color: green;
    font-size: 12px;
    position: absolute;
    top: 890px;  
    left: 400px; 
    width: 300px; /* Limitahan ang lapad para mag-break ang text */
    white-space: normal; /* Pahintulutan ang pag-wrap ng text */
    overflow-wrap: break-word; /* Payagan ang line break kahit walang space */
    word-break: break-word; /* Siguruhing mag-break ang sobrang mahahabang words */
    display: block; /* Siguruhing treated ito bilang block element */
}
   .output13f{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 925px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 400px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
     .output13g{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 935px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 3px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
     .label14{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 950px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 10px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
     .output14a{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 960px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 15px; /* Adjust kung gusto mo pa lumipat sa kanan */
    width: 300px; /* Limitahan ang lapad para mag-break ang text */
    white-space: normal; /* Pahintulutan ang pag-wrap ng text */
    overflow-wrap: break-word; /* Payagan ang line break kahit walang space */
    word-break: break-word; /* Siguruhing mag-break ang sobrang mahahabang words */
    display: block; /* Siguruhing treated ito bilang block element */
}
      .output14b{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 990px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 15px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
      .output14c{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1007px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 15px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
     .output14d{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1023px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 15px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
     .output14e{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1038px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 15px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
   .output14f{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 950px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 370px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
 .output14g{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 995px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 370px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
 .output14h{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1009px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 370px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
.output14i{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1025px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 370px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
.output14j{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1040px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 370px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
    .output14k{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1055px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 15px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
  .output14l{
  color: green;
    position: absolute;
    top: 1055px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 3px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
 .label15{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1073px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 15px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
    .output15a{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1090px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 15px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
    .output15b{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1105px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 15px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
      .output15c{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1120px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 15px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
        .output15d{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1135px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 15px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
     .output15e{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1073px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 370px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
      .output15f{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1090px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 370px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
       .output15g{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1105px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 370px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
       .output15h{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1120px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 370px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
      .output15i{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1135px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 370px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
    .output15j{
  color: green;
    position: absolute;
    top: 1140px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 3px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
    .vertical-line18 {
            width: 2px; /* Thickness of the line */
            height: 206px; /* Length of the line */
            background-color: green; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 350px; /* Adjust horizontal positioning */
            top:950px; /* Adjust vertical positioning */
        }
               .output15k{
  color: green;
    font-size: 12px;
    position: absolute;
    top: 1160px;  /* Itaas ito para maiwasan ang sobrang pagbaba */
    left: 20px; /* Adjust kung gusto mo pa lumipat sa kanan */
}
    /* BIRTH BACK PAGE */
    .container2 {
            width: 7.5in; /* Legal paper width in pixels */
            height: 13in; /* Legal paper height in pixels */
            border: 2px solid green;
        } 
     .header3 {
    color: green;
    font-weight: bold;
    font-size: 14px;
    text-transform: uppercase;
    position: absolute;
    top: 10px; /* Dagdagan ito para bumaba */
    left: 50%; /* Para nasa gitna */
    transform: translateX(-50%); /* Siguradong perfect center */
    white-space: nowrap; /* Para hindi mag-break ang text */
    overflow: hidden;
}

 .labelbacka{
    color: green;
    font-size: 12px;
    position: absolute;
    top: 40px; /* Dagdagan ito para bumaba */
    left: 5%; 
}
.labelbackb {
    color: green;
    font-size: 12px;
    position: absolute;
    top: 55px; /* Dagdagan ito para bumaba */
    left: 5%;
    white-space: nowrap; /* Siguradong isang linya lang */
    overflow: hidden; /* Iwasan ang extra text na lalampas */
    
}


 
  </style>
</head>
<body> 
    <div class='page'>
        <div class='content'>
        <div class='container'>
            <div class='header'>Republic of the Philippines</div>
            <div class='sub-header'>OFFICE OF THE CIVIL REGISTRAR GENERAL</div>
            <div class='header2'>CERTIFICATE OF LIVE BIRTH</div>
            
            <!-- Child's Name Section -->
            <div class='section'>
                <div class='label'>Province_______________________________________________________</div>
                <div class='output'>___________________________________________________________________________________________________________</div>
                    <div class='output1a'>City/Municipality_________________________________________________</div>
                    <div class='vertical-line3'></div>
                    <div class='output1b'>Registry No.</div>
                        <div class='output1c'>____________________________________________________________________________________________________________.</div>
            
                </div>
                    <!-- Child's Name Section -->
            <div class='section'>
            <div class='label2'>C</div>
                <div class='output2a'>H</div>
                <div class='output2b'>I</div>
                    <div class='output2c'>L</div>
                        <div class='output2d'>D</div>
                        <div class='vertical-line4'></div>
                        <div class='output2e'>1. Name</div>
                        <div class='output2f'>(First)</div>
                        <div class='output2g'>(Middle)</div>
                            <div class='output2h'>(Last)</div>
                            <div class='output2i'>_______________________________________________________________________________</div>
            </div>
                <div class='section2'>
            <div class='label3'>2.SEX(Male/Female)</div>
                <div class='vertical-line5'></div>
                <div class='output3a'>3.DATE OF BIRTH</div>
                <div class='output3b'>(Day)</div>
                    <div class='output3c'>(Month)</div>
                    <div class='output3d'>(Year)</div>
                    <div class='output3e'>_________________________________________________________________________________________________________</div>

        </div>
        <div class='section3'>
            <div class='label4'>4.PLACE OF BIRTH</div>
            <div class='output4a'>(Name of Hospital/Clinic/Institution/House No, St, Barangay)</div>
            <div class='output4b'>(City/Municipaity)</div>
            <div class='output4c'>(Province)</div>
            <div class='output4d'>_________________________________________________________________________________________________________</div>

        </div>
        <div class='section4'>
            <div class='label5'>5a.TYPE OR BIRTH(Single,Twin,Triplet,etc)</div>
            <div class='output5a'>5b. IF MULTIPLE BIRTH CHILD WAS (First,Second,Third, etc.)</div>
                <div class='output5b'>5c. BIRTH ORDER (Order of this birth to previous live births including fetal death)(First,Second,Third, etc)</div>
                <div class='output5c'>6.WEIGHT AT BIRTH</div>
                <div class='output5d'>_________________________________________________________________________________</div>
                    <div class='vertical-line6'></div>
                    <div class='vertical-line7'></div>
                        <div class='vertical-line8'></div>
        </div>
        <div class='section5'>
            <div class='label6'>M</div>
                <div class='output6a'>O</div>
                <div class='output6b'>T</div>
                <div class='output6c'>H</div>
                <div class='output6d'>E</div>
                <div class='output6e'>R</div>
                <div class='output6f'>7.MAIDEN NAME</div>
                    <div class='output6g'>(First)</div>
                    <div class='output6h'>(Middle)</div>
                    <div class='output6i'>(Last)</div>
                    <div class='output6j'>_______________________________________________________________________________</div>
        </div>
        <div class='section6'>
            <div class='label7'>8.CITIZENSHIP</div>
                <div class='output7a'>9.RELIGION/RELIGOUS SECT</div>
                <div class='output7b'>_______________________________________________________________________________</div>
                <div class='vertical-line9'></div>
        </div> 
        <div class='section7'>
        <div class='label8'>10. Total number of children born alive</div>
        <div class='output8a'>10b.No. of children still living this birth</div>
        <div class='output8b'>10c. No. of children born alive are now dead</div>
        <div class='output8c'>11. OCCUPATION</div>
        <div class='output8d'>12. AGE at the time of this birth(completed years)</div>
        <div class='output8e'>_______________________________________________________________________________</div>
        <div class='vertical-line10'></div>
                <div class='vertical-line11'></div>
                <div class='vertical-line12'></div>
                <div class='vertical-line13'></div>   

        <div class='section9'>
        <div class='output8f'>13. RESIDENCE</div>
            <div class='output8g'>(House No. St, Barangay)</div>
            <div class='output8h'>(City/Municipality)</div>
            <div class='output8i'>(Province)</div>
            <div class='output8j'>(Country)</div>
                <div class='output8k'>_________________________________________________________________________________</div>
        </div> 
        <div class='section10'>
        <div class='label9'>F</div>
            <div class='output9a'>A</div>
            <div class='output9b'>T</div>
            <div class='output9c'>H</div>
            <div class='output9d'>E</div>
            <div class='section11'>
                <div class='output9e'>14. NAME</div>
                    <div class='output9f'>(First)</div>
                        <div class='output9g'>(Middle)</div>
                            <div class='output9h'>(Last)</div>
                            <div class='output9i'>_______________________________________________________________________________</div>
                            <div class='output9j'>15.CITIZENSHIP</div>
                            <div class='output9k'>16. RELIGION/RELIGOUS SECT</div>
                                <div class='output9l'>17.OCCUPATION</div>
                                <div class='output9m'>18.AGE at the time of this birth(completed years)</div>
                                <div class='output9n'>_______________________________________________________________________________</div>
                                <div class='vertical-line14'></div> 
                                <div class='vertical-line15'></div> 
                                <div class='vertical-line16'></div> 
                                </div> 
                <div class='section11'>
                    <div class='label10'>19. RESIDENCE</div>
                    <div class='output10a'>(House No., St. Barangay)</div>
                    <div class='output10b'>(City/Municipality)</div>
                        <div class='output10c'>(Province)</div>
                            <div class='output10d'>(Country)</div>
                                <div class='output10e'>_________________________________________________________________________________</div>
        </div> 
                <div class='section12'>
                    <div class='label11'>MARRIAGE OF PARENTS(If not married, accomplish, affidavit of acknowledgement/Admission of Paternity at the back)</div>
                    <div class='output11a'>_________________________________________________________________________________</div>
        <div class='output11b'>20a. DATE</div>
        <div class='output11c'>(Day)</div>
        <div class='output11d'>(Month)</div>
        <div class='output11e'>(Year)</div>
            <div class='output11f'>20b.PLACE</div>
            <div class='output11g'>(City/Municipality)</div>
                <div class='output11h'>(Province)</div>
                <div class='output11i'>(Country)</div>
                <div class='output11j'>_________________________________________________________________________________</div>
                <div class='vertical-line17'></div> 
                </div> 
        <div class='section13'>
        <div class='label12'>21a.ATTENDANT</div>
        <div class='output12a'>____1.Physician</div>
        <div class='output12b'>____2.Nurse</div>
        <div class='output12c'>____3.Midwife</div>
        <div class='output12d'>____4.Hilot(Traditional Birth Attendant)</div>
        <div class='output12e'>____5.Other(Specify)___________</div>
            <div class='output12f'>_________________________________________________________________________________</div>
                    </div> 
                <div class='section14'>
                <div class='label13'>21b. CERTIFICATION OF ATTENDANT AT BIRTH(Physician, Nurse, Midwife, Traditional Birth attendant.Hilot,etc)</div>
        <div class='label13'>21b. CERTIFICATION OF ATTENDANT AT BIRTH(Physician, Nurse, Midwife, Traditional Birth attendant.Hilot,etc)</div>
        <div class='output13a'>I hereby certify that i attended the birth of the child who was born alive at _______am/pm on the date of birth specified above</div>
        <div class='output13b'>Signature_______________________________________</div>
        <div class='output13c'>Name in Print____________________________________</div>
        <div class='output13d'>Title or Position___________________________________</div>
        <div class='output13e'>Address__________________________________________________________________________________</div>
        <div class='output13f'>Date_________________________________________</div>
        <div class='output13g'>____________________________________________________________________________________________________________</div>
        </div> 
        <div class='section15'> 
        <div class='label14'> 22.CERTIFICATION OF INFORMANT </div> 
            <div class='output14a'> I hereby certify that all information supplied are true and correct to to my own knowledge and belief</div> 
        <div class='output14b'> Signature_______________________________________</div> 
        <div class='output14c'> Name in Print____________________________________</div> 
        <div class='output14d'> Relationship to the child____________________________</div> 
        <div class='output14e'> Address________________________________________</div> 
        <div class='output14f'> 23.PREPARED BY</div> 
            <div class='output14g'>Signature______________________________________</div>
            <div class='output14h'>Name in Print___________________________________</div>
            <div class='output14i'>Title or Position__________________________________</div>
                <div class='output14j'>Address________________________________________</div>
                <div class='output14k'>Date___________________________________________</div>
                <div class='output14l'>_________________________________________________________________________________</div>
        </div>  
        <div class='section16'>    
        <div class='label15'> 24.RECEIVED BY</div> 
            <div class='output15a'>Signature______________________________________</div> 
            <div class='output15b'>Name in Print___________________________________</div> 
                <div class='output15c'>Title or Position_________________________________</div>
                <div class='output15d'>Date__________________________________________</div>
                    <div class='output15e'>25.REGISTERED AT THE OFFICE OF THE CIVIL REGISTRAR</div>
                    <div class='output15f'>Signature______________________________________</div> 
                    <div class='output15g'>Name in Print___________________________________</div> 
                        <div class='output15h'>Title or Position__________________________________</div>
                        <div class='output15i'>Date___________________________________________</div>
                            <div class='output15j'>_________________________________________________________________________________</div>
        <div class='output15k'>REMARKS/ANNOTATION(For LCRO/ORCG Use Only)</div>
                            <div class='vertical-line18'></div> 
                            </div>     
            </div>
        </div>
    </div>
</div>
<div class='page-break'></div>
<div class='page'>
    <div class='content'>
        <div class='container2'> 
        <div class='header3'>AFFIDAVIT OF ACKNOWLEDGEMENT/ADMISSION OF PATERNITY</div>
           <div class='labelbacka'>I/We,____________________________________________________ and __________________________________________,</div>
      <div class='labelbackb'>of the legal age, am/are the natural mother and/or father of_______________________________________________,who was</div>

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
