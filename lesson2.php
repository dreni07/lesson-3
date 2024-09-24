<?php 

    $num = 10;
    if($num >= 12 && $num <= 19){
        echo "You Are A Teenager";
    }elseif($num < 12){
        echo 'You Are A Child';
    }
    else{
        echo "You Are An Adult";
    }

    $first_num = 2;
    $second_num = 3;
    if($first_num === $second_num){
        echo 'True';
    }else{
        echo 'False';
    }

    if(($first_num + 2 === 5) || ($second_num + 2 === 5)){
        if($first_num + 3 === 5){
            echo "by adding to $first_num 3 is equal to 5";
        }

        if($second_num + 3 === 5){
            echo "by adding to $second_num 3 is equal to 5";
        }
    }

    $third_num = 4;
    $forth_num = 6;
    if(($third_num + $first_num === $forth_num) && ($forth_num - $second_num === $second_num)){
        echo 'Bravo';
    }
    $variabla = 'Red';
    switch($variabla){
        case 'Red':
            echo 'Color Is Red';
            break;
        case 'Green':
            echo 'Color Is Green';
        case 'Blue':
            echo 'Color Is Blue';
            break;

        default:
            echo 'There Is No Color';
    }
    $the_number = 3;
    switch($the_number){
        case $the_number % 2 == 0:
            echo 'number is even';
            break;
        case $the_number % 2 != 0:
            echo 'Number Is Odd';
            break;
        
    }

    echo "<br>";


    // $x = 1;
    // while($x <= 10){
    //     echo "$x <br>";
    //     $x++;
    // }

    // $x = 1;

    // do{
    //     echo "$x";
    //     $x++;
    // }while($x <= 10)

    for($i = 0;$i<10;$i++){
        echo "$i";
    }

    $the_array = array('Bmw','Mercedes','Audi','Tesla');
    foreach($the_array as $car){
        echo "$car <br>";
    }

    




?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>