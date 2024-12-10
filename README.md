# Documentación del Proyecto

El codigo del ejemplo se encuentra en la rama master.

Para más información sobre la funcionalidad del proyecto, consulta el siguiente documento:

[Ejemplo del Principio Open_Close y Patrones de Diseño Aplicados](docs/Ejemplo%20del%20Principio%20Open_Close%20y%20Patrones%20de%20Dise%C3%B1o%20Aplicados.pdf)

o al siguiente enlace:
[https://docs.google.com/document/d/14QBf71UROVE6QceRvKenrlSd-Ub8CBOWAevcITnUyQM/edit?usp=sharing]


# Para probar el sistema:
1. Primero asegurarse de tener el NotificationServiceProvider registrado en config/app.php en los providers para que Laravel lo reconozca.
2. Levantar el servicio con php artisan serve e ingresar a la ruta que nos devuelve.
3. Ingresar la ruta en la que estamos mostrando los resultados: /send-notification.

NOTA: Para cambiar los datos que se estan ingresando se debe ir al controlador, para ingresar el mensaje que queremos enviar y los receptores a los que queremos enviarlo.
