<?php

    $today = date('D'); 

    switch ($today) {
        case 'Fir':
            echo "วันนี้ วันศุกร์";
            break;
        case 'Sat':
            echo "วันนี้ วันเสาร์";
            break;
        case 'Sun':
            echo "วันนี้ วันอาทิตย์";
            break;
        case 'Mon':
            echo "วันนี้ วันจันทร์";
            break;
        case 'Tue':
            echo "วันนี้ วันอังคาร";
            break;
        case 'Wed':
            echo "วันนี้ วันพุธ";
            break;
        
        default:
            echo "วันนี้ วันพฤหัสสับดี";
            break;
    }

    echo "<hr color='red'>";

    $month = date('L');
    
    switch ($month) {
        case 'Nov':
            echo "เดือนนี้ เดือนพฤศจิกายน";
            break;
        case 'Dec':
            echo "เดือนนี้ เดือนธันวาคม";
            break;
        case 'Jan':
            echo "เดือนนี้ เดือนมกราคม";
            break;
        case 'Feb':
            echo "เดือนนี้ เดือนกุมภาพันธ์";
            break;
        case 'Mar':
            echo "เดือนนี้  เดือนมีนาคม";
            break;
        case 'Apr':
            echo "เดือนนี้  เดือนเมษายน";
            break;
        case 'May':
            echo "เดือนนี้ เดือนพฤษภาคม";
            break;
        case 'Jun':
            echo "เดือนนี้ เดือนมิถุนายน";
            break;
        case 'Jul':
            echo "เดือนนี้  เดือนกรกฏาคม";
            break;
        case 'Aug':
            echo "เดือนนี้ เดือนสิงหาคม";
            break;
        case 'Sep':
            echo "เดือนนี้ เดือนกันยายน";
            break;
        
        default:
            echo "เดือนนี้ เดือนตุลาคม";
            break;
    }

?>