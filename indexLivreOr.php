
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
try {
    echo "☺";
        $req = $bdd->prepare ('INSERT INTO commentaires (nom, prenom, messages)
                        VALUES (:nom, :prenom, :messages)');

        $req->bindParam(':nom', $_POST["name"]);
        $req->bindParam(':prenom', $_POST["sname"]);
        $req->bindParam(':messages', $_POST["msge"]);
    
        
$req->execute();
}  catch (PDOException $e) {

        echo 'oups: '.$e->getMessage();
        }


//$reponse->closeCursor(); // Termine le traitement de la requête

header("Location: test.php");
?>


/*

  <div id="reseaux" class="section">
        <p>
            <a href="https://twitter.com/?lang=fr" target="_blank"><img class="logo"
                    src="logo/neww.png" alt="Twitter"></a>

            <a href="https://www.instagram.com/?hl=fr" target="_blank"><img class="logo"
                    src="logo/fbbb.png" alt="Facebook"></a>

                    <a href="https://www.instagram.com/?hl=fr" target="_blank"><img class="logo"
                    src="logo/Instagram_icon.png" alt="Instagram"></a>

        </p>
    </div>
    <!--reseaux end-->

    <!--copyright start-->

    <div id="copyright" class="section">
        © Fabrique Père & Fils. Tous droits réservés.
    </div>
    <!--copyright end-->
*/








