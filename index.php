<?php

// echo "hola \n mami \n" ; 

// $name = "Carlos";
// $firtsname = "Santana";

// echo "My nombre es " . $name . " " . $firtsname . "\n";

// echo "El resultado de 546316 x 3464613 es " . (546316*3464613) . "\n";

/* $personas = [
    "Carlos" => 22,
    "Mr. Michi" => 15,
    "Juan" => 65
]; */

// var_dump($personas);

// print_r($personas);

/* $numero_1 = 8;
$numero_2 = 7;

define("NUMERO_PI", 3.1416);

echo NUMERO_PI;

echo "\n"; */

/* $numero = "23";
$nuevo_numero = $numero + 2;

var_dump($nuevo_numero);
var_dump($numero); */

/* $numero = 10;
$numero_b = $numero + 0.5;

var_dump($numero_b); */

/* $papas = "10 papas en el costal";
$cuantas_papas_hay = $papas + 5;

echo $cuantas_papas_hay;
echo "\n"; */

/* $numero = "5";
var_dump($numero);
$numero = (int)$numero;
var_dump($numero); */

/* $dias = 5.89;
$dias = (int)$dias;
var_dump($dias);



echo "\n"; */

/* $bandera = false;
var_dump($bandera); */
/* 
$bandera = 1;
$bandera = (bool) $bandera;
var_dump($bandera);

echo "\n"; */
/* 
// Easy
$nombre = "Carlos"; # string
$apellido = "Gómez"; # string
$edad = 18; # integer
$aprobado = true ; # bool

// Medium
$promedio = (8+9.5+9+10+8)/5; # float
$nombre_completo = $nombre . " " . $apellido; # string
$presento_examen = (bool) 1; # bool

// Advanced
$numero_preguntas = 5 + "5"; # integer
$numero_respuestas = "5" + 5; # integer
$promedio_maximo = $numero_respuestas / 1.0; # float <==
$michis = 3+ "5 michis"; # integer


var_dump($nombre); 
var_dump($apellido);
var_dump($edad);
var_dump($aprobado);
var_dump($promedio);
var_dump($nombre_completo);
var_dump($presento_examen);
var_dump($numero_preguntas);
var_dump($numero_respuestas);
var_dump($promedio_maximo);
var_dump($michis); */


/* $numero = "5";
var_dump($numero);
$numero = (int)$numero;
var_dump($numero); */

/* $dias = 5.89;
var_dump($dias);
$dias = (int)$dias;
var_dump($dias);
echo "\n"; */


/* // variables
$ataque_agua = true;
$ataque_fuego = false;
$ataque_electrico = false;
$velocidad_alta = true;

// resultado
var_dump($ataque_agua && $velocidad_alta);
var_dump($ataque_fuego || $ataque_electrico);
var_dump($ataque_agua || $ataque_fuego);
var_dump(!$ataque_fuego);
var_dump(!$ataque_electrico && $ataque_agua); */

/* $resultado = (5**3);
echo $resultado;
echo "\n";
var_dump($resultado);
print_r($resultado); */

/* echo (5*6) . " " . (80/4); */

/* echo 5 / 2 . "\n";
echo 5 % 2; */

$horas = 7501;

echo "$horas segundos convertidos a horas son: " . (int)($horas / 3600) . "\n";
echo "Sobran: " . ($horas % 3600) . " segundos";

echo "\n";