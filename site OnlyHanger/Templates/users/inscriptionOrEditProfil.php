<h1>Page d'inscription</h1>
<form method="post" action="">
    <fieldset>
        <legend>Inscription</legend>
        <div>
            <label for="Nom">Nom</label>
            <input type="text" pattern="^[( )a-zA-Z]+$" placeholder="Nom" id="Nom" name="nom" value="<?php if (isset($_SESSION["user"])) : ?><?= $_SESSION["user"]->UtilisateurNom ?><?php endif ?>"  required minlength="2" maxlength="25">
            <?php if(isset($messageErrorLogin['nom'])) : ?> <p><?= $messageErrorLogin['nom'] ?></p> <?php endif ?>
        </div>
        <div>
            <label for="Prenom">Prénom</label>
            <input type="text" pattern="^[( )a-zA-Z]+$" placeholder="Prénom" id="Prenom" name="prenom" value="<?php if (isset($_SESSION["user"])) : ?> <?= $_SESSION["user"]->UtilisateurPrenom ?><?php endif ?>" required minlength="2" maxlength="25">
            <?php if(isset($messageErrorLogin['prenom'])) : ?> <p><?= $messageErrorLogin['prenom'] ?></p> <?php endif ?>
        </div>
        <div>
            <label for="Ville">Ville</label>
            
            <select name="villes" required id="ville-select" value="<?php if (isset($_SESSION["user"])) : ?> <?= $_SESSION["user"]->UtilisateurVille ?><?php endif ?>">
             <!--la value ne fonctionnne pas pour mettre les valeur qui sont dans la base de donné dans la page profil -->  
                <option value="">--Veulliez choisir une ville--</option>
                <option value="Anvers">Anvers</option>
                <option value="Bastogne">Bastogne</option>
                <option value="Bruges">Bruges</option>
                <option value="Bruxelles">Bruxelles</option>
                <option value="Gand">Gand</option>
                <option value="Houffalize">Houffalize</option>
                <option value="Liège">Liège</option>
                <option value="Namur">Namur</option>
                <option value="Charleroi">Charleroi</option>
                <option value="Louvain">Louvain</option>
                <option value="Mons">Mons</option>
                <option value="Malines">Maline</option>
                <option value="Alost">Alost</option>
                <option value="La_louvière">La Louvière</option>
                <option value="Hasselt">Hasselt</option>
                <option value="Saint-nicolas">Saint-Nicolas</option>
                <option value="Courtrai">Courtrai</option>
                <option value="Ostende">Ostende</option>
                <option value="Tournai">Tournai</option>
                <option value="Genk">Genk</option>
                <option value="Seraing">Seraing</option>
                <option value="Roulers">Roulers</option>
                <option value="Mouscron">Mouscron</option>
                <option value="Vervier">Vervier</option>
            </select>
        
        <div >
            <label for="Email">Email</label>
            <input type="email" placeholder="Email" id="Email" name="email" value="<?php if (isset($_SESSION["user"])) : ?> <?= $_SESSION["user"]->UtilisateurEmail ?><?php endif ?>" required>
            <?php if(isset($messageErrorLogin['email'])) : ?> <p><?= $messageErrorLogin['email'] ?></p> <?php endif ?>
        </div>
        <div >
            <label for="Password">Mot de passe</label>
            <input type="<?php if(isset($_SESSION["user"])) : ?>text<?php else : ?>password<?php endif ?>" placeholder="Mot de passe" id="Password" name="mot_de_passe" value="<?php if (isset($_SESSION["user"])) : ?> <?= $_SESSION["user"]->UtilisateurMotDePasse ?><?php endif ?>" minlength="8" required>
            <?php if(isset($messageErrorLogin['nom'])) : ?> <p><?= $messageErrorLogin['mot_de_passe'] ?></p> <?php endif ?>
        </div>
        <div>
            <?php if(isset($_SESSION["user"])) :?><button name="btnEnvoi" value="update">Mettre à jour</button> <?php else : ?> <button name="btnEnvoi" value="send">S'inscrire</button><?php endif ?>  
        </div>
            <?php if(isset($_SESSION["user"])) :?><button name="btnSuppression" value="delete">Supprimer</button><?php endif ?>
        </div>
    </fieldset>
</form>
