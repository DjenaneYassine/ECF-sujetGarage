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

4. **Installez les dépendances du projet en exécutant la commande suivante** :
```
npm install
```

5. **Démarrez le serveur Node.js en exécutant** :
```
npm start
```

6. **Une fois le serveur démarré, accédez à l'application dans votre navigateur à l'adresse suivante** :
```
http://localhost:3000
```
7. **Création d'un administrateur pour le back-office :**
Un administrateur a déjà été créé dans la base de données avec les informations suivantes :
  - Identifiant : vparrot
  - Mot de passe : aaaa

8. **Vous devriez maintenant pouvoir naviguer et interagir avec l'application localement.**


## Notes supplémentaires

- Assurez-vous que le serveur MySQL est en cours d'exécution et que vous avez correctement configuré les informations de connexion à la base de données dans le fichier `config.php`.
-


N'hésitez pas à me contacter si vous avez des questions ou des problèmes avec l'application !









