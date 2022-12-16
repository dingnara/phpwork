<?php

    $file1 = fopen("pattani.txt","a");
    fwrite($file1, "Solahuding Keuji\n");
    $file2 = fopen("pattani.txt","r");
    fread($file2, filesize("pattani.txt"));
    fclose($file2);

    echo "<br>";

    $file3 = fopen("pattani.txt","a");
    fwrite($file3, "Information Technology\n");
    $file4 = fopen("pattani.txt","r");
    fread($file4, filesize("pattani.txt"));
    fclose($file4);


?>