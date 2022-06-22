# Dev

### Estructura de notas deribadas del aprendisaje de nuevas habilidaddes profecionales relacionadas al desarrollo web y la programación en código.

### notación de inducción a markdown y a la documentación técnica.


Index.

1. [Bases de datos][#id1]

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


