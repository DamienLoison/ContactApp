<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
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
                BETA VERSION B:1.0.11<br>
                Experimental version
            </div>
            <!--CORPS--> 
            <div class="corps row align-items-start text-center">
                <!--AFFICHAGE A GAUCHE--> 
                <div class="gauche col  bg-dark text-white">
                    GAUCHE
                    <br><br><br><br><br>
                    <div class="dropdown">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Rechercher</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/Recherche/tout_les_contacts">Contact</a></li>
                            <li><a class="dropdown-item" href="/Recherche/toute_les_organisations">Organisation</a></li>
                            <li><a class="dropdown-item" href="/Recherche/tout_les_login">Login</a></li>
                        </ul>
                    </div>
                    <br><br><br><br><br>
                </div>
                <!--AFFICHAGE CENTRAL --> 
                <div class="milieu col-7 ">
                    MILIEU <br>

                    Recherche rapide :<br>

                    contact<br>
                    <!-- CREATION BARRE DE RECHERCHE -->
                    <?php ?>
                    organisation<br>
                    <!-- CREATION BARRE DE RECHERCHE -->
                    login<br>
                    <!-- CREATION BARRE DE RECHERCHE -->
                    
                    
                    <!--  MISE EN PLACE D UNE SOLUTION DE RECHERCHE 
                                        DANS LES CONTACT / ORGANISATION / LOGIN
                                        SELON LE CHOIX FAIT 
                                        EN ENTRANT UN NOM -->


                </div>
                <!--AFFICHAGE A DROITE--> 
                <div class="droite col bg-dark text-white">
                    DROITE
                    <br><br><br><br><br>
                    <div class="dropdown">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Ajouter</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/Ajouter/ajouter_contact">Contact</a></li>
                            <li><a class="dropdown-item" href="/Ajouter/ajouter_organisation">Organisation</a></li>
                            <li><a class="dropdown-item" href="/Ajouter/ajouter_login">Login</a></li>
                        </ul>
                    </div>
                    <br><br><br><br><br>
                </div>
            </div>


        </div>
    </body>
    <footer>
        <?php echo view('template/footer.php') ?>
    </footer>
</html>