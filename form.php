
<?php


    $var10 = $_POST["prenom"];
    $var0 = $_POST["nom"];
    $var1 = $_POST["age"];
    $var2 = $_POST["sexe"];
    $var2 = $_POST["message"];


    $title = "testForm";





?>

<?php require "bbb.php"; ?>


    <form method="post" action="#">
        <input type="text" name="nom" placeholder="Votre nom"><br>
        <input type="text" name="prenom" palceholder="Votre prénom"><br>
        <input type="email" required id="mail" name="mail" palceholder="Adresse email"><br>

        <textarea name="message"></textarea>

        <button type="submit">Envoyer </button>
    </form>
</div>
</body>
</html>