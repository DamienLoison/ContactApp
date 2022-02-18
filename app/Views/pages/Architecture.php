<!DOCTYPE html>
<html lang="fr-Fr">

<head>
    <meta charset="fr-Fr">
    <link rel="stylesheet" href="style/MiseEnPage">
    <title>Architecture ContactApp</title>
</head>

<style>
    .nav {
        height: 40px;
    }

    .footer {
        height: 75px;
    }

    #titre {
        font-size: 24px;
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

<body>
    <div class="nav">
        <?php echo view('template/header.php') ?>
    </div>

    <div class="Architecture">
        <pre>
            <strong><a id="titre" style="color:black;" href="/AccueilController/index">• Accueil</a><br></strong>
                <a id="sous-titre"  href="">-> Architecture</a><br>
                <a id="sous-titre" class="disabled" href="/ContactController/aide_contact">-> Aide [Désactiver momentanément]</a><br>
                <a id="sous-titre"  href="/AccueilController/note_patch">-> Note de patch</a><br>
            <strong><a id="titre" style="color:black;" href="/ContactController/index">• Recherche</a><br></strong>
                <a id="sous-titre" href="/ContactController/tout_les_contacts">-> Liste des contacts</a><br>
                <a id="sous-titre" href="/ContactController/recherche_contact">-> Recherche de contact</a><br>
                <a id="sous-titre" href="/ContactController/toute_les_organisations">-> Liste des organisations</a><br>
                <a id="sous-titre" href="/ContactController/recherche_organisation">-> Recherche des organisations</a><br>
                <a id="sous-titre" href="/ContactController/tout_les_login">-> Liste des logins</a><br>
                <a id="sous-titre" href="/ContactController/recherche_de_login">-> Recherche des logins</a><br>
            <!-- <strong><a id="titre" style="color:black;" href="">• </a>-<br></strong>
                <a id="sous-titre" href="">-> </a><br>
                <a id="sous-titre" href="">-> </a><br>
                <a id="sous-titre" href="">-> </a><br> -->

        </pre>
    </div>

    <div class="footer">
        <?php echo view('template/footer.php') ?>
    </div>
</body>

</html>