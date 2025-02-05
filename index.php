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
  </style>
</head>
<body>
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
           
           
         
</div> </div> 
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
