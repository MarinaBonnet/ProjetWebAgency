FROM php:8.2-apache

# Installer Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libssl-dev \
    pkg-config \
    zip \
    curl

# Installer l’extension MongoDB compatible
RUN pecl install mongodb-1.16.0 \
    && docker-php-ext-enable mongodb

RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN git config --global --add safe.directory /var/www/html

RUN composer install --no-interaction --prefer-dist

RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

RUN chmod -R 755 /var/www/html

COPY apache.conf /etc/apache2/conf-available/apache.conf
RUN a2enconf apache

COPY vhost.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80
