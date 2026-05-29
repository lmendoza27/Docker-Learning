# Docker Nginx + PHP Environment 🚀

Proyecto Dockerizado con Nginx y PHP-FPM utilizando buenas prácticas modernas de Docker Compose.

## 📚 Tecnologías utilizadas

- Docker
- Docker Compose
- Nginx
- PHP-FPM
- Redes custom
- Variables de entorno (.env)
- Healthchecks
- Ambientes DEV / PROD

---

# 📁 Estructura del proyecto

```bash
docker-nginx-php/
│
├── app/
│   └── index.php
│
├── docker/
│   ├── nginx/
│   │   └── default.conf
│   │
│   └── php/
│       └── Dockerfile
│
├── .env
├── docker-compose.yml
├── docker-compose.dev.yml
├── docker-compose.prod.yml
└── README.md
```

---

# 📌 ¿Qué se aprendió en este proyecto?

## ✅ 1. Redes custom en Docker

Se creó una red interna llamada `backend` para permitir la comunicación entre Nginx y PHP-FPM de manera aislada.

Ubicación:

```yaml
networks:
  backend:
    driver: bridge
```

Uso dentro de servicios:

```yaml
networks:
  - backend
```

### Beneficios

- Comunicación interna entre contenedores
- Mayor seguridad
- Mejor organización de arquitectura

---

# ✅ 2. Healthchecks

Se implementó un healthcheck para validar que PHP-FPM esté funcionando correctamente.

Ubicación:

```yaml
healthcheck:
  test: ["CMD", "php-fpm", "-t"]
  interval: 10s
  timeout: 5s
  retries: 3
```

### Beneficios

- Docker detecta si el servicio está realmente operativo
- Evita dependencias levantadas incorrectamente

---

# ✅ 3. depends_on profesional

Nginx depende del estado saludable de PHP.

Ubicación:

```yaml
depends_on:
  php:
    condition: service_healthy
```

### Beneficios

- Nginx espera hasta que PHP esté listo
- Reduce errores al iniciar servicios

---

# ✅ 4. Variables de entorno (.env)

Se utilizaron variables externas para evitar hardcodear configuraciones.

Archivo:

```env
APP_PORT=8080
PHP_VERSION=8.3
APP_ENV=dev
```

Uso:

```yaml
ports:
  - "${APP_PORT}:80"
```

### Beneficios

- Configuración flexible
- Diferentes ambientes sin modificar código

---

# ✅ 5. Docker Compose por ambientes

Se separó la configuración en:

- Base
- Desarrollo
- Producción

Archivos:

```bash
docker-compose.yml
docker-compose.dev.yml
docker-compose.prod.yml
```

---

# 🛠️ Levantar ambiente DEV

```bash
docker compose \
-f docker-compose.yml \
-f docker-compose.dev.yml \
up -d
```

---

# 🚀 Levantar ambiente PROD

```bash
docker compose \
-f docker-compose.yml \
-f docker-compose.prod.yml \
up -d
```

---

# 🌐 Configuración de Nginx

Archivo:

```bash
docker/nginx/default.conf
```

Responsabilidades:

- Servir archivos PHP
- Redirigir peticiones a PHP-FPM
- Configurar root del proyecto

---

# 🐘 Configuración PHP-FPM

Archivo:

```bash
docker/php/Dockerfile
```

Responsabilidades:

- Construcción de imagen PHP
- Instalación de extensiones
- Configuración del entorno PHP

---

# 📂 Aplicación PHP

Archivo:

```bash
app/index.php
```

Archivo simple para validar:

- comunicación Nginx ↔ PHP
- variables de entorno
- funcionamiento del stack

---

# 🧠 Conceptos aprendidos

- Contenerización moderna
- Arquitectura multi-contenedor
- Comunicación entre servicios Docker
- Configuración por ambientes
- Buenas prácticas de Docker Compose
- Separación de responsabilidades
- Orquestación básica de servicios

---

# 📌 Próximas mejoras sugeridas

- PostgreSQL
- Redis
- pgAdmin
- Nginx Proxy Manager
- Multi-stage builds
- Docker volumes persistentes
- CI/CD con GitHub Actions

---

# 👨‍💻 Autor

Luis Mendoza
