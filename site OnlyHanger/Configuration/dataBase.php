<?php

try {
    $strConnection ='mysql:host=127.0.0.1;dbname=OnlyHanger;';

    $pdo = new PDO($strConnection, "root", "", [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    $msg = 'ERREUR PDO dans ' .  $e->getMessage();
    die ("ERREUR : " . $e -> getMessage());
}
?>