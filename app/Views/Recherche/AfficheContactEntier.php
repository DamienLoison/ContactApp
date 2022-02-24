<!DOCTYPE html>
<html lang="fr-Fr">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/MiseEnPage">
        <title>Recherche | Contact Entier</title>
    </head>

    <style>
        html{
            background-color: #545454;
        }
        body{
            background-color: #545454;
        }
        .TOP {
            height: 60px;
            background-color: #545454;
        }

        #right {
            font-size: 20px;
            text-align: center;
            width: 1200px;
            background-color: #545454;
        }

        #nav {
            margin-top: 40px;
        }

        .fiche{
            margin-left: 0.4px;
            margin-right: 0.5px;
            background-color: #545454;
        }
        .indication {
            margin-top: 90px;
            color: white;
            background-color: #545454;
            font-size: 20px;
            text-align: center;
            width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }

        .tableau {
            background-color: #545454;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        /*
        TABLEAU D'AFFICHAGE
        */
        table {
            border-radius: 15px;
            /*            border: 2px solid purple;*/
            padding: 5px;
            background-color: #545454;
        }
        tr{
            border: solid #000 5px;
            background-color: #545454;
        }
        td{
            padding-left: 20px;
            padding-top: 20px;
            padding-right: 20px;
            font-size: 30px;
            background-color: #545454;
        }
        .footer {
            margin-top: -16px;
        }
        .corp {
            margin-top: -14px;
        }
    </style>

    <body>
        <div class="header">
            <?php echo view('template/header.php') ?>
        </div>
        <div class="fiche">
            <div class="TOP">
                <nav id="nav" class="navbar navbar bg-dark fixed-top">
                    <div class="container-fluid">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
            <!-- AFFICHAGE DE TOUT LES CONTACTS
            NOM + PRENOM + NUMERO DE TELEPHONE + MAIL + organisation  -->
            <br><br>
            <div class="corp justify-content-center">
                <?php if (!empty($contacts) && is_array($contacts)) : ?>
                    <table class="table table-dark table-borderless table-sm">
                        <thead class="">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Numéro de téléphone</th>
                                <th scope="col">mail</th>
                                <th scope="col">Organisation</th>
                            </tr>
                        </thead>
                        <?php foreach ($contacts as $contact) : ?>
                            <!--PROBLEME DE DUPLICATION DES RESULTAT !!-->
                            <!--A CAUSE DU DOUBLE FOREACH -->
                            <?php foreach ($organisations as $organisation) : ?>
                                <tr class='border border-danger'>
                                    <!--MISE EN PLACE DE LA RECHERCHE DES INFORMATIONS-->
                                    <td><?php echo ($contact['ID_Contact']) ?></td>
                                    <td><?php echo ($contact['Nom_Contact']) ?></td>
                                    <td><?php echo ($contact['Prenom_Contact']) ?></td>
                                    <td><?php echo ($contact['numeroTel_Contact']) ?></td>
                                    <td><?php echo ($contact['mail_Contact']) ?></td>
                                    <td><?php echo ($organisation['Nom_Organisation']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    <?php endif ?>
                </table>
            </div>
            <div class="bas">
            </div>
        </div>
    </body>
    <footer>
        <?php echo view('template/footer.php') ?>
    </footer>

</html>