<!doctype html>
<html lang="fr-Fr">
    <head>
        <meta charset="utf-8">
        <title>Inscription</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <?php echo view('template/header.php') ?>
    </head>
    <body>
        <style>
            body{
                margin-top: 40px;
                height: 1000px;
            }

        </style>
        <!--        <div class="container">
                    <div class="row justify-content-center align-items-center">       
                        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <h1>Inscription</h1>
        
        <?php if (isset($validation)): ?>
                                                        <div class="alert alert-warning">
            <?= $validation->listErrors() ?>
                                                        </div>
        <?php endif; ?>
        
        <?= form_open() ?>
                            <div class="form-group">
                                <label>Utilisateur :</label>
                                <input type="text" name="nom" placeholder="Utilisateur" class="form-control">
        
                            </div>
                            <div class="form-group">
                                <label>Email :</label>
                                <input type="text" name="email" placeholder="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Mot de passe :</label>
                                <input type="password" name="password" placeholder="mot de passe" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Confirmer mot de passe :</label>
                                <input type="password" name="confpassword" placeholder="mot de passe" class="form-control">
                            </div>
                            BOUTON VALIDER
                            <div class="form-group">
                                <input type="submit" name="inscription" value="inscription" class="btn-primary">
                            </div>
        <?= form_close() ?>
                        </div>
                    </div>
                </div>-->



        <div class="container ">
            <div class="row justify-content-center align-items-center">
                <h1>INSCRIPTION</h1>
                <form class="" action="/inscription" method="POST">
                    <div class="row">
                        <div class="col col-12 col-sm-4">
                            <div class="form-group">
                                <label>Utilisateur :</label>
                                <input type="text" name="nom" placeholder="marquer votre rôle ou nom" class="form-control">
                            </div>
                        </div>
                        <div class="col col-12">
                            <div class="form-group">
                                <label>Email :</label>
                                <input type="text" name="email" placeholder="entrer l'email" class="form-control">
                            </div>
                        </div>
                        <div class="col col-12 col-sm-6">
                            <div class="form-group">
                                <label>Mot de passe :</label>
                                <input type="password" name="password" placeholder="entrer le mot de passe" class="form-control">
                            </div>
                        </div>
                        <div class="col col-12 col-sm-6">
                            <div class="form-group">
                                <label>Confirmer mot de passe :</label>
                                <input type="password" name="confpassword" placeholder="entrer le mot de passe" class="form-control">
                            </div>
                        </div>

                        <?php if (isset($Validation)): ?>
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                    <?= $Validation->listErrors() ?>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                    <!--BOUTON-->
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Inscription</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a href="/connexion">Déjà inscrit ?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br><br><br><br><br><br>

        
        
    </body>
    <footer>
        <?php echo view('template/footer.php') ?>
    </footer>
</html>
