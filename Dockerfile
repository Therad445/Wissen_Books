FROM dockerhub.greensight.ru/ensi-tech/php-base-image:8.2-master-2023sep11-1-swoole

COPY . /var/www/


# Устанавливаем необходимые пакеты и расширения
# RUN apt-get update && apt-get install -y \
#     libpq-dev \
#     libzip-dev \
#     unzip \
#     git \
#     && docker-php-ext-install pdo_pgsql zip


# Устанавливаем Composer
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# RUN composer install --no-interaction --optimize-autoloader --no-dev


# Создаем рабочую директорию
# WORKDIR /var/www/html

# Копируем конфигурацию Apache
# COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Открываем порт 80 для Apache
# EXPOSE 80

# Запускаем Apache в фоновом режиме
# CMD ["apache2-foreground"]