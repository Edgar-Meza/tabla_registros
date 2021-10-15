# Tabla de registros CRUD
## MySQL y PHP

tabla que permite realizar operaciones CRUD(Create, Read, Update & Delete) con MySQL y PHP

## Configuración
cambia el nombre del archivo .env.example por .env y detro del mismo colocatus parametros de conexión a tu base de datos MySQL

~~~
    DB_SERVER = "servidor"
    DB_NAME = "nombre_de_la_DB"
    DB_USER = "usuario"
    DB_PASSWORD = "contraseña"
~~~

### Inicio Login
clave puede ser modificada en archivo `auth.php`
"codigo_acceso"
![login](./assets/login.png "imagen inicial de login")

### Tabla de inicio
![tabla inicial](./assets/tabla.png "tabla inicial vacia")

### Agregar registro
para agregar un registro solo da click en el icono de +
![agregar registro](./assets/agregar.png "agregar registro")

![nuevo registro agregado](./assets/new.png "registro nuevo agregado")

### Actualizar registro
solo pulsar en el icono azul y se abrira un formulario con los datos del registro
![actualizar registro](./assets/actualizar.png "actualzar un registro")

### Eliminar un registro
para eliminar u registro solo da click en en icono rojo
![eliminar registro](./assets/eliminar.png "eliminar un registro")

