<?php
    //if = เอาไว้ตรวจสอบ
    $score = 17;

    if($score % 2 == 0 ){
        echo "เลขคูj";
    }
    //ตรวจสอบแบบสองชั้น
    echo "<hr color='red'>";
    if($score % 2 == 0){
        echo "เลขคู่";
    }else{
        echo "เลขคี่";
    }
    //ตรวจสอบแบบ3ชั้น
    echo "<hr color='red'>";

    $led = "red";
    if($led == 'red'){
        echo "STOP!!!";
    }elseif($led == 'yellow'){
        echo "SLOWLY!!!";
    }else{
        echo "GOING!!!";
    }

?>