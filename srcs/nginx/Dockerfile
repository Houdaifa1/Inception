FROM    debian:bullseye

RUN     apt-get update && apt-get install nginx -y

# apt install openssl
# openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /certs/nginx_cert.key -out /certs/nginx_cert.crt

# delete default http config
RUN     rm -f /etc/nginx/conf.d/default.conf \
        && rm -f /etc/nginx/sites-enabled/default \
        && rm -f /etc/nginx/sites-available/default

RUN     mkdir /certs

COPY	./conf/default.conf /etc/nginx/conf.d/default.conf

EXPOSE  443

CMD     ["nginx","-g", "daemon off;"]
