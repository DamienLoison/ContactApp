<!doctype html>
<html lang="fr-Fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Codeigniter 4 Form Validation Example - positronx.io</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <style>
            .container {
                max-width: 550px;
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">

            <?php $validation = \Config\Services::validation(); ?>
            <form method="post" action="<?php echo base_url('/submit-form') ?>">
                <div class="form-group">
                    <label>Nom du contact</label>
                    <input type="text" name="Nom_Contact" class="form-control">
                    <!-- Error -->
                    <?php if ($validation->getError('Nom_Contact')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('Nom_Contact'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label>prénom du contact</label>
                    <input type="text" name="Prenom_Contact" class="form-control">
                    <!-- Error -->
                    <?php if ($validation->getError('Prenom_Contact')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('Prenom_Contact'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="mail_Contact" class="form-control">
                    <!-- Error -->
                    <?php if ($validation->getError('mail_Contact')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('mail_Contact'); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label>numéro de téléphone du contact</label>
                    <input type="text" name="numTel_Contact" class="form-control">
                    <!-- Error -->
                    <?php if ($validation->getError('numTel_Contact')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('numTel_Contact'); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>