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

function connectUser($pdo){
    try {
        $query = "select * from utilisateur where UtilisateurEmail = :UtilisateurEmail and UtilisateurMotDePasse = :UtilisateurMotDePasse";
        $connectUser = $pdo->prepare($query);
        $connectUser-> execute([
            "UtilisateurEmail" => $_POST["email"],
            "UtilisateurMotDePasse" => $_POST["mot_de_passe"]
        ]);
        $user = $connectUser ->fetch();
        var_dump($user);
        $_SESSION["user"] = $user;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function updateUser($pdo)
{
    try {
        $query = "update utilisateur set UtilisateurNom = :UtilisateurNom, UtilisateurPrenom = :UtilisateurPrenom, UtilisateurMotDePasse = :UtilisateurMotDePasse, UtilisateurEmail = :UtilisateurEmail, UtilisateurVille = :UtilisateurVille where UtilisateurID = :UtilisateurID";
        $updateUtilisateur = $pdo->prepare($query);
        $updateUtilisateur->execute([
            "UtilisateurNom" => $_POST["nom"],
            "UtilsateurPrenom" => $_POST["prenom"],
            "UtilsateurMotDePasse" => $_POST["mot_de_passe"],
            "UtilisateurEmail" => $_POST["email"],
            "UtilisateurVille" => $_POST["villes"],
            "UtilisateurID" => $_SESSION["user"]->UtilisateurID
        ]);
    }   catch (PDOException $e) { 
        $message = $e->getMessage();
        die($message);

    }
}

function updateSession($pdo)
{
    try {
        $query = "select * from utilisateur where UtilisateurNom = :UtilisateurNom and UtilisateurMotDePasse = :UtilisateurMotDePasse";
        $selectUser = $pdo->prepare($query);
        $selectUser->execute([
            "UtilisateurNom" => $_SESSION["user"]->UtilisateurNom,
            "UtilisateurMotDePasse" => $_SESSION["user"]->UtilisateurMotDePasse
        ]);
        $user = $selectUser->fetch();
        $_SESSION["user"]=$user;
    } catch (PDOException $e) { 
        $message = $e->getMessage();
        die($message);

    }
}
/*$recupUser = $pdo->prepare("select * from utilisateur where UtilisateurPrenom = ?");
$recupUser->execute(array($_POST["UtilisateurPrenom"]));

$_SESSION["UtilisateurPrenom"] = $_POST["prenom"];
$_SESSION["UtilisateurID"] = $recupUser->fetch()["UtilisateurID"];
/*function connectUtilisateur($pdo){
    try {
        $query = "select * from utilisateur where UtilisateurEmail = :UtilisateurEmail and UtilisateurMotDePasse = :UtilisateurMotDePasse";
        $connectUtilisateur = $pdo->prepare($query);
        $connectUtilisateur->execute([
            "UtilisateurEmail"=> $_POST["email"],
            "UtilisateurMotDePasse" => $_POST["mot_de_passe"]
        ]);
        $utilisateur = $connectUtilisateur->fetch();
        var_dump($utilisateur);
        if($utilisateur) {
            $_SESSION["utilisateur"] = $utilisateur;
        }
    } catch (PDOException $e) { 
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