# Docker en Linux

Sí existe Docker Desktop para Linux, pero muchos desarrolladores no lo utilizan porque Docker Engine funciona de forma nativa sobre el kernel de Linux y no requiere una capa adicional de virtualización.

## Diferencias según el sistema operativo

### Windows y macOS

Docker Desktop es prácticamente indispensable, ya que Docker se ejecuta mediante una máquina virtual interna para proporcionar un entorno Linux compatible.

### Linux

Docker se ejecuta directamente sobre el kernel del sistema operativo, por lo que Docker Desktop es opcional. La mayoría de usuarios trabajan únicamente con la línea de comandos (`docker` y `docker compose`).

---

# Construcción y ejecución de una aplicación Node.js

## Construir la imagen

```bash
docker build -t mi-node-app .
```

## Ejecutar el contenedor

```bash
docker run -p 3000:3000 mi-node-app
```

### Explicación

- `docker build`: crea una imagen a partir del `Dockerfile`.
- `-t mi-node-app`: asigna el nombre `mi-node-app` a la imagen.
- `docker run`: crea e inicia un contenedor basado en la imagen.
- `-p 3000:3000`: expone el puerto 3000 del contenedor en el puerto 3000 de la máquina anfitriona.

Una vez iniciado el contenedor, la aplicación estará disponible en:

```text
http://localhost:3000
```
