<?php
/*
 * exercise01.php     
 * Elaborar un programa que reciba una hora 
 * expresada en segundos y la convierta en 
 * horas, minutos y segundos usando formularios
 * HTML y servidor que procese lógica. 
 */

    
?>

<!DOCTYPE html>
<html lang="es" dir="ltr" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise01</title>
    <meta name="description" content="Practice exercise in PHP languages logic ">
    <meta name="author " content="mimo_sb">    
</head>
<body>

    <h2>Introduzca los segundos a estimar en horas</h2>
    
    <form action="./server.php" method="post" enctype="multipart/form-data"> 

    <p>Segundos: </p>

    <input type="text" size="3" name="segundos">

    <input type="submit" name="enviar" value="Enviar" >
    
    <input type="reset" name="borrar" value="Borrar">

    </form>    

</body>
</html>

<!-- Ejemplo de ejercicio en servidor desktop -->

                <!-- SERVER -->

<?php

/* function validation ($segundos, $enviar ){
    return !empty($segundos);
}

if (isset($_POST["enviar"])){

    if (validation(...$_POST)){
        
        $segundos= $_POST["segundos"];

        $seg=$segundos%60;
        $minutos=($segundos-$seg)/60;
        $min=$minutos%60;
        $hor = ($minutos-$min)/60;

        var_dump("La conversión de: $segundos es Horas: $hor horas con $min minutos y $seg segundos"); 
        print_r("La conversión de $segundos segundos es <br> $hor horas con $min minutos y $seg segundos <br><br>");
    }

    else{

        echo "Tipo de dato incorrecto";
    
    }
}
echo "<pre>";
var_dump ($_POST);
echo "</pre>";


print_r("<br>La conversión de $segundos segundos es <br> $hor horas con $min minutos y $seg segundos");

var_dump(!empty($_POST["segundos"]));

echo "<pre>";

var_dump($_POST);

echo "</pre>";
 */
