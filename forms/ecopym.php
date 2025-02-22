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
       </style>
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