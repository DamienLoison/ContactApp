<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <title>Formulaire Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        .container {
            margin-top: 70px;
            height: 500px;
        }
    </style>
    <body>
        <div class="nav">
            <?php echo view('template/header.php') ?>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-4 offset-4 my-3">
                    <form action="" method="POST">
                        <button class="btn btn-primary"><a class="text-white" href="javascript:window.history.go(-1);">Retour</a></button>                       
                    </form>
                    <h2>Ajouter un Login</h2>
                    <form action="<?php echo site_url('Accueil/ajouter_login_record'); ?>" method="POST">
                        <div class="mb-3 mt-3">
                            <label>Utilisateur :</label>
                            <input type="text" class="form-control" id="Utilisateur_Login" placeholder="Entrer le nom d'utilisateur" name="Utilisateur_Login" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>Mot de passe :</label>
                            <input type="password" class="form-control" id="Password_Login" placeholder="Entrer le mot de passe" name="Password_Login" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>