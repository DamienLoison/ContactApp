<!doctype html>
<html lang="fr-Fr">
    <head>
        <meta charset="utf-8">
        <title>Mon Profil</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <style>
            body{
                margin-top: 40px;
            }
        </style>
        <div class="container">
            <h2>MON PROFIL</h2>
            <?php
            $session = session();
            ?>
            <div class="">
                <label>Nom utilisateur :</label>
                <input disabled type="text" name="user_name" value="<?php echo $session->get('user_name'); ?>">
            </div>
            <div class="">
                <label>Email utilisateur :</label>
                <input disabled type="email" name="user_email" value="<?php echo $session->get('user_email'); ?>">
            </div>
        </div>
    </body>
</html>
