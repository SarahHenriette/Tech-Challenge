
# Titre du projet

Tech Challenge ayant pour but d'être présenté à la Wild code school lors d'un entretien technique.
Cette application est un système permettant de créer une liste de noms qui composeront une équipe.


# Pour commencer

- Cloner le projet dans le dossier de votre choix avec la commande :
git clone https://github.com/SarahHenriette/Tech-Challenge.git

- L'ouvrir dans l'IDE 



# Installation

- Dans la console faire la commande : composer install (pour installer les dependances)
Lors de l'installation, vous allee devoir remplir des données pour créer le fichier parameters.yml qui se trouve dans le dossier "config" dans "app" et qui va permettre la connexion a la bdd.
Voici les données :
    - database_host: 127.0.0.1
    - database_port: null
    - database_name: techchallenge_equipage
    - database_user: root
    - database_password: 
    - mailer_transport: smtp
    - mailer_host: 127.0.0.1
    - mailer_user: null
    - mailer_password: null
    - secret: ThisTokenIsNotSoSecretChangeIt
  
Si les données sont entre parenthèse vous pouvez simplement taper sur la touche "entré".


- Une fois que tout est installé, dans la console taper la commande "php bin/console doctrine:database:create", pour créer la base de donnée

- Dans la console taper la commande "php bin/console doctrine:schema:update --force" pour créer la table dans la bdd.


# Pour lancer l'appli :

- Lancer votre serveur (pour ma part j'utilise wampserver64)
- taper dans la console la commande "symfony server:start"
- cliquer sur le lien http qui apparait avec un fond vert (ctrl+click)
- Normalement sur la page que vous venez d'ouvrir apparait l'appli, pour la tester ajouter un nom d'argonaute, cliquer sur envoyer et celui-ci apparait dans la liste des membres de l'équipage

# Utilisation :
  - Symfony v 3.4

# Auteurs

Elise Rousseau

 
