# 1. Ir a la carpeta

cd C:\Users\luis.mendoza\Desktop\Luis\Docker\laravel-app

# 2. Crear el proyecto Laravel en /src (requiere composer)

Remove-Item -Recurse -Force .\src\*
composer create-project laravel/laravel src

# 3. Levantar los contenedores

docker-compose up -d --build

# 4. Generar la app key de Laravel

# docker exec laravel_app php artisan key:generate

docker exec laravel_app php artisan migrate
docker exec laravel_app php artisan config:clear
