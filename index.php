<?php

/*

// 1.salto de linea

echo "\n";

echo "PHP lenguage";

echo "\n";

echo "Salto de línea entre instrucciones";

echo "\n";


echo "Esto es un ... \nsalto de linea dentro de un string\n" ;

echo "Esto es un ...";

echo "\n\n";

echo "doble salto de línea";

echo "\n";

*/




/*
// 2.variables y concadenación

echo "\n"; 

$name = "Carlos"; // variable-1

$firtsname = "Santana"; // variable-2

echo "My nombre es " . $name . " " . $firtsname . "\n"; // concadenando variable 1-2

echo "\n"; 

echo "El resultado de 546316 x 3464613 es " . (546316*3464613) . "\n"; // concadenando una operación matematica

echo "\n"; 

*/




/* 

// 3. Ver contenido var_dump(  ) &  print_r(  );

echo "\n";

$personas = [
    "Carlos" => 22,
    "Mr. Michi" => 15,
    "Juan" => 65
];

// var_dump($personas);

print_r($personas);

echo "\n";

*/




/*

// 4.definiendo una contante

define("NUMERO_PI", 3.1416);

echo NUMERO_PI;

echo "\n";

var_dump(NUMERO_PI);

echo "\n";

*/



/*

// 5.Resultado de operadores y tipo de dato


$numero = "23"; // string que contine una cadena de texto de 2 carácteres númericos

$nuevo_numero = $numero + 2; // variable que contiene una operación aritmetica que incluye una variable y una dato entero (int)

echo "\n";

echo($nuevo_numero) . "\n";

echo($numero) . "\n";

var_dump($nuevo_numero) . "\n";

var_dump($numero) . "\n";

*/




/*

// 6.resultado de operación entre una variable que continene un INT y un dato tipo float

$numero = 10;

$numero_b = $numero + 0.5;

echo "\n";

var_dump($numero_b). "\n"; 

*/





/*

// 7.String relacionado en una suma con dato entero INT

$papas = "10 papas en el costal" . "\n";

echo "\n";

$cuantas_papas_hay = $papas + 5;

echo $cuantas_papas_hay . "\n";

*/



/* 

// 8.Mostrar una cadena de texto STRING como entero INT

echo "\n";

$numero = "5";

var_dump($numero) . "\n";

$numero = (int)$numero;

var_dump($numero) . "\n";

*/




/*

// 9.Imprimir por pantalla un número flotante FLOAT en uno entero INT 

$dias = 5.89;

var_dump($dias) . "\n";

$dias = (int)$dias;

var_dump($dias);

echo "\n";

*/





/* 

// 10.booleanos

$bandera = false;

var_dump($bandera);

$bandera = 1;

var_dump($bandera);

$bandera = (bool) $bandera;

var_dump($bandera);

echo "\n"; 

*/



/*

# 11.tipos de dato

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
var_dump($michis); 

*/


/* 

// 12.imprimir por pantalla entero INTT desde una variable STRING y un BOOL

$numero = "5";

var_dump($numero);

$numero = (int)$numero;

var_dump($numero);

$dias = 5.89;

var_dump($dias);

$dias = (int)$dias;

var_dump($dias);

echo "\n";

*/



/* 

// 13.Variables & operadores lógicos

// variables
$ataque_agua = true;
$ataque_fuego = false;
$ataque_electrico = false;
$velocidad_alta = true;

// resultado
var_dump($ataque_agua && $velocidad_alta);
var_dump($ataque_fuego || $ataque_electrico);
var_dump($ataque_agua || $ataque_fuego);
var_dump(!$ataque_fuego);
var_dump(!$ataque_electrico && $ataque_agua);

*/




/* 

// 14.Operadores VAR_DUMP( ) & PRINT_R( ) mostrando el resultado de una exponenciación

$resultado = (5**3);

echo $resultado;

echo "\n";

var_dump($resultado);

print_r($resultado);

echo "\n";

*/





/* 

// 15.Concadenando dos resultados de operadores aritmeticos 

echo (5*6) . " " . (80/4) . "\n";

*/





/* 

// 16.División y residuo

echo 5 / 2 . "\n";

echo 5 % 2 . "\n";

 */



/* 

// 17.Convertir segundos a horas con su residuo convertido a segundos restantes

$horas = 7501;

echo "$horas segundos convertidos a horas son: " . (int)($horas / 3600) . "\n";

echo "Sobran: " . ($horas % 3600) . " segundos";

echo "\n"; 

*/






/* 

// 18.Operadores relacionales

$a = 5;
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
echo "\n";

*/







// 19.Operadores adicionales



/* 

// 19.1.Operadores de asignación

$edad_de_maria = ($edad_de_laura = 25) + 3;

echo "La edad de laura es: $edad_de_laura \n";

echo "La edad de maria es: $edad_de_maria";

*/






/* 

// 19.2.Operadores de incremento

// +1

$contador = 1;

$contador = ++$contador;

echo $contador . "\n";

// $contador +1;
// $contador += 1; 
// $contador++; 
 

echo "\n"; 

*/


/* 

// 20.Concadenando una variable dentro de otra variable y un string.

$nombre = "Carlos";

$nombre = $nombre . " " . "Santana";

$nombre .= " " . "Santana" . "\n";

echo $nombre;

*/




/* 

// 21.Convertir segundos a horas con su residuo ingresando dato desde consola.

$segundos = readline("Ingresa el tiempo en segundos: ");

$horas = (int)($segundos / 3600);

$segundos = (int)($segundos % 3600);

echo $horas . " horas, con " . $segundos . " " . "segundos" . "\n";

*/



