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
            .horizontal_line1a {
                width: 99.5%; 
                height: 0.1%; 
                background-color: green;
                position: absolute;
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
                position: absolute;
                top: 8.7%;
                left: 14%
            }
            .label1b {
                font-size: 13px;
                text-transform: normal;
                font-size: 12px;
                position: absolute;
                top: 9.8%;
                left: 1%
            }
            p.labelline1b {
                color: green;
                position: absolute;
                top:9.4%;
                left: 13.9%
            }
            p.output1b {
                font-size: 13px;
                position: absolute;
                text-transform: uppercase;
                top: 7%;
                left: 12%
            }
            .vertical_line1a {
                width: 1px; 
                height: 58px; 
                background-color: green;
                position: absolute; 
                left: 63%;
                top: 6.9%;
            }
            .label1c {
                font-size: 12px;
                text-transform: normal;
                color: green;
                position: absolute;
                top: 7%;
                left: 64%; 
            }
            p.output1c {
                font-size: 18px;
                color: gray;
                position: absolute;
                top: 7%;
                left: 77%; 
            }
            .horizontal_line1b {
                width: 99.5%; 
                height: 0.1%; 
                background-color: green;
                position: absolute;
                top: 11.5%;
            }
            .vertical_line1b {
                width: 1.3px; 
                height: 510px; 
                background-color: green;
                position: absolute; 
                left: 3.5%;
                top: 11.5%;
            }   
            .labelside1 {
                font-size: 15px;
                text-align: center;
                position: absolute;
                top: 16%;
                left: 1%;
            }
            .label2a {
                font-size: 11px;
                position: absolute;
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
                 .label6b {
               font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 26.6%;
                left: 17%;
            }
                .output6a{
                font-size: 13px;
                position: fixed;
                color: black;
                top: 27.5%;
                left: 15%;
}
                 .label6c{
                font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 26.6%;
                left: 48%; 
}
                .output6b{
                font-size: 13px;
                position: fixed;
                color: black;
                top: 27.5%;
                left: 45%;
}
                       .label6d{
                font-size: 10px;
                text-transform: normal;
                color: green;
                position: fixed;
                top: 26.6%;
                left: 81%; 
}
              .output6c{
                font-size: 13px;
                position: fixed;
                color: black;
                top: 27.5%;
                left: 78%;
}
                  .horizontal_line1g {
                   width: 96%; 
                height: 0.1%; 
                background-color: green;
                position: fixed;
                top: 30%;
                left: 3.7%;
            }
                    .label7a {
                font-size: 11px;
                position: fixed;
                top: 30.5%;
                left: 4%;
            }
                .output7a{
                 font-size: 13px;
                position: fixed;
                color: black;
                top: 31%;
                left: 10%;
}
            .label8a{
               font-size: 11px;
                position: fixed;
                top: 30.5%;
                left: 61%;
}
                 .output8a{
                font-size: 13px;
                position: fixed;
                color: black;
                top: 31%;
                left: 62%;
}
                .vertical_line1g{
                width: 1px; 
                height: 46px; 
                background-color: green;
                position:  absolute; 
                left: 60%;
                top: 30%;
}
                .horizontal_line1h {
                width: 96%; 
                height: 0.1%; 
                background-color: green;
                position: absolute ;
                top: 33.5%;
                left: 3.7%;
            }
               .label9a{
                font-size: 10px;
                position: absolute;
                top: 34%;
                left: 4%;
                color: black;
}
                .output9a{
                font-size: 13px;
                position: absolute;
                color: black;
                top: 35.5%;
                left: 8%;
}
                .label9b{
                font-size: 10px;
                position: absolute;
                top: 34%;
                left: 21%;
}
                .output9b{
                font-size: 13px;
                position: absolute;
                color: black;
                top: 35.5%;
                left: 28%;
}
                   .label9c{
                font-size: 10px;
                position: absolute;
                top: 34%;
                left: 43%;
}
                 .output9c{
                font-size: 13px;
                position: absolute;
                color: black;
                top: 35.5%;
                left: 48%;
}
                  .label9d{
                font-size: 11px;
                position: absolute;
                top: 34%;
                left: 64%;
}
                .output9d{
                font-size: 13px;
                position: absolute;
                color: black;
                top: 35.5%;
                left: 63%;
}
                .label9e{
                font-size: 11px;
                position: absolute;
                top: 34%;
                left: 81%;
}
             .output9e{
              font-size: 13px;
              position: absolute;
              color: black;
              top: 35.5%;
              left: 90%;
}
            .vertical_line1h{
            width: 1px; 
            height: 60px; 
            background-color: green;
            position: absolute; 
            left: 20.5%;
            top: 33.5%;
}
                
            .vertical_line1i{
            width: 1px; 
            height: 60px; 
            background-color: green;
            position: absolute; 
            left: 42%;
            top: 33.5%;
}
             .vertical_line1j{
            width: 1px; 
            height: 60px; 
            background-color: green;
            position: absolute; 
            left: 62.5%;
            top: 33.5%;
}
            .vertical_line1k{
            width: 1px; 
            height: 60px; 
            background-color: green;
            position: absolute; 
            left: 80%;
            top: 33.5%;
}
            .horizontal_line1i {
            width: 96%; 
            height: 0.1%; 
            background-color: green;
            position: absolute ;
            top: 38.4%;
            left: 3.7%;
}
            .label10a{
            font-size: 10px;
            position: absolute;
            top: 38.5%;
            left: 4%;
            color: black;
            text-transform: normal;
}
            .label10b{
            font-size: 10px;
            position: absolute;
            top: 38.5%;
            left: 20%;
            color: green;
            text-transform: normal;
}    
            .output10b{
            font-size: 13px;
            position: absolute;
            top: 38.7%;
            left: 10%;
            color: black;
}           
            .label10c{
            font-size: 10px;
            position: absolute;
            top: 38.5%;
            left: 45%;
            color: green;
             text-transform: normal;
}
            .output10c{
            font-size: 13px;
            position: absolute;
            top: 38.7%;
            left: 43%;
            color: black;
}
            .label10d{
            font-size: 10px;
            position: absolute;
            top: 38.5%;
            left: 68%;
            color: green;
             text-transform: normal;
}
            .output10d{
            font-size: 13px;
            position: absolute;
            top: 38.7%;
            left: 66%;
            color: black;
}
             .label10e{
            font-size: 10px;
            position: absolute;
            top: 38.5%;
            left: 88%;
            color: green;
            text-transform: normal;
}
            .output10e{
            font-size: 13px;
            position: absolute;
            top: 38.7%;
            left: 83%;
            color: black;
}
            .horizontal_line1j {
            width: 99.5%; 
            height: 0.1%; 
            background-color: green;
            position: absolute;
            top: 41%;
}
            .labelside3 {
            font-size: 15px;
            text-align: center;
            position: absolute;
            top: 43%;
            left: 1%;
}
            .label11a{
            font-size: 10px;
            position: absolute;
            top: 41.5%;
            left: 4%;
            color: black;
}
            .label11b{
            font-size: 10px;
            position: absolute;
            top: 41.3%;
            left: 16.5%;
            color: green;
            text-transform: normal;
}
            .output11b{
            font-size: 13px;
            position: absolute;
            top: 42%;
            left: 10%;
            color: black;
}
            .label11c{
            font-size: 10px;
            position: absolute;
            top: 41.3%;
            left: 49%;
            color: green;
            text-transform: normal;
}
            .output11c{
            font-size: 13px;
            position: absolute;
            top: 42%;
            left: 45%;
            color: black;
}
            .label11d{
            font-size: 10px;
            position: absolute;
            top: 41.3%;
            left: 80%;
            color: green;
            text-transform: normal;
}
            .output11d{
            font-size: 13px;
            position: absolute;
            top: 42%;
            left: 75%;
            color: black;
}
            .horizontal_line1k{
            width: 96%; 
            height: 0.1%; 
            background-color: green;
            position: absolute ;
            top: 44.5%;
            left: 3.7%;
}
            .label12a{
            font-size: 10px;
            position: absolute;
            top: 45%;
            left: 4%;
            color: black;
}
            .output12a{
            font-size: 13px;
            position: absolute;
            top: 45.5%;
            left: 7%;
            color: black;
}
            .label13a{
            font-size: 10px;
            position: absolute;
            top: 45%;
            left: 27%;
            color: black;
}
            .output13a{
            font-size: 13px;
            position: absolute;
            top: 45.5%;
            left: 27%;
            color: black;
}
            .label14a{
            font-size: 10px;
            position: absolute;
            top: 45%;
            left: 55%;
            color: black;
}
            .output14a{
            font-size: 13px;
            position: absolute;
            top: 45.5%;
            left: 55%;
            color: black;
}
            .label15a{
            font-size: 10px;
            position: absolute;
            top: 45%;
            left: 78%;
            color: black;
}
            .output15a{
            font-size: 13px;
            position: absolute;
            top: 45.7%;
            left: 86%;
            color: black;
}
            .horizontal_line1l{
            width: 96%; 
            height: 0.1%; 
            background-color: green;
            position: absolute ;
            top: 48%;
            left: 3.7%;
}
            
            .vertical_line1l{
            width: 1px; 
            height: 46px; 
            background-color: green;
            position: absolute; 
            left: 26%;
            top: 44.5%;
}
                  
            .vertical_line1m{
            width: 1px; 
            height: 46px; 
            background-color: green;
            position: absolute; 
            left: 53%;
            top: 44.5%;
}
            .vertical_line1n{
            width: 1px; 
            height: 46px; 
            background-color: green;
            position: absolute; 
            left: 77%;
            top: 44.5%;
}
                .label16a{
            font-size: 10px;
            position: absolute;
            top: 48.4%;
            left: 4%;
            color: black;
}
              .label16b{
            font-size: 10px;
            position: absolute;
            top: 48.4%;
            left: 20%;
            color: green;
            text-transform: normal;
}    
            .output16b{
            font-size: 13px;
            position: absolute;
            top: 48.6%;
            left: 10%;
            color: black;
}           
            .label16c{
            font-size: 10px;
            position: absolute;
            top: 48.4%;
            left: 45%;
            color: green;
            text-transform: normal;
}    
            .output16c{
            font-size: 13px;
            position: absolute;
            top: 48.6%;
            left: 43%;
            color: black;
}           
             .label16d{
            font-size: 10px;
            position: absolute;
            top: 48.4%;
            left: 68%;
            color: green;
            text-transform: normal;
}    
            .output16d{
            font-size: 13px;
            position: absolute;
            top: 48.6%;
            left: 66%;
            color: black;
}  
               
             .label16e{
            font-size: 10px;
            position: absolute;
            top: 48.4%;
            left: 88%;
            color: green;
            text-transform: normal;
}    
            .output16e{
            font-size: 13px;
            position: absolute;
            top: 48.6%;
            left: 84%;
            color: black;
}           
            .horizontal_line1m{
            width: 99.5%; 
            height: 0.1%; 
            background-color: green;
            position: absolute;
            top: 52%;
}
            .label17a{
            font-size: 13px;
            position: absolute;
            top: 52%;
            left: 1%;
            color: black;
            text-transform: normal;
}   
                    
            .horizontal_line1n{
            width: 99.5%; 
            height: 0.1%; 
            background-color: green;
            position: absolute;
            top: 53.5%;
}
            .label17b{
            font-size: 10px;
            position: absolute;
            top: 53.5%;
            left: 1%;
            color: black;
}   
            .label17c{
            font-size: 10px;
            position: absolute;
            top: 53.5%;
            left: 12%;
            color: green;
            text-transform: normal;
}   
            .output17c{
            font-size: 13px;
            position: absolute;
            top: 53.5%;
            left: 12%;
            color: black;
} 
             .label17d{
            font-size: 10px;
            position: absolute;
            top: 53.5%;
            left: 20%;
            color: green;
            text-transform: normal;
}   
            .output17d{
            font-size: 13px;
            position: absolute;
            top: 53.5%;
            left: 20%;
            color: black;
} 
            .label17e{
            font-size: 10px;
            position: absolute;
            top: 53.5%;
            left: 27%;
            color: green;
            text-transform: normal;
}   
            .output17e{
            font-size: 13px;
            position: absolute;
            top: 53.5%;
            left: 27%;
            color: black;
} 
             .label17f{
            font-size: 10px;
            position: absolute;
            top: 53.5%;
            left: 40%;
            color: black;
            text-transform: normal;
}   
            .label17g{
            font-size: 10px;
            position: absolute;
            top: 53.5%;
            left: 50%;
            color: green;
            text-transform: normal;
} 
            .output17g{
            font-size: 13px;
            position: absolute;
            top: 53.5%;
            left: 47%;
            color: black;
} 
            .label17h{
            font-size: 10px;
            position: absolute;
            top: 53.5%;
            left: 70%;
            color: green;
            text-transform: normal;
} 
            .output17h{
            font-size: 13px;
            position: absolute;
            top: 53.5%;
            left: 68%;
            color: black;
}
                 .label17i{
            font-size: 10px;
            position: absolute;
            top: 53.5%;
            left: 88%;
            color: green;
            text-transform: normal;
} 
            .output17i{
            font-size: 13px;
            position: absolute;
            top: 53.5%;
            left: 84%;
            color: black;
}
            .horizontal_line1o{
            width: 99.5%; 
            height: 0.1%; 
            background-color: green;
            position: absolute;
            top: 56%;
}
            .label18a{
            font-size: 10px;
            position: absolute;
            top: 56.5%;
            left: 1%;
            color: black;
}
            .label18b{
            font-size: 10px;
            position: absolute;
            top: 56.5%;
            left:5%;
            color: black;
}
           .labelline2e {
                color: black;
                position: absolute;
                top: 57%;
                left:1%;
                font-size: 10px;
                text-transform: normal;
}
                .output18b{
                font-size: 12px;
                position: absolute;
                top: 56.5%;
                left: 5%;
                color: black;
} 
 
            .label18c{
            font-size: 10px;
            position: absolute;
            top: 56.5%;
            left:10%;
            color: black;
}
 
                .labelline2f {
                color: black;
                position:absolute;
                top: 57%;
                left:17%;
                font-size: 10px;
                text-transform: normal;
}
                .output18c{
                font-size: 12px;
                position: absolute;
                top: 56.5%;
                left: 19%;
                color: black;
} 
                .label18d{
                font-size: 10px;
                position: absolute;
                top: 56.5%;
                left:10%;
                color: black;
}
 
                .labelline2g{
                color: black;
                position: absolute;
                top: 57%;
                left:30%;
                font-size: 10px;
                text-transform: normal;
}
                .output18d{
                font-size: 12px;
                position: absolute;
                top: 56.5%;
                left: 33%;
                color: black;
} 
                .label18e{
                font-size: 10px;
                position: absolute;
                top: 56.5%;
                left:10%;
                color: black;
}
 
                .labelline2h{
                color: black;
                position: absolute;
                top: 57%;
                left:44%;
                font-size: 10px;
                text-transform: normal;
}
                .output18e{
                font-size: 12px;
                position: absolute;
                top: 56.5%;
                left: 46%;
                color: black;
} 
                .label18f{
                font-size: 10px;
                position: absolute;
                top: 56.5%;
                left:10%;
                color: black;
}
 
                .labelline2i{
                color: black;
                position: absolute;
                top: 57%;
                left:73%;
                font-size: 10px;
                text-transform: normal;
}
                .output18f{
                font-size: 12px;
                position: absolute;
                top: 56.5%;
                left: 77%;
                color: black;
} 
                .output18g{
                font-size: 12px;
                position: absolute;
                top: 56.5%;
                left: 93%;
                color: black;
} 
            .horizontal_line1p{
            width: 99.5%; 
            height: 0.1%; 
            background-color: green;
            position: absolute;
            top: 59%;
}
            .label19a{
            font-size: 11px;
            position: absolute;
            top: 59%;
            left: 1%;
            color: black;
            text-transform: normal;
}
            .label19b{
            font-size: 11px;
            position: absolute;
            top: 60%;
            left: 10%;
            color: black;
            text-transform: normal;
}
            .labelline2j{
            color: black;
            position: absolute;
            top: 58.8%;
            left:58.7%;
            text-transform: normal;
}
            
            .label19c{
            color: black;
            position: absolute;
            top: 60%;
            left:67%;
            font-size: 10px;
            text-transform: normal;
}
  
            .output19d{
            color: black;
            position: absolute;
            top: 59.3%;
            left:60%;
            font-size: 10px;
            text-transform: normal;
}
            .label19d{
            color: black;
            position: absolute;
            top: 62%;
            left:2%;
            font-size: 13px;
            text-transform: normal;
}
            .labelline2k{
            color: green;
            position: absolute;
            top: 61%;
            left:10%;
            text-transform: normal;
}
            .output19e{
            color: black;
            position: absolute;
            top: 61.1%;
            left:13%;
            font-size: 12px;
            text-transform: normal;
}
            .label19e{
            color: black;
            position: absolute;
            top: 63.5%;
            left:2%;
            font-size: 13px;
            text-transform: normal;
}
            .labelline2l{
            color: green;
            position: absolute;
            top: 62.5%;
            left:13%;
            text-transform: normal;
}
               .output19f{
            color: black;
            position: absolute;
            top: 62.3%;
            left:14%;
            font-size: 12px;
            text-transform: normal;
}
 
            .label19f{
            color: black;
            position: absolute;
            top: 65%;
            left:2%;
            font-size: 13px;
            text-transform: normal;
}
            .labelline2m{
            color: green;
            position: absolute;
            top: 64%;
            left:15.5%;
            text-transform: normal;
}
            .output19g{
            color: black;
            position: absolute;
            top: 63.9%;
            left:17%;
            font-size: 12px;
            text-transform: normal;
}
 
            .label19g{
            color: black;
            position: absolute;
            top: 62%;
            left:50%;
            font-size: 13px;
            text-transform: normal;
}
            .labelline2n{
            color: green;
            position: absolute;
            top: 61%;
            left:57%;
            text-transform: normal;
}            
            .output19h{
            color: black;
            position: absolute;
            top: 61%;
            left:58%;
            font-size: 12px;
            text-transform: normal;
}
            
            .labelline2o{
            color: green;
            position: absolute;
            top: 62.5%;
            left:50%;
            text-transform: normal;
}          
                    
            .output19i{
            color: black;
            position: absolute;
            top: 62.5%;
            left:52%;
            font-size: 12px;
            text-transform: normal;
}
     
            .label19h{
            color: black;
            position: absolute;
            top: 65.3%;
            left:50%;
            font-size: 13px;
            text-transform: normal;
}
     
            .labelline2p{
            color: green;
            position: absolute;
            top: 64.2%;
            left:57%;
            text-transform: normal;
}          
            .output19j{
            color: black;
            position: absolute;
            top: 64.2%;
            left:57%;
            font-size: 12px;
            text-transform: normal;
}
  
            .horizontal_line1q{
            width: 99.5%; 
            height: 0.1%; 
            background-color: green;
            position: absolute;
            top: 66.5%;
}
            .label20a{
            ont-size: 10px;
            position: absolute;
            top: 66.5%;
            left: 1%;
            color: black;
            text-transform: normal;
}
            .label20b{
            ont-size: 10px;
            position: absolute;
            top: 67.5%;
            left: 1%;
            color: black;
            text-transform: normal;
}
            .label20c{
            ont-size: 11px;
            position: absolute;
            top: 70%;
            left: 3%;
            color: black;
            text-transform: normal;
}
            .labelline2q{
            color: green;
            position: absolute;
            top: 69%;
            left:10%;
            text-transform: normal;
}          
            .output20a{
            color: black;
            position: absolute;
            top: 69%;
            left:12%;
            font-size: 12px;
            text-transform: normal;
}
            .label20d{
            ont-size: 11px;
            position: absolute;
            top: 71.5%;
            left: 3%;
            color: black;
            text-transform: normal;
}
          .labelline2r{
            color: green;
            position: absolute;
            top: 70.3%;
            left:13%;
            text-transform: normal;
}          
            .output20b{
            color: black;
            position: absolute;
            top: 70.3%;
            left:14%;
            font-size: 12px;
            text-transform: normal;
}
            .label20e{
            ont-size: 11px;
            position: absolute;
            top: 73%;
            left: 3%;
            color: black;
            text-transform: normal;
}
            .labelline2s{
            color: green;
            position: absolute;
            top: 72%;
            left:20.3%;
            text-transform: normal;
}          
            .output20c{
            color: black;
            position: absolute;
            top: 72%;
            left:21%;
            font-size: 12px;
            text-transform: normal;
}
          .label20f{
            ont-size: 11px;
            position: absolute;
            top: 74.5%;
            left: 3%;
            color: black;
            text-transform: normal;
}
            .labelline2t{
            color: green;
            position: absolute;
            top: 73.5%;
            left:10.5%;
            text-transform: normal;
}          
                
            .output20d{
            color: black;
            position: absolute;
            top: 73.5%;
            left:10.5%;
            font-size: 12px;
            text-transform: normal;
}
             .label20g{
            ont-size: 10px;
            position: absolute;
            top: 66.5%;
            left: 52%;
            color: black;
            text-transform: normal;
}
 
            .label20h{
            ont-size: 11px;
            position: absolute;
            top: 70%;
            left: 52%;
            color: black;
            text-transform: normal;
}
            
            .labelline2u{
            color: green;
            position: absolute;
            top: 69%;
            left:59%;
            text-transform: normal;
}          
            .output20e{
            color: black;
            position: absolute;
            top: 69%;
            left:61%;
            font-size: 12px;
            text-transform: normal;
}
            
            .label20i{
            ont-size: 11px;
            position: absolute;
            top: 71.5%;
            left: 52%;
            color: black;
            text-transform: normal;
}
            .labelline2v{
            color: green;
            position: absolute;
            top: 70.5%;
            left:62%;
            text-transform: normal;
} 
            
            .output20f{
            color: black;
            position: absolute;
            top: 70.5%;
            left:63%;
            font-size: 12px;
            text-transform: normal;
}
             .label20j{
            ont-size: 11px;
            position: absolute;
            top: 73%;
            left: 52%;
            color: black;
            text-transform: normal;
}
             .labelline2w{
            color: green;
            position: absolute;
            top: 72%;
            left:63.5%;
            text-transform: normal;
} 
            .output20g{
            color: black;
            position: absolute;
            top: 72%;
            left:64%;
            font-size: 12px;
            text-transform: normal;
}
            .label20k{
            ont-size: 11px;
            position: absolute;
            top: 74.5%;
            left: 52%;
            color: black;
            text-transform: normal;
}
            .labelline2x{
            color: green;
            position: absolute;
            top: 73.5%;
            left:56%;
            text-transform: normal;
} 
            .output20h{
            color: black;
            position: absolute;
            top: 73.5%;
            left:58%;
            font-size: 12px;
            text-transform: normal;
}
            .label20l{
            ont-size: 11px;
            position: absolute;
            top: 76%;
            left:3%;
            color: black;
            text-transform: normal;
}
            .labelline2y{
            color: green;
            position: absolute;
            top: 75%;
            left:7%;
            text-transform: normal;
} 
            .output20i{
            color: black;
            position: absolute;
            top: 75%;
            left:8%;
            font-size: 12px;
            text-transform: normal;
}
            .horizontal_line1r{
            width: 99.5%; 
            height: 0.1%; 
            background-color: green;
            position: absolute;
            top: 77.5%;
}
     .vertical_line1p{
            width: 1px; 
            height: 280px; 
            background-color: green;
            position: absolute; 
            left: 50%;
            top: 66.5%;
}
            .label21a{
            ont-size: 10px;
            position: absolute;
            top: 78%;
            left: 1%;
            color: black;
            text-transform: normal;
}
            .label21b{
            ont-size: 10px;
            position: absolute;
            top: 80%;
            left: 3%;
            color: black;
            text-transform: normal;
}
          .labelline2z{
            color: green;
            position: absolute;
            top: 78.8%;
            left:10.5%;
            text-transform: normal;
} 
   
            .output21a{
            color: black;
            position: absolute;
            top: 78.8%;
            left:11%;
            font-size: 12px;
            text-transform: normal;
}
            .label21c{
            ont-size: 10px;
            position: absolute;
            top: 81.5%;
            left: 3%;
            color: black;
            text-transform: normal;
}
          .labelline3a{
            color: green;
            position: absolute;
            top: 80.5%;
            left:13%;
            text-transform: normal;
} 
            .output21b{
            color: black;
            position: absolute;
            top: 80.5%;
            left:14%;
            font-size: 12px;
            text-transform: normal;
}
            .label21d{
            ont-size: 10px;
            position: absolute;
            top: 83%;
            left: 3%;
            color: black;
            text-transform: normal;
}
          .labelline3b{
            color: green;
            position: absolute;
            top: 82%;
            left:15%;
            text-transform: normal;
} 
            .output21c{
            color: black;
            position: absolute;
            top: 82%;
            left:15%;
            font-size: 12px;
            text-transform: normal;
}
           .label21e{
            ont-size: 10px;
            position: absolute;
            top: 84.5%;
            left: 3%;
            color: black;
            text-transform: normal;
}
          .labelline3c{
            color: green;
            position: absolute;
            top: 83.5%;
            left:7%;
            text-transform: normal;
} 
            .output21d{
            color: black;
            position: absolute;
            top: 83.5%;
            left:7%;
            font-size: 12px;
            text-transform: normal;
}
  
            .label22a{
            ont-size: 10px;
            position: absolute;
            top: 78%;
            left: 51%;
            color: black;
            text-transform: normal;
}
           .label22b{
            ont-size: 10px;
            position: absolute;
            top: 80%;
            left: 52%;
            color: black;
            text-transform: normal;
}
            .labelline3d{
            color: green;
            position: absolute;
            top: 78.8%;
            left:59.5%;
            text-transform: normal;
} 
   
            .output22a{
            color: black;
            position: absolute;
            top: 78.8%;
            left:60%;
            font-size: 12px;
            text-transform: normal;
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
                            <div class='label1a'>Province</div>
                                <p class='labelline1a'>_____________________________________________________</p>    
                                    <p class='output1a'>Mendez</p>
                            <div class='label1b'>City/Municipality</div>
                                <p class='labelline1b'>____________________________________________________</p> 
                                    <p class='output1b'>Cavite</p>
                                <div class='vertical_line1a'></div>
                                <div class='label1c'>Registry No.</div>
                                <p class='output1c'>2003-1</p></div>
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
                           <div class='labelside2'>M<br>O<br>T<br>H<br>E<br>R</div>
                           <div class='label6a'>7.MAIDEN<br>NAME</div> 
                           <div class='label6b'>(First)<p class='output6a'>Rhina Joy</p></div>
                           <div class='label6c'>(Middle)<p class='output6b'>Esguerra</p></div>
                           <div class='label6d'>(Last)<p class='output6c'>Salinas</p></div>
                        <div class='horizontal_line1g'></div>
                            <div class='label7a'>8.CITIZENSHIP</div> <p class='output7a'>Filipino</p></div>
                            <div class='label8a'>9.RELIGION/RELIGIOUS SECT</div> <p class='output8a'>Christian</p></div>
                            <div class='vertical_line1g'></div>
                        <div class='horizontal_line1h'></div>
                            <div class='label9a'>10a.Total number of<br>children born alive</div>
                                <p class='output9a'>EIGHT</p>
                        <div class='label9b'>10b.No. of children still <br>living including this birth</div> 
                                <p class='output9b'>EIGHT</p>
                        <div class='label9c'>10c.No.of children born <br>alive but are now dead</div>
                                <p class='output9c'>EIGHT</p>
                        <div class='label9d'>11.OCCUPATION</div> 
                                <p class='output9d'>BUSINESS WOMAN</p>
                        <div class='label9e'>12.Age at the time of <br>birth(completed years)</div>
                                <p class='output9e'>56</p>
                        <div class='vertical_line1h'></div>
                        <div class='vertical_line1i'></div>
                        <div class='vertical_line1j'></div>
                        <div class='vertical_line1k'></div>
                        <div class='horizontal_line1i'></div>
                       </div>
                        <div class='label10a'>13.RESIDENCE</div>
                        <div class='label10b'>(House No.,St.,Barangay)</div>
                            <p class='output10b'>095 D Bonifacio St.</p>
                        <div class='label10c'>(City/Municipality)</div>
                            <p class='output10c'>Mendez-Nunez</p>
                        <div class='label10d'>(Province)</div>
                            <p class='output10d'>Cavite</p>
                        <div class='label10e'>(Country)</div>
                            <p class='output10e'>Philippines</p>
                        <div class='horizontal_line1j'></div>
                    </div>
                     <div class='labelside3'>F<br>A<br>T<br>H<br>E<br>R</div>\
                     <div class='label11a'>14.Name</div>
                     <div class='label11b'>(First)</div>
                        <p class='output11b'>Rhina joy</p>
                     <div class='label11c'>(Middle)</div>
                        <p class='output11c'>Esguerra</p>
                    <div class='label11d'>(Last)</div>
                        <p class='output11d'>Sainas</p>
                    <div class='horizontal_line1k'></div>
                    </div>
                    <div class='label12a'>15.Citizenship</div>
                        <p class='output12a'>Filipino</p>
                    <div class='label13a'>16.Religion/Religious Sect</div>
                        <p class='output13a'>Christian</p>
                    <div class='label14a'>17.Occupation</div>
                        <p class='output14a'>Bussiness woman</p>
                    <div class='label15a'>18.Age at the time of this<br>birth(completed years)</div>
                        <p class='output15a'>56</p>
                    <div class='horizontal_line1l'></div>
                    <div class='vertical_line1l'></div>
                    <div class='vertical_line1m'></div>
                    <div class='vertical_line1n'></div>
                    <div class='vertical_line1o'></div>
                    </div>
                     <div class='label16a'>19.residence</div>
                    <div class='label16b'>(House No.,St.,Barangay)</div>
                        <p class='output16b'>095 D Bonifacio St.</p>
                     <div class='label16c'>(City/Municipality)</div>
                        <p class='output16c'>mendez nunez</p>
                     <div class='label16d'>(Province)</div>
                        <p class='output16d'>Cavite</p>
                    <div class='label16e'>(Country)</div>
                        <p class='output16e'>Philippines</p>
                    <div class='horizontal_line1m'></div>
                    </div>
                    <div class='label17a'>MARRIAGE OF PARENTS(if not married, accomplish of acknowledgement/Admission of paternity at the back.)</div>
                     <div class='horizontal_line1n'></div>
                     <div class='label17b'>20a.Date</div>
                     <div class='label17c'>(Month)</div>
                        <p class='output17c'>12</p>
                    <div class='label17d'>(Day)</div>
                        <p class='output17d'>31</p>
                    <div class='label17e'>(Year)</div>
                        <p class='output17e'>2002</p>
                     <div class='label17f'>20b.PLACE</div>
                     <div class='label17g'>(City/Municipality)</div>
                       <p class='output17g'>Mendez nunez<p>
                    <div class='label17h'>(Province)</div>
                       <p class='output17h'>Cavite<p>
                    <div class='label17i'>(Country)</div>
                       <p class='output17i'>Philippines<p>
                     <div class='horizontal_line1o'></div>
                     </div>
                      <div class='label18a'>21a.ATTENDANT</div>
                      <div class='label18b'></div> 
                        <p class='labelline2e'>__________1.Physician</p> 
                        <p class='output18b'>X</p>
                      <div class='label18c'></div>
                        <p class='labelline2f'>__________2.Nurse</p> 
                        <p class='output18c'>X</p>
                       <div class='label18d'></div>
                        <p class='labelline2g'>__________3.Midwife</p> 
                        <p class='output18d'>X</p>
                       <div class='label18e'></div>
                        <p class='labelline2h'>__________4.Hilot(Traditional Bith Attendant)</p> 
                        <p class='output18e'>X</p>
                       <div class='label18f'></div>
                        <p class='labelline2i'>__________5.Other(Specify)_________</p> 
                        <p class='output18f'>X</p>
                        <p class='output18g'>X</p>
                        <div class='horizontal_line1p'></div>
                    </div> 
                    <div class='label19a'>21b.CERTIFICATION OF ATTENDANT AT BIRTH(Physician,Nurse,Midwife,Traditional Birth Attendant/Hilot,etc.)</div>
                    <div class='label19b'>I hereby certify that I attended the birth of the child who was born alive at</div>
                    <div class='label19c'>am/pm on the date birth specified</div>
                       <p class='labelline2j'>________</p> 
                       <p class='output19d'>X</p>
                    <div class='label19d'>Signature</div>
                        <p class='labelline2k'>________________________________________</p> 
                        <p class='output19e'>RHINA JOY</p>
                    <div class='label19e'>Name in Print</div>
                        <p class='labelline2l'>_____________________________________</p> 
                         <p class='output19f'>RHINA JOY</p>
                    <div class='label19f'>Title or Positions</div>
                        <p class='labelline2m'>__________________________________</p> 
                        <p class='output19g'>RHINA JOY</p>
                    <div class='label19g'>Address</div>
                        <p class='labelline2n'>__________________________________________</p> 
                        <p class='output19h'>RHINA JOY</p>
                        <p class='labelline2o'>__________________________________________________</p> 
                        <p class='output19i'>RHINA JOY</p>
                    <div class='label19h'>Address</div>
                          <p class='output19j'>RHINA JOY</p>
                        <p class='labelline2p'>___________________________________________</p> 
                    <div class='horizontal_line1q'></div>
                </div>
                 <div class='label20a'>22.CERTIFICATION OF INFORMANT</div>
                 <div class='label20b'>I hereby certify that all information supplies are true and <br>correct to my own knowledge and belief</div>
                 <div class='label20c'>Signature</div>
                        <p class='labelline2q'>________________________________________</p> 
                        <p class='output20a'>RHINA JOY</p>
                 <div class='label20d'>Name in print</div>
                        <p class='labelline2r'>_____________________________________</p> 
                        <p class='output20b'>RHINA JOY</p>
                 <div class='label20e'>Relationship to the child</div>
                        <p class='labelline2s'>_____________________________</p> 
                        <p class='output20c'>RHINA JOY</p>
                <div class='label20f'>Address</div>
                        <p class='labelline2t'>________________________________________</p> 
                        <p class='output20d'>RHINA JOY</p>
                <div class='label20g'>23.PREPARED BY</div>
                <div class='label20h'>Signature</div>
                        <p class='labelline2u'>_________________________________________</p> 
                        <p class='output20e'>RHINA JOY</p>
                <div class='label20i'>Name in Print</div>
                        <p class='labelline2v'>______________________________________</p> 
                        <p class='output20f'>RHINA JOY</p>
                 <div class='label20j'>Title or Position</div>
                        <p class='labelline2w'>____________________________________</p> 
                        <p class='output20g'>RHINA JOY</p>
                <div class='label20k'>Date</div>
                        <p class='labelline2x'>____________________________________________</p> 
                        <p class='output20h'>RHINA JOY</p>
                <div class='label20l'>Date</div>
                        <p class='labelline2y'>____________________________________________</p> 
                        <p class='output20i'>RHINA JOY</p>
                 <div class='horizontal_line1r'></div>
                 <div class='vertical_line1p'></div>
                </div>
                 <div class='label21a'>24.RECEIVED BY</div>
                 <div class='label21b'>Signature</div>
                   <p class='labelline2z'>________________________________________</p> 
                   <p class='output21a'>RHINA JOY</p>
                <div class='label21c'>Name in Print</div>
                   <p class='labelline3a'>_____________________________________</p> 
                   <p class='output21b'>RHINA JOY</p>
                <div class='label21d'>Title or Position</div>
                   <p class='labelline3b'>___________________________________</p> 
                   <p class='output21c'>RHINA JOY</p>
                <div class='label21e'>Date</div>
                   <p class='labelline3c'>___________________________________</p> 
                   <p class='output21d'>RHINA JOY</p>
                 <div class='label22a'>25.REGISTERED AT THE OFFICE OF THE CIVIL REGISTRAR</div>
                 <div class='label22b'>Signature</div>
                   <p class='labelline3d'>________________________________________</p> 
                   <p class='output22a'>RHINA JOY</p>
                 






                  </div>
            <div class='page-break'></div>
            <div class='page'>
                <div class='content'>
                    <div class='container'>
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