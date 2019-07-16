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
    description TEXT,
    ville VARCHAR(255)  
);
---------------------------------------------

INSERT into Promenades(titre, pays, image, auteur, codePostale, depart, arrivee, description,ville)
VALUE ('Promenades didactiques à la rencontre des arbres', 'Suisse', 'http://www.ville-geneve.ch/fileadmin/public/images/agenda_et_actualites/150_ans_SEVE/sentier-bois-de-la-batie-agenda-et-actualites-ville-geneve-cover.jpg','VilleGeneve',1200,'Eaux-vives','Gare','Parmi les plus de 40000 arbres que compte Genève, certains méritent une attention spéciale. Leurs caractéristiques particulières en font des éléments incontournables du patrimoine arboré genevois. Le Service des espaces verts vous invite à la rencontre de 150 arbres, à découvrir au détour de six promenades didactiques.','Genève');
-------------------------------------------------
ALTER TABLE Promenades
ADD ville VARCHAR (255); 
-----------------------------------------------------

SELECT * FROM `Promenades`; 

---------------------------------------------------
create TABLE users(
id INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR (255),
prenom VARCHAR (255), 
email VARCHAR (255), 
username VARCHAR (255), 
password VARCHAR (255));  
    -------------------------------------------------
    INSERT into users(nom,prenom,email,username,password)VALUES ('Alsaid','Obada','obada@gmail.com','Obada','obada1234');

    ---------------------------

  select * from users WHERE username = 'Obada';

  --------------------------------------------------
  
    