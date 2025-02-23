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
                border: 2px solid  rgb(248, 82, 159);
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
            background-color:  rgb(248, 82, 159);
            position: absolute;
            top: 6%;
            }
            .labelm1 {
                font-size: 13px;
                text-transform: normal;
                text-align: left;
                position: fixed;
                top: 8%;
                left: 1%
            }
            .labellinem1 {
                color: rgb(248, 82, 159);
                position: absolute;
                top: 7%;
                left: 4%;
            }
            .labelm2{
            font-size: 13px;
            text-transform: normal;
            text-align: left;
            position: fixed;
            top: 10%;
            left: 1%
            }
            .labellinem2 {
            color: rgb(248, 82, 159);
            position: absolute;
            top: 9%;
            left: 14%;
            }
            .outputm1 {
            font-size: 13px;
            text-transform: uppercase;
            position: absolute;
            top: 7%;
            left: 10%
            }
            .outputm2 {
            font-size: 13px;
            text-transform: uppercase;
            position: absolute;
            top: 9%;
            left: 15%
            }
            .vertical_linem1 {
            width: 1px; 
            height: 70px; 
            background-color: rgb(248, 82, 159);
            position: absolute; 
            left: 63%;
            top: 6%;
            }
             .labelm3 {
            font-size: 12px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 7%;
            left: 64%; 
            }
            .outputm3 {
            font-size: 18px;
            color: gray;
            position: absolute;
            top: 7%;
            left: 77%; 
            }
            .horizontal_linem2 {
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 11.5%;
            }
            .vertical_linem2 {
            width: 1.3px; 
            height: 585px; 
            background-color: rgb(248, 82, 159);
            position: absolute; 
            left: 10%;
            top: 11.5%;
            }   
            .vertical_linem3 {
            width: 1.3px; 
            height: 585px; 
            background-color: rgb(248, 82, 159);
            position: absolute; 
            left: 55%;
            top: 11.5%;
            }   
            .labelm4 {
            font-size: 12px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 12%;
            left: 28%; 
            }
            .labelm5 {
            font-size: 12px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 12%;
            left: 75%; 
            }
            .horizontal_linem3 {
            width: 89.3%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 13%;
            left: 10.3%; 
            }
            .labelm6{
            font-size: 10px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 14%;
            left: 1%; 
            }
            .labelm7{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 14%;
            left: 12%; 
            }
             .labellinem3 {
            color: rgb(248, 82, 159);
            position: absolute;
            top: 13%;
            left: 16%;
            }
            .outputm4{
            color: black;
            position: absolute;
            top: 13%;
            left: 17%;
            font-size: 12px;
            text-transform: normal;
            }  
            .labelm8{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 16%;
            left: 12%; 
            }
             .labellinem4 {
            color: rgb(248, 82, 159);
            position: absolute;
            top: 14.8%;
            left: 18%;
            }
            .outputm5{
            color: black;
            position: absolute;
            top: 15%;
            left: 18%;
            font-size: 12px;
            text-transform: normal;
            }   
             .labelm9{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 18%;
            left: 12%; 
            }
             .labellinem5 {
            color: rgb(248, 82, 159);
            position: absolute;
            top: 17%;
            left: 16%;
            }
            .outputm6{
            color: black;
            position: absolute;
            top: 17%;
            left: 17%;
            font-size: 12px;
            text-transform: normal;
            }   
            .labelm10{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 14%;
            left: 58%; 
            }
             .labellinem6 {
            color: rgb(248, 82, 159);
            position: absolute;
            top: 13%;
            left: 62.5%;
            }
            .outputm7{
            color: black;
            position: absolute;
            top: 13%;
            left: 63%;
            font-size: 12px;
            text-transform: normal;
            } 
             .labelm11{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 16%;
            left: 58%; 
            }
            .labellinem7 {
            color: rgb(248, 82, 159);
            position: absolute;
            top: 14.8%;
            left: 64%;
            }
            .outputm8{
            color: black;
            position: absolute;
            top: 15%;
            left: 65%;
            font-size: 12px;
            text-transform: normal;
            }   
            .labelm12{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 18%;
            left: 58%; 
            }
             .labellinem8 {
            color: rgb(248, 82, 159);
            position: absolute;
            top: 17%;
            left: 61.5%;
            }
            .outputm9{
            color: black;
            position: absolute;
            top: 17%;
            left: 62.5%;
            font-size: 12px;
            text-transform: normal;
            } 
            .horizontal_linem4 {
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 19.5%;
            left: 0%; 
            }
             .labelm13{
            font-size: 10px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 21%;
            left: 0.5%; 
            }
             .labelm14{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 20%;
            left: 12%; 
            }
            .outputm10{
            color: black;
            position: absolute;
            top: 20%;
            left: 12.5%; 
            font-size: 12px;
            text-transform: normal;
            }   
            .labelm15{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 20%;
            left: 22%; 
            }
            .outputm11{
            color: black;
            position: absolute;
            top: 20%;
            left:21%; 
            font-size: 12px;
            text-transform: normal;
            } 
             .labelm16{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 20%;
            left: 34%; 
            }
            .outputm12{
            color: black;
            position: absolute;
            top: 20%;
            left:34%; 
            font-size: 12px;
            text-transform: normal;
            } 
            .vertical_linem4 {
            width: 1px; 
            height: 43px; 
            background-color: rgb(248, 82, 159);
            position: absolute; 
            left: 43%;
            top: 19.5%;
            }
            .labelm17{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 20%;
            left: 47%; 
            }
            .outputm13{
            color: black;
            position: absolute;
            top: 20%;
            left:47.5%; 
            font-size: 12px;
            text-transform: normal;
            } 
            .horizontal_linem5 {
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 23%;
            left: 0%; 
            }
            .labelm18{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 20%;
            left: 57%; 
            }
            .outputm14{
            color: black;
            position: absolute;
            top: 20%;
            left: 58%; 
            font-size: 12px;
            text-transform: normal;
            } 
            .labelm19{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 20%;
            left:67%; 
            }
            .outputm15{
            color: black;
            position: absolute;
            top: 20%;
            left:66%; 
            font-size: 12px;
            text-transform: normal;
            } 
            .labelm20{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 20%;
            left:78%; 
            }
            .outputm16{
            color: black;
            position: absolute;
            top: 20%;
            left:78.5%; 
            font-size: 12px;
            text-transform: normal;
            }
            .vertical_linem5 {
            width: 1px; 
            height: 43px; 
            background-color: rgb(248, 82, 159);
            position: absolute; 
            left: 88%;
            top: 19.5%;
            }
            .labelm21{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 20%;
            left:92%; 
            }
            .outputm17{
            color: black;
            position: absolute;
            top: 20%;
            left:93%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm22{
            font-size: 10px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 24%;
            left: 0.5%; 
            }
            .labelm23{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 23%;
            left: 12%; 
            }
            .outputm18{
            color: black;
            position: absolute;
            top: 23.5%;
            left:12%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm24{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 23%;
            left: 30%; 
            }
            .outputm19{
            color: black;
            position: absolute;
            top: 23.5%;
            left:30%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm25{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 23%;
            left: 45%; 
            }
            .outputm20{
            color: black;
            position: absolute;
            top: 23.5%;
            left:43%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm26{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 23%;
            left: 57%; 
            }
            .outputm21{
            color: black;
            position: absolute;
            top: 23.5%;
            left:56%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm27{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 23%;
            left: 75%; 
            }
            .outputm22{
            color: black;
            position: absolute;
            top: 23.5%;
            left:74%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm28{
            font-size: 11px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 23%;
            left: 90%; 
            }
            .outputm23{
            color: black;
            position: absolute;
            top: 23.5%;
            left:88%; 
            font-size: 12px;
            text-transform: normal;
            }
            .horizontal_linem6 {
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 26%;
            left: 0%; 
            }
            .labelm29{
            font-size: 10px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 27%;
            left: 0.5%; 
            }
            .outputm24{
            color: black;
            position: absolute;
            top: 26.5%;
            left:12%; 
            font-size: 12px;
            text-transform: normal;
            }
            .vertical_linem6 {
            width: 1px; 
            height: 39px; 
            background-color: rgb(248, 82, 159);
            position: absolute; 
            left:32%;
            top: 26%;
            }
            .labelm30{
            font-size: 10px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 26.5%;
            left: 35%; 
            }
            .outputm25{
            color: black;
            position: absolute;
            top: 26.5%;
            left:35.5%; 
            font-size: 12px;
            text-transform: normal;
            }
            .outputm26{
            color: black;
            position: absolute;
            top: 26.5%;
            left:57%; 
            font-size: 12px;
            text-transform: normal;
            }
            .vertical_linem7 {
            width: 1px; 
            height: 39px; 
            background-color: rgb(248, 82, 159);
            position: absolute; 
            left:75%;
            top: 26%;
            }
            .labelm31{
            font-size: 10px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 26.5%;
            left: 78%; 
            }
            .outputm27{
            color: black;
            position: absolute;
            top: 26.5%;
            left:78.5%; 
            font-size: 12px;
            text-transform: normal;
            }
            .horizontal_linem7 {
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 29%;
            left: 0%; 
            }
             .labelm32{
            font-size: 10px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 30%;
            left: 0.5%; 
            }
            .labelm33{
            font-size: 10px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 29%;
            left: 13%; 
            }
            .outputm28{
            color: black;
            position: absolute;
            top: 29.5%;
            left:16%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm34{
            font-size: 10px;
            text-transform: normal;
            color: rgb(248, 82, 159);
            position: absolute;
            top: 29%;
            left: 58.5%; 
            }
            .outputm29{
            color: black;
            position: absolute;
            top: 29.5%;
            left:63%; 
            font-size: 12px;
            text-transform: normal;
            }
            .horizontal_linem8 {
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 32%;
            left: 0%; 
            }
            .labelm35{
            font-size: 10px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 32.5%;
            left: 0.5%; 
            }
            .outputm30{
            color: black;
            position: absolute;
            top: 32%;
            left:25%; 
            font-size: 12px;
            text-transform: normal;
            }
            .outputm31{
            color: black;
            position: absolute;
            top: 32%;
            left:75%; 
            font-size: 12px;
            text-transform: normal;
            }
            .horizontal_linem9 {
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 34.5%;
            left: 0%; 
            }
            .labelm36{
            font-size: 10px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 35%;
            left: 0.5%; 
            }
            .outputm32{
            color: black;
            position: absolute;
            top: 34.5%;
            left:25%; 
            font-size: 12px;
            text-transform: normal;
            }
            .outputm33{
            color: black;
            position: absolute;
            top: 34.5%;
            left:75%; 
            font-size: 12px;
            text-transform: normal;
            }
            .horizontal_linem10{
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 36.8%;
            left: 0%; 
            }
            .labelm37{
            font-size: 10px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 37%;
            left: 0.5%; 
            }
            .labelm38{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 37%;
            left: 15%; 
            }
            .outputm34{
            color: black;
            position: absolute;
            top: 37.5%;
            left:11.5%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm39{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 37%;
            left: 28.5%; 
            }
            .outputm35{
            color: black;
            position: absolute;
            top: 37.5%;
            left:27%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm40{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 37%;
            left: 45%; 
            }
            .outputm36{
            color: black;
            position: absolute;
            top: 37.5%;
            left:43%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm41{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 37%;
            left: 60%; 
            }
            .outputm37{
            color: black;
            position: absolute;
            top: 37.5%;
            left:56%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm42{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 37%;
            left: 75%; 
            }
            .outputm38{
            color: black;
            position: absolute;
            top: 37.5%;
            left:74%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm43{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 37%;
            left: 91%; 
            }
            .outputm39{
            color: black;
            position: absolute;
            top: 37.5%;
            left:88%; 
            font-size: 12px;
            text-transform: normal;
            }
            .horizontal_linem11{
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 40%;
            left: 0%; 
            }
            .labelm44{
            font-size: 10px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 40.5%;
            left: 0.5%; 
            }
            .outputm40{
            color: black;
            position: absolute;
            top: 40%;
            left:28%; 
            font-size: 12px;
            text-transform: normal;
            }
            .outputm41{
            color: black;
            position: absolute;
            top: 40%;
            left:75%; 
            font-size: 12px;
            text-transform: normal;
            }
            .horizontal_linem12{
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 42.5%;
            left: 0%; 
            }
            .labelm45{
            font-size: 9.5px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 43%;
            left: 0.5%; 
            }
            .labelm46{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 42.7%;
            left: 15%; 
            }
            .outputm42{
            color: black;
            position: absolute;
            top: 43%;
            left:12%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm47{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 42.7%;
            left: 28%; 
            }
            .outputm43{
            color: black;
            position: absolute;
            top: 43%;
            left:27%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm48{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 42.7%;
            left: 45%; 
            }
            .outputm44{
            color: black;
            position: absolute;
            top: 43%;
            left:43%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm49{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 42.7%;
            left: 60%; 
            }
            .outputm45{
            color: black;
            position: absolute;
            top: 43%;
            left:57%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm50{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 42.7%;
            left: 75%; 
            }
            .outputm46{
            color: black;
            position: absolute;
            top: 43%;
            left:74%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm51{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 42.7%;
            left: 91%; 
            }
            .outputm47{
            color: black;
            position: absolute;
            top: 43%;
            left:88%; 
            font-size: 12px;
            text-transform: normal;
            }
            .horizontal_linem13{
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 45.5%;
            left: 0%; 
            }
            .labelm52{
            font-size: 10px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 46%;
            left: 0.5%; 
            }
            .outputm48{
            color: black;
            position: absolute;
            top: 45%;
            left:28%; 
            font-size: 12px;
            text-transform: normal;
            }
            .outputm49{
            color: black;
            position: absolute;
            top: 45%;
            left:75%; 
            font-size: 12px;
            text-transform: normal;
            }
            .horizontal_linem14{
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 47.5%;
            left: 0%; 
            }
            .labelm53{
            font-size: 10px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 48%;
            left: 0.5%; 
            }
            .labelm54{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 47.7%;
            left: 15%; 
            }
            .outputm50{
            color: black;
            position: absolute;
            top: 48%;
            left:12%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm55{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 47.7%;
            left: 28%; 
            }
            .outputm51{
            color: black;
            position: absolute;
            top: 48%;
            left:27%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm56{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 47.7%;
            left: 45%; 
            }
            .outputm52{
            color: black;
            position: absolute;
            top: 48%;
            left:43%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm57{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 47.7%;
            left: 60%; 
            }
            .outputm53{
            color: black;
            position: absolute;
            top: 48%;
            left:57%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm58{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 47.7%;
            left: 75%; 
            }
            .outputm55{
            color: black;
            position: absolute;
            top: 48%;
            left:74%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm59{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 47.7%;
            left: 92%; 
            }
            .outputm56{
            color: black;
            position: absolute;
            top: 48%;
            left:88%; 
            font-size: 12px;
            text-transform: normal;
            }
            .horizontal_linem15{
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 53%;
            left: 0%; 
            }
            .labelm60{
            font-size: 10px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 53.5%;
            left: 0.5%; 
            }
            .outputm57{
            color: black;
            position: absolute;
            top: 52.5%;
            left:25%; 
            font-size: 12px;
            text-transform: normal;
            }
            .outputm58{
            color: black;
            position: absolute;
            top: 52.5%;
            left:70%; 
            font-size: 12px;
            text-transform: normal;
            }
            .horizontal_linem16{
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 55%;
            left: 0%; 
            }
            .labelm61{
            font-size: 10px;
            text-transform: normal;
            color: black;
            position: absolute;
            top: 55.5%;
            left: 0.5%; 
            }
            .labelm62{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 55%;
            left: 13%; 
            }
            .outputm59{
            color: black;
            position: absolute;
            top: 55.5%;
            left:17%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm63{
            font-size: 10px;
            text-transform: normal;
            color:  rgb(248, 82, 159);
            position: absolute;
            top: 55%;
            left: 58%; 
            }
            .outputm60{
            color: black;
            position: absolute;
            top: 55.5%;
            left:63%; 
            font-size: 12px;
            text-transform: normal;
            }
            .horizontal_linem17{
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 58%;
            left: 0%; 
            }
           .labelm64{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 58.5%;
            left: 0.5%; 
            }
            .labellinem9{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 57.5%;
            left: 14.5%;
            text-transform: normal;
            }
            .outputm61{
            color: black;
            position: absolute;
            top: 57.5%;
            left:15%; 
            font-size: 12px;
            text-transform: normal;
            }
            .outputm62{
            color: black;
            position: absolute;
            top: 57.5%;
            left:59%; 
            font-size: 12px;
            text-transform: normal;
            }
            .outputm63{
            color: black;
            position: absolute;
            top: 57.5%;
            left:85%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm65{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 59.5%;
            left: 15%; 
            }
            .labelm66{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 59.5%;
            left: 60%; 
            }
            .labelm67{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 59.5%;
            left: 85%; 
            }
            .labelm68{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 61%;
            left: 0.5%; 
            }
            .labellinem10{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 60%;
            left: 14.5%;
            text-transform: normal;
            }
            .outputm64{
            color: black;
            position: absolute;
            top: 60%;
            left:20%; 
            font-size: 12px;
            text-transform: normal;
            }
            .outputm65{
            color: black;
            position: absolute;
            top: 60%;
            left:30%; 
            font-size: 12px;
            text-transform: normal;
            }
            .outputm66{
            color: black;
            position: absolute;
            top: 60%;
            left:48%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm69{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 62%;
            left: 19%; 
            }
            .labelm70{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 62%;
            left: 32%; 
            }
            .labelm71{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 62%;
            left: 48%; 
            }
            .labelm72{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 61%;
            left: 57%; 
            }
            .labellinem11{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 60%;
            left: 70%;
            text-transform: normal;
            }
            .outputm67{
            color: black;
            position: absolute;
            top: 60%;
            left:78%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm73{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 61%;
            left: 92%; 
            }
            .labelm74{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 63.5%;
            left: 0.5%; 
            }
            .labelm75{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 65%;
            left: 5%; 
            }
            .labellinem12{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 64%;
            left: 24%;
            text-transform: normal;
            }
            .outputm68{
            color: black;
            position: absolute;
            top: 64%;
            left:25%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm76{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 65%;
            left: 58%; 
            }
            .labellinem13{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 64%;
            left: 62%;
            text-transform: normal;
            }
            .outputm69{
            color: black;
            position: absolute;
            top: 64%;
            left:63%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm77{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 65%;
            left: 94%; 
            }
            .labelm78{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 66%;
            left: 4.5%; 
            }
            .labelm79{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 67%;
            left: 4.5%; 
            }
            .cboxm1{
            font-size: 25px; 
            color: rgb(248, 82, 159);
            position: absolute;
            top: 64%;
            left: 35.5%; 
            font-family: Verdana, Tahoma, 'DejaVu Sans', sans-serif;
            } 
            .outputm70{
            color: black;
            position: absolute;
            top: 66.3%;
            left:36.7%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm80{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 67%;
            left: 39%; 
            }
            .cboxm2{
            font-size: 25px; 
            color: rgb(248, 82, 159);
            position: absolute;
            top: 64%;
            left: 69%; 
            font-family: Verdana, Tahoma, 'DejaVu Sans', sans-serif;
            } 
            .outputm71{
            color: black;
            position: absolute;
            top: 66.3%;
            left:70%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm81{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 67%;
            left: 72%; 
            }
            .labelm82{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 69%;
            left: 7%; 
            }
            .labellinem14{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 67.8%;
            left: 72%;
            text-transform: normal;
            }
            .outputm72{
            color: black;
            position: absolute;
            top: 67.8%;
            left:73%; 
            font-size: 12px;
            text-transform: normal;
            }
             .labelm83{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 69%;
            left: 78%; 
            }
            .labellinem15{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 67.8%;
            left: 82%;
            text-transform: normal;
            }
            .outputm73{
            color: black;
            position: absolute;
            top: 67.8%;
            left:82.5%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labellinem16{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 67.8%;
            left: 93%;
            text-transform: normal;
            }
            .outputm74{
            color: black;
            position: absolute;
            top: 67.8%;
            left:94%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labellinem17{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 69.5%;
            left: 13%;
            text-transform: normal;
            }
            .labelm84{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 71.5%;
            left: 20%; 
            }
            .labellinem18{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 69.5%;
            left: 60%;
            text-transform: normal;
            }
            .labelm85{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 71.5%;
            left: 68%; 
            }
            .labelm86{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 73%;
            left: 0.5%; 
            }
            .labelm87{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 74%;
            left: 10%; 
            }
            .labelm88{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 75%;
            left: 6%; 
            }
            .labelm89{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 76%;
            left: 10%; 
            }
            .cboxm3{
            font-size: 25px; 
            color: rgb(248, 82, 159);
            position: absolute;
            top: 74%;
            left: 0.5%; 
            font-family: Verdana, Tahoma, 'DejaVu Sans', sans-serif;
            } 
            .outputm75{
            color: black;
            position: absolute;
            top: 76.5%;
            left:1.5%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm90{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 77.5%;
            left: 5%; 
            }
            .labellinem19{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 76.3%;
            left: 19.5%;
            text-transform: normal;
            }
            .outputm76{
            color: black;
            position: absolute;
            top: 76.3%;
            left:21%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm91{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 77.5%;
            left: 30%; 
            }
            .labellinem20{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 76.3%;
            left: 36%;
            text-transform: normal;
            }
            .outputm77{
            color: black;
            position: absolute;
            top: 76.3%;
            left:37%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm92{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 77.5%;
            left: 56%; 
            }
            .labellinem21{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 76.3%;
            left:58%;
            text-transform: normal;
            }
            .outputm78{
            color: black;
            position: absolute;
            top: 76.3%;
            left:59%; 
            font-size: 12px;
            text-transform: normal;
            }
            .cboxm4{
            font-size: 25px; 
            color: rgb(248, 82, 159);
            position: absolute;
            top: 76%;
            left: 0.5%; 
            font-family: Verdana, Tahoma, 'DejaVu Sans', sans-serif;
            } 
            .outputm79{
            color: black;
            position: absolute;
            top: 78.5%;
            left:1.5%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm93{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 79.5%;
            left: 5%; 
            }
            .labellinem22{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 78.3%;
            left:55%;
            text-transform: normal;
            }
            .outputm80{
            color: black;
            position: absolute;
            top: 78.3%;
            left:56%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm94{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 79.5%;
            left: 65.5%; 
            }
            .cboxm5{
            font-size: 25px; 
            color: rgb(248, 82, 159);
            position: absolute;
            top: 78%;
            left: 0.5%; 
            font-family: Verdana, Tahoma, 'DejaVu Sans', sans-serif;
            } 
            .outputm81{
            color: black;
            position: absolute;
            top: 80.5%;
            left:1.5%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm95{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 81.5%;
            left: 5%; 
            }
            .labellinem23{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 82%;
            left:1%;
            text-transform: normal;
            }
            .outputm82{
            color: black;
            position: absolute;
            top: 82%;
            left:10%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm96{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 84%;
            left: 3%; 
            }
            .labellinem24{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 82%;
            left:40%;
            text-transform: normal;
            }
            .outputm83{
            color: black;
            position: absolute;
            top: 82%;
            left:43%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm97{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 84%;
            left: 45%; 
            }
            .labellinem25{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 82%;
            left:65%;
            text-transform: normal;
            }
            .outputm84{
            color: black;
            position: absolute;
            top: 82%;
            left:72%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm98{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 84%;
            left: 66%; 
            }
            .labelm99{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 85.5%;
            left: 0.5%; 
            }
            .labellinem26{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 86.5%;
            left:1%;
            text-transform: normal;
            }
            .outputm85{
            color: black;
            position: absolute;
            top: 86.5%;
            left:4%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labellinem27{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 86.5%;
            left:26%;
            text-transform: normal;
            }
            .outputm86{
            color: black;
            position: absolute;
            top: 86.5%;
            left:29%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labellinem28{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 86.5%;
            left:51%;
            text-transform: normal;
            }
            .outputm87{
            color: black;
            position: absolute;
            top: 86.5%;
            left:54%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labellinem29{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 86.5%;
            left:76%;
            text-transform: normal;
            }
            .outputm88{
            color: black;
            position: absolute;
            top: 86.5%;
            left:79%; 
            font-size: 12px;
            text-transform: normal;
            }
            .horizontal_linem18{
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 89%;
            left:0%;
            }
            .labelm100{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 89.5%;
            left: 0.5%; 
            }
            .labelm101{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 90.5%;
            left: 0.5%; 
            }
            .labellinem30{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 89.3%;
            left:7%;
            text-transform: normal;
            }
            .labelm102{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 91.7%;
            left: 0.5%; 
            }
            .labellinem31{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 90.5%;
            left:10%;
            text-transform: normal;
            }
            .outputm89{
            color: black;
            position: absolute;
            top: 90.5%;
            left:11%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm103{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 92.7%;
            left: 0.5%; 
            }
            .labellinem32{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 91.5%;
            left:11%;
            text-transform: normal;
            }
            .outputm90{
            color: black;
            position: absolute;
            top: 91.5%;
            left:12%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm104{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 93.8%;
            left: 0.5%; 
            }
            .labellinem33{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 92.7%;
            left:4%;
            text-transform: normal;
            }
            .outputm91{
            color: black;
            position: absolute;
            top: 92.7%;
            left:5%; 
            font-size: 12px;
            text-transform: normal;
            }
            .vertical_linem8 {
            width: 1px; 
            height: 74px; 
            background-color: rgb(248, 82, 159);
            position: absolute; 
            left:52%;
            top: 89%;
            }
            .labelm105{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 89.5%;
            left: 53%; 
            }
            .labelm106{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 90.5%;
            left: 52.5%; 
            }
            .labellinem34{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 89.3%;
            left:59%;
            text-transform: normal;
            }
            .labelm107{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 91.5%;
            left: 52.5%; 
            }
            .labellinem35{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 90.5%;
            left:62%;
            text-transform: normal;
            }
            .outputm92{
            color: black;
            position: absolute;
            top: 90.5%;
            left:63%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm108{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 92.5%;
            left: 52.5%; 
            }
            .labellinem36{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 91.5%;
            left:63%;
            text-transform: normal;
            }
            .outputm93{
            color: black;
            position: absolute;
            top: 91.5%;
            left:64%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm109{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 93.6%;
            left: 52.5%; 
            }
            .labellinem37{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 92.5%;
            left:55.5%;
            text-transform: normal;
            }
            .outputm94{
            color: black;
            position: absolute;
            top: 92.5%;
            left:56%; 
            font-size: 12px;
            text-transform: normal;
            }
            .horizontal_linem19{
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 95%;
            left:0%;
            }
            .labelm110{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 95.5%;
            left: 0.5%; 
            }
            <--PAGE 2-->
            .labelm2a{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 0.5%;
            left: 0.5%; 
            }
            .labellinem38{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 1%;
            left:1%;
            text-transform: normal;
            }
            .outputm2a{
            color: black;
            position: absolute;
            top: 1%;
            left:4%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labellinem39{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 1%;
            left:25%;
            text-transform: normal;
            }
            .outputm2b{
            color: black;
            position: absolute;
            top: 1%;
            left:27%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labellinem40{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 1%;
            left:49%;
            text-transform: normal;
            }
            .outputm2c{
            color: black;
            position: absolute;
            top: 1%;
            left:51%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labellinem41{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 1%;
            left:74%;
            text-transform: normal;
            }
            .outputm2d{
            color: black;
            position: absolute;
            top: 1%;
            left:76%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labellinem42{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 3.5%;
            left:0.5%;
            text-transform: normal;
            }
            .outputm2e{
            color: black;
            position: absolute;
            top: 3.5%;
            left:4%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labellinem43{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 3.5%;
            left:25%;
            text-transform: normal;
            }
            .outputm2f{
            color: black;
            position: absolute;
            top: 3.5%;
            left:27%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labellinem44{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 3.5%;
            left:50%;
            text-transform: normal;
            }
            .outputm2g{
            color: black;
            position: absolute;
            top: 3.5%;
            left:51%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labellinem45{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 3.5%;
            left:74%;
            text-transform: normal;
            }
            .outputm2h{
            color: black;
            position: absolute;
            top: 3.5%;
            left:76%; 
            font-size: 12px;
            text-transform: normal;
            }
            .horizontal_linem20{
            width: 99.5%; 
            height: 0.1%; 
            background-color: rgb(248, 82, 159);
            position: absolute;
            top: 6.5%;
            left:0%;
            }
            .labelm2b{
            font-size: 13px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 7%;
            left: 33%; 
            }
            .labelm2c{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 9%;
            left: 5%; 
            }
            .labellinem46{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 8%;
            left:6%;
            text-transform: normal;
            }
            .outputm2j{
            color: black;
            position: absolute;
            top: 8%;
            left:7%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm2d{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 9%;
            left: 33%; 
            }
            .labellinem47{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 8%;
            left:57%;
            text-transform: normal;
            }
            .outputm2k{
            color: black;
            position: absolute;
            top: 8%;
            left:58%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm2e{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 9%;
            left: 85%; 
            }
            .labellinem48{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 9.5%;
            left:2%;
            text-transform: normal;
            }
            .outputm2l{
            color: black;
            position: absolute;
            top: 9.5%;
            left:3%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm2f{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 10.5%;
            left: 40%; 
            }
            .labelm2g{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 12%;
            left: 2%; 
            }
            .labellinem49{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 10.9%;
            left:34.5%;
            text-transform: normal;
            }
            .outputm2m{
            color: black;
            position: absolute;
            top: 10.9%;
            left:35%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm2h{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 12%;
            left: 60%; 
            }
            .labellinem50{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 10.9%;
            left:63%;
            text-transform: normal;
            }
            .outputm2n{
            color: black;
            position: absolute;
            top: 10.9%;
            left:64%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm2i{
            font-size: 11px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 13.5%;
            left: 2%; 
            }
             .cboxm6{
            font-size: 25px; 
            color: rgb(248, 82, 159);
            position: absolute;
            top: 10%;
            left: 4%; 
            font-family: Verdana, Tahoma, 'DejaVu Sans', sans-serif;
            } 
            .outputm2o{
            color: black;
            position: absolute;
            top: 12.3%;
            left:5%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm2j{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 13%;
            left: 8%; 
            }
            .cboxm7{
            font-size: 25px; 
            color: rgb(248, 82, 159);
            position: absolute;
            top: 12%;
            left: 4%; 
            font-family: Verdana, Tahoma, 'DejaVu Sans', sans-serif;
            } 
            .outputm2p{
            color: black;
            position: absolute;
            top: 14.3%;
            left:5%; 
            font-size: 12px;
            text-transform: normal;
            } 
            .labelm2k{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 15.5%;
            left: 8%; 
            }
            .cboxm8{
            font-size: 25px; 
            color: rgb(248, 82, 159);
            position: absolute;
            top: 14%;
            left: 4%; 
            font-family: Verdana, Tahoma, 'DejaVu Sans', sans-serif;
            } 
            .outputm2q{
            color: black;
            position: absolute;
            top: 16.4%;
            left:5%; 
            font-size: 12px;
            text-transform: normal;
            } 
            .labelm2l{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 17%;
            left: 8%; 
            }
            .labellinem51{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 15.9%;
            left:27.5%;
            text-transform: normal;
            }
            .outputm2r{
            color: black;
            position: absolute;
            top: 15.9%;
            left:28%; 
            font-size: 12px;
            text-transform: normal;
            }
            .labelm2m{
            font-size: 10px;
            text-transform: normal;
            color:  black;
            position: absolute;
            top: 17%;
            left: 53%; 
            }
            .labellinem52{
            color: rgb(248, 82, 159);
            position: absolute;
            top: 15.9%;
            left:56%;
            text-transform: normal;
            }
            .outputm2s{
            color: black;
            position: absolute;
            top: 15.9%;
            left:57%; 
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
                    <div class='header_center_bellow'>CERTIFICATE OF MARRIAGE</div>
                    <div class='horizontal_linem1'></div> 
                    <div class='labelm1'>Province</div>
                        <p class='labellinem1'>___________________________________________________________</p>   
                        <p class='outputm1'>Mendez</p>
                    <div class='labelm2'>City/Municipality</div>
                        <p class='labellinem2'>_____________________________________________________</p>    
                        <p class='outputm2'>Cavite</p>
                    <div class='vertical_linem1'></div>
                    <div class='labelm3'>Registry No.</div>
                        <p class='outputm3'>2003-1</p></div>
                    <div class='horizontal_linem2'></div> 
                    <div class='vertical_linem2'></div>
                    <div class='vertical_linem3'></div>
                    <div class='labelm4'>HUSBAND</div>
                    <div class='labelm5'>WIFE</div>
                    <div class='horizontal_linem3'></div> 
                    <div class='labelm6'>1.Name of<br>Contracting<br>Parties</div>
                    <div class='labelm7'>(First)</div></p>
                        <p class='labellinem3'>_________________________________________</p> 
                        <p class='outputm4'>RHINA JOY</p>
                    <div class='labelm8'>(Middle)</div></p>
                        <p class='labellinem4'>_______________________________________</p> 
                        <p class='outputm5'>RHINA JOY</p>   
                    <div class='labelm9'>(Last)</div></p>  
                        <p class='labellinem5'>_________________________________________</p> 
                        <p class='outputm6'>RHINA JOY</p>   
                    <div class='labelm10'>(First)</div></p>
                        <p class='labellinem6'>_______________________________________</p> 
                        <p class='outputm7'>RHINA JOY</p>   
                     <div class='labelm11'>(Middle)</div></p>
                        <p class='labellinem7'>_____________________________________</p> 
                        <p class='outputm8'>RHINA JOY</p>   
                    <div class='labelm12'>(First)</div></p>
                        <p class='labellinem8'>_______________________________________</p> 
                        <p class='outputm9'>RHINA JOY</p>   
                    <div class='horizontal_linem4'></div> 
                    <div class='labelm13'>2a.Date of Birth<br>2b.Age</div></p>
                    <div class='labelm14'>(Day)</div></p>
                        <p class='outputm10'>31</p>  
                    <div class='labelm15'>(Month)</div></p>
                        <p class='outputm11'>December</p>  
                    <div class='labelm16'>(Year)</div></p>
                        <p class='outputm12'>2002</p>  
                      <div class='vertical_linem4'></div>
                    <div class='labelm17'>(Age)</div></p>
                        <p class='outputm13'>21</p> 
                    <div class='horizontal_linem5'></div> 
                    <div class='labelm18'>(Day)</div></p>
                        <p class='outputm14'>31</p>  
                    <div class='labelm19'>(Month)</div></p>
                        <p class='outputm15'>December</p>  
                    <div class='labelm20'>(Year)</div></p>
                        <p class='outputm16'>2002</p>   
                    <div class='vertical_linem5'></div>
                    <div class='labelm21'>(Age)</div></p>
                        <p class='outputm17'>21</p> 
                    <div class='labelm22'>3.Place of Birth</div></p>
                    <div class='labelm23'>(City/Municipality)</div></p>
                        <p class='outputm18'>MENDEZ,NUNEZ</p> 
                    <div class='labelm24'>(Province)</div></p>
                        <p class='outputm19'>BATANGAS</p> 
                     <div class='labelm25'>(Country)</div></p>
                        <p class='outputm20'>PHILIPPINES</p> 
                    <div class='labelm26'>(City/Municipality)</div></p>
                        <p class='outputm21'>MENDEZ,NUNEZ</p> 
                    <div class='labelm27'>(Province)</div></p>
                        <p class='outputm22'>BATANGAS</p> 
                    <div class='labelm28'>(Country)</div></p>
                        <p class='outputm23'>PHILIPPINES</p> 
                    <div class='horizontal_linem6'></div> 
                    <div class='labelm29'>4a.Sex<br>4b.Citizenship</div></p>
                        <p class='outputm24'>MALE</p> 
                    <div class='vertical_linem6'></div>
                     <div class='labelm30'>(Citizenship)</div></p>
                        <p class='outputm25'>FILIPINO</p> 
                        <p class='outputm26'>FEMALE</p> 
                    <div class='vertical_linem7'></div>
                    <div class='labelm31'>(Citizenship)</div></p>
                      <p class='outputm27'>FILIPINO</p> 
                    <div class='horizontal_linem7'></div> 
                    <div class='labelm32'>5.Residence</div></p>
                    <div class='labelm33'>(House No.,St., Barangay, City/Municipality,Province,Country)</div></p>
                      <p class='outputm28'>095 D BONIFACIO ST.MENDEZ,CAVITE</p> 
                    <div class='labelm34'>(House No.,St., Barangay, City/Municipality,Province,Country)</div></p>
                      <p class='outputm29'>095 D BONIFACIO ST.MENDEZ,CAVITE</p> 
                    <div class='horizontal_linem8'></div> 
                    <div class='labelm35'>6.Religion/<br>Religious Sect</div></p> 
                      <p class='outputm30'>CATHOLIC</p> 
                      <p class='outputm31'>CATHOLIC</p> 
                    <div class='horizontal_linem9'></div> 
                    <div class='labelm36'>7.Civil Status</div></p> 
                      <p class='outputm32'>CATHOLIC</p> 
                      <p class='outputm33'>CATHOLIC</p> 
                    <div class='horizontal_linem10'></div>
                    <div class='labelm37'>8.Name of <br>Father</div></p> 
                    <div class='labelm38'>(First)</div></p> 
                      <p class='outputm34'>RHINA JOY</p> 
                    <div class='labelm39'>(Middle)</div></p> 
                      <p class='outputm35'>RHINA JOY</p> 
                    <div class='labelm40'>(Last)</div></p> 
                      <p class='outputm36'>RHINA JOY</p> 
                    <div class='labelm41'>(First)</div></p> 
                      <p class='outputm37'>RHINA JOY</p> 
                    <div class='labelm42'>(Middle)</div></p> 
                      <p class='outputm38'>RHINA JOY</p> 
                    <div class='labelm43'>(Last)</div></p> 
                      <p class='outputm39'>RHINA JOY</p> 
                    <div class='horizontal_linem11'></div>
                    <div class='labelm44'>9.Citizenship</div></p>
                        <p class='outputm40'>FILIPINO</p>  
                        <p class='outputm41'>FILIPINO</p>  
                    <div class='horizontal_linem12'></div>
                    <div class='labelm45'>10.Maiden <br> Name of Mother</div></p>
                    <div class='labelm46'>(First)</div></p> 
                      <p class='outputm42'>RHINA JOY</p> 
                    <div class='labelm47'>(Middle)</div></p> 
                      <p class='outputm43'>RHINA JOY</p> 
                    <div class='labelm48'>(Last)</div></p> 
                      <p class='outputm44'>RHINA JOY</p> 
                    <div class='labelm49'>(First)</div></p> 
                      <p class='outputm45'>RHINA JOY</p> 
                    <div class='labelm50'>(Middle)</div></p> 
                      <p class='outputm46'>RHINA JOY</p> 
                    <div class='labelm51'>(Last)</div></p> 
                      <p class='outputm47'>RHINA JOY</p> 
                    <div class='horizontal_linem13'></div>
                    <div class='labelm52'>11.Citizenship</div></p>
                        <p class='outputm48'>FILIPNO</p> 
                        <p class='outputm49'>FILIPNO</p> 
                    <div class='horizontal_linem14'></div>
                    <div class='labelm53'>12.Name of <br>Person/<br>Wali Who Gave<br>Consent of<br>Advice</div></p>
                    <div class='labelm54'>(First)</div></p>
                        <p class='outputm50'>RHINA JOY</p> 
                    <div class='labelm55'>(Middle)</div></p>
                        <p class='outputm51'>RHINA JOY</p> 
                    <div class='labelm56'>(Last)</div></p>
                        <p class='outputm52'>RHINA JOY</p> 
                    <div class='labelm57'>(First)</div></p>
                        <p class='outputm53'>RHINA JOY</p> 
                    <div class='labelm58'>(Middle)</div></p>
                        <p class='outputm55'>RHINA JOY</p> 
                    <div class='labelm59'>(Last)</div></p>
                        <p class='outputm56'>RHINA JOY</p> 
                    <div class='horizontal_linem15'></div>
                    <div class='labelm60'>13.Relationship</div></p>
                        <p class='outputm57'>NOT APPLICABLE</p> 
                        <p class='outputm58'>NOT APPLICABLE</p> 
                    <div class='horizontal_linem16'></div>
                    <div class='labelm61'>14.Residence</div></p>
                    <div class='labelm62'>(House No.,St., Barangay,City/Municipality,Province Country)</div></p>
                        <p class='outputm59'>095 D BONIFAIO ST.MENDEZ,CAVITE</p> 
                    <div class='labelm63'>(House No.,St., Barangay,City/Municipality,Province Country)</div></p>
                        <p class='outputm60'>095 D BONIFAIO ST.MENDEZ,CAVITE</p> 
                    <div class='horizontal_linem17'></div>
                    <div class='labelm64'>15.Place of Marriage:</div></p>
                       <p class='labellinem9'>___________________________________________________________________________________________</p>
                       <p class='outputm61'>SAINT AUGUSTINE CHURCH</p> 
                       <p class='outputm62'>MENDEZ-NUNEZ</p> 
                       <p class='outputm63'>CAVITE</p> 
                    <div class='labelm65'>(Office of the/House of/Barangay of/Church of/Mosque of)</div></p>  
                    <div class='labelm66'>(City/Municipality)</div></p>  
                    <div class='labelm67'>(Province)</div></p>  
                    <div class='labelm68'>16.Date of Marriage:</div></p> 
                       <p class='labellinem10'>_____________________________________________</p> 
                       <p class='outputm64'>31</p> 
                       <p class='outputm65'>DECEMBER</p> 
                       <p class='outputm66'>2025</p> 
                    <div class='labelm69'>(Day)</div></p>
                    <div class='labelm70'>(Month)</div></p>
                    <div class='labelm71'>(Year)</div></p>
                    <div class='labelm72'>17.Time of Marriage:</div></p> 
                        <p class='labellinem11'>_______________________</p> 
                        <p class='outputm67'>8:30</p> 
                    <div class='labelm73'>am/pm</div></p> 
                    <div class='labelm74'>18.CERTIFICATION OF THE CONTRACTING PARTIES:</div></p>
                    <div class='labelm75'>THIS IS TO CERTIFY: That I,</div></p>  
                        <p class='labellinem12'>____________________________________</p> 
                        <p class='outputm68'>RHINA JOY</p> 
                    <div class='labelm76'>and I,</div></p>  
                        <p class='labellinem13'>__________________________________,</p> 
                        <p class='outputm69'>RHINA JOY</p> 
                    <div class='labelm77'>both of</div></p>  
                    <div class='labelm78'>legal age of our own free will and accord, and in the presence of the person soleminizing this marriage and of the witnesses named below, tak e each other</div></p> 
                    <div class='labelm79'>as husband and wife and certifying further that we:</div></p>  
                        <p class='cboxm1'><b>&#9633;</b></p>
                        <p class='outputm70'>X</p> 
                    <div class='labelm80'> have entered, a copy of which is hereto attached/</div></p>  
                        <p class='cboxm2'><b>&#9633;</b></p>
                        <p class='outputm71'>X</p> 
                    <div class='labelm81'> have not entered into a marriage settelement</div></p>  
                    <div class='labelm82'>IN WITNESS WHEREOF, we have signed/marked with our fingerprint this certificate in quadruplicate this</div></p>
                        <p class='labellinem14'>______</p> 
                        <p class='outputm72'>31</p>
                    <div class='labelm83'>day of</div></p>  
                        <p class='labellinem15'>____________</p> 
                        <p class='outputm73'>DECEMBER</p>
                        <p class='labellinem16'>,______</p> 
                        <p class='outputm74'>2025</p>
                        <p class='labellinem17'>______________________________</p> 
                    <div class='labelm84'>(Signature of Husband)</div></p>  
                        <p class='labellinem18'>______________________________</p> 
                    <div class='labelm85'>(Signature of Wife)</div></p>  
                    <div class='labelm86'>19.CERTIFICATION OF THE SOLEMINIZING OFFICER</div></p>  
                    <div class='labelm87'>THIS IS TO CERTIFY: THAT BEFORE ME, on the date and place above-written, personally appeared the above-mentioned parties, with</div></p>  
                    <div class='labelm88'>their mutual consent, lawfuly joined together in marriage which was solemnized by me in the presence of the witnesses named below, all of legal age</div></p>  
                    <div class='labelm89'>I CERTIFY FURTHER THAT:</div></p> 
                        <p class='cboxm3'><b>&#9633;</b></p>
                        <p class='outputm75'>X</p>
                    <div class='labelm90'>a.Marriage License No.<br>in favor of said parties, was exhibited to me.</div></p> 
                        <p class='labellinem19'>___________</p> 
                        <p class='outputm76'>1234567</p>
                    <div class='labelm91'>issued on</div></p> 
                        <p class='labellinem20'>_____________________,</p> 
                        <p class='outputm77'>DECEMBER 21, 2025</p>
                    <div class='labelm92'>at</div></p> 
                        <p class='labellinem21'>__________________</p> 
                        <p class='outputm78'>MENDEZ,CAVITE</p>
                        <p class='cboxm4'><b>&#9633;</b></p>
                        <p class='outputm79'>X</p>
                    <div class='labelm93'>b. no marriage license was necessary, the marriage being solemnized under Art.</div></p> 
                        <p class='labellinem22'>___________</p> 
                        <p class='outputm80'>1234567</p>
                    <div class='labelm94'>of Executive Order No. 209.</div></p> 
                        <p class='cboxm5'><b>&#9633;</b></p>
                        <p class='outputm81'>X</p>
                    <div class='labelm95'>c. the marriage was solemnized in accordance with the provisions of Presidential Decree np. 1083</div></p> 
                        <p class='labellinem23'>_________________________________________</p> 
                        <p class='outputm82'>RHINA JOY SALINAS</p>
                    <div class='labelm96'>(Signature Over Printed Name of Solemnizing Officer)</div></p> 
                        <p class='labellinem24'>__________________________</p> 
                        <p class='outputm83'>RHINA JOY SALINAS</p>
                    <div class='labelm97'>(Positio/Designation)</div></p> 
                        <p class='labellinem25'>_____________________________________</p> 
                        <p class='outputm84'>RHINA JOY SALINAS</p>
                    <div class='labelm98'>(Religion/Religious Sect, Registry No. and Expiration <br>Date, if applicable)</div></p> 
                    <div class='labelm99'>20a.WITNESSES(Print Name and Sign):<br>Additional at the back</div></p> 
                        <p class='labellinem26'>__________________________</p>   
                        <p class='outputm85'>RHINA JOY SALINAS</p>
                        <p class='labellinem27'>__________________________</p>   
                        <p class='outputm86'>RHINA JOY SALINAS</p>
                        <p class='labellinem28'>__________________________</p>   
                        <p class='outputm87'>RHINA JOY SALINAS</p>
                        <p class='labellinem29'>_________________________</p>   
                        <p class='outputm88'>RHINA JOY SALINAS</p>
                    <div class='horizontal_linem18'></div>
                    <div class='labelm100'>21.RECEIVED BY</div></p> 
                    <div class='labelm101'>Signature</div></p> 
                        <p class='labellinem30'>____________________________________________</p>   
                    <div class='labelm102'>Name in Print</div></p> 
                        <p class='labellinem31'>_________________________________________</p>   
                        <p class='outputm89'>RHINA JOY SALINAS</p>
                    <div class='labelm103'>TItle or Position</div></p> 
                        <p class='labellinem32'>________________________________________</p>   
                        <p class='outputm90'>RHINA JOY SALINAS</p>
                    <div class='labelm104'>Date</div></p> 
                        <p class='labellinem33'>________________________________________________</p>   
                        <p class='outputm91'>RHINA JOY SALINAS</p>
                    <div class='vertical_linem8'></div>
                    <div class='labelm105'>22.REGISTERED AT THE OFFICE OF THE CIVIL REGISTRAR</div></p> 
                    <div class='labelm106'>Signature</div></p> 
                        <p class='labellinem34'>__________________________________________</p>   
                    <div class='labelm107'>Name in Print</div></p> 
                        <p class='labellinem35'>_______________________________________</p>   
                        <p class='outputm92'>RHINA JOY SALINAS</p>
                    <div class='labelm108'>TItle or Position</div></p> 
                        <p class='labellinem36'>______________________________________</p>   
                        <p class='outputm93'>RHINA JOY SALINAS</p>
                    <div class='labelm109'>Date</div></p> 
                        <p class='labellinem37'>________________________________________________</p>   
                        <p class='outputm94'>RHINA JOY SALINAS</p>   
                    <div class='horizontal_linem19'></div>  
                    <div class='labelm110'>REMARKS/ANNOTATION(For LCRO/OCRG/Shari'a Circuit Registrar Use Only)</div></p> 
            <div class='page-break'></div>
            <div class='page'>
                <div class='content'>
                    <div class='container'>
                    <div class='labelm2a'>20b.WITNESSES(Print and Sign):</div>
                        <p class='labellinem38'>_________________________</p>   
                        <p class='outputm2a'>RHINA JOY SALINAS</p>  
                        <p class='labellinem39'>_________________________</p>   
                        <p class='outputm2b'>RHINA JOY SALINAS</p>  
                        <p class='labellinem40'>_________________________</p>   
                        <p class='outputm2c'>RHINA JOY SALINAS</p>  
                        <p class='labellinem41'>_________________________</p>   
                        <p class='outputm2d'>RHINA JOY SALINAS</p>  
                        <p class='labellinem42'>_________________________</p>   
                        <p class='outputm2e'>RHINA JOY SALINAS</p> 
                        <p class='labellinem43'>_________________________</p>   
                        <p class='outputm2f'>RHINA JOY SALINAS</p> 
                        <p class='labellinem44'>_________________________</p>   
                        <p class='outputm2g'>RHINA JOY SALINAS</p> 
                        <p class='labellinem45'>_________________________</p>   
                        <p class='outputm2h'>RHINA JOY SALINAS</p> 
                    <div class='horizontal_linem20'></div>  
                    <div class='labelm2b'>AFFIDAVIT OF SOLEMNIZING OFFICER</div>
                    <div class='labelm2c'>I,</div>
                        <p class='labellinem46'>_____________________________</p>   
                        <p class='outputm2j'>RHINA JOY SALINAS</p> 
                    <div class='labelm2d'>,of legal age, Solemnizng Officer of</div>
                        <p class='labellinem47'>______________________________</p>   
                        <p class='outputm2k'>MUNICIPAL CIVIL REGISTRAR</p> 
                    <div class='labelm2e'>with addres at</div>
                        <p class='labellinem48'>________________________________________</p>   
                        <p class='outputm2l'>MUNICIPAL CIVIL REGISTRAR</p> 
                    <div class='labelm2f'>.after having to in accordance with law, do hereby depose and say:</div>
                    <div class='labelm2g'>1.That I have solemnized the marriage between</div>
                        <p class='labellinem49'>___________________________</p>   
                        <p class='outputm2m'>RHINA JOY SALINAS</p> 
                    <div class='labelm2h'>and</div>
                        <p class='labellinem50'>___________________________;</p>   
                        <p class='outputm2n'>RHINA JOY SALINAS</p> 
                    <div class='labelm2i'>2.</div>
                        <p class='cboxm6'><b>&#9633;</b></p>
                        <p class='outputm2o'>X</p> 
                    <div class='labelm2j'>a.That I have ascertained the qualifications of the contracting parties and have found no geal impediment for them to<br>marry as required by Article 34 of the Family Code;</div>
                        <p class='cboxm7'><b>&#9633;</b></p>
                        <p class='outputm2p'>X</p> 
                    <div class='labelm2k'>b.That this marriage was performed in articulo mortis or at the point of death;</div>
                        <p class='cboxm8'><b>&#9633;</b></p>
                        <p class='outputm2q'>X</p> 
                    <div class='labelm2l'>c.That the contracting party/ies</div>
                        <p class='labellinem51'>___________________________</p>   
                        <p class='outputm2r'>RHINA JOY SALINAS</p> 
                    <div class='labelm2m'>and</div>
                        <p class='labellinem52'>___________________________</p>   
                        <p class='outputm2s'>RHINA JOY SALINAS</p> 
                    
                    
                    
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