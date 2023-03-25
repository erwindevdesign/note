# Conseptualización de la programación.

Buscar que la estructura lógica de un texto se enfoque al aprendizaje es de gran ayuda para la comprensión de la información descrita de forma secuencial, dentro de este repositorio se pretende estructurar y transladar a un texto de enfoque técnico que sea referente en pensamiento computacional para la construcción de soluciones digitales implementadas en códiog, incrementando durante su desarrollo, habilidades en escritura técnica y comunicación efectiva con enfoque al usuario, ubicando una línea de voz y tono para la marca profesional en proceso de construcción.

---
## 📦 Contenido

La estructura del repositorio se distribuye en diversos temas de desarrollo con una secuencia lógica para su mejor comprensión, seguida de la implementación de lo descrito en habilidades técnicas mediante ejerciciós para la creación de codigo de ejemplo haciendo uso de los requerimientos en buenas prácticas que el caso de uso permita.

---
## :flags: Index 

1. [Lenguaje, datos y código](#id1)

2. [Tipos de datos](#id2)

3. [Operaciones matemáticas](#id3)

4. [Sistemas numericos ](#id4)

5. [Operadores](#id5)

6. [Teoria de conjuntos](#id6)

7. [Diagramas de flujo](#id7)

8. []



- teoria de conjuntos

- operadores de comparación (==, !=, >, <, <=, >=)

- [diagrama de flujo]
	
- Backend
	
	- tipo de datos

		- caracter: 'string'
		
		- númerico: integer(int: 1,2,3), float(float: 3.1416), complex(z = 3 + 2j)
				
		- boleano: true or falce [1 or 0]
	
	- tipo de operadores (aritmeticos, de comparación, logicos, de asignación, teniarios y bit a bit.
	
	- cadenas de texto y su manipulación
	
	-  declarar variables 
	
	- estructuras de datos: 
		- listas
		- tuplas
		- sets
		- diccinarios
	
	- estructuras de control / ramificación de programas (condicionales: if, elif, else)
	
	- iteraciones: bucles, loops, ciclos : while, for[break and continue]

	- algoritmia
		- Enumeración exhaustiva (adivina y verifica)
		- aproximación de soluciones (epsilon)
		- busqueda binaria
		
		- complejidad de algoritmos
	
	- funciones [metodos]
	
	- recursividad
	
	- objetos y tipos de objetos
	
	- clases
	
	- modulos (son operaciones concretas) [paquetes]
	
	- paradigmas de programación:
			
		* POO (programación orientada a objetos)  --  [Imperativo]
		* PE (preogramación estructurada)  --  [Imperativo]
		* PP (programación procedural o paradigma por procedimientos) -- [Imperativo]
		
		* PF (Programación Funcional)  --  [Declarativo]
		* PL (Programación logica)  --  [Declarativo]
		
		* PDE (programación dirigida por evetos)  --  [eventos]
		* PC (programación concurrente)
		
	- Patrones de diseño
	
		-		

	
	* DB (dataBases: MySQL, SQL, NoSQL, *MariaDB, MongoDB)
	
	* interfaz grafica (PyQT, Tkinter)
	
	* Frameworks (Flask, Django)
	
	* Entrada y salida de datos (consola y desde le front)









	- operadores de comparación (==, !=, >, <, <=, >=)
	- operadores lógicos (and, or, not)

	- ramificación de programas / estructuras de control

		* if (3 formas de ramificar programas condicionales)
		
			1. ~~~py
			if <condición>:
				<expresión>
			~~~
			
			2. ~~~py
			if <condición>:
				<expresión
			else:
				<expresión>
			~~~
			
			3. ~~~py
			if <condición>:
				<expresión
			elif <condición>:
				<expresión
			else:
				<expresión>
			~~~
			
		Example:
		
		~~~py
		num_1 = int(input('Select a interger: '))
		num_2 = int(input('Select a second integer: '))

		if num_1 > num_2:
			print('The first number is greater than the second.')
			
		elif num_1 < num_2:
			print('The second number is greater than the first.')
			
		else:
			print('Both numbers are the same.')
		~~~
		
		* break statement
		
	- iteradores
		- next
		
	- contener errores y documentarlos
	



* Bases:
    - tipos de datos 
    - tipos de Operadores
    - cadenas de texto
    - variables 
    - listas
    - tuplas
    - sets
    - diccinarios
    - estructuras de control (condicionales: if, elif, else)
    - bucles, loops, ciclos : while, for
    - funciones [metodos]
    - clases
    - modulos (son operaciones concretas) [paquetes]
* POO (programación orientada a objetos)
* Entrada y salida de datos ()
* DB (dataBases: MySQL, SQL, NoSQL, *MariaDB, MongoDB)
* interfaz grafica (PyQT, Tkinter)
* Frameworks (Flask, Django)




































## Lenguaje, datos y código <a name='id1'></a>

A lo largo de la historia del ser humano, se ha construido mediante diversos **lenguajes** el entendimiento y la comprensión de lo que sucede a su alrededor desarrollando conseptualización de conseptos de **agrupamiento** y **organización** de la **información** que persibe mediante diversos canales para darle forma a su realidad., permitiendo la comprensión del ser con su entorno y la posibilidad de compartir la misma información y pensamiento a partir del pensamiento lógico de ideas y conseptos que son semanticamente interpretables en un flujo de comunicación donde se distribulle la información adecuada para la comprensión sistemica del entorno.

Una de las caracteristicas del desarrollo del **pensamiento lógico** en el ser humano fue la creación del lenguaje para la comunicación en sociedad, este intercambio complejo de información constituye lo que llamaeremos como **código** linguistico.

El código existe a partir de la necesidad de emitir datos para la comprensión e interpretación de los mismos por medio de un canal de comunicación, crear una estructura de código de comunicación linguistico, y con itensión de ampliar la información que interactuará en este flujo, crea la necesidad de un lenguaje no linguistico y estandarizado sociealmente de facil comprensión, un ejemplo de elo en las artes graficas, son los lenguajes de señalización que estandarizan  la comunicación para su comprención a un nivel global que traspase las limitantes del lenguaje linguistico.

La comunicación metalingüística de ideas y conseptos a travéz de la representación simbólica, describen hechos empíricos de lo que podría considerarse la realidad. Esta simbología y codificación del lenguaje permitío exponenciar y diversificar la comunicación al grado de comunicarnos con circuitos electricos y logica computacional gracias al código y al avance de las ciencias de la tecnologia.

El **codigo** computacional es el equivalente a traducir conseptos complejos de pensamiento lógico en una factorización del mismo problema de forma estructural para la comprensión computacional, abordado un **problema** en común entendimiento entre la lógica computacional y la estructura en la que esta se ejecuta, para la construcción de una **solución** que permita ser implementada en busca de alcanzar y mejorar los objetivos relacionados.

La transferencia de información para lograr la comunicación con componentes logicos requiere de codificar el contenido semántico en forma de expresiones de un lenguaje computacional inerente al componente a programar, la sintaxis del lenguaje codifica algunas de las relaciones de la situación o estado descritos en la información que requerimos transferir al componenete para que se comporte o realice ciertas tareas programables en esta sintaxis.

La semantica hace referencia al significado de los grupos de datos del cual depende estrucutral y logicamente del siginificado y del contenido del mismo, por ejemplo, cuando leemos un texto coherente, que utiliza **palabras** y **oraciones** adecuadas y que le **dan sentido** a lo que leemos esto es semantica de la oración. Utilizar selectores, etiquetas y una escritura semantica permite, además de la comunicación con componentes logicos, la posibilidad de comunicarnos con un computador y poder dar instrucciones y estructurar reglas de comportamiento que realicen tareas más eficientemente que ayuden al bienestar social

***
## Tipos de dato <a name='id2'></a>

| Númerico | dato |
| ---------------------- | ----------------------------- |
| integer                | 1,2,3,999.                    |
| float                  | 3.1416                        |
| double                 | 3.141592653589793238462643383 |

| Caracteres | dato                   |
| ------------------------ | ---------------------- |
| char                     | a,b,c,5                |
| string                   | abcd, abecedario, 9999 |

| Boleano | dato        |
| --------------------- | ----------- |
| bool                  | true, false |

| Nulos / NULL| dato                                   |
| ------------------- | -------------------------------------- |
| NULL                | expresión que no contiene ningún valor |
| undefined           | variable que no ha sido definida       |

## Operaciones matemáticas <a name='id3'></a>

> operacion: :1234: elemento1 --> :hash: simbolo --> :abcd: elemento2 --> :star: resultado

Operación: es un proceso mediante el cual relacionamos entes para obtener resultados.
Matematica: el uso de simbolos para la representación lógica de un ente a relacionar.

En todo proceso el resultado es el objetivo de una operación que nos permitira tomar desiciones en un proceso más complejo.

Una operación se compone de los elementos a los cuales vamos a someter a la operación y un simbolo que definira el resultado definido.

- ¿Que información provee?
- ¿cuantas entradas tiene?
- ¿cuales son las operaciones?
- ¿cual es el objetivo del resultado?
- ¿Para que requiero el resultado?
- ¿que vamos a ahacer con el?
- ¿cual es el tipo de resultado que necesito?

> crear mejores estructuras y mejores flujos de trabjo, sin hacer reprocesos de operaciones.

> como la simbologia de las matematicas basica, juega un papel muy importante en la lógica de los procesos y el estructura del algoritmo.



Dentro de los sistemás numericos existen diversas propiedades a las que tendra que adecuarce al caso de uso de cada logíca.

1. Propiedad conmutativa: el orden de los factores no altera el producto.

```
3 + 4 = 4 + 3
```

2. Propiedad asociativa: cuando se suman o multiplicna 3 o + números, la operación es la misma sin imprtar el modo en que se agrupen los elementos.

```
Suma
3 + 2 + 5 = 10

(3 + 2) + 5
   5    + 5 = 10

3 + (2 + 5)
3 +    7    = 10

Multiplicación
3 x 2 x 5 = 30

(3 x 2) x 5
   6    x 5 = 30

3 x (2 x 5)
3 x   10    = 30

```

3. Propiedad distributiva: la suma de 2 numeros multiplicada por un tercer número es igual a la suma de cada sumando multiplicado por el tercer número.

```
8 x (4 + 15) = (8 x 4) + (8 x 15)
8 x    19    =   32    +   120
    152      =        152
```

4. Propiedad de identidad:

- La suma de cualquier número y cero da como resultado el mismo número. (4 + 0 = 4)
- El producto(resultado de la multiplicación) de cualquier número y uno da como resultado ese mismo número. (4 x 1 = 4)

## Sistemas numericos :1234: <a name='id4'></a>

#### Decimal

Sistema numérico decimal: es el sistema numérico más utilizado en la mayoría de los lenguajes de programación. Utiliza 10 dígitos diferentes (0-9) para representar valores y realizar cálculos.

```
0, 1, 2, 3, 4, 5, 6, 7, 8, 9
```

#### Binario
Sistema numérico binario: también conocido como sistema numérico base 2, utiliza únicamente dos dígitos (0 y 1) para representar valores. Es el sistema numérico fundamental en la electrónica digital y en la programación de sistemas y aplicaciones de bajo nivel.

```
(true, false)
  1  ,   0
```

Decimal a Binario

```
28

28/2 = 14 (0)
14/2 = 7  (0)
7/2  = 3  (1)
3/2  = 1  (1)
1    = 1  (1)

28 (decimal) = 11100 (binario)
```
~~~py
# Successive division method with input from the console.
decimal = int(input("\nSelect a integer number: "))
binary = ""

while decimal > 0:
	""" Numeric conversion from decimal to binary.
    
    Args:
        decimal [int]: decimal integer number. != 0
        
    Returns: 
        binary [str]: string that represents the binary conversion.    
        
    Example:
		
        13 % 2 = 1 [6.5] : {6}
         6 % 2 = 0   [3] : {3}
         3 % 2 = 1 [1.5] : {1}
         1 % 2 = 1 [0.5] : {0}
         0 _____/ # 1101
         
    """
    residuo = decimal % 2
    decimal = decimal // 2
    binary = str(residuo) + binary
    
print(f"The binary number is: {binary}")
~~~

~~~sh

~~~

Binario a decimal

```
11100

0 x (2^0) = 1 x 0  = 0
0 x (2^1) = 2 x 0  = 0
1 x (2^2) = 4 x 1  = 4
1 x (2^3) = 8 x 1  = 8
1 x (2^4) = 16 x 1 = 16
                     |
                   + |
                     v
                     28
```

Suma de binarios

```
0 + 0 = 0
1 + 0 = 1
0 + 1 = 1
1 + 1 = 0 [1]

      1 1 0
    + 0 0 1
    ________
      1 1 1


     [1]
      1 1 0
    + 0 1 1
    ________
  [1] 0 0 1

```

Resta de binarios

```
0 - 0 = 0
1 - 0 = 1
1 - 1 = 0
0 - 1 = 1 [1]


  [1] 1 0 1
    - 0 1 1
    ________
      0 1 0
```

Multiplicación de binarios

```
0 x 0 = 0
0 x 1 = 0
1 x 0 = 0
1 x 1 = 1

      1 1 0
    x   1 0
    ________
      0 0 0
    1 1 0
   _________
    1 1 0 0

```

División de binarios

```
Dividendo
1 0 1 1 0
Divisor
10



    __0_1_0_1_1_
1 0 | 1 0 1 1 0
    - |   | | |
      v   | | |
      1 0 | | |
      --- v v |
      0 0 1 1 |
        - 1 0 |
        ----- v
          0 1 0
          - 1 0
          -----
            0 0
```


## Operadores <a name='id5'></a>
	
Los lenguajes de programación tienen varios tipos de operadores, que se utilizan para realizar operaciones entre variables y valores. Los operadores se dividen en varias categorías, sus usos varian dependiendo del tipo de estructura de dato que se requiere operar, el patron de diseño y el algoritmo que se implemente en la operación.

1. Operadores **lógicos**: se utilizan para combinar expresiones booleanas y devolver un resultado booleano. Los operadores lógicos comunes incluyen el Y lógico (&&), el O lógico (||), y la negación lógica (!).

2. Operadores **aritméticos**: se utilizan para realizar operaciones matemáticas. Los operadores aritméticos comunes incluyen la suma (+), la resta (-), la multiplicación (*), la división (/), el módulo (%), y el operador de incremento (++) y decremento (--).

3. Operadores de **comparación**: se utilizan para comparar valores y devolver un resultado booleano. Los operadores de comparación comunes incluyen la igualdad (==), la desigualdad (!=), mayor que (>), menor que (<), mayor o igual que (>=), y menor o igual que (<=).

4. Operadores de **asignación**: se utilizan para asignar valores a variables. El operador de asignación común es el signo igual (=), aunque algunos lenguajes de programación tienen operadores de asignación adicionales, como +=, -=, *=, /=, y %=.

5. Operadores **bit a bit**: se utilizan para manipular valores a nivel de bits. Los operadores bit a bit comunes incluyen el operador AND (&), el operador OR (|), el operador XOR (^), y el operador de desplazamiento de bits (<< y >>).

6. Operadores **ternarios**: se utilizan para tomar decisiones basadas en una expresión booleana. El operador ternario común es el ? :, que se utiliza en una expresión como "condición ? valor_si_verdadero : valor_si_falso".

Es importante tener en cuenta que algunos lenguajes de programación pueden tener operadores adicionales o diferentes formas de escribir los operadores. Por lo tanto, es importante consultar la documentación del lenguaje de programación que esté utilizando para asegurarse de utilizar los operadores adecuados.

## Lógica del true or false <a name='id6'></a>


En diversos lenguajes de programación, los valores booleanos son True (verdadero) y False (falso). Los valores booleanos se utilizan para evaluar condiciones y tomar decisiones en el flujo de un programa.

Las tablas de verdad son tablas que muestran todas las posibles combinaciones de valores booleanos para una expresión booleana. En Python, los operadores lógicos and, or y not se utilizan para construir expresiones booleanas.

**AND - &&**
| valor1 | operador | valor2 | resultado |
| -- | -- | -- | -- |
| true | and | true | true ( 1 ) |
| true | and | false | false ( 0 ) |
| false | and | true | false ( 0 ) |
| false | and | false | false ( 0 ) |

En esta tabla, A y B son valores booleanos y A and B es el resultado de la operación and entre A y B. La tabla muestra todas las posibles combinaciones de valores booleanos para A y B y el resultado correspondiente de la operación and.

Hay tablas de verdad similares para los operadores or y not. Estas tablas muestran todas las posibles combinaciones de valores booleanos para las expresiones y el resultado correspondiente de la operación.

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



Tablas de verdad

1. Negación: devolvera el valor opuesto al elemento considerado.

| a   | b   |
| --- | --- |
| V   | F   |
| F   | V   |

2. Conjunción: solo será verdadero cuendo ambos elementos considerados son verdaddros, en el resto de casos será falso.

| a   | b   | R   |
| --- | --- | --- |
| V   | V   | V   |
| V   | F   | F   |
| F   | V   | F   |
| F   | F   | F   |

3. Disyunción (débil): será verdadedo cuanso almenos uno de los elementos contrastados es verdadero.

| a   | b   | R   |
| --- | --- | --- |
| V   | V   | V   |
| V   | F   | V   |
| F   | V   | V   |
| F   | F   | F   |

4. Disyunción fuerte: solo será verdadero cunado ambos elementos contrastados sean de diferente valor.

| a   | b   | R   |
| --- | --- | --- |
| V   | V   | F   |
| V   | F   | V   |
| F   | V   | V   |
| F   | F   | F   |

5. Condicional

| a   | b   | R   |
| --- | --- | --- |
| V   | V   | V   |
| V   | F   | F   |
| F   | V   | V   |
| F   | F   | V   |

6. Bicondicional

| a   | b   | R   |
| --- | --- | --- |
| V   | V   | V   |
| V   | F   | F   |
| F   | V   | F   |
| F   | F   | V   |



























































































	
	


## funciones y metodos

En Python, cada tipo de dato tiene su propio conjunto de funciones y métodos disponibles. A continuación se presentan algunos ejemplos:

    Funciones incorporadas: Las funciones incorporadas en Python son aquellas que están disponibles sin necesidad de importar ningún módulo. Algunas de estas funciones incluyen print(), len(), range(), input(), entre otras.

    Métodos de cadenas de caracteres: Las cadenas de caracteres en Python tienen muchos métodos incorporados para manipular y trabajar con ellas. Algunos de estos métodos incluyen upper(), lower(), strip(), split(), join(), entre otros.

    Métodos de listas: Las listas en Python también tienen muchos métodos incorporados para manipular y trabajar con ellas. Algunos de estos métodos incluyen append(), insert(), remove(), pop(), sort(), entre otros.

    Métodos de diccionarios: Los diccionarios en Python tienen varios métodos incorporados para trabajar con ellos. Algunos de estos métodos incluyen keys(), values(), items(), get(), update(), entre otros.

    Funciones matemáticas: Python tiene una gran cantidad de funciones matemáticas incorporadas que se pueden utilizar para realizar cálculos complejos. Algunas de estas funciones incluyen abs(), round(), pow(), entre otras.

Es importante destacar que estos son solo algunos ejemplos de las funciones y métodos disponibles en Python. Cada tipo de dato tiene su propio conjunto completo de funciones y métodos disponibles, y existen muchas bibliotecas de Python adicionales que proporcionan aún más funciones y métodos útiles para una amplia variedad de aplicaciones.




** Desarrollo de producto

[usabilidad, accesibilidad] --> ux

## flotantes

Hasta ahora hemos verificado igualdad con el operador ==. Sin embargo, cuando estamos trabajando con flotantes es mejor asegurarnos que los números sean aproximados en vez de idénticos. Por ejemplo x < 1.0 and x > 0.99999.



## comparación POO con procedural

| Procedural | Orientada a objetos |
| -- | -- |
| Procedimiento | Método |
| Registro | Objeto |
| Módulo | Clase |
| Lllamada a procedimeitno | Mensaje |


## POO

1. las clases son a moldes de un objeto a proyectar dentro del flujo del código.
2. los objetos serán las instancias o entidad con sus propias propiedades y comportamientos únicos. es un ejemplar de la clase.
3. Una propiedad o atributo es una variable que almacena datos relacionados entre objetos.
4. Un metodo es una función que define el comprtamiento del objeto.
5. La abstracción es aislar las caracteristicas(porpiedades, atributos) de un objeto.
6. La herencia permite que de una clase o instancia se pueda subcrear una instancia dependiente hija que hereda atributos de la misma, pero pueden tener comportamientos diferentes.
7. El encapsulameinto permite aislar u ocultar un fragmetno de código de una instancia o una clase para no afectar el estado  de otros objetos externos.
8. Polimorfismo es la capsidad de los objetos de diferentes clases de responder al mismo mensaje o metodo de una manera diferente.


## programación funcional

> utiliza a las funciones para 

## programación concurrente

> concurrencia y paralelismo
> secuencias A-->B-->C  concurrencia A-->E<-->B-->C





















	
- Frontend
	- 
	



## Index directory

- design directory

- dev directory

- economy directory

- language directory

- management directory

- marketing directory

---

~~~sh
Los archivos **sintaxis.md** presentarán la estructura básica con la cual comenzaremos a implementar. Los archivos tipo **exercisex.php** o **exercise.html** contendrán fragmentos de código y pruebas de implementación a una estructura mayor, archivo el cual tendremos que ejecutar en la terminal de comandos. Los archivo tipo **index.php** y **server.php** contendrán la estructura de la implementación con respuesta del servidor, archivo el cual se tendrá que desplegar según las características del servidor utilizado para desplegar.
~~~

- **dev.md** - este recurso contendra la información recabada de ejercicios, notas y fuentes en tema de desarrollo de servicio y/o producto desplegado con código.

- **design.md** - este recurso contendra la información recabada de ejercicios, tutoriales y recursos en tema de diseño de servicio y/o producto digital.

- **management.md** - este recurso contendra estructuras y metodologías de gestión de recursos en el desarrollo de un servicio o producto digital.

PHP.Directory

1. sintaxis.md --> contiene la sintaxis basica del lenguaje contenido en el directorio.  

2. exercise01.php --> hora expresada en segundos.

---

## Dentro del contenido de este repositorio se documentan procesos como: 

### Gestión de desarrollo de ramas en Git y GitHub :octocat:

~~~
 main ----------- v ----------- > ------------ > ------------ OK
   |              |                                            | 
   |              |                                            | 
   +           develop                                         +
   |              |                                            |
   |              |                                            |
   +              > --------- develop ------ develop           +
   |                             |              |              |    
   |                             v              v              |
   |                             |              |              |  
features -------- > --------- relase ------- relase ------- relace
             |                   |                             |
             +                   +                             |
             |                   |                             |
         features ----------- hotfix ---------- + ---------- hotfix

~~~
> La *rama*  **main**, como estándar, será la rama en la que se desplegara la versión a producción (*final* / **v1.0**), en la *rama* **develop** será donde se respaldarán textos tomados, sobre el proceso de aprendizaje, con un estilo de escritura a modo de notas a borrador que servirán de base para la estructuración del despliegue a producción (*desarrollo* / **v0.0.11**), en la *rama* **relase** se ejecutan pruebas de **usuario/usabilidad** y **rendimiento/revisión** para su optimización del despliegue en main (*prueba* / **v0.1**), para los arreglos y correcciones en la sintaxis y la ortografía del texto en la version *relase* se usara la *rama* **hotfix** (*arreglo/corrección* / **v0.1H** ))  para agregar características a los despliegues de *main, relase y hotfix* solicitadas por el usuario/lector se usará la *rama* **features** (*característica* / **V0.1F**). 

### FLUJO DE DESARROLLO DE PRODUCTO DIGITAL <a name="id2"></a>
~~~
	** PROCESO CREATIVO
	
		-- DOCUMENT ( ... ) --
			       |
			       v
		- ~~moodboard~~
		- ~~brefing~~
		- wireframe
		- ~~guideline~~
		- ~~UI template~~
		- Prototype / fist preview " (Alpha version)
		- file versioning
		- * documentation
		- ~~component specs bank~~
		- ~~UI kit / documentation~~ 
		- ~~atomic design~~ " (Beta version)
		- Deploy " (RC relase version)
		- PRODUCCIÓN
~~~

![Flujo de trabajo](https://i.imgur.com/c4cfDX9.png)





Con todo el :heart: y como antecedente de mi recorrido profecional en este multiverso :space_invader: tecnológico. 

