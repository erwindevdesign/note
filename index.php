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





/* 

// 33.Validar el acceso a una sala de cine según los asientos disponibles.

$asientos_disponibles = 0;
$por_terminar = false;
$solo_uno = false;

if ($asientos_disponibles > 0 ){
    echo "Existen asientos disponibles para esta película ";

}

elseif( $por_terminar == true){
    echo "Los asientos están por terminarse!!";
}

elseif($solo_uno){
    echo "Solo queda un asiento en existencia";
}

else {
    echo "Lo sentimos, la sala esta completamente llena";
}

echo "\n";

*/





/* 
// Laura: blue
// MAria: red
// Oscar: purple
// Luis: green
// Omar: brown


$favorite_color = 5;

switch( $favorite_color ){

    case 1:
        echo "a Laura le gusta el color AZUL";
        break;
        
    case 2:
        echo "a Maria le gusta el color ROJO";
        break;
    
    case 3:
        echo "a Oscar le gusta el color PURPURA";
        break;

    case 4:
        echo "a Luis le gusta el color VERDE";
        break;

    case 5:
        echo "a Omar le gusta el color CAFE";
        break;

    default:
        echo "Ese usuario aún no ha es agregado";

}

echo "\n";

*/





/*
 
Plataforma 

donaciones de se retiran a partir de $100

pedir al cartera_digital cuanto dinero tiene y tomar la desicion de retirar o no retirar



1. validar cantidad en cartera-digital

2. validar si supera o no los $100

3. retirar x cantidad

4. restar x cantidad de la cuenta 

5. mostrar restante en cuenta

6. dar las gracias

$cantidad_cartera
$usuario

*/

/* 

$usuario = readline("¿Cual es tu No. de usuario? ");

var_dump($usuario . "\n");

echo "\n";

$user = $cartera[$usuario][number];

var_dump($user . "\n");





$cartera = [
    
    "usuario1" => array(
        "nombre" => "Oscar",
        "username" => "Ocarin",
        "number" => 1,
        "saldo" => "$120",
    ),

    "usuario2" => array(
        "nombre" => "Maria",
        "username" => "MERYJANE",
        "number" => 2,
        "saldo" =>"$20",
    ),

    "usuario3" => array(
        "nombre" => "Eduardo",
        "username" => "LALO",
        "number" => 3,
        "saldo" => "$1200",
    ),




];

 
switch($nombre){

    case 1:
        echo "Hola " . $usuario["username"] . " tu saldo es de: " . $usuario[saldo] . "\n";
        break;
        
    default:
        echo "Este usuario aún no ha es agregado";
}

echo "\n";
 
*/




/* 
// 34.Retiro de donaciones

$cantidad_donaciones = readline("Por favor, ingresa la cantidad de donaciones acumuladas con las que cuentas: ");

if ($cantidad_donaciones >= 100){
    echo "Tu retiro está en proceso ... ";
}

else {
    echo "Lo sentimos, NO cuentas con la cantidad suficiente para el retiro.";
}

echo "\n";

*/


/* 
// 35.Ciclo while

$contador = 0;

while($contador <= 10){
    echo "Iteración No. $contador \n";
    $contador++;

}
echo "\n";

 */

/* 
 // Ciclo Do ... While

 $usernames = ["Alana", "Josse", "Peach"];

 var_dump ($usernames) . "\n" ;

 do{
    $username = readline("Ingresa el nombre de usuario: ");

    
    
    echo "\n";

 } while(in_array($username, $usernames));
 
 array_push($usernames, $username);

 var_dump ($usernames) . "\n" ;


 echo "\n";

  */







/* 
// 36.Ciclo for and for-revert

  

for ($contador = 0; $contador <= 10; $contador++ ){
    
    echo $contador . "\n";
}

echo "\n";



for ($contador = 10; $contador >= 0; $contador-- ){
    
    echo $contador . "\n";
}

echo "\n"; */



/* 
// for complejo, incremento de $i en 1 e incremento de $j en 2

for ($i = 0, $j = 0; $i < 10; $i++ , $j += 2){
    echo "i = $i j = $j" . "\n";

}

echo "\n";


for ($count = 0, $count2 = 0; $count < 10; $count++ , $count2 += 2){
    echo "count+1 = $count y countx2 = $count2" . "\n";

}

 */


/* 
// foreach

$cafe_list = [
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 28.9,
    "Mocca" => 31
];

var_dump($cafe_list);

echo "\n";

foreach($cafe_list as $cafe => $price){
    echo "El cafe $cafe cuesta $$price USD \n";
}

echo "\n";

 */


/* 
// foreach con break

$cafe_list = [
    "Americano" => 20,
    "Latte" => 25,
    "Olla from Chiapas" => 50,
    "Capuccino" => 28.9,
    "Mocca" => 31
];

var_dump($cafe_list);

echo "\n";

foreach ( $cafe_list as $cafe => $precio ) {
    
    if($cafe == "Olla from Chiapas") {
        continue;
    }
    echo "El café $cafe, es más economico! \n";
}

echo "\n";

 */

