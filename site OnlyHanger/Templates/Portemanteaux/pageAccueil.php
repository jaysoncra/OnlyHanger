<h1>Page d'accueil</h1>
<?php if(isset($_SESSION["user"])) : ?>
    <a href="createPorteManteau" class="btn btn-secondary">crée le porteManteau</a>
<?php endif ?>
<p>Ce sera une superbe page d'accueil</p>

<div class="flex wrap space-evenly">
    <?php foreach ($porteManteaux as $porteManteau) : ?> <!--récup tout les porteManteau-->
        <div class ="border">
            <u><h2>Presentation du <?= $porteManteau->PortemanteauNom ?></h2></u> 
        </div>
        <?php if(isset($_SESSION["user"])) : ?>
            <div class="flex">
                <h3 class="text-danger">plus d'info =========================></h3>
                <a href="/voirMonPorteManteau?PortemanteauID=<?=$porteManteau->PortemanteauID ?>" class="btn btn-secondary">Clique</a> <!--/voirLeCombattant = uri--> <!--?combattantId = $combattant->combattantId = recup l'id du combattant en qst. En soi voir le combattant en qst grace a l'id.-->
                <a href="/suppPorteManteau?PortemanteauID=<?=$porteManteau->PortemanteauID ?>" class="btn btn-secondary">supprimer</a>
            </div>
        <?php endif ?>
    <?php endforeach ?>