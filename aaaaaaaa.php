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
        <input type="text" name="nom" placeholder="votre nom"><br>
        <input type="text" name="prenom" palceholder="votre prenom"><br>
        <input type="text" name="personne" palceholder="votre prenom"><br>
        <input type="text" name="age" palceholder="votre prenom"><br>
        <input type="text" name="sexe" palceholder="votre prenom"><br>

        <textarea name="message"></textarea>

        <button type="submit">Envoyer les infos ! </button>
    </form>
    
</body>
</html>