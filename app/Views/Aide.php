<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="UTF-8">
        <title>Aide</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <?php echo view('template/header'); ?>
    </head>
    <style>
        body{
            margin-top: 40px;
        }
        .page-aide {
            margin-top: 35px;
        }
        .contact{
            border-left: solid blueviolet 2px ;
            padding-left: 5px;
        }
        .organisation{
            border-left: solid tomato 2px ;
            padding-left: 5px;
        }
        .login{
            border-left: solid seagreen 2px ;
            padding-left: 5px;
        }
    </style>
    <body>
        <div class="Cadre bg-dark text-white">
            <h1 class="text-center">Aide d'utilisation</h1>
            <h4 class="text-center">_______________________</h4>
            <div class="Information bg-dark d-flex justify-content-center">
                <div class="Info-gauche rounded bg-dark ">                   
                    <h2>Recherche</h2>
                    <p>
                        Pour n'importe quelle recherche, il suffit de cliqué sur <strong>Recherche</strong> depuis la barre de navigation.<br>
                        Après quoi il suffira de choisir entre <em style="color: blueviolet">Contact,</em> <em style="color: tomato">Organisation,</em> <em style="color: seagreen">Login</em>.
                    </p>
                    <div class="contact">
                        <h3 style="color: blueviolet">Contact</h3>
                        <p>
                            L'affichage des contacts comporte un tableau de 9 colonnes comprennant : <br>
                            L'ID -> Permet d'identifier le contact même si 2 contacts on le même nom et prénom<br>
                            Le Nom du contact<br>
                            Le Prénom du contact<br>
                            Le numéro de téléphone du contact<br>
                            Le mail du contact<br>
                            Le nom de l'organisation du contact<br>
                            Modifier -> permet de modifier les informations d'un contact <br>
                            Supprimer -> Supprime le contact ainsi que l'ensemble de ses informations<br>
                            + -> Permet d'ajouter un contact<br>
                            <strong>La barre de recherche fonctionne qu'avec le nom du contact !</strong>
                        </p>
                    </div>
                    <h4 class="text-center">____________________________________________</h4>
                    <div class="organisation">
                        <h3 style="color: tomato">Organisation</h3>
                        <p>
                            L'Affichage des organisations comporte un tableau de 10 colonnes comprennant : <br>
                            L'ID -> permet d'identifier l'organisation et de les différenciers<br>
                            Le nom de l'organisation<br>
                            L'adresse de l'organisation<br>
                            La ville où se situe l'organisation<br>
                            Le mail de l'organisation<br>
                            Le site de l'organisation<br>
                            Le numéro de téléphone de l'organisation<br>
                            Modifier -> Permet de modifier les informations de l'organisations<br>
                            Supprimer -> Supprime l'organisation ainsi que l'ensemble de ses données<br>
                            + -> Permet d'ajouter une nouvelle organisation<br>
                            <strong>La barre de recherche fonctionne qu'avec le nom d'une organisation !</strong>
                        </p>
                    </div>
                    <h4 class="text-center">____________________________________________</h4>
                    <div class="login">
                        <h3 style="color: seagreen">Login</h3>
                        <p>
                            L'Affichage des logins comporte un tableau de 6 colonnes comprennant :<br>
                            L'ID -> permettant d'identifier le login<br>
                            Le nom d'Utilisateur qui est nécessaire pour se connecter<br>
                            Les identifiants sont cachés, nécessite de cliquer sur <em>"accéder"</em><br>
                            Modifier -> Permet de modifier les informations de login<br>
                            Supprimer -> supprime le login<br>
                            + -> Permet d'ajouter un nouveau login<br>
                            <strong>La barre de recherche fonctionne qu'avec l'ID d'un login !</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <?php echo view('template/footer'); ?>
    </footer>
</html>
