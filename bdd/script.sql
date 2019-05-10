#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Films
#------------------------------------------------------------

CREATE TABLE Films(
        ID_film      Int  Auto_increment  NOT NULL ,
        titre_film   Varchar (255) NOT NULL ,
        date_sortie  Date NOT NULL ,
        production   Varchar (255) NOT NULL ,
        synopsis     Text NOT NULL ,
        affiche_film Varchar (255) NOT NULL ,
        image_film   Varchar (255) NOT NULL ,
        video_film   Varchar (255) NOT NULL
	,CONSTRAINT Films_PK PRIMARY KEY (ID_film)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Acteurs
#------------------------------------------------------------

CREATE TABLE Acteurs(
        ID_acteur  Int  Auto_increment  NOT NULL ,
        nom_acteur Varchar (255) NOT NULL
	,CONSTRAINT Acteurs_PK PRIMARY KEY (ID_acteur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Genre_film
#------------------------------------------------------------

CREATE TABLE Genre_film(
        ID_genre   Int  Auto_increment  NOT NULL ,
        genre_film Varchar (255)
	,CONSTRAINT Genre_film_PK PRIMARY KEY (ID_genre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Réalisateur
#------------------------------------------------------------

CREATE TABLE Realisateur(
        ID_realisateur  Int  Auto_increment  NOT NULL ,
        nom_realisateur Varchar (255) NOT NULL
	,CONSTRAINT Realisateur_PK PRIMARY KEY (ID_realisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: joue
#------------------------------------------------------------

CREATE TABLE joue(
        ID_acteur Int NOT NULL ,
        ID_film   Int NOT NULL
	,CONSTRAINT joue_PK PRIMARY KEY (ID_acteur,ID_film)

	,CONSTRAINT joue_Acteurs_FK FOREIGN KEY (ID_acteur) REFERENCES Acteurs(ID_acteur)
	,CONSTRAINT joue_Films0_FK FOREIGN KEY (ID_film) REFERENCES Films(ID_film)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: crée
#------------------------------------------------------------

CREATE TABLE cree(
        ID_realisateur Int NOT NULL ,
        ID_film        Int NOT NULL
	,CONSTRAINT cree_PK PRIMARY KEY (ID_realisateur,ID_film)

	,CONSTRAINT cree_Realisateur_FK FOREIGN KEY (ID_realisateur) REFERENCES Realisateur(ID_realisateur)
	,CONSTRAINT cree_Films0_FK FOREIGN KEY (ID_film) REFERENCES Films(ID_film)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: appartient
#------------------------------------------------------------

CREATE TABLE appartient(
        ID_film  Int NOT NULL ,
        ID_genre Int NOT NULL
	,CONSTRAINT appartient_PK PRIMARY KEY (ID_film,ID_genre)

	,CONSTRAINT appartient_Films_FK FOREIGN KEY (ID_film) REFERENCES Films(ID_film)
	,CONSTRAINT appartient_Genre_film0_FK FOREIGN KEY (ID_genre) REFERENCES Genre_film(ID_genre)
)ENGINE=InnoDB;

