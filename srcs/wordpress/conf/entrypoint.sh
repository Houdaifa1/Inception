#!/bin/bash
set -e

if [ ! -f /var/www/html/index.php ]; then
    echo "[INFO] WordPress not found in volume, copying..."
    cp -r /wordpress_src/* /var/www/html/
fi
cp /var/www/html/wp-config-sample.php /var/www/html/wp-config.php

sed -i \
  -e "s|username_here|$DB_USER|" \
  -e "s|password_here|$DB_PASSWORD|" \
  -e "s|database_name_here|$DB_NAME|" \
  -e "s|localhost|$DB_HOST|" \
  /var/www/html/wp-config.php 

echo "[INFO] Starting PHP-FPM..."
exec "$@"
