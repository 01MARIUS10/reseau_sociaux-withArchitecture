DROP DATABASE IF EXISTS reseaux_db ;
DROP DATABASE IF EXISTS reseaux_db ;

CREATE DATABASE IF NOT EXISTS reseaux_db;

USE reseaux_db;

CREATE TABLE IF NOT EXISTS User (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) ,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    isAdmin INT DEFAULT 0 
);

INSERT INTO User (nom,prenom, email, password,isAdmin)
VALUES 
('Peter','PAN','peter@example.com',  'hashed_password',0),
('Mickey','Mousse','mk@example.com',  'hashed_password',0),
('Aladin','Kaid','al@kaid.com',  'hashed_password',1);


CREATE TABLE IF NOT EXISTS Publication (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT ,
    author_id INT NOT NULL 
);

INSERT INTO Publication (titre,description, author_id)
VALUES 
('Publication Mpoka be','ity no pub mpoka be voaloany',1),
('Publication Mangina be','ity no pub mpoka be voaloany',2),
('Examen be','examen be ilay php radem na androany ngamba',3);


CREATE TABLE IF NOT EXISTS Commentaire (
    id INT AUTO_INCREMENT PRIMARY KEY,
    description TEXT NOT NULL,
    author_id INT NOT NULL 
);
INSERT INTO Commentaire (description, author_id)
VALUES 
('Zany ve zareo',1),
('Eny moa ko',2);


CREATE TABLE IF NOT EXISTS Reaction (
    id INT AUTO_INCREMENT PRIMARY KEY,
    label VARCHAR(255) NOT NULL,
    image TEXT NOT NULL 
);
INSERT INTO Reaction (label, image)
VALUES 
("J'aime",""),
("J'adore",""),
("Triste",""),
("Colere",""),
("Solidaire","");


CREATE TABLE IF NOT EXISTS commentaire_publication (
    commentaire_id INT NOT NULL,
    publication_id INT NOT NULL
);

INSERT INTO commentaire_publication (commentaire_id, publication_id)
VALUES 
(1,1), 
(2,1);

CREATE TABLE IF NOT EXISTS reaction_publication (
    reaction_id INT NOT NULL,
    publication_id INT NOT NULL,
    author_id INT NOT NULL
);

INSERT INTO reaction_publication (reaction_id, publication_id,author_id)
VALUES 
(1,1,1), 
(2,1,2), 
(3,1,3), 
(1,2,1), 
(2,3,1);
