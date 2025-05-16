FROM    debian:bullseye

RUN     apt-get update && apt-get install nginx -y

# apt install openssl
# openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /certs/nginx_cert.key -out /certs/nginx_cert.pub

EXPOSE  443

CMD     ["nginx","-g", "daemon off;"]
