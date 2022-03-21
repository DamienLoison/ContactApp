<!doctype html>
<html lang="fr-Fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Connexion</title>
        <?php echo view('template/header.php') ?>
    </head>
    <body>
        <style>
            body{
                margin-top: 40px;
            }
        </style>
        <div class="container">
            <div class="row justify-content-center align-items-center">       
<!--                <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <h1>Connexion</h1>

                    <?= form_open() ?>

                    <div class="form-group">
                        <label>Email :</label>
                        <input type="text" name="email" placeholder="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mot de passe :</label>
                        <input type="password" name="password" placeholder="mot de passe" class="form-control">
                    </div>
                    BOUTON VALIDER
                    <div class="form-group">
                        <input type="submit" name="connexion" value="Connexion" class="btn-primary">
                    </div>

                    <?= form_close() ?>
                </div>-->

                <h1>Connexion</h1>
                <?php if (session()->get('sucess')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->get('sucess') ?>
                    </div>
                <?php endif; ?>
                <form class="" action="/User/Connexion" method="POST">
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="text" name="email" value="<?= set_value('email') ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="password" name="password" value="" class="form-control required">
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Connexion</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a href="/Inscription">Pas encore de compte ?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <footer>
        <?php echo view('template/footer.php') ?>
    </footer>
</html>
