<?php
if (isset($_POST['go']) && $_POST['go']=='Signer') {

	if ((isset($_POST['auteur'])) && (isset($_POST['email'])) && (isset($_POST['message']))) {
	// si les 3 variables ne sont pas vides, et si l'adresse E-mail est valide, alors, et seulement dans ce cas, on fera notre insertion dans la base
	if ((!empty($_POST['auteur'])) && (!empty($_POST['email'])) && (!empty($_POST['message']))) {
		// on verifie le format de l'adresse E-mail saisie
		$test_mail = eregi ('^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)+$', $_POST['email']);
		if ($test_mail) {
		// on se connecte à notre base
		$base = mysql_connect ('localhost', 'marie', '12345');
		mysql_select_db ('restaurant', $base);

		// on prepare notre requête d'insertion des données
		$sql = 'INSERT INTO commentaires VALUES("", "'.mysql_escape_string($_POST['auteur']).'", "'.mysql_escape_string($_POST['email']).'", "'.date("Y-m-d H:i:s").'", "'.mysql_escape_string($_POST['message']).'")';

		// on lance la requête
		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

		// on ferme la connexion à la base de données
		mysql_close();

		// on redirige le visiteur vers l'accueil du livre d'or
		header('location: indexlivreor.php');

		// on termine le script courant
		exit();
		}
		else {
		$erreur = 'Votre adresse E-mail est invalide.';
		}
	}
	else {
		$erreur = 'Au moins un des champs est vide.';
	}
	}
	else {
	$erreur = 'Les variables nécessaires au script ne sont pas définies.';
	}
}
// on entre dans le cas où l'un des trois (au moins) champs n'a pas été rempli ou si l'adresse E-mail n'a pas été validée (en particulier, lorsque le visiteur charge pour la première fois cette page, vu que les 3 champs sont vides, le formulaire s'affichera). On remarque également que l'on met la valeur de chaque champs dans le value (c'est cela qui fait que si le visiteur ne remplit pas entièrement le formulaire et qu'il clique sur "Signer", et bien lorsqu'il sera redirigé vers le formulaire, ce qu'il aura déjà saisi sera conservé
?>
<html>
<head>
<title>Laissez un commentaire</title>
</head>

<body>

<form action="insert_signature.php" method="post">
<table>
<tr><td>
[b]Auteur :[/b]
</td><td>
<input type="text" name="auteur" maxlength="30" size="50" value="<?php if (isset($_POST['auteur'])) echo htmlentities(trim($_POST['auteur'])); ?>">
</td></tr><tr><td>
[b]Adresse E-mail :[/b]
</td><td>
<input type="text" name="email" maxlength="50" size="50" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>">
</td></tr><tr><td>
[b]Votre message :[/b]
</td><td>
<textarea name="message" cols="50" rows="10"><?php if (isset($_POST['message'])) echo htmlentities(trim($_POST['message'])); ?></textarea>
</td></tr><tr><td><td align="right">
<input type="submit" name="go" value="Signer">
</td></tr></table>
</form>
<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
</body>
</html>



