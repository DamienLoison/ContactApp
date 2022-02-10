<!DOCTYPE html>
<html lang="fr-Fr">

<head>
    <meta charset="UTF-8">
    <title>Aide</title>
</head>
<style>
    /*Remonte la barre de navigation jusqu'au haut de la fiche*/
    .navigation2 {
        font-size: 25px;
        text-align: center;
    }

    .page-aide {
        font-size: 20px;
    }

    h1 {
        color: red;
    }
</style>
<?php
require('template/header.php');
?>

<body>
    <div class="page-aide">
        <h1>Page aide pour modifier application</h1>
        <p>
        <h4>[Fonctionne sous le modèle MVC]</h4>
        |---------------------------------------------<br>
        |FrameWork utilisé : <strong>CodeIgniter 4</strong> <br>
        |---------------------------------------------<br>
        |Accès à la base de donnée via les Models<br>
        |Accès aux Models via les controllers<br>
        |Accès aux Views via les controllers<br>
        |---------------------------------------------<br>
        |<br>
        |---------------------------------------------<br>

        </p>
    </div>
</body>

</html>
<?php
require('template/footer.php');
?>