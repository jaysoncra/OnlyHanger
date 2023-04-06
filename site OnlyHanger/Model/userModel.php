<?php

function createUtilisateur($pdo){
    try {
        $query = "insert into utilisateurs(UtilisateurNom, UtilisateurPrenom, UtilisateurMotDePasse, role) values (:UtilisateurNom, :UtilisateurPrenom, :, :UtilisateurMotDePasse, :role)";
        $ajouteUtilisateur = $pdo->prepare($query);
        $ajouteUtilisateur->execute([
            'UtilisateurNom' => $_POST['nom'],
            'UtilisateurPrenom' => $_POST['prenom'],
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
        $query = "select * from utilisateur where utiliPseudo = :utiliPseudo and utiliMdp = :utiliMdp";
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
        $query = "select * from utilisateur where id=:id";
        $chercheUtilisateur = $pdo->prepare($query);
        $chercheUtilisateur->execute([
            'id' => $_SESSION['Utilisateur']->id
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
        $query = "update utilisateurs set UtilisateurNom=:UtilisateurNom, UtilisateurPrenom=:UtilisateurPrenom, UtilisateurEmail=:UtilisateurEmail, UtilisateurMotDePasse=:UtilisateurMotDePasse where id=:id";
        $changeUtilisateur = $pdo->prepare($query);
        $changeUtilisateur->execute([
            'UtilisateurNom' => $_POST['nom'],
            'UtilsateurPrenom' => $_POST['prenom'],
            'UtilsateurMotDePasse' => $_POST['mot_de_passe'],
            'UtilisateurEmail' => $_POST['email'],
            'UtilisateurID' => $_SESSION['Utilisateur']->id
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
