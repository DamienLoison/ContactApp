<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/MiseEnPage">
        <title>Liste |Login</title>
    </head>
    <style>
        .footer {
            margin-top: -16px;
        }
    </style>
    <body>
        <div class="nav">
            <?php echo view('template/header.php') ?>
        </div>
        <!--        <div class="Ajouter d-flex justify-content-center bg-dark">
                </div>-->
        <div class="bg-dark">
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
            <?php if (!empty($logins) && is_array($logins)) : ?>
                <table class="table table-dark table-borderless table-sm">
                    <thead class="">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Utilisateur</th>
                            <th scope="col">Mot de passe</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Supprimer</th>
                            <th scope="col"><a href="/Ajouter/Ajouter_Login">Ajouter</a></th>
                        </tr>
                    </thead>
                    <?php foreach ($logins as $login) : ?>
                        <tr class='border border-danger'>
                            <!--MISE EN PLACE DE LA RECHERCHE DES INFORMATIONS-->
                            <td> <?php echo ($login['ID_Login']) ?></td>
                            <td> <?php echo ($login['Utilisateur_Login']) ?></td>
                            <td> <?php echo ($login['Password_Login']) ?></td>
                            <td>
                                <form action="<?= Base_url('/Recherche/modifier_login/'.$login['ID_Login']);?>" method="POST">
                                    <input type="hidden" name="_method" value="MODIFIER">
                                    <button type="submit" class="btn btn-outline-warning" value="">Modifier</button>
                                </form>
                            </td>
                            <td>
                                <form action="<?= base_url('/Recherche/delete_login/' . $login['ID_Login']) ?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-dark btn-sm">&#10060;</button>
                                </form>
                            </td>
                            <td>
                                <!--LAISSER VIDE !!!-->
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