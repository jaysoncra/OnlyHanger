<a href="/">Home</a>

        <?php if(isset($_SESSION["user"])) : ?>
            <a href="message">Chat</a>
            <a href="profil">Profil</a>
            <a href="deconnexion">Sign out</a>
        <?php else : ?>
            <a href="connexion">Sign in</a>
            <a href="inscription">Sign up</a>
        <?php endif ?>