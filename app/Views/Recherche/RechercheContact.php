<!DOCTYPE html>
<html lang="fr-Fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/MiseEnPage">
    <title>Recherche | Contact</title>
</head>

<style>
    .nav {
        height: 40px;
    }

    .footer {
        height: 75px;
    }

    #barre_de_recherche {
        height: 40px;
        margin-top: 40px;
        background-color: grey;
        color: white;
    }
</style>

<body>
    <div class="nav">
        <?php echo view('template/header.php ') ?>
    </div>

    <div class="RechercheContact">
        <br>
        <p>
        <table class="tableau" cellpadding="2" cellspacing="1" size="10px">
            <p>
                <tr id="barre_de_recherche" class="fixed-top">
                    <td>Rechercher contact via son Nom</td>
                    <td></td>
                    <td></td>
                    <td>
                        <!-- CHOIX POUR EFFECTUER LA RECHERCHE -->
                        <select name="ChoixRechercheContact">
                            <option selected disabled>Choisir par quel moyen la recherche s'effectue</option>
                            <option value="ID">Recherche par ID</option>
                            <option value="NOM">Recherche par le NOM</option>
                            <option value="PRENOM">Recherche par le PRENOM</option>
                            <option value="MAIL">Recherche par le MAIL</option>
                            <option value="TELEPHONE">Recherche par le NUMERO de TELEPHONE</option>
                        </select>
                    </td>
                    <!-- BARRE POUR EFFECTUER LA RECHERCHE  -->
                    <td>
                        <!-- <form action="FormRechercheContact.php" method="post"> -->
                        <form method="post">
                            <!-- <input id="search" name="search" type="search" action="ContactController/recherche_contact_1"> -->
                            <input type="input" id="search" name="search">
                            <!-- <input type="submit" id="search" name="search" action="/ContactController/resultat_recherche"> -->
                        </form>
                    </td>
                </tr>
                <!-- --------------------------------------------------------- -->
            <p>
                <strong style="color: red;">à revoir !</strong>
            </p>
            <!-- --------------------------------------------------------- -->
            <!-- AFFICHER LE RESULTAT DE LA RECHERCHE -->
            <?php if (!empty($all) && is_array($all)) : ?>
                <?php foreach ($all as $contact) : ?>
                    <tr>
                        <!--MISE EN PLACE DE LA RECHERCHE DES INFORMATIONS-->
                        <td>ID : <?php echo ($contact['ID_Contact']) ?></td>
                        <td>Nom : <?php echo ($contact['Nom_Contact']) ?></td>
                        <td>Prénom : <?php echo ($contact['Prenom_Contact']) ?></td>
                        <td>Numéro de téléphone : <?php echo ($contact['numeroTel_Contact']) ?></td>
                        <td>mail : <?php echo ($contact['mail_Contact']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif ?>
            </p>
        </table>
        </p>
        <br>
    </div>
    <div class="footer">
        <?php echo view('template/footer.php') ?>
    </div>
</body>

</html>