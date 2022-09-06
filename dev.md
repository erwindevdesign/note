# Dev :keyboard:

### :floppy_disk: Respaldo de notas creadas de la curva de aprendisaje en habilidades de desarrollo y programación en código.

## Index.

1. [Datos y su interacción en el código](#id1)

2. [Código](#id2)

3. [HTML](#id3)
<p align=center >
  <a>
    <img src='https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white' />
  </a>&nbsp;&nbsp;
</p>

4. [CSS](#id4)

  <p align=center >
    <a>
      <img src='https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white' />
    </a>&nbsp;&nbsp;
  </p>

5. [Display](#id5)

6. [Terminal](#id6)

  <p align=center >
    <a>
      <img src='https://img.shields.io/badge/VIM-%2311AB00.svg?style=for-the-badge&logo=vim&logoColor=white' />
    </a>&nbsp;&nbsp;
  </p>

7. [Git & GitHub](#id7)

  <p align=center >
    <a><img src='https://img.shields.io/badge/git-%23F05033.svg?style=for-the-badge&logo=git&logoColor=white' /></a>&nbsp;&nbsp;
    <a><img src='https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white' /></a>&nbsp;&nbsp;    
  </p>

8. [Tipos de datos](#id8)

9. [PHP](#id9)
<p align=center >
  <a>
    <img src='https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white' />
  </a>&nbsp;&nbsp;
</p>

10. [Bases de datos](#id10)

- Base de datos relacionales.
- Mysql

11. [SQL](#id11)

   <p align=center >
     <a><img src='https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white' /></a>&nbsp;&nbsp;

  </p>

## Datos y su interacción en el código <a name='id1'></a>

Durante la historia, el ser humano ha desarrollafo entendimiento y comprensión de lo que sucede en su **entorno** desarrollo habilidades de **agrupamiento** y **organización** de la **información** que persibe en su ambiente. Esto ayuda su comprensión del ser con su entorno y la posibilidad de compartir la misma información y pensamiento a partir del pensamiento lógico de ideas y conseptos que son semanticamente interpretables en un flujo de comunicación donde se distribulla la información adecuada para su comprensión sistemica.

Una de las caracteristicas del desarrollo del **pensamiento lógico** en el ser humano fue la creación del lenguaje para la comunicación en sociedad, este intercambio complejo de información constituye lo que llamaeremos como **código** linguistico.

El código existe a partir de un emisor con la intención de comunicar y trasferir datos para la comprensión e interpretación de un reseptor por medio de un canal de comunicación, esto permite además del codigo de comunicación linguistico, y con itensión de ampliar la información adquirida del entorno, un lenguaje no linguistico y estandarizado sociealmente de facil comprensión, un ejemplo de el es, en artes graficas, los lenguajes de señalización que estandarizan el lenguaje para su comprención a un nivel global que traspase las limitantes del lenguaje linguistico.

La comunicación metalingüística de ideas y conseptos a travéz de la representación simbólica, describen hechos empíricos de lo que podría considerarse la realidad. Esta simbología y codificación del lenguaje permitío exponenciar y diversificar la comunicación al grado de comunicarnos con circuitos electricos y logica computacional gracias al código y al avance de la industria tech.

## Codigo <a name='id2'></a>

El codigo computacional es la técnica de traducir conseptos complejos de pensamiento lógico en una factorización del mismo problema de forma estructural para la comprención computacional, abordado un **problema** en común afectación social, para la creación de una **solución** que permita ser implementada en diversas áreas de la tecnólogia.

La transferencia de información para lograr la comunicación con componentes logicos requiere de codificar el contenido semántico en forma de expresiones de un lenguaje computacional inerente al componente a programar, la sintaxis del lenguaje codifica algunas de las relaciones de la situación o estado descritos en la información que requerimos transferir al componenete para que se comporte o realice ciertas tareas programables con esta sintasis.

La semantica hace referencia a al significado de los grupos de datos que dependen estrucutralmente y logicamente del siginificado del contenido del mismo, por ejemplo, cuando leemos un texto coherente, que utiliza **palabras** y **oraciones** adecuadas y que le **dan sentido** a lo que leemos esto es semantica de la oración. Utilizar selectores, etiquetas y una escritura semantica permite, además de la comunicación con componentes logicos, la posibilidad de comunicarnos con un computador y poder dar instrucciones y estructurar reglas de comportamiento que realicen tareas más eficientemente que ayuden al bienestar social

## HTML <a name='id3'></a>

## CSS <a name='id4'></a>

#### Maquetación en CSS

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

> toda declaración que se encuentre en la parte baja del código se sobre escribira sobre las que se encuentre arriba por lo cual predominara la declarión que se encuentre más abajo del código.

- RELEVANCIA DE CLASES

| especificidad | descripción                      |
| ------------- | -------------------------------- |
| **X,0,0,0,0** | ! important                      |
| **0,X,0,0,0** | estilos de línea STYLE tarjet    |
| **0,0,X,0,0** | # ID                             |
| **0,0,0,X,0** | clases, atributos y pseudoclases |
| **0,0,0,0,X** | selectores y pseudoelementos     |
| **0,0,0,0,0** | selector universal               |

EJEMPLO:

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

#### Centrar un div:

con **POSITION**

```
.center-container {
  position:absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
```

con **FLEX**

```
.center-container {
  display: flex;
  justify-content: center;
  align-item: center;
}
```

con **GRID**

```
.center-content {
  display: grid;
  palce-items: center;
}
```

#### Efectos CSS

**sticky scrolling**

```
.content {
  position: sticky;
  top: 0;
}
```

## Display <a name='id5'></a>

Al tipo de visualización y comportamiento de los elementos dentro de un **HTML** se le denomina **display** y cuenta con los siguientes estilos:

1. block;
2. inline;
3. inline-block;
4. flex;
5. grid;

Existen elementos con atributos display preestablesidos por HTML, para revisar un listado de estos elementos y propiedades revise la lista en:

[propiedades css](https://htmlreference.io/)

1. **display: block;**
   Los elementos con propiedad **display** **block** como estilo de visualización comenzaran en una nueva linea, ocupando todo el ancho de pantalla, max-width. La etiqueta div cuenta con la propiedad **display** **block** predefinida por **HTML**.

HTML

```
<body class="content">
    <div class="section_one">
        display: block;
    </div>
    <div class="section_two">
        display: block;
    </div>
    <div class="section_three">
        display: block;
    </div>
</body>
```

CSS

```
:root{
    /* color1 */
    --gray-color: hsl(186, 12%, 22%);
    /* color2 */
    --ocre-color: hsl(39, 89%, 54%);
    /* color3 */
    --brown-color: hsl(33, 83%, 46%);
    /* color4 */
    --merlotred-color: hsl(16, 96%, 23%);
    /* color5 */
    --orangered-color: hsl(16, 75%, 48%);
    }

html{
    font-size: 62.5%;
    background-color: var(--gray-color);
    }

*   {
    box-sizing: border-box;
    }

body{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

.section_one, .section_two, .section_three{
    margin-bottom: 4vh;
    font-size: 1.4rem;
    font-weight: bold;
    padding: 2rem;
    background-color: var(--ocre-color);
    color: var(--merlotred-color);
    }

.section_one{
        height: 33vh;

    }

.section_two{
        height: 33vh;

    }

.section_three{
        height: 33vh;

    }

```

![Imagen ejemplo de display: block en pantalla.](https://i.imgur.com/DPfAIdt.png)

2. **display: inline;**

Los elementos con propiedades **display: inline;** permiten la inserción de elementos limitando las dimenciones a su contenido (texto) permitiendo posicionarce uno frete a otro inabilitando la modificación de dimenciones **height:** y **width:**, al ser un elemento en linea podra ser modificado su margin de forma horizontal pero invalidadndo las modificaciones verticales **(top y button)**.

HTML

```
<body class="content">
    <a href="" class="section_one">display: inline;</a>
    <a href="" class="section_two">display: inline;</a>
    <a href="" class="section_three">display: inline;</a>
</body>
```

CSS

```
:root{
    /* color1 */
    --gray-color: hsl(186, 12%, 22%);
    /* color2 */
    --ocre-color: hsl(39, 89%, 54%);
    /* color3 */
    --brown-color: hsl(33, 83%, 46%);
    /* color4 */
    --merlotred-color: hsl(16, 96%, 23%);
    /* color5 */
    --orangered-color: hsl(16, 75%, 48%);
}

html{
    font-size: 62.5%;
    background-color: var(--gray-color);
}

*   {
    box-sizing: border-box;
}

body{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.section_one, .section_two, .section_three{
    margin-bottom: 4vh;
    font-size: 1.4rem;
    font-weight: bold;
    padding: 2rem;
    background-color: var(--ocre-color);
    color: var(--merlotred-color);
    height: 33vh;
}
```

![Imagen ejemplo de display: inline en patalla.](https://i.imgur.com/SQE1HUX.png)

3. **display: inline-block;**

Los elementos con propiedades **inline-block** permite las caracteristicas de ambas propiedades, **inline** permitiendo posicionarce un elemento frente a otro mientras le permita su contenido, y sus dimenciones **height:** y **width:**, las cuales igual que la propiedad **block**, permite modificar su tamaño e ingresar margenes y padding para modificar su posición de elementos.

HTML

```
<body class="content">
    <button class="section_one">display: inline-block;</button>
    <button class="section_two">display: inline-block;</button>
    <button class="section_three">display: inline-block;</button>
</body>
```

CSS

```
:root{

    /* color1 */
    --gray-color: hsl(186, 12%, 22%);
    /* color2 */
    --ocre-color: hsl(39, 89%, 54%);
    /* color3 */
    --brown-color: hsl(33, 83%, 46%);
    /* color4 */
    --merlotred-color: hsl(16, 96%, 23%);
    /* color5 */
    --orangered-color: hsl(16, 75%, 48%);
}

html{
    font-size: 62.5%;
    background-color: var(--gray-color);

}

*{
    box-sizing: border-box;
}

body{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.section_one, .section_two, .section_three{
    margin-bottom: 4vh;
    font-size: 1.4rem;
    font-weight: bold;
    padding: 2rem;
    background-color: var(--ocre-color);
    color: var(--merlotred-color);
}

.section_one{
    height: 100px;
    width: 30vw;
}

.section_two{
    height: 200px;
    width: 40vw;
}

.section_three{
    height: 300px;
    width: 20vw;
}
```

![Imagen ejemplo de display: inline-block en patalla.](https://i.imgur.com/xzfn4a0.png)

4. **display: flex;**

Los elementos con elementos con caracteristicas **display: flex;** gozan de una variedad de propiedades que permitén la visualización y comportamiento de los elementos en pantalla.

Los elementos con **display: flex;** como propiedad es un conjunto de instrucciones para el comportaiento de los elementos según las dimenciones de su **contenedor** y el acomodo de su contenido.

Entenderemos la relación del contenedor y los elementos dentro aplicando **display: flex;** al contenedor padre y las demás propiedades **flex** a los elementos hijos dento de el.

Propiedades del contenedor (flex container)

1. **display**: la propiedad display la aplicaremos al contenedor afectando los elementos dentro de el.

2. **flex-direction**: la dirección de los elementos dentro del contenedor con caracteristicas **flex-directión** tienen las siguientes propiedades:

- **flex-direction: row;**

  HTML

  ```
  <body class="content">
  <div class="content">
    <button class="section_one">
      display: flex; <br />
      flex-direction: row; <br>
      1

    </button>
    <button class="section_two">
      display: flex; <br />
      flex-direction: row; <br>
      2

    </button>
    <button class="section_three">
      display: flex; <br />
      flex-direction: row; <br>
      3

  </body>
  ```

  CSS

  ```
  <style>
    /* ============ color ============ */

    /*

      color1: RGB #323E40 == HSC 186,22,25 == HSL 186,12,22
      color2: RGB #F2A922 == HSV  39,86,95 == HSL  39,89,54
      color3: RGB #D98014 == HSV  33,91,85 == HSL  33,83,46
      color4: RGB #732002 == HSV  16,98,45 == HSL  16,96,23
      color5: RGB #D9501E == HSV  16,86,85 == HSL  16,75,48

      */

    :root {
      /* color1 */
      --gray-color: hsl(186, 12%, 22%);
      /* color2 */
      --ocre-color: hsl(39, 89%, 54%);
      /* color3 */
      --brown-color: hsl(33, 83%, 46%);
      /* color4 */
      --merlotred-color: hsl(16, 96%, 23%);
      /* color5 */
      --orangered-color: hsl(16, 75%, 48%);
    }
    html {
      font-size: 62.5%;
      background-color: var(--gray-color);
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .content {
      display: flex;
      flex-direction: row;
    }

    .section_one,
    .section_two,
    .section_three{
      margin: 2vh;
      font-size: 1.4rem;
      font-weight: bold;
      padding: 2rem;
      background-color: var(--ocre-color);
      color: var(--merlotred-color);
    }

    .section_one {
      height: 200px;
      width: 200px;
    }

    .section_two {
      height: 200px;
      width: 200px;
    }

    .section_three {
      height: 200px;
      width: 200px;
    }

  </style>
  ```

![ejemplo de un display flex con un flex direction en row](https://i.imgur.com/wS0C2h7.png)

- **flex-direction: row-reverse;**

      HTML
      ~~~
      <body class="content">
      <div class="content">
        <button class="section_one">
          display: flex; <br />
          flex-direction: row-reverse; <br>
          1

        </button>
        <button class="section_two">
          display: flex; <br />
          flex-direction: row-reverse; <br>
          2

        </button>
        <button class="section_three">
          display: flex; <br />
          flex-direction: row-reverse; <br>
          3

      </body>
      ~~~
      CSS
      ~~~
      <style>
        /* ============ color ============ */

        /*

          color1: RGB #323E40 == HSC 186,22,25 == HSL 186,12,22
          color2: RGB #F2A922 == HSV  39,86,95 == HSL  39,89,54
          color3: RGB #D98014 == HSV  33,91,85 == HSL  33,83,46
          color4: RGB #732002 == HSV  16,98,45 == HSL  16,96,23
          color5: RGB #D9501E == HSV  16,86,85 == HSL  16,75,48

          */

        :root {
          /* color1 */
          --gray-color: hsl(186, 12%, 22%);
          /* color2 */
          --ocre-color: hsl(39, 89%, 54%);
          /* color3 */
          --brown-color: hsl(33, 83%, 46%);
          /* color4 */
          --merlotred-color: hsl(16, 96%, 23%);
          /* color5 */
          --orangered-color: hsl(16, 75%, 48%);
        }
        html {
          font-size: 62.5%;
          background-color: var(--gray-color);
        }

        * {
          box-sizing: border-box;
        }

        body {
          font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .content {
          display: flex;
          flex-direction: row-reverse;
        }

        .section_one,
        .section_two,
        .section_three{
          margin: 2vh;
          font-size: 1.4rem;
          font-weight: bold;
          padding: 2rem;
          background-color: var(--ocre-color);
          color: var(--merlotred-color);
        }

        .section_one {
          height: 200px;
          width: 200px;
        }

        .section_two {
          height: 200px;
          width: 200px;
        }

        .section_three {
          height: 200px;
          width: 200px;
        }

      </style>
      ~~~

  ![ejemplo de un display flex con un flex direction en row-reverse](https://i.imgur.com/4C6odZK.png)

- **flex-direction: column;**

  HTML

  ```
  <body class="content">
  <div class="content">
    <button class="section_one">
      display: flex; <br />
      flex-direction: column; <br>
      1

    </button>
    <button class="section_two">
      display: flex; <br />
      flex-direction: column; <br>
      2

    </button>
    <button class="section_three">
      display: flex; <br />
      flex-direction: column; <br>
      3

  </body>
  ```

  CSS

  ```
  <style>
    /* ============ color ============ */

    /*

      color1: RGB #323E40 == HSC 186,22,25 == HSL 186,12,22
      color2: RGB #F2A922 == HSV  39,86,95 == HSL  39,89,54
      color3: RGB #D98014 == HSV  33,91,85 == HSL  33,83,46
      color4: RGB #732002 == HSV  16,98,45 == HSL  16,96,23
      color5: RGB #D9501E == HSV  16,86,85 == HSL  16,75,48

      */

    :root {
      /* color1 */
      --gray-color: hsl(186, 12%, 22%);
      /* color2 */
      --ocre-color: hsl(39, 89%, 54%);
      /* color3 */
      --brown-color: hsl(33, 83%, 46%);
      /* color4 */
      --merlotred-color: hsl(16, 96%, 23%);
      /* color5 */
      --orangered-color: hsl(16, 75%, 48%);
    }
    html {
      font-size: 62.5%;
      background-color: var(--gray-color);
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .content {
      display: flex;
      flex-direction: column;
    }

    .section_one,
    .section_two,
    .section_three{
      margin: 2vh;
      font-size: 1.4rem;
      font-weight: bold;
      padding: 2rem;
      background-color: var(--ocre-color);
      color: var(--merlotred-color);
    }

    .section_one {
      height: 200px;
      width: 200px;
    }

    .section_two {
      height: 200px;
      width: 200px;
    }

    .section_three {
      height: 200px;
      width: 200px;
    }

  </style>
  ```

![ejemplo de un display flex con un flex direction en column](https://i.imgur.com/AsoLiCl.png)

- **flex-direction: column-reverse;**

HTML

    ~~~
    <body class="content">
    <div class="content">
      <button class="section_one">
        display: flex; <br />
        flex-direction: column-reverse; <br>
        1

      </button>
      <button class="section_two">
        display: flex; <br />
        flex-direction: column-reverse <br>
        2

      </button>
      <button class="section_three">
        display: flex; <br />
        flex-direction: column-reverse; <br>
        3

    </body>
    ~~~
    CSS
    ~~~
    <style>
      /* ============ color ============ */

      /*

        color1: RGB #323E40 == HSC 186,22,25 == HSL 186,12,22
        color2: RGB #F2A922 == HSV  39,86,95 == HSL  39,89,54
        color3: RGB #D98014 == HSV  33,91,85 == HSL  33,83,46
        color4: RGB #732002 == HSV  16,98,45 == HSL  16,96,23
        color5: RGB #D9501E == HSV  16,86,85 == HSL  16,75,48

        */

      :root {
        /* color1 */
        --gray-color: hsl(186, 12%, 22%);
        /* color2 */
        --ocre-color: hsl(39, 89%, 54%);
        /* color3 */
        --brown-color: hsl(33, 83%, 46%);
        /* color4 */
        --merlotred-color: hsl(16, 96%, 23%);
        /* color5 */
        --orangered-color: hsl(16, 75%, 48%);
      }
      html {
        font-size: 62.5%;
        background-color: var(--gray-color);
      }

      * {
        box-sizing: border-box;
      }

      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }

      .content {
        display: flex;
        flex-direction: column-reverse;
      }

      .section_one,
      .section_two,
      .section_three{
        margin: 2vh;
        font-size: 1.4rem;
        font-weight: bold;
        padding: 2rem;
        background-color: var(--ocre-color);
        color: var(--merlotred-color);
      }

      .section_one {
        height: 200px;
        width: 300px;
      }

      .section_two {
        height: 200px;
        width: 300px;
      }

      .section_three {
        height: 200px;
        width: 300px;
      }

    </style>
    ~~~

![Imgur](https://i.imgur.com/WmfU1F1.png)

- **flex-wrap: wrap;**

HTML

    ~~~
    <body class="content">
    <div class="content">
      <button class="section_one">
        display: flex; <br />
        flex-wrap: wrap; <br>
        1

      </button>
      <button class="section_two">
        display: flex; <br />
        flex-wrap: wrap; <br>
        2

      </button>
      <button class="section_three">
        display: flex; <br />
        flex-wrap: wrap; <br>
        3

    </body>
    ~~~
    CSS
    ~~~
    <style>
      /* ============ color ============ */

      /*

        color1: RGB #323E40 == HSC 186,22,25 == HSL 186,12,22
        color2: RGB #F2A922 == HSV  39,86,95 == HSL  39,89,54
        color3: RGB #D98014 == HSV  33,91,85 == HSL  33,83,46
        color4: RGB #732002 == HSV  16,98,45 == HSL  16,96,23
        color5: RGB #D9501E == HSV  16,86,85 == HSL  16,75,48

        */

      :root {
        /* color1 */
        --gray-color: hsl(186, 12%, 22%);
        /* color2 */
        --ocre-color: hsl(39, 89%, 54%);
        /* color3 */
        --brown-color: hsl(33, 83%, 46%);
        /* color4 */
        --merlotred-color: hsl(16, 96%, 23%);
        /* color5 */
        --orangered-color: hsl(16, 75%, 48%);
      }
      html {
        font-size: 62.5%;
        background-color: var(--gray-color);
      }

      * {
        box-sizing: border-box;
      }

      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }

      .content {
        display: flex;
        flex-wrap: wrap;
      }

      .section_one,
      .section_two,
      .section_three{
        margin: 2vh;
        font-size: 1.4rem;
        font-weight: bold;
        padding: 2rem;
        background-color: var(--ocre-color);
        color: var(--merlotred-color);
      }

      .section_one {
        height: 200px;
        width: 300px;
      }

      .section_two {
        height: 200px;
        width: 300px;
      }

      .section_three {
        height: 200px;
        width: 300px;
      }

    </style>
    ~~~

1200px width

![Imgur](https://i.imgur.com/y3Ixt7o.png)

800px width

![Imgur](https://i.imgur.com/XURo7ZC.png)

350px width

![Imgur](https://i.imgur.com/xh9m0Gx.png)

- **flex-wrap: wrap-reverse;**

HTML

    ~~~
    <body class="content">
    <div class="content">
      <button class="section_one">
        display: flex; <br />
        flex-wrap: wrap-reverse; <br>
        1

      </button>
      <button class="section_two">
        display: flex; <br />
        flex-wrap: wrap-reverse; <br>
        2

      </button>
      <button class="section_three">
        display: flex; <br />
        flex-wrap: wrap-reverse; <br>
        3

    </body>
    ~~~

CSS

    ~~~

    <style>
      /* ============ color ============ */

      /*

        color1: RGB #323E40 == HSC 186,22,25 == HSL 186,12,22
        color2: RGB #F2A922 == HSV  39,86,95 == HSL  39,89,54
        color3: RGB #D98014 == HSV  33,91,85 == HSL  33,83,46
        color4: RGB #732002 == HSV  16,98,45 == HSL  16,96,23
        color5: RGB #D9501E == HSV  16,86,85 == HSL  16,75,48

        */

      :root {
        /* color1 */
        --gray-color: hsl(186, 12%, 22%);
        /* color2 */
        --ocre-color: hsl(39, 89%, 54%);
        /* color3 */
        --brown-color: hsl(33, 83%, 46%);
        /* color4 */
        --merlotred-color: hsl(16, 96%, 23%);
        /* color5 */
        --orangered-color: hsl(16, 75%, 48%);
      }
      html {
        font-size: 62.5%;
        background-color: var(--gray-color);
      }

      * {
        box-sizing: border-box;
      }

      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }

      .content {
        display: flex;
        flex-wrap: wrap;
      }

      .section_one,
      .section_two,
      .section_three{
        margin: 2vh;
        font-size: 1.4rem;
        font-weight: bold;
        padding: 2rem;
        background-color: var(--ocre-color);
        color: var(--merlotred-color);
      }

      .section_one {
        height: 200px;
        width: 300px;
      }

      .section_two {
        height: 200px;
        width: 300px;
      }

      .section_three {
        height: 200px;
        width: 300px;
      }

      </style>

    ~~~

1200px width

![Imgur](https://i.imgur.com/iI9Fhsk.png)

800px width

![Imgur](https://i.imgur.com/j3PeBFt.png)

350px width

![Imgur](https://i.imgur.com/YNcyL4O.png)

- **display-wrap: nowrap;**

HTML

    ~~~
    <body class="content">
    <div class="content">
      <button class="section_one">
        display: flex; <br />
        flex-wrap: wrap-reverse; <br>
        1

      </button>
      <button class="section_two">
        display: flex; <br />
        flex-wrap: wrap-reverse; <br>
        2

      </button>
      <button class="section_three">
        display: flex; <br />
        flex-wrap: wrap-reverse; <br>
        3

    </body>
    ~~~

CSS

    ~~~

    <style>
      /* ============ color ============ */

      /*

        color1: RGB #323E40 == HSC 186,22,25 == HSL 186,12,22
        color2: RGB #F2A922 == HSV  39,86,95 == HSL  39,89,54
        color3: RGB #D98014 == HSV  33,91,85 == HSL  33,83,46
        color4: RGB #732002 == HSV  16,98,45 == HSL  16,96,23
        color5: RGB #D9501E == HSV  16,86,85 == HSL  16,75,48

        */

      :root {
        /* color1 */
        --gray-color: hsl(186, 12%, 22%);
        /* color2 */
        --ocre-color: hsl(39, 89%, 54%);
        /* color3 */
        --brown-color: hsl(33, 83%, 46%);
        /* color4 */
        --merlotred-color: hsl(16, 96%, 23%);
        /* color5 */
        --orangered-color: hsl(16, 75%, 48%);
      }
      html {
        font-size: 62.5%;
        background-color: var(--gray-color);
      }

      * {
        box-sizing: border-box;
      }

      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }

      .content {
        display: flex;
        flex-wrap: nowrap;
      }

      .section_one,
      .section_two,
      .section_three{
        margin: 2vh;
        font-size: 1.4rem;
        font-weight: bold;
        padding: 2rem;
        background-color: var(--ocre-color);
        color: var(--merlotred-color);
      }

      .section_one {
        height: 200px;
        width: 300px;
      }

      .section_two {
        height: 200px;
        width: 300px;
      }

      .section_three {
        height: 200px;
        width: 300px;
      }

      </style>

    ~~~

1200px (width)
![Imgur](https://i.imgur.com/NucLl9Z.png)

## Terminal <a name='id6'></a>

#### show-console-font

#### ASCII

- ver tabla de caracteres ascii en consola0: \*_man ascii_
- insertar caracteres ascii: **ctrl + shift + u** para indicar la inserción de caracteres especiales
- insertaremos el numero que indica en HEX (hexadecximal) de la tabla de caracteres

#### Comandos **Vi** (movile)

| Comandos          | Uso                                                                                                                           |
| ----------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| H                 | Desplazamiento a la parte superios de lo que se encuentre en pantalla.                                                        |
| L                 | Desplazaniento a la parte inferior de lp que se encuentee en pantalla.                                                        |
| G                 | Desplazamiento hasta el final del doumento.                                                                                   |
| w                 | Desplaza el cursor al primer caracter de la primera palabra a la derecha.                                                     |
| b                 | Desplaza el cursor al primer carácter de la primera palabra a la izquierda.                                                   |
| e                 | Desplaza el cursor al último carácter de la primera palabra a la derecha.                                                     |
| ge                | Desplaza el cursor al último carácter de la primera palabra a la izquierda.                                                   |
| 0                 | Desplazamiento al inicio de la linea donde se encuentre el cursor.                                                            |
| $                 | Desplazamiento al final de la linea donde se encuentre el cursor.                                                             |
| Ctrl + B          | Funsión similar a RePag.                                                                                                      |
| Ctrl + F          | Funsión similat a AvPag.                                                                                                      |
| i                 | Activa la inserción de caracteres donde se encuentre el cursor. (estado insert).                                              |
| I                 | Activa la inserción de caracteres al inicio de la línea de donde se encuentre el cursor.                                      |
| a                 | Activa la inserción a la derecha de donde se encuentre el cursor.                                                             |
| A                 | Activa la inserción de caracteres al final de la línea donde se encuentre el cirsor.                                          |
| O                 | Inserta una linea en blanco antes de la línea donde se encuemtre el cursor.                                                   |
| o                 | Inserta una línea en blanco después de la línea donde se encuentre el cursor.                                                 |
| r                 | Sustituye el carácter en el que se encuentre el cursor por la letra que presiones despues de _r_.                             |
| R                 | Sobre escribe a partir de la posición inicial del cursor.                                                                     |
| x                 | Borra los caracteres en dirección hacia la izquierda partiendo de la posición del cursor.                                     |
| X                 | Borra los carácteres den dirección hacia la derecha partiendo de la posición del cursor.                                      |
| dd                | Corta la línea donde se encuentre el curaor manteniendola en el portapapeles.                                                 |
| D o d$            | Corta desde la posición del cursor hasa el final de la línea.                                                                 |
| yy o Y            | Copia completamente toda la línea donde se encuentre el cursor.                                                               |
| yX                | Copia los mismos carateres que le indiquemos sustituyendo _X_ por un número partiemdo desde la posoción del cursor.           |
| P                 | Pega el contenido del portapapeles en la línea previa a la que se encuentre el cursor.                                        |
| p                 | Pega el contenido del portapapeles en la línea sihiente a la que se encuentre el cursor.                                      |
| .                 | Repite el último comando.                                                                                                     |
| u (undo)          | Deshace el último comando.                                                                                                    |
| U                 | Deshace el último comando aplicado en la línea donde se encuentre el cursor.                                                  |
| Ctrl + R (Redo)   | Rehace el último comando.                                                                                                     |
| n                 | Pasa a la siguiente coincidencia en la busqueda.                                                                              |
| N                 | Pasa a la anterior coincidencia en la busqeda.                                                                                |
| :n                | Nos llevara al siguiente fichero / arvhivo abirto.                                                                            |
| :N                | Nos llevara al fichero / archivo anterior.                                                                                    |
| :buffers          | Muestra un listado de los ficheros abiertos y su estado.                                                                      |
| :buffers X        | Nos lleva al fichero que le indiquemos al sustituir X por el número de indice del fichero al que queramos redireccionarnos.   |
| :e 'Archivo'      | Inserta el contenido de un fichero en la línea donde se encuentre el cursor.                                                  |
| :r                | Inserta el comtenido del fichero actual en la línea siguiente a la posicion del cirsor.                                       |
| :w o :w 'Archivo' | Guarda los cambios en el fichero actual o del fichero que le indiquemos.                                                      |
| :q                | Salir del entorno Vi / Vim / NeoVim.                                                                                          |
| :wq o x! o ZZ     | Guarda los cambios del archivo actual y sale de Vi / Vim / NeoVim.                                                            |
| :r! 'Comando'     | Ejecuta el comando en consola e inserta la salida del mismo en el fichero actual, en la posición del cirsor.                  |
| :/                | Busca en el documento la palabra que escribamos tras el carácter _diagonal_.                                                  |
| 10dd              | Repetir 10 veces el comando dd, es decir, borrar 10 líneas desde la línea donde se encuentre el cursor.                       |
| 5x                | Repetir 5 veces el comando _x_, es decir, borrar 5 carácteres a partir de la posición actual del cursor.                      |
| 60i-<ESC><ENTER>  | Inserta 60 guiones consecutivos.                                                                                              |
| Ctrl + G          | Muestra en la barra de estado el nombre del fichero, la línea actual y el porcentaje de la posición del cursor en el fichero. |
| :bn               | Te mueves al siguiente buffer (fichero).                                                                                      |
| :bp               | Te mueves al buffer (fichero) anterior.                                                                                       |
| :bd               | Cierra el buffer (fichero) actual.                                                                                            |
| :earlier 1h       | Vuelve al estado del fichero de una hora antes.                                                                               |
| :later 10m        | Avanza, en caso de haber usado el comando _:earlier_, 10 minutos en el estado del fichero.                                    |
| ^                 |

## Git & GitHub.<a name='id7'></a>

SINTAXIS DE COMANDOS

| comando                      | descripción                                                                       |
| ---------------------------- | --------------------------------------------------------------------------------- |
| git checkout -b (new_branch) | Este comando es una mezcla de git branch (new_branch) y git checkout (new_branch) |

|

### Notación de inducción a **Markdown** y a la escritura técnica, estructurando su desarrollo haciendo uso de la ramificación de :octocat: Git como se muestra en el siguiente diagrama:

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

## Tipos de datos <a name='id8'></a>

#### Pensamiento lógico: Algoritmos y Diagramas de Flujo.

Operación matemáticas

Operación: es un proceso mediante el cual relacionamos entes para obtener resultados.
Matematica: el uso de simbolos para la representación lógica de un ente a relacionar.

En todo proceso el resultado es el objetivo de una operación que nos permitira tomar desiciones en un proceso más complejo.

Estructura de una operación

elemento1 --> simbolo --> elemento2 --> resultado :)

un operación se compone de los elementos a los cuales vamos a someter a la operación y un simbolo que definira el resultado definido.

- ¿Que información provee?
- ¿cuantas entradas tiene?
- ¿cuales son las operaciones?
- ¿cual es el objetivo del resultado?
- ¿Para que requiero el resultado?
- ¿que vamos a ahacer con el?
- ¿cual es el tipo de resultado que necesito?

> crear mejores estructuras y mejores flujos de trabjo, sin hacer reprocesos de operaciones.

> como la simbologia de las matematicas basica, juega un papel muy importante en la lógica de los procesos y el estructura del algoritmo.

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

### Sistema decimal

```
0, 1, 2, 3, 4, 5, 6, 7, 8, 9
```

### Sistema binario

```
1, 0
(true, false)
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

### Operadores lógicos

```

```

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

### Ejemplo de código

Salto de línea

> el salto de línea se indentifica por la integración de **"\n"** en la posición de linea donde se requiera el salto.

index.php:

```
<?php

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
```

consola:

```
❯ php index.php

PHP lenguage
Salto de línea entre instrucciones
Esto es un ...
salto de linea dentro de un string
Esto es un ...

doble salto de línea
```

Variables y concadenación

> Dentro de una variable podemós guardar información que se transforme a lo largo de la ejecución del código.

index.php:

```
<?php

echo "\n";

$name = "Carlos"; // variable-1

$firtsname = "Santana"; // variable-2

echo "My nombre es " . $name . " " . $firtsname . "\n"; // concadenando variable 1-2

echo "\n";

echo "El resultado de 546316 x 3464613 es " . (546316*3464613) . "\n"; // concadenando una operación matematica

echo "\n";
```

consola:

```
❯ php index.php

My nombre es Carlos Santana

El resultado de 546316 x 3464613 es 1892773515708
```

Ver el contenido de un arreglo

> Los arreglos continene variables y existen diversos comandos que pueden mostrar su tipo de contenido por pantalla

index.php [comando: var_dump( )]:

```
<?php

echo "\n";

$personas = [
    "Carlos" => 22,
    "Mr. Michi" => 15,
    "Juan" => 65
];

var_dump($personas);

echo "\n";
```

consola:

```
❯ php index.php

array(3) {
  ["Carlos"]=>
  int(22)
  ["Mr. Michi"]=>
  int(15)
  ["Juan"]=>
  int(65)
```

index.php [comando: print_r( )]:

```
<?php

echo "\n";

$personas = [
   "Carlos" => 22,
   "Mr. Michi" => 15,
   "Juan" => 65
];

print_r($personas);

echo "\n";
```

consola:

```
❯ php index.php

Array
(
    [Carlos] => 22
    [Mr. Michi] => 15
    [Juan] => 65
)
```

Constante

> las constantes resguardan datos fijos que se utilizarán a lo largo de la ejecución del código.

index.php:

```
<?php

define("NUMERO_PI", 3.1416);
// el numero pi utilizado en nuestro codigo puede ser resguardado dentro de una constante ( define( ) ) para la manipilación del dato contenido.

echo NUMERO_PI;
// imprime por pantalla el número pi resguardado en la constante.

echo "\n";
```

consola:

```
❯ php index.php
3.1416
```

index.php [ var_dump(NUMERO_PI) ]:

```
<?php

define("NUMERO_PI", 3.1416);

echo NUMERO_PI;

echo "\n";

var_dump(NUMERO_PI);

echo "\n";
```

consola:

```
❯ php index.php
3.1416
float(3.1416)
```

Operadores y tipos de datos resultantes con concadenación de salto de linea

> los operadores nos ayudan a relacionar datos y obtener un resultado de esa interacción.

index.php:

```
<?php

$numero = "23"; // string que contine una cadena de texto de 2 carácteres númericos

$nuevo_numero = $numero + 2; // variable que contiene una operación aritmetica que incluye una variable y una dato entero (int)

echo "\n";

echo($nuevo_numero) . "\n";

echo($numero) . "\n";

var_dump($nuevo_numero) . "\n";

var_dump($numero) . "\n";
```

consola:

```
❯ php index.php

25
23
int(25)
string(2) "23"
```

Variable con contenido numerico relacionado con un tipo de dato flotante

> Las operaciones aritmeticas y relacionales permiten realizar operaciones entre diversos tipos de datos.

index.php [ ]:

```
<?php

$numero = 10;

$numero_b = $numero + 0.5;

echo "\n";

var_dump($numero_b). "\n";

```

consola:

```
❯ php index.php

float(10.5)
```

.php [ ]:

```
<?php

$papas = "10 papas en el costal" . "\n";

echo "\n";

$cuantas_papas_hay = $papas + 5;

echo $cuantas_papas_hay . "\n";
```

consola (con advertercia):

```
❯ php index.php

PHP Warning:  A non-numeric value encountered in /home/erwin/Documentos/Desarrollo Web/note/index.php on line 142
15
```

Mostrar una cadena de texto STRING como entero INT

> las relaciones entre datos permiten mediante algunas instrucciones poder cambiar de tipo de dato

index.php [ ]:

```
<?php

echo "\n";

$numero = "5";

var_dump($numero) . "\n";

$numero = (int)$numero;

var_dump($numero) . "\n";
```

consola:

```
❯ php index.php

string(1) "5"
int(5)
```

Imprimir por pantalla una variable que contiene un dato tipo flotante FLOAT en un entero INT

index.php:

```
<?php

$dias = 5.89;

var_dump($dias) . "\n";

$dias = (int)$dias;

var_dump($dias);

echo "\n";
```

consola:

```
❯ php index.php
float(5.89)
int(5)
```

Booleano

> los datos booleanos (true & false) pueden ser representados por 1 & 0 y e imprimirse por pantalla como bool.

index.php:

```
<?php

$bandera = false;

var_dump($bandera);

```

consola:

```
❯ php index.php
bool(false)
```

Imprimir booleano por pantalla desde una dato entero INT

> index.php:

```
<?php

$bandera = 1;

var_dump($bandera);

$bandera = (bool) $bandera;

var_dump($bandera);

echo "\n";
```

consola:

```
❯ php index.php
int(1)
bool(true)
```

Imprimir por pantalla entero INTT desde una variable STRING y un BOOL
index.php:

```
<?php

$numero = "5";

var_dump($numero);

$numero = (int)$numero;

var_dump($numero);

echo "\n";
```

consola:

```
❯ php index.php
string(1) "5"
int(5)
```

index.php:

```
<?php

$dias = 5.89;

var_dump($dias);

$dias = (int)$dias;

var_dump($dias);

echo "\n";
```

consola:

```
❯ php index.php
float(5.89)
int(5)
```

Variables & operadores lógicos

index.php:

```
<?php

// variables
$ataque_agua = true;
$ataque_fuego = false;
$ataque_electrico = false;
$velocidad_alta = true;

// operaciones logicas
var_dump($ataque_agua && $velocidad_alta); // AND
var_dump($ataque_fuego || $ataque_electrico); // OR
var_dump($ataque_agua || $ataque_fuego); // OR
var_dump(!$ataque_fuego); // NOT
var_dump(!$ataque_electrico && $ataque_agua); // NOT . AND
```

consola:

```
❯ php index.php
bool(true)
bool(false)
bool(true)
bool(true)
bool(true)
```

Operadores VAR_DUMP( ) & PRINT_R( ) mostrando el resultado de una exponenciación

index.php:

```
<?php

$resultado = (5**3);

echo $resultado;

echo "\n";

var_dump($resultado);

print_r($resultado);

echo "\n";
```

consola:

```
❯ php index.php
125
int(125)
125%
```

Concadenando dos resultados de operadores

index.php:

```
<?php

echo (5*6) . " " . (80/4);
```

consola:

```
❯ php index.php
30 20%
```

División y residuo

> el residuo de una división es todo el restante desimal que existe entre la división como dividir 5 / 2 y obtener 2.5, el .5 es el residuo de una parte de la operación al incluir ambos operadores su residuo será de 1.

index.php:

```
<?php

echo 5 / 2 . "\n";

echo 5 % 2 . "\n";
```

consola:

```
❯ php index.php
2.5
1
```

Convertir segundos a horas con su residuo convertido a segundos restantes

index.php:

```
<?php

$horas = 7501;

echo "$horas segundos convertidos a horas son: " . (int)($horas / 3600) . "\n";

echo "Sobran: " . ($horas % 3600) . " segundos";

echo "\n";
```

consola:

```
❯ php index.php
7501 segundos convertidos a horas son: 2
Sobran: 301 segundos
```

Operadores relacionales
index.php:

```
<?php

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
```

consola:

```
❯ php index.php
bool(true)
bool(false)

bool(true)
bool(false)

bool(false)
bool(true)

bool(false)
bool(true)

bool(false)
bool(true)
bool(false)
bool(false)

bool(false)
bool(false)
bool(true)
bool(true)

bool(true)
bool(false)
bool(true)
bool(true)

bool(true)
bool(true)
bool(false)
bool(false)

int(0)
int(-1)
int(1)
int(1)

int(1)
int(0)
int(-1)

55
```

Operadores de asignación

index.php [ = ]:

```
<?php

$edad_de_maria = ($edad_de_laura = 25) + 3;

echo "La edad de laura es: $edad_de_laura \n";

echo "La edad de maria es: $edad_de_maria";
```

consola:

```
❯ php index.php
La edad de laura es: 25
La edad de maria es: 28
```

Operadores de incremento

index.php [ +1 ]:

```
<?php

$contador = 1;

$contador = $contador +1 ;

echo $contador . "\n";
```

consola:

```
❯ php index.php
2
```

index.php [ +=1 ]:

```
<?php

$contador = 1;

$contador = $contador +=1 ;

echo $contador . "\n";
```

consola:

```
❯ php index.php
2
```

index.php [ ++ ]:

```
<?php

$contador = 1;

$contador = ++$contador;

echo $contador . "\n";
```

consola:

```
❯ php index.php
2
```

Concadenando una variable dentro de otra variable y un string.

index.php [ ]:

```
<?php

$nombre = "Carlos";

$nombre = $nombre . " " . "Santana";

$nombre .= " " . "Santana" . "\n";

echo $nombre;
```

consola:

```
❯ php index.php
Carlos Santana Santana
```

Convertir segundos a horas con su residuo ingresando dato desde consola.

index.php [ readline( ) ]:

```
<?php

$segundos = readline("Ingresa el tiempo en segundos: ");

$horas = (int)($segundos / 3600);

$segundos = (int)($segundos % 3600);

echo $horas . " horas, con " . $segundos . " " . "segundos" . "\n";
```

consola:

```
❯ php index.php
Ingresa el tiempo en segundos: 76501
21 horas, con 901 segundos
```

segundos a horas, minutos y residuo de segundos

index.php:

```
<?php

$segundos = readline("Ingresa el tiempo en segundos: ");

$horas = (int)($segundos / 3600);

$segundos = (int)($segundos % 3600);

$minutos = (int)($segundos/60);

$segundos = (int) ($segundos % 60);

echo $horas . " horas, con " . $minutos . " minutos y ". $segundos . " " . "segundos" . "\n";
```

consola:

```
❯ php index.php
Ingresa el tiempo en segundos: 494949
137 horas, con 29 minutos y 9 segundos
```

horas a segundos

index.php [ ]:

```
<?php

$horas = readline("Ingresa el tiempo en horas: ");

$segundos = (int)($horas * 3600);

$horas = (int)($horas % 3600);

echo $horas . " horas, son " . $segundos . " " . "segundos" . "\n";
```

consola:

```
❯ php index.php
Ingresa el tiempo en horas: 2.5
2 horas, son 9000 segundos
```

Horas, munutos y segundos sumados a segundos

index.php:

```
<?php

$horas = readline("Ingresa las horas: ");

$minutos = readline("Ingresa los minutos: ");

$segundos = readline("Ingresa los segundos: ");

$resultado = ($horas * 60 * 60)+($minutos * 60) + $segundos;

echo "El resultado a segundos es de: $resultado segundos." . "\n";
```

consola:

```
❯ php index.php
Ingresa las horas: 1
Ingresa los minutos: 120
Ingresa los segundos: 1
El resultado a segundos es de: 10801 segundos.
```

Array

index.php [ corchetes ]:

```
<?php

$edades = [20, 18, 40];

echo 'primer subindice: ' . $edades[0] . "\n";

echo 'segundo subindice: ' . $edades[1] . "\n";

echo 'tercer subindice: ' . $edades[2] . "\n";
```

consola:

```
❯ php index.php
primer subindice: 20
segundo subindice: 18
tercer subindice: 40
```

index.php [ función ]:

```
<?php

$edades = array(20, 18, 40);

echo 'primer subindice: ' . $edades[0] . "\n";

echo 'segundo subindice: ' . $edades[1] . "\n";

echo 'tercer subindice: ' . $edades[2] . "\n";
```

consola:

```
❯ php index.php
primer subindice: 20
segundo subindice: 18
tercer subindice: 40
```

Imprimiendo por pantalla un subindice de un array

index.php:

```
<?php

$edades = array(20, 18, 40);

echo "Una de las edades que esta dentro es " . $edades[2] . "\n";
```

consola:

```
❯ php index.php
Una de las edades que esta dentro es 40
```

Array asociativo

index.php:

```
<?php

$cafes = array(
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70
);

echo "El precio del cafe Americano es de $ {$cafes['Americano']}" . "\n";

```

consola:

```
❯ php index.php

El precio del cafe Americano es de $ 70
```

Consulta de variables dentro de aaray

index.php [ ]:

```
<?php

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

echo "La informacion de Carlos es: Edad: " . $personas["Carlos"]["edad"] . " Apellido: " . $personas["Carlos"]["apellido"] . "\n";

```

consola:

```
❯ php index.php
La informacion de Carlos es: Edad: 20 Apellido: Santana
```

Count - funsion

> Conteo de elementos en un array

index.php:

```
<?php

$edades = [18, 22, 40, 34];

echo count($edades) . "\n";
```

consola:

```
❯ php index.php
4
```

array_push

> insertar un elemento dentro de un array

index.php [ array_push ]:

```
<?php

$edades = [18, 22, 40, 46];

array_push($edades, 13);

var_dump($edades);
```

consola:

```
❯ php index.php
array(5) {
  [0]=>
  int(18)
  [1]=>
  int(22)
  [2]=>
  int(40)
  [3]=>
  int(46)
  [4]=>
  int(13)
}
```

is_array

index.php [ is_array ]:

```
<?php

$edades = [18, 22, 40, 46];

$no_array = " ";

var_dump (is_array ($edades)) . "\n";

var_dump (is_array ($no_array) ) . "\n";
```

consola:

```
❯ php index.php
bool(true)
bool(false)
```

Manipulación de array's

index.php [ explote ]:

```
<?php

$fruits_list = "fresa, cereza, manzana";

$fruits_list_array = explode(",", $fruits_list);

var_dump($fruits_list_array) . "\n";
```

consola:

```
❯ php index.php
array(3) {
  [0]=>
  string(5) "fresa"
  [1]=>
  string(7) " cereza"
  [2]=>
  string(8) " manzana"
}
```

index.php [ implode ]:

```

<?php

$fruits_list_array = ["fresa", "cereza", "manzana"];

$fruits_list = implode(",", $fruits_list_array);

var_dump($fruits_list) . "\n";
```

consola:

```
❯ php index.php
string(20) "fresa,cereza,manzana"
```

POKEMON array

index.php:

```
<?php

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

echo "The color of Bulbasur es " . $pokemon["Bulbasur"]["color"] . "\n";

echo "The favorite food of Charmander is " . $pokemon["Charmander"]["food"]["favorite"] . "\n";

echo "Squirtle is " . $pokemon["Squirtle"]["element"] . " element" . "\n";
```

consola:

```
❯ php index.php
The color of Bulbasur is green
The favorite food of Charmander is smoky
Squirtle is aqua element
```

MICHI array

index.php:

```
<?php

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
```

consola:

```
❯ php index.php
Las comidas favoritas de Michisancio son Lasaña, Atún
```

as condicionale snos ayudan a tomar deciciones respecto al flujo del codigo y de sus multiples variables de interacción.

## if & else

La sentencia **if** nos ayuda a validar una condición, mientrás que la sentencia **else** se cumplira si la anterior es invalidada.

Sintaxis
.php:

```
<?php

if (/* Condición (bool:true, false){
  // Si la condición se valida, se ejecuta esto.
}
else{
  // Si lo anterior no se cumple, se ejecutara esto.
}
```

Validar el acceso a una sala de cine según los asientos disponibles

index.php [ validado ]:

```
<?php

$asientos_disponibles = 16;

if ($asientos_disponibles > 0 ){
    echo "Existen asientos disponibles para esta película ";

}

else {
    echo "Lo sentimos, la sala esta completamente llena";
}

echo "\n";

```

consola:

```
❯ php index.php
Existen asientos disponibles para esta película
```

index.php [ invalidadndo ]:

```
<?php

$asientos_disponibles = 0;

if ($asientos_disponibles > 0 ){
    echo "Existen asientos disponibles para esta película ";

}

else {
    echo "Lo sentimos, la sala esta completamente llena";
}

echo "\n";
```

consola:

```
❯ php index.php
Lo sentimos, la sala esta completamente llena
```

La sentencia elseif o else if es una validación intermedia que puede repetirce cuantas veces se requiera entre if y else.

index.php [ elseif ]:

```
<?php


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

```

consola:

```
❯ php index.php
Los asientos están por terminarse!!

❯ php index.php
Existen asientos disponibles para esta película

❯ php index.php
Solo queda un asiento en existencia

❯ php index.php
Lo sentimos, la sala esta completamente llena
```

Switch

index.php

```
<?php

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
```

consola:

```
❯ php index.php
a Omar le gusta el color CAFE
```

## Ciclos while

Sintasis

```
while ( Condición ) {
  código que se repiete cuando se cumpla la condición
}
```

index.php

```
<?php

$contador = 0;

while($contador <= 10){
    echo "Iteración No. $contador \n";
    $contador++;

}
echo "\n";
```

consola:

```
❯ php index.php
Iteración No. 0
Iteración No. 1
Iteración No. 2
Iteración No. 3
Iteración No. 4
Iteración No. 5
Iteración No. 6
Iteración No. 7
Iteración No. 8
Iteración No. 9
Iteración No. 10
```

Ciclo Do ... While

index.php

```
<?php


 $usernames = ["Alana", "Josse", "Peach"];

 var_dump ($usernames) . "\n" ;

 do{
    $username = readline("Ingresa el nombre de usuario: ");



    echo "\n";

 } while(in_array($username, $usernames));

 array_push($usernames, $username);

 var_dump ($usernames) . "\n" ;


 echo "\n";
```

consola:

```
❯ php index.php

array(3) {
  [0]=>
  string(5) "Alana"
  [1]=>
  string(5) "Josse"
  [2]=>
  string(5) "Peach"
}
Ingresa el nombre de usuario: Alan

array(4) {
  [0]=>
  string(5) "Alana"
  [1]=>
  string(5) "Josse"
  [2]=>
  string(5) "Peach"
  [3]=>
  string(4) "Alan"
}
```

Ciclo for

> Sintasix

```
for (
  /* Parametros iniciales */; /* Condición */; /* Acciones */) {
    // Este es el código que iterará con el ciclo
  }
```

index.php [ 0 - 10 ]

```
<?php

for ($contador = 0; $contador <= 10; $contador++ ){

    echo $contador . "\n";
}

echo "\n";
```

consola:

```
❯ php index.php
0
1
2
3
4
5
6
7
8
9
10
```

index.php [ 10 - 0 ]

```
<?php

for ($contador = 10; $contador >= 0; $contador-- ){

    echo $contador . "\n";
}

echo "\n";
```

consola:

```
❯ php index.php
10
9
8
7
6
5
4
3
2
1
0
```

index.php [ for complejo, doble conteo ]

```
<?php


for ($i = 0, $j = 0; $i < 10; $i++ , $j += 2){
    echo "i = $i j = $j" . "\n";

}

echo "\n";


for ($count = 0, $count2 = 0; $count < 10; $count++ , $count2 += 2){
    echo "count+1 = $count y countx2 = $count2" . "\n";

}

```

consola:

```
❯ php index.php
i = 0 j = 0
i = 1 j = 2
i = 2 j = 4
i = 3 j = 6
i = 4 j = 8
i = 5 j = 10
i = 6 j = 12
i = 7 j = 14
i = 8 j = 16
i = 9 j = 18

count+1 = 0 y countx2 = 0
count+1 = 1 y countx2 = 2
count+1 = 2 y countx2 = 4
count+1 = 3 y countx2 = 6
count+1 = 4 y countx2 = 8
count+1 = 5 y countx2 = 10
count+1 = 6 y countx2 = 12
count+1 = 7 y countx2 = 14
count+1 = 8 y countx2 = 16
count+1 = 9 y countx2 = 18
```

foreach

> sintaxis

```
foreach ($iterable as $valor){
  // código a repetir por cada valor
}

foreach ($iterable as $llave => $valor){
  // código a repetir por cada valor
}
```

index.php

```
<?php

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
```

consola:

```
❯ php index.php
array(4) {
  ["Americano"]=>
  int(20)
  ["Latte"]=>
  int(25)
  ["Capuccino"]=>
  float(28.9)
  ["Mocca"]=>
  int(31)
}

El cafe Americano cuesta $20 USD
El cafe Latte cuesta $25 USD
El cafe Capuccino cuesta $28.9 USD
El cafe Mocca cuesta $31 USD
```

foreach con break

index.php

```
<?php

$cafe_list = [
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 28.9,
    "Mocca" => 31
];

var_dump($cafe_list);

echo "\n";

foreach ( $cafe_list as $cafe => $precio ) {
    echo "Item descrip. $cafe \n";
    if($cafe == "Capuccino" ){
        echo "Encontramos el cafe: $cafe" . "\n" . "su precio es de: $$precio";
        break;
    }
}

echo "\n";
```

consola:

```
❯ php index.php
array(4) {
  ["Americano"]=>
  int(20)
  ["Latte"]=>
  int(25)
  ["Capuccino"]=>
  float(28.9)
  ["Mocca"]=>
  int(31)
}

Item descrip. Americano
Item descrip. Latte
Item descrip. Capuccino
Encontramos el cafe: Capuccino
su precio es de: $28.9
```

foreach con continue (salto de ciclo)

index.php

```
<?php

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
```

consola:

```
❯ php index.php
array(5) {
  ["Americano"]=>
  int(20)
  ["Latte"]=>
  int(25)
  ["Olla from Chiapas"]=>
  int(50)
  ["Capuccino"]=>
  float(28.9)
  ["Mocca"]=>
  int(31)
}

El café Americano, es más economico!
El café Latte, es más economico!
El café Capuccino, es más economico!
El café Mocca, es más economico!
```

### Cuantos caminos existén ¿?

Existe una variedad de tienedas en la ciudad conectadas por
dos tipos de cainos diferentes para llegar, uno por calles
pabimentadas y otra por ciclopistas, si partimos siempre de
la tiendo 1, cuantos caminos existen para llegar a las demás
tiendas según el grafico.

![graphic](https://i.imgur.com/Qv3TXTj.png)

index.php

```
<?php

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
```

consola:

```
❯ php index.php
Que número de tienda deseas ubicar: 22
Existen 17711 formas distintas  de llegar
```

Función get_pokemon

index.php [funcion]
```
<?php
 
function get_pokemon(){
    
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

get_pokemon();

echo "\n";
```
consola:
```
❯ php index.php
Picachu
```
```

function get_pokemon(){
    
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
```
consola:
```
❯ php index.php
Bulbasaur
Lo sentimos, no existe un pokemon aún!
Mew
Mew
Mew
Mew
Bulbasaur
Bulbasaur
Picachu
Lo sentimos, no existe un pokemon aún!
Bulbasaur
Lo sentimos, no existe un pokemon aún!
Lo sentimos, no existe un pokemon aún!
Lo sentimos, no existe un pokemon aún!
Lo sentimos, no existe un pokemon aún!
Lo sentimos, no existe un pokemon aún!
Mew
Bulbasaur
Mew
Bulbasaur
```
función: estudiante legent

index.php
```
<?php

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

echo "\n";
```
consola:
```
❯ php index.php
How many points does your user have? 200
sorry student, you not is legend user! 
How many points does your user have? 20000
Hello LEGEND !! 
How many points does your user have? 3000
sorry student, you not is legend user! 
How many points does your user have? 464646
Hello LEGEND !! 
How many points does your user have? 555555
Hello LEGEND !! 
How many points does your user have?
```
### Valor por defecto en funcion

index.php
```
<?php

function suma($a = 1, $b = 1){
    echo "La suma de $a + $b es: " . $a + $b . "\n";
} 

suma();
suma(1,0);
suma(1,55);

echo "\n";
```
consola:
```
❯ php index.php
La suma de 1 + 1 es: 2
La suma de 1 + 0 es: 1
La suma de 1 + 55 es: 56
```
unpacking

index.php
```
<?php

$array1 = [1,2,3];
$array2 = [4,5,6];

$resultado = [...$array1, ...$array2];

var_dump($resultado);

echo "\n";
```
consola:
```
❯ php index.php
array(6) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(4)
  [4]=>
  int(5)
  [5]=>
  int(6)
}
```
Definir parametros con unpacking

index.php
```
<?php

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
```
consola:
```
❯ php index.php
La suma de 1 + 2 es: 3
La suma de 55 + 345 es: 400
La suma de 100000 + 1 es: 100001
```
Parametros dinámicos

index.php
```
<?php

 function suma_iteractive(...$params){
    var_dump($params);
 }

/*  suma_iteractive(1,2); */
 /* suma_iteractive(1000,2000,10,5000,8000); */
 suma_iteractive(651,231632, 64, 313, 6498 ,8, 315, 54, 78);

 echo "\n";
```
consola:
```
❯ php index.php
array(2) {
  [0]=>
  int(1)
  [1]=>
  int(2)
}

❯ php index.php
array(5) {
  [0]=>
  int(1000)
  [1]=>
  int(2000)
  [2]=>
  int(10)
  [3]=>
  int(5000)
  [4]=>
  int(8000)
}

❯ php index.php
array(9) {
  [0]=>
  int(651)
  [1]=>
  int(231632)
  [2]=>
  int(64)
  [3]=>
  int(313)
  [4]=>
  int(6498)
  [5]=>
  int(8)
  [6]=>
  int(315)
  [7]=>
  int(54)
  [8]=>
  int(78)
}
```
index.php
```
<?php

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
```
consola:
```
❯ php index.php
El resultado de la suma es: 3 
El resultado de la suma es: 16010 
El resultado de la suma es: 239613
```
return

index.php
```
<?php

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
```
consola:
```
❯ php index.php
Good to see you 

❯ php index.php
Hello here! 

❯ php index.php
Howdy!! :)
```
Ordenar un array con usort / operador <=>

index.php
```
<?php

$precios = [12, 55, 69, 42, 23, 25, 20, 15];

usort($precios, function($a, $b){
    return $a <=> $b;
});

var_dump($precios);
```
consola:
```
❯ php index.php
array(8) {
  [0]=>
  int(12)
  [1]=>
  int(15)
  [2]=>
  int(20)
  [3]=>
  int(23)
  [4]=>
  int(25)
  [5]=>
  int(42)
  [6]=>
  int(55)
  [7]=>
  int(69)
}
```
Regresa la hora por pantalla

index.php
```
<?php

function hora(){
    return date("h:i a");
}

echo "Función que regresa la hora por pantalla \n";

echo "La hora exacta es: " . hora();

echo "\n";
```
consola:
```
❯ php index.php
Función que regresa la hora por pantalla 
La hora exacta es: 06:28 am
```
Hangedman game

index.php
```
<?php

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
    echo "Game-Over \n";
}

echo "La palabra es; $choose_word  \n";
echo "Tú destapaste: $discovery_letters";

echo "\n";
```
consola:
```
Game-Over 
La palabra es; amor  
Tú destapaste: amor
```


### CURSO PRACTICO PHP

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

suma

index.php
```
<?php

$valorA = 5;
$valorB = 2;

$suma = $valorA + $valorB;

var_dump($suma);

?>
```
consola:
```
❯ php index.php
int(7)
```
potenciación

index.php
```
<?php

$valorA = 5;
$valorB = 2;

$potencia = $valorA ** $valorB;

var_dump($potencia);

?>
```
consola:
```
❯ php index.php
int(25)
```
Estructuras de control

1. If / else : nos ayuda avalidar si una sucede una condición oara que una acción se pueda ajecutar, y en caso de que no cumpla se ejecute otra acción.

index.php
```
<?php

// if - else

$valorA = 5;

if($valorA==10){
    echo "Es igual a 10 \n";
}
else{
    echo "no es igual a 10 \n";
}
```
consola:
```
// if - else

$valorA = 5;

if($valorA==10){
    echo "Es igual a 10 \n";
}
else{
    echo "no es igual a 10 \n";
}
```
index.php
```
<?php

// if - else

$valorA = 10;

if($valorA==10){
    echo "Es igual a 10 \n";
}
else{
    echo "no es igual a 10 \n";
}
```
consola:
```
❯ php index.php
Es igual a 10 
```

2. while - do while : estructura similar a un ciclo que ejecuta una acción minentrás una condición se cumpla. 

index.php
```
<?php


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

```
consola:
```
❯ php index.php
0
1
2
3
4
5
6
7
8
9
10
0
1
2
3
4
5
6
7
8
9
10
```

3. for - foreach : pasa por cada pocición de un array para realizar acciones sobre este

index.php
```
<?php

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

```
consola:
```
❯ php index.php
1
2
3
4
1
2
3
4
```
Switch : se obtienen diferentes casos de evaluación para una variable.

index.php
```
<?php

// switch

$valorA = 6;

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
```
consola:
```
❯ php index.php
No es ninguno de los valores: 1, 2, 3
```

index.php
```
<?php

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
```
consola:
```
❯ php index.php
El valor es 3
```
### funciones definidas para concadenar y sumar parametros

index.php
```
<?php

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
```
consola:
```
❯ php index.php
Maria Jose
La suma de los números es: 10
```









index.php
```
<?php


```
consola:
```

```
index.php
```
<?php


```
consola:
```

```
index.php
```
<?php


```
consola:
```

```
index.php
```
<?php


```
consola:
```

```

```

```

```

```

## Base de datos <a name='id10'></a>

#### Normalización de base de datos

El proceso de organización y estructura de las tablas que serán relacionadas, para evitar la redundancia y complejidad de ralación con los datos, se realiza el proceso de creación de una base de datos óptima llamado **normalización de data o de base de datos**.

Caracteristicas de normalizar una base de datos:

- Evitar la redundancias de datos
- Proteger la integridad de los datos
- Evitar problemas de actualización de los datos en las tablas

Existen 3 tipos o niveles de normalización de data denominados **Forma Normal 1,2 y 3 --> 4**.

1. La primera fomra normal (1FN) se seguiran los siguientes requerimientos:

   - Eliminar los grupos repetidos de las tablas individuales.
   - Crear una tabla separada por cada grupo de datos relacioneados.
   - Identificar cada grupo de datos relacionados con una clave primaria.

   * Todos los atributos son atómicos. Un atributi es atómico si los elementos que componene el dominio son indivisible o minimos.
   * La tabla contiene una clave primaria única.
   * La clave primaria no contiene atributos nulos (NUT NULL).
   * No debe existir bariación en el numero de columnas.
   * Los campos no clave deben identificarse por la clave (dependencia funcional).
   * Debe existir una independencia del orden tanto de filas como de columnas, si los datos cambian de orden no debera cambiar su significado.
   * Una tabla no debera contener múltiples valores en cada columna.
   * Los datos son atómicos ( a cada valor de X le pertenece un valor de Y, y viceversa)

2. La segunda forma normal debe serguir los siguientes pasos:

   - Contar con la primera forma normal.
   - Crear tablas separadas para aquellos grupos de datos que se aplican a varios registros.
   - Relacionar estas tablas mediante una clave externa.
   - sus atributos no principales dependen de forma completa de la clave principal.
   - No deberan existir dependencias parciales.

3. La tercera dormal normal debera considerar lo siguiente:

   - Se debe contar con la primera y segunda forma normalizadora se **BD**.
   - Se eliminaran aquellos campor que no dependan de la clave.
   - Ninguna columna podra depender de otra columna que no tenga clave.
   - No puede haber datos derivados.
   - No debra haber ninguna dependencia funcional trancitiva entre los atributos que no son clave.
   - El atributo _no primo_ es implicado por la clave primaria en una secuencia no transitiva.

#### Teoría de conjuntos

- LEFT JOIN
- RIGHT JOIN

#### Entidades y atributos.

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

### Tabla de comando para la manipulación de bases de datos basados en **SQL**.

| Comandos      | Descripción                                                                                                                      |
| ------------- | -------------------------------------------------------------------------------------------------------------------------------- |
| **DESCRIBE**  | Muestra la estructura de las tablas de **DB**.                                                                                   |
| **SHOW**      | Muestra y enlista **BD** tablas.                                                                                                 |
| **comentar:** | comentarios en linea: **_--- comentario ..._** o **_# comentario ..._** y comentarios de varias lineas **_/\* comentario \*/._** |

El **lenguaje de definición de datos (DDL)**, permite crear y modificar la estructura de una base da datos con las siguinetes sentencias:

| Sentencia    | Descripción                                                                                                                                            |
| ------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **USE**      | Conecta la base de datos que se le indique.                                                                                                            |
| **CREATE**   | Crear nuevas tablas y esquemas en la **BD**                                                                                                            |
| **ALTER**    | Modifixa la estructura de una tabla haciendo uso de orros comandos como: **ADD**, **DROP**, **ADD PRIMARY KEY()**, **ADD FOREIGN KEY()**, entre otros. |
| **DROP**     | Elimina columnas, tablas e indices dentro de la **BD**.                                                                                                |
| **TRUNCATE** | Se emplea para eliminar todos los registros de una tabla                                                                                               |
| **COMMENT**  | Empleado para agregar comentarios al diccionario de datos                                                                                              |
| **REANAME**  | Se utiliza para realizar cambios en el nombre de objetos dentro de la **BD**                                                                           |

El **lenguaje de manipulación de datso (DML)** pemite referenciar acciones que interactuen con los datos dentro de la **BD**.

| Sentencia  | Descripción                                       |
| ---------- | ------------------------------------------------- |
| **SELECT** | Consulta y regresa consultas de la **DB**         |
| **INSERT** | Inserta información en la **DB**.                 |
| **UPDATE** | Modifica y actualiza la información en la **DB**. |
| **DELETE** | Elimina ragistros de la base de datos.            |

El **lenguaje de control de datos (DCL)** permite crear **roles**, **permisos** e **integridad** referencial, así como otorgar cotnrol a control de acceso a la **BD**.

| Sentencia  | Descripción                                                                         |
| ---------- | ----------------------------------------------------------------------------------- |
| **GRANT**  | Se utiliza para otorgar privilegios de acceso de usuario a la **BD**.               |
| **REVOKE** | Se utiliza para revertir privilegios de acceso otorgados por la sentencia **GRANT** |

El **lenguaje de control transaccional (TCL)** nos ayudan para transaccionar en una sola sentencia las diferentes solicitudes que una base de datos relacional que pudiera ejercerse sobre sus datos, para continuar con la integridad referencial de la **BD**.

| Sentencia            | Descripción                                                                                        |
| -------------------- | -------------------------------------------------------------------------------------------------- |
| **BEGIN TRASACTION** | Se utiliza para indicar el comienzo d euna trasacción dentro de la**BD**.                          |
| **COMMIT**           | Se utiliza para grabar los cambios efectuados por la trasacción de datos                           |
| **ROLLBACK**         | Se utiliza para deshacer los cambios efectuados por el ultimo **COMMIT** de la trasacción de datos |

## Query

> creación de un query, como convertir una pregunta en un query puntos a estimar:

**De pregunta a un Query:**

    SELECT: Lo que quieres mostrar

    FROM: De dónde voy a tomar los datos

    WHERE: Los filtros de los datos que quieres mostrar

    GROUP BY: Los rubros por los que me interesa agrupar la información

    ORDER BY: El orden en que quiero presentar mi información

    HAVING: Los filtros que quiero que mis datos agrupados tengan

## Mysql <a name='id11'></a>

Mysql comandline es una herramienta para el uso de mysql desde la terminal:

> para entrar a mysql comadline usaremos el comando administrador: **_sudo mysql_**, el cual solicitara los permisos de administradadr para iniciar.

> el comando **_show databases_** mostrara las bases de datos por defecto al instalar mysql y las bases de datos que fueron creadas por el ususario.

> el comando **_use (nombre_database)_** se usara para entrar a la base de datos y para visualizar las tablas usaremos el comando **show tables**

> al crear una base de datos se usara el comando **_create database (nombre_nuevo_databese)_**.

> para asignar un nombre a una tabla nueva dentro de una base de datos recien creada usaremos elcomando **_use (nombre_nueva_databes)_**.

> para crear tablas nuevas dentro de la nueva base de datos creada se usara **_create table (nombre_tabla)_**. Revisar entidades y relaciones y normalizar tablas para este paso.

Ejemplo de creación de tabla **practica** en mysql:

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
