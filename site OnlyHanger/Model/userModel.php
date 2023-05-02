<?php

function createUtilisateur($pdo){
    try {
        $query = "insert into utilisateurs(UtilisateurNom, UtilisateurPrenom, UtilisateurMotDePasse, UtilisateurVille, UtilisateurEmail, Utilisateur role) values (:UtilisateurNom, :UtilisateurPrenom, :, :UtilisateurMotDePasse, :UtilisateurVille, :UtilisateurEmail, :role)";
        $ajouteUtilisateur = $pdo->prepare($query);
        $ajouteUtilisateur->execute([
            'UtilisateurNom' => $_POST['nom'],
            'UtilisateurPrenom' => $_POST['prenom'],
            'UtilisateurVille' => $_POST['ville'],
            'UtilisateurEmail' => $_POST['email'],
            'UtilisateurMotDePasse' => $_POST['mot_de_passe'],
            'role' => 'Utilisateur'
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function searchUtilisateur($pdo){
    try {
        $query = "select * from utilisateur where UtilisateurEmail = :UtilisateurEmail and UtilisateurMotDePasse = :UtilisateurMotDePasse";
        $connectUtilisateur = $pdo->prepare($query);
        $connectUtilisateur->execute([
            'UtilisateurMotDePasse' => $_POST['mot_de_passe'],
        ]);
        $Utilisateur = $connectUtilisateur->fetch();
        if($Utilisateur) {
            $_SESSION['Utilisateur'] = $Utilisateur;
        }
    } catch (PDOException $e) { 
        $message = $e->getMessage();
        die($message);

    }
}
function UpdateSession($pdo)
{
    try {
        $query = "select * from Utilisateur where UtilisateurID=:UtilisateurID";
        $chercheUtilisateur = $pdo->prepare($query);
        $chercheUtilisateur->execute([
            'UtilisateurID' => $_SESSION['Utilisateur']-> ID
        ]);
        $Utilisateur = $chercheUtilisateur->fetch();
        $_SESSION['Utilisateur']=$Utilisateur;
    } catch (PDOException $e) { 
        $message = $e->getMessage();
        die($message);

    }
}
function UpdateUtilisateur($pdo)
{
    try {
        $query = "update utilisateurs set UtilisateurNom=:UtilisateurNom, UtilisateurPrenom=:UtilisateurPrenom, UtilisateurEmail=:UtilisateurEmail, UtilisateurMotDePasse=:UtilisateurMotDePasse, UtilisateurVille=:UtilisateurVille where UtilisateurID=:UtilisateurID";
        $changeUtilisateur = $pdo->prepare($query);
        $changeUtilisateur->execute([
            'UtilisateurNom' => $_POST['nom'],
            'UtilsateurPrenom' => $_POST['prenom'],
            'UtilsateurMotDePasse' => $_POST['mot_de_passe'],
            'UtilisateurEmail' => $_POST['email'],
            'UtilisateurVille' => $_POST['Ville'],
            'UtilisateurID' => $_SESSION['Utilisateur']-> ID
        ]);
    }   catch (PDOException $e) { 
        $message = $e->getMessage();
        die($message);

    }
}
function DeleteUtilisateur($pdo)
{
    try {
        $query = "delete from Utilisateur where UtilisateurID=:UtilisateurID;";
        $deleteUtilisateur = $pdo->prepare($query);
        $deleteUtilisateur -> execute([
            'UtilisateurID' => $_SESSION["Utilisateur"]
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
