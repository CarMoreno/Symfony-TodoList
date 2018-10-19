Lista Tareas Symfony
============

## Tecnologías usadas

Para este proyecto, se utilizó Symfony 3.4.0, junto con PHP 6.0, además se hizo uso del
framework Bootstrap 4 para el manejo de estilos y comportamiento responsive de la app.

Se utilizó la librería bootstrap-typehead junto con JQuery para realizar la busqueda de tareas por autocomplete, por medio de peticiones Ajax.

## Modelo

En este apartado se explican los temas relacionados al modelo de la aplicación

### Entidades:

La aplicación cuenta con dos entidades, Categoría y Tarea. Una categoría pueda estar presente en muchas tareas, sin embargo, una Tarea solo puede tener una Categoría, es decir, existe una relación OneToMany (uno a muchos), entre estas dos entidades; esto permite categorizar las tareas. Por ejemplo, podemos tener las tareas "Trotar en las mañanas" y "Comer verduras" dentro de la categoría "Salud y cuidados".

A continuación se presenta el diagrama ER (Entidad relación) del modelo propuesto:

![imagen](https://i.imgur.com/7Jyk4vS.png)

La entidad Tarea dispone de:

1. id
2. titulo.
3. descripcion.
4. fecha.
5. imagen.
6. categoria_id.

Mientras que la entidad Categoría tiene los siguientes atributos.

1. id.
2. nombre.
3. descripcion.

La aplicación está desplegada y puede ser accedida haciendo click [aquí](http://carlosandresmorenovelez.000webhostapp.com/tarea)
