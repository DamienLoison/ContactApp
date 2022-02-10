<!DOCTYPE html>
<html lang="fr-Fr">

<head>
    <meta charset="UTF-8">
    <title>Ajout Login |</title>
    <link rel="stylesheet" type="text/css" href="style/AjoutFiche.css" media="all" />
</head>
<?php
require('template/header.php');
require('template/navbar.php');
?>

<body>
    <style>

    </style>
    <div class="fiche">
        <div class="Top">
            <h1>Ajout de Login</h1>
            <!-- contient le Logo + info organisation -->
            <div class="texte-droite">
                <?php if (!empty($organisations) && is_array($organisations)) : ?>
                    <?php foreach ($organisations as $organisation) : ?>
                        <h2><?php echo ($organisation['Nom_Organisation']) ?></h2>
                        ID : [<?php echo ($organisation['ID_Organisation']); ?>]<br>
                        mail : <?php echo ($organisation['Mail_Organisation']) ?><br>
                        tel : <?php echo ($organisation['Telephone_Organisation']) ?><br>
                        <address><?php echo ($organisation['Adresse_Organisation']) ?></address>
                    <?php endforeach; ?>
                <?php endif ?>
            </div>
            <!-- <div class="Logo-left">
                logo se situant a gauche
                <img src="images/logos/logo-1.png" alt="petit logo">
                <href="images/logos/logo-1.png">
            </div> -->
            <div class="Logo-left">
                <!-- <img src="images/btp-logo.jpg" alt="logo entreprise"> -->
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
                            <!-- <td>Nom : <?php //echo ($contact['Nom_Contact']) 
                                            ?></td>
                            <td>Prénom : <?php //echo ($contact['Prenom_Contact']) 
                                            ?></td>
                            <td>Numéro de téléphone : <?php //echo ($contact['numeroTel_Contact']) 
                                                        ?></td>
                            <td>mail : <?php //echo ($contact['mail_Contact']) 
                                        ?></td> -->

                            <!--MISE EN PLACE DE LA RECHERCHE DES INFORMATIONS-->
                            <td>Nom : <?php //echo(); 
                                        ?></td>
                            <td>Prénom : <?php //echo(); 
                                            ?></td>
                            <td>Numéro de téléphone : <?php //echo(); 
                                                        ?></td>
                            <td>mail : <?php //echo(); 
                                        ?></td>
                        </tr>
                    </table>
                <?php endforeach; ?>
            <?php endif ?>
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
        <!-- <input type="button" href="ajout-contact.php" value="Ajouter Contact"> -->
</body>

</html>
<?php require('template/footer.php'); ?>