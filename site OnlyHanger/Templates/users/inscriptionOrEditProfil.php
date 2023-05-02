<form method="post" action="">
    <fieldset>
        <legend>Inscription</legend>
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" placeholder="Nom" class="form-control" id="Nom" name="nom" value=""  required minlength="2" maxlength="25">
            <?php if(isset($messageErrorLogin['nom'])) : ?> <p><?= $messageErrorLogin['nom'] ?></p> <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="Prenom" class="form-label">Prénom</label>
            <input type="text" placeholder="Prénom" class="form-control" id="Prenom" name="prenom" value="" required minlength="2" maxlength="25">
            <?php if(isset($messageErrorLogin['prenom'])) : ?> <p><?= $messageErrorLogin['prenom'] ?></p> <?php endif ?>
        </div>
        <div class="mb-3">-+
            <label for="Ville" class="form-label">Ville</label>
            
            <select name="villes" id="ville-select">
                <option value="">--Veulliez choisir une ville--
            </option>
                <option value="anvers">Anvers</option>
                <option value="bruges">Bruges</option>
                <option value="bruxelles">Bruxelles</option>
                <option value="gand">Gand</option>
                <option value="houffalize">Houffalize</option>
                <option value="liège">Liège</option>
                <option value="namur">Namur</option>
                <option value="charleroi">Charleroi</option>
                <option value="louvain">Louvain</option>
                <option value="mons">Mons</option>
                <option value="malines">Maline</option>
                <option value="alost">Alost</option>
                <option value="la_louvière">La Louvière</option>
                <option value="hasselt">Hasselt</option>
                <option value="saint-nicolas">Saint-Nicolas</option>
                <option value="courtrai">Courtrai</option>
                <option value="ostende">Ostende</option>
                <option value="tournai">Tournai</option>
                <option value="genk">Genk</option>
                <option value="seraing">Seraing</option>
                <option value="roulers">Roulers</option>
                <option value="mouscron">Mouscron</option>
                <option value="vervier">Vervier</option>
                <option value=""></option>
            </select>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" placeholder="Email" class="form-control" id="email" name="email" value="" required>
            <?php if(isset($messageErrorLogin['email'])) : ?> <p><?= $messageErrorLogin['email'] ?></p> <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Mot de passe</label>
            <input type="password" placeholder="Mot de passe" class="form-control" id="Password" name="mot_de_passe" value="" required minlenght="6">
            <?php if(isset($messageErrorLogin['nom'])) : ?> <p><?= $messageErrorLogin['mot_de_passe'] ?></p> <?php endif ?>
        </div>
        <div>
            <?php if(isset($_SESSION["Utilisateur"])) :?><button name="btnEnvoi" class="btn btn-primary" value="Mettre à jour">Mettre à jour</button><?php endif ?>
            <?php if(!isset($_SESSION["Utilisateur"])) :?><button name="btnEnvoi" class="btn btn-primary" value="Mettre à jour">Envoyer</button><?php endif ?>    
        </div></p>
            <?php if(isset($_SESSION["Utilisateur"])) :?><button name="btnSuppression" class="btn btn-primary"value="supprimer">Supprimer</button><?php endif ?>
        </div>
    </fieldset>
</form>
