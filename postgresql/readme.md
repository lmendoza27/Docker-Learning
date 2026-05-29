Levantar

# docker compose up -d

Ver el contenedor

# docker ps

Ingresar a Postgresql

# docker exec -it postgres-db psql -U admin -d appdb

Para crear tabla

CREATE TABLE usuarios (
id SERIAL PRIMARY KEY,
nombre VARCHAR(100),
correo VARCHAR(100)
);

Consultar

# SELECT \* FROM usuarios;

Insertar usuario

# INSERT INTO usuarios (nombre, correo) VALUES ('Luis Mendoza', 'luis@gmail.com');

Creamos tabla con JSON

CREATE TABLE productos (
id SERIAL PRIMARY KEY,
data JSONB
);

Insertamos un producto

# INSERT INTO productos (data) VALUES ('{"nombre":"Laptop","precio":3500,"marca":"Lenovo"}');

# select \* from productos;
