# Signalement

L’outil signalement permettra à chaque consommateur de signaler directement les anomalies constatées dans sa vie de tous les jours (chez son épicier, dans un bar..), de manière très rapide et très simple auprès du professionnel.

Plus d'information ici : https://beta.gouv.fr/startup/signalement.html

# Développement

- Variable d'environnement de configuration
   - DATABASE_URL
   - BASE_URL
   - LOG_THRESHOLD
- Initialiser ou mettre à jour la base de donnée : `php index.php migrate`
   - La variable DATABASE_URL de base de donnée doit être configuré (`DATABASE_URL="posgres://user:password@localhost/signalement" php index.php migrate`)

- mettre à jour les données chargées dans les menus déroulants "place-category", "type", "anomalies"
modifier le fichier /assets/data/anomalies.csv (enregistrer avec séparater de champs "," et séparateur de texte """
Il faut  que tous les noms soient parfaitement identiques pour que cela fonctionne bien + Il faut aussi que tous les éléments d'un même type ou catégorie se suivent.
