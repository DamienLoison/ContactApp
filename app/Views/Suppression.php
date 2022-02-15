<!Doctype html>
<html lang="fr-Fr">

<head>
    <meta CHARSET='UTF-8'>
    <title>Suppression donnée</title>
</head>
<style>
    body {
        background-color: rgb(84, 84, 84);

    }

    select {
        width: 160px;
    }

    .Suppression_Contact {
        background-color: pink;
    }

    .Suppression_Organisation {
        background-color: pink;
    }

    .Suppression_Login {
        background-color: pink;
    }
</style>

<body>
    <?php

use Config\App;

require "template/header.php";?>
    <div class="Choix_Suppression">
        <form action="" method="post">
            <select >
                <option><!-- laisser vide--></option>
                <option name="Contact">Contact<?php $valeur = "contact";?></option>
                <option name="Organisation">Organisation <?php $valeur = "organisation";?></option>
                <option name="Login">Login <?php $valeur = "login";?></option>
            </select>
        </form>
        <!-- <input  type="button" <?php //$valeur=$choix?>Valider> -->
        <input type="submit" name="Valider" action="" >
    </div>
    <?php
//if ($valeur == "Contact") {
// redirect();
// redirect("Suppression");
// require("Suppression/Contact.php");
//echo 'hello !';
//}
// if ($valeur == "Organisation") {
// require("Suppression/Organisation.php");
// echo view("Suppression/Contact.php");
// }
// if ($valeur == "Login") {
//     require("Suppression/Login.php");
// } else {
//     echo ("Erreur survenue");
// }
// ?>

    <!-- <div class="Organisation">
        <div class="Suppression_Organisation">
            <select name="Liste_Suppression_Organisation" size="5" multiple="yes">
                <option>BTP </option>
                <option>CARRE OF</option>
                <option>MAD</option>
            </select>
        </div>
        <dialog open class="Organisation_Droite">
            <p>Salutations, à tous et à toutes !</p>
        </dialog>
    </div> -->
    <!-- <div class="Login">
        <div class="Suppression_Login">
            <select name="Liste_Suppression_Login" size="5" multiple="yes">
                <option>New York </option>
                <option>Bucharest</option>
                <option>Madrid</option>
            </select>
        </div>
        <dialog open class="Login_Droite">
            <p>Salutations, à tous et à toutes !</p>
        </dialog>
    </div> -->

    <?php
//trouver moyen pour donner une variable
//au option choisie pour écrire
//la phrase complète disant ce qui est supprimer
?>
    <!-- <option selected="selected" value="">
    <h1> - chercher un mot - </h1>
</option> -->
    <?php //foreach ($results as $row) {
?>
    <option value="<?php //echo $row["mot"];
?>" <?php //echo isset($_POST["mot"])&&$_POST["mot"]==$row["mot"]?" selected":"";
?>>
        <?php //echo $row["mot"];
?>
        <?php //}
?>
    </option>
</body>

</html>