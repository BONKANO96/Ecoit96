# Ecoit96

# ECO-IT
ECO-IT est une application web développée en Symfony 6.1.12. Ce projet vise à offrir une plateforme pour gérer des formations avec une architecture basée sur le modèle MVC, intégrant Twig pour les templates et Doctrine pour la gestion de la base de données.

## Table des Matières
- [Prérequis](#prérequis)
- [Installation](#installation)
- [Configuration](#configuration)
- [Utilisation](#utilisation)
- [Fonctionnalités](#fonctionnalités)
- [Contribuer](#contribuer)
- [License](#license)
- [Contact](#contact)

## Prérequis
Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine : 
- PHP 8.1 ou supérieur 
- Composer 
- Symfony CLI 
- Un serveur de base de données (MySQL, PostgreSQL, etc.) 
- Git

## Installation
Clonez le dépôt sur votre machine locale :

```bash
git clone https://github.com/bkjr/ecoit.git
cd ecoit

Installez les dépendances du projet via Composer :

bash
Copier le code
composer install
Configuration
Variables d'environnement
Copiez le fichier .env pour créer un fichier de configuration spécifique à votre environnement :

bash
Copier le code
cp .env .env.local
Modifiez ensuite le fichier .env.local pour configurer votre base de données et d'autres paramètres :

makefile
Copier le code
DATABASE_URL="mysql://user:password@127.0.0.1:3306/nom_de_la_base?serverVersion=5.7"
Migration de la base de données
Créez les tables nécessaires dans la base de données en exécutant les migrations Doctrine :

bash
Copier le code
php bin/console doctrine:migrations:migrate
Lancer le serveur de développement
Utilisez la CLI Symfony pour démarrer le serveur local :

bash
Copier le code
symfony server:start
L'application sera accessible à l'adresse http://127.0.0.1:8000.

Utilisation
Une fois le serveur démarré, vous pouvez commencer à utiliser l'application. Les principales fonctionnalités incluent :

Gestion des formations (CRUD)
Interface utilisateur développée avec Twig
Authentification et gestion des utilisateurs
Fonctionnalités
Gestion des formations : Ajouter, modifier, supprimer et afficher les formations.
Utilisation de Doctrine ORM : Pour une gestion fluide des bases de données.
Système d'authentification : Gestion des utilisateurs avec rôles (administrateur, utilisateur).
Templates Twig :
