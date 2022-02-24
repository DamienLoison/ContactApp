<!DOCTYPE html>
<html lang="fr-Fr">

    <head>
        <meta charset="UTF-8">
        <title>Aide</title>
    </head>
    <style>
        body{
            background-color: rgb(84, 84, 84);
        }
        .page-aide {
            margin-top: 35px;
            /*font-size: 20px;*/
            background-color: rgb(84, 84, 84);
            color: wheat;
        }
        footer{
            margin-top: -20px;
        }
    </style>
    <body>
        <div class="top">
            <?php echo view('template/header'); ?>
        </div>
        <div class="page-aide">
            <div class="container">
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
        </div>
    </body>
    <footer>
        <?php echo view('template/footer'); ?>
    </footer>
</html>
