
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
$reponse = $bdd->query('SELECT nom, prix, entree, plat, dessert FROM menu WHERE id=2 ');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>

<div id="menu-semaine" class="section">
        <h1><span><u>✑Menu du jour</u></span></h1>
        <img src="https://static.cuisineaz.com/240x192/i120813-faux-filets-grilles-et-pommes-sautees.jpeg" alt="no image"
            class="arrondie">
        <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">

    <p>
     <b><?php echo $donnees['nom']; ?></b><br />
    Prix : <?php echo $donnees['prix']; ?>  <br>  
     <em><?php echo $donnees['entree']; ?><br>
     <?php echo $donnees['plat']; ?>  <br>
     <?php echo $donnees['dessert']; ?> </em> <br>
   </p>
</div>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>


