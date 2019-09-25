<html>
<head>
<title>Index de notre livre d'or</title>
</head>
<body>

<a href="./insert_signature.php.php">Signer le livre d'or</a>

<br /><br />

<?php
$base = mysql_connect ('localhost', 'marie', '12345');
mysql_select_db ('restaurant', $base);

$sql = 'SELECT auteur, email, date_signature, message FROM commentaires ORDER BY date_signature DESC';
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

$nb_signature = mysql_num_rows($req);

if ($nb_signature == 0) {
	echo 'Aucune signature.';
}
else {
	while ($data = mysql_fetch_array($req)) {
	sscanf($data['date_signature'], "%4s-%2s-%2s %2s:%2s:%2s", $annee, $mois, $jour, $heure, $minute, $seconde);

	echo '<a href=mailto:' , htmlentities(trim($data['email'])) , '>' , htmlentities(trim($data['auteur'])) , '</a>';
	echo ' le ' , $jour , '/' , $mois , '/' , $annee , ' à ' , $heure , ':' , $minute , '<br />';
	echo nl2br(htmlentities(trim($data['message'])));
	echo '<br /><br />';
	}
}
// on libère l'espace mémoire alloué pour cette requête
mysql_free_result ($req);
// on ferme la connection à la base de données.
mysql_close ();
?>

</body>
</html>
