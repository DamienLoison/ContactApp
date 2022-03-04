<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Style.css" media="all" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Accueil</title>
    </head>
    <style>
        .corps{
        }
        .gauche{
        }
        .milieu{
        }
        .droite{
        }
    </style>
    <body>
        <div class="nav">
            <?php echo view('template/header.php') ?>
        </div>
        <div class="Accueil">
            <!--BARRE TOP--> 
            <div class="text-center bg-secondary">
                <h1>ContactApp</h1>
                <h4>se réferrer au Note Patch actuel disponible depuis la barre de navigation</h4>
                BETA VERSION B:1.0.11
            </div>
            <!--CORPS--> 
            <div class="corps row align-items-start text-center">
                <!--AFFICHAGE A GAUCHE--> 
                <div class="gauche col  bg-dark text-white">
                    GAUCHE
                    <br><br><br><br><br>
                    <div class="dropdown">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">TEST</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">TEST</a></li>
                            <li><a class="dropdown-item" href="#">TEST</a></li>
                        </ul>
                    </div>
                    <br><br><br><br><br>
                </div>
                <!--AFFICHAGE CENTRAL --> 
                <div class="milieu col-7 ">
                    MILIEU
                </div>
                <!--AFFICHAGE A DROITE--> 
                <div class="droite col bg-dark text-white">
                    DROITE
                </div>
            </div>




            <div class="Corp text-center">
                <p>
                <h2>TRAVAIL EN COUR ...</h2>
                </p>
                <div class="DernierAjout">
                    <div>

                    </div>
                </div>

                <div class="DerniereRecherche">
                    <div>

                    </div>
                </div>       
            </div>
        </div>
    </body>
    <footer>
        <?php echo view('template/footer.php') ?>
    </footer>
</html>