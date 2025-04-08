#!/bin/sh

PHP_MEMORY_LIMIT=${PHP_MEMORY_LIMIT:-512}
sed -e "s~%%MEMORY_LIMIT%%~${PHP_MEMORY_LIMIT}m~" \
    /opt/etc/custom-php.ini.tpl > /usr/local/etc/php/conf.d/custom-php.ini

sed -e "s~%%MEMORY_LIMIT%%~$PHP_MEMORY_LIMIT~" \
	/etc/supervisor/conf.d/laravel-worker.conf.tpl > /etc/supervisor/supervisord.conf

exec supervisord --nodaemon --configuration /etc/supervisor/supervisord.conf