// solución Reto: ¿cuántos caminos hay para llegar al mismo punto?

# Existe una variedad de tienedas en la ciudad conectadas por 
# dos tipos de cainos diferentes para llegar, uno por calles 
# pabimentadas y otra por ciclopistas, si partimos siempre de 
# la tiendo 1, cuantos caminos existen para llegar a las demás
# tiendas según el grafico.

# 1.conteo de casos de uso en el problema
/* 
2 --> 1
3 --> 2
4 --> 3
5 --> 5
6 --> 8
7 --> 13
8 --> 21
 */

/*  
# 2.identificar, si es que existen patrones en la diagramación del problema

// suceción de fibonacci <--- **

$numero_de_tienda = (int) readline("Que número de tienda deseas ubicar: ");
$anterior = 0;
$actual = 1;

for ($i = 2; $i <= $numero_de_tienda; $i++) { 

    $temporal = $actual;
    $actual += $anterior;
    $anterior = $temporal;

}

echo "Existen $actual formas distintas  de llegar";

echo "\n";

 */


// funciones

/* function get_pokemon(){
    
    $numero_aleatorio = rand (1, 5);

    switch($numero_aleatorio){

        case 1:
            echo "Picachu\n";
            break;
        case 2:
            echo "Bulbasaur\n";
            break;
        case 3:
            echo "Mew\n";
            break;

        default:
        echo "Lo sentimos, no existe un pokemon aún!\n";
    }
}

for ($i=0; $i < 20; $i++) { 
    get_pokemon();
}

echo "\n";
 */
/* 
// funcion estudiante legent

function legent($rank){
    if($rank >= 20000){
        echo "Hello LEGEND !! \n";
    }
    else{
        echo "sorry student, you not is legend user! \n";
    }
}

do{
    $user = (int) readline("How many points does your user have? \n");
    legent ($user);
}

while(true);

echo "\n"; */

/* 
// definir parametros por defecto en una funcion

function suma($a = 1, $b = 1){
    echo "La suma de $a + $b es: " . $a + $b . "\n";
} 

suma();
suma(1,0);
suma(1,55);

echo "\n";
 */


/* 
// unpacking

$array1 = [1,2,3];
$array2 = [4,5,6];

$resultado = [...$array1, ...$array2];

var_dump($resultado);

echo "\n";

 */

/* 
 // Definir parametros con unpacking

function suma($a, $b){
    echo "La suma de $a + $b es: " . $a + $b . "\n";
} 

$num = [1,2];
$num0 = [55,345];
$num1 = [100000, 1];

suma(...$num);
suma(...$num0);
suma(...$num1);


echo "\n";
 */


 /* 
 function suma_iteractive(...$params){
    var_dump($params);
 }

 suma_iteractive(1,2);
 suma_iteractive(1000,2000,10,5000,8000);
 suma_iteractive(651,231632, 64, 313, 6498 ,8, 315, 54, 78);

 echo "\n";

 */

/* 
function suma_iteractive(...$params){
    
    $suma = 0;

    foreach ($params as $numero){
        $suma += $numero;
    }

    echo "El resultado de la suma es: $suma \n";
 }

 suma_iteractive(1,2);
 suma_iteractive(1000,2000,10,5000,8000);
 suma_iteractive(651,231632, 64, 313, 6498 ,8, 315, 54, 78);

 echo "\n";
 */


/* 
// return

function aleatory(){

    $aleatory_num = rand(1,4);

    $sentence = " ";

    switch($aleatory_num){
        case 1:
            $sentence = "Hello here! \n";
            break;
        
        case 2:
            $sentence = "Howdy!! :) \n";
            break;
        
        case 3:
            $sentence = "Good to see you \n";
            break;

        case 4:
            $sentence = "What's going on? \n";
            break;

        
    }  

    return $sentence; 

}

echo aleatory();


echo "\n";
 */

/* 
// operador de nave espacial - ordenar un array con usort

$precios = [12, 55, 69, 42, 23, 25, 20, 15];

usort($precios, function($a, $b){
    return $a <=> $b;
});

var_dump($precios);
 */



/*  
// Hora por pantalla

function hora(){
    return date("h:i a");
}

echo "Función que regresa la hora por pantalla \n";

echo "La hora exacta es: " . hora();

echo "\n";
 */

