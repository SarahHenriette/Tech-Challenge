Cette application est un système permettant de créer une liste de noms qui composeront une équipe. 

J'ai choisi de faire cette exercice avec Symfony v.3.4. Pour l'installation il faut simplement une base de donnée nommé "techchallenge_equipage" et faire un php bin/console make:migration dans la console pour récupéré la table dans la bdd. J'ai utilisé MySql pour la gestion de base de données. 

Une fois les données récupéré dans la bdd faire un "symfony server:start" dans la console pour lancer l'appli. Pour le serveur j'ai utilisé Wampserver64. 

Une fois l'appli ouvert, rentré un nom d'argonaute , cliquer sur envoyer et le nom devrais se rajouter à la liste des membres de l'équipage
