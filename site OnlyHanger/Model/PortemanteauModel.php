<?php
/*
function DeleteAllUtilisateurPortemanteau($pdo)
{
    try {
        $query = "delete from portemanteau where UtilisateurID=:UtilisateurID;";
        $deleteUtilisateurPortemanteau = $pdo->prepare($query);
        $deleteUtilisateurPortemanteau -> execute([
            'UtilisateurID' => $_SESSION["utilisateur"]
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function createPortemanteau($pdo){
    try {
        $query = "insert into portemanteau(PortemanteauNom, PortemanteauPrix, PortemanteauDescription, PortemanteauCouleur, UtilisateurID, MagasinID) values (:PortemanteauNom, :PortemanteauPrix, :PortemanteauDescription, :PortemanteauCouleur, :UtilisateurID, :MagasinID)";
        $ajoutePortemanteau = $pdo->prepare($query);
        $ajoutePortemanteau->execute([
            'PortemanteauNom' => $_POST['portemanteau'],
            'PortemanteauPrix' => $_POST['prix'],
            'PortemanteauDescription' => $_POST['description'],
            'PortemanteauCouleur' => $_POST['couleur'],
            'UtilisateurID' => $_POST['utilisateur'],
            'MagasinID' => $_POST['shop']
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}*/