<h1>Tous les utilisateur sur le site</h1>
<?php 

 
if (!isset($_SESSION['user'])){
  header('location:/');
  exit;
}


$afficher_profil = $pdo->query("SELECT * 
  FROM utilisateur 
  WHERE UtilisateurID <> ?",
  array($_SESSION['user']));
$afficher_profil = $afficher_profil->fetchAll();
?>
