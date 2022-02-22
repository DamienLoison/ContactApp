<!DOCTYPE html>
<html lang="fr-Fr">

    <head>
        <meta charset="utf-8">
        <title>Note patch</title>
    </head>

    <style>
        .nav {
            height: 40px;
        }

        .footer {
            height: 75px;
        }

        h1 {
            background-color: tomato;
        }

        .Modification {
            border-top: solid black 5px;
            background-color: darkcyan;
        }

        .Todo {
            border-top: solid black 5px;
            background-color: lightgreen;
            border-bottom: solid black 5px;
        }
    </style>

    <body>
        <div class="nav">
            <?php echo view('template/header.php') ?>
        </div>

        <div class="notePatch">
            <p>
            <div class="Todo">
                <h3>Todo : </h3>
                <!-- TRES IMPORTANT -->
                <br>-FAIRE ACCUEIL (+++)
                <br>-Faire les liasons à la base de donnée (++)
                <br>-Mise en place des moyens de recherche par ID (++)
                <br>-Afficher les données (++)
                <!-- MOIN IMPORTANT -->
                <br>-Mise à jour du footer(-)
                <br>-Retravailler le désigne de la fiche recherche (-)
            </div>
            <h1>Version B:1.0.5</h1>
            <div class="Modification">
                <h2>Modification :</h2>
                <br><scan style="color: white;">-Commencement de la modification de l'accueil</scan>
                <br><h3>Ajout</h3>
                <br>-fichier qui permettront la suppression de données
                <br> <!-- -------------------------------------- -->
                <br><h3>Visuel</h3>
                <br>-modification de la barre de navigation
                <br><h3>Correction/Optimisation</h3>
                <br>-Mise en page de l'entête et du footer directement dans le fichier maintenant
                <br>-Correction nom de fichiers
                <br>-Correction des routes associées aux fichiers
                <br>-Suppression de fichiers inutiles
                <br>-Correction mineur
            </div>
            <h1>Version B:1.0.4</h1>
            <div class="Modification">
                <h2>Modification :</h2>
                <br><h3>Ajout</h3>
                <br>-Ajout d'Organisation possible
                <br>-Ajout de Login possible
                <br>-Ajout d'Organisation possible
                <br> <!-- -------------------------------------- -->
                <br><h3>Visuel</h3>
                <br>-modification de la barre de navigation
                <br><h3>Correction/Optimisation</h3>
                <br>-Suppression de Model inutile
                <br>-Correction mineur
            </div>
            <h1>Version B:1.0.3</h1>
            <div class="Modification">
                <h2>Modification :</h2>
                <br><h3>Ajout</h3>
                <br>-Ajout de Contact possible
                <br> <!-- -------------------------------------- -->
                <br><h3>Visuel</h3>
                <br> -Correction visuel dans l'affichage de tout les contacts
            </div>
            <h1>Version-B:1.0</h1>
            <div class="Modification">
                <h2>Modification :</h2>
                <br><h3>Ajout</h3>
                <br>-Ajout des méthodes pour la recherche
                <br>-Ajout des pages liées aux recherches
                <br>-Ajout des routes pour chaque méthode de recherche
                <br>-Ajout du lien vers la recherche de contact
                <br>-Ajout de la version de l'application sur la barre de navigation
                <br>-Ajout de l'architecture du site <a href="/AccueilController/architecture_site" style="color: white;">disponible ici</a>
                <br> <!-- -------------------------------------- -->
                <br><h3>Visuel</h3>
                <br>-Menu de navigation revu
                <br>-Embellissement des pages
                <br>-Refonte de l'accueil
                <br>-Refonte de l'aide (toujour indisponible)
                <br>-Refonte de la page des Patch Note
                <br> <!-- -------------------------------------- -->
                <br><h3>Correction/Optimisation</h3>
                <br>-Correction des liens de la barre de navigation
                <br>-Mise en place architecture
                <br>-Optimisation des routes
                <br>-Correction mineur
            </div>
        </p>
    </div>

    <div class="footer">
        <?php echo view('template/footer.php') ?>
    </div>
</body>

</html>