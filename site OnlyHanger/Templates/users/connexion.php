<div class="flex space-evenly wrap">
    <form method="post" action="">
        <fieldset>
            <legend>Se connecter</legend>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" placeholder="Email" class="form-control" id="email" name="email">
                <?php if(isset($messageErrorLogin['email'])) : ?> <p><?= $messageErrorLogin['email'] ?></p> <?php endif ?>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Mot de passe</label>
                <input type="password" placeholder="Mot de passe" class="form-control" id="Password" name="mot_de_passe">
                <?php if(isset($messageErrorLogin['mot_de_passe'])) : ?> <p><?= $messageErrorLogin['mat_de_passe'] ?></p> <?php endif ?>
            </div>
            <div>
                <button name="btnEnvoi" class="btn btn-primary">Envoi</button>
            </div>
        </fieldset>
    </form>
    <div>
        <h3 class="text-danger">Pas encore inscrit ?</h3>
        <a href="inscription" class="btn btn-secondary">Clique</a>
    </div>
</div>
