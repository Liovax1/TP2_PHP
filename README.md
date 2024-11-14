# TP 2 : Gestion de contacts en PHP
Auteur : Liova Hovakimyan

## Contexte :

Cette application nous permet de gérer une liste de contacts avec des fonctionnalités CRUD (Create, Read, Update, Delete).

## Installation
1. Créer le fichier `contacts_db.sql` dans le projet ou l'executer dans phpmyadmin en requete sql.
2. Configurer la connexion à la base de données dans `db.php` avec les identifiants "root" et sans mot de passe.
3. Ouvrir `index.php` dans votre navigateur pour accéder à l'application.

## Structure des fichiers

- `index.php` : Affiche la liste des contacts dans un tableau
- `add_contact.php` : Ajoute un contact
- `edit_contact.php` : Affiche le formulaire de modification d'un contact
- `update_contact.php` : Met à jour un contact
- `delete_contact.php` : Supprime un contact
- `db.php` : Fichier de connexion à la base de données
- `contacts_db.sql` : Script de création de la base de données

## Exigences
- PHP 8.2.18
- MySQL 8.3.0

Lien du projet GitHub : https://github.com/Liovax1/TP2_PHP.git