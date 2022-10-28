<?php

    $name = "Solahuding Keuji";
    //นับตัวอักษร
    echo strlen($name);
    echo "<br>";
    $word = "I Love U";
    //นับคำตัวอักษร
    echo str_word_count($word);
    echo "<br>";
    //ข้อความกลับด้าน
    echo strrev($name);
    echo "<br>";
    //หาตัวอักษรอยู่ที่คำที่เท่าไหร 
    echo strpos($word,"U");
    echo "<br>";
    //เปลี่ยนคำ
    echo str_replace("Love","Hate",$word);
    echo "<br>";
    //ทำไห้เป็นตัวเล็กทั้งหมด
    echo strtolower($name);
    echo "<br>";
    //ทำไห้เป็นตัวใหญ่ทั้งหมด
    echo strtoupper($name);
    


?>