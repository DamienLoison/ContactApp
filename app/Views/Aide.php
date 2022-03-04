<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="UTF-8">
        <title>Aide</title>
        <?php echo view('template/header'); ?>
    </head>
    <style>
        body{
            margin-top: 40px;
        }
        .page-aide {
            margin-top: 35px;
        }
    </style>
    <body>
        <div class="Cadre text-dark">
            <h1>Aide d'utilisation</h1>
            <div class="Information d-flex justify-content-center">
                <div class="Info-gauche border border-primary rounded bg-secondary ">                   
                    <h2>Recherche</h2>
                    <p>
                        Pour n'importe quelle recherche, il suffit de cliqué sur <strong>Recherche</strong> depuis la barre de navigation.<br>
                        Après quoi il suffira de choisir entre <em>Contact, Organisation, Login</em>.
                    </p>
                    <h3>Contact</h3>
                    <p>

                    </p>
                    <h3>Organisation</h3>
                    <p>
                        •
                    </p>
                    <h3>Login</h3>
                    <p>
                        •
                    </p>
                </div>
                <div class="Info-droite border border-danger rounded bg-secondary">
                    <h2>Navigation</h2>
                </div>
            </div>
    </body>
    <footer>
        <?php echo view('template/footer'); ?>
    </footer>
</html>
