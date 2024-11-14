-- Requete SQL pour la création de la base de données et des tables

CREATE DATABASE contacts_db;
USE contacts_db;

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telephone VARCHAR(15) NOT NULL
);
