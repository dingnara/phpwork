<?php
//การที่เราจะสร้างฟังก์ชั่นน์ ต้องเริ่มต้นด้วย ฟังก์ชั่นน์
//ชื่อ ต้องตั้งชื่อเริ่มด้วยตัวเล็ก คำที่สองต้องขึ้นด้วยตัวใหญ่
    function displayName(){
        echo "Solahuding Keuji";
    }
    echo "My Name is ";
    displayName();

    echo "<hr color='black'>";

    function addNumber($num1,$num2){
        echo $num1 + $num2;
    }
    addNumber(2,4);

    echo "<hr color='red'>";

    function displayStudent($name){
        echo $name;
    }
    displayStudent("ding");//ข้อความต้องส่งเป็นสตริ่ง = "ข้อความ"

    echo "<hr color='blue'>";

    function powerNumber($num,$pow){
        echo $num**$pow; //เครื่องหมายยกกำลัง
    }
    powerNumber(10,5);

    echo "<hr color='green'>";

    function fractionNumber($numerete,$denomerete){
        echo $numerete % $denomerete; //เครื่องหมายเศษสวน
    }
    fractionNumber(17,9);






?>