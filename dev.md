# Dev :keyboard:

### Respaldo de notas creadas durante la adquosición de habilidades en desarrollo web y programación en código.

## Index.

1. [Git & GitHub](#id2)
  <p align=center >
    <a><img src='https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white' /></a>&nbsp;&nbsp;
     
  </p>

2. [Bases de datos](#id1)
  - Base de datos relacionales.
  - Mysql
  <p align=center >
    <a><img src='https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white' /></a>&nbsp;&nbsp;
     
  </p>

## Git & GitHub.

###  Notación de inducción a __Markdown__ y a la escritura técnica, estructurando su desarrollo haciendo uso de la ramificación de :octocat: Git como se muestra en el siguiente diagrama.

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
> La *rama*  **main**, como estándar, será la rama en la que se desplegara la versión a producción (*final* / **v1.0**), en la *rama* **develop** será donde se respaldarán textos tomados, sobre el proceso de aprendizaje, con un estilo de escritura a modo de notas a borrador que serviran de base para la estructuración técnica del despliege a produccion (*desarrollo* / **v0.0.11**), en la *rama* **relase** se ejecután pruebas de **usuario/usabilidad** y **rendimiento/revisión** para su optimización del despliegue en main (*prueba* / **v0.1**), para los arreglos y correcciones en la sintaxis y la ortografía del texto en la version *relase* se usara la *rama* **hotfix** (*arreglo/corrección* / **v0.1H** ))  para agregar caracteristicas a los despliegues de *main, relase y hotfix* solicitadas por el usuario/lector se usará la *rama* **features** (*caracteristica* / **V0.1F**).







## Bases de datos <a name='id1'></a>

### Entidades y atributos.

Una entidad es la representación de un objeto o la abstracción de el, objetos que contienen implicitamente atributos que contienen valores los cuales son particulariedades y que les hacen ser un objeto espesifico.


> En el siguiente diagrama se ejemplifica los atributos particulares de la entidad auto:

~~~
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
~~~

### Tipos de datos

| Tipo | Mysql | Descrition |
| -- | -- | -- |
| :binary | blob | Alamcena datos como imágenes, audio o películas |
| :boolean | tinyint(1) | Almacena valores 1 y 0, true or false, verdadero o falso. |
| :date | date | Almacena datos tipo fecha |
| :datatime | datetime | Almacena datos tipo fecha y tipo hora |
| :decimal | decimal | Almacena datos numericos decimales.  |
| :float | float | Almacena datos numericos exponeciales muy grandes o muy pequeños |
| :integer | int(11) | Almacena datos numericos enteros |
| :string | varchar(255) | Almacena cadenas de texto relativamente cortas de nos mas de 255 caracteres  |
| :text | text | Almacena cadenas de texto estensas, textos muy largos  |
| :time | time | Almacena datos tipo tiempo / hora  |
| :timestamp | datetime | Almacena datos tipo fecha y tipo hora  |

## Mysql

Mysql comandline es una herramienta para el uso de mysql desde la terminal.

> comentarios en linea: ***--- comentario ...*** o ***# comentario ...***
comentarios de varias lineas ***/\* comentario \*/.***

> para entrar a mysql comadline usaremos el comando administrador: ***sudo mysql***, el cual solicitara los permisos de administradadr para iniciar.

> el comando ***show databases*** mostrara las bases de datos por defecto al instalar mysql y las bases de datos que fueron creadas por el ususario.

> el comando ***use (nombre_database)*** se usara para entrar a la base de datos y para visualizar las tavlas usaremos el comando ***show tables***

> al crear una base de datos se usara el comando ***create database (nombre_nuevo_databese)***.

> para asignar un nombre a una tabla nueva dentro de una base de datos recien creada usaremos elcomando ***use (nombre_nueva_databes)***.

> para crear tablas nuevas dentro de la nueva base de datos creada se usara ***create table (nombre_tabla)***. Revisar entidades y relaciones y normalizar tablas para este paso.


## Ejemplo de creación de tabla **practica** en mysql
~~~

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

~~~

> el comando para insertar datos en tablas usaremos el comando:  ***insert into (nobre_tabla_creada)***: ejemplo:
~~~
INSERT INTO peaple(last_name, first_name, address, city)
VALUES ('Hernandez', 'Laura', 'Calle 21, Wall Street', 'Monterrey'); 
~~~

> PAra visualizar el contenido ingresado a una tabla usaremos el comando **SELECT \* FROM - nombre_tabla -** ejemplo:

~~~
SELECT * FROM Empleados;

SELECT fist_name, last_name
FROM peaple;
~~~

> Para realizar cambios en datos ya existentes en una tabla se ura el comando **UPDATE** ejemplo:
~~~
UPDATE peaple
SET last_name='Chavez',city='Merida'
Where person_id=1;
~~~
Para borrar el contenido espesificado de una tabla se usara el comando **DELETE FROM - nombre_tabla-** 
~~~
DELETE FROM peaple
WHERE person_id=1;
~~~
> Para destruit o soltar una tabla se utilizara el comando **DROP TABLE - nombre_tabla -**.
~~~
DROP TABLE people;
~~~

modificador **ON** para relacionar las llaves primarias con las foraneas.

## Operadores relacionales

### Operadores relacionales o de compración.

- igual a:   **=**
- distinto a: **!=**
- menor que: **<**
- mayor que: **>**
- menor o igual que: **<=**
- mayor o igual que: **>=** 


## Query

### Sentencia **SELECT**



### Sentencia **FROM & JOIN**

La sentencia **From** es una instrucción para indicar de donde requerimos que sean llamados los datos, los cuales al estar normalizada la estructura de la base de datos la disponemos en diferentes tablas, con esta sentencia unimos los resultados solicitados desde diferentes tablas con la sentencia **JOIN** y la estructura de tipos de unión basada en los *diagramas de venn* y la *teoría de conjuntos* que nos ayudara a filtrar las busquedas que realisemos con **SELECT**.
 
 Estructura:
 ~~~
SELECT *
FROM tabla1
    LEFT JOIN tabla2 ON tabla1.llavePK = tabla2.llaveFK_id
WHERE tabla2.llaveFK_id IS NULL;

- SELECT es la sentencia que indica la  consulta o proyección de la base de datos, el indicador *  relaciona como un "todo" o  "traer todos los campos" que el query regrese.
- FROM es la sentencia que indica el origen de la consulta que realizamos con SELECT.
- LEFT relaciona la busqueda en las tablas por izquierda o derecha tomando como referencia izquierda la tabla que se señale en la sentencia FROM y la derecha la tabla que se señale posterior a LEFT/RIGHT JOIN.
- JOIN según la teoría de conjuntos y el diagrama de venn, es el conector con el origen de tabla que se le asigne en FROM, con los campos de filtración de la segunda tabla señalada enseguida de JOIN y que nos regresa información del query.
- ON este modificador relaciona las llaves primarias y foraneas de las tablas. 
~~~

ejemplos de uso de query:

~~~
SELECT *
FROM tabla1
    LEFT JOIN tabla2 ON llavePK(tabla1).id = tabla2.llaveFK_id;

:: Esta sentencia nos regresara **todo** lo que este en la tabla1 (LEFT) que se relacione con la llave foranea_id de la tabla 2 y la llave primaria de la tabla1. 
~~~
~~~
SELECT *
FROM tabla1
    RIGHT JOIN tabla2 ON llavePK(tabla1).id = tabla2.llaveFK_id;

:: Al intercambiar el modificador LEFT por RIGHT la sentencia nos regresara todo lo que exista en la tabla2 y que ADEMÁS se relacione con su llave foranea FK y la llave primaria PK de la primera tabla descrita. 
~~~
~~~
SELECT *
FROM tabla1
    LEFT JOIN tabla2 ON llavePK(tabla1).id = tabla2.llaveFK_id
WHERE tabla2.llaveFK_id IS NULL;

:: Esta sentencia nos regresara todo en la tabla1 que se relacione con su llave primaria y la llave foreane de la segunda tabla, mientres cumpla con el paramentro NULL en el campo de llave foranea de la segunda tabla, quiere desir que no exista tal registro o este nulo.
~~~
~~~
SELECT *
FROM tabla1
    RIGHT JOIN tabla2 ON llavePK(tabla1).id = tabla2.llaveFK_id
WHERE tabla2.llaveFK_id IS NULL;

:: Al intercambiar el modificador LEFT por RIGHT la sentencia nos regresara todo lo que exista en la tabla2 y que ADEMÁS se relacione con su llave foranea FK y la llave primaria PK de la primera tabla descrita que cumplan con un campo nulo cuando la tabla 2 no tenga dicho registro en su llave primaria PK. 
~~~
~~~
SELECT *
FROM tabla1
    INNER JOIN tabla2 ON llavePK.id = tabla2.llaveFK_id;

:: el modificador INNER traera de ambas tablas SOLO lo que este relacionado entre la llave primaria PK de la primera tabla con lo que este relacionado al la llave foranea de la segunda tabla.
~~~
~~~
SELECT *
FROM tabla1
    LEFT JOIN tabla2 ON llavePK(tabla1).id = tabla2.llaveFK_id;
UNION
SELECT *
FROM tabla1
    RIGHT JOIN tabla2 ON llavePK(tabla1).id = tabla2.llaveFK_id;

:: 

~~~
