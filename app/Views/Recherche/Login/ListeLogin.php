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
        <div class="Ajouter d-flex justify-content-center bg-dark">
        </div>
        <div class="bg-dark">
            <?php if (!empty($logins) && is_array($logins)) : ?>
                <table class="table table-dark table-borderless table-sm">
                    <thead class="">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Utilisateur</th>
                            <th scope="col">Mot de passe</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">Supprimer</th>
                            <th scope="col"><a href="/Ajouter/Ajouter_Login">Ajouter Login</a></th>
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
                                    <button type="submit" class="btn btn-outline-dark" value="">&#10060;</button>
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