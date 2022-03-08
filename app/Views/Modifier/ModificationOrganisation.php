<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="nav">
            <?php echo view('template/header.php') ?>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-4 offset-4 my-3">
                    <h2>Ajouter une Organisation</h2>
                    <form action="<?= base_url('Recherche/update_organisation/' . $organisation['ID_Organisation']); ?>" method="POST">
                        <div class="mb-3 mt-3">
                            <label>Nom de l'organisation :</label>
                            <input type="text" name="Nom_Organisation" value="<?= $organisation['Nom_Organisation'] ?>" class="form-control"  placeholder="Entrer le nom" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>Adresse de l'organisation :</label>
                            <input type="text" name="Adresse_Organisation" value="<?= $organisation['Adresse_Organisation'] ?>" class="form-control"  placeholder="Entrer le prénom" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>Mail de l'organisation :</label>
                            <input type="text" name="Mail_Organisation" value="<?= $organisation['Mail_Organisation'] ?>" class="form-control"  placeholder="Entrer le mail" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>Site de l'organisation :</label>
                            <input type="text" name="Site_Organisation" value="<?= $organisation['Site_Organisation'] ?>" class="form-control"  placeholder="Entrer le site internet de l'organisation" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>numéro de téléphone de l'organisation :</label>
                            <input type="text" name="Telephone_Organisation" value="<?= $organisation['Telephone_Organisation'] ?>" class="form-control" placeholder="Entrer le numéro de téléphone" minlength="10" maxlength="10" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Valider</button>
                        <form action="<?= base_url('Recherche/toute_les_organisations'); ?>" method="POST">
                            <button type="submit" class="btn btn-danger btn-block btn-lg float-end">Retour</button>
                        </form>     
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
