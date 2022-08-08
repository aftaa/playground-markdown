FROM php:7.4-fpm

RUN apt-get update && apt-get install -y curl git mc wget

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | bash -E

RUN apt-get install -y symfony-cli

WORKDIR /var/www/symfony54

CMD ["php-fpm"]