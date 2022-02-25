<!DOCTYPE html>
<html lang="fr-Fr">

    <head>
        <meta charset="utf-8">
        <title>Recherche |Liste Organisation</title>
    </head>

    <style>
        #indication {
            margin-top: 40px;
            color: white;
            background-color: black;
            font-size: 20px;
        }
        .footer {
            margin-top: -16px;
        }
    </style>

    <body>
        <div class="nav">
            <?php echo view('template/header.php') ?>
        </div>
        <div class="justify-content-center">
            <?php if (!empty($organisations) && is_array($organisations)) : ?>
                <table class="table table-dark table-borderless table-sm">
                    <thead class="">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Site</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Supprimer</th>
                            <th scope="col"><a href="/Ajouter/Ajouter_Organisation">Ajouter Organisation</a></th>
                        </tr>
                    </thead>
                    <?php foreach ($organisations as $organisation) : ?>
                        <tr class='border border-danger'>
                            <!--MISE EN PLACE DE LA RECHERCHE DES INFORMATIONS-->
                            <td> <?php echo ($organisation['ID_Organisation']) ?></td>
                            <td> <?php echo ($organisation['Nom_Organisation']) ?></td>
                            <td> <?php echo ($organisation['Adresse_Organisation']) ?></td>
                            <td> <?php echo ($organisation['Mail_Organisation']) ?></td>
                            <td> <?php echo ($organisation['Site_Organisation']) ?></td>
                            <td> <?php echo ($organisation['Telephone_Organisation']) ?></td>
                            <td>
                                <form name="Modifier" action="<?php echo Base_url(); ?>/Modifier/modifier_organisation" method="POST">
                                    <button type="submit" class="btn btn-outline-warning" value="">Modifier</button>
                                </form>
                            </td>
                            <td>
                                <form name="Supprimer" action="<?php echo Base_url(); ?>/Supprimer/supprimer_organisation" method="POST">
                                    <button type="submit" class="btn btn-outline-dark" value="">&#10060;</button>
                                </form>
                            </td>
                            <td>
                                <!-- LAISSER VIDE !!!-->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif ?>
            </table>
        </div>
        <div class="footer">
            <?php echo view('template/footer.php') ?>
        </div>
    </body>
</html>