#!/bin/bash
set -e  

envsubst < /init.sql > /tmp/init.sql

exec mysqld --init-file=/tmp/init.sql