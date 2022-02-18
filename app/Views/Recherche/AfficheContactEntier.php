<!DOCTYPE html>
<html lang="fr-Fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/MiseEnPage">
    <title>Recherche | Contact Entier</title>
</head>

<style>
    .TOP {
        height: 60px;
    }

    .fiche td {
        border-bottom: solid black 3px;
    }

    table {
        border-radius: 15px;
        border: 2px solid purple;
        padding: 5px;
    }

    #right {
        font-size: 20px;
        text-align: center;
        width: 1000px;

    }

    #nav {
        margin-top: 40px;
    }

    #indication {
        margin-top: 90px;
        color: white;
        background-color: black;
        font-size: 20px;
        text-align: center;
        width: 1000px;
    }
</style>

<body>
    <div class="header">
        <?php echo view('template/header.php') ?>
    </div>
    <div class="fiche">
        <div class="TOP">
            <nav id="nav" class="navbar navbar-dark bg-dark fixed-top">
                <div class="container-fluid">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
        <!-- AFFICHAGE DE TOUT LES CONTACTS
        NOM + PRENOM + NUMERO DE TELEPHONE + MAIL  -->
        <br><br>
        <table id="right" class="tableau" cellpadding="2" cellspacing="1" size="10px">
            <p>
                <tr id="indication" class="fixed-top">
                    <td>Nom |</td>
                    <td>Prénom |</td>
                    <td>Numéro de téléphone |</td>
                    <td>mail |</td>
                </tr>
                <?php if (!empty($contacts) && is_array($contacts)) : ?>
                    <?php foreach ($contacts as $contact) : ?>
                        <tr>
                            <!--MISE EN PLACE DE LA RECHERCHE DES INFORMATIONS-->
                            <td>Nom : <?php echo ($contact['Nom_Contact']) ?></td>
                            <td>Prénom : <?php echo ($contact['Prenom_Contact']) ?></td>
                            <td>Numéro de téléphone : <?php echo ($contact['numeroTel_Contact']) ?></td>
                            <td>mail : <?php echo ($contact['mail_Contact']) ?></td>
                        </tr>
                        <tr>
                            <!--MISE EN PLACE DE LA RECHERCHE DES INFORMATIONS-->
                            <td>Nom : <?php echo ($contact['Nom_Contact']) ?></td>
                            <td>Prénom : <?php echo ($contact['Prenom_Contact']) ?></td>
                            <td>Numéro de téléphone : <?php echo ($contact['numeroTel_Contact']) ?></td>
                            <td>mail : <?php echo ($contact['mail_Contact']) ?></td>
                        </tr>
                        <tr>
                            <!--MISE EN PLACE DE LA RECHERCHE DES INFORMATIONS-->
                            <td>Nom : <?php echo ($contact['Nom_Contact']) ?></td>
                            <td>Prénom : <?php echo ($contact['Prenom_Contact']) ?></td>
                            <td>Numéro de téléphone : <?php echo ($contact['numeroTel_Contact']) ?></td>
                            <td>mail : <?php echo ($contact['mail_Contact']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif ?>
            </p>
        </table>

        <div class="bas">
        </div>
    </div>
</body>
<footer>
    <?php echo view('template/footer.php') ?>
</footer>

</html>