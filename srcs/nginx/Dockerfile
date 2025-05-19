FROM    debian:bullseye

RUN     apt-get update && apt-get install nginx -y

# apt install openssl
# openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /certs/nginx_cert.key -out /certs/nginx_cert.crt

RUN	mkdir /certs

COPY	./certs/nginx_cert.crt /certs/nginx_cert.crt

COPY	./certs/nginx_cert.key /certs/nginx_cert.key

COPY	./conf/default.conf /etc/nginx/conf.d/default.conf

EXPOSE  443

CMD     ["nginx","-g", "daemon off;"]
