# paygotest_usuario

CONSIDERACIONES:

Se ha usado bootstrap como framework html.

Se ha usado php sin ningún framework de backend.

Se ha usado una tabla en mysql para la persistencia de los datos.

La aplicación soporta archivos separados por comas (,) y por punto y coma (;), como los formatos de los archivos de ejemplo CSV_Coma y CSV_PuntoComa

Cuando el archivo csv se sube, es leido por el servidor y luego se ordena en memoria. Se procede luego a insertar los registros ordenados en la tabla. Cuando un nuevo archivo csv es cargado, se borra los datos de la tabla mysql.

Se asume que el ordenamiento se realiza sobre el campo "Nombre".

Se asume que solo se deben insertar los registros donde los nombres y los apellidos sean diferentes de la cadena vacía.

Se asume que si el parámetro de número de registros es mayor que la cantidad de registros en el archivo csv, se procesarán todos los registros del archivo.

Se crea una clase llamada Database.php que maneja el acceso a la tabla user usando la libreria PDO de php.

Se usa el motor de plantillas smarty para renderizar las vistas.

Se crean botones que enlazan las dos vistas entre si (Listado anterior y Cargar nuevo CVS).

Se hace uso del plugin twbsPagination para realizar la paginacion, hecho en javascript y compatible con bootstrap. Documentación del plugin: https://esimakin.github.io/twbs-pagination/