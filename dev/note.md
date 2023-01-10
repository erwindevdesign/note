Motores de renderizado.

los navegadores cuentan con motores de renderizado para traducir el c+odigo que escribimos a lenguaje de maquina se usan los siguientes:

chrome — blink

edge — edge html

safari — webkit

firefox — gecko

5 pasos para renderizar.

1. Tranformar html a objetos que entienda en navegador DOM document object model.
2. Calcula los estilos correspondientes a cada nodo DOM.
3. Calcula las dimenciones de cada nodo y donde se ubica en pantalla.
4. Escribe y da estilos a las cajas
5. Toma las capas anteriores y las convierte en una imagen para mostrarla en pantalla.

Elemento es una linea de codiogo  con una etiqueta de apertura, el contenido descriptivo y una etiqueta de cierre. Además cuentan con atributos para relacionarlo con un css para darle estilo al elemento.

Anidamiento del codigo acomodar gerargicamente los elementos dentro de las cajas correspondientes.

HTML semántico: etiquetas más utlizadas

LAYOUT

- header
- nav
- section
- article
- aside
- fooder

ENLACES

- a

TEXTOS

- h1 ... h6
- p
- span

IMÁGENES y VÍDEO

- img
- svg
- iframe
- video
- figure

FORMULARIO

- form
- input
- label
- button

LISTAS

- ul
- li
- ol

 

Selectores CSS

h1 { color: pink; }

h1 = selector

color = propiedad

pink = valor

Selectores básicos:

- de tipo:
    
    div {
    
         ...
    
    }
    

- de clase
    
    .class{
    
    ...
    
    }
    
- de id
    
    #id {
    
    ...
    
    }
    
- de atributo
    
    a [ href = ”  ...  ”] {
    
    ...
    
    }
    

