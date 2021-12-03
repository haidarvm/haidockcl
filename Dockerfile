FROM fedora:latest
#install php-basic
RUN swupd update && swupd bundle-add php-basic 
#copy file
WORKDIR /var/www
COPY . /var/www/
EXPOSE 8
CMD ["php","-S","0.0.0.0:80", "-t", "/var/www/"]
