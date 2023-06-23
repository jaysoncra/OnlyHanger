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
    <link rel="stylesheet" href="Css/index.css">
    <link rel="stylesheet" href="Css/flex.css">
    <link rel="stylesheet" href="Css/form.css">
    <link rel="stylesheet" href="header.css">

</head>

<body>
    <header>
     <?php
      require_once "Components/header.php";
      ?>
    </header>
    <main>
        <?php 
            require_once "Controllers/portemanteauxController.php";
            require_once "Controllers/usersController.php";
        ?>
    </main>
    <footer>
        <?php 
            require_once "Components/footer.php";
        ?>
    </footer>
</body>
</html>
 