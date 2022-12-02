<?php

    $name = array("Teera","Weera","Meera","peera");

    echo "<h2>Indexed arrays</h2>";
    echo "จำนวนข้อมูล".count($name)."ชุด <br>";
    echo "ข้อมูล Index 2 = ".$name[2];

    echo "<hr color='green'>";
    echo "<p>การไช้ for ดึงข้อมูล</p>";
    for($num = 0;$num < count($name);$num++){
        echo 'ข้อมูล = '.$name[$num]."<br>";
    }

    echo "<hr color='red'>";
    echo "<p>การไช้ foreach ดึงข้อมูล</p>";
    foreach($name as $nm){
        echo $nm."<br>";
    }

    echo "<hr color='red'>";
    echo "<hr color='white'>";
    echo "<hr color='blue'>";
    echo "<hr color='white'>";
    echo "<hr color='red'>";




    $students = array(
        "Teera" => "3.33", //key value
        "Weera" => "2.22",
        "Meera" => "1.11",
        "peera" => "0.00"
    );

    echo "<h2>Associative array</h2>";
    echo "จำนวนข้อมูล".count($students)."ชุด <br>";
    echo "ข้อมูล Key[Teera] = ".$students['Teera']."<br>";

    echo "<hr color='red'>";

    foreach($students as $kstd => $vstd){
        echo "Key($vstd) : ".$vstd."<br>";
    }


    echo "<hr color='red'>";
    echo "<hr color='white'>";
    echo "<hr color='blue'>";
    echo "<hr color='white'>";
    echo "<hr color='red'>";

    
    $subjects = array(
        array("Basic HTML","1-2-3","Teera Binkasem"),
        array("Basic Database","1-2-2","Samroh baka"),
        array("Basic Java","2-2-2","Faeelah Damae"),
        array("Basic Neteork","2-3-3","Imron Sulong"),
        array("Basic Javascript","0-4-2","Hawanee Doloh")
    );

    echo "<h2>Multidimensional Arrays</h2>";
    echo "จำนวนข้อมูล ".count($subjects)."ชุด <br>";
    echo $subjects[2][2];


    echo "<hr color='blue'>";
    echo "<p>การไช้ for ดึงข้อมูล</p>";
    for($r = 0;$r < count($subjects); $r++){
        for($c = 0;$c < 3; $c++){
            echo $subjects[$r][$c]."<br>";
        }
        echo"<hr>";
    }



?>