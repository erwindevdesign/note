<?php

echo "PHP es un lenguaje de programación que ocupa más del 70 % de los lenguajes que se utilizan en el desarrollo web";
echo "\n";
echo "\n";
echo "Los ejercicios presentados son referencia del aprendisaje del lenguaje PHP y pretende presentar una recapitulación de ellos a modo de tutorial y antecedente del aprendisaje obtenido";
echo "\n\n"; 
echo "Ejercicio 1 - imprimir por pantalla texto"
echo "\n\n";
echo "La función "echo" realiza la impresión que cotenga la sentencia"
echo 


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

/* echo "$horas segundos convertidos a horas son: " . (int)($horas / 3600) . "\n";
echo "Sobran: " . ($horas % 3600) . " segundos";

echo "\n"; */

/* $a = 5;
$b = 5;
$b2 = "9";
$c = 9;
$d = 2;

// Igual ==
var_dump($a == $b);
var_dump($a == $b2);
echo "\n"; 
// Identico ===
var_dump($a === $b);
var_dump($a === $b2);
echo "\n"; 
// Diferente !=
var_dump($a != $b);
var_dump($a != $b2);
echo "\n"; 
// diferente exacto !==
var_dump($a !== $b);
var_dump($a !== $b2);
echo "\n"; 
// Menor que <
var_dump($a < $b);
var_dump($a < $b2);
var_dump($c < $d);
var_dump($c < $b);
echo "\n"; 
// Mayor que >
var_dump($a > $b);
var_dump($a > $b2);
var_dump($c > $d);
var_dump($c > $b);
echo "\n"; 
// Mayor o igual que >=
var_dump($a >= $b);
var_dump($a >= $b2);
var_dump($c >= $d);
var_dump($c >= $b);
echo "\n"; 
// Menor o igual que <=
var_dump($a <= $b);
var_dump($a <= $b2);
var_dump($c <= $d);
var_dump($c <= $b);
echo "\n"; 
// Spaceship <=>
var_dump($a <=> $b);
var_dump($a <=> $b2);
var_dump($c <=> $d);
var_dump($c <=> $b);
echo "\n"; 
// Spaceship <=>
var_dump(2 <=> 1);
var_dump(1 <=> 1);
var_dump(-50 <=> 1);
echo "\n"; 
// Funsión de NULL ??
$edad_de_laura = 55;
$edad_de_pepito = 23;

echo $edad_de_juanito ?? $edad_de_laura ?? $edad_de_pepito ;
echo "\n";  */


// Operadores adicionales

// operadores de asignación
/* $edad_de_maria = ($edad_de_laura = 25) + 3;
echo "La edad de laura es: $edad_de_laura \n";
echo "La edad de maria es: $edad_de_maria";

// Operadores de incremento
$contador = 1;
echo "\n"; 
/* $contador = $contador +1; */
/* $contador += 1; */
/* $contador++; 
 

echo "\n"; 
echo $contador; */

/* $nombre = "Carlos";
/* $nombre = $nombre . " " . "Santana";
echo "\n";
$nombre .= " " . "Santana";
echo $nombre; */

/* $segundos = readline("Ingresa el tiempo en segundos: ");
$horas = (int)($segundos / 3600);
$segundos = (int)($segundos % 3600);

echo $horas . " horas, con " . $segundos . " " . "segundos"; */

// segundos a horas, minutos y segundos restantes
/* $segundos = readline("Ingresa el tiempo en segundos: ");
$horas = (int)($segundos / 3600);
$segundos = (int)($segundos % 3600);
$minutos = (int)($segundos/60);
$segundos = (int) ($segundos % 60); 

echo $horas . " horas, con " . $minutos . " minutos y ". $segundos . " " . "segundos"; */

// horas a segundos, minutos y horas restantes.

/* $horas = readline("Ingresa el tiempo en horas: ");
$segundos = (int)($horas * 3600);
$horas = (int)($horas % 3600);

echo $horas . " horas, son " . $segundos . " " . "segundos"; */
/* 
$horas = readline("Ingresa las horas: ");
$minutos = readline("Ingresa los minutos: ");
$segundos = readline("Ingresa los segundos: ");

$resultado = ($horas * 60 * 60)+($minutos * 60)+$segundos;

echo "El resultado a segundos es de: $resultado segundos."; */

// Arreglos-Array
// existen dos metodos para definir un array:
// 1 - corchetes
/* $edades = [20, 18, 40];

echo 'primer subindice: ' . $edades[0] . "\n";
echo 'segundo subindice: ' . $edades[1] . "\n";
echo 'tercer subindice: ' . $edades[2] . "\n";

echo "\n"; */
// 2-función array
$edades = array(20, 18, 40);

echo 'primer subindice: ' . $edades[0] . "\n";
echo 'segundo subindice: ' . $edades[1] . "\n";
echo 'tercer subindice: ' . $edades[2] . "\n";

echo "\n";

