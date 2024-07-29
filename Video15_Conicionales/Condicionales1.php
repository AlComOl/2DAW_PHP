<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <?php
    $var1=true;
    $var2=false;
//Si utilizamos && el resultado sera false
//Si utilizamos and el resultado será true porque
//el = tiene preferencia sobre el and entonces
//$var1=a true
    $resultado=$var1 and $var2;

    if($resultado==true){
        echo "Correcto";
    }else{
        echo"Incorrecto";
    }
?>
</body>
</html>