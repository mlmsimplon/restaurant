<?php
try
{

$bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'marie', '12345');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)

{

echo 'Erreur : '.$e->getMessage();
}

try {
    echo "sdal";
$req = $bdd->prepare ('INSERT INTO utilisateurs (nom, prenom, email, telephone, messages)
                        VALUES (:nom, :prenom, :email, :telephone, :messages)');

        $req->bindParam(':nom', $_POST["name"]);
        $req->bindParam(':prenom', $_POST["sname"]);
        $req->bindParam(':email', $_POST["email"]);
        $req->bindParam(':telephone', $_POST["telephone"]);
        $req->bindParam(':messages', $_POST["msge"]);
    
        
$req->execute();

echo "<div id='Form1'>
Votre réservation a été envoyée </div>";

} catch (PDOException $e) {

echo 'oups: '.$e->getMessage();
}
