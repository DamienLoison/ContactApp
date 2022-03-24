<!doctype html>
<html lang="fr-Fr">
    <head>
        <title>Mon Profil</title>
        <meta charset="utf-8">
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
