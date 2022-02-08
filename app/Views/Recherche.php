<!DOCTYPE html>
<html lang="fr-Fr">
<?php

use App\Models\OrganisationModel;
use App\Models\RechercheModel;
?>

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
                <?php if (!empty($organisations) && is_array($organisations)) : ?>
                    <?php foreach ($organisations as $organisation) : ?>
                        <h3><?php echo ($organisation['Nom_Organisation']) ?></h3>
                        <td>Nom : <?php echo ($organisation['Nom_Organisation']) ?></td>
                        <?php echo ($organisation['ID_Organisation']); ?>
                    <?php endforeach; ?>
                <?php endif ?>

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
            <?php if (!empty($contacts) && is_array($contacts)) : ?>
                <?php foreach ($contacts as $contact) : ?>
                    <table class="tableau">
                        <tr>
                            <td >Nom : <?php echo ($contact['Nom_Contact']) ?></td>
                            <td>Prénom : <?php echo ($contact['Prenom_Contact']) ?></td>
                            <td>Numéro de téléphone : <?php echo ($contact['numeroTel_Contact']) ?></td>
                            <td>mail : <?php echo ($contact['mail_Contact']) ?></td>
                        </tr>
                    </table>
                <?php endforeach; ?>
            <?php endif ?>


            <!-- <div class="nom+prenom"> -->
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
                    <h3>Site internet :</h3>
                    <?php if (!empty($logins) && is_array($logins)) : ?>
                        <?php foreach ($logins as $login) : ?>
                            <table class="tableau">
                                <tr>
                                    <td>Login : <?php echo ($login['Utilisateur_login']) ?></td>
                                    <td>Password : <?php echo ($login['password']) ?></td>
                                </tr>
                            </table>
                        <?php endforeach; ?>
                    <?php endif ?>
                    <!-- ICI PHP (LOGIN)-->
                </div>
            </div>
            <input type="button" href="ajout-contact.php" value="Ajouter Contact">
</body>

</html>
<?php
require('template/footer.php');
?>