FROM php:latest
RUN apt update
#copy file
COPY index.php /var/www/html/index.php
EXPOSE 8
CMD ["php","-S","0.0.0.0:80", "-t", "/var/www/html"]
