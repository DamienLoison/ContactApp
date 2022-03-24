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
        .gauche{
            width: 35%;
            height: 100%;
            border-right: solid rgb(84, 84, 84) 2px ;
        }
        .milieu{
            width: 65%;
            height: 100%;
        }
        #session{
            width: 20%;
            margin-left: 40%;
            border-bottom: solid 1px white;
        }
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
            <div class="corps row align-items-start bg-dark text-white text-center">
                <!--AFFICHAGE A GAUCHE--> 
                <div class="gauche col-4 bg-dark text-white">
                    <h3 class="bg-danger">ACCÈS RAPIDE</h3>
                    <div>
                        <h4 style="background-color: blueviolet;">CONTACT</h4>
                        <a style="color: blueviolet;" href="/Accueil/tout_les_contacts">AFFICHER CONTACT</a><br>
                        _____________________ <br>
                        <a style="color: blueviolet;" href="/Accueil/ajouter_contact">AJOUTER CONTACT</a><br>
                    </div><br>
                    <div>
                        <h4 style="background-color: tomato;">ORGANISATION</h4>
                        <a style="color: tomato;" href="/Accueil/toute_les_organisations">AFFICHER ORGANISATION</a><br>
                        ___________________________ <br>
                        <a style="color: tomato;" href="/Accueil/ajouter_organisation">AJOUTER ORGANISATION</a><br>
                    </div><br>
                    <div>
                        <h4 style="background-color: seagreen;">LOGIN</h4>
                        <a style="color: seagreen;" href="/Accueil/tout_les_login">AFFICHER LOGIN</a><br>
                        _________________ <br>
                        <a style="color: seagreen;" href="/Accueil/ajouter_login">AJOUTER LOGIN</a><br>
                    </div>
                    <br>
                </div>
                <!--AFFICHAGE CENTRAL --> 
                <div class="milieu col-8 bg-dark text-white ">
                    <h3 class="bg-danger text-white">CENTRE D'INFORMATION</h3>
                    <h4>
                        <span id="dateheure"></span> 
                    </h4>
                    <div id="session" class="">
                        <h4>           
                            <?php
                            $session = session();
                            if ($session->get('user_name') == null) {
                                
                            } else {
                                echo "Bienvenu : " . $session->get('user_name');
                                echo "";
                            }
                            ?>
                        </h4>
                    </div>
                    <div class="row">
                        <div class="col">
                            <br>
                            <h4>besoin d'aide ?</h4>
                            <p class="text-start" style="border-left: solid 2px #cdba20; padding-left: 5px;">
                                Un doute sur comment utiliser l'application ?<br>
                                un peu perdu ?
                                Venez voir la page d'aide<br><br>
                                <a href="/Accueil/aide" >Direction l'aide</a>
                            </p>
                        </div>
                        <div class="col">
                            <br>
                            <h4>Curieux sur l'application ?</h4>
                            <p class="" style="border-left: solid 2px palegreen; padding-left: 5px;">
                                Tu veux savoir comment fonctionne l'application ?<br>
                                Quel est son code source ? Où le trouver ?<br>
                                Vien faire un tour sur la page officielle Github<br>
                                <a href="https://github.com/DamienLoison/ContactApp" >Direction Github</a>
                            </p>
                            <br>
                        </div>
                    </div>

                    <!--                    <div>
                                            <h4 style="font-size: 11px; margin-top: 320px">se réferrer au Note Patch actuel disponible depuis la barre de navigation</h4>
                                        </div>-->
                </div>
            </div>
    </body>
    <footer>
        <?php echo view('template/footer.php') ?>
    </footer>
</html>