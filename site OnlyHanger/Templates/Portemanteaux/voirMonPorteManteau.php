<div class="flex space-around">
        <div class="">  
                <ol>
                        <li><p>Nom</p><?= $porteManteau->PortemanteauNom ?></li>
                        <li><p>Prix</p><?= $porteManteau->PortemanteauPrix ?></li>
                        <li><p>description</p><?= $porteManteau->PortemanteauDescription?></li>
                        <li><p>couleur</p><?= $porteManteau->PortemanteauCouleur?></li>

                        <p></p>
                        <a href="/modifyPorteManteau?PortemanteauID=<?=$porteManteau->PortemanteauID ?>" class="btn btn-secondary">modifier</a>
                </ol>
        </div>
</div>