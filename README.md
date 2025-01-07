# ud3_ejercicios

#ejercicio 4
Revisa los ficheros de la carpeta database/migrations y contesta a las siguientes preguntas:
¿Qué crees que hace el método create de la clase Schema?
¿Qué crees que hace $table->string('email')->primary();?
¿Cuantas tablas hay definidas? Indica el nombre de cada tabla

#1.
se utiliza para crear una nueva tabla en la base de datos con sus respectivas columnas y tipos de datos.

#2
crea una columna llamada `email` en la tabla y le asigna una clave primaria
esto asegura que los valores en la columna `email` seran unicos y no nulos,
actuando como un identificador unico

#3
hay 3 tablas: users, alumnos, asignaturas

#ejercicio 6
php artisan migrate: aplica todas las migraciones no ejecutadas en la base de datos

php artisan migrate:status: te muestra que migraciones se han ejecutado y cuales no

php artisan migrate:rollback:revierte o deshace la ultima migracion ejecutada

php artisan migrate:reset: revierte o deshace todas las migraciones hechas

php artisan migrate:refresh: revierte todas las migraciones y las vuelve a aplicar

php artisan make:migration: crea una nueva migracion

php artisan migrate --seed: ejecuta las migraciones y luego los seeders para llenar la base
de datos de prueba

#ejercicio 8
he añadido $table->string('apellido'); en la funcion run
