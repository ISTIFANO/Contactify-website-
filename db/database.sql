CREATE DATABASE Contactify;
use Contactify;

CREATE Table Contacts(
    id int PRIMARY KEY AUTO_INCRUMENT,
    nom VARCHAR(232) NOT NULL ,
    prenom VARCHAR(232) NOT NULL,
    email VARCHAR(232) NOT NULL,
    telephone INT NOT NULL

);

INSERT INTO `contacts` (id, nom, prenom, email, telephone) VALUES
(NULL, 'Zouhair', 'Mohammed', 'mohammed.zouhair@example.com', '+212636789012'),
(NULL, 'Roudani', 'Imane', 'imane.roudani@example.com', '+212637890123'),
(NULL, 'Chakir', 'Fayçal', 'faycal.chakir@example.com', '+212612345988'),
(NULL, 'Meriem', 'Amine', 'amine.meriem@example.com', '+212624567890'),
(NULL, 'Ait Lhaj', 'Sanaa', 'sanaa.aitlhaj@example.com', '+212630123456'),
(NULL, 'Bousselham', 'Khalil', 'khalil.bousselham@example.com', '+212639876543'),
(NULL, 'Seddiki', 'Nadia', 'nadia.seddiki@example.com', '+212622345678'),
(NULL, 'El Khadir', 'Adil', 'adil.elkhadir@example.com', '+212634123456'),
(NULL, 'Jebbour', 'Imane', 'imane.jebbour@example.com', '+212630876543'),
(NULL, 'Ouahbi', 'Mouad', 'mouad.ouahbi@example.com', '+212625123987'),
(NULL, 'Lakhdar', 'Rania', 'rania.lakhdar@example.com', '+212633456789'),
(NULL, 'Chafik', 'Said', 'said.chafik@example.com', '+212616543210'),
(NULL, 'Karim', 'Salma', 'salma.karim@example.com', '+212624123456'),
(NULL, 'El Hachimi', 'Moulay', 'moulay.elhachimi@example.com', '+212633234567'),
(NULL, 'Ghanem', 'Yassir', 'yassir.ghanem@example.com', '+212631234987'),
(NULL, 'Hamdouch', 'Zineb', 'zineb.hamdouch@example.com', '+212626543210'),
(NULL, 'Laalej', 'Soufiane', 'soufiane.laalej@example.com', '+212636567890'),
(NULL, 'Benhammou', 'Nabil', 'nabil.benhammou@example.com', '+212629876543'),
(NULL, 'El Idrissi', 'Hafsa', 'hafsa.elidrissi@example.com', '+212617123456'),
(NULL, 'Mimouni', 'Meryem', 'meryem.mimouni@example.com', '+212623456789');
