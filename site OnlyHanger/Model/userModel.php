<?php

function createUser($pdo){
    try {
        $query = "insert into utilisateur (UtilisateurNom, UtilisateurPrenom,  UtilisateurVille, UtilisateurEmail,  UtilisateurMotDePasse, UtilisateurRole) values (:UtilisateurNom, :UtilisateurPrenom, :UtilisateurVille, :UtilisateurEmail, :UtilisateurMotDePasse, :UtilisateurRole)";
        $createUser = $pdo->prepare($query);
        $createUser->execute([
            "UtilisateurNom" => $_POST["nom"],
            "UtilisateurPrenom" => $_POST["prenom"],
            "UtilisateurVille" => $_POST["villes"],
            "UtilisateurEmail" => $_POST["email"],
            "UtilisateurMotDePasse" => $_POST["mot_de_passe"],
            "UtilisateurRole" => "user"
            
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
/*
function connectUtilisateur($pdo){
    try {
        $query = "select * from utilisateur where UtilisateurEmail = :UtilisateurEmail and UtilisateurMotDePasse = :UtilisateurMotDePasse";
        $connectUtilisateur = $pdo->prepare($query);
        $connectUtilisateur->execute([
            "UtilisateurEmail"=> $_POST["email"],
            "UtilisateurMotDePasse" => $_POST["mot_de_passe"]
        ]);
        $utilisateur = $connectUtilisateur->fetch();
        var_dump($utilisateur);
        /*if($utilisateur) {
            $_SESSION["utilisateur"] = $utilisateur;
        }
    } catch (PDOException $e) { 
        $message = $e->getMessage();
        die($message);

    }
}
function updateSession($pdo)
{
    try {
        $query = "select * from utilisateur where UtilisateurID=:UtilisateurID";
        $chercheUtilisateur = $pdo->prepare($query);
        $chercheUtilisateur->execute([
            "UtilisateurID" => $_SESSION["utilisateur"]-> ID
        ]);
        $utilisateur = $chercheUtilisateur->fetch();
        $_SESSION["utilisateur"]=$utilisateur;
    } catch (PDOException $e) { 
        $message = $e->getMessage();
        die($message);

    }
}
function updateUtilisateur($pdo)
{
    try {
        $query = "update utilisateur set UtilisateurNom=:UtilisateurNom, UtilisateurPrenom=:UtilisateurPrenom, UtilisateurEmail=:UtilisateurEmail, UtilisateurMotDePasse=:UtilisateurMotDePasse, UtilisateurVille=:UtilisateurVille where UtilisateurID=:UtilisateurID";
        $updateUtilisateur = $pdo->prepare($query);
        $updateUtilisateur->execute([
            "UtilisateurNom" => $_POST["nom"],
            "UtilsateurPrenom" => $_POST["prenom"],
            "UtilsateurMotDePasse" => $_POST["mot_de_passe"],
            "UtilisateurEmail" => $_POST["email"],
            "UtilisateurVille" => $_POST["villes"],
            "UtilisateurID" => $_SESSION["utilisateur"]-> ID
        ]);
    }   catch (PDOException $e) { 
        $message = $e->getMessage();
        die($message);

    }
}
function deleteUtilisateur($pdo)
{
    try {
        $query = "delete from utilisateur where UtilisateurID=:UtilisateurID;";
        $deleteUtilisateur = $pdo->prepare($query);
        $deleteUtilisateur -> execute([
            "UtilisateurID" => $_SESSION["utilisateur"]
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
*/