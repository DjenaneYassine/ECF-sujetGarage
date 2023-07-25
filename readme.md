# ECF - Garage V. Parrot - Application Web

## Description

Vincent Parrot, fort de ses 15 années d'expérience dans la réparation automobile, a ouvert son propre garage à Toulouse en 2021.
Ce repository contient le code source de l'application web vitrine du Garage V. Parrot. L'application permet aux clients de découvrir les services offerts par le garage, les véhicules d'occasion en vente, ainsi que les avis des clients.

## Prérequis

Avant d'exécuter l'application en local, assurez-vous d'avoir les éléments suivants installés sur votre système :

- Node.js (version x.x.x) : [lien de téléchargement](https://nodejs.org/)
- MySQL (version x.x.x) : [lien de téléchargement](https://www.mysql.com/)

## Installation

Suivez les étapes ci-dessous pour installer et exécuter l'application en local :

1. **Clonez ce repository sur votre machine en utilisant la commande suivante** :
```
git clone https://github.com/DjenaneYassine/ECF-sujetGarage.git
```
2. **Accédez au répertoire du projet** :
```
cd ECF-sujetGarage
```

3. **Configuration de la base de données** :

- Installez et configurez MySQL sur votre système.
- Exécutez le script SQL fourni dans le fichier `script.sql` pour créer la base de données et ses tables.

4. **Comment lancer un serveur local PHP avec XAMPP**

## Étapes pour lancer un serveur local PHP avec XAMPP

1. **Téléchargement de XAMPP**

   Téléchargez XAMPP à partir du site officiel : [Téléchargement XAMPP](https://www.apachefriends.org/fr/index.html)

2. **Installation de XAMPP**

   Installez XAMPP en exécutant le fichier d'installation que vous avez téléchargé. Suivez les instructions d'installation qui s'affichent à l'écran.

3. **Démarrage de XAMPP**

   Une fois l'installation terminée, démarrez XAMPP en cherchant l'application XAMPP Control Panel dans votre système d'exploitation. Ensuite, lancez Apache et MySQL en cliquant sur les boutons "Start".

4. **Placement de vos fichiers PHP**

   Placez le fichier ECF-sujetGarage dans le fichier "htdocs" de XAMPP. Ce répertoire se trouve généralement dans le dossier d'installation de XAMPP.
   
5. **Accès à l'application**

   Ouvrez votre navigateur web et entrez l'URL suivante : [http://localhost/](http://localhost/) ou [http://127.0.0.1/](http://127.0.0.1/). Vous verrez la page d'accueil de XAMPP.

6. **Accès à votre application PHP**

   Pour accéder à vos fichiers PHP, placez-les dans le répertoire "htdocs" de XAMPP. Par exemple, si vous avez un fichier nommé "index.php" dans le répertoire "htdocs", vous pourrez y accéder en entrant l'URL suivante dans votre navigateur : [http://localhost/index.php](http://localhost/index.php)

7. **Arrêt du serveur local**

   Lorsque vous avez terminé de travailler avec XAMPP, n'oubliez pas d'arrêter Apache et MySQL en cliquant sur les boutons "Stop" dans XAMPP Control Panel.

8. **Vous devriez maintenant pouvoir naviguer et interagir avec l'application localement.**

## Création d'un administrateur pour le back-office :

Un administrateur a déjà été créé dans la base de données avec les informations suivantes :
  - Identifiant : Vincent Parrot
  - Mot de passe : 0000

## Notes supplémentaires

- Assurez-vous que le serveur MySQL est en cours d'exécution et que vous avez correctement configuré les informations de connexion à la base de données dans le fichier `config.php`.
- **Les fichiers de création et d’alimentation de la base de données sont dans le fichier CRUD-Admin**


N'hésitez pas à me contacter si vous avez des questions ou des problèmes avec l'application !
