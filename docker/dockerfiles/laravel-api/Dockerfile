FROM composer:latest as composer-builder
COPY ./composer.json ./composer.lock /var/www/html/
WORKDIR /var/www/html
RUN mkdir -p /var/www/html \
    && mkdir -p /var/www/html/database/seeds \
    && mkdir -p /var/www/html/database/factories \
    && composer install --no-scripts --ignore-platform-reqs --no-dev --prefer-dist

FROM node:18-alpine AS assets-builder
WORKDIR /tmp
RUN apk add --no-cache git openssl
RUN npm install -g vite
# COPY *.js jsconfig.json package.json package-lock.json public ./
COPY . ./
RUN npm ci --include=dev
ARG ENV_FILE
ARG APP_URL
# COPY ${ENV_FILE} ${ENV_FILE}
# RUN cat ${ENV_FILE} | grep MIX_ > .env || true
# COPY . .
COPY --from=composer-builder /var/www/html/vendor /tmp/vendor
RUN npm run build && rm -rf node_modules



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
RUN cp ./docker/conf/laravel-api/production-settings.ini $PHP_INI_DIR/conf.d/ \
    && cp ./docker/conf/laravel-api/pool.conf $PHP_INI_DIR/../php-fpm.d/ \
    # Nginx config
    && cp ./docker/conf/laravel-api/nginx.conf /etc/nginx/nginx.conf \
    && cp ./docker/conf/laravel-api/app.conf /etc/nginx/sites-enabled/app.conf \
    # Supervisor config
    && cp ./docker/conf/laravel-api/supervisor.conf /etc/supervisor/conf.d/supervisord.conf \
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
        /var/www/html/bootstrap/cache \
    && mkdir /var/run/php && \
    rm $PHP_INI_DIR/../php-fpm.d/zz-docker.conf && \
    rm $PHP_INI_DIR/../php-fpm.d/www.conf && \
    rm $PHP_INI_DIR/../php-fpm.d/www.conf.default \
    && nginx -t && nginx -V && chmod 777 /tmp

#add assets from build stage
COPY --from=assets-builder /tmp/public/ ./public/

EXPOSE 80
# Let supervisord start nginx & php-fpm
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
