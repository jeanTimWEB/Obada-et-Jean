CREATE DATABASE Ballades; 
---------------------------------------------
USE Ballades;
CREATE USER "admin"@"%" identified by "admin1234";
GRANT ALL PRIVILEGES ON Ballades.* TO "admin"@"%"; 
---------------------------------------------
CREATE TABLE Promenades(
	id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR (255),
    pays VARCHAR (255),
    image VARCHAR (255),
    auteur VARCHAR (255),
    codePostale INT,
    depart VARCHAR (255),
    arrivee VARCHAR (255),
    description TEXT    
);
---------------------------------------------

INSERT into Promenades(titre, pays, image, auteur, codePostale, depart, arrivee, description)
VALUE ('Promenades didactiques à la rencontre des arbres', 'Suisse', 'http://www.ville-geneve.ch/fileadmin/public/images/agenda_et_actualites/150_ans_SEVE/sentier-bois-de-la-batie-agenda-et-actualites-ville-geneve-cover.jpg','VilleGeneve',1200,'Eaux-vives','Gare','Parmi les plus de 40000 arbres que compte Genève, certains méritent une attention spéciale. Leurs caractéristiques particulières en font des éléments incontournables du patrimoine arboré genevois. Le Service des espaces verts vous invite à la rencontre de 150 arbres, à découvrir au détour de six promenades didactiques.');