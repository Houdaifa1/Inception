#!/bin/bash

if [ ! -f /var/html/www/index.php ]; then
    echo "Copying WordPress files to volume..."
    cp -r /wordpress_src/* /var/www/html/
fi

echo "Starting PHP-FPM..."
exec "$@"
