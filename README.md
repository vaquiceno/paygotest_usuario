# paygotest_usuario

CONSIDERACIONES SUPUESTAS:

Se ha usado bootstrap como framework html.

Se ha usado php sin ningún framework de backend.

Se ha usado una tabla en mysql para la persistencia de los datos.

Cuando el archivo csv se sube, es leido por el servidor y luego se ordena en memoria. Se procede luego a insertar los registros ordenados en la tabla. Cuando un nuevo archivo csv es cargado, se borra los datos de la tabla mysql.

Se asume que el ordenamiento se realiza sobre el campo "Nombre".

Se crea una clase llamada Database.php que maneja el acceso a la tabla user usando la libreria PDO de php.

Se usa el motor de plantillas smarty para renderizar las vistas.

Se crean botones que enlazan las dos vistas entre si (Listado anterior y Cargar nuevo CVS).