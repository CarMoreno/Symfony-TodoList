Lista Tareas Symfony
============

## Tecnologías usadas

Para este proyecto, se utilizó Symfony 3.4.0, junto con PHP 6.0, además se hizo uso del
framework Materialize Css para el manejo de estilos y comportamiento responsive de la app. Para las peticiones Ajax se uso JQuery 3.3.

## Modelo

En este apartado se explican los temas relacionados al modelo de la aplicación

### Entidades:

La aplicación cuenta con dos entidades, Categoría y Tarea. Una categoría pueda estar presente en muchas tareas, sin embargo, una Tarea solo puede tener una Categoría, es decir, existe una relación OneToMany (uno a muchos), entre estas dos entidades; esto permite categorizar las tareas. Por ejemplo, podemos tener las tareas "Trotar en las mañanas" y "Comer verduras" dentro de la categoría "Salud y cuidados".

A continuación se presenta el diagrama ER (Entidad relación) del modelo propuesto:

![imagen](https://i.imgur.com/7Jyk4vS.png)

* La entidad Tarea dispone de:

1. id
2. titulo.
3. descripcion.
4. fecha.
5. imagen.
6. categoria_id.

* Mientras que la entidad Categoría tiene los siguientes atributos.

1. id.
2. nombre.
3. descripcion.

La aplicación está desplegada y puede ser accedida haciendo click [aquí](http://carlosandresmorenovelez.000webhostapp.com/tarea)

## Vista

Para las vistas decidí usar un framework css llamado Materialize.css, es un framework hecho por google y basado en *Material design*, responsivo y le dá a la aplicación un aire más mobil.

Las siguientes son screenshots de la aplicacion en version móbil.

### Vista desde ceular (360px de ancho):

1. Tareas:
![360pxtareas](https://i.imgur.com/533iGYN.png)


2. Categorias:
![360pxcategorias](https://i.imgur.com/KfBcQki.png)


3. Menu mobil:
![360pxmenu](https://i.imgur.com/d6jCnga.png)


4. Detalle de categoria:
![360pxcategoriasdetalle](https://i.imgur.com/EW4knin.png)
