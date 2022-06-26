# Dev :keyboard:

### :bamboo: Respaldo de notas deribadas de la curva de aprendisaje en desarrollo web y la programación en código.

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

###  Notación de inducción a markdown y a la documentación técnica, gestionando su desarrollo haciendo uso de la ramificación de Git :octocat: como se muestra en el siguiente diagrama.

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
DROP TABLE peaple;
~~~

## Operadores relacionales

### Operadores relacionales o de compración.

- igual a:   **=**
- distinto a: **!=**
- menor que: **<**
- mayor que: **>**
- menor o igual que: **<=**
- mayor o igual que: **>=** 




