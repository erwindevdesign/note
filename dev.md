# Dev

### Estructura de notas deribadas del aprendisaje de nuevas habilidaddes profecionales relacionadas al desarrollo web y la programación en código.

### notación de inducción a markdown y a la documentación técnica.


Index.

1. [Bases de datos][#id1]
  1.1 Mysql

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


## Mysql

Mysql comandline es una herramienta para el uso de mysql desde la terminal.

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

> PAra visualizar el contenido ingresado a una tabla usaremos el comando **SELECT * FROM - nombre_tabla -** ejemplo:

~~~
SELECT *  FROM Empleados;

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
DROP TABLE peaple;
~~~

### Tabla de comando para la manipulación de bases de datos basodos en **SQL**.

| Comandos | Descripción |
| -- | -- |
| **CREATE** | Crear tablas o nuevos esquemas de **DB**. |
| **DROP** | Elimina columnas, tablas y **DB**. |
| **Alter** | Modifixa la estructura de una tabla haciendo uso de orros comandos como: **ADD**, **DROP**, **ADD PRIMARY KEY()**, **ADD FOREIGN KEY()**, entre otros. |
| **DESCRIBE** | Muestra la estructura de las tablas de **DB**. |
| **SHOW** | Muestra y enlista BD y tablas. |
| **USE** | Conecta la base de datos que se le indique. |
| **SELECT** | Consulta y regresa la **DB** |
| **INSERT** | Inserta información en la **DB**. |
| **UPDATE** | Modifica y actualiza la información en la **DB**. |
| **DELETE** | Elimina ragistros de la base de datos. |
| **