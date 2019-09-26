

<?php require "navBar.php"; ?>



    <div id="menu-semaine" class="section">
        <h1><span><u>Livre d'Or</u></span></h1>
        <img src="https://cdn.pixabay.com/photo/2016/03/27/21/34/restaurant-1284351_960_720.jpg" alt="no image"
            class="arrondie">
        <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">

    </div>


<div id="Form1" class="section">

        <!--<a href="./insert_signature.php.php"><strong>SIGNEZ LE LIVRE D'OR</strong></a>
        -->
        <p>SIGNER LE LIVRE D'OR</p>
      
        <form method="post" action="indexLivreOr.php">
                <input type="text" required id="name" placeholder="Nom" name="name">
            
                <input type="text" id="sname" placeholder=" Prénom" name="sname">
                <br>
                
        <textarea name="message" placeholder="Votre message"></textarea><br>

        <button type="submit">Envoyer </button>
    </form>
    </p>
</div>


<div id="reseaux" class="section">
        <p>
            <a href="https://twitter.com/?lang=fr" target="_blank"><img class="logo"
                    src="logo/neww.png" alt="Twitter"></a>

            <a href="https://www.instagram.com/?hl=fr" target="_blank"><img class="logo"
                    src="logo/fbbb.png" alt="Facebook"></a>

        </p>
    </div>

        <div id="copyright" class="section">
            © Fabrique Père & Fils. Tous droits réservés.
        </div>












</body>

</html>