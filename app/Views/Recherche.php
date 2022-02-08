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
        /*Remonte la barre de navigation jusqu'au haut de la fiche*/
        nav{
            margin-top: -17px;
            text-align: left;
        }
        nav a{
            text-align: center;
        }
        /* englobe la fiche entiere*/
        body {
            width: 500px;
            position: absolute;
            margin-left: 500px;
            margin-top: auto;
            border: rgb(84, 84, 84) solid 5px;
        }

        .fiche {
            /* border: black solid 5px; */
            width: 500px;
            height: 500px;
            text-align: center;

        }

        /*---------------------------------------*/
        /* occupe la partie haute de la fiche */
        .Top {
            /*border: red solid 5px;*/
            width: 500px;
            height: 150px;
        }

        .Logo-left {
            text-align: left;
            /* margin-top: -60px; */
            width: 300px;
            height: 150px;
        }

        .texte-droite {
            /*text-align: right;*/
            margin-left: 200px;
        }

        /*---------------------------------------*/
        /* occupe la partie centrale de la fiche */
        .Contact {
            /*border: blue solid 5px;*/
            width: 500px;
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

        /*---------------------------------------*/
        /* occupe la partie basse de la fiche */
        .Info {
            background-color: rgb(84, 84, 84);
            width: 500px;
            height: 70px;
            margin-top: -45px;
        }

        .login_tableau {
            display: inline-block;
            list-style: none;
            color: white
        }

        /*---------------------------------------*/
        /*le total n'équivaut pas a 500px à cause de border*/
    </style>
    <div class="fiche">
        <div class="Top">
            <!-- contient le Logo + info organisation -->
            <div class="texte-droite">
                <!-- <h3>Nom organisation</h3> -->
                <?php if (!empty($organisations) && is_array($organisations)) : ?>
                    <?php foreach ($organisations as $organisation) : ?>
                        <h2><?php echo ($organisation['Nom_Organisation']) ?></h2>
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
        <!-- <div class="Contact" style="color: rgb(0, 173, 124);"> -->
        <div class="Contact" style="color: #04a482;">
            <!-- contient info contact -->
            <h2>Contact</h2>
            <?php if (!empty($contacts) && is_array($contacts)) : ?>
                <?php foreach ($contacts as $contact) : ?>
                    <table class="tableau">
                        <tr>
                            <td>Nom : <?php echo ($contact['Nom_Contact']) ?></td>
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

        <!-- Partie inférieur de la fiche 
        comprenant le lien du site internet et du login -->
        <div class="Info" style="color: white;">
            <h3>Site internet :</h3>
            <?php if (!empty($logins) && is_array($logins)) : ?>
                <?php foreach ($logins as $login) : ?>
                    <table class="login_tableau">
                        <tr>
                            <td>Login : <?php echo ($login['Utilisateur_login']) ?></td>
                            <td>Password : <?php echo ($login['password']) ?></td>
                        </tr>
                    </table>
                <?php endforeach; ?>
            <?php endif ?>
        </div>
        <input type="button" href="ajout-contact.php" value="Ajouter Contact">
</body>

</html>
<?php
require('template/footer.php');
?>