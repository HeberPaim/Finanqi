FROM php:8.3-fpm-alpine

# Install necessary libraries for GD
RUN apk --update --no-cache add \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    postgresql-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Set the working directory
WORKDIR /var/www

# Copy application code
COPY . .

# Install Composer dependencies
RUN apk --no-cache add curl && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer && composer install

RUN composer install
# Expose port 9000 and start PHP-FPM
EXPOSE 9000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=9000"]