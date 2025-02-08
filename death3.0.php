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
            font-size: 12px;
            margin-bottom: 10px;
            text-transform: uppercase;
            margin-top: 40px; /* Mas mataas ang value, mas bababa */
}

        }
        .sub-header {
            text-align: center;
            font-size: 12px;
            margin-bottom: 10px;
            color: darkblue;
              margin-top: -10px;
        }
            .header2 {
            text-align: center;
            font-size: 27px;
            margin-bottom: 10px;
            color: darkblue ;
            font-weight: bold;
             margin-top: -12px;

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
     .output5c{
    position: absolute;
    top: 292px;
    left: 320px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
      .output5d{
    position: absolute;
    top: 292px;
    left: 410px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 11px;
}
       .output5i{
    position: absolute;
    top: 310px;
    left: 3px; /* Ilipat sa mas kaliwa */
    color: darkblue;
}
    .vertical-line12 {
            width: 2px; /* Thickness of the line */
            height: 37px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left:27%; /* Adjust horizontal positioning */
            top: 293px; /* Adjust vertical positioning */
        }
             .vertical-line13 {
            width: 2px; /* Thickness of the line */
            height: 37px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left:43%; /* Adjust horizontal positioning */
            top: 293px; /* Adjust vertical positioning */
        }
    .label6a{
    position: absolute;
    top: 330px;
    left: 10px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 11px;
}
     .output6a{
    position: absolute;
    top: 330px;
    left: 170px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 11px;
}
     .output6b{
    position: absolute;
    top: 330px;
    left: 450px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 11px;
}
          .output6c{
    position: absolute;
    top: 347px;
    left: 3px; /* Ilipat sa mas kaliwa */
    color: darkblue;
}
    .vertical-line14 {
            width: 2px; /* Thickness of the line */
            height: 37px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left:20%; /* Adjust horizontal positioning */
            top: 328px; /* Adjust vertical positioning */
        }
             .vertical-line15{
            width: 2px; /* Thickness of the line */
            height: 37px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left:58%; /* Adjust horizontal positioning */
            top: 328px; /* Adjust vertical positioning */
        }
              .label7a{
    position: absolute;
    top: 365px;
    left: 280px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 14px;
    font-weight: bold;
}
              .output7a{
    position: absolute;
    top: 380px;
    left: 200px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
          .output7b{
    position: absolute;
    top: 380px;
    left: 3px; /* Ilipat sa mas kaliwa */
    color: darkblue;
}
          .output7c{
    position: absolute;
    top: 400px;
    left: 7px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
       .output7d{
    position: absolute;
    top: 420px;
    left: 20px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
   .output7e{
    position: absolute;
    top: 420px;
    left: 130px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
       .output7f{
    position: absolute;
    top: 445px;
    left: 20px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
  .output7g{
    position: absolute;
    top: 445px;
    left: 130px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
       .output7h{
    position: absolute;
    top: 470px;
    left: 20px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
      .output7i{
    position: absolute;
    top: 470px;
    left: 130px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
     .output7j{
    position: absolute;
    top: 400px;
    left: 515px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
    .output7k{
     position: absolute;
    top: 416px;
    left: 475px; /* Ilipat sa mas kaliwa */
    color: darkblue;
}
     .output7l{
     position: absolute;
    top: 440px;
    left: 475px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    
}
    .output7m{
    position: absolute;
    top: 465px;
    left: 475px; /* Ilipat sa mas kaliwa */
    color: darkblue;
}
      .output7n{
    position: absolute;
    top: 489px;
    left: 20px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
  
      .output7o{
    position: absolute;
    top: 490px;
    left: 3px; /* Ilipat sa mas kaliwa */
    color: darkblue;
}
         .label8a{
    position: absolute;
    top: 510px;
    left: 5px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
         .output8a{
    position: absolute;
    top: 530px;
    left: 15px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
     width: 110px; /* Depende sa haba ng text */
    word-wrap: break-word;
}
    .output8b {
    position: absolute;
    top: 530px;
    left: 150px;
    color: darkblue;
    font-size: 12px;
    width: 110px; /* Depende sa haba ng text */
    word-wrap: break-word;
}
     .output8c {
    position: absolute;
    top: 530px;
    left: 290px;
    color: darkblue;
    font-size: 12px;
    width: 120px; /* Depende sa haba ng text */
    word-wrap: break-word;
}
    .output8d {
    position: absolute;
    top: 530px;
    left: 440px;
    color: darkblue;
    font-size: 12px;
    width: 120px; /* Depende sa haba ng text */
    word-wrap: break-word;
}
  .output8e {
    position: absolute;
    top: 530px;
    left: 580px;
    color: darkblue;
    font-size: 12px;
    width: 120px; /* Depende sa haba ng text */
    word-wrap: break-word;
}
    .output8f{
    position: absolute;
    top: 540px;
    left: 3px; /* Ilipat sa mas kaliwa */
    color: darkblue;
}
  .label9a{
    position: absolute;
    top: 562px;
    left: 9px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
    .output9a{
    position: absolute;
    top: 575px;
    left: 9px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
    .output9b{
    position: absolute;
    top: 595px;
    left: 9px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
      .output9c{
    position: absolute;
    top: 560px;
    left: 640px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
     width: 78px; /* Depende sa haba ng text */
    word-wrap: break-word;
}
    .output9d{
    position: absolute;
    top: 595px;
    left: 3px; /* Ilipat sa mas kaliwa */
    color: darkblue;
}
      .vertical-line15{
            width: 2px; /* Thickness of the line */
            height: 55px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left:87%; /* Adjust horizontal positioning */
            top: 558px; /* Adjust vertical positioning */
}
    .label10a{
    position: absolute;
    top: 615px;
    left: 7px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
     .output10a{
    position: absolute;
    top: 615px;
    left: 7px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
      .output10b{
    position: absolute;
    top: 640px;
    left: 20px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
     width: 100px; /* Maliit na width para mag-break sa dalawang linya */
    word-wrap: break-word;

}
     .output10c {
    position: absolute;
    top: 640px;
    left: 120px;
    color: darkblue;
    font-size: 12px;
    width: 20px; /* Maliit na width para mag-break sa dalawang linya */
    word-wrap: break-word;
      width: 100px; /* Maliit na width para mag-break sa dalawang linya */
    word-wrap: break-word;
}
     .output10d {
    position: absolute;
    top: 640px;
    left: 215px;
    color: darkblue;
    font-size: 12px;
    width: 20px; /* Maliit na width para mag-break sa dalawang linya */
    word-wrap: break-word;
      width: 100px; /* Maliit na width para mag-break sa dalawang linya */
    word-wrap: break-word;
}
 .output10e {
    position: absolute;
    top: 640px;
    left: 320px;
    color: darkblue;
    font-size: 12px;
    width: 20px; /* Maliit na width para mag-break sa dalawang linya */
    word-wrap: break-word;
      width: 100px; /* Maliit na width para mag-break sa dalawang linya */
    word-wrap: break-word;
}
     .output10f {
    position: absolute;
    top: 640px;
    left: 400px;
    color: darkblue;
    font-size: 12px;
    width: 20px; /* Maliit na width para mag-break sa dalawang linya */
    word-wrap: break-word;
      width: 100px; /* Maliit na width para mag-break sa dalawang linya */
    word-wrap: break-word;
}
  .output10g{
    position: absolute;
    top: 615px;
    left: 500px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
      .output10h{
      position: absolute;
    top: 665px;
    left: 3px; /* Ilipat sa mas kaliwa */
    color: darkblue;
}
    .output10i{
    position: absolute;
    top: 650px;
    left: 500px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
       .output10j{
    position: absolute;
    top: 650px;
    left: 605px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
      .label11a{
    position: absolute;
    top: 685px;
    left: 7px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
    .vertical-line17{
            width: 2px; /* Thickness of the line */
            height: 70px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 68%; /* Adjust horizontal positioning */
            top: 615px; /* Adjust vertical positioning */
}
.output11a{
    position: absolute;
    top: 700px;
    left: 20px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
    .output11b{
    position: absolute;
    top: 720px;
    left: 15px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 11.5px;
}
      .output11c{
    position: absolute;
    top: 720px;
    left: 135px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 11.5px;
}
    .resizable-box1 {
    width: 20px;
    height: 20px;
    border: 2px solid #000;
    position: absolute; /* O gamitin ang fixed kung gusto mo ito laging nasa view */
    resize: both;
    overflow: auto;
    border: 2px solid darkblue; /* Ginawang green ang border */
    top: 695px; /* Pwede mong itaas o ibaba ito */
    left: 650px; /* Upang siguradong nasa loob ito ng viewport */
}
      .resizable-box2 {
    width: 20px;
    height: 20px;
    border: 2px solid #000;
    position: absolute; /* O gamitin ang fixed kung gusto mo ito laging nasa view */
    resize: both;
    overflow: auto;
    border: 2px solid darkblue; /* Ginawang green ang border */
    top: 717px; /* Pwede mong itaas o ibaba ito */
    left: 100px; /* Upang siguradong nasa loob ito ng viewport */
}
    .label12a{
    position: absolute;
    top: 760px;
    left: 30px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 11.5px;
}
       .output12a{
    position: absolute;
    top: 780px;
    left: 30px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
         .output12b{
    position: absolute;
    top: 800px;
    left: 30px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
       .output12c{
    position: absolute;
    top: 820px;
    left: 30px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
     .output12d{
    position: absolute;
    top: 745px;
    left: 500px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 12px;
}
       .output12e{
    position: absolute;
    top: 770px;
    left: 450px; /* Ilipat sa mas kaliwa */
    color: darkblue;
}
     .output12f{
    position: absolute;
    top: 790px;
    left: 460px; /* Ilipat sa mas kaliwa */
    color: darkblue;
     font-size: 11px;
}
      .output12g{
    position: absolute;
    top: 815px;
    left: 455px; /* Ilipat sa mas kaliwa */
    color: darkblue;
     font-size: 11px;
}
         .output12h{
    position: absolute;
    top: 827px;
    left: 555px; /* Ilipat sa mas kaliwa */
    color: darkblue;
     font-size: 11px;
} 
     .output12i{
    position: absolute;
    top: 820px;
    left: 1px; /* Ilipat sa mas kaliwa */
    color: darkblue;
}
    .label13a {
    position: absolute;
    top: 840px;
    left: 1px;
    color: darkblue;
    font-size: 11px;
    display: block; /* Siguraduhin na block element ito */
    max-width: 140px; /* I-adjust para bumaba sa susunod na linya */
}

    .output13a{
    position: absolute;
    top: 840px;
    left: 170px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 11px;
}
    .output13b{
    position: absolute;
    top: 860px;
    left: 170px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 11px;
}
       .output13c{
    position: absolute;
    top: 880px;
    left: 170px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 11px;
}
     .output13d{
    position: absolute;
    top: 840px;
    left: 450px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 11px;
}
     .output13e{
    position: absolute;
    top: 860px;
    left: 450px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 11px;
}
       .output13f{
    position: absolute;
    top: 880px;
    left: 450px; /* Ilipat sa mas kaliwa */
    color: darkblue;
    font-size: 11px;
}
       .output13g{
    position: absolute;
    top: 885px;
    left: 1px; /* Ilipat sa mas kaliwa */
    color: darkblue;
}
 
    .vertical-line18{
            width: 2px; /* Thickness of the line */
            height: 65px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 20%; /* Adjust horizontal positioning */
            top: 839px; /* Adjust vertical positioning */
}
            .label14a {
    position: absolute;
    top: 905px;
    left: 5px;
    color: darkblue;
    font-size: 11px;
}
       .output14a {
    position: absolute;
    top: 920px;
    left: 1px;
    color: darkblue;
}
     .label15a {
    position: absolute;
    top: 940px;
    left: 5px;
    color: darkblue;
    font-size: 11px;
}
     .output15a {
    position: absolute;
    top: 950px;
    left: 15px;
    color: darkblue;
    font-size: 11px;
    display: block; /* Siguraduhin na block element ito */
    max-width: 300px; /* I-adjust para bumaba sa susunod na linya */
}
     .output15b {
    position: absolute;
    top: 985px;
    left: 15px;
    color: darkblue;
    font-size: 11px;
}
 .output15c {
    position: absolute;
    top: 1005px;
    left: 15px;
    color: darkblue;
    font-size: 11px;
}
     .output15d {
    position: absolute;
    top: 1025px;
    left: 15px;
    color: darkblue;
    font-size: 11px;
}
      .output15e {
    position: absolute;
    top: 1043px;
    left: 15px;
    color: darkblue;
    font-size: 11px;
}
      .output15f {
    position: absolute;
    top: 1060px;
    left: 15px;
    color: darkblue;
    font-size: 11px;
}
     .output15g {
    position: absolute;
    top: 940px;
    left: 380px;
    color: darkblue;
    font-size: 11px;
}
    .output15h {
    position: absolute;
    top: 975px;
    left: 375px;
    color: darkblue;
    font-size: 11px;
}
     .output15i {
    position: absolute;
    top: 1005px;
    left: 375px;
    color: darkblue;
    font-size: 11px;
}
      .output15j {
    position: absolute;
    top: 1035px;
    left: 375px;
    color: darkblue;
    font-size: 11px;
}
 .output15k {
    position: absolute;
    top: 1060px;
    left: 375px;
    color: darkblue;
    font-size: 11px;
}
    .output15l {
    position: absolute;
    top: 1060px;
    left: 1px;
    color: darkblue;
}
 
    .vertical-line19{
            width: 2px; /* Thickness of the line */
            height: 240px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 50%; /* Adjust horizontal positioning */
            top: 940px; /* Adjust vertical positioning */
}
    .label16a{
    position: absolute;
    top: 1080px;
    left: 5px;
    color: darkblue;
    font-size: 11px;
}
 .output16a{
    position: absolute;
    top: 1100px;
    left: 5px;
    color: darkblue;
    font-size: 11px;
}
  .output16b{
    position: absolute;
    top: 1120px;
    left: 5px;
    color: darkblue;
    font-size: 11px;
}
      .output16c{
    position: absolute;
    top: 1140px;
    left: 5px;
    color: darkblue;
    font-size: 11px;
}
       .output16d{
    position: absolute;
    top: 1160px;
    left: 5px;
    color: darkblue;
    font-size: 11px;
}
 .output16e {
    position: absolute;
    top: 1080px;
    left: 375px;
    color: darkblue;
    font-size: 11px;
}
  .output16f {
    position: absolute;
    top: 1105px;
    left: 375px;
    color: darkblue;
    font-size: 11px;
} 
    .output16g {
    position: absolute;
    top: 1125px;
    left: 375px;
    color: darkblue;
    font-size: 11px;
}
  .output16h {
    position: absolute;
    top: 1145px;
    left: 375px;
    color: darkblue;
    font-size: 11px;
}
  .output16i {
    position: absolute;
    top: 1165px;
    left: 375px;
    color: darkblue;
    font-size: 11px;
}
  .output16j {
    position: absolute;
    top: 1165px;
    left: 1px;
    color: darkblue;
}
  .label17a {
    position: absolute;
    top: 1185px;
    left: 5px;
    color: darkblue;
    font-size: 11px;
    font-weight: bold;
}
     /* BIRTH BACK PAGE */
 .header2d {
            color: darkblue;
            text-align: center;
            font-weight: bold;
            font-size: 12px;
            text-transform: uppercase;
            margin-top: 1px; /* Mas mataas ang value, mas bababa */
}
 .labelba {
    position: absolute;
    top: 1px;
    left: 1px;
    color: darkblue;
}
     .labelb5a {
    position: absolute;
    top: 20px;
    left: 5px;
    color: darkblue;
    font-size: 12px;
}
     .labelb5b {
    position: absolute;
    top: 20px;
    left: 150px;
    color: darkblue;
    font-size: 12px;
     display: block; /* Siguraduhin na block element ito */
    max-width: 300px; /* I-adjust para bumaba sa susunod na linya */
}
     .labelb5c {
    position: absolute;
    top: 20px;
    left: 490px;
    color: darkblue;
    font-size: 12px;
     display: block; /* Siguraduhin na block element ito */
    max-width: 200px; /* I-adjust para bumaba sa susunod na linya */
}
     .labelb5d {
    position: absolute;
    top: 60px;
    left: 1px;
    color: darkblue;
}
       .vertical-line20{
            width: 2px; /* Thickness of the line */
            height: 60px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 20%; /* Adjust horizontal positioning */
            top: 20px; /* Adjust vertical positioning */
}
            .vertical-line21{
            width: 2px; /* Thickness of the line */
            height: 60px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 67%; /* Adjust horizontal positioning */
            top: 20px; /* Adjust vertical positioning */
}
             .labelb6a {
    position: absolute;
    top: 78px;
    left: 4px;
    color: darkblue;
    font-size: 12px;
}
    
             .labelb6b {
    position: absolute;
    top: 78px;
    left: 337px;
    color: darkblue;
    font-size: 12px;
}
       .labelb6c {
    position: absolute;
    top: 105px;
    left: 1px;
    color: darkblue;
}
         .vertical-line22{
            width: 2px; /* Thickness of the line */
            height: 45px; /* Length of the line */
            background-color: darkblue; /* Line color */
            position: absolute; /* Keeps it inside the container */
            left: 45%; /* Adjust horizontal positioning */
            top: 78px; /* Adjust vertical positioning */
}
    .labelb7a {
    position: absolute;
    top: 127px;
    left: 280px;
    color: darkblue;
    font-size: 12px;
    font-weight: bold;
}
             .labelb7b {
    position: absolute;
    top: 130px;
    left: 1px;
    color: darkblue;
}    
    .labelb8a {
    position: absolute;
    top: 150px;
    left: 12px;
    color: darkblue;
    font-size: 12px;
}
    .labelb8b {
    position: absolute;
    top: 180px;
    left: 25px;
    color: darkblue;
    font-size: 12px;
}
     .labelb8c {
    position: absolute;
    top: 205px;
    left: 25px;
    color: darkblue;
    font-size: 12px;
}
    .labelb8d {
    position: absolute;
    top: 230px;
    left: 25px;
    color: darkblue;
    font-size: 12px;
}
      .labelb8e {
    position: absolute;
    top: 255px;
    left: 25px;
    color: darkblue;
    font-size: 12px;
}
       .labelb8f {
    position: absolute;
    top: 280px;
    left: 25px;
    color: darkblue;
    font-size: 12px;
}
     .labelb8g {
    position: absolute;
    top: 300px;
    left: 250px;
    color: darkblue;
    font-size: 12px;
    font-weight: bold;
}
      .labelb8g {
    position: absolute;
    top: 300px;
    left: 250px;
    color: darkblue;
    font-size: 12px;
    font-weight: bold;
}
      .labelb8h {
    position: absolute;
    top: 300px;
    left: 1px;
    color: darkblue;
}
      .labelb9a {
    position: absolute;
    top: 320px;
    left: 230px;
    color: darkblue;
      font-size: 12px;
       font-weight: bold;
}
       
      .outputb9a {
    position: absolute;
    top: 340px;
    left: 25px;
    color: darkblue;
      font-size: 10px;
}
       .outputb9b {
    position: absolute;
    top: 350px;
    left: 29px;
    color: darkblue;
}
      .outputb9c {
    position: absolute;
    top: 370px;
    left: 29px;
    color: darkblue;
}
      .outputb9d {
    position: absolute;
    top: 400px;
    left: 15px;
    color: darkblue;
    font-size: 12px;
}
         .outputb9e {
    position: absolute;
    top: 420px;
    left: 15px;
    color: darkblue;
    font-size: 12px;
}
       .outputb9f {
    position: absolute;
    top: 440px;
    left: 15px;
    color: darkblue;
    font-size: 12px;
}
      .outputb9g {
    position: absolute;
    top: 400px;
    left: 380px;
    color: darkblue;
    font-size: 12px;
}
.outputb9h {
    position: absolute;
    top: 420px;
    left: 380px;
    color: darkblue;
    font-size: 12px;
}
.outputb9i {
    position: absolute;
    top: 435px;
    left: 380px;
    color: darkblue;
}
.outputb9j {
    position: absolute;
    top: 440px;
    left: 1px;
    color: darkblue;
}
    .labelb10a {
    position: absolute;
    top: 460px;
    left: 250px;
    color: darkblue;  
    font-size: 12px;
    font-weight: bold;
}
   .outputb10a {
    position: absolute;
    top: 485px;
    left: 20px;
    color: darkblue;  
    font-size: 12px;

}
    .outputb10b {
    position: absolute;
    top: 500px;
    left: 10px;
    color: darkblue;  
    font-size: 12px;

}
    .outputb10c {
    position: absolute;
    top: 520px;
    left: 25px;
    color: darkblue;  
    font-size: 12px;

}
     .outputb10d {
    position: absolute;
    top: 540px;
    left: 25px;
    color: darkblue;  
    font-size: 12px;

}
      .outputb10e {
    position: absolute;
    top: 560px;
    left: 25px;
    color: darkblue;  
    font-size: 12px;

}
       .outputb10f {
    position: absolute;
    top: 575px;
    left: 25px;
    color: darkblue;  

}
     .outputb10g {
    position: absolute;
    top: 520px;
    left: 380px;
    color: darkblue;  
    font-size: 12px;

}
     .outputb10h {
    position: absolute;
    top: 545px;
    left: 380px;
    color: darkblue;  
    font-size: 12px;

}
    
     .outputb10i {
    position: absolute;
    top: 565px;
    left: 380px;
    color: darkblue;  
    font-size: 12px;

}
     .outputb10j {
    position: absolute;
    top: 585px;
    left: 380px;
    color: darkblue;  
    font-size: 12px;

}
        .outputb10k {
    position: absolute;
    top: 590px;
    left: 1px;
    color: darkblue;  

}
       .labelb11a {
    position: absolute;
    top: 610px;
    left: 200px;
    color: darkblue;  
    font-size: 12px;
    font-weight: bold;

}
      .outputb11a {
    position: absolute;
    top: 635px;
    left: 20px;
    color: darkblue;  
    font-size: 12px;

}
      .outputb11b {
    position: absolute;
    top: 655px;
    left: 10px;
    color: darkblue;  
    font-size: 12px;

}
    .outputb11c {
    position: absolute;
    top: 675px;
    left: 10px;
    color: darkblue;  
    font-size: 12px;

}
    .labelb12a{
    position: absolute;
    top: 705px;
    left: 30px;
    color: darkblue;  
    font-size: 12px;

}
       .outputb12a{
    position: absolute;
    top: 725px;
    left: 30px;
    color: darkblue;  
    font-size: 12px;

}
       .outputb12b{
    position: absolute;
    top: 745px;
    left: 30px;
    color: darkblue;  
    font-size: 12px;

}
      .outputb12c{
    position: absolute;
    top: 765px;
    left: 30px;
    color: darkblue;  
    font-size: 12px;

}
       .outputb12d{
    position: absolute;
    top: 795px;
    left: 140px;
    color: darkblue;  
    font-size: 12px;

}
       .outputb12e{
    position: absolute;
    top: 825px;
    left: 140px;
    color: darkblue;  
    font-size: 12px;

}
        .outputb12f{
    position: absolute;
    top: 845px;
    left: 30px;
    color: darkblue;  
    font-size: 12px;

}
      .outputb12g{
    position: absolute;
    top: 870px;
    left: 30px;
    color: darkblue;  
    font-size: 12px;

}
    
      .outputb12h{
    position: absolute;
    top: 885px;
    left: 30px;
    color: darkblue;  

}
       .outputb12i{
    position: absolute;
    top: 910px;
    left: 30px;
    color: darkblue;  
      font-size: 12px;

}
        .outputb12j{
    position: absolute;
    top: 930px;
    left: 30px;
    color: darkblue;  
      font-size: 12px;

}
   
      .resizable-box3 {
    width: 20px;
    height: 20px;
    border: 2px solid #000;
    position: absolute; /* O gamitin ang fixed kung gusto mo ito laging nasa view */
    resize: both;
    overflow: auto;
    border: 2px solid darkblue; /* Ginawang green ang border */
    top: 790px; /* Pwede mong itaas o ibaba ito */
    left: 100px; /* Upang siguradong nasa loob ito ng viewport */
}
         .resizable-box4 {
    width: 20px;
    height: 20px;
    border: 2px solid #000;
    position: absolute; /* O gamitin ang fixed kung gusto mo ito laging nasa view */
    resize: both;
    overflow: auto;
    border: 2px solid darkblue; /* Ginawang green ang border */
    top: 820px; /* Pwede mong itaas o ibaba ito */
    left: 100px; /* Upang siguradong nasa loob ito ng viewport */
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
               <div class='output5c'>10.RESIDENCE</div> 
                   <div class='output5d'>(House no.,St Barangay., City/Municipality.,Province.,Country)</div> 
                              <div class='output5i'>_________________________________________________________________________________</div>
                                <div class='vertical-line12'></div>
                                   <div class='vertical-line13'></div>
             <div class='section4d'> </div>
             <div class='label6a'>11.OCCUPATION</div>
               <div class='output6a'>12.NAME OF FATHER (First,Middle,Last)</div>
                  <div class='output6b'>13.MAIDEN NAME OF MOTHER(First,Middle,Last)</div>
                   <div class='output6c'>_________________________________________________________________________________</div>
                    <div class='vertical-line14'></div>
                       <div class='vertical-line15'></div>
                       </div>
                             <div class='section4e'> </div>
             <div class='label7a'>MEDICAL CERTIFICATE</div>   
              <div class='output7a'>(For ages 0 to 7 days, accomplish items 14-19a at the back)</div> 
             <div class='output7b'>_________________________________________________________________________________</div>   
            <div class='output7c'>19b.CAUSES OF DEATH(if the deceased is aged 8 days and over)</div> 
             <div class='output7d'>I. Immediate cause</div> 
                <div class='output7e'>:a._________________________________________________</div> 
                 <div class='output7f'> Antecedent cause</div> 
                    <div class='output7g'>:b._________________________________________________</div> 
                    <div class='output7h'> Underlying cause</div> 
                    <div class='output7i'>:c._________________________________________________</div> 
                         <div class='output7j'> Interval Betwwen Onset and Death</div> 
                          <div class='output7k'>__________________________</div> 
                          <div class='output7l'>__________________________</div> 
                          <div class='output7m'>__________________________</div> 
                           <div class='output7n'>II. Other significant conditions contributing to death:__________________________________________________ </div> 
                          <div class='output7o'>_________________________________________________________________________________</div>   
                   
                          </div>
                           <div class='section4d'> </div>
                                 <div class='label8a'> 19c. MATERNAL CONDTION (if the deceased is female aged 15-49 years old)</div>
                                  <div class='output8a'> ______a.pregnant, not labour </div>
                                    <div class='output8b'> ______b.pregnant, in labour</div>
                                    <div class='output8c'> ______c.less than 42 days after delivery</div>
                                    <div class='output8d'> ______d.42 days to 1 year after delivery</div>
                                    <div class='output8e'> ______e. None of the choices</div>
                                     <div class='output8f'>_________________________________________________________________________________</div>   
                                     </div>
                                      <div class='section4e'> </div>
                                       <div class='label9a'>19d.DEATH BY EXTERNAL CAUSES </div>
                                       <div class='output9a'>a.Manner of death(Homicide,Suicide,Accident,Legal intervention,etc.)______________________________________ </div>
                                         <div class='output9b'>b.Place of Occurrence of external Cause(e.g home,farm,factory,street,sea,etc.)______________________________ </div>
                                        <div class='output9c'>20.AUTOPSY(Yes/no)</div>
                                         <div class='output9d'>_________________________________________________________________________________</div>   
                                           <div class='vertical-line16'></div>
</div>                 
                              <div class='section4f'> </div>
                                <div class='label10a'> 21.a ATTENDANT</div>
                                 <div class='output10b'> _____1.Private Physician</div>
                                  <div class='output10c'> _____2.Public Health Officer</div>
                                    <div class='output10d'> _____3.Hospital Authority</div>
                                    <div class='output10e'> _____4.None</div>
                                    <div class='output10f'> _____5.Others (Specify)_____</div>
                                      <div class='output10g'> 21b.If attended, state duration(mm/dd/yy)</div>
                                      <div class='output10h'>_________________________________________________________________________________</div>   
                                         <div class='output10i'> From___________</div>
                                             <div class='output10j'> To______________</div>
                                      <div class='vertical-line17'></div>
                                  
</div>
                                    <div class='section4g'> </div>
                                      <div class='label11a'> 22.CERTIFICATION OF DEATH</div>
                                       <div class='output11a'> I hereby certify that the foregoing particulars are correct as near as same can be ascertained and I further certify that I</div>
                                        <div class='output11b'> have attended/</div>
                                        <div class='output11c'>have not attended the deceased and that death occured at_________am/pm on the date of death specified above.</div>
                                       <div class='resizable-box1 '> </div>
                                         <div class='resizable-box2'> </div>
                                       </div>
                                       
                                    <div class='section4h'> </div>
                                    <div class='label12a'> Signature____________________________________________________ </div>
                                      <div class='output12a'> Name in Print______________________________________________ </div>
                                        <div class='output12b'> Title or Position____________________________________________ </div>
                                    <div class='output12c'> Address__________________________________________________ </div>
                                    <div class='output12d'>REVIEWED BY</div>
                                    <div class='output12e'>___________________________ </div>
                                    <div class='output12f'>Signature Over Printed Name of Health Officer </div>
                                     <div class='output12g'>_______________________________________ </div>
                                      <div class='output12h'>Date </div>
                                       <div class='output12i'>_________________________________________________________________________________</div>   
                                        </div>
                                            <div class='section4i'> </div>
                                                <div class='label13a'> 23.CORPSE DISPOSAL (Burial,Cremation, if others,specify)</div>
                                                 <div class='output13a'> 24a.BURIAL/CREMATION PERMIT</div>
                                                   <div class='output13b'> Number____________________________________</div>
                                                    <div class='output13c'> Date Issued_________________________________</div>
                                                    <div class='output13d'> 24.TRANSFER PERMIT</div>
                                                    <div class='output13e'> Number____________________________________</div>
                                                    <div class='output13f'> Date Issued_________________________________</div>
                                                     <div class='output13g'>_________________________________________________________________________________</div>   
                                                    <div class='vertical-line18'></div>

                                  
                                          </div>
                                               <div class='section4g'> </div>
                                                    <div class='label14a'>25.NAME AND ADDRESS OF CEMETERY OR CREMATORY</div>
                                                    <div class='output14a'>_________________________________________________________________________________</div>   
                                      
</div>
                                 <div class='section4h'> </div>
                                  <div class='label15a'>26.CERTIFICATION OF INFORMANT </div>
                                    <div class='output15a'>I hereby certify that all information supplied are true and correct to my own knowledge and belief </div>
                                    <div class='output15b'>Signature___________________________________________</div>
                                    <div class='output15c'>Name in Print________________________________________</div>
                                      <div class='output15d'>Relationship to the Deceased___________________________</div>
                                       <div class='output15e'>Address____________________________________________</div>
                                        <div class='output15f'>Date_______________________________________________</div>
                                          <div class='output15g'>27.PREPARED BY</div>
                                           <div class='output15h'>Signature___________________________________________</div>
                                           <div class='output15i'>Name in Print________________________________________</div>
                                             <div class='output15j'>Title or Position______________________________________</div>
                                             <div class='output15k'>Date_______________________________________________</div>
                                              <div class='output15l'>_________________________________________________________________________________</div>   
                                                 <div class='vertical-line19'></div>
                                                  
</div>
                                <div class='section4i'> </div>
                                   <div class='label16a'> 28.RECEIVED BY</div>
                                   <div class='output16a'>Signature_____________________________________________</div>
                                    <div class='output16b'>Name in Print__________________________________________</div>
                                    <div class='output16c'>Title or Position________________________________________</div>
                                      <div class='output16d'>Date_________________________________________________</div>
                                        <div class='output16e'>19.REGISTERED AT THE OFFICE OF THE CIVIL REGISTRAR</div>
                                        <div class='output16f'>Signature_____________________________________________</div>
                                         <div class='output16g'>Name in Print__________________________________________</div>
                                         <div class='output16h'>Title or Position________________________________________</div>
                                         <div class='output16i'>Date_________________________________________________</div>
                                          <div class='output16j'>_________________________________________________________________________________</div>  
</div>
                            <div class='section4j'> </div>
                              <div class='label17a'> REMARKS/ANNOTATIONS (For LCRO/OCRG Use Only)</div>
</div>
<div class='page-break'></div>
<div class='page'>
    <div class='content'>
       <div class='container'> 
         <div class='header2d'>FOR CHILD AGED O TO 7 DAYS</div>
           <div class='labelba'>_________________________________________________________________________________</div>

</div>

                            <div class='section5a'> </div>
                               <div class='labelb5a'>14.AGED OF MOTHER</div>
                                <div class='labelb5b'>15.METHOD OF DELIVERY (Normal spontaneous vertex,if others,specfy)</div>
                                  <div class='labelb5c'>16.LENGTH OF PREGNANCY: (in completed weeks)</div>
                                  <div class='labelb5d'>_________________________________________________________________________________</div>
                                           <div class='vertical-line20'></div>
                                             <div class='vertical-line21'></div>
</div>
                                 <div class='section5b'> </div>
                                 <div class='labelb6a'>17.TYPE OF BIRTH(Single,Twin,Triplet,etc.)</div>
                                  <div class='labelb6b'>18. IF MULTIPLE BIRTH, CHILD WAS(First,Second,Third,etc)</div>
                                      <div class='labelb6c'>_________________________________________________________________________________</div>
                                    <div class='vertical-line22'></div>
</div>
                                <div class='section5c'> </div>
                                    <div class='labelb7a'> MEDICAL CERTIFICATE</div>
                                     <div class='labelb7b'>_________________________________________________________________________________</div>
</div>
                     <div class='section5d'> </div>
                         <div class='labelb8a'> 19a.CAUSES OF DEATH</div>
                         <div class='labelb8b'> a.Main disease/condition of infant__________________________________________________________________________</div>
                         <div class='labelb8c'> b.Other diseases/conditions of infant________________________________________________________________________</div>
                        <div class='labelb8d'> c.Main maternal disease/conditions affecting infant_____________________________________________________________</div>
                         <div class='labelb8e'>d.Other maternal disease/conditions affecting infant____________________________________________________________</div>
                        <div class='labelb8f'>e.Other relevant circumstances____________________________________________________________________________</div>
                         <div class='labelb8g'>CONTINUE TO FILL UP ITEM 2O</div>
                            <div class='labelb8h'>_________________________________________________________________________________</div>
                        

                         </div>
                             <div class='section5e'> </div>
                                 <div class='labelb9a'> POSTMORTEM CERTIFICATE OF DEATH</div>
                                    <div class='outputb9a'> I HEREBY CERTIFY THAT I HAVE PERFORMED AN AUTOPSY UPON THE BODY OF THE DECEASED AND THAT THE CAUSE OF DEATH WAS</div>
                                    <div class='outputb9b'>___________________________________________________________________________</div>
                                       <div class='outputb9c'>___________________________________________________________________________</div>
                                          <div class='outputb9d'>Signature_____________________________________________</div>
                                                <div class='outputb9e'>Name in Print_________________________________________</div>
                                                     <div class='outputb9f'>Date________________________________________________</div>
                                                      <div class='outputb9g'>Title/Designation____________________________________</div>
                                                         <div class='outputb9h'>Address___________________________________________</div>
                                                               <div class='outputb9i'>_____________________________________</div>
                                                                  <div class='outputb9j'>_________________________________________________________________________________</div>
                        
                        

                                    </div>
                                      <div class='section5f'> </div>
                                        <div class='labelb10a'> CERTIFICATION OF EMBALMER</div>
                                          <div class='outputb10a'> I HEREBY CERTIFY that i have embalmed____________________________________________________________following</div>
                                          <div class='outputb10b'> all the regulations prescribed by the Department of Health.</div>
                                          <div class='outputb10c'>Signature___________________________________________</div>
                                             <div class='outputb10d'>Name in Print________________________________________</div>
                                                <div class='outputb10e'>Address____________________________________________</div>
                                                 <div class='outputb10f'>______________________________________</div>
                                                   <div class='outputb10g'>Title/Designation____________________________________</div>
                                                      <div class='outputb10h'>License No.________________________________________</div>
                                                         <div class='outputb10i'>Issued on___________________at_____________________</div>
                                                             <div class='outputb10j'>Expiry Date________________________________________</div>
                                                               <div class='outputb10k'>_________________________________________________________________________________</div>
                        
</div>
                                        <div class='section5f'> </div>
                                        <div class='labelb11a'>AFFIDAVIT FOR DELAYED REGISTRATION OF DEATH</div>
                                          <div class='outputb11a'>I,_____________________________________________________________,of legal age, single/married/divorced/widow/widower,</div>
                                          <div class='outputb11b'>with residence and postal address_______________________________________________________________________________</div>
                                            <div class='outputb11c'>_____________________________________________,after being duly sworn in accordance with law, do hereby depose and say:</div>
</div>
                                         <div class='section5g'> </div>
                                             <div class='labelb12a'>1.That_________________________________________________,died on_______________________________________ in</div>
                                                <div class='outputb12a'>________________________________________________________________________________and was buried/cremated in</div>
                                                 <div class='outputb12b'>__________________________________________________________on__________________________________________</div>
                                                   <div class='outputb12c'>2.That the deceased at the time of his/her death:</div>
                                                       <div class='outputb12d'>was attended by____________________________</div>
                                                            <div class='outputb12e'>was not attended.</div>
                                                                <div class='outputb12f'>3.That the cause of death of the deceased was________________________________________________________________</div>
                                                                 <div class='outputb12g'>4.That the reason for the delay in registering this death due to_____________________________________________________</div>
                                                                   <div class='outputb12h'>_____________________________________________________________________________</div>
                                                                         <div class='outputb12i'>5.That I am executing this affidavit to attest to the truthfulness of the foregoing statements for all legal intents and purposes.</div>
                                                                         <div class='outputb12j'>In the truth whereof, I have affixed my signature below this_______________day of____________________,________________</div>
                                                                           <div class='outputb12k'>at______________________________________________________________________</div>
                                                       <div class='resizable-box3'> </div>
                                                         <div class='resizable-box4'> </div>
                                                 

</div>
</div>
</div>
</div>
</div>
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
