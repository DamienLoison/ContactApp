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
            <br>-Mise en place des moyens de recherche par ID (++)
            <br>-Retravailler le désigne de la fiche recherche (-)
            <br>-Faire les liasons à la base de donnée (++)
            <br>-Afficher les données (++)
        </div>
        <h1>Version-B:1.0</h1>
        <div class="Modification">
            <h3>Modification :</h3>
            <br>-Ajout des méthodes pour la recherche
            <br>-Ajout des pages liées aux recherches
            <br>-Ajout des routes pour chaque méthode de recherche
            <br>-...
            <br>-Correction mineur
        </div>
        <h1>Version BETA.7-1|22</h1>
        <div class="Modification">
            <h3>Modification :</h3>
            <br>-Mise en place architecture
            <br>-Embellissement des pages
            <br>-Menu de navigation revu
            <br>-Correction des liens de la barre de navigation
            <br>-Ajout du lien vers la recherche de contact
            <br>-Optimisation des routes
            <br>-Refonte de l'accueil
            <br>-Mise en place d'une page de navigation(toute les pages présente avec architecture)
        </div>
        </p>
    </div>

    <div class="footer">
        <?php echo view('template/footer.php') ?>
    </div>
</body>

</html>