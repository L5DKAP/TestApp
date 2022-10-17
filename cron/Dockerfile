FROM php:8.1-fpm-alpine

COPY crontab_docker /etc/crontabs/root  

CMD [ "crond", "-f" ]