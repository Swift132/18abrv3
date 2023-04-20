#!/bin/sh
docker exec -it php /bin/bash
docker-php-ext-install mysqli && apachectl restart