FROM    debian:bullseye

RUN     apt update && apt upgrade -y && \
        apt install -y php php-fpm && \
        apt install -y php-mysql php-curl tar wget

RUN     wget https://wordpress.org/wordpress-6.8.1.tar.gz

RUN     tar -xvf wordpress-*tar.gz

RUN     rm wordpress-*tar.gz

EXPOSE  9000

CMD     ["php-fpm", "-F", "daemon off;"]