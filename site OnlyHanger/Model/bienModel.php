<?php

function DeleteAllUtilisateurPortemanteau($pdo)
{
    try {
        $query = "delete from Portemanteau where UtilisateurID=:UtilisateurID;";
        $deleteUtilisateurPortemanteau = $pdo->prepare($query);
        $deleteUtilisateurPortemanteau -> execute([
            'UtilisateurID' => $_SESSION["Utilisateur"]
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
