
<?php require "navBar.php"; ?>

<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'marie', '12345');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video "asc date_time"
$reponse = $bdd->query('SELECT nom, messages, date_time FROM commentaires ORDER BY date_time');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>

<div id="menu-semaine" class="section">
        <b><span><u>✑Commentaire</u></span></b>
    <p>
    <strong>Nom</strong> : <?php echo $donnees['nom']; ?><br />
    Date <?php echo $donnees['date_time']; ?>  <br>  <em><?php echo $donnees['messages']; ?></em>
   </p>
</div>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
  <div id="reseaux" class="section">
        <p>
            <a href="https://twitter.com/?lang=fr" target="_blank"><img class="logo"
                    src="logo/neww.png" alt="Twitter"></a>

            <a href="https://www.instagram.com/?hl=fr" target="_blank"><img class="logo"
                    src="logo/fbbb.png" alt="Facebook"></a>

        </p>
    </div>
    <!--reseaux end-->

    <!--copyright start-->

    <div id="copyright" class="section">
        © Fabrique Père & Fils. Tous droits réservés.
    </div>
    <!--copyright end-->









