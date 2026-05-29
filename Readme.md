Sí existe Docker Desktop para Linux, pero en Linux mucha gente no lo usa porque Docker “normal” ya funciona bastante bien sin interfaz gráfica.

En Windows/Mac, Docker Desktop prácticamente es necesario porque Docker corre mediante una VM interna.
En Linux, Docker corre nativamente sobre el kernel, entonces Docker Desktop es opcional.

Para crear y correr el node
docker build -t mi-node-app .
docker run -p 3000:3000 mi-node-app
