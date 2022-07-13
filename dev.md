# Dev :keyboard:

### :floppy_disk: Respaldo de notas deribadas de la curva de aprendisaje en habilidades de desarrollo y programación en código.

## Index.

1. [Datos y su interacción en el código](#id1)

2. [Código](#id2)

3. [Git & GitHub](#id3)
<p align=center >
  <a><img src='https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white' /></a>&nbsp;&nbsp;

  </p>

3. [Bases de datos](#id4)
   - Base de datos relacionales.
   - Mysql
   <p align=center >
     <a><img src='https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white' /></a>&nbsp;&nbsp;

  </p>

## Datos y su interacción la sociedad <a name='id1'></a>

A lo largo de la historia el ser humano para darle entendimiento y comprensión a lo que sucede en su **entorno** desarrollo habilidades de agrupamiento y organización de la **información** que persibe en su ambiente. Esto ayuda a la comprensión de la interacción con su entorno y la posibilidad de compartir la misma información y pensamiento a partir del pensamiento lógico de ideas y conseptos que son semanticamente interpretables en el colectivo donde se distribulla la información.

Una de las caracteristicas del desarrollo del **pensamiento lógico** en el ser humano fue la creación del lenguaje para la comunicación en sociedad, este intercambio complejo de información constituye lo que llamaeremos como **código** linguistico.

El código existe a partir de un emisor con la intención de comunicar y trasferir datos para la comprensión e interpretación de un reseptor por medio de un canal de comunicación, esto permite además del codigo de comunicación linguistico, y con itensión de ampliar la información adquirida del entorno, un lenguaje no linguistico y estandarizado sociealmente de facil comprensión, un ejemplo de el es, en artes graficas, los lenguajes de señalización que estandarizan el lenguaje para su comprención a un nivel global que traspase las limitantes del lenguaje linguistico.

La comunicación en función metalingüística de ideas y conseptos a travéz de una representación simbólica describen hechos empíricos de lo que podría considerarse la realidad, esta simbología y codificación del lenguaje permitío exponenciar y diversificar la comunicación a tal grado de de comunicarnos con circuitos electricos y logica computacional gracias al código y al avance de la industria tech ha permitido alcanzar.

## Codigo <a name='id2'></a>

El codigo computacional es la técnica de traducir conseptos complejos de pensamiento lógico a una factorización del del mismo, abordado un **problema** en común afectación social, para la creación de una **solución** que permita ser implementada en diversas áreas al alcance del ecosistema humano afectando, por ser una red compleja de ecosistemas interconectados, a todas las especies en el planeta.

La transferencia de información para lograr la comunicación con componentes logicos requiere de codificar el contenido semántico en forma de expresiones en un lenguaje inerente al componente a programar, la sintaxis del lenguaje codifica algunas de las relaciones de la situación o estado descritos en la información que requerimos transferir al componenete para que se comporte o realice ciertas tareas programables con esta sintasis.

La semantica hace referencia a al significado de los grupos de datos que dependen estrucutralmente y logicamente del siginificado del contenido del mismo, por ejemplo, cuando leemos un texto coherente, que utiliza **palabras** y **oraciones** adecuadas y que le **dan sentido** a lo que leemos esto es semantica de la oración. Utilizar selectores, etiquetas y una escritura semantica permite, además de la comunicación con componentes logicos, la posibilidad de comunicarnos con un computador y poder dar instrucciones y estructurar reglas de comportamiento que realicen tareas más eficientemente que ayuden al bienestar social

## Maquetación en CSS

C - Cascading
S - Style
S - Sheet

(hojas de estilo en cascada)

Estructura de una declaración:

```
h1 {
  color: pink;
}

:: Donde - h1 - representa el selector que conecta al html, - color - es la propiedad a modificar y - pink - es el valor que le asignaremos a la propiedad solicitada.
```

- Selectores básicos:

| Selector         | estructura                |
| ---------------- | ------------------------- |
| de **TIPO**      | div { ... }               |
| de **CLASE**     | .elemento { ... }         |
| por **ID**       | #id_del_elemento { ... }  |
| por **ATRIBUTO** | a [ href= " ... "]{ ... } |
| **UNIVERSAL**    | \* { ... }                |

- Selectores combinados

| Selector            | estructura      |
| ------------------- | --------------- |
| DECENDIENTES        | div p { ... }   |
| HIJO DIRECTO        | div > p { ... } |
| ELEMENTO ADYASENTE  | div + p { ... } |
| GENERAL DE HERMANOS | div ~ p { ... } |

- Slectores y sus pseudoclas y pseudoelementos

| PSEUDOCLASES       | PSEUDOELEMENTOS      |
| ------------------ | -------------------- |
| **: active**       | **: : after**        |
| **: focus**        | **: : before**       |
| **: hover**        | **: : first-letter** |
| **: nth-child(n)** | **: : placeholder**  |

- Espesifisidad

> toda declaración que se encuentre en la parte baja del código se sobre escribiran sobre las que se encuentre arriba por lo cual predominara la declarión que se encuentre más abajo del código.

- RELEVANCIA DE CLASES

| especificidad | descripción                      |
| ------------- | -------------------------------- |
| **X,0,0,0,0** | ! important                      |
| **0,X,0,0,0** | estilos de línea STYLE tarjet    |
| **0,0,X,0,0** | # ID                             |
| **0,0,0,X,0** | clases, atributos y pseudoclases |
| **0,0,0,0,X** | elementos y pseudoelementos      |
| **0,0,0,0,0** | selentor universal               |

```
#id h1 ::first-letter
        1 0 0  #id (id)
        0 0 1  h1 (elemento)
        0 0 1  ::first-letter (pseudoelemento)
    =   1 0 2  -- espesificidad alta --

p.sidemenu div::hover
        0 0 1  p (elemento)
        0 1 0  .sidemenu (clase)
        0 0 1  div (elemento)
        0 1 0  :hover (speudoclase)
    =   0 2 2  -- espesificidad baja --


```

```
li             {} /* specificity = 0,0,0,1 */
li:first-child {} /* specificity = 0,0,1,1 */
li:first-line  {} /* specificity = 0,0,0,2 */
li.red         {} /* specificity = 0,0,1,1 */
```

:: Ver también:

[pseudoclases page-list](https://css-tricks.com/pseudo-class-selectors/) <br>
[pseudoelementos page-list](https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-elements)

## Git & GitHub.

### Notación de inducción a **Markdown** y a la escritura técnica, estructurando su desarrollo haciendo uso de la ramificación de :octocat: Git como se muestra en el siguiente diagrama.

```
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

```

> La _rama_ **main**, como estándar, será la rama en la que se desplegara la versión a producción (_final_ / **v1.0**), en la _rama_ **develop** será donde se respaldarán textos tomados, sobre el proceso de aprendizaje, con un estilo de escritura a modo de notas a borrador que serviran de base para la estructuración técnica del despliege a produccion (_desarrollo_ / **v0.0.11**), en la _rama_ **relase** se ejecután pruebas de **usuario/usabilidad** y **rendimiento/revisión** para su optimización del despliegue en main (_prueba_ / **v0.1**), para los arreglos y correcciones en la sintaxis y la ortografía del texto en la version _relase_ se usara la _rama_ **hotfix** (_arreglo/corrección_ / **v0.1H** )) para agregar caracteristicas a los despliegues de _main, relase y hotfix_ solicitadas por el usuario/lector se usará la _rama_ **features** (_caracteristica_ / **V0.1F**).

## Normalización de base de datos

El proceso de organización y estructura de las tablas que serán relacionadas, para evitar la redundancia y complejidad de ralación con los datos, se realiza el proceso de creación de una base de datos óptima llamado **normalización de data o de base de datos**.

Caracteristicas de normalizar una base de datos:

- Evitar la redundancias de datos
- Proteger la integridad de los datos
- Evitar problemas de actualización de los datos en las tablas

Existen 3 tipos o niveles de normalización de data denominados **Forma Normal 1,2 y 3**.

## Teoría de conjuntos

- LEFT JOIN
- RIGHT JOIN

## Bases de datos <a name='id1'></a>

### Entidades y atributos.

Una entidad es la representación de un objeto o la abstracción de el, objetos que contienen implicitamente atributos que contienen valores los cuales son particulariedades y que les hacen ser un objeto espesifico.

> En el siguiente diagrama se ejemplifica los atributos particulares de la entidad auto:

```
    auto
      |_________________________________________________________
      |             |          |              |                |
   llantas        motor     volante        modelo          matricula
(multivaluado) (compuesto)             (identificador)  (identificador)
                    |
                    |
             _______|_______
            |               |
        Pistones          bujias
```

### Operadores relacionales o de compración.

- igual a: **=**
- distinto a: **!=**
- menor que: **<**
- mayor que: **>**
- menor o igual que: **<=**
- mayor o igual que: **>=**

### Tipos de datos

| Tipo       | Mysql        | Descrition                                                                  |
| ---------- | ------------ | --------------------------------------------------------------------------- |
| :binary    | blob         | Alamcena datos como imágenes, audio o películas                             |
| :boolean   | tinyint(1)   | Almacena valores 1 y 0, true or false, verdadero o falso.                   |
| :date      | date         | Almacena datos tipo fecha                                                   |
| :datatime  | datetime     | Almacena datos tipo fecha y tipo hora                                       |
| :decimal   | decimal      | Almacena datos numericos decimales.                                         |
| :float     | float        | Almacena datos numericos exponeciales muy grandes o muy pequeños            |
| :integer   | int(11)      | Almacena datos numericos enteros                                            |
| :string    | varchar(255) | Almacena cadenas de texto relativamente cortas de nos mas de 255 caracteres |
| :text      | text         | Almacena cadenas de texto estensas, textos muy largos                       |
| :time      | time         | Almacena datos tipo tiempo / hora                                           |
| :timestamp | datetime     | Almacena datos tipo fecha y tipo hora                                       |

## Lenguaje de definición de datos **DDL, DML, DCL y TCL**.

El **lenguaje de definición de datos (DDL)**, permite crear y modificar la estructura de una base da datos con las siguinetes sentencias:

| Sentencia    | Descripción                                                                                                                                            |
| ------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **CREATE**   | Crear nuevas tablas y esquemas en la **BD**                                                                                               |
| **ALTER**    | Modifixa la estructura de una tabla haciendo uso de orros comandos como: **ADD**, **DROP**, **ADD PRIMARY KEY()**, **ADD FOREIGN KEY()**, entre otros. |
| **DROP**     | Elimina columnas, tablas e indices dentro de la **BD**.                                                                                               |
| **TRUNCATE** | Se emplea para eliminar todos los registros de una tabla                                                                                               |
| **COMMENT**  | Empleado para agregar comentarios al diccionario de datos                                                                                      |
| **REANAME**  | Se utiliza para realizar cambios en el nombre de objetos dentro de la **BD** |
| **USE**      | Conecta la base de datos que se le indique.                                                                                                            |

El **lenguaje de manipulación de datso (DML)** pemite referenciar acciones que interactuen con los datos dentro de la **BD**.

| Sentencia    | Descripción                                                                                                                                            |
| ------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **SELECT**   | Consulta y regresa consultas de la **DB** |
| **INSERT**   | Inserta información en la **DB**.                                                                                                                      |
| **UPDATE**   | Modifica y actualiza la información en la **DB**.                                                                                                      |
| **DELETE**   | Elimina ragistros de la base de datos.                                                                                                                 |

El **lenguaje de control de datos (DCL)** permite crear **roles**, **permisos** e **integridad** referencial, así como otorgar cotnrol a control de acceso a la **BD**.

| Sentencia    | Descripción                                                                                                                                            |
| ------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **GRANT**   | Se utiliza para otorgar privilegios de acceso de usuario a la **BD**.                                     |
| **REVOKE**   | Se utiliza para revertir privilegios de acceso otorgados por la sentencia **GRANT** |

El **lenguaje de control transaccional (TCL)** 


### Tabla de comando para la manipulación de bases de datos basados en **SQL**.

| Comandos     | Descripción                                                                                                                                            |
| ------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **CREATE**   | Crear tablas o nuevos esquemas de la **BD**.                                                                                                           |
| **DROP**     | Elimina columnas, tablas y **DB**.                                                                                                                     |
| **Alter**    | Modifixa la estructura de una tabla haciendo uso de orros comandos como: **ADD**, **DROP**, **ADD PRIMARY KEY()**, **ADD FOREIGN KEY()**, entre otros. |
| **DESCRIBE** | Muestra la estructura de las tablas de **DB**.                                                                                                         |
| **SHOW**     | Muestra y enlista BD y tablas.                                                                                                                         |
| **USE**      | Conecta la base de datos que se le indique.                                                                                                            |
| **SELECT**   | Consulta y regresa la **DB**                                                                                                                           |
| **INSERT**   | Inserta información en la **DB**.                                                                                                                      |
| **UPDATE**   | Modifica y actualiza la información en la **DB**.                                                                                                      |
| **DELETE**   | Elimina ragistros de la base de datos.                                                                                                                 |

| \*\*

## Query

> creación de un quuery, como convertir una pregunta en u query puntos a estimar:

**De pregunta a un Query:**

    SELECT: Lo que quieres mostrar

    FROM: De dónde voy a tomar los datos

    WHERE: Los filtros de los datos que quieres mostrar

    GROUP BY: Los rubros por los que me interesa agrupar la información

    ORDER BY: El orden en que quiero presentar mi información

    HAVING: Los filtros que quiero que mis datos agrupados tengan

## Mysql

Mysql comandline es una herramienta para el uso de mysql desde la terminal.

> comentarios en linea: **_--- comentario ..._** o **_# comentario ..._**
> comentarios de varias lineas **_/\* comentario \*/._**

> para entrar a mysql comadline usaremos el comando administrador: **_sudo mysql_**, el cual solicitara los permisos de administradadr para iniciar.

> el comando **_show databases_** mostrara las bases de datos por defecto al instalar mysql y las bases de datos que fueron creadas por el ususario.

> el comando **_use (nombre_database)_** se usara para entrar a la base de datos y para visualizar las tavlas usaremos el comando **_show tables_**

> al crear una base de datos se usara el comando **_create database (nombre_nuevo_databese)_**.

> para asignar un nombre a una tabla nueva dentro de una base de datos recien creada usaremos elcomando **_use (nombre_nueva_databes)_**.

> para crear tablas nuevas dentro de la nueva base de datos creada se usara **_create table (nombre_tabla)_**. Revisar entidades y relaciones y normalizar tablas para este paso.

> Ejemplo de creación de tabla **practica** en mysql

```

mysql> use practica;
Database changed
mysql> show tables;
Empty set (0.00 sec)

mysql> create table Departamento(
    -> ID_Departamento int,
    -> Nombre varchar(80) not null,
    -> primary key(ID_Departamento)
    -> );
Query OK, 0 rows affected (1.70 sec)

mysql> create table Empleado(
    -> ID_Empleado int primary key,
    -> Primer_Nombre varchar(50) not null,
    -> Segundo_Nombre varchar(50),
    -> Apellido_Paterno varchar(50) not null,
    -> Fecha_Nacimiento date not null,
    -> Fecha_Registro date not null,
    -> ID_Departamento int not null,
    -> foreign key(ID_Departamento) references Departamento(ID_Departamento)
    -> );
Query OK, 0 rows affected (1.39 sec)

mysql> create table Acceso(
    -> ID_Empleado int not null,
    -> Usuario varchar(8) not null,
    -> Clave varchar(8) not null
    -> forenign key(ID_Empleado) references Empleado(ID_Empleado)
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'forenign key(ID_Empleado) references Empleado(ID_Empleado)
)' at line 5
mysql> create table Acceso( ID_Empleado int not null, Usuario varchar(8) not null, Clave varchar(8) not null foreign key(ID_Empleado) references Empleado(ID_Empleado) );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'foreign key(ID_Empleado) references Empleado(ID_Empleado) )' at line 1
mysql> show tables;
+--------------------+
| Tables_in_practica |
+--------------------+
| Departamento       |
| Empleado           |
+--------------------+
2 rows in set (0.01 sec)

mysql> create table Acceso(
    -> ID_Empleado int not null,
    -> Usuario varchar(8) not null,
    -> Clave varchar(8) not null,
    -> foreign key(ID_Empleado) references Empleado(ID_Empleado)
    -> );
Query OK, 0 rows affected (1.18 sec)

mysql> show tables;
+--------------------+
| Tables_in_practica |
+--------------------+
| Acceso             |
| Departamento       |
| Empleado           |
+--------------------+
3 rows in set (0.01 sec)

```

> el comando para insertar datos en tablas usaremos el comando: **_insert into (nobre_tabla_creada)_**: ejemplo:

```
INSERT INTO peaple(last_name, first_name, address, city)
VALUES ('Hernandez', 'Laura', 'Calle 21, Wall Street', 'Monterrey');
```

> PAra visualizar el contenido ingresado a una tabla usaremos el comando **SELECT \* FROM - nombre_tabla -** ejemplo:

```
SELECT *  FROM Empleados;

SELECT fist_name, last_name
FROM peaple;
```

> Para realizar cambios en datos ya existentes en una tabla se ura el comando **UPDATE** ejemplo:

```
UPDATE peaple
SET last_name='Chavez',city='Merida'
Where person_id=1;
```

Para borrar el contenido espesificado de una tabla se usara el comando **DELETE FROM - nombre_tabla-**

```
DELETE FROM peaple
WHERE person_id=1;
```

> Para destruit o soltar una tabla se utilizara el comando **DROP TABLE - nombre_tabla -**.

```
DROP TABLE people;
```

modificador **ON** para relacionar las llaves primarias con las foraneas.

## Operadores relacionales

### Sentencia **SELECT**

### Sentencia **FROM & JOIN**

La sentencia **From** es una instrucción para indicar de donde requerimos que sean llamados los datos, los cuales al estar normalizada la estructura de la base de datos la disponemos en diferentes tablas, con esta sentencia unimos los resultados solicitados desde diferentes tablas con la sentencia **JOIN** y la estructura de tipos de unión basada en los _diagramas de venn_ y la _teoría de conjuntos_ que nos ayudara a filtrar las busquedas que realisemos con **SELECT**.

Estructura:

```
SELECT *
FROM tabla1
   LEFT JOIN tabla2 ON tabla1.llavePK = tabla2.llaveFK_id
WHERE tabla2.llaveFK_id IS NULL;

- SELECT es la sentencia que indica la  consulta o proyección de la base de datos, el indicador *  relaciona como un "todo" o  "traer todos los campos" que el query regrese.
- FROM es la sentencia que indica el origen de la consulta que realizamos con SELECT.
- LEFT relaciona la busqueda en las tablas por izquierda o derecha tomando como referencia izquierda la tabla que se señale en la sentencia FROM y la derecha la tabla que se señale posterior a LEFT/RIGHT JOIN.
- JOIN según la teoría de conjuntos y el diagrama de venn, es el conector con el origen de tabla que se le asigne en FROM, con los campos de filtración de la segunda tabla señalada enseguida de JOIN y que nos regresa información del query.
- ON este modificador relaciona las llaves primarias y foraneas de las tablas.
```

ejemplos de uso de query:

```
SELECT *
FROM tabla1
    LEFT JOIN tabla2 ON llavePK(tabla1).id = tabla2.llaveFK_id;

:: Esta sentencia nos regresara **todo** lo que este en la tabla1 (LEFT) que se relacione con la llave foranea_id de la tabla 2 y la llave primaria de la tabla1.
```

```
SELECT *
FROM tabla1
    RIGHT JOIN tabla2 ON llavePK(tabla1).id = tabla2.llaveFK_id;

:: Al intercambiar el modificador LEFT por RIGHT la sentencia nos regresara todo lo que exista en la tabla2 y que ADEMÁS se relacione con su llave foranea FK y la llave primaria PK de la primera tabla descrita.
```

```
SELECT *
FROM tabla1
    LEFT JOIN tabla2 ON llavePK(tabla1).id = tabla2.llaveFK_id
WHERE tabla2.llaveFK_id IS NULL;

:: Esta sentencia nos regresara todo en la tabla1 que se relacione con su llave primaria y la llave foreane de la segunda tabla, mientres cumpla con el paramentro NULL en el campo de llave foranea de la segunda tabla, quiere desir que no exista tal registro o este nulo.
```

```
SELECT *
FROM tabla1
    RIGHT JOIN tabla2 ON llavePK(tabla1).id = tabla2.llaveFK_id
WHERE tabla2.llaveFK_id IS NULL;

:: Al intercambiar el modificador LEFT por RIGHT la sentencia nos regresara todo lo que exista en la tabla2 y que ADEMÁS se relacione con su llave foranea FK y la llave primaria PK de la primera tabla descrita que cumplan con un campo nulo cuando la tabla 2 no tenga dicho registro en su llave primaria PK.
```

```
SELECT *
FROM tabla1
    INNER JOIN tabla2 ON llavePK.id = tabla2.llaveFK_id;

:: el modificador INNER traera de ambas tablas SOLO lo que este relacionado entre la llave primaria PK de la primera tabla con lo que este relacionado al la llave foranea de la segunda tabla.
```

```
SELECT *
FROM tabla1
    LEFT JOIN tabla2 ON llavePK(tabla1).id = tabla2.llaveFK_id;
UNION
SELECT *
FROM tabla1
    RIGHT JOIN tabla2 ON llavePK(tabla1).id = tabla2.llaveFK_id;

:: El modificador UNION une las dos sentencias haciendo posible que en una consulta diferencial se puedan obtener la totalidad de ambos origenes de datos
```

```
SELECT *
FROM tabla1
    LEFT JOIN tabla2 ON llavePK(tabla1).id = tabla2.llaveFK_id;
WHERE tabla2.llaveFK_id is NULL
UNION
SELECT *
FROM tabla1
    RIGHT JOIN tabla2 ON llavePK(tabla1).id = tabla2.llaveFK_id;
WHERE tabla2.llaveFK_id is NULL

:: Al haceer uso de los modificadores UNION y WHERE se crea una sentencia donde las se puede solicitar todo de las tablas excluyendo las que compartan datos relacionados entre ellas.
```

```
SELECT *
    FROM tabla1
WHERE llavePK(int)(tabla1) <= 50;
:: La sentencia WHERE nos ayuda a filtrar por campos los resultados de las consultas solicitadas.
```

```
SELECT *
    FROM tabla1
WHERE campo1(text)(title) LIKE '%palabra_descriptiva%';
:: AL agregar a la sentencia el modificados LIKE podremos hacer busquedas de cadenas de texto que incluyan la *palabra_clave* en el WHERE solicitado. Los sigonos % indican busqueda con contenido a la izquierda o derecha.

            %termina_en

            %en_medio_de%

            inicia_con%
```

```
SELECT *
    FROM tabla1
WHERE campo2(datetime)(fecha) BETWEEN '2022-01-01' AND '2025-12-31';
:: En el manejo de datos tipo fecha la sentencia WHERE es combinada con modificadores como BETWEEN y AND podemos filtrar la consulta entre diferentes rangos de datos dentro de una base de datos.
```

```
SELECT *
    FROM tabla1
WHERE YEAR(campo2[datetime][fecha]) BETWEEN '2022' AND '2024';
:: A la sentencia WHERE se le pueden agregar modificadores como YEAR & MONTH, además de BETWEEN & AND para hacer una seleción de datos tipo fecha en la consulta solicitada.
```

```
SELECT *
    FROM tabla1
WHERE llaveFK_id IS NULL;

:: En la sentencia WHERE en uso de datos nulos o NULL nos referenciara en la consulta campos vacios de la base de datos.
```

```
SELECT *
    FROM tabla1
WHERE llaveFK_id IS NOT NULL;

:: El modificador NOT NULL regresara como consulta los campos que no estén nulos, es decir los que si contengan datos, referenciando siempre los campos vacios como puntos de busqueda.
```

```
SELECT *
    FROM tabla1
WHERE llaveFK_id IS NOT NULL
    AND estatus= áctivo'
    AND id < 50
    AND categoria_id=2;

:: La sentencia WHERE usando como referencia inicial los campos nulos, puede regresar en su consulta campos que no esten nulos y que contengan datos, además an integrar en modificador AND podemos incluir multiples campos de filtrado a partir de la sentencia iniciar para reducir y hacer más espesificos los datos devuletos.
```

```
SELECT estatus, COUNT(*)post_quantity
    FROM posts
    GROUP BY estatus;
```

```
mysql> SELECT estatus, COUNT(*)post_quantity
    ->     FROM posts
    ->         GROUP BY estatus;
+----------+---------------+
| estatus  | post_quantity |
+----------+---------------+
| activo   |            17 |
| inactivo |             5 |
+----------+---------------+
2 rows in set (0.02 sec)

:: La sentencia GROUP BY nos ayuda a grupar y regresar un conteo numerico de su solicitud.
```

```
SELECT YEAR(fecha_publicacion) AS post_year, COUNT(*) AS post_quantity
FROM posts
GROUP BY post_year;

+-----------+---------------+
| post_year | post_quantity |
+-----------+---------------+
|      2030 |             1 |
|      2025 |             4 |
|      2023 |             5 |
|      2021 |             2 |
|      2022 |             4 |
|      2026 |             1 |
|      2024 |             2 |
|      2028 |             1 |
|      2029 |             2 |
+-----------+---------------+
9 rows in set (0.17 sec)

SELECT MONTHNAME(fecha_publicacion) AS post_month, COUNT(*) AS post_quantity
FROM posts
GROUP BY post_month;

+------------+---------------+
| post_month | post_quantity |
+------------+---------------+
| April      |             5 |
| May        |             3 |
| December   |             4 |
| January    |             3 |
| June       |             1 |
| October    |             2 |
| November   |             1 |
| March      |             1 |
| September  |             1 |
| August     |             1 |
+------------+---------------+
10 rows in set (0.00 sec)
```

```
mysql> SELECT id,titulo FROM posts ORDER BY id limit 5;
+----+---------------------------------------------------+
| id | titulo                                            |
+----+---------------------------------------------------+
| 43 | Se presenta el nuevo teléfono móvil en evento     |
| 44 | Tenemos un nuevo auto inteligente                 |
| 45 | Ganador del premio Nobel por trabajo en genética  |
| 46 | Los mejores vestidos en la alfombra roja          |
| 47 | Los paparatzi captan escándalo en cámara          |
+----+---------------------------------------------------+
5 rows in set (0.00 sec)

:: La sentencia ORDER BY ordena el resultado de la consulta e usa modificadores como ASC(ascendente) DESC(descendiente) LIMIT(limitara la cantidad de resultados en la petición).
```

```
mysql> SELECT MONTHNAME(fecha_publicacion)AS post_month,estatus,COUNT(*)AS post_quantity
    -> FROM posts
    -> GROUP BY estatus,post_month
    -> HAVING post_quantity > 2
    -> ORDER BY post_month;
+------------+---------+---------------+
| post_month | estatus | post_quantity |
+------------+---------+---------------+
| April      | activo  |             4 |
| December   | activo  |             3 |
+------------+---------+---------------+
2 rows in set (0.00 sec)

:: La sentencia HAVING agrupa tuplas creadas de la únion de varios valores en una tupla o agrupacion de valores creados en el AS, esto WHERE no lo puede ejecutar al hacer una consulta a agrupaciones de valores diferentes de la base de datos, lo que si puede relacionar son los campos ya establecidos en la base de datos.
```

```
mysql> SELECT new_table_projection.date, COUNT(*) AS posts_count
    -> FROM(
    -> SELECT DATE(MIN(fecha_publicacion)) AS date, YEAR(fecha_publicacion) AS post_year
    -> FROM posts
    -> GROUP BY post_year
    -> )AS new_table_projection
    -> GROUP BY new_table_projection.date
    -> ORDER BY new_table_projection.date;
+------------+-------------+
| date       | posts_count |
+------------+-------------+
| 2021-10-09 |           1 |
| 2022-04-11 |           1 |
| 2023-01-10 |           1 |
| 2024-04-03 |           1 |
| 2025-01-09 |           1 |
| 2026-06-04 |           1 |
| 2028-10-10 |           1 |
| 2029-01-10 |           1 |
| 2030-04-05 |           1 |
+------------+-------------+
9 rows in set (0.00 sec)

:: El consepto de NESTED QUERIES o AGUJERO DE CONEJO, es el nombre que se le otorga a una consulta que consta de un query que tiene dentro de el otro u otros querys que otrogaran tablas o resultados de los que depende la primera consulta o consulta padre.
```

```
mysql> SELECT *
    -> FROM posts
    -> WHERE fecha_publicacion=(
    -> SELECT MAX(fecha_publicacion)
    -> FROM posts
    -> );

:: Esta sentencia nos regresara la ultima inserción de datos que tenga relaciín con el MAX de fecha_publicación.
```
