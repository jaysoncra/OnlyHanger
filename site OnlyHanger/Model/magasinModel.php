<?php

function createMagasin($pdo){
    try {
        $query = "insert into Magasin(MagasinNom, MagasinVille) values (:MagasinNom, :MagasinVille)";
        $ajouteMagasin = $pdo->prepare($query);
        $ajouteMagasin->execute([
            'MagasinNom' => $_POST['nom'],
            'MagasinVille' => $_POST['ville']
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function UpdateMagasin($pdo)
{
    try {
        $query = "update Magasin set MagasinNom=:MagasinNom, MagasinVille=:MagasinVille where MagasinID=:MagasinID";
        $changeMagasin = $pdo->prepare($query);
        $changeMagasin->execute([
            'MagasinNom' => $_POST['nom'],
            'MagasinVille' => $_POST['Ville'],
            //'MagasinID' =>
        ]);
    }   catch (PDOException $e) { 
        $message = $e->getMessage();
        die($message);

    }
}
function DeleteMagasin($pdo)
{
    try {
        $query = "delete from Magasin where MagasinID=:MagasinID;";
        $deleteMagasin = $pdo->prepare($query);
        $deleteMagasin -> execute([
            //'MagasinID' => 
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}