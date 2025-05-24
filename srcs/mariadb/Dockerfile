FROM    debian:bullseye

RUN     apt update && apt upgrade -y && \
        apt install -y mariadb-server

RUN     mkdir -p /run/mysqld/ && chown mysql:mysql /run/mysqld

EXPOSE  3306

CMD     ["mysqld"]
