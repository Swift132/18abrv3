#!/bin/bash

mkdir dbvol
mkdir mongodbvol
mkdir redisvol

sudo chmod 666 /var/run/docker.sock

docker-compose up -d 

docker exec -it php /bin/bash && docker-php-ext-install mysqli && apachectl restart