FROM nginx:alpine

# Limpiar nginx
RUN rm -rf /usr/share/nginx/html/*

# Copiar TODO el proyecto
COPY . /usr/share/nginx/html/

EXPOSE 80
