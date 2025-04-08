FROM composer:latest as composer-builder
COPY ./composer.json ./composer.lock /var/www/html/
WORKDIR /var/www/html
RUN mkdir -p /var/www/html \
    && mkdir -p /var/www/html/database/seeds \
    && mkdir -p /var/www/html/database/factories \
    && composer install --no-scripts --ignore-platform-reqs --no-dev --prefer-dist

FROM php:8.3-fpm as my-php
# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && apt update \
    && apt install -yqq \
        curl \
        libmemcached-dev \
        libzip-dev \
        libz-dev \
        libpq-dev \
        libjpeg-dev \
        libpng-dev \
        libfreetype6-dev \
        libssl-dev \
        libwebp-dev \
        libxpm-dev \
        libmcrypt-dev \
        libonig-dev \
        libssl-dev \
        zlib1g-dev \
        libicu-dev \
        #install utils
        zip \
        nano \
        #unzip for faster composer installs
        unzip \
        #Install nginx
        nginx \
        #Install supervisor
        supervisor \
    && docker-php-ext-configure gd \
        --prefix=/usr \
        --with-webp \
        --with-jpeg \
        --with-xpm \
        --with-freetype \
    && docker-php-ext-install -j$(nproc) bcmath pdo_mysql zip intl gd pcntl opcache exif \
    #remove dev libraries
    #test
    && apt purge -y \
        gcc make \
        libmemcached-dev \
        libzip-dev \
        libz-dev \
        libpq-dev \
        libjpeg-dev \
        libpng-dev \
        libfreetype6-dev \
        libssl-dev \
        libwebp-dev \
        libxpm-dev \
        libmcrypt-dev \
        libonig-dev \
        libssl-dev \
        zlib1g-dev \
        libicu-dev \
        perl \
    #Runtime deps for gd
    && apt install libpng16-16 libzip4 libwebp7 libjpeg62 libxpm4 libfreetype6 \
    && apt-get clean -yqq && \
    apt-get autoclean -yqq && \
    apt-get autoremove -yqq && \
    rm -rf /var/cache/apt/archives/* /var/cache/apt/*.bin /var/lib/apt/lists/* \
    && mkdir -p /var/www/html

FROM my-php

COPY --from=composer-builder /var/www/html/ /var/www/html/
COPY --from=composer-builder /usr/bin/composer /usr/bin/composer
COPY . /var/www/html
ARG ENV_FILE

    # PHP config
RUN mv ./docker/conf/laravel-queue-worker/laravel-worker.conf.tpl /etc/supervisor/conf.d/ \
    && mv ./docker/conf/laravel-queue-worker/supervisord-watchdog.py /opt/supervisord-watchdog.py \
    # Copy scripts
    && mv ./docker/conf/laravel-queue-worker/init.sh /usr/local/bin/init.sh \
    && cp ${ENV_FILE} .env \
    rm -fr bootstrap/cache/*; \
	php artisan route:cache; \
	php artisan event:cache; \
	php artisan view:cache; \
	php artisan storage:link; \
    composer dump-autoload --classmap-authoritative \
    && composer check-platform-reqs \
    && chown -R www-data:www-data \
        /var/www/html/storage \
        /var/www/html/bootstrap/cache
# Define working directory
WORKDIR /etc/supervisor/conf.d

# Run supervisor
ENTRYPOINT ["/bin/sh", "/usr/local/bin/init.sh"]
