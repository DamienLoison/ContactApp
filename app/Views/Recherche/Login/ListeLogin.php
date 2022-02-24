<!DOCTYPE html>
<html lang="fr-Fr">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/MiseEnPage">
        <title>Liste |Login</title>
    </head>
    <style>
        .nav {
            height: 40px;
        }

        .footer {
            margin-top: -16px;
        }
    </style>
    <body>
        <div class="nav">
            <?php echo view('template/header.php') ?>
        </div>
        <div class="">
            <div class="justify-content-center">
                <?php if (!empty($logins) && is_array($logins)) : ?>
                    <table class="table table-dark table-borderless table-sm">
                        <thead class="">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Utilisateur</th>
                                <th scope="col">Mot de passe</th>
                                <th scope="col">Modifier</th>
                                <th scope="col">Supprimer</th>
                            </tr>
                        </thead>
                        <?php foreach ($logins as $login) : ?>
                            <tr class='border border-danger'>
                                <!--MISE EN PLACE DE LA RECHERCHE DES INFORMATIONS-->
                                <td> <?php echo ($login['ID_Login']) ?></td>
                                <td> <?php echo ($login['Utilisateur_Login']) ?></td>
                                <td> <?php echo ($login['Password_Login']) ?></td>
                                <td>
                                    <form name="Modifier" action="<?php echo Base_url(); ?>/Modifier/modifier_login" method="POST">
                                        <button type="submit" class="btn btn-outline-warning" value="">Modifier</button>
                                    </form>
                                </td>
                                <td>
                                    <form name="Supprimer" action="<?php echo Base_url(); ?>/Supprimer/supprimer_login" method="POST">
                                        <button type="submit" class="btn btn-outline-primary" value="">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif ?>
                </table>
            </div>
        </div>
        <div class="footer">
            <?php echo view('template/footer.php') ?>
        </div>
    </body>
</html>