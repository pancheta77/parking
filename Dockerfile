FROM php:7.2.14

RUN apt-get update \
	&& apt-get install -y libmcrypt-dev mysql-client libpq-dev libmagickwand-dev --no-install-recommends
    #&& pecl install mcrypt && docker-php-ext-enable mcrypt

RUN pecl install imagick xdebug

RUN docker-php-ext-enable imagick xdebug

RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
	&& docker-php-ext-install pdo pdo_mysql pgsql pdo_pgsql mbstring json gd

WORKDIR /app