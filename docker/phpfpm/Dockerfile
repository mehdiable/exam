FROM php:8.1.8-fpm

WORKDIR "/application"

ARG DEBIAN_FRONTEND=noninteractive

RUN chmod 777 /tmp

RUN apt-get update && apt-get install -y gcc make autoconf nano \
    zlib1g-dev libzip-dev unzip libcurl4-openssl-dev pkg-config libssl-dev libc-dev cron

RUN docker-php-ext-install zip

RUN pecl install mongodb && docker-php-ext-enable mongodb

# Create the log file to be able to run tail
RUN touch /var/log/cron.log

# Health check
RUN echo '#!/bin/bash' > /healthcheck && \
	echo 'env -i SCRIPT_NAME=/health SCRIPT_FILENAME=/health REQUEST_METHOD=GET cgi-fcgi -bind -connect 127.0.0.1:9000 || exit 1' >> /healthcheck && \
	chmod +x /healthcheck

# Clean up
RUN apt-get autoremove -y && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
