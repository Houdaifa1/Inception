FROM    debian:bullseye

RUN     apt-get update && apt-get install nginx -y

EXPOSE  80

CMD     ["nginx","-g", "daemon off;"]
