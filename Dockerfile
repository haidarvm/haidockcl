FROM clearlinux:base
#install php-basic
RUN swupd update && swupd bundle-add php-basic 
#copy file
COPY index.php /var/www/html/index.php
EXPOSE 8
CMD ["php","-S","0.0.0.0:80", "-t", "/var/www/html"]
