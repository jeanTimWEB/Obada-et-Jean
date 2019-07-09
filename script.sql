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

