<?php
session_start();
require_once "Configuration/ConnectDataBase.php";
/*$query = "select * from utilisateur";
$sth = $pdo->prepare($query);
$sth->execute();

/* Fetch all of the remaining rows in the result set
print("Fetch all of the remaining rows in the result set:\n");
$result = $sth->fetchAll();
print_r($result);*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyHanger</title>
</head>

<body>
    <header>
        <a href="/">Home</a>

        <?php if(isset($_SESSION["user"])) : ?>
            <a href="message">Chat</a>
            <a href="profil">Profil</a>
            <a href="deconnexion">Sign out</a>
        <?php else : ?>
            <a href="connexion">Sign in</a>
            <a href="inscription">Sign up</a>
        <?php endif ?>

            

    </header>
    <main>
        <?php 
            require_once "Controllers/portemanteauxController.php";
            require_once "Controllers/usersController.php";
        ?>
    </main>
    <footer>
        <h1>Ce sera un footer</h1>
    </footer>
</body>
</html>
 