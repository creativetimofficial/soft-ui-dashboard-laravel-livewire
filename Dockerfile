# Use the official PHP image with Apache
FROM php:8.2-apache

# Install dependencies and PHP extensions in smaller steps with error logs
RUN apt-get update || tail -n 100 /var/log/apt/term.log
RUN apt-get install -y apt-utils || tail -n 100 /var/log/apt/term.log
RUN apt-get install -y libzip-dev zip unzip libonig-dev libxml2-dev libicu-dev default-mysql-client || tail -n 100 /var/log/apt/term.log

# Install additional common libraries required for PHP extensions
RUN apt-get install -y libpng-dev libjpeg62-turbo-dev libfreetype6-dev || tail -n 100 /var/log/apt/term.log

# Install and configure PHP extensions one by one
RUN docker-php-ext-install pdo pdo_mysql || tail -n 100 /var/log/apt/term.log
RUN docker-php-ext-install mbstring || tail -n 100 /var/log/apt/term.log
RUN docker-php-ext-install zip || tail -n 100 /var/log/apt/term.log
RUN docker-php-ext-install bcmath || tail -n 100 /var/log/apt/term.log
RUN docker-php-ext-install tokenizer || tail -n 100 /var/log/apt/term.log

# Configure and install the intl extension separately
RUN apt-get install -y libicu-dev || tail -n 100 /var/log/apt/term.log
RUN docker-php-ext-configure intl || tail -n 100 /var/log/apt/term.log
RUN docker-php-ext-install intl || tail -n 100 /var/log/apt/term.log

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/local/bin/composer

# Copy the Laravel app into the container
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Install Laravel dependencies using Composer
RUN composer install --no-dev --optimize-autoloader || tail -n 100 /var/log/apt/term.log

# Set correct permissions for Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80 for Apache
EXPOSE 80

# Clean up apt cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Configure Apache to serve the public directory
COPY ./docker/000-default.conf /etc/apache2/sites-available/000-default.conf


