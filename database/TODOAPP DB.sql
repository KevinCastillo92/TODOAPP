CREATE DATABASE todoapp;
USE todoapp;

CREATE TABLE tareas ( id INT PRIMARY KEY auto_increment, fecha date, descripcion VARCHAR(200), fecha_terminacion date, estatus VARCHAR(10),updated_at datetime,created_at datetime );
