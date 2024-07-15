<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre="juan";


    function dameNombre(){

        //global $nombre;
         
         $nombre=" El nombre es ".$nombre;
       //  echo $nombre ."<br>";
    }
         dameNombre();

    echo $nombre;
    ?>
</body>
</html>