<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
        $num1=rand( 23,300);

        echo "El número es : " .$num1 ."<br>";


        $num2=pow(2,5);

        echo "El número es : " .$num2."<br>";
//round redondea 

        $num3=123.55;

        echo "El número es : ".round($num3)."<br>" ;

//redondea con los decimales que ponga dentro del parentesis
        $num3=123.55245678;

        echo "El número es : ".round($num3,3)."<br>" ;

//casting IMPLICITO

$num4="4";
$num4+=2;

$num4+=1;


echo "El número es : " .$num4 ."<br>" ;

//casting EXPLIITO

$num5="5";

$resultado=(int)$num5;

echo "El número es : " .$num5 ;



?>
    
</body>
</html>