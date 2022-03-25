<!DOCTYPE html>
<html lang="fr-Fr">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/MiseEnPage">
        <title>Architecture ContactApp</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <?php echo view('template/header.php') ?>
    </head>
    <style>
        body {
            margin-top: 20px;
        }
        #titre {
            font-size: 24px;
            color: white;
        }
        #sous-titre {
            font-size: 16px;
        }
        .disabled {
            pointer-events: none;
            text-decoration: none;
            color: grey;
        }
    </style>
    <body class="bg-dark">
        <div class="Architecture">
            <pre>
            <!--ACCUEIL-->
            <strong><a id="titre" href="/Accueil/index">• ACCUEIL</a><br></strong>
                <a id="sous-titre" href="">-> Architecture</a><br>
                <a id="sous-titre" href="/Accueil/aide">-> Aide</a><br>
                <a id="sous-titre" href="/Accueil/note_patch">-> Note de patch</a>
            <!--RECHERCHE-->
            <strong><a id="titre">• RECHERCHE</a><br></strong>
                <a id="sous-titre" href="/Recherche/tout_les_contacts">-> Liste des contacts</a><br>
                <a id="sous-titre" href="/Recherche/toute_les_organisations">-> Liste des organisations</a><br>
                <a id="sous-titre" href="/Recherche/tout_les_login">-> Liste des logins</a>
            <!--AJOUTER-->
            <strong><a id="titre">• AJOUTER</a></strong><br>
                <a id="sous-titre" href="/Ajouter/ajouter_contact">-> Ajout d'un contact</a><br>
                <a id="sous-titre" href="/Ajouter/ajouter_organisation">-> Ajout d'une orgnisation</a><br>
                <a id="sous-titre" href="/Ajouter/ajouter_login">-> Ajout d'un login</a>
            </pre>
        </div>
    </body>
    <footer>
        <?php echo view('template/footer.php') ?>
    </footer>
</html>