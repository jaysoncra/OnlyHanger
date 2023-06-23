<?php

require_once "Controllers/portemanteauxController.php";
require_once "Model/portemanteauModel.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/index.php" || $uri === "/"){
    $porteManteaux = selectAllManteau($pdo);
    ///$porteManteau = selectLeManteau($pdo);
    require_once "Templates/Portemanteaux/pageAccueil.php";
}

elseif (str_contains($uri,"/voirMonPorteManteau")){
    $porteManteau = selectLeManteau($pdo);
    require_once "Templates/Portemanteaux/voirMonPorteManteau.php";
}

elseif (str_contains($uri,"/suppPorteManteau")){
        $porteManteau = selectLeManteau($pdo);
        supprimer1Manteau($pdo);
        header("location:/index.php"); // redirection

}

elseif ($uri === "/createPorteManteau" ) {
    if(isset($_POST["btnEnvoi"])){ // si le bouton est cliqué
        createPortemanteau($pdo); // creation 
        header("location:/index.php");
    }
    require_once "Templates/Portemanteaux/createPorteManteau.php";
}

elseif (str_contains($uri,'/modifyPorteManteau')) {
    if (isset($_POST['btnEnvoi'])) {
        modifyPorteManteau($pdo, $_GET["PortemanteauID"]); // $_GET["combattantId"]) = recupere le combattantId deja existant
        header("location:/index.php");
    }
    $porteManteau = selectLeManteau($pdo);
    require_once "Templates/Portemanteaux/createPorteManteau.php";
}   