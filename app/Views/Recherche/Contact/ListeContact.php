<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/MiseEnPage">
        <title>Recherche | Liste Contact</title>
        <?php echo view('template/header.php') ?>
    </head>
    <style>
        #right {
            font-size: 20px;
            text-align: center;
            width: 1200px;
            background-color: #545454;
        }
        .fiche{
            margin-top: 40px;
            margin-left: 0.4px;
            margin-right: 0.5px;
            background-color: #545454;
        }
        td{
            font-size: 24px;
            background-color: #545454;
        }
        footer{
            margin-top: -16px;
        }
    </style>
    <body>
        <div class="fiche">
            <div class="TOP">
            </div>
            <div class="corp justify-content-center">
                <?php
                if (session()->getFlashdata('status')) {
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong><?= session()->getFlashdata('status'); ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-laber="Close"></button>
                    </div>
                    <?php
                }
                ?>
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
                                <th scope="col">Modifier</th>
                                <th scope="col">Supprimer</th>
                                <th scope="col"><a href="/Ajouter/Ajouter_Contact">Ajouter</a></th>
                            </tr>
                        </thead>
                        <?php foreach ($contacts as $contact) : ?>
                            <tr class='border border-danger'>
                                <!--MISE EN PLACE DE LA RECHERCHE DES INFORMATIONS-->
                                <td><?php echo ($contact['ID_Contact']) ?></td>
                                <td><?php echo ($contact['Nom_Contact']) ?></td>
                                <td><?php echo ($contact['Prenom_Contact']) ?></td>
                                <td><?php echo ($contact['numeroTel_Contact']) ?></td>
                                <td><?php echo ($contact['mail_Contact']) ?></td>
                                <td><?php echo ($contact['Nom_Organisation_Contact']) ?></td>                          
                                <td>
                                    <form action="<?= base_url('/Recherche/modifier_contact/' . $contact['ID_Contact']); ?>" method="POST">
                                        <input type="hidden" name="_method" value="MODIFIER">
                                        <button type="submit" class="btn btn-outline-warning" value="">Modifier</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="<?= base_url('/Recherche/delete_contact/' . $contact['ID_Contact']) ?>" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-dark btn-sm">&#10060;</button>
                                    </form>
                                </td>       
                                <td>
                                    <!--LAISSER VIDE !!!-->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endif ?>     
            </div>
        </div>
    </body>
    <footer>
        <?php echo view('template/footer.php') ?>
    </footer>
</html>