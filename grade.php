<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <hr color="danger">
    <b>
    <center>
     <font size = "8">
    <p  style = 'color:green'>
    <?php

    $grade = $_GET['grade'];
   
    if($grade >= '90'){
        echo "A+";
    }elseif($grade >= '80'){
        echo "A";
    }elseif($grade >= '75'){
        echo "B+";
    }elseif($grade >= '70'){
        echo "B";
    }elseif($grade >= '65'){
        echo "C+";
    }elseif($grade >= '60'){
        echo "C";
    }elseif($grade >= '55'){
        echo "D+";
    }elseif($grade >= '50'){
        echo "D";
    }else{
        echo "F";
    }
    ?>   
    </p>
</center>
    </b>
</font>
</body>
</html>
