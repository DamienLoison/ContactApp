<!DOCTYPE html>
<html lang="fr-Fr">

<head>
    <meta charset="utf-8">
    <title>Recherche |Liste Organisation</title>
</head>

<style>
    .nav {
        height: 40px;
    }

    .footer {
        height: 75px;
    }

    #indication {
        margin-top: 40px;
        color: white;
        background-color: black;
        font-size: 20px;
    }
    body td {
        /* padding-left: 20px;
        padding-top: 20px;
        padding-right: 20px;
        font-size: 20px;
        border: solid black;*/
        border-bottom: solid black 3px;
    }
    #right {
        /* font-family: Verdana, Arial, Helvetica, sans-serif; */
        font-size: 20px;
        text-align: center;
        width: 1000px;

    }
</style>

<body>
    <div class="nav">
        <?php echo view('template/header.php') ?>
    </div>

    <div class="ListeOrganisation">
        <p>
        <table id="right" class="tableau" cellpadding="2" cellspacing="1" size="10px">
            <tr id="indication" class="fixed-top">
                <td>Liste des Organisation |</td>
                <td>Nom des Organisation |</td>
                <td>Adresse des Organisation |</td>
                <td>Mail des Organisation |</td>
                <td>Site des Organisation |</td>
                <td>Téléphone des Organisation |</td>
            </tr><br>
            <?php if (!empty($organisations) && is_array($organisations)) : ?>
                <?php foreach ($organisations as $organisation) : ?>
                    <tr>
                        <!--MISE EN PLACE DE LA RECHERCHE DES INFORMATIONS-->
                        <td> <?php echo ($organisation['Nom_Organisation']) ?></td>
                        <td> <?php echo ($organisation['Adresse_Organisation']) ?></td>
                        <td> <?php echo ($organisation['Mail_Organisation']) ?></td>
                        <td> <?php echo ($organisation['Site_Organisation']) ?></td>
                        <td> <?php echo ($organisation['Telephone_Organisation']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif ?>
        </table>
        </p>
    </div>

    <div class="footer">
        <?php echo view('template/footer.php') ?>
    </div>
</body>

</html>