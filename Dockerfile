FROM programistyk/php-runtimes:7.2-nginx
ADD . /app
ADD config.nginx /etc/nginx/sites-enabled/default
ADD fuelio.ini /usr/local/etc/php/conf.d/fuelio.ini