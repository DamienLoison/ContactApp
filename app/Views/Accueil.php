<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        <link rel="stylesheet" type="text/css" href="Style.css" media="all" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Accueil</title>
        <?php echo view('template/header.php') ?>
    </head>
    <style>
        body{
            margin-top: 40px;
        }
        .Accueil{
        }
        .corps{
            margin-top: -8px;
        }
        .gauche{
            width: 35%;
            height: 100%;
            border-right: solid rgb(84, 84, 84) 2px ;
        }
        .milieu{
            width: 65%;
            height: 100%;
        }
    </style>
    <body>
        <div class="Accueil">
            <div class="text-center bg-dark text-white">
                <h1>ContactApp</h1>
            </div>
            <div class="corps row align-items-start bg-dark text-white text-center">
                <!--AFFICHAGE A GAUCHE--> 
                <div class="gauche col-4 bg-dark text-white">
                    <h3 class="bg-danger">ACCÈS RAPIDE</h3>
                    <div>
                        <h4 style="background-color: blueviolet;">CONTACT</h4>
                        <a style="color: blueviolet;" href="/Recherche/tout_les_contacts">AFFICHER CONTACT</a><br>
                        _____________________ <br>
                        <a style="color: blueviolet;" href="/Ajouter/ajouter_contact">AJOUTER CONTACT</a><br>
                    </div><br>
                    <div>
                        <h4 style="background-color: tomato;">ORGANISATION</h4>
                        <a style="color: tomato;" href="/Recherche/toute_les_organisations">AFFICHER ORGANISATION</a><br>
                        ___________________________ <br>
                        <a style="color: tomato;" href="/Ajouter/ajouter_organisation">AJOUTER ORGANISATION</a><br>
                    </div><br>
                    <div>
                        <h4 style="background-color: seagreen;">LOGIN</h4>
                        <a style="color: seagreen;" href="/Recherche/tout_les_login">AFFICHER LOGIN</a><br>
                        _________________ <br>
                        <a style="color: seagreen;" href="/Ajouter/ajouter_login">AJOUTER LOGIN</a><br>
                    </div>
                    <br>
                </div>
                <!--AFFICHAGE CENTRAL --> 
                <div class="milieu col-8 bg-dark text-white ">
                    <h3 class="bg-danger text-white">INFORMATION CENTER</h3>
                    <h4>se réferrer au Note Patch actuel disponible depuis la barre de navigation</h4>
                    <h4>DERNIER AJOUT :</h4>
                    CONTACT : • | <!-- AFFICHAGE DU DERNIER CONTACT AJOUTER-->
                    ORGANISATION : • |  <!-- AFFICHAGE DE LA DERNIERE ORGANISATION AJOUTER -->
                    LOGIN : •  <!-- AFFICHAGE DU DERNIER LOGIN AJOUTER -->
                    
                    <br>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <?php echo view('template/footer.php') ?>
    </footer>
</html>