<?php

    $file1 = fopen('ding.txt','r'); or die("ไม่พบไฟรฒที่ต้องการ")  //r ไม่ไห้แก้ไข่

    echo fread($file1,filesize('ding.txt'));

    fclose( $file1);


?>