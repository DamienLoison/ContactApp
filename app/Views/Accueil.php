<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        <link rel="stylesheet" type="text/css" href="Style.css" media="all" />
        <!--ACTUALISE LA PAGE TOUTE LES MINUTES-->
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
/*        #NomSession{
            border-bottom: solid white 1px;
        }*/
    </style>
    <body>
        <script>
            //DATE ET HEURE EN TEMPS REELLE
            function pause(ms)
            {
                return new Promise(resolve => setTimeout(resolve, ms));
            }

            async function afficherDate()
            {
                while (true)
                {
                    await pause(1000);
                    var cejour = new Date();
                    var options = {weekday: "long", year: "numeric", month: "long", day: "2-digit"};
                    var date = cejour.toLocaleDateString("fr-FR", options);
                    var heure = ("0" + cejour.getHours()).slice(-2) + ":" + ("0" + cejour.getMinutes()).slice(-2) + ":" + ("0" + cejour.getSeconds()).slice(-2);
                    var dateheure = date + " " + heure;
                    var dateheure = dateheure.replace(/(^\w{1})|(\s+\w{1})/g, lettre => lettre.toUpperCase());
                    document.getElementById('dateheure').innerHTML = dateheure;
                }
            }
            afficherDate();
        </script>
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
                    <h3 class="bg-danger text-white">CENTRE D'INFORMATION</h3>
                    <h4>
                        <span id="dateheure"></span> 
                    </h4>
                    <h4 id="NomSession">Bienvenu <?php echo $session->get('nom') ?></h4>
                    __________________________
                    <h4 style="font-size: 11px; margin-top: 320px">se réferrer au Note Patch actuel disponible depuis la barre de navigation</h4>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <?php echo view('template/footer.php') ?>
    </footer>
</html>