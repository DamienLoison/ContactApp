<!DOCTYPE html>
<html lang="fr-Fr">

<head>
    <meta charset="UTF-8">
    <title>Ajout Contact |</title>
    <link rel="stylesheet" type="text/css" href="style/AjoutFiche.css" media="all" />
</head>
<?php
require('template/header.php');
require('template/navbar.php');
?>

<body>
    <div class="fiche">
        <div class="Top">
            <h1>Ajout de Contact</h1>
            <style>
                h1 {
                    font-size: 30px;
                }
            </style>
            <div class="Contact" style="color: #04a482;">
                <!-- contient info contact -->
                <h2>Informations Contact</h2>
                <?php if (!empty($contacts) && is_array($contacts)) : ?>
                    <?php foreach ($contacts as $contact) : ?>
                        <form class="formAdd" method="POST">
                            <style>
                                .fiche{
                                    height: 342px;
                                }
                                .NomPrenom {
                                    margin-left: auto;
                                    margin-top: auto;
                                    margin-right: 10px;
                                }

                                .tel {
                                    margin-right: 10px;
                                }

                                .mail {
                                    margin-right: 10px;
                                }

                                .cadre {
                                    width: 500px;
                                    position: absolute;

                                }

                                .form-label {
                                    margin-top: 20px;
                                }

                                .form-control {
                                    /* position: absolute; */
                                }
                            </style>
                            <div class="cadre">
                                <div class="NomPrenom">
                                    <label for="Nom" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="inputNom" size="20" required>
                                    <label for="Prenom" class="form-label">Prenom</label>
                                    <input type="text" class="form-control" id="inputPrenom" size="20" required>
                                </div><br><br>
                                <div class="tel">
                                    <label for="tel" class="form-label">téléphone</label>
                                    <input type="tel" class="form-control" id="inputTel" size="50" required>
                                </div><br><br>
                                <div class="mail">
                                    <label for="mail" class="form-label">mail</label>
                                    <input type="mail" class="form-control" id="inputMail" size="55" required>
                                </div>
                            </div>
                        </form>
                    <?php endforeach; ?>
                <?php endif ?>
            </div>
            <footer>
                <?php require('template/footer.php'); ?>
            </footer>
</body>

</html>