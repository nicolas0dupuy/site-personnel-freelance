# Étape 1 : On part d'une image officielle Apache/PHP
FROM php:8.2-apache-bookworm

# ÉTAPE SUPPLÉMENTAIRE : Installation de l'extension PHP BCMath
# Requis par la bibliothèque Google Protobuf, qui est une dépendance de la bibliothèque Secret Manager.
RUN docker-php-ext-install bcmath

# Étape 2 : On copie les fichiers du site dans le dossier web par défaut
# Ceci inclut le dossier vendor/ créé par Composer
COPY . /var/www/html/

# Étape 3 : On s'assure des bonnes permissions
RUN chown -R www-data:www-data /var/www/html

# Étape 4 : Copier notre script de démarrage pour gérer le port
COPY run-apache.sh /usr/local/bin/

# Étape 5 : Rendre notre script exécutable
RUN chmod +x /usr/local/bin/run-apache.sh

# Étape 6 : Spécifier que notre script est la commande de démarrage du conteneur
CMD ["run-apache.sh"]