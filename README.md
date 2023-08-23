# Boilerplate Travel

## Démarrer
Cloner ce projet, se déplacer à la racine et lancer la commande :

```docker compose up --build```

Le projet est configuré sur le port 80. En cas d'erreur à la fin du build, vérifier que vous n'avez pas d'autres applications qui utilisent le port 80 (par exemple apache).

Si c'est le cas, arrêtez le service qui utilise le port 80 et relancez l'execution de docker :

Par exemple : ``` sudo service apache2 stop```

## Execution du projet

Se déplacer dans le dossier racine et lancer la commande :

```docker compose start```

Ceci lancera tout le projet ainsi que la base de donnée et quelques données fictives. 

Rendez-vous sur http://localhost


## Poster une solution

Ne pas tenter de faire une merge request ou de pousser votre branche sur ce repository. Créez votre propre repository.


