<!DOCTYPE html>
<html lang="fr-Fr">

<head>
    <meta charset="utf-8">
    <title>Recherche | Contact Entier</title>
</head>

<style>
    body {
        /* width: 700px; */
        /* height: 500px; */
        /* text-align: center; */
    }

    .TOP {
        height: 60px;
    }

    .fiche {
        /* height: 400px; */
        /* margin: auto; */
        /* border: 3px solid #4287f5; */

    }

    .fiche td {
        /* padding-left: 20px;
        padding-top: 20px;
        padding-right: 20px;
        font-size: 20px;
        border: solid black;*/
        border-bottom: solid black 3px;
    }

    .header {}

    table {
        /* border-collapse: collapse; */
        border-radius: 15px;
        border: 2px solid purple;
        padding: 5px;
    }

    #right {
        /* font-family: Verdana, Arial, Helvetica, sans-serif; */
        font-size: 20px;
        text-align: center;
        width: 1000px;

    }

    tr {
        /* border: solid red 2px; */

    }

    #nav {
        margin-top: 40px;
    }
    #indication{
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
            <!-- <table>
            <tr>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Numéro de téléphone</td>
                <td>mail</td>
            </tr>
            </table> -->
        </div>
        <!-- AFFICHAGE DE TOUT LES CONTACTS
        NOM + PRENOM + NUMERO DE TELEPHONE + MAIL  -->
        <br><br>
        <table id="right" class="tableau" cellpadding="2" cellspacing="1" size="10px">
            <p>
                <tr id="indication" class="fixed-top">
                    <td>Nom                 |</td>
                    <td>Prénom              |</td>
                    <td>Numéro de téléphone |</td>
                    <td>mail                |</td>
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