# Signalement

L’outil signalement permettra à chaque consommateur de signaler directement les anomalies constatées dans sa vie de tous les jours (chez son épicier, dans un bar..), de manière très rapide et très simple auprès du professionnel.

Plus d'information ici : https://beta.gouv.fr/startup/signalement.html

# Développement

- Variable d'environnement de configuration
   - DATABASE_URL
   - BASE_URL
- Initialiser ou mettre à jour la base de donnée : `php index.php migrate`
   - La variable DATABASE_URL de base de donnée doit être configuré