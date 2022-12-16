<?php

    echo date('l, d/m/Y'); // Friday, 16/12/2022 วันเดือนปี
    echo "<br>";
    echo date('H:i:s'); //03:48:50 เวลา
    echo "<br>";
    echo date('W'); //สับดาร์
    echo "<br>";
    echo date('D, d/F/Y'); //Fri, 16/December/2022
    echo "<br>";
    $ythai = date('Y') + 543;
    echo date('d F').$ythai; //ปีไทย
    //echo " ".$ythai;


?>