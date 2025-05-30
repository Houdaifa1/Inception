FROM    debian:bullseye

RUN     apt update && apt upgrade -y && \
        apt install -y php7.4 php7.4-fpm && \
        apt install -y php7.4-mysql php7.4-curl tar wget

ENV     DB_NAME=db1 DB_USER=user1 \
        DB_PASSWORD=user123 DB_HOST=mariadb:3306
          

RUN     mkdir -p /run/php/

RUN     mkdir -p /var/www/html/

RUN     sed -i 's|listen = /run/php/php7.4-fpm.sock| listen = 9000|' /etc/php/7.4/fpm/pool.d/www.conf

RUN     wget https://wordpress.org/wordpress-6.8.1.tar.gz

RUN     tar -xvf wordpress-*tar.gz

RUN     rm wordpress-*tar.gz

COPY    ./conf/index.php wordpress/index.php

RUN     mv wordpress /wordpress_src


COPY    ./conf/entrypoint.sh   /entrypoint.sh

RUN     chmod +x /entrypoint.sh


EXPOSE  9000

ENTRYPOINT [ "/entrypoint.sh" ]

CMD     ["php-fpm7.4", "-F"]
