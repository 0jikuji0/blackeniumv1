#!/bin/bash
set -e

# Créer la DB SQLite si elle n’existe pas
if [ ! -f /var/www/html/database/database.sqlite ]; then
    touch /var/www/html/database/database.sqlite
    chown www-data:www-data /var/www/html/database/database.sqlite
    chmod 664 /var/www/html/database/database.sqlite
fi

# Lancer les migrations
php artisan migrate --force

# Lancer Apache
exec apache2-foreground
