<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
        <title>Modification contact</title>
        <?php echo view('template/header.php') ?>
    </head>
    <style>
        .container {
            margin-top: 70px;
            height: 500px;
        }
    </style>
    <body>
        <!--SCRIPT POUR LA LISTE DES ORGANISATIONS-->
        <!--PERMET D ECRIRE DANS UNE BARRE DE RECHERCHE POUR TROUVER PLUS FACILEMENT--> 
        <!--L ORGANISATION RECHERCHE-->
        <script>
            $(document).ready(function () {
                $('select').selectize({
                    sortField: 'text'
                });
            });
        </script>
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-4 offset-4 my-3">
                    <a href="ModificationContact.php"></a>
                    <h2>Modifier un contact</h2>
                    <form action="<?= base_url('Recherche/update_contact/' . $contact['ID_Contact']); ?>" method="POST">
                        <div class="mb-3 mt-3">
                            <label>Nom du contact :</label>
                            <input type="text" name="Nom_Contact" value="<?= $contact['Nom_Contact'] ?>" class="form-control"  placeholder="Entrer le nom" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>Prénom du contact :</label>
                            <input type="text" name="Prenom_Contact" value="<?= $contact['Prenom_Contact'] ?>" class="form-control" placeholder="Entrer le prénom" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>numéro de téléphone du contact :</label>
                            <input type="text" name="numeroTel_Contact" value="<?= $contact['numeroTel_Contact'] ?>" class="form-control" placeholder="Entrer le numéro de téléphone"  minlength="10" maxlength="10" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label>Email du contact :</label>
                            <input type="text" name="mail_Contact" value="<?= $contact['mail_Contact'] ?>" class="form-control" placeholder="Entrer le mail" required>
                        </div>
                        <div class="mb-3 mt-3 align-content-start">
                            <label>ID de l'organisation :</label>
                            <input type="text" name="ID_Organisation" value="<?= $contact['ID_Organisation'] ?>" class="form-control" placeholder="Entrer le mail" required>
                            <label>Nom de l'organisation :</label>
                            <input type="text" name="Nom_Organisation_Contact" value="<?= $contact['Nom_Organisation_Contact'] ?>" class="form-control" placeholder="Entrer le nom de l'organisation" disabled required>
                        </div>

                        <!--TEST-->
                        <div>
                            <select class="" value="" name="ID_Organisation" methode="POST">
                                <option disabled>AFFICHAGE DES ORGANISATIONS :</option>
                                <?php foreach ($organisation as $organisation) { ?>
                                    <?php
                                    $organisation['ID_Organisation'] = $contact['ID_Organisation'];
                                    $test = $contact['ID_Organisation'];
                                    $VARIABLE = "BONJOUR TEST";
                                    $tests = $organisation['ID_Organisation'];
                                    if ($test = $tests) {
                                        echo "<option selected disabled>" . $VARIABLE . "</option>";
                                    } else {
                                        echo "ERREUR !";
                                    }
                                    ?>
                                    <option selected disabled><?= $contact['ID_Organisation'] . " " . $organisation['Nom_Organisation'] ?></option>
                                    <option><?php echo $organisation['ID_Organisation'] . " " . $organisation['Nom_Organisation'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!--FIN TEST-->

                        <button type="submit" class="btn btn-primary btn-block btn-lg float-start">Valider</button>
                    </form>
                    <div class="d-flex align-content-start">                        
                        <form action="<?= base_url('Recherche/tout_les_contacts'); ?>" method="POST">
                            <button type="submit" class="btn btn-danger btn-block btn-lg float-end">Retour</button>
                        </form>   
                    </div>


                </div>
            </div>
        </div>
    </body>
</html>
