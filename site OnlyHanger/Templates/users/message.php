<!--<php
if(isset($_POST["envoyer"])){
    $message = htmlspecialchars($_POST["POST"]);
    $insererMessage = $pdo->prepare("insert into Message(MessageText, MessageDate, MessageHeure, UtilisateurID, Conversation ")
    $insereMessage->execute(array($message, $_GET['Utilisateur']))
}
?>
<title>Message privé</title>
<form method="POST" action="">
    <textarea name="message" id="" cols="30" rows="10" minlength="1"></textarea>
    <br/><br/>
    <input type="submit" name="envoyer">
</form>

<section id="message">


</section>-->