- universal
    
     * {
    
    ...
    
    }
    
    | Pseudoclases : | Pseudoelementos |
    | --- | --- |
    | :active | ::after |
    | :focus | ::before |
    | :hover | ::first-lette |
    | :nth-chid (  ) | ::placeholder |
    
    Syntasis:
    
    ```
    selector::pseudo-element {
      property: value;
    }
    
    ```
    
     
    
    [https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-elements](https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-elements) 
    
    [https://css-tricks.com/pseudo-class-selectors/](https://css-tricks.com/pseudo-class-selectors/)
    
    [https://css-tricks.com/snippets/css/a-guide-to-flexbox/](https://css-tricks.com/snippets/css/a-guide-to-flexbox/)
    
    ESPECIFISIDAD
    
    x-o-o-o-o  |  !important; 
    
       x-o-o-o  |  estilos en línea / atributo style en HTML
    
          x-o-o  |  # id’s
    
             x-o  |  clases, atributos y pseudoclases. (.active, .hover)
    
                x  |  elementos y pseudoelementos  ( li, ul,)
    
                o  |  selector universal.
    

Display:

[https://htmlreference.io/](https://htmlreference.io/)

- block
- inline
- inline-block
- flex*
- grid*

[https://css-tricks.com/snippets/css/a-guide-to-flexbox/](https://css-tricks.com/snippets/css/a-guide-to-flexbox/)7














<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<   >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

Display grid

Grid template

Gaps

Grid-auto

### Grid:

- el Display es la forma de comportarce de la pantalla.
- Grid template colums: nos permite determinar la cantidad de columnas dentro de la grilla y las dimenciones de estas .
- Grid template row; nos permite determinar la cantidad de filas y sus dimensiones.
- Gris auto row / colum: determinar el tamaño de filas o columnas que se crean. Si no se usa Grid tempalte colum / rows las columnas ocuparan el 100%vh/w.
- Grid auto flow: determina como se llena y el sentido se llenar las filas y columnas.
- Row/ colum Gap: 1fija un espaciado entre los contenedores dentro de una grilla.

### Alineación:

Propiedades de alineación:

Justify-items / content / self

Align-items / content / self

Place-items / content / self

- Las propiedades - Justify - alinearan de manera horizontal y las propiedades que comienzan con - Align - nos ayuda  a alinear de manera vertical. La directris - Place - alinea tanto vertical como horizontalmente en el contenedoor.
- Las propiedades que modifican los - items - nos ayudan a alinear todos los items que tenemos dentro de este contenedor.
- Las propiedades - content - modifican la pocición en el view / body / o  contenedor donde se encuentre la grilla.
- Las propiedades - self - modifican la pocición de los elementos o items dentro de los componentes de la grilla.

### Propiedades de alineación:

Cambiar la ubicación dentro de los elementos de nuestra grilla:

Grid-column-start

Grid-column-end

-Grid area

Grid-row-start

Grid-row-end

- Grid area nos permite definir el nombre, el comienzo y el termino de una grilla con 4 valores iniciop y termino de columna e inicio y termino de la fila (header,footer,side bar,etc..).
- Grid column nos permite definir el pricipio y el fin de una columnba dentro de la grilla. start determina la linea de la grilla de comienzo y end define la linea donde termina la grilla.
- Grid

```css
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

html{
    font-size: 62.5%;
}

/* ------  index.html  -------- */
/*
.container{
    border: 5px solid #e1bee7;
    background-color: #fff1ff;
    display: grid;
    grid-template-rows: 200px 200px 200px;
    grid-auto-columns: 200px 200px;
    grid-auto-flow: column;
    gap: 20px;
}

.item{
    font-size: 4.0rem;
    position: relative;
    font-family: ;
}

#one, #four{
    background-color: #ACDA0A;
}

#two, #five{
    background-color: #70BC0C;
}

#three, #six{
    background-color: #258305;
}

.container span{
    padding: 8px;
    position: absolute;
    bottom: 0;
    right: 0%;
    color: white;
}

.one, .four{
    background-color: #267E02;
}

.two, .five{
    background-color: #238403;
}

.three, .six{
    background-color: #113A04;
}
*/

body{
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.content{
    border: 1px solid #103502;
    background-color: #ADD900;
    display: grid;
    grid-template-columns: 150px 150px;
    grid-auto-rows: 150px;
    height: 360px;
    width: 360px;
    gap: 20px;
    place-content: center; 
}

.item{
    
    background-color: #60A91B;
    display: grid;
    place-items: end;
}

.item span{
    display: block;
    height: 90px;
    width: 60px;
    background-color: #103502;
}

.item-center{
    position: absolute;
    top: calc(50% - 10px);
    left: calc(50% - 10px);
    background-color: #531164;
}
```

```css
body{
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color:rgb(243, 161, 161);
    
}

.content{
    display: grid;
    width: 260px;
    height: 380px;
    grid-template-columns: 100px 100px;
    grid-template-rows: 100px 100px 100px;
    gap: 20px;
    margin: 20px;
    place-content: center;
    background-color: bisque;
}

.item{
    background-color: aqua;
    border: 5px solid violet;
    display: grid;
    
}

.item span{
    font-size: 3rem;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: aliceblue;
    background-color: blueviolet;
    justify-self: end;
    align-self: end;
}
```

![Captura de pantalla 2022-02-12 a las 08.45.15.png](https://s3-us-west-2.amazonaws.com/secure.notion-static.com/13601068-96b7-4032-a77a-45dae3c9de08/Captura_de_pantalla_2022-02-12_a_las_08.45.15.png)

```css
body{
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color:rgb(243, 161, 161);
    
}

.content{
    display: grid;
    width: 260px;
    height: 380px;
    grid-template-columns: 100px 100px;
    grid-template-rows: 100px 100px 100px;
    gap: 20px;
    margin: 20px;
    place-content: center;
    background-color: bisque;
}

.item{
    background-color: aqua;
    border: 5px solid violet;
    display: grid;
    
}

.item span{
    font-size: 3rem;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: aliceblue;
    background-color: blueviolet;
    justify-self: end;
    align-self: end;
}

.area{
    display: grid;
    grid-template-columns: 100px 100px;
    grid-auto-rows: 100px;
    background-color:violet;
    gap: 20px;
}

.contenedor{
    background-color: aqua;
    display: grid;
}

.contenedor span{
    background-color: antiquewhite;
    width: 30px;
    height: 50px;
    place-self: end;
}
```

![Captura de pantalla 2022-02-12 a las 11.16.47-fullpage.png](https://s3-us-west-2.amazonaws.com/secure.notion-static.com/9029c63e-5569-4741-ba0e-a3b81e8f154b/Captura_de_pantalla_2022-02-12_a_las_11.16.47-fullpage.png)


