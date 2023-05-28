<?php

require_once "Model/userModel.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/connexion"){
    var_dump($_POST);
    if(isset($_POST["btnEnvoi"])){
        var_dump("cliqued");
        connectUser($pdo);
        header("location:/");
    }
    require_once "Templates/Users/connexion.php";
} elseif ($uri === "/profil"){
    if (isset($_POST["btnEnvoi"])) {
        var_dump("cliqued");
        updateUser($pdo);
        updateSession($pdo);
        header("location:/profil");
    }
    require_once "Templates/Users/inscriptionOrEditProfil.php";
} elseif ($uri === "/message"){
    require_once "Templates/Users/chat.php";
} elseif ($uri === "/deconnexion"){
    session_destroy();
    header("location:/");
} elseif ($uri === "/inscription"){
    var_dump($_POST);
    if(isset($_POST["btnEnvoi"])){
        $messageError = verifData();
        var_dump($messageError);
        if(!isset($messageError)){
            createUser($pdo);
            header("location:/connexion");
        }
    }
    require_once "Templates/Users/inscriptionOrEditProfil.php";
}
function verifData(){
    foreach ($_POST as $key => $value){
        var_dump($key . "=>" . $value);
        if (empty($value)){
            $messageError[$key] = "Votre " . $key . " est vide.";
        }
    } if (isset($messageError)){
        return $messageError;
    } else {
        return false;   
    }
}



/*
require_once "Model/userModel.php";

$uri = $_SERVER["REQUEST_URI"];


if($uri === "/inscription"){
    //  var_dump($_POST);
    if(isset($_POST["btnEnvoi"])) { 
        $messageErrorLogin = verifData();
        if(!$messageErrorLogin) {
            var_dump($pdo);
            createUtilisateur($pdo);
            header('location:/connexion');
        }
    }
    require_once "Templates/users/inscriptionOrEditProfil.php";

} elseif ($uri === "/profil") {

    require_once "Templates/users/inscriptionOrEditProfil.php";

} else if($uri === "/connexion"){

    if(isset($_POST["btnEnvoi"])){ 
        $messageErrorLogin = verifData();
        if(!isset($messageErrorLogin)) {
            connectUtilisateur($pdo);
            header('location:/');
        }
    }
    require_once "Templates/users/connexion.php";

} elseif ($uri === "/profil") {
    if(isset($_POST["btnEnvoi"])) {
        UpdateUtilisateur($pdo);
        UpdateSession($pdo);
        header('location:/profil');
    }
    require_once "Templates/users/profil.php";
} elseif ($uri === "/deconnexion") {
    session_destroy();
    header('location:/');
}



function verifData(){
    foreach ($_POST as $key => $value) {
        if (empty($value)){
            $messageErrorLogin[$key] = "Votre " . $key . " est vide";
            $messageErrorLogin[$key] = str_replace('_', ' ', $key);
            
        } else if (ctype_space($value)){
            $messageErrorLogin[$key] = "Votre " . str_replace('_', ' ', $key) . " est vide";
        }

    }

    if (isset($messageErrorLogin)) {
        return $messageErrorLogin;
    } else {
        return false;
    }
}


?>*/ 