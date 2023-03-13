FROM bitnami/php-fpm:latest

#Cache all RUN commands
RUN apt-get update && apt-get -y upgrade

#As recommended from BitNami official docs
RUN apt-get update && apt-get install build-essential libtool autoconf unzip wget -y

#OpenSSL - as explained in the PHP MongoDB Driver Documentation 
RUN apt-get update && apt-get install libssl-dev -y

#Update PECL
RUN pecl channel-update pecl.php.net

#Build MongoDB Driver
RUN wget https://pecl.php.net/get/mongodb-1.15.1.tgz \
    && tar xzf mongodb-1.15.1.tgz \
    && cd mongodb-1.15.1 \
    && phpize \
    && ./configure --with-php-config=/opt/bitnami/php/bin/php-config --with-mongodb-ssl=openssl \
    && make \
    && make install\
    && echo "extension=mongodb.so" > /opt/bitnami/php/etc/conf.d/mongo.ini

#Composer
ENV COMPOSER_ALLOW_SUPERUSER=1
COPY --from=composer:2.4 /usr/bin/composer /usr/bin/composer
COPY ./app/composer.* ./
RUN composer install --prefer-dist --no-dev --no-scripts --no-progress --no-interaction
COPY ./app .
RUN composer dump-autoload --optimize