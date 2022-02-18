<!DOCTYPE html>
<html lang="fr-Fr">

<head>
    <meta charset="utf-8">
    <title>Accueil | Recherche</title>
</head>

<body>
    <style>
        body {
            height: 500px;
            position: relative;

        }

        .choix {
            height: 300px;
            /* margin: 0; */
            position: center;
            text-align: center;
            margin-top: 200px;
            margin-left: auto;
            margin-right: auto;
            width: 300px;

        }

        .titre {
            color: blue;
            font-size: 20px;
        }

        .contact {
            color: blueviolet;
        }

        .Organisation {
            color: tomato;
        }

        .Login {
            color: seagreen;
        }
    </style>
    <div class="Choix">
        <h2>Choix de la recherche</h2>
        <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
            <!-- <option class="titre" value="">--Choix de la recherche--</option>
                 Recherche contact
                <option class="titre" value="">--Parmis les contacts--</option>  -->
            <option selected disabled>Veuillez choisir :</option>
            <option class="Contact" value="tout_les_contacts">Afficher tout les contacts</option>
            <option class="Contact" value="recherche_contact">Recherche de contact</option>
            <!-- recherche organisation
                <option class="titre"value="">--Parmis les organisations--</option> -->
            <option class="Organisation" value="toute_les_organisations">Afficher toute les organisations</option>
            <option class="Organisation" value="recherche_organisation">Recherche d'organisation</option>
            <!-- reherche login 
                <option class="titre" value="">--Recherche de login--</option>-->
            <option class="Login" value="recherche_de_login">Recherche d'un login</option>
            <option class="Login" value="tout_les_login">Tout les login</option>
        </select>
    </div>

    <!-- <div class="Contacts">
                <a href="ContactController/tout_les_contacts"><h2>Tout les contacts</h2></a>
            <h2>Recherche de contact</h2>

        </div>

        <div class="Organisation">
            <h2>Toute les organisations</h2>

            <h2>Recherche d'organisation</h2>
            
        </div>

        <div class="Login">
            <h2>Recherche de login</h2>
            
        </div> -->


</body>

</html>