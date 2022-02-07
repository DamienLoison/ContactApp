<!DOCTYPE html>
<html lang="fr-Fr">

<head>
    <meta charset="UTF-8">
    <title>Donnée Contact</title>
</head>
<?php
require('template/header.php');
?>

<body>
    <style>
        /* englobe la fiche entiere*/
        body {
            width: 500px;
            position: absolute;
            margin-left: 500px;
            margin-top: auto;
        }

        .fiche {
            border: black solid 5px;
            width: 500px;
            height: 500px;
            text-align: center;

        }

        /* occupe la partie haute de la fiche */
        .Top {
            /*border: red solid 5px;*/
            width: 490px;
            height: 150px;
        }

        .Logo-left {
            text-align: left;
            margin-top: -60px;
            width: 450px;
            height: 150px;
        }

        .texte-droite {
            /*text-align: right;*/
            margin-left: 150px;
        }

        /* occupe la partie centrale de la fiche */
        .Contact {
            /*border: blue solid 5px;*/
            width: 490px;
            height: 250px;
        }

        .nom-gauche {
            /*text-align: left;*/
            margin-left: -300px;
        }

        .prenom-droite {
            /*text-align: right;*/
            margin-left: 150px;
        }

        /* occupe la partie basse de la fiche */
        .Info {
            background-color: rgb(84, 84, 84);
            width: 490px;
            height: 70px;
        }

        .login_tableau {
            display: inline-block;
            list-style: none;
            color: white
        }

        /*le total n'équivaut pas a 500px à cause de border*/
    </style>
    <div class="fiche">
        <div class="Top">
            <!-- contient le Logo + info organisation -->
            <div class="texte-droite">
                <h3>Nom organisation</h3>
                <?php
                

                ?>
                <!-- mail : <br>
                <a>
                    <href="tel:+">appelé le
                </a><br>
                <address>Adresse Organisation</address> -->
            </div>
            <div class="Logo-left">
                <!--logo se situant a gauche-->
                <img src="images/logos/logo-1.png" alt="petit logo">
                <!--<href="images/logos/logo-1.png">-->
            </div>
        </div>
        <div class="Contact" style="color: rgb(0, 173, 124);">
            <!-- contient info contact -->
            <h2>Contact</h2>
            <div class="nom+prenom">
                <!-- <p class="nom-gauche">
                     Nom :
                </p>
                <p class="prenom-droite">
                    Prenom :
                </p> 
             </div> 
            <p class="nom-gauche">
                nom :
            </p>
            <p class="prenom-droite">
                prenom :
            </p> -->
            </div>
            <div>
                <div class="Info" style="color: white;">
                    <!--contient lien internet + login -->
                    <strong>Site internet :</strong>
                    <ul class="login_tableau">
                        <li><?php ?></li>
                        <li><?php ?></li>
                    </ul>
                    <!-- ICI PHP (LOGIN)-->
                </div>
            </div>
            <input type="button" href="ajout-contact.php" value="Ajouter Contact">
</body>

</html>
<?php
require('template/footer.php');
?>