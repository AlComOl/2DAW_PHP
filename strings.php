<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strings</title>
    <style>
        .resaltar{
            color:#F00;
            font-weight:bold;
        }
     </style>

</head>
<body>
    <?php
    $nombre="juan";
    $variable1="Casa";
    $variable2="CASA";

    echo '<p class="resaltar">Esto es un ejemplo de frase</p>';
    //barra inverditada delante las primeras comillas y otra detras de la 2 comillas
    //esto se llama escape de caracteres en un string
    echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";
    
    echo "Hola $nombre <br>" ;

        $resultado=strcmp($variable1,$variable2);//devuelve 1 si son iguales y 0 si no son iguales

        if($resultado){

            echo "No coinciden";

        }else{
            echo "Coinciden";
        }

       // echo "El resultado es ". $resultado;


    
    ?>
</body>
</html>