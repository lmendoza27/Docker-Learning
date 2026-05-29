FROM nginx:latest

COPY index.html /usr/share/nginx/html/index.html

# Para despegar esto hay que hacer lo siguiente  ''' docker build -t mi-html . ''' 

# Esto creará una imagen en docker llamado mi-html

# Para correrlo es con ''' docker run -d -p 8080:80 mi-html '''

# ***Aquí está la magia***

# Tu HTML NO está corriendo:

# directo en Windows,
# ni en IIS,
# ni en XAMPP.

# Está dentro de un contenedor aislado.