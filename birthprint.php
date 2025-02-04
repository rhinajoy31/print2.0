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
<html>
<head>
    <title>Birth Certificate</title>
    <style>
                            body {
                                font-family: Arial, sans-serif;
                                font-size: 12px;
                                background-image: url('forms/form102.jpg');
                                background-size: cover;
                                background-position: center;
                                background-attachment: fixed;
                                text-transform: uppercase;
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
                            .detailsProvince { position: absolute; left: 20%; top: 6.9%; line-height: 0px; overflow-wrap: normal; }
                            .detailsCity { position: absolute; left: 20%; top: 8.7%; line-height: 0px; overflow-wrap: normal; }
                            .detailsReg { position: absolute; left: 80%; top: 7.9%; line-height: 0px; overflow-wrap: normal; }

                            .detailsFname { position: absolute; left: 8%; top: 12%; line-height: 0px; overflow-wrap: normal; }      
                            .detailsSname {position: absolute; left: 41%; top: 12%; line-height: 0px; overflow-wrap: normal; }
                            .detailsLname { position: absolute; left: 67%; top: 12%; line-height: 0px; overflow-wrap: normal;  }

                            .detailsSex { position: absolute; left: 17%; top: 15%; line-height: 0px; overflow-wrap: normal; }
                            .detailsBday { position: absolute; left: 57%; top: 15%; line-height: 0px;; overflow-wrap: normal; }
                            .detailsBmonth {position: absolute; left: 70%; top: 15%; line-height: 0px; overflow-wrap: normal; }
                            .detailsByear { position: absolute; left: 85%; top: 15%; line-height: 0px; overflow-wrap: normal; }

                            .detailsBplace { position: absolute; left: 15%; top: 18%; line-height: 0px; overflow-wrap: normal; }
                            .detailsBcity {position: absolute; left: 50%; top: 18%; line-height: 0px; overflow-wrap: normal; }
                            .detailsBprovince { position: absolute; left: 74%; top: 18%; line-height: 0px; overflow-wrap: normal; }

                            .detailsTypeofBirth { position: absolute; left: 22%; top: 22%; line-height: 0px; overflow-wrap: normal; }
                            .detailsIfMultipleBirth { position: absolute; left: 39%; top: 22%; line-height: 0px; overflow-wrap: normal; }
                            .detailsOrder { position: absolute; left: 68%; top: 22%; line-height: 0px; overflow-wrap: normal; }
                            .detailsBweight { position: absolute; left: 88%; top: 22%; line-height: 0px; verflow-wrap: normal; }

                            .detailsMfname { position: absolute; left: 15%; top: 25%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMmnane { position: absolute; left: 45%; top: 25%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMlname { position: absolute; left: 72%; top: 25%; line-height: 0px; overflow-wrap: normal; }

                            .detailsMcitizenship { position: absolute; left: 8%; top: 28%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMreligion { position: absolute; left: 55%; top: 28%; line-height: 0px; overflow-wrap: normal; }

                            .detailsMtotalChildren { position: absolute; left: 13%; top: 32%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMchildrenLiving { position: absolute; left: 29%; top: 32%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMchildrenDead { position: absolute; left: 45%; top: 32%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMoccupation { position: absolute; left: 55%; top: 31.2%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMage { position: absolute; left: 90%; top: 32%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMresidence { position: absolute; left: 8%; top: 35%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMcity { position: absolute; left: 43%; top: 35%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMprovince { position: absolute; left: 64%; top: 35%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMcountry { position: absolute; left: 83%; top: 35%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMresidence { position: absolute; left: 8%; top: 35%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMcity { position: absolute; left: 43%; top: 35%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMprovince { position: absolute; left: 64%; top: 35%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMcountry { position: absolute; left: 83%; top: 35%; line-height: 0px; overflow-wrap: normal; }

                            .detailsFfname { position: absolute; left: 15%; top: 38.5%; line-height: 0px; overflow-wrap: normal; }
                            .detailsFsname { position: absolute; left: 45%; top: 38.5%; line-height: 0px; overflow-wrap: normal; }
                            .detailsFlname { position: absolute; left: 72%; top: 38.5%; line-height: 0px; overflow-wrap: normal; }

                            .detailsFcitizenship { position: absolute; left: 8%; top: 41.5%; line-height: 0px; overflow-wrap: normal; }
                            .detailsFreligion { position: absolute; left: 33%; top: 41.5%; line-height: 0px; overflow-wrap: normal; }
                            .detailsFoccupation { position: absolute; left: 60%; top: 41.5%; line-height: 0px;  overflow-wrap: normal; }
                            .detailsFage { position: absolute; left: 91%; top: 42.5%; line-height: 0px; overflow-wrap: normal; }

                            .detailsFresidence { position: absolute; left: 8%; top: 45%; line-height: 0px; overflow-wrap: normal; }
                            .detailsFcity { position: absolute; left: 43%; top: 45%; line-height: 0px; overflow-wrap: normal; inset: }
                            .detailsFprovince { position: absolute; left: 64%; top: 45%; line-height: 0px; overflow-wrap: normal; inset: }
                            .detailsFcountry { position: absolute; left: 83%; top: 45%; line-height: 0px; overflow-wrap: normal; inset: }

                            .detailsMarrieddate { position: absolute; left: 21%; top: 50%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMarriedcity { position: absolute; left: 42%; top: 50%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMarriedprovince { position: absolute; left: 70%; top: 50%; line-height: 0px; overflow-wrap: normal; }
                            .detailsMarriedcountry { position: absolute; left: 87%; top: 50%; line-height: 0px; overflow-wrap: normal; }

                            .output1 { position: absolute; left: 7%; top: 54%; line-height: 0px; overflow-wrap: normal; }
                            .output2 { position: absolute; left: 20%; top: 54%; line-height: 0px; overflow-wrap: normal; }
                            .output3 { position: absolute; left: 32%; top: 54%; line-height: 0px; overflow-wrap: normal; }
                            .output4 { position: absolute; left: 47%; top: 54%; line-height: 0px; overflow-wrap: normal; }
                            .output5 { position: absolute; left: 74%; top: 54%; line-height: 0px; overflow-wrap: normal; }
                            .detailsAspecify { position: absolute; left: 93%; top: 54%; line-height: 0px; overflow-wrap: normal; }

                            .detailsAtime { position: absolute; left: 62%; top: 57%; line-height: 0px; overflow-wrap: normal; }

                            .detailsAname{ position: absolute; left: 16%; top: 61.3%; line-height: 0px; overflow-wrap: normal; }
                            .detailsAposition{ position: absolute; left: 16%; top: 63%; line-height: 0px; overflow-wrap: normal; }
                            .detailsAaddress{ position: absolute; left: 61%; top: 58%; line-height: 20px; overflow-wrap: normal; }
                            .detailsAdate{ position: absolute; left: 61%; top: 63%; line-height: 0px; overflow-wrap: normal; }

                            .detailsIname { position: absolute; left: 16%; top: 70%; line-height: 0px; overflow-wrap: normal; }
                            .detailsIRelation { position: absolute; left: 21%; top: 71.9%; line-height: 0px; overflow-wrap: normal; }
                            .detailsIaddress { position: absolute; left: 13%; top: 73.8%; line-height: 0px; overflow-wrap: normal; }
                            .detailsIdate { position: absolute; left: 13%; top: 75.5%; line-height: 0px; overflow-wrap: normal; }

                            .detailsPname{ position: absolute; left: 65%; top: 70%; line-height: 0px; overflow-wrap: normal; }
                            .detailsPposition{ position: absolute; left: 65%; top: 71.9%; line-height: 0px;  overflow-wrap: normal; }
                            .detailsPdate{ position: absolute; left: 65%; top: 73.8%; line-height: 0px; overflow-wrap: normal; }

                            .detailsRname{ position: absolute; left: 16%; top: 80%; line-height: 0px; overflow-wrap: normal; }
                            .detailsRposition{ position: absolute; left: 16%; top: 81.9%; line-height: 0px; overflow-wrap: normal; }
                            .detailsRdate{ position: absolute; left: 16%; top: 83.8%; line-height: 0px; overflow-wrap: normal; }

                            .detailsCivname{ position: absolute; left: 65%; top: 80%; line-height: 0px; overflow-wrap: normal; }
                            .detailsCivposition{ position: absolute; left: 65%; top: 81.9%; line-height: 0px;  overflow-wrap: normal; }
                            .detailsCivdate{ position: absolute; left: 65%; top: 83.8%; line-height: 0px;  overflow-wrap: normal; }

                            .detailsBremarks{ position: absolute; left: 7%; top: 86%; line-height: 15px; text-align: justify; overflow-wrap: normal; }

                            .detailsAOAfname{ position: absolute; left: 13%; top: 50px; line-height: 0px; overflow-wrap: normal; }
                            .detailsAOAMname{ position: absolute; left: 53%; top: 3%; line-height: 0px; overflow-wrap: normal; }
                            .detailsAOACname{ position: absolute; left: 44%; top: 4.3%; line-height: 0px; overflow-wrap: normal; }
                            .detailsAOACborn{ position: absolute; left: 8%; top: 5.6%; line-height: 0px; overflow-wrap: normal; }
                            .detailsAOAaddress{ position: absolute; left: 36%; top: 5.6%; line-height: 0px; overflow-wrap: normal; }
                            .detailsAOAfsig{ position: absolute; left: 13%; top: 12.5%; line-height: 0px; overflow-wrap: normal; }
                            .detailsAOAMsig{ position: absolute; left: 53%; top: 12.5%; line-height: 0px; overflow-wrap: normal; }
                            .detailsSASday{ position: absolute; left: 47%; top: 17%; line-height: 0px; text-align: justify; overflow-wrap: normal; text-transform: lowercase; }
                            .detailsSASmonyear{ position: absolute; left: 57%; top: 17%; line-height: 0px; overflow-wrap: normal; }
                            .detailsSASFname{ position: absolute; left: 2%; top: 18.5%; line-height: 0px; overflow-wrap: normal; }
                            .detailsSASMname{ position: absolute; left: 30%; top: 18.5%; line-height: 0px; overflow-wrap: normal; }
                            .detailsSASvalidId{ position: absolute; left: 25%; top: 20%; line-height: 0px; overflow-wrap: normal; }
                            .detailsSASdate{ position: absolute; left: 62%; top: 20%; line-height: 0px; overflow-wrap: normal; }
                            .detailsSASaddress{ position: absolute; left: 2%; top: 21.5%; line-height: 0px; overflow-wrap: normal; }
                            .detailsSASAOposition{ position: absolute; left: 63%; top: 27%; line-height: 0px; overflow-wrap: normal; }
                            .detailsSASAOname{ position: absolute; left: 12%; top: 30%; line-height: 0px; overflow-wrap: normal; }
                            .detailsSASAOaddress{ position: absolute; left: 61%; top: 29.5%; line-height: 0px; overflow-wrap: normal; }
                            
    </style>
</head>
<body>
<div class='page'>
                    <div class='content'>
                        <div class='detailsProvince'>
                            <p>CAVITE</p>
                        </div>
                        <div class='detailsCity'>
                            <p>MENDEZ</p>
                        </div>
                        <div class='detailsReg'>
                            <p>2021-12</p>
                        </div>
                         <div class='detailsFname'>
                            <p>JOHN PATRICK</p>
                        </div>
                        <div class='detailsSname'>
                            <p>SANGALANG</p>
                        </div>
                        <div class='detailsLname'>
                            <p>MANALO</p>
                        </div>
                        <div class='detailsSex'>
                            <p>MALE</p>
                        </div>
                        <div class='detailsBday'>
                            <p>06</p>
                        </div>
                        <div class='detailsBmonth'>
                            <p>JUNE</p> 
                        </div>
                        <div class='detailsByear'>
                            <p>2003</p>
                        </div>
                        <div class='detailsBplace'>
                            <p>JAHNAH</p>
                        </div>
                        <div class='detailsBcity'>
                            <p>DASMA</p>
                        </div>
                        <div class='detailsBprovince'>
                            <p>CAVITE</p>
                        </div>
                        <div class='detailsTypeofBirth'>
                            <p>SINGLE</p>
                        </div>
                        <div class='detailsIfMultipleBirth'>
                            <p>FIRST</p>
                        </div>
                        <div class='detailsOrder'>
                            <p>FIRST</p>
                        </div>
                        <div class='detailsBweight'>
                            <p>2994</p>
                        </div>
                        
                        <div class='detailsMfname'>
                            <p>VERGINIA</p>
                        </div>
                        <div class='detailsMmnane'>
                            <p>SANGALANG</p>
                        </div>
                        <div class='detailsMlname'>
                            <p>MANALO</p>
                        </div>
                        <div class='detailsMcitizenship'>
                            <p>FILIPINO</p>
                        </div>
                        <div class='detailsMreligion'>
                            <p>ROMAN CCATHOLIC</p>
                        </div>
                        <div class='detailsMtotalChildren'>
                            <p>1</p>
                        </div>
                        <div class='detailsMchildrenLiving'>
                            <p>1</p>
                        </div>
                        <div class='detailsMchildrenDead'>
                            <p>0</p> 
                        </div>
                        <div class='detailsMoccupation'>
                            <p>service crew</p>
                        </div>
                        <div class='detailsMage'>
                            <p>27</p>
                        </div>
                        <div class='detailsMresidence'>
                            <p>STA.MARIA</p>
                        </div>
                        <div class='detailsMcity'>
                            <p>LAUREL</p>
                        </div>
                        <div class='detailsMprovince'>
                            <p>BATANGAS</p>
                        </div>
                        <div class='detailsMcountry'>
                            <p>PHILIPPINES</p>
                        </div>
                        <div class='detailsFfname'>
                            <p>FERNANDO</p>
                        </div>
                        <div class='detailsFsname'>
                            <p>GARCIA</p>
                        </div>
                        <div class='detailsFlname'>
                            <p>MANALO</p>
                        </div>
                        <div class='detailsFcitizenship'>
                            <p>FILIPINO</p>
                        </div>
                        <div class='detailsFreligion'>
                            <p>ROMAN CATHOLIC</p>
                        </div>
                        <div class='detailsFoccupation'>
                            <p>SECURITY GUARD</p>
                        </div>
                        <div class='detailsFage'>
                            <p>30</p>
                        </div>
                        <div class='detailsFresidence'>
                            <p>STA. MARIA</p>
                        </div>
                        <div class='detailsFcity'>
                            <p>LAUREL</p>
                        </div>
                        <div class='detailsFprovince'>
                            <p>BATANGAS</p>
                        </div>
                        <div class='detailsFcountry'>
                            <p>PHILIPPINES</p>
                        </div>
                        <div class='detailsMarrieddate'>
                            <p>may 26, 2019</p>
                        </div>
                        <div class='detailsMarriedcity'>
                            <p>LAUREL</p>
                        </div>
                        <div class='detailsMarriedprovince'>
                            <p>BATANGAS</p>
                        </div>
                        <div class='detailsMarriedcountry'>
                            <p>PHILIPPINES</p>
                        </div>
                        <div class='output1'>
                            <p>x</p>
                        </div>
                        <div class='output2'>
                            <p>x</p>
                        </div>
                        <div class='output3'>
                            <p>x</p>
                        </div>
                        <div class='output4'>
                            <p>x</p>
                        </div>
                        <div class='output5'>
                            <p>x</p>
                        </div>
                        <div class='detailsAspecify'>
                            <p>hilot</p>
                        </div>
                        <div class='detailsAtime'>
                            <p>5:00 AM</p>
                        </div>
                        <div class='detailsAname'>
                            <p>susasna p. atlas</p>
                        </div>
                        <div class='detailsAposition'>
                            <p>midwife</p>
                        </div>
                        <div class='detailsAaddress'>
                            <p>Alfonso, cavite</p>
                        </div>
                        <div class='detailsAdate'>
                            <p>june 10, 2003</p>
                        </div>
                        <div class='detailsIname'>
                            <p>fernando g. manalo</p>
                        </div>
                        <div class='detailsIRelation'>
                            <p>mother</p>
                        </div>
                        <div class='detailsIaddress'>
                            <p>sta. maria laurel batangas</p>
                        </div>
                        <div class='detailsIdate'>
                            <p>june 10, 2003</p>
                        </div>
                        <div class='detailsPname'>
                            <p>may o. panestante</p>
                        </div>
                        <div class='detailsPposition'>
                            <p>midwife</p>
                        </div>
                        <div class='detailsPdate'>
                            <p>june 10, 2003</p>
                        </div>
                        <div class='detailsRname'>
                            <p>marilou p. alegre</p>
                        </div>
                        <div class='detailsRposition'>
                            <p>asst.registration officer 1</p>
                        </div>
                        <div class='detailsRdate'>
                            <p>june 12, 2003</p>
                        </div>
                        <div class='detailsCivname'>
                            <p>christine l. book</p>
                        </div>
                        <div class='detailsCivposition'>
                            <p>municipal civil registrar-oic</p>
                        </div>
                        <div class='detailsCivdate'>
                            <p>june 12, 2003</p>
                        </div>
                        <div class='detailsBremarks'>
                            <p>late registration try ko lang para kase sa school to hahahahahahaha</p>
                        </div>  
                </div>
            </div>

            <div class='page-break'></div>

            <div class='page'>
                    <div class='content'>
                        <div class='detailsAOAfname'>
                            <p>fernando Garcia Manalo</p>
                        </div>
                        <div class='detailsAOAMname'>
                            <p>Virginia Sangalang Manalo</p>
                        </div>
                        <div class='detailsAOACname'>
                            <p>john patrick sangalang manalo</p>
                        </div>
                        <div class='detailsAOACborn'>
                            <p>june 15 ,2021</p>
                        </div>
                        <div class='detailsAOAaddress'>
                            <p>laurel, batangas</p>
                        </div>
                        <div class='detailsAOAfsig'>
                            <p>fernando Garcia Manalo</p>
                        </div>
                        <div class='detailsAOAMsig'>
                            <p>virginia sangalang manalo</p>
                        </div>
                        <div class='detailsSASday'>
                            <p>12th</p>
                        </div>
                        <div class='detailsSASmonyear'>
                            <p>june 2003</p> 
                        </div>
                        <div class='detailsSASFname'>
                            <p>fernando garcia manalo</p>
                        </div>
                        <div class='detailsSASMname'>
                            <p>virginia sangalang manalo</p>
                        </div>
                        <div class='detailsSASvalidId'>
                            <p>2021010834</p>
                        </div>
                        <div class='detailsSASdate'>
                            <p>6/10/2003</p>
                        </div>
                        <div class='detailsSASaddress'>
                            <p>laurel, batangas</p>
                        </div>
                        <div class='detailsSASAOposition'>
                            <p>notary public</p>
                        </div>
                        <div class='detailsSASAOname'>
                            <p>atty. juan dela cruz</p>
                        </div>
                        <div class='detailsSASAOaddress'>
                            <p>province of cavite</p>
                        </div>
                        <div class='detailsAODname'>
                            <p>province of cavite</p>
                        </div>
                        <div class='detailsAODaddress'>
                            <p>province of cavite</p>
                        </div>
                        <div class='detailsAODaddress'>
                            <p>province of cavite</p>
                        </div>
                        <div class='detailsAODaddress'>
                            <p>province of cavite</p>
                        </div>
                        <div class='detailsAODperson1'>
                            <p>x</p>
                        </div>
                        <div class='detailsAODperson2'>
                            <p>x</p>
                        </div>
                        <div class='detailsAODperson1address'>
                            <p>province of cavite</p>
                        </div>
                        <div class='detailsAODperson1date'>
                            <p>province of cavite</p>
                        </div>
                        <div class='detailsAODperson2name'>
                            <p>province of cavite</p>
                        </div>
                        <div class='detailsAODperson2address'>
                            <p>province of cavite</p>
                        </div>
                        <div class='detailsAODperson2date'>
                            <p>province of cavite</p>
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