/* 
// Hangedman game

function clear(){
    if(PHP_OS === "WINNT"){
        system("cls");
    }
    else{
        system("clear");
    }
}


$words = ["Dinosaurio", "Parque", "Princesa", "Arbol", "Campana", "Amor", "Comer", "Escuela"];

define("MAX_ATTEMPS", 6);

echo "Hangedman-game \n\n";

// preview

$choose_word = $words[rand(0,7)];
$choose_word = strtolower($choose_word);
$word_length = strlen($choose_word);
$discovery_letters = str_pad("", $word_length, "_");
$attempts = 0;

do {

    echo "Palabra de $word_length letas \n\n"; 
    echo $discovery_letters . "\n\n";
    
    // writing
    
    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);
    
    // validete
    
    if (str_contains($choose_word, $player_letter)){
        $offset = 0;
        while(
            
            ($letter_position = strpos($choose_word, $player_letter,$offset) )!== false
            
            ){
            
            $discovery_letters[$letter_position] = $player_letter;
            $offset = $letter_position + 1; 
        }
    }
    else{
    
        clear();    
        $attempts++;
        echo "Letra incorrecta";
        echo "Te quedán " . (MAX_ATTEMPS - $attempts) . " intentos";
        sleep(3);
    }
    
        
} while ($attempts < MAX_ATTEMPS && $discovery_letters != $choose_word);

clear();

if ($attempts > MAX_ATTEMPS){
    echo "Congratulations!! \n";
    echo "Your complete this sentence \n";
}
else{
    echo "Game-End \n";
}

echo "La palabra es; $choose_word  \n";
echo "Tú destapaste: $discovery_letters";

echo "\n";

 */
/* 
    $img =[
        "https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Catifa_Sierpinski.png/220px-Catifa_Sierpinski.png",
        "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Penrose7.gif/220px-Penrose7.gif",
        "https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Wismut_Kristall_und_1cm3_Wuerfel.jpg/220px-Wismut_Kristall_und_1cm3_Wuerfel.jpg",
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php  foreach( $img as $img){    ?>
    
        <img src="<?php echo img; ?>">

    <?php }     ?> 
    
</body>
</html>

 */



// CURSO PRACTICO PHP

// logica

# Problema 1: calcular la suma de 3 números aleatorios y mostrar el resultado.
# Solución:
/* 
* leer el problema objetivamente
* identificar las entradas
* identificar las salidas
* definir el proceso en base al analisis
        - Entradas: 3 números aleatorios
        - Salidas: 1 número
        - Proceso: 

            0. Ingresar los tres números
            1. Identificar le primer número
            2. Identificar el segundo número
            3. sumar los primeros dos números
            4. identificar el tercer número
            5. sumar el tercer número con el resultado de la suma de los primeros dos números
            6. Mostrar el resultado 

Graficando el proceso

* Entradas: a1 + a2 + a3
* Procesos: a1 + a2 + a3 = aR
* Salida: = R

* Entradas: 3 + 1 + 4
* Procesos: 3 + 1 + 4 = 8
* Salida: = 8

Problema 2: Convertir una entrada de formato de hora a.m. / p.m. a  24hrs

    Entrada: a.m. / p.m.

    Salida: 24 hrs


Entrada: 07:05:45 p.m.

        07:05:45 p.m.
        h   m  s  t



Salida: 19:05:45

        19:05:45 
        h   m  s 

condiciones de uso

12:00:00 a.m. --->  00:00:00
12:00:00 p.m. --->  12:00:00

si t = am y h = 12 ---> h 00:00:00
si t = pm y h < 12 ---> h (h+12):00:00

Salica = h : m : s 

Solución:

Graficando el proceso:


 */

/* 
// operadores logicos

$valorA = false;
$valorB = true;

$resultado = $valorA || $valorB;
var_dump($resultado);

?>
  */
/* 

// operadores aritmeticos

$valorA = 5;
$valorB = 2;

$potencia = $valorA ** $valorB;

var_dump($potencia);

?>
 */


/* 

// if - else

$valorA = 10;

if($valorA==10){
    echo "Es igual a 10 \n";
}
else{
    echo "no es igual a 10 \n";
}

 */

/* 

// while

$i = 0;

while ($i <= 10) {
    
    echo $i++ . "\n";

}

// do while

$i = 0;

do{
    echo $i++ . "\n";

} while ($i <= 10);

 */


/* 

// for 

$arr = [

    1,2,3,4

];

for($i=0; $i<4; $i++){

    echo $arr[$i] . "\n";
}

// foreach

$arr = [

    1,2,3,4

];

foreach($arr as $value){
    echo $value . "\n";
}
 */


/* 
// switch

$valorA = 3;

switch ($valorA) {
    case 1:
        echo "El valor es 1";
        break;
    case 2:
        echo "El valor es 2";
        break;
    case 3:
        echo "El valor es 3";
        break;
    default:
        echo "No es ninguno de los valores: 1, 2, 3";
        break;
}

echo "\n";
 */


function concantenar($nombre, $apellido){
    echo $nombre." ". $apellido;

}

concantenar("Maria", "Jose"."\n");

function sumar($numeros){
    $suma = 0;
    for ($i=0; $i < 4; $i++) { 
        $suma += $numeros[$i];
    }
    echo "La suma de los números es: " . $suma . "\n";
}

$numeros = [
    1,2,3,4
];
sumar($numeros);