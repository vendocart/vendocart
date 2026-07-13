FROM php:8.4-fpm
LABEL authors="Mojtaba Pakzad"

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y \
    git curl zip unzip \
    pkg-config \
    libpq-dev libzip-dev libicu-dev \
    libjpeg62-turbo-dev libpng-dev libfreetype6-dev libwebp-dev \
    libonig-dev \
 && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
 && docker-php-ext-install -j$(nproc) pdo_pgsql mbstring zip exif pcntl intl gd \
# && pecl install redis \
# && docker-php-ext-enable redis \
 && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY composer.json composer.lock ./
RUN composer install --no-interaction --prefer-dist --no-progress --no-scripts
COPY . .
RUN composer dump-autoload --optimize --no-scripts \
 && chown -R www-data:www-data /var/www \
 && chmod -R 755 /var/www/storage \
 && chmod -R 755 /var/www/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
