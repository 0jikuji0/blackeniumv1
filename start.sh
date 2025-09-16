#!/bin/bash
# Créer la base de données si elle n'existe pas
touch /var/www/html/database/database.sqlite
chown www-data:www-data /var/www/html/database/database.sqlite
chmod 664 /var/www/html/database/database.sqlite

# Exécuter les migrations pour créer les tables
php /var/www/html/artisan migrate --force

# Démarrer Apache
apache2-foreground