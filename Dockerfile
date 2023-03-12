# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Install any needed packages
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libzip-dev

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mysqli zip

# Enable Apache modules
RUN a2enmod rewrite headers

# Set the Apache document root to the current directory
ENV APACHE_DOCUMENT_ROOT /var/www/html

# Expose port 80 for web traffic
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
