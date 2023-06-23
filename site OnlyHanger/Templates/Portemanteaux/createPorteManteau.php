<form method="post" action="">
    <fieldset>
        <legend><h4><?php if(isset($porteManteau))  : ?>Modifier un porteManteau<?php else : ?>Creer un porteManteau<?php endif ?></h4></legend> <!--isset — Détermine si une variable est déclarée et est différente de null--> <!--si un combattant a été crée alors on lui suggere de modifier ce combattant sinon pas de modif (si elle existe dans la bdd)--> 
        <div class="my-div">
            <section>
                <?php if(isset($_SESSION['user'])) : ?>
                    <p>Nom<input type="text" placeholder="Nom" class="form-control" id="portemanteau" name="portemanteau" value="<?php if (isset($porteManteau)) : ?><?= $porteManteau->PortemanteauNom ?><?php endif ?>" required></p> <!--afficher une coordonnée dans la base de donnée-->
                    <p>Prix<input type="text" placeholder="prix" class="form-control" id="prix" name="prix" value="<?php if (isset($porteManteau)) : ?><?= $porteManteau->PortemanteauPrix ?><?php endif ?>" required></p>
                    <p>description<input type="text" placeholder="description" class="form-control" id="description" name="description" value="<?php if (isset($porteManteau)) : ?><?= $porteManteau->PortemanteauDescription ?><?php endif ?>" required></p>
                    <p>couleur<input type="text" placeholder="couleur" class="form-control" id="couleur" name="couleur" value="<?php if (isset($porteManteau)) : ?><?= $porteManteau->PortemanteauCouleur ?><?php endif ?>" required></p>
                
                        <div class="flex space-evenly">
                            <button name="btnEnvoi" value="envoyer">Ajouter</button> 
                        </div>
                <?php endif ?>
            </section>
        </div>
    </fieldset>
</form>