/* 

// 22.segundos a horas, minutos y residuo de segundos

$segundos = readline("Ingresa el tiempo en segundos: ");

$horas = (int)($segundos / 3600);

$segundos = (int)($segundos % 3600);

$minutos = (int)($segundos/60);

$segundos = (int) ($segundos % 60); 

echo $horas . " horas, con " . $minutos . " minutos y ". $segundos . " " . "segundos";

*/




/* 

// 23.horas a segundos.

$horas = readline("Ingresa el tiempo en horas: ");

$segundos = (int)($horas * 3600);

$horas = (int)($horas % 3600);

echo $horas . " horas, son " . $segundos . " " . "segundos" . "\n";

*/





/* 

// 24.Horas, munutos y segundos sumados a segundos 

$horas = readline("Ingresa las horas: ");

$minutos = readline("Ingresa los minutos: ");

$segundos = readline("Ingresa los segundos: ");

$resultado = ($horas * 60 * 60)+($minutos * 60)+$segundos;

echo "El resultado a segundos es de: $resultado segundos." . "\n";

*/



/* 

// 25Arreglos-Array

// existen dos metodos para definir un array:

// 25.1.corchetes

$edades = [20, 18, 40];

echo 'primer subindice: ' . $edades[0] . "\n";

echo 'segundo subindice: ' . $edades[1] . "\n";

echo 'tercer subindice: ' . $edades[2] . "\n";

*/





/* 

// 25.2.función array

$edades = array(20, 18, 40);

echo 'primer subindice: ' . $edades[0] . "\n";

echo 'segundo subindice: ' . $edades[1] . "\n";

echo 'tercer subindice: ' . $edades[2] . "\n";

echo "\n";

*/


/* 

// 26.imprimir subindice de un array

// $edades = [20, 18, 40];

$edades = array(20, 18, 40);

echo "Una de las edades que esta dentro es " . $edades[2];

*/




/* 

// 27.array asociativo

$cafes = array(
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70
);

echo "El precio del cafe Americano es de $ {$cafes['Americano']}" . "\n";

*/




/* 

// 28.Consulta de variables dentro de array 

$personas = array(

    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Santana"
    ),

    "Mr.Michi" => array(
        "edad" => 18,
        "apellido" => "Michisancio"
    ),

);

echo "La informacion de Carlos es: Edad: " . $personas["Carlos"]["edad"] . " Apellido: " . $personas["Carlos"]["apellido"];

*/





/* 

// 29.count

$edades = [18, 22, 40, 34];

echo count($edades);

echo "\n";

*/




/* 

// 30.array_push

$edades = [18, 22, 40, 46];

array_push($edades, 13);

var_dump($edades); 

*/



/* 

// is_array

$edades = [18, 22, 40, 46];

$no_array = " ";

var_dump (is_array ($edades)) . "\n"; 

var_dump (is_array ($no_array) ) . "\n"; 

*/



// explote & implode

# la función explote e implote convierte strigns a array y viceversa

/* 

$fruits_list = "fresa, cereza, manzana";

$fruits_list_array = explode(",", $fruits_list);

var_dump($fruits_list_array) . "\n";

*/

/* 


$fruits_list_array = ["fresa", "cereza", "manzana"];

$fruits_list = implode(",", $fruits_list_array);

var_dump($fruits_list) . "\n";

*/




/* 

// 31.POKEMON array
$pokemon = [
    
    "Bulbasur" => array(
        "element" => "plant",
        "color" => "green",
        "food" => array(
            "favorite" => "salty",
            "no_favorite" => "sweet",
        )
        ),

    "Charmander" => array(
        "element" => "fire",
        "color" => "red",
        "food" => array(
            "favorite" => "smoky",
            "no_favorite" => "dry",
        )
        ),
    
    "Squirtle" => array(
        "element" => "aqua",
        "color" => "blue",
        "food" => array(
            "favorite" => "sweet",
            "no_favorite" => "salty",
        )
        ),
    ];

echo "The color of Bulbasur is " . $pokemon["Bulbasur"]["color"] . "\n";

echo "The favorite food of Charmander is " . $pokemon["Charmander"]["food"]["favorite"] . "\n";

echo "Squirtle is " . $pokemon["Squirtle"]["element"] . " element" . "\n";

*/





/* 

// 32.MICHIS array

$escuela = array(
    array(
        "Nombre" => "MichiJose",
        "Ocupacion" => "jQuery developer",
        "Color" => "Blanco con manchas negras",
        "Comidas" => array(
            "Favoritas"=> "Pescado, Pollo",
            "No_favoritas" => "Atún",
        ),
    ),
    array(
        "Nombre" => "Michisancio",
        "Ocupacion" => "Amazing developer",
        "Color" => "Naranja con rayitas",
        "Comidas" => array(
            "Favoritas"=> "Lasaña, Atún",
            "No_favoritas" => "Fresas, Cacahuates",
        ),
    ),
    array(
        "Nombre" => "Mr. Michi",
        "Ocupacion" => "PHP developer",
        "Color" => "night mode",
        "Comidas" => array(
            "Favoritas"=> "Pizza, Salmon",
            "No_favoritas" => "Pollo, Atun",
        ),
    ),


    );

$michisancio = $escuela[1];

echo "Las comidas favoritas de Michisancio son " . $michisancio["Comidas"]["Favoritas"];

echo "\n";

*/



// Validar el acceso a una sala de cine según los asientos disponibles.

$asientos = 55;
$asientos_disponibles = true;
$asientos_por_terminar = true;
$un_asiento = $asientos = true;


if ($asientos > 6 ){
    echo "Existen asientos disponibles para esta película ";

}



elseif($asientos  < 5 ){
    echo "Los asientos están por terminarse!!";
}

elseif($asientos == 1){
    echo "Solo queda un asiento en existencia";
}

else {
    echo "Lo sentimos, la sala esta completamente llena";
}

echo "\n";



