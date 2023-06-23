<?php

function selectAllManteau($pdo)
{
    try {
        $query = "select * from portemanteau";
        $selectAllManteau = $pdo->prepare($query);
        $selectAllManteau->execute();
        $porteManteaux = $selectAllManteau->fetchAll();
        return $porteManteaux;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}



function selectLeManteau($pdo)
{ 
    try {
        
        $query = "select * from portemanteau where PortemanteauID = :PortemanteauID";
        
        $selectLeManteau = $pdo->prepare($query);
        $selectLeManteau->execute([
            'PortemanteauID' => $_GET['PortemanteauID']
        ]);
        $porteManteau = $selectLeManteau->fetch();
        return $porteManteau;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function supprimer1Manteau($pdo)
{
    try {
        $query = 'delete from portemanteau where PortemanteauID = :PortemanteauID';
        $supprimer1Manteau = $pdo->prepare($query);
        $supprimer1Manteau->execute([
            'PortemanteauID' => $_GET['PortemanteauID']
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
            'UtilisateurID' => $_SESSION["utilisateur"] = 33,
            'MagasinID' => $_POST['shop'] = 1
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function modifyPorteManteau($pdo, $PortemanteauID){
    try {
        $query = 'update portemanteau set PortemanteauNom = :PortemanteauNom, PortemanteauPrix = :PortemanteauPrix, PortemanteauDescription = :PortemanteauDescription, PortemanteauCouleur = :PortemanteauCouleur where PortemanteauID = :PortemanteauID';
        $modifyPorteManteau = $pdo->prepare($query);
        $modifyPorteManteau->execute([
            'PortemanteauNom' => $_POST['portemanteau'],
            'PortemanteauPrix' => $_POST['prix'],
            'PortemanteauDescription' => $_POST['description'],
            'PortemanteauCouleur' => $_POST['couleur'],
            'PortemanteauID' => $PortemanteauID
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
/*
function DeleteAllUtilisateurManteau($pdo)
{
    try {
        $query = "delete from portemanteau where UtilisateurID=:UtilisateurID;";
        $deleteUtilisateurManteau = $pdo->prepare($query);
        $deleteUtilisateurManteau -> execute([
            'UtilisateurID' => $_SESSION["user"] -> UtilisateurID
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

*/