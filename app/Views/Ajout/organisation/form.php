<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <title>Formulaire Organisation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        .nav {
            height: 40px;
        }

        .footer {
            height: 75px;
        }

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
                    <h2>Ajouter une Organisation</h2>
                    <form action="<?php echo site_url('Ajouter/ajouter_organisation_record'); ?>" method="POST">
                        <div class="mb-3 mt-3">
                            <label>Nom de l'organisation :</label>
                            <input type="text" class="form-control" id="Nom_Organisation" placeholder="Entrer le nom" name="Nom_Organisation" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>Adresse de l'organisation :</label>
                            <input type="text" class="form-control" id="Adresse_Organisation" placeholder="Entrer le prénom" name="Adresse_Organisation" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>Mail de l'organisation :</label>
                            <input type="text" class="form-control" id="Mail_Organisation" placeholder="Entrer le mail" name="Mail_Organisation" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>Site de l'organisation :</label>
                            <input type="text" class="form-control" id="Site_Organisation" placeholder="Entrer le site internet de l'organisation" name="Site_Organisation" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>numéro de téléphone de l'organisation :</label>
                            <input type="text" class="form-control" id="Telephone_Organisation" placeholder="Entrer le numéro de téléphone" name="Telephone_Organisation" minlength="10" maxlength="10" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>