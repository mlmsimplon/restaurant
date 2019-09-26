<?php require "navBar.php"; ?>



    <div id="menu-semaine" class="section">

        <h1><span><u>Reserver Chez Nous</u></span></h1>
        <img src="https://cdn.pixabay.com/photo/2014/09/17/20/26/restaurant-449952_960_720.jpg" alt="no image"
            class="arrondie">
    </div>

    <div id="blocktext">
        <p>
        <b>HORAIRES OUVERTURE</b></p>

            <ul>
                <li>Mardi - Midi 12H~14 Soir 19H~22H</li>
                <li>Mecredi -Midi 12H~14H Soir 19H~22H</li>
                <li>Jeudi - FERMETURE
                <li>Vendredi - Midi 12H~14H Soir 19H~122H</li>
                <li>Samedi - Midi 12H~14H Soir 19H~22H</li>
                <li>Dimanche - Midi 12H~14H Soir 19H~22H</li>
            </ul>

            <p><b>TELEPHONE</b></P>
            <ul>
                <li>05 57 66 59 27<br>
                    </li> 
                
                   <p> <b>ADRESSE:</b> <br></p>
                    <li> 2 Rue Du Capitole
                    33000
                    Bordeaux
                    FRANCE </li>
            </ul>
       
        <div id="Form1">
        <p>
            <strong>RESERVATIONS</strong>
        </p>
            <form method="post" action="reservation.php">
                
                <input type="text" required id="name" placeholder="Votre Nom" name="name">
                
                
                <input type="text" placeholder="Votre Prénom" id="sname" name="sname">
                <br>
               
                <input type="email" required id="mail" name="email" placeholder="email@exemple.com">
                
                
                <input id="tele" name="telephone" type="tel" pattern="[0-9]{10}" maxlength="10"
                    placeholder="Téléphone"><br>
                
                <input type="number" placeholder="Nombre de personnes" required id="num" name="num"><br>
                
                <textarea id="msg" placeholder="Une demande particulière?" name="msge"></textarea><br>
                <input type="submit" value="Envoyer" class="Submit"/>

            </form>

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
        Fabrique Père & Fils. Tous droits réservés.
    </div>



</body>

</html>