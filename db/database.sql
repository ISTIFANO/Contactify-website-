CREATE DATABASE Contactify;
use Contactify;

CREATE Table Contacts(
    id int PRIMARY KEY AUTO_INCRUMENT,
    nom VARCHAR(232) NOT NULL ,
    prenom VARCHAR(232) NOT NULL,
    email VARCHAR(232) NOT NULL,
    telephone INT NOT NULL

);