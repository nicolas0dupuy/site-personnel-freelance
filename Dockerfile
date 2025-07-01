# --- Étape 1 : Le Point de Départ ---
# On part d'une image officielle qui contient déjà Apache et PHP.
# C'est comme acheter un fond de tarte pré-cuit.
# On utilise une version spécifique (PHP 8.2 et Apache "Bookworm") pour la stabilité.
FROM php:8.2-apache-bookworm

# --- Étape 2 : Copie de notre site ---
# On copie tout le contenu de notre dossier de projet actuel...
# ...dans le dossier où Apache s'attend à trouver les sites web à l'intérieur du conteneur.
COPY . /var/www/html/

# --- Étape 3 (Optionnel mais recommandé) : Permissions ---
# On s'assure que le serveur Apache a bien les droits pour lire nos fichiers.
RUN chown -R www-data:www-data /var/www/html

# La recette est terminée. Le serveur Apache se lancera automatiquement
# car c'est le comportement par défaut de l'image de base que nous avons choisie.
