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
                <option selected disabled>Veuillez choisir :</option>
                <option class="Contact" value="tout_les_contacts">Afficher tout les contacts</option>
                <!--<option disabled class="Contact" value="recherche_contact">Recherche de contact</option>-->
                <!-- recherche organisation-->
                <option class="Organisation" value="toute_les_organisations">Afficher toute les organisations</option>
                <!--<option disabled class="Organisation" value="recherche_organisation">Recherche d'organisation</option>-->
                <!-- reherche login -->
                <option class="Login " value="tout_les_login">Tout les login</option>
                <!--<option disabled class="Login " value="recherche_de_login">Recherche d'un login</option>-->
            </select>
        </div>
    </body>
</html>