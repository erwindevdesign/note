## PHP :elephant: <a name='id9'></a>

### sintax

- Etiqueta de apertura en PHP: **<?php**
- Etiqueta de cierre en PHP: **?>**
- imprimir en panrlla: **echo " "**
- en PHP cualquier línea de codigo debemos cerrar con punto y como: **;**
- salto de línea: **\n**
- Definir nombre de variable: **$name = " " ;**
- Comentarios en línea: **//** y **#**
- Comentarios en varias líneas: **/\* \*/**

Estructura de una variable

$nombre_de_variable = "asignación_de_dato"

### Tipos de dato

| Tipos de dato númerico | dato                          |
| ---------------------- | ----------------------------- |
| integer                | 1,2,3,999.                    |
| float                  | 3.1416                        |
| double                 | 3.141592653589793238462643383 |

| Tipos de dato caracteres | dato                   |
| ------------------------ | ---------------------- |
| char                     | a,b,c,5                |
| string                   | abcd, abecedario, 9999 |

| Tipos de dato boleano | dato        |
| --------------------- | ----------- |
| bool                  | true, false |

| Tipos de dato nulos | dato                                   |
| ------------------- | -------------------------------------- |
| NULL                | expresión que no contiene ningún valor |
| undefined           | variable que no ha sido definida       |

### Operadores logicos

**AND - &&**
| valor1 | operador | valor2 | resultado |
| -- | -- | -- | -- |
| true | and | true | true ( 1 ) |
| true | and | false | false ( 0 ) |
| false | and | true | false ( 0 ) |
| false | and | false | false ( 0 ) |

**OR - ||**
| valor1 | operador | valor2 | resultado |
| -- | -- | -- | -- |
| true | or | true | true ( 1 ) |
| true | or | false | true ( 1 ) |
| false | or | true | true ( 1 ) |
| false | or | false | false ( 0 ) |

**NOT - !$variable_name**
| operador | valor | resultado |
| -- | -- | -- |
| NOT | true | false ( 0 ) |
| NOT | false | true ( 1 ) |

### Operadores aritméticos

| Tipo           | Descripción                                                                                                            | Operador | Ejemplo                              |
| -------------- | ---------------------------------------------------------------------------------------------------------------------- | -------- | ------------------------------------ |
| adición        | suma dos o más elementos                                                                                               | +        | $elemento1 + $elemento2 + $elemento3 |
| sustracción    | resta de dos o más elementos                                                                                           | -        | $elemento1 - $elemento2 - $elemento3 |
| multiplicación | multiplicación de dos o más elementos                                                                                  | \*       | $elemento1 _ $elemento2 _ $elemento3 |
| División       | división de dos o más elementos                                                                                        | /        | $elemento1 / $elemento2 / $elemento3 |
| módulo         | devuelve el residuo de una división                                                                                    | %        | $a % $b                              |
| potenciación   | eleva un elemento al exponente indicado                                                                                | \*\*     | $a \*\* $b                           |
| identidad      | añpisicionarce entes de la variable, convierte un **string** a **int** o **float**, según el contenido de la variable. | +        | +$a                                  |
| negación       | convierte un elemento positivo a negativo                                                                              | -        | -$a                                  |

### Operadores relacionales

| Tipo              | Descripción                                                                                                               | Operador |
| ----------------- | ------------------------------------------------------------------------------------------------------------------------- | -------- |
| Igual             | Regresan el valor **bool** de la comparación entre elementos                                                              | ==       |
| Identico          | Regresan el valor **bool** de la comparación entre elementos comparando tipos de datos                                    | ===      |
| Diferente         | Regresan el valor **bool** de la diferenciación entre elementos                                                           | !=       |
| Diferente exacto  | Regresan el valor **bool** de la diferenciación entre elementos comparando tipos de datos                                 | !==      |
| Menor que         | Regresa el valor **bool** de la comparación del valor de menor cantidad entre los elementos                               | <        |
| Mayor que         | Regresa el valor **bool** de la comparación del valor con mayor cantidad entre los elementos                              | >        |
| Menor o igual que | Regresa el valor **bool** de la comparación del valor de igual o menor cantidad entre los elementos                       | <=       |
| Mayor o igual que | Regresa el valor **bool** de la comparación del valor de igual o mayor cantidad entre los elementos                       | <=       |
| Spaceship         | Regresa el valor **int** de 1,0,-1 de la comparación entre los elementos que sean mayores (1), iguales (0) o menores (-1) | <=>      |
| Función de NULL   | Regresa el valor **int** de la primera comparación entre elementos y su contenido                                         | ??       |


Operadores logicos

| example | name | result |
| -- | -- | -- |
| $valorA and $valorB | and | true si el valor A y el valor B son true |
| $valorA or $valorB | or | true si el valor A o el valor B son true |
| $valorA xor $valorB | xor | true si uno de los valores son true, pero no ambos |
| !$valorA | not | true si el valor A es false |
| $valorA && valorB | and | true si el valor A y el valor B son true, tomando la presedencia del lado izquierdo |
| $valorA \|\| $valorB | or | true si el valor A o el valor B son true, tomando la presedencia del lado izquierdo |

Ejemplo de comparación de operadores logicos

index.php
```
<?php

$valorA = false;
$valorB = true;

$resultado = $valorA || $valorB;
var_dump($resultado);

?>
```
consola:
```
❯ php index.php
bool(true)
 
❯ php index.php
bool(false)
 
❯ php index.php
bool(true)
```
operadores aritmeticos

| example | name | result |
| -- | -- | -- | 
| $valorA + $valorB | suma + | la suma de valor A y valor B |
| $valorA - $valorB | resta - | la resta de valor A y valor B |
| $valorA * $valorB | multiplicación * | la multiplicación de valor A y valor B |
| $valorA / $valorB | división / | la división de valor A y valor B |
| $valorA % $valorB | módulo / residuo | el remanente de la división del valor A entre valor B |
| $valorA ** $valorB | Potenciación ** | la potenciación del valor A a la potencia del valor B |

