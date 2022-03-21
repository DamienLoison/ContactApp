<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <title>Formulaire Contact</title>
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
                    <a href="formulaire.php"></a>
                    <form action="" method="POST">
                        <button class="btn btn-primary"><a class="text-white" href="javascript:window.history.go(-1);">Retour</a></button>                       
                    </form>  
                    <h2>Ajouter un contact</h2>                    
                    <form action="<?php echo site_url('Ajouter/ajouter_contact_record'); ?>" method="POST">
                        <div class="mb-3 mt-3">
                            <label>Nom du contact :</label>
                            <input type="text" class="form-control" id="nomContact" placeholder="Entrer le nom" name="Nom_Contact" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>Prénom du contact :</label>
                            <input type="text" class="form-control" id="PrenomContact" placeholder="Entrer le prénom" name="Prenom_Contact" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>numéro de téléphone du contact :</label>
                            <input type="text" class="form-control" id="TelephoneContact" placeholder="Entrer le numéro de téléphone" name="numeroTel_Contact" minlength="10" maxlength="10" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>Email du contact :</label>
                            <input type="text" class="form-control" id="mailContact" placeholder="Entrer le mail" name="mail_Contact" required>
                        </div>
                        <div class="mb-3">
                            <!--CHOIX DE L'ID ET DU NOM DE L'ORGANISATION !-->
                            <label>Organisation : </label>
                            <select name="ID_Organisation">
                                <?php if (!empty($organisations) && is_array($organisations)) : ?>
                                    <?php foreach ($organisations as $organisation): ?>
                                        <option>
                                            <?php echo ($organisation['ID_Organisation']) ?>
                                            <?php echo ($organisation['Nom_Organisation']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg float-start">Valider</button>
                        <form action="<?php echo site_url('Ajouter/ajouter_organisation'); ?>" method="POST">
                            <button type="submit" class="Add_Organisation btn btn-primary btn-block btn-lg float-end">Ajouter une organisation</button>
                        </form>    
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>