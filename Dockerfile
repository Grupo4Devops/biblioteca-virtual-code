FROM php:8.1-apache

# Instalación de las dependencias requeridas
RUN apt-get update \
  && apt-get install -y \
  git \
  zip \
  unzip \
  libzip-dev \
  libgd-dev \
  nodejs \
  npm \
  && docker-php-ext-install \
  pdo_mysql \
  bcmath \
  zip \
  gd

# Habilitar Apache
RUN a2enmod rewrite

# Copiar código al contenedor
COPY . /var/www/html

# Configurar permisos en los directorios y archivos necesarios
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Configurar el sitio en Apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default.conf

# Instalar Composer
WORKDIR /var/www/html
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir /usr/local/bin --filename=composer
RUN composer install

# Copiar el archivo .env.example y renombrarlo a .env
RUN cp .env.example .env

# Configurar variables de entorno
ENV DB_CONNECTION=mysql
ENV DB_HOST=mysql
ENV DB_PORT=3306
ENV DB_DATABASE=grupo4
ENV DB_USERNAME=grupo4
ENV DB_PASSWORD=grupocuatro

# Generar la clave de la aplicación después de que el archivo .env esté disponible
RUN php artisan key:generate
RUN php artisan storage:link
RUN php artisan optimize
RUN php artisan config:clear
RUN php artisan cache:clear
RUN php artisan route:clear
RUN php artisan config:cache

# Instalar dependencias de Node.js y compilar assets de frontend
RUN npm install
RUN npm run build

# Configurar permisos en el directorio de almacenamiento
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Reiniciamos apache
RUN service apache2 restart
# Exponer el puerto 80
EXPOSE 80

# Ejecutar el servidor en primer plano
CMD ["apache2-foreground"]


# TODO: Ejecutar estos comandos:
# docker exec -it biblioteca_virtual php artisan migrate:fresh --seed
# docker exec -it biblioteca_virtual chown -R www-data:www-data /var/www/html/storage
# docker exec -it biblioteca_virtual chmod -R 775 /var/www/html/storage
# docker exec -it biblioteca_virtual php artisan storage:link



