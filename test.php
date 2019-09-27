<?php require "navBar.php"; ?>
<?php
$servername = "localhost";
$username = "marie";
$password = "12345";
$dbname = "restaurant";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  nom, prenom, messages FROM commentaires";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  "Nom :" . $row["nom"].  "Prenom :" . $row["prenom"]. "Message :" .$row["messages"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

/*
try{
    $dsn = new PDO('mysql:host=localhost,dbname=restaurant;charset=utf8', $username, $password);

}
catch(PDOException $e){
    echo "erreur " . $e->getMessage();
}

try{
    $req = $dsn->prepare('SELECT nom, prenom, messages FROM commentaires');
    $req->execute();
    echo "requete ok";

}catch(PDOException $e){
    echo "erreur " . $e->getMessage();
}
*/
?>




