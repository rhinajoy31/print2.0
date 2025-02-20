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
            height: 245px; 
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
            .label22c{
            ont-size: 10px;
            position: absolute;
            top: 81.5%;
            left: 52%;
            color: black;
            text-transform: normal;
}
            .labelline3e{
            color: green;
            position: absolute;
            top: 80.5%;
            left:62%;
            text-transform: normal;
} 
   
            .output22b{
            color: black;
            position: absolute;
            top: 80.5%;
            left:63%;
            font-size: 12px;
            text-transform: normal;
}
            .label22d{
            ont-size: 10px;
            position: absolute;
            top: 83%;
            left: 52%;
            color: black;
            text-transform: normal;
}
            .labelline3f{
            color: green;
            position: absolute;
            top: 81.8%;
            left:63.5%;
            text-transform: normal;
} 
   
            .output22c{
            color: black;
            position: absolute;
            top: 81.8%;
            left:64%;
            font-size: 12px;
            text-transform: normal;
}
            .label22e{
            ont-size: 10px;
            position: absolute;
            top: 84.5%;
            left: 52%;
            color: black;
            text-transform: normal;
}
            .labelline3g{
            color: green;
            position: absolute;
            top: 83.5%;
            left:56%;
            text-transform: normal;
} 
   
            .output22d{
            color: black;
            position: absolute;
            top: 83.5%;
            left:58%;
            font-size: 12px;
            text-transform: normal;
}
    
            .horizontal_line1s{
            width: 99.5%; 
            height: 0.1%; 
            background-color: green;
            position: absolute;
            top: 86%;
}

            .label23a{
            ont-size: 10px;
            position: absolute;
            top: 86.5%;
            left: 1%;
            color: black;
            text-transform: normal;
}
   
            .labelb1{
            font-size: 14px;
            position: absolute;
            top: 0%;
            left: 20%;
            color: black;
            text-transform: normal;
}

            .labelb2{
            font-size: 8px;
            position: absolute;
            top: 1%;
            left: 28%;
            color: black;
            text-transform: normal;
}
             .labelb3{
            font-size: 8px;
            position: absolute;
            top: 1%;
            left: 58%;
            color: black;
            text-transform: normal;
}
            .labelb4{
            font-size: 12px;
            position: absolute;
            top: 3%;
            left: 5%;
            color: black;
            text-transform: normal;
}
             .labelb5{
            font-size: 12px;
            position: absolute;
            top: 3%;
            left: 52%;
            color: black;
            text-transform: normal;
}
            .labelb6{
            font-size: 12px;
            position: absolute;
            top: 4.5%;
            left: 2%;
            color: black;
            text-transform: normal;
}
            .labelb7{
            font-size: 12px;
            position: absolute;
            top: 4.5%;
            left: 92%;
            color: black;
            text-transform: normal;
}
            .labelb8{
            font-size: 12px;
            position: absolute;
            top: 6%;
            left: 2%;
            color: black;
            text-transform: normal;
}
            
            .labelb9{
            font-size: 12px;
            position: absolute;
            top: 6%;
            left: 47%;
            color: black;
            text-transform: normal;
}
            .labelline4a{
            color: green;
            position: absolute;
            top: 2%;
            left:8.5%;
            text-transform: normal;
} 
   
            .output23a{
            color: black;
            position: absolute;
            top: 2%;
            left:10%;
            font-size: 12px;
            text-transform: normal;
}
            .output23b{
            color: black;
            position: absolute;
            top: 2%;
            left:55%;
            font-size: 12px;
            text-transform: normal;
}
            .output23c{
            color: black;
            position: absolute;
            top: 3.5%;
            left:43%;
            font-size: 12px;
            text-transform: normal;
}
            .output23d{
            color: black;
            position: absolute;
            top: 5%;
            left:8%;
            font-size: 12px;
            text-transform: normal;
}
            .output23e{
            color: black;
            position: absolute;
            top: 5%;
            left:49%;
            font-size: 12px;
            text-transform: normal;
}
 
            .labelline4b{
            color: green;
            position: absolute;
            top: 2%;
            left:55%;
            text-transform: normal;
}
       
            .labelline4c{
            color: green;
            position: absolute;
            top: 3.5%;
            left:43%;
            text-transform: normal;
}
            .labelline4d{
            color: green;
            position: absolute;
            top: 5%;
            left:8%;
            text-transform: normal;
}
            .labelline4e{
            color: green;
            position: absolute;
            top: 5%;
            left:49%;
            text-transform: normal;
}
            .labelb10{
            font-size: 12px;
            position: absolute;
            top: 8%;
            left: 3%;
            color: black;
            text-transform: normal;
}
            .labelline4f{
            color: green;
            position: absolute;
            top: 10%;
            left:5%;
            text-transform: normal;
}
            .output23f{
            color: black;
            position: absolute;
            top: 10%;
            left:7%;
            font-size: 12px;
            text-transform: normal;
}
 
             .labelb11{
            font-size: 12px;
            position: absolute;
            top: 12%;
            left: 8%;
            color: black;
            text-transform: normal;
}
    
            .labelline4g{
            color: green;
            position: absolute;
            top: 10%;
            left:55%;
            text-transform: normal;
}
            .output23g{
            color: black;
            position: absolute;
            top: 10%;
            left:56%;
            font-size: 12px;
            text-transform: normal;
}
 
            .labelb12{
            font-size: 12px;
            position: absolute;
            top: 12%;
            left: 59%;
            color: black;
            text-transform: normal;
}
            .labelb13{
            font-size: 12px;
            position: absolute;
            top: 14%;
            left: 5%;
            color: black;
            text-transform: normal;
}
  
            .labelline4h{
            color: green;
            position: absolute;
            top: 13%;
            left:38.5%;
            text-transform: normal;
}
            .output23h{
            color: black;
            position: absolute;
            top: 13%;
            left:40%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb14{
            font-size: 12px;
            position: absolute;
            top: 14%;
            left: 47%;
            color: black;
            text-transform: normal;
}
            .labelline4i{
            color: green;
            position: absolute;
            top: 13%;
            left:52%;
            text-transform: normal;
}
            .output23i{
            color: black;
            position: absolute;
            top: 13%;
            left:53%;
            font-size: 12px;
            text-transform: normal;
}
            .labelline4j{
            color: green;
            position: absolute;
            top: 13%;
            left:77.5%;
            text-transform: normal;
}
            .output23j{
            color: black;
            position: absolute;
            top: 13%;
            left:79%;
            font-size: 12px;
            text-transform: normal;
}
   
            .labelb15{
            font-size: 12px;
            position: absolute;
            top: 14%;
            left: 96%;
            color: black;
            text-transform: normal;
}
           .labelline4k{
            color: green;
            position: absolute;
            top: 14.5%;
            left:3%;
            text-transform: normal;
}
            .output23k{
            color: black;
            position: absolute;
            top: 14.5%;
            left:5%;
            font-size: 12px;
            text-transform: normal;
}
            
            .labelb16{
            font-size: 12px;
            position: absolute;
            top: 15.7%;
            left: 36%;
            color: black;
            text-transform: normal;
}
            .labelline4l{
            color: green;
            position: absolute;
            top: 14.5%;
            left:39%;
            text-transform: normal;
}
            .output23l{
            color: black;
            position: absolute;
            top: 14.5%;
            left:40%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb17{
            font-size: 12px;
            position: absolute;
            top: 15.7%;
            left: 75%;
            color: black;
            text-transform: normal;
}
            .labelb18{
            font-size: 12px;
            position: absolute;
            top: 17%;
            left: 3%;
            color: black;
            text-transform: normal;
} 
            .labelline4m{
            color: green;
            position: absolute;
            top: 16%;
            left:13%;
            text-transform: normal;
}
            .output23m{
            color: black;
            position: absolute;
            top: 16%;
            left:14%;
            font-size: 12px;
            text-transform: normal;
}
            
            .labelb19{
            font-size: 12px;
            position: absolute;
            top: 17%;
            left: 50%;
            color: black;
            text-transform: normal;
}
 
            .labelline4n{
            color: green;
            position: absolute;
            top: 16%;
            left:58%;
            text-transform: normal;
}
            .output23n{
            color: black;
            position: absolute;
            top: 16%;
            left:58%;
            font-size: 12px;
            text-transform: normal;
}
                
            .labelb20{
            font-size: 12px;
            position: absolute;
            top: 17%;
            left: 97%;
            color: black;
            text-transform: normal;
}
            .labelline4o{
            color: green;
            position: absolute;
            top: 18%;
            left:7%;
            text-transform: normal;
}
            .output23o{
            color: black;
            position: absolute;
            top: 18%;
            left:8%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb21{
            font-size: 12px;
            position: absolute;
            top: 20%;
            left: 12%;
            color: black;
            text-transform: normal;
}
            .labelline4p{
            color: green;
            position: absolute;
            top: 20.5%;
            left:7%;
            text-transform: normal;
}
            .output23p{
            color: black;
            position: absolute;
            top: 20.5%;
            left:8%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb22{
            font-size: 12px;
            position: absolute;
            top: 22.5%;
            left: 19%;
            color: black;
            text-transform: normal;
}
       
            .labelb23{
            font-size: 12px;
            position: absolute;
            top: 20%;
            left: 65%;
            color: black;
            text-transform: normal;
}
            .labelline4q{
            color: green;
            position: absolute;
            top: 18%;
            left:55%;
            text-transform: normal;
}
            .output23q{
            color: black;
            position: absolute;
            top: 18%;
            left:57%;
            font-size: 12px;
            text-transform: normal;
}
            .labelline4r{
            color: green;
            position: absolute;
            top: 20.5%;
            left:55%;
            text-transform: normal;
}
            .output23r{
            color: black;
            position: absolute;
            top: 20.5%;
            left:57%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb24{
            font-size: 12px;
            position: absolute;
            top: 22.5%;
            left: 71%;
            color: black;
            text-transform: normal;
}
           .horizontal_line1t{
            width:99.5%; 
            height: 0.1%; 
            background-color: green;
            position: absolute ;
            top: 24%;
        
}
            .labelb25{
            font-size: 12px;
            position: absolute;
            top: 24%;
            left: 29%;
            color: black;
            text-transform: normal;
}
            .labelb26{
            font-size: 11px;
            position: absolute;
            top: 25%;
            left: 7%;
            color: black;
            text-transform: normal;
}
            .labelb27{
            font-size: 12px;
            position: absolute;
            top: 27%;
            left: 10%;
            color: black;
            text-transform: normal;
}
            .labelline4s{
            color: green;
            position: absolute;
            top: 25.9%;
            left:11%;
            text-transform: normal;
}
            .output23s{
            color: black;
            position: absolute;
            top: 25.8%;
            left:12%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb28{
            font-size: 12px;
            position: absolute;
            top: 27%;
            left: 55%;
            color: black;
            text-transform: normal;
}
            .labelb29{
            font-size: 12px;
            position: absolute;
            top: 28.5%;
            left: 2%;
            color: black;
            text-transform: normal;
}
            .labelline4t{
            color: green;
            position: absolute;
            top: 27.5%;
            left:26%;
            text-transform: normal;
}
            .output23t{
            color: black;
            position: absolute;
            top: 27.5%;
            left:27%;
            font-size: 12px;
            text-transform: normal;
}
  
            .labelline4u{
            color: green;
            position: absolute;
            top: 29%;
            left:2%;
            text-transform: normal;
}
            .output23u{
            color: black;
            position: absolute;
            top: 29%;
            left:3%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb30{
            font-size: 12px;
            position: absolute;
            top: 30%;
            left: 39%;
            color: black;
            text-transform: normal;
}
   
            .horizontal_line1t{
            width: 99.5%; 
            height: 0.1%; 
            background-color: green;
            position: absolute;
            top: 32%;
}
            .labelb31{
            font-size: 14px;
            position: absolute;
            top: 32%;
            left: 27%;
            color: black;
            text-transform: normal;
}
            .labelb32{
            font-size: 11px;
            position: absolute;
            top: 33%;
            left: 8%;
            color: black;
            text-transform: normal;
}
            .labelb33{
            font-size: 12px;
            position: absolute;
            top: 35%;
            left: 8%;
            color: black;
            text-transform: normal;
}
            .labelline4v{
            color: green;
            position: absolute;
            top: 34%;
            left:8.5%;
            text-transform: normal;
}
            .output23v{
            color: black;
            position: absolute;
            top: 34%;
            left:9%;
            font-size: 12px;
            text-transform: normal;
}
 
            .labelb34{
            font-size: 12px;
            position: absolute;
            top: 35%;
            left: 57%;
            color: black;
            text-transform: normal;
}
            .labelb35{
            font-size: 12px;
            position: absolute;
            top: 36.5%;
            left: 3%;
            color: black;
            text-transform: normal;
}
            .labelline4w{
            color: green;
            position: absolute;
            top: 35.5%;
            left:26.5%;
            text-transform: normal;
}
            .output23w{
            color: black;
            position: absolute;
            top: 35.5%;
            left:27%;
            font-size: 12px;
            text-transform: normal;
}
            .labelline4x{
            color: green;
            position: absolute;
            top: 37%;
            left:3%;
            text-transform: normal;
}
            .output23x{
            color: black;
            position: absolute;
             top: 37%;
            left:4%;
            font-size: 12px;
            text-transform: normal;
}
    
            .labelb36{
            font-size: 12px;
            position: absolute;
            top: 38%;
            left: 42%;
            color: black;
            text-transform: normal;
}
    
            .labelb37{
            font-size: 12px;
            position: absolute;
            top: 40%;
            left: 5%;
            color: black;
            text-transform: normal;
}
            .cbox1{
            font-size: 25px; 
            color: green;
            position: absolute;
            top: 39%;
            left: 10%; 
            font-family: Verdana, Tahoma, 'DejaVu Sans', sans-serif;

} 
            .outputbox1{
            color: black;
            position: absolute;
            top: 41.5%;
            left:11%;
            font-size: 11px;
            text-transform: normal;
}
            .labelb38{
            font-size: 12px;
            position: absolute;
            top: 42.5%;
            left: 14%;
            color: black;
            text-transform: normal;
}
            .labelline4y{
            color: green;
            position: absolute;
            top: 41.5%;
            left: 22%;
            text-transform: normal;
}
            .output23y{
            color: black;
            position: absolute;
             top: 41.5%;
            left: 23%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb39{
            font-size: 12px;
            position: absolute;
            top: 42.5%;
            left: 61%;
            color: black;
            text-transform: normal;
}
            .labelline4z{
            color: green;
            position: absolute;
            top: 41.5%;
            left: 63%;
            text-transform: normal;
}
            .output23z{
            color: black;
            position: absolute;
            top: 41.5%;
            left: 63%;
            font-size: 12px;
            text-transform: normal;
}
            .cbox2{
            font-size: 25px; 
            color: green;
            position: absolute;
            top: 41%;
            left: 10%; 
            font-family: Verdana, Tahoma, 'DejaVu Sans', sans-serif;

} 
            .outputbox2{
            color: black;
            position: absolute;
            top: 43.5%;
            left:11%;
            font-size: 11px;
            text-transform: normal;
}
            .labelb40{
            font-size: 12px;
            position: absolute;
            top: 44.5%;
            left: 14%;
            color: black;
            text-transform: normal;
}
            .labelline5a{
            color: green;
            position: absolute;
            top: 43.5%;
            left: 22%;
            text-transform: normal;
}
            .output24a{
            color: black;
            position: absolute;
            top: 43.5%;
            left: 23%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb41{
            font-size: 12px;
            position: absolute;
            top: 44.5%;
            left: 57%;
            color: black;
            text-transform: normal;
}
             .output24a{
            color: black;
            position: absolute;
            top: 43.5%;
            left: 23%;
            font-size: 12px;
            text-transform: normal;
}
   
            .labelline5b{
            color: green;
            position: absolute;
            top: 43.5%;
            left: 69%;
            text-transform: normal;
}
            .output24b{
            color: black;
            position: absolute;
            top: 43.5%;
            left: 70%;
            font-size: 12px;
            text-transform: normal;
}
            .labelline5c{
            color: green;
            position: absolute;
            top: 45%;
            left: 10.5%;
            text-transform: normal;
}
            .output24c{
            color: black;
            position: absolute;
            top: 45%;
            left: 12%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb42{
            font-size: 12px;
            position: absolute;
            top: 46%;
            left: 45%;
            color: black;
            text-transform: normal;
}
            .labelline5d{
            color: green;
            position: absolute;
            top: 45%;
            left: 47%;
            text-transform: normal;
}
            .output24d{
            color: black;
            position: absolute;
            top: 45%;
            left: 48%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb43{
            font-size: 12px;
            position: absolute;
            top: 48%;
            left: 5%;
            color: black;
            text-transform: normal;
}
            .labelline5e{
            color: green;
            position: absolute;
            top: 47%;
            left: 34%;
            text-transform: normal;
}
            .output24e{
            color: black;
            position: absolute;
            top: 47%;
            left: 36%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb44{
            font-size: 12px;
            position: absolute;
             top: 48%;
            left: 88%;
            color: black;
            text-transform: normal;
}       
            .labelline5f{
            color: green;
            position: absolute;
            top: 48.5%;
            left: 5%;
            text-transform: normal;
}
            .output24f{
            color: black;
            position: absolute;
            top: 48.5%;
            left: 7%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb45{
            font-size: 12px;
            position: absolute;
            top: 51.5%;
            left: 5%;
            color: black;
            text-transform: normal;
}
            .labelline5g{
            color: green;
            position: absolute;
            top: 50.5%;
            left: 29.5%;
            text-transform: normal;
}
            .output24g{
            color: black;
            position: absolute;
            top: 50.5%;
            left: 31%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb46{
            font-size: 12px;
            position: absolute;
            top: 53.5%;
            left: 5%;
            color: black;
            text-transform: normal;
}
    
            .cbox3{
            font-size: 25px; 
            color: green;
            position: absolute;
            top: 50%;
            left: 30%; 
            font-family: Verdana, Tahoma, 'DejaVu Sans', sans-serif;

} 
            .outputbox3{
            color: black;
            position: absolute;
            top: 52.5%;
            left: 31%; 
            font-size: 11px;
            text-transform: normal;
}
            .labelb47{
            font-size: 12px;
            position: absolute;
            top: 53.5%;
            left: 35%;
            color: black;
            text-transform: normal;
}
            .labelline5h{
            color: green;
            position: absolute;
            top: 52.5%;
            left: 43%;
            text-transform: normal;
}
            .output24h{
            color: black;
            position: absolute;
            top: 52.5%;
            left: 44%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb48{
            font-size: 12px;
            position: absolute;
            top: 53.5%;
            left: 70%;
            color: black;
            text-transform: normal;
}
            .labelline5i{
            color: green;
            position: absolute;
            top: 52.5%;
            left: 72%;
            text-transform: normal;
}
            .output24i{
            color: black;
            position: absolute;
            top: 52.5%;
            left: 73%;
            font-size: 12px;
            text-transform: normal;
}
            .labelline5j{
            color: green;
            position: absolute;
            top: 54%;
            left: 35%;
            text-transform: normal;
}
            .output24j{
            color: black;
            position: absolute;
            top: 54%;
            left: 36%;;
            font-size: 12px;
            text-transform: normal;
}
            .cbox4{
            font-size: 25px; 
            color: green;
            position: absolute;
            top: 54%;
            left: 30%; 
            font-family: Verdana, Tahoma, 'DejaVu Sans', sans-serif;

} 
            .outputbox4{
            color: black;
            position: absolute;
            top: 56.5%;
            left: 31%; 
            font-size: 11px;
            text-transform: normal;
}
            .labelb49{
            font-size: 12px;
            position: absolute;
            top: 57%;
            left: 35%;
            color: black;
            text-transform: normal;
}   
            .labelline5k{
            color: green;
            position: absolute;
            top: 57.3%;
            left: 51%;
            text-transform: normal;
}
            .output24k{
            color: black;
            position: absolute;
            top: 57.3%;
            left: 52%;;
            font-size: 12px;
            text-transform: normal;
}
            .labelb50{
            font-size: 12px;
            position: absolute;
            top: 60%;
            left: 5%;
            color: black;
            text-transform: normal;
}   
            .labelline5l{
            color: green;
            position: absolute;
            top: 59%;
            left: 53%;
            text-transform: normal;
}
            .output24l{
            color: black;
            position: absolute;
            top: 59%;
            left: 53%;;
            font-size: 12px;
            text-transform: normal;
} 
            .labelb51{
            font-size: 12px;
            position: absolute;
            top: 62%;
            left: 5%;
            color: black;
            text-transform: normal;
}   
            .labelline5m{
            color: green;
            position: absolute;
            top: 61%;
            left: 40%;
            text-transform: normal;
}
            .output24m{
            color: black;
            position: absolute;
            top: 61%;
            left: 41%;;
            font-size: 12px;
            text-transform: normal;
}      
            .labelb52{
            font-size: 12px;
            position: absolute;
            top: 64%;
            left: 6%;
            color: black;
            text-transform: normal;
}   
            .labelline5n{
            color: green;
            position: absolute;
            top: 63%;
            left: 58%;
            text-transform: normal;
}
            .output24n{
            color: black;
            position: absolute;
            top: 63%;
            left: 59%;;
            font-size: 12px;
            text-transform: normal;
} 
            .labelb53{
            font-size: 12px;
            position: absolute;
            top: 64%;
            left: 85%;
            color: black;
            text-transform: normal;
}   
            
            .labelb54{
            font-size: 12px;
            position: absolute;
            top: 66%;
            left: 5%;
            color: black;
            text-transform: normal;
}   
              
            .labelb55{
            font-size: 12px;
            position: absolute;
            top: 70%;
            left: 7%;
            color: black;
            text-transform: normal;
}   
            .labelline5o{
            color: green;
            position: absolute;
            top: 69%;
            left: 47%;
            text-transform: normal;
}
            .output24o{
            color: black;
            position: absolute;
            top: 69%;
            left: 48%;;
            font-size: 12px;
            text-transform: normal;
}             
            .labelb56{
            font-size: 12px;
            position: absolute;
            top: 70%;
            left: 59%;
            color: black;
            text-transform: normal;
}   
            .labelline5p{
            color: green;
            position: absolute;
            top: 69%;
            left: 64%;
            text-transform: normal;
}
            .output24p{
            color: black;
            position: absolute;
            top: 69%;
            left: 65%;;
            font-size: 12px;
            text-transform: normal;
}
            .labelline5q{
            color: green;
            position: absolute;
            top: 71%;
            left: 5%;
            text-transform: normal;
}
            .output24q{
            color: black;
            position: absolute;
            top: 71%;
            left: 6%;;
            font-size: 12px;
            text-transform: normal;
}
            .labelb57{
            font-size: 12px;
            position: absolute;
            top: 72.3%;
            left: 43%;
            color: black;
            text-transform: normal;
}  
            .labelline5r{
            color: green;
            position: absolute;
            top: 71.1%;
            left: 45%;
            text-transform: normal;
}
            .output24r{
            color: black;
            position: absolute;
            top: 71.2%;
            left: 46%;
            font-size: 12px;
            text-transform: normal;
}
            .labelb58{
            font-size: 12px;
            position: absolute;
            top: 72.3%;
            left: 88%;
            color: black;
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
                   <p class='labelline3c'>____________________________________________</p> 
                   <p class='output21d'>RHINA JOY</p>
                 <div class='label22a'>25.REGISTERED AT THE OFFICE OF THE CIVIL REGISTRAR</div>
                 <div class='label22b'>Signature</div>
                   <p class='labelline3d'>_________________________________________</p> 
                   <p class='output22a'>RHINA JOY</p>
                <div class='label22c'>Name in Print</div>
                   <p class='labelline3e'>______________________________________</p> 
                   <p class='output22b'>RHINA JOY</p>
                 <div class='label22d'>Title or Position</div>
                   <p class='labelline3f'>_____________________________________</p> 
                   <p class='output22c'>RHINA JOY</p>
                 <div class='label22e'>Date</div>
                   <p class='labelline3g'>_____________________________________________</p> 
                   <p class='output22d'>RHINA JOY</p>
                    <div class='horizontal_line1s'></div>
                  <div class='label23a'>REMARKS/ANNOTATIONS(For LCRO/OCRG Use Only)</div>

            <div class='page-break'></div>
            <div class='page'>
                <div class='content'>
                    <div class='container'>
                    <div class='labelb1'>AFFIDAVIT OF ACKNOWLEDGEMENT/ADMISSION OF PATERNITY</div>
                    <div class='labelb2'>(For birth before 3 August 1988)</div>
                    <div class='labelb3'>(For birth before 3 August 1988)</div>
                    <div class='labelb4'>I/WE</div>
                    <div class='labelb5'>and</div>
                    <div class='labelb6'>of legal age, am/are the natural mother and/or father of</div>
                    <div class='labelb7'>,who was</div>
                    <div class='labelb8'>born on</div>
                    <div class='labelb9'>at</div>
                        <p class='labelline4a'>_______________________________________________</p> 
                        <p class='output23a'>RHINA JOY</p>
                        <p class='labelline4b'>_______________________________________________</p> 
                        <p class='output23b'>RHINA JOY</p>
                        <p class='labelline4c'>_____________________________________________________</p> 
                        <p class='output23c'>RHINA JOY</p>
                        <p class='labelline4d'>_________________________________________</p> 
                        <p class='output23d'>RHINA JOY</p>
                        <p class='labelline4e'>_________________________________________</p> 
                        <p class='output23e'>RHINA JOY</p>
                <div class='labelb10'>I am/ We are executing this affidavit to the truthfulness of the foregoing statements and for purposes of acknowledging my/our child.<br>acknowledging my/our child.</div>
                    <p class='labelline4f'>_________________________________________</p> 
                <div class='labelb11'>(Signature Over Printed Name of Father)</div>
                    <p class='output23f'>RHINA JOY</p>
                    <p class='labelline4g'>_________________________________________</p> 
                <div class='labelb12'>(Signature Over Printed Name of Mother)</div>
                    <p class='output23g'>RHINA JOY</p>
                 <div class='labelb13'>SUBSCRIBE AND SWORN to before me this</div>
                    <p class='labelline4h'>_________</p> 
                    <p class='output23h'>23</p>
                <div class='labelb14'>day of</div>
                    <p class='labelline4i'>___________________________,</p> 
                    <p class='output23i'>RHINA JOY</p>
                    <p class='labelline4j'>___________________</p> 
                    <p class='output23j'>RHINA JOY</p>
                <div class='labelb15'>by</div>
                    <p class='labelline4k'>___________________________________</p> 
                    <p class='output23k'>RHINA JOY</p>
                 <div class='labelb16'>and</div>
                    <p class='labelline4l'>_______________________________________</p> 
                    <p class='output23l'>RHINA JOY</p>
                 <div class='labelb17'>,who was exhivited to me his/her</div>
                 <div class='labelb18'>CTC/valid ID</div>
                    <p class='labelline4m'>_______________________________________</p> 
                    <p class='output23m'>RHINA JOY</p>
                 <div class='labelb19'>issued on</div>
                    <p class='labelline4n'>__________________________________________</p> 
                    <p class='output23n'>RHINA JOY</p>
                <div class='labelb20'>at</div>
                    <p class='labelline4o'>__________________________________________</p> 
                    <p class='output23o'>RHINA JOY</p>
                <div class='labelb21'>Signature of the Administering Officer</div>
                    <p class='labelline4p'>__________________________________________</p> 
                    <p class='output23p'>RHINA JOY</p>
                <div class='labelb22'>Name in Print</div>
                    <p class='labelline4q'>__________________________________________</p> 
                    <p class='output23q'>RHINA JOY</p>
                <div class='labelb23'>Position/Title/Designation</div>
                    <p class='labelline4r'>__________________________________________</p> 
                    <p class='output23r'>RHINA JOY</p>
                <div class='labelb24'>Address</div>
                <div class='horizontal_line1t'></div>
                <div class='labelb25'>AFFIDAVIT FOR DELAYED REGISTRATION OF BIRTH</div>
                <div class='labelb26'>(To be accomplished by the hospital/clinic administrator/father,mother, or guardian or the person himself if 18 years old or over)</div>
                <div class='labelb27'>I</div>
                    <p class='labelline4s'>________________________________________________</p> 
                    <p class='output23s'>RHINA JOY</p>
                <div class='labelb28'>,of legal age, single/married/divorced/widow/widower,with</div>
                <div class='labelb29'>residence and postal address at</div>
                    <p class='labelline4t'>______________________________________________________________________________</p> 
                    <p class='output23t'>RHINA JOY</p>
                    <p class='labelline4u'>_______________________________________</p> 
                    <p class='output23u'>RHINA JOY</p>
                <div class='labelb30'>after having been duly sworn in accordance with law, do hereby depose and say:</div>
                <div class='horizontal_line1t'></div>
                <div class='labelb31'>AFFIDAVIT FOR DELAYED REGISTRATION OF DEATH </div>
                <div class='labelb32'>(To be accomplished by the hospital/clinic administrator,father,mother,or guardian or the person himself if 18 years old or over.) </div>
                <div class='labelb33'>I</div>
                    <p class='labelline4v'>____________________________________________________</p> 
                    <p class='output23v'>RHINA JOY</p>
                <div class='labelb34'>,of legal age,single/married/divorced/widow/widower,with</div>
                <div class='labelb35'>residence and postal address at</div>
                    <p class='labelline4w'>______________________________________________________________________________</p> 
                    <p class='output23w'>RHINA JOY</p>
                    <p class='labelline4x'>__________________________________________</p> 
                    <p class='output23x'>RHINA JOY</p>
                <div class='labelb36'>after having been duly sworn in accordance with law, do hereby depose say:</div> 
                <div class='labelb37'>1.That I am the applicant for the delayed registration of:</div> 
                    <p class='cbox1'><b>&#9633;</b></p>
                    <p class='outputbox1'>X</p>
                <div class='labelb38'>my birth in</div> 
                    <p class='labelline4y'>__________________________________________</p> 
                    <p class='output23y'>RHINA JOY</p>
                <div class='labelb39'>on</div> 
                    <p class='labelline4z'>______________________________________</p> 
                    <p class='output23z'>RHINA JOY</p>
                    <p class='cbox2'><b>&#9633;</b></p>
                    <p class='outputbox2'>X</p>
                <div class='labelb40'>the birth of</div> 
                    <p class='labelline5a'>______________________________________</p>
                    <p class='output24a'>RHINA JOY</p> 
                <div class='labelb41'>who was born in</div>
                    <p class='labelline5b'>_______________________________</p>
                    <p class='output24b'>RHINA JOY</p> 
                    <p class='labelline5c'>_____________________________________</p>
                    <p class='output24c'>RHINA JOY</p> 
                <div class='labelb42'>on</div>
                    <p class='labelline5d'>_____________________________________.</p>
                    <p class='output24d'>RHINA JOY</p> 
                <div class='labelb43'>2.That I/he/she was attended at birth by</div>
                    <p class='labelline5e'>__________________________________________________________.</p>
                    <p class='output24e'>RHINA JOY</p>    
                <div class='labelb44'>who resides at</div>
                    <p class='labelline5f'>__________________________________________________________________________________________</p>
                    <p class='output24f'>RHINA JOY</p> 
                <div class='labelb45'>3.That I am/he/she is a citizen of</div>       
                    <p class='labelline5g'>__________________________________________________________________________</p>
                    <p class='output24g'>RHINA JOY</p> 
                 <div class='labelb46'>4.That my/his/her parents were</div>       
                    <p class='cbox3'><b>&#9633;</b></p>
                    <p class='outputbox3'>X</p>
                <div class='labelb47'>married on</div> 
                    <p class='labelline5h'>____________________________</p>
                    <p class='output24h'>RHINA JOY</p>   
                <div class='labelb48'>at</div>
                    <p class='labelline5i'>____________________________</p>
                    <p class='output24i'>RHINA JOY</p>
                    <p class='labelline5j'>____________________________________________________________________</p>
                    <p class='output24j'>RHINA JOY</p>
                    <p class='cbox4'><b>&#9633;</b></p>
                    <p class='outputbox4'>X</p>
                <div class='labelb49'>not married but I/he/she was acknowledge/not acknowledge by my/his/her<br>father whose name is</div>
                    <p class='labelline5k'>__________________________________________________</p>
                    <p class='output24k'>RHINA JOY</p>
                <div class='labelb50'>5.That the reason for the delay in registering my/his/her birth was</div>
                    <p class='labelline5l'>________________________________________________</p>
                    <p class='output24l'>RHINA JOY</p>
                <div class='labelb51'>6.(For the applicant only) That I am married to</div>
                    <p class='labelline5m'>________________________________________________</p>
                    <p class='output24m'>RHINA JOY</p>
                 <div class='labelb52'>(if the applicant is other than the document owner) That I am married to</div>
                    <p class='labelline5n'>____________________________</p>
                    <p class='output24n'>RHINA JOY</p>
                <div class='labelb53'>of the said person.</div>
                <div class='labelb54'>7.That I am executing this affidavit to attest to the truthfulness of the foregoing statements for all legal intents and purpose.</div>
                <div class='labelb55'>In truth whereof, I have affixed my signature below this</div> 
                    <p class='labelline5o'>____________</p>
                    <p class='output24o'>RHINA JOY</p>
                 <div class='labelb56'>day of</div> 
                    <p class='labelline5p'>________________________________</p>
                    <p class='output24p'>RHINA JOY</p>
                    <p class='labelline5q'>_________________________________________</p>
                    <p class='output24q'>RHINA JOY</p>
                <div class='labelb57'>at</div> 
                    <p class='labelline5r'>______________________________________________</p>
                    <p class='output24r'>RHINA JOY</p>
                 <div class='labelb58'>,Philippines.</div> 
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