CREATE TABLE Magasin (
  MagasinID INT AUTO_INCREMENT NOT NULL PRIMARY KEY NOT NULL,
  MagasinNom VARCHAR(255) NOT NULL,
  MagasinVille VARCHAR(255) NOT NULL
);
CREATE TABLE Categorie (
  CategorieID INT AUTO_INCREMENT NOT NULL PRIMARY KEY NOT NULL,
  CategorieLibelle VARCHAR(255) NOT NULL
);
CREATE TABLE Panier (
  PanierID INT AUTO_INCREMENT PRIMARY KEY,
  PanierPrixTotal INT
);
CREATE TABLE Utilisateur (
  UtilisateurID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  UtilisateurNom varchar(255) NOT NULL,
  UtilisateurPrenom varchar(255) NOT NULL,
  UtilisateurVille varchar(255) NOT NULL,
  UtilisateurEmail varchar(255) NOT NULL Unique,
  UtilisateurMotDePasse varchar(255) NOT NULL,
  UtilisateurRole varchar(255) NOT NULL,
  PanierID int,
  FOREIGN KEY (PanierID) REFERENCES Panier(PanierID)
);
CREATE TABLE Portemanteau (
    PortemanteauID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    PortemanteauNom VARCHAR(255) NOT NULL,
    PortemanteauPrix INT NOT NULL,
    PortemanteauDescription TEXT NOT NULL,
    PortemanteauCouleur VARCHAR(255) NOT NULL,
    PortemanteauImage VARCHAR(255) NOT NULL,
    UtilisateurID int NOT NULL,
    MagasinID int NOT NULL,
    FOREIGN KEY (UtilisateurID) REFERENCES Utilisateur(UtilisateurID),
    FOREIGN KEY (MagasinID) REFERENCES Magasin(MagasinID)
);
CREATE TABLE Portemanteau_Categorie (
  Portemanteau_CategorieID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  PortemanteauID INT NOT NULL,
  CategorieID INT NOT NULL,
  FOREIGN KEY (PortemanteauID) REFERENCES Portemanteau(PortemanteauID),
  FOREIGN KEY (CategorieID) REFERENCES Categorie(CategorieID)
);





