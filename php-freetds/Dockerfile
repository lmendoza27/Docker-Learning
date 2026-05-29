FROM php:8.3-apache

RUN apt-get update && apt-get install -y \
    freetds-bin \
    freetds-dev \
    libsybdb5 \
    unixodbc \
    unixodbc-dev

# SOLO habilitar extensión nativa
RUN docker-php-ext-install pdo_dblib || true

COPY index.php /var/www/html/index.php