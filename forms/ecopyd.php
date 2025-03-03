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
                text-transform: uppercase;
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
                text-transform: uppercase;
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
                text-transform: uppercase;
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
                text-transform: uppercase;
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
                text-transform: uppercase;
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
                text-transform: uppercase;
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
                text-transform: uppercase;
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
                text-transform: uppercase;
            }
            .outputd12 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 17%;
                left:76%; 
                text-transform: uppercase;
            }
            .outputd13 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 17%;
                left:82.5%;
                text-transform: uppercase; 
            }
            .outputd14 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 17%;
                left:88.5%; 
                text-transform: uppercase;
            }
            .outputd15 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 17%;
                left:95%; 
                text-transform: uppercase;
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
                text-transform: uppercase;
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
                text-transform: uppercase;
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
            .horizontal_lined11{
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
         
            .labeld38{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:38.5%;
                left: 3%; 
            }
            .labellined9{
                color: black;
                position: absolute;
                top: 37.5%;
                left:41%;
            }
            .outputd30 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 37.5%;
                left:42%; 
                text-transform: uppercase;
            }
            .horizontal_linem10{
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 40%;
            }
            .labeld39{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:40.5%;
                left: 1%; 
            }
            .labellined10{
                color: black;
                position: absolute;
                top: 41%;
                left:3%;
            }
            .labeld39{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:40.5%;
                left: 1%; 
            }
            .labeld40{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:42%;
                left: 9%; 
            }
            .outputd31 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 41%;
                left:4%; 
                text-transform: uppercase;
            }
            .labellined11{
                color: black;
                position: absolute;
                top: 41%;
                left:20%;
            }
            .labeld41{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:42%;
                left: 26%; 
            }
            .outputd32 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 41%;
                left:21%; 
                text-transform: uppercase;
            }
            .labellined12{
                color: black;
                position: absolute;
                top: 41%;
                left:37%;
            }
            .labeld42{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:42%;
                left: 43%; 
            }
            .outputd33 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 41%;
                left:38%; 
                text-transform: uppercase;
            }
            .labellined13{
                color: black;
                position: absolute;
                top: 41%;
                left:62%;
            }
            .labeld43{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:42%;
                left: 68%; 
            }
            .outputd34 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 41%;
                left:63%; 
                text-transform: uppercase;
            }
            .labellined14{
                color: black;
                position: absolute;
                top: 41%;
                left:86%;
            }
            .labeld44{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:42%;
                left: 91.5%; 
            }
            .outputd35 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 41%;
                left:87%; 
                text-transform: uppercase;
            }
            .horizontal_lined12{
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 44.5%;
            }
            .labeld45{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:45%;
                left: 1%; 
            }
            .labeld46{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:46%;
                left: 3%; 
            }
            .labellined15{
                color: black;
                position: absolute;
                top: 45%;
                left:56%;
            }
            .outputd36 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 45%;
                left:57%; 
                text-transform: uppercase;
            }
            .labeld47{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:47%;
                left: 3%; 
            }
            .labellined16{
                color: black;
                position: absolute;
                top: 46%;
                left:61%;
            }
            .outputd37 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 46%;
                left:62%; 
                text-transform: uppercase;
            }
            .vertical_lined14 {
                width: 1px; 
                height: 49px; 
                background-color: darkblue;
                position: absolute; 
                left: 85%;
                top: 44.5%;
            }
            .labeld48{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:44.5%;
                left: 86%; 
            }
            .outputd38 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 46%;
                left:91%; 
                text-transform: uppercase;
            }
            .horizontal_lined13{
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 48.5%;
            }
            .labeld49{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:48.5%;
                left: 1%; 
            }
            .labellined17{
                color: black;
                position: absolute;
                top: 49%;
                left:3%;
            }
            .labeld50{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:50%;
                left: 9.5%; 
            }
            .outputd39 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 49%;
                left:4%; 
                text-transform: uppercase;
            }
            .labellined18{
                color: black;
                position: absolute;
                top: 49%;
                left:17%;
            }
            .labeld51{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:49%;
                left: 23%; 
            }
            .outputd40 {
                font-size: 12px;
                color: black;
                position: absolute;
                top: 49%;
                left:18%; 
                text-transform: uppercase;
            }
            .labellined19{
                color: black;
                position: absolute;
                top: 49%;
                left:29%;
            }
            .labeld52{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:50%;
                left: 35%; 
            }
            .outputd41{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 49%;
                left:30%; 
                text-transform: uppercase;
            }
            .labellined20{
                color: black;
                position: absolute;
                top: 49%;
                left:43%;
            }
            .labeld53{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:50%;
                left: 49%; 
            }
            .outputd42{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 49%;
                left:44%; 
                text-transform: uppercase;
            }
            .labellined21{
                color: black;
                position: absolute;
                top: 49%;
                left:55%;
            }
            .labeld54{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:50%;
                left: 61%; 
            }
            .outputd43{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 49%;
                left:56%; 
                text-transform: uppercase;
            }
            .labeld55{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:48.5%;
                left: 69%; 
            }
            .vertical_lined15 {
                width: 1px; 
                height: 49px; 
                background-color: darkblue;
                position: absolute; 
                left: 68%;
                top: 48.5%;
            }
            .labeld56{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:51%;
                left: 69%; 
            }
            .labellined22{
                color: black;
                position: absolute;
                top: 50%;
                left:73%;
            }
            .outputd44{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 50%;
                left:74%; 
                text-transform: uppercase;
            }
            .labeld57{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:51%;
                left: 85%; 
            }
            .labellined23{
                color: black;
                position: absolute;
                top: 50%;
                left:87%;
            }
            .outputd45{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 50%;
                left:88%; 
                text-transform: uppercase;
            }
            .horizontal_lined14{
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 52.5%;
            }
            .labeld58{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:52.5%;
                left: 1%; 
            }
            .labeld59{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:53.5%;
                left: 1%; 
            }
            .cboxd1{
                font-size: 25px; 
                color: darkblue;
                position: absolute;
                top: 50%;
                left: 85.5%; 
                font-family: Verdana, Tahoma, 'DejaVu Sans', sans-serif;
            } 
            .labeld60{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:53.5%;
                left: 88.5%; 
            }
            .outputd46{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 52.5%;
                left:86.5%; 
                text-transform: uppercase;
            }
            .cboxd2{
                font-size: 25px; 
                color: darkblue;
                position: absolute;
                top: 52%;
                left: 3%; 
                font-family: Verdana, Tahoma, 'DejaVu Sans', sans-serif;
            }
            .outputd47{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 54.5%;
                left:4%; 
                text-transform: uppercase;
            }
            .labeld61{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:55.3%;
                left: 6.5%; 
            }
            .labellined24{
                color: black;
                position: absolute;
                top: 54.3%;
                left:50%;
            }
            .outputd48{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 54.3%;
                left:51%; 
                text-transform: uppercase;
            }
            .labeld62{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:55.3%;
                left: 62%; 
            }
            .labeld63{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:57%;
                left: 2%; 
            }
            .labellined25{
                color: black;
                position: absolute;
                top: 56%;
                left:10%;
            }
            .labeld64{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:58%;
                left: 2%; 
            }
            .labellined26{
                color: black;
                position: absolute;
                top: 57%;
                left:12%;
            }
            .outputd49{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 57%;
                left:13%; 
                text-transform: uppercase;
            }
            .labeld65{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:59%;
                left: 2%; 
            }
            .labellined27{
                color: black;
                position: absolute;
                top: 58%;
                left:13%;
            }
            .outputd50{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 58%;
                left:14%; 
                text-transform: uppercase;
            }
            .labeld66{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:60%;
                left: 2%; 
            }
            .labellined28{
                color: black;
                position: absolute;
                top: 59%;
                left:8%;
            }
            .outputd51{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 59%;
                left:9%; 
                text-transform: uppercase;
            }
            .labellined27a{
                color: black;
                position: absolute;
                top: 60%;
                left:2%;
            }
            .labeld66a{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:61.2%;
                left: 30%; 
            }
            .outputd66b{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 60%;
                left:4%; 
                text-transform: uppercase;
            }
            .labellined27b{
                color: black;
                position: absolute;
                top: 60%;
                left:34%;
            }
            .outputd66c{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 60%;
                left:35%; 
                text-transform: uppercase;
            }
            .labeld67{
                font-size: 12px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:57%;
                left: 65%; 
            }
            .labellined29{
                color: black;
                position: absolute;
                top: 57%;
                left:65%;
            }
            .labeld68{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:59%;
                left: 66%; 
            }
            .labellined30{
                color: black;
                position: absolute;
                top: 59%;
                left:65%;
            }
            .labeld69{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:61%;
                left: 80%; 
            }
            .outputd52{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 59%;
                left:67%; 
                text-transform: uppercase;
            }
            .horizontal_lined15{
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 62.5%;
            }
            .labeld70{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:62.5%;
                left: 1%; 
            }
            .labeld71{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:62.5%;
                left: 32%; 
            }
            .labeld72{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:62.5%;
                left: 67%; 
            }
            .labeld73{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:63.7%;
                left: 31%; 
            }
            .labeld74{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:64.8%;
                left: 31%; 
            }
            .labeld75{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:63.7%;
                left: 66%; 
            }
            .labeld76{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:64.8%;
                left: 66%; 
            }
            .labellined31{
                color: black;
                position: absolute;
                top: 62.5%;
                left:36%;
            }
            .outputd53{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 62.5%;
                left:37%; 
                text-transform: uppercase;
            }
            .labellined32{
                color: black;
                position: absolute;
                top: 63.5%;
                left:39%;
            }
            .outputd54{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 63.5%;
                left:40%; 
                text-transform: uppercase;
            }
            .labellined33{
                color: black;
                position: absolute;
                top: 62.5%;
                left:71%;
            }
            .outputd55{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 62.5%;
                left:72%; 
                text-transform: uppercase;
            }
            .labellined34{
                color: black;
                position: absolute;
                top: 63.5%;
                left:74%;
            }
            .outputd56{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 63.5%;
                left:75%; 
                text-transform: uppercase;
            }
            .vertical_lined16 {
                width: 1px; 
                height: 49px; 
                background-color: darkblue;
                position: absolute; 
                left: 30%;
                top: 62.5%;
            }
            .vertical_lined17 {
                width: 1px; 
                height: 49px; 
                background-color: darkblue;
                position: absolute; 
                left: 65%;
                top: 62.5%;
            }
            .horizontal_lined16{
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 66.5%;
            }
            .labeld77{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:66.5%;
                left: 1%; 
            }
            .outputd57{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 67%;
                left:3%; 
                text-transform: uppercase;
            }
            .horizontal_lined17{
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 69%;
            }
            .labeld78{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:69%;
                left: 1%; 
            }
            .labeld79{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:70%;
                left: 1%; 
            }
            .labeld80{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:69%;
                left: 51%; 
            }
            .vertical_lined18 {
                width: 1px; 
                height: 260px; 
                background-color: darkblue;
                position: absolute; 
                left: 50%;
                top: 69%;
            }
            .labeld81{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:72.5%;
                left: 2%; 
            }
            .labellined35{
                color: black;
                position: absolute;
                top: 71.3%;
                left:9%;
            }
            .outputd58{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 71.3%;
                left:10%; 
                text-transform: uppercase;
            }
            .labeld82{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:74%;
                left: 2%; 
            }
            .labellined36{
                color: black;
                position: absolute;
                top: 73%;
                left:11%;
            }
            .outputd59{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 73%;
                left:12%; 
                text-transform: uppercase;
            }
            .labeld83{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:75.7%;
                left: 2%; 
            }
            .labellined37{
                color: black;
                position: absolute;
                top: 74.5%;
                left:22%;
            }
            .outputd60{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 74.5%;
                left:23%; 
                text-transform: uppercase;
            }
            .labeld84{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:77.5%;
                left: 2%; 
            }
            .labeld84a{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:79%;
                left: 2%; 
            }
            .labellined38a{
                color: black;
                position: absolute;
                top: 77.7%;
                left:5%;
            }
            .outputd61a{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 77.7%;
                left:6%; 
                text-transform: uppercase;
            }
            .labellined38{
                color: black;
                position: absolute;
                top: 76.3%;
                left:8%;
            }
            .outputd61{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 76.3%;
                left:9%; 
                text-transform: uppercase;
            }
            .labeld85{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:72.5%;
                left: 52%; 
            }
            .labellined39{
                color: black;
                position: absolute;
                top: 71.3%;
                left:58%;
            }
            .outputd62{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 71.3%;
                left:59%; 
                text-transform: uppercase;
            }
            .labeld86{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:74%;
                left: 52%; 
            }
            .labellined40{
                color: black;
                position: absolute;
                top: 73%;
                left:61.5%;
            }
            .outputd63{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 73%;
                left:62%; 
                text-transform: uppercase;
            }
            .labeld87{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:75.7%;
                left: 52%; 
            }
            .labellined41{
                color: black;
                position: absolute;
                top: 74.5%;
                left:63%;
            }
            .outputd64{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 74.5%;
                left:64%; 
                text-transform: uppercase;
            }
            .labeld88{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:77.3%;
                left: 52%; 
            }
            .labellined42{
                color: black;
                position: absolute;
                top: 76.2%;
                left:55.5%;
            }
            .outputd65{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 76.2%;
                left:56%; 
                text-transform: uppercase;
            }
            .horizontal_lined18{
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 80%;
            }
            .labeld89{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:80%;
                left: 1%; 
            }
            .labeld90{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:82%;
                left: 2%; 
            }
            .labellined43{
                color: black;
                position: absolute;
                top: 80.9%;
                left:8%;
            }
            .labeld91{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:84%;
                left: 2%; 
            }
            .labellined44{
                color: black;
                position: absolute;
                top: 82.9%;
                left:11%;
            }
            .outputd66{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 82.9%;
                left:12%; 
                text-transform: uppercase;
            }
            .labeld92{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:86%;
                left: 2%; 
            }
            .labellined45{
                color: black;
                position: absolute;
                top: 84.9%;
                left:13%;
            }
            .outputd67{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 84.9%;
                left:14%; 
                text-transform: uppercase;
            }
            .labeld93{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:88%;
                left: 2%; 
            }
            .labellined46{
                color: black;
                position: absolute;
                top: 86.9%;
                left:5%;
            }
            .outputd68{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 86.9%;
                left:6%; 
                text-transform: uppercase;
            }
            .labeld94{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:80%;
                left: 51%; 
            }
                  .labellined43{
                color: black;
                position: absolute;
                top: 80.9%;
                left:8%;
            }
            .labeld91{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:84%;
                left: 2%; 
            }
            .labeld95{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:82%;
                left: 52%; 
            }
            .labellined47{
                color: black;
                position: absolute;
                top: 80.9%;
                left:58%;
            }
            .labeld96{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:84%;
                left: 52%; 
            }
            .labellined48{
                color: black;
                position: absolute;
                top: 82.9%;
                left:61%;
            }
            .outputd69{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 82.9%;
                left:62%; 
                text-transform: uppercase;
            }
            .labeld97{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:86%;
                left: 52%; 
            }
            .labellined49{
                color: black;
                position: absolute;
                top: 84.9%;
                left:62%;
            }
            .outputd70{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 84.9%;
                left:63%; 
                text-transform: uppercase;
            }
            .labeld98{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:88%;
                left: 52%; 
            }
            .labellined50{
                color: black;
                position: absolute;
                top: 86.9%;
                left:55%;
            }
            .outputd71{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 86.9%;
                left:56%; 
                text-transform: uppercase;
            }
            .horizontal_lined18{
                width: 99.5%; 
                height: 0.1%; 
                background-color: darkblue;
                position: absolute;
                top: 89.8%;
            }
            .labeld99{
                font-size: 11px;
                text-transform: normal;
                color:black;
                position: absolute;
                top:90%;
                left: 1%; 
            }
            .outputd72{
                font-size: 12px;
                color: black;
                position: absolute;
                top: 91%;
                left:3%; 
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
                    <div class='horizontal_lined11'></div>  
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
                    <div class='labeld38'>II. Other significant conditions contributing to death:</div> 
                        <p class='labellined9'>_______________________________________________________________</p> 
                        <p class='outputd30'>JUAN m DELA CRUZ</p></div>
                    <div class='horizontal_linem10'></div> 
                    <div class='labeld39'>19c. MATERNAL CONDITION(if the deceased is female aged 15-48 years old)</div> 
                        <p class='labellined10'>______</p> 
                    <div class='labeld40'>a. pregnant.<br>not in labour</div> 
                        <p class='outputd31'>X</p></div>
                        <p class='labellined11'>______</p> 
                    <div class='labeld41'>b.pregnant, in<br>baour</div> 
                        <p class='outputd32'>X</p></div>
                        <p class='labellined12'>______</p> 
                    <div class='labeld42'>c.less than 42 days after<br>delivery</div> 
                        <p class='outputd33'>X</p></div>
                        <p class='labellined13'>______</p> 
                    <div class='labeld43'>d.42 days to 1 year after<br>delivery</div> 
                        <p class='outputd34'>X</p></div>
                        <p class='labellined14'>______</p> 
                    <div class='labeld44'>e.None of<br> thechoices</div> 
                        <p class='outputd35'>X</p></div>
                    <div class='horizontal_lined12'></div> 
                    <div class='labeld45'>19d.DEATH BY EXTERNAL CAUSES</div> 
                    <div class='labeld46'>a. Manner od death(Homicide,Suicide,Accident, Legal intervention, etc.)</div> 
                        <p class='labellined15'>______________________________</p> 
                        <p class='outputd36'>JUAN DELA cruz</p></div>
                    <div class='labeld47'>b.Place of Occurence of Extenal Cause(e.g home,farm,factory,street, sea, ect.)</div>   
                        <p class='labellined16'>_________________________</p> 
                        <p class='outputd37'>JUAN DELA cruz</p></div>
                    <div class='vertical_lined14'></div>
                    <div class='labeld48'>20.AUTOPSY<br>(Yes/No)</div>   
                        <p class='outputd38'>no</p></div>
                    <div class='horizontal_lined13'></div> 
                    <div class='labeld49'>21a.ATTENDANT</div>   
                        <p class='labellined17'>______</p> 
                    <div class='labeld50'>1.Private<br>Physician</div>  
                        <p class='outputd39'>X</p></div>
                        <p class='labellined18'>______</p> 
                    <div class='labeld51'>2.Public<br>Health<br>Officer</div>  
                        <p class='outputd40'>X</p></div>
                        <p class='labellined19'>______</p> 
                    <div class='labeld52'>3.Hospital<br> Authority</div>  
                        <p class='outputd41'>X</p></div>
                        <p class='labellined20'>______</p> 
                    <div class='labeld53'>4.None</div>  
                        <p class='outputd42'>X</p></div>
                        <p class='labellined21'>______</p> 
                    <div class='labeld54'>5.Others<br>Specify</div>  
                        <p class='outputd43'>X</p></div>
                    <div class='labeld55'>21b.If attended, state duration(mm/dd/yy)</div>  
                    <div class='labeld56'>From</div>  
                        <p class='labellined22'>____________</p> 
                        <p class='outputd44'>X</p></div>
                    <div class='vertical_lined15'></div>
                    <div class='labeld57'>To</div>  
                        <p class='labellined23'>____________</p> 
                        <p class='outputd45'>X</p></div>
                    <div class='horizontal_lined14'></div> 
                    <div class='labeld58'>22.CERTIFICATION OF DEATH</div> 
                    <div class='labeld59'>I hereby certify that the foregoing particulars are correct as near as same can be ascertained and i further ertify that</div>   
                        <p class='cboxd1'><b>&#9633;</b></p>
                        <p class='outputd46'>X</p></div>
                    <div class='labeld60'>have attended/</div> 
                        <p class='cboxd2'><b>&#9633;</b></p>
                        <p class='outputd47'>X</p></div>
                    <div class='labeld61'>have not attended the deceased and that death occured at</div> 
                        <p class='labellined24'>____________</p> 
                        <p class='outputd48'>X</p></div>
                    <div class='labeld62'>am/pm on the date of death specified above.</div> 
                    <div class='labeld63'>Signature</div> 
                       <p class='labellined25'>_________________________________________________________</p> 
                    <div class='labeld64'>Name in Print</div> 
                        <p class='labellined26'>_______________________________________________________</p> 
                        <p class='outputd49'>Xeheheeheh</p></div>
                    <div class='labeld65'>Title or Position</div> 
                        <p class='labellined27'>______________________________________________________</p> 
                        <p class='outputd50'>Xeheheeheh</p></div>
                    <div class='labeld66'>Address</div> 
                        <p class='labellined27a'>______________________________</p> 
                        <div class='labeld66a'>Date</div> 
                        <p class='outputd66b'>Xeheheeheh</p></div>
                        <p class='labellined27b'>______________________________</p> 
                        <p class='outputd66c'>Xeheheeheh</p></div>
                        <p class='labellined28'>___________________________________________________________</p> 
                        <p class='outputd51'>Xeheheeheh</p></div>
                    <div class='labeld67'>REVIEWED BY:</div> 
                        <p class='labellined29'>___________________________________</p> 
                    <div class='labeld68'>Signature Over Printed Name of Health Officer</div> 
                        <p class='labellined30'>___________________________________</p> 
                    <div class='labeld69'>Date</div> 
                        <p class='outputd52'>Xeheheeheh</p></div>
                    <div class='horizontal_lined15'></div> 
                    <div class='labeld70'>23.CORPSE DISPOSAL<br>(Burial,Cremation,if others, specify)</div> 
                    <div class='labeld71'>24a.BURIAL/CREMATION PERMIT</div> 
                    <div class='labeld72'>24b.TRANSFER PERMIT</div> 
                    <div class='labeld73'>Number</div> 
                    <div class='labeld74'>Date Issued</div> 
                    <div class='labeld75'>Number</div> 
                    <div class='labeld76'>Date Issued</div> 
                        <p class='labellined31'>______________________________</p> 
                        <p class='outputd53'>Xeheheeheh</p></div>
                        <p class='labellined32'>__________________________</p> 
                        <p class='outputd54'>Xeheheeheh</p></div>
                        <p class='labellined33'>______________________________</p> 
                        <p class='outputd55'>Xeheheeheh</p></div>
                        <p class='labellined34'>___________________________</p> 
                        <p class='outputd56'>Xeheheeheh</p></div>
                    <div class='vertical_lined16'></div>
                    <div class='vertical_lined17'></div>
                    <div class='horizontal_lined16'></div> 
                    <div class='labeld77'>25.NAME AND ADDRESS OF CEMETERY OR CREMATORY</div> 
                        <p class='outputd57'>Xeheheeheh</p></div>
                    <div class='horizontal_lined17'></div> 
                    <div class='labeld78'>26.CERTIFICATION OF INFORMANT</div> 
                    <div class='labeld79'>I hereby certify that all information supplied are true and correct<br>to my own knowledge and belief</div> 
                    <div class='labeld80'>27.PREPARED BY</div> 
                    <div class='vertical_lined18'></div>
                    <div class='labeld81'>Signature</div> 
                        <p class='labellined35'>___________________________________________</p> 
                        <p class='outputd58'>Xeheheeheh</p></div>
                    <div class='labeld82'>Name in Print</div> 
                        <p class='labellined36'>_________________________________________</p> 
                        <p class='outputd59'>Xeheheeheh</p></div>
                    <div class='labeld83'>Relationship to the Deceased</div> 
                        <p class='labellined37'>_____________________________</p> 
                        <p class='outputd60'>Xeheheeheh</p></div>
                    <div class='labeld84'>Address</div> 
                        <p class='labellined38'>____________________________________________</p> 
                        <p class='outputd61'>Xeheheeheh</p></div>
                    <div class='labeld84a'>Date</div> 
                        <p class='labellined38a'>_______________________________________________</p> 
                        <p class='outputd61a'>Xeheheeheh</p></div>
                    <div class='labeld85'>Signature</div> 
                        <p class='labellined39'>____________________________________________</p> 
                        <p class='outputd62'>Xeheheeheh</p></div>
                    <div class='labeld86'>Name in Print</div> 
                        <p class='labellined40'>________________________________________</p> 
                        <p class='outputd63'>Xeheheeheh</p></div>
                    <div class='labeld87'>Title or Posiotion</div>
                        <p class='labellined41'>_______________________________________</p> 
                        <p class='outputd64'>Xeheheeheh</p></div>
                    <div class='labeld88'>Date</div> 
                        <p class='labellined42'>_______________________________________________</p> 
                        <p class='outputd65'>Xeheheeheh</p></div>
                    <div class='horizontal_lined18'></div> 
                    <div class='labeld89'>28.RECEIVED BY</div> 
                    <div class='labeld90'>Signature</div> 
                        <p class='labellined43'>____________________________________________</p> 
                    <div class='labeld91'>Name in Print</div> 
                        <p class='labellined44'>_________________________________________</p> 
                        <p class='outputd66'>Xeheheeheh</p></div>
                    <div class='labeld92'>Title or Position</div> 
                        <p class='labellined45'>_______________________________________</p> 
                        <p class='outputd67'>Xeheheeheh</p></div>
                    <div class='labeld93'>Date</div> 
                        <p class='labellined46'>________________________________________________</p> 
                        <p class='outputd68'>Xeheheeheh</p></div>
                    <div class='labeld94'>29.REGISTERED AT THE OFFICE OF THE CIVIL REGISTRAR</div> 
                    <div class='labeld95'>Signature</div>
                        <p class='labellined47'>____________________________________________</p> 
                    <div class='labeld96'>Name in Print</div>
                       <p class='labellined48'>_________________________________________</p> 
                       <p class='outputd69'>Xeheheeheh</p></div>
                    <div class='labeld97'>Title or Position</div>
                        <p class='labellined49'>________________________________________</p> 
                        <p class='outputd70'>Xeheheeheh</p></div>
                    <div class='labeld98'>Date</div>
                        <p class='labellined50'>_______________________________________________</p> 
                        <p class='outputd71'>Xeheheeheh</p></div>
                    <div class='horizontal_lined19'></div> 
                    <div class='labeld99'>REMARKS/ANNOTATIONS(For LCRO/OCRG Use Only)</div>
                        <p class='outputd72'>Xeheheeheh</p></div>
                        
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