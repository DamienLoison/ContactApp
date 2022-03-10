<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="utf-8">
        <title>Note patch</title>
    </head>
    <style>
        h1 {
            background-color: #cdba20;
        }
        .Modification {
            border-top: solid black 5px;
            background-color: #0092db;
        }
        .Todo {
            border-top: solid black 5px;
            border-bottom: solid black 5px;
            margin-top: -10px;
            margin-bottom: -22px;
        }
        .BUG{
            color: #d00;
        }
        .notePatch{
            /*margin-top: 12px;*/
        }
        #ajout{

        }
        #visuel{

        }
        #correction{

        }
        #modif{
            margin-left: 500px;
        }
        #Titre{
            margin-top: 0px;
        }
    </style>
    <body>
        <div class="nav">
            <?php echo view('template/header.php') ?>
        </div>
        <div class="notePatch">
            <div id="Titre" class="bg-dark text-white text-center">
                <h1>NOTE PATCH</h1>
            </div>
            <div class="Todo text-center">
                <table class="table table-dark table-borderless table-sm">
                    <thead>
                        <tr>
                            <th scope="col">IMPORTANCE</th>
                            <th scope="col">TACHE</th>
                        </tr>
                    </thead>
                    <tr class="border border-danger">
                        <td>
                            ++
                        </td>
                        <td>
                            Mise en place des moyens de recherche par ID
                        </td>
                    </tr>
                </table>
            </div>  

            <div class="bg-dark text-white ">
                <h1 class="text-center">VERSION B:1.0.11</h1>
                <!-- -------------------------------------- -->
                <div id="modif">
                    <h2>MODIFICATION DE VERSION</h2>
                    <!-- -------------------------------------- -->
                    ___________________________________________________<br>
                    <div id="ajout" class="">
                        <h3>AJOUT</h3>
                        Ajout du nom de l'organisation (nouvelle façon de faire)<br>
                        Possibilité d'accéder directement au site de l'organisation dans l'affichage des organisations<br>
                        Ajout de bouton de retour sur la modification de contact/organisation/login<br>
                        Ajout de la ville de l'organisation dans la modification et dans l'affichage d'organisation<br>
                        Ajout d'un moyen de me contacter
                    </div>
                    <!-- -------------------------------------- -->
                    ___________________________________________________<br>
                    <div id="visuel" class="">
                        <h3>VISUEL</h3>
                        Ajout du visuel pour l'accueil
                    </div>
                    <!-- -------------------------------------- -->
                    ___________________________________________________<br>
                    <div id="correction" class="">
                        <h3>CORRECTION/OPTIMISATION</h3>
                        Ajout de routes<br>
                        Suppression ligne de code inutile<br>
                        Modification affichage des logins<br>
                        Modification du Note Patch<br>
                        Modification du footer<br>
                        Correction bouton dans ModificationContact<br>
                        Correction visuel<br>
                        Correction du nom des boutons                       
                    </div>
                </div>
                <br>
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <h1 class="text-center">VERSION B:1.0.10</h1>
                <!-- -------------------------------------- -->
                <div id="modif">
                    <h2>MODIFICATION DE VERSION</h2>
                    <!-- -------------------------------------- -->
                    ___________________________________________________<br>
                    <div id="correction" class="">
                        <h3>CORRECTION/OPTIMISATION</h3>
                        -Suppression lignes de codes inutiles<br>
                        -Suppression dernier fichier inutile<br>
                        -Correction du README<br>
                        -Corrections mineures
                    </div>                   
                </div>
                <br>
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <h1 class="text-center">VERSION B:1.0.9</h1>
                <!-- -------------------------------------- -->
                <div id="modif">
                    <h2>MODIFICATION DE VERSION</h2>
                    <!-- -------------------------------------- -->
                    ___________________________________________________<br>
                    <div id="ajout" class="">
                        <h3>AJOUT</h3>
                        Fichier nécessaire aux modifications
                    </div>
                    ___________________________________________________<br>
                    <!-- -------------------------------------- -->
                    <div id="visuel" class="">
                        <h3>VISUEL</h3>
                        Changement des couleurs présent dans les note patchs 
                    </div>
                    ___________________________________________________<br>
                    <!-- -------------------------------------- -->
                    <div id="correction" class="">
                        <h3>CORRECTION/OPTIMISATION</h3>
                        -Ajout des routes pour optimiser l'application<br>
                        -Correction de plusieurs noms de fichiers<br>
                        -A présent le bouton supprimer fonctionne !<br>
                        -A présent les modifications sont fonctionnels<br>
                        -Nettoyage code<br>
                        -Suppression fichiers inutiles<br>
                        -Modification des modèles<br>
                        -Correction de liens incorrect<br>
                        -Correction du README 
                    </div>
                </div>
                <br>
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <h1 class="text-center">VERSION B:1.0.8</h1>
                <!-- -------------------------------------- -->
                <div id="modif">
                    <h2>MODIFICATION DE VERSION</h2>
                    <!-- -------------------------------------- -->
                    ___________________________________________________<br>
                    <div id="ajout" class="">
                        <h3>AJOUT</h3>
                        -Ajout d'un lien sur le mot ajouter dans Recherche<br>
                        -Ajout d'une liste de sélection pour choisir l'organisation dans l'ajout de Contact 
                    </div>
                    ___________________________________________________<br>
                    <!-- -------------------------------------- -->
                    <div id="visuel" class="">
                        <h3>VISUEL</h3>
                        Changement apparence bouton supprimer(recheche) 
                    </div>
                    ___________________________________________________<br>
                    <!-- -------------------------------------- -->
                    <div id="correction" class="">
                        <h3>CORRECTION/OPTIMISATION</h3>
                        -Correction lien erroné<br>
                        -Diminution de la taille de police de la page avec la liste des contacts<br>
                        -Correction mineure 
                    </div>
                </div>
                <br>
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <h1 class="text-center">VERSION B:1.0.7</h1>
                <!-- -------------------------------------- -->
                <div id="modif">
                    <h2>MODIFICATION DE VERSION</h2>
                    <!-- -------------------------------------- -->
                    ___________________________________________________<br>
                    <div id="ajout" class="">
                        <h3>AJOUT</h3>
                        -Ajout du nom des organisations à la table contact<br>
                        -Affichage du nom des organisations dans l'affichage de la liste des contats 
                    </div>
                    ___________________________________________________<br>
                    <!-- -------------------------------------- -->
                    <div id="visuel" class="">
                        <h3>VISUEL</h3>
                        modification NotePatch 
                    </div>
                    ___________________________________________________<br>
                    <!-- -------------------------------------- -->
                    <div id="correction" class="">
                        <h3>CORRECTION/OPTIMISATION</h3>
                        -Apparition bouton modifier/supprimer<br>
                        -correction mineure 
                    </div>
                </div>
                <br>
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <h1 class="text-center">VERSION B:1.0.6</h1>
                <!-- -------------------------------------- -->
                <div id="modif">
                    <h2>MODIFICATION DE VERSION</h2>
                    <!-- -------------------------------------- -->
                    ___________________________________________________<br>
                    <div id="ajout" class="">
                        <h3>AJOUT</h3>
                        -Affichage de l'ID dans la recherche à présent<br>
                        -Ajout bouton de suppression dans l'affichage des Contacts/Organisations/Logins<br>
                        -Ajout bouton de modification dans l'affichage des Contacts/Organisations/Logins
                    </div>
                    ___________________________________________________<br>
                    <!-- -------------------------------------- -->
                    <div id="visuel" class="">
                        <h3>VISUEL</h3>
                        -Epuration de l'affiche des contacts<br>
                        -Epuration de l'affiche des organisations<br>
                        -Epuration de l'affiche des logins<br>
                        -Affichage de la version de l'application désormais en haut à droite 
                    </div>
                    ___________________________________________________<br>
                    <!-- -------------------------------------- -->
                    <div id="correction" class="">
                        <h3>CORRECTION/OPTIMISATION</h3>
                        -correction affichage dans NotePatch<br>
                        -correction mineure
                    </div>
                </div>
                <br>
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <h1 class="text-center">VERSION B:1.0.5</h1>
                <!-- -------------------------------------- -->
                <div id="modif">
                    <h2>MODIFICATION DE VERSION</h2>
                    <!-- -------------------------------------- -->
                    ___________________________________________________<br>
                    <div id="ajout" class="">
                        <h3>AJOUT</h3>
                        -fichier qui permettront la suppression de données 
                    </div>
                    ___________________________________________________<br>
                    <!-- -------------------------------------- -->
                    <div id="visuel" class="">
                        <h3>VISUEL</h3>
                        -modification de la barre de navigation 
                    </div>
                    ___________________________________________________<br>
                    <!-- -------------------------------------- -->
                    <div id="correction" class="">
                        <h3>CORRECTION/OPTIMISATION</h3>
                        -Mise en page de l'entête et du footer directement dans le fichier maintenant<br>
                        -Correction nom de fichiers<br>
                        -Correction des routes associées aux fichiers<br>
                        -Suppression de fichiers inutiles<br>
                        -Correction mineure 
                    </div>
                </div>
                <br>
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <h1 class="text-center">VERSION B:1.0.4</h1>
                <!-- -------------------------------------- -->
                <div id="modif">
                    <h2>MODIFICATION DE VERSION</h2>
                    <!-- -------------------------------------- -->
                    ___________________________________________________<br>
                    <div id="ajout" class="">
                        <h3>AJOUT</h3>
                        -Ajout d'Organisation possible<br>
                        -Ajout de Login possible<br>
                        -Ajout d'Organisation possible<br>
                    </div>
                    ___________________________________________________<br>
                    <!-- -------------------------------------- -->
                    <div id="visuel" class="">
                        <h3>VISUEL</h3>
                        -modification de la barre de navigation 
                    </div>
                    ___________________________________________________<br>
                    <!-- -------------------------------------- -->
                    <div id="correction" class="">
                        <h3>CORRECTION/OPTIMISATION</h3>
                        -Suppression de Model inutile<br>
                        -Correction mineure 
                    </div>
                </div>
                <br>
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <h1 class="text-center">VERSION B:1.0.3</h1>
                <!-- -------------------------------------- -->
                <div id="modif">
                    <h2>MODIFICATION DE VERSION</h2>
                    <!-- -------------------------------------- -->
                    ___________________________________________________<br>
                    <div id="ajout" class="">
                        <h3>AJOUT</h3>
                        -Ajout de Contact possible 
                    </div>
                    ___________________________________________________<br>
                    <!-- -------------------------------------- -->
                    <div id="correction" class="">
                        <h3>CORRECTION/OPTIMISATION</h3>
                        -Correction visuel dans l'affichage de tout les contacts 
                    </div>
                </div>
                <br>
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <h1 class="text-center"> PAS DE VERSION B:1.0.2</h1>
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <!-- -------------------------------------- -->
                <h1 class="text-center">VERSION B:1.0.1</h1>
                <!-- -------------------------------------- -->
                <div id="modif">
                    <h2>MODIFICATION DE VERSION</h2>
                    <!-- -------------------------------------- -->
                    ___________________________________________________<br>
                    <div id="ajout" class="">
                        <h3>AJOUT</h3>
                        -Ajout des méthodes pour la recherche<br>
                        -Ajout des pages liées aux recherches<br>
                        -Ajout des routes pour chaque méthode de recherche<br>
                        -Ajout du lien vers la recherche de contact<br>
                        -Ajout de la version de l'application sur la barre de navigation<br>-
                        Ajout de l'architecture du site <a href="/AccueilController/architecture_site" style="color: white;">disponible ici</a>
                    </div>
                    ___________________________________________________<br>
                    <!-- -------------------------------------- -->
                    <div id="visuel" class="">
                        <h3>VISUEL</h3>
                        -Menu de navigation revu<br>
                        -Embellissement des pages<br>
                        -Refonte de l'accueil<br>
                        -Refonte de l'aide (toujour indisponible)<br>
                        -Refonte de la page des Patch Note 
                    </div>
                    ___________________________________________________<br>
                    <!-- -------------------------------------- -->
                    <div id="correction" class="">
                        <h3>CORRECTION/OPTIMISATION</h3>
                        -Correction des liens de la barre de navigation<br>
                        -Mise en place architecture<br>
                        -Optimisation des routes<br>
                        -Correction mineure 
                    </div>
                </div>
                <br>
            </div>
        </div>
        <div class="footer">
            <?php echo view('template/footer.php') ?>
        </div>
    </body>
</html>