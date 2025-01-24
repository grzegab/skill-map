FROM php:8.4-fpm

# Maintainer Information
MAINTAINER Grzegorz Gabryel <greg@grzegab.eu>

# Install required dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev libzip-dev zlib1g-dev unzip libicu-dev xvfb libfontconfig && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Install and enable PECL extensions
RUN pecl install pcov-1.0.11 \
    && pecl install redis-5.3.7 \
    && docker-php-ext-enable pcov redis

# Install PHP extensions
RUN docker-php-ext-install -j$(nproc) \
    pdo_pgsql pgsql zip intl opcache \
    && docker-php-ext-enable opcache

# Copy any additional PHP configuration
COPY php-additional.ini $PHP_INI_DIR/conf.d/

# Install Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Set the working directory
RUN mkdir -p /data/www && chown -R www-data:www-data /data/www
WORKDIR /data/www