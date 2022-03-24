<!doctype html>
<html lang="fr-Fr">
    <head>
        <meta charset="utf-8">
        <title>Mon Profil</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php $session = session(); ?>

        <script>
        </script>
        <style>
            body{
                margin-top: 40px;
            }
        </style>
        <div class="containert">
            <div id="TOP" class="text-center">
                <h2><strong>ContactApp Profil</strong></h2>
                <h3>Bienvenu sur votre profit : <strong style="border-bottom: solid 1px black"><?php echo $session->get('user_name'); ?></strong></h3>
            </div>
            <div id="corps" class="text-center">

                <label>Nom/Rôle de l'utilisateur :</label>
                <input type="text" name="user_name" value="<?php echo $session->get('user_name') ?>">

                <label>Email de l'utilisateur :</label>
                <input type="text" name="user_email" value="<?php echo $session->get('user_email') ?>">
                
                <label>Date de création du rôle :</label>
                <input type="text" name="user_created_at"
                       value="
                       <?php
                       foreach ($users as $user) {
                           if ($user['user_name'] == $session->get('user_name')) {
                               echo $user['user_created_at'];
                           }
                       }
                       ?>">
            </div>
        </div>
    </body>
</html>
