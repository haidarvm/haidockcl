# haidockcl
Testing PHP with clearlinux podman docker

## build dockerize php clearlinux base using podman Part 2
# create foldername
mkdir haidockcl
cd haidockcl
# create index.php 
nano index.php
<?php echo "haidart test podman" ?>

# create Dockerfile
nano Dockerfile
FROM clearlinux:base
#install php-basic
RUN swupd update && swupd bundle-add php-basic 
#copy file
COPY index.php /var/www/html/index.php
EXPOSE 80
CMD ["php","-S","0.0.0.0:80", "-t", "/var/www/html"]

# build an image
sudo podman build -t haidockcl:v1 . 

# run image
sudo podman run -d -p9191:80 haidockcl:v1
