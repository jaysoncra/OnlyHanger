select version(), current_date;
select current_user();
create table Portemanteau (
PortemanteauID int primary key not null auto_increment,
PortemanteauNom varchar(255) not null,
PortemanteauPrix int not null,
PortemanteauDescription varchar(255) not null,
PortemanteauCouleur varchar(255) not null,
UtilisateurID int,
MagasinID int,
FOREIGN KEY (UtilisateurID) REFERENCES Utilisateur(UtilisateurID),
FOREIGN KEY (MagasinID) REFERENCES Magasin(MagasinID)
);
create table Panier (
PanierID int primary key not null auto_increment
);
create table Magasin (
MagasinID int primary key not null auto_increment,
MagasinNom Varchar(255) not null,
MagasinAdresse varchar(255) not null
);
create table Utilisateur (
UtilisateurID int primary key auto_increment not null,
UtilisateurNom varchar(255) not null,
UtilisateurPrenom varchar(255) not null,
UtilisateurAdresse varchar(255) not null,
UtilisateurEmail varchar(255) not null,
UtilisateurMotDePasse varchar(255),
PanierID int,
foreign key (PanierID) references Panier(PanierID)
);
create table Categorie (
CategorieID int primary key auto_increment not null,
CategorieLibelle varchar(255) not null
);
create table Portemanteau_Categorie (
PortemanteauID int,
CategorieID int,
foreign key (PortemanteauID) references Portemanteau(PortemanteauID),
foreign key (CategorieID) references Categorie(CategorieID)
);
