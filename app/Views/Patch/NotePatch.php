<!DOCTYPE html>
<html lang="fr-Fr">
    <head>
        <meta charset="utf-8">
        <title>Note patch</title>
    </head>
    <style>
        h1 {
            /*background-color: goldenrod;*/
            background-color: #cdba20;
        }
        .Modification {
            border-top: solid black 5px;
            background-color: #0092db;
        }
        .Todo {
            border-top: solid black 5px;
            border-bottom: solid black 5px;
            margin-top: -20px;
            margin-bottom: -22px;
        }
        .BUG{
            color: #d00;
        }
        .notePatch{
            margin-top: 12px;
        }
    </style>
    <body>
        <div class="nav">
            <?php echo view('template/header.php') ?>
        </div>
        <div class="notePatch">
            <div class="Todo">
                <table class="table table-dark table-borderless table-sm">
                    <thead>
                        <tr>
                            <th scope="col">IMPORTANCE</th>
                            <th scope="col">TACHE</th>
                        </tr>
                    </thead>
                    <tr class="border border-danger">
                        <td>
                            +++
                        </td>
                        <td>
                            FAIRE ACCUEIL
                        </td>
                    <tr class="border border-danger">
                        <td>
                            ++
                        </td>
                        <td>
                            Mise en place des moyens de recherche par ID
                        </td>
                    </tr>
                    <tr class="border border-danger">
                        <td>
                            -
                        </td>
                        <td>
                            Mise à jour du footer
                        </td>
                    </tr>
                </table>
            </div>    
            <div class="Modification">
                <h1>Version B:1.0.9</h1>
                <!-- -------------------------------------- -->
                <h2>Modification :</h2>
                <br><h3>Ajout</h3>
                <br>-Fichier nécessaire aux modifications
                <br> <!-- -------------------------------------- -->
                <br><h3>Visuel</h3>
                <br>-Changement des couleurs présent dans les note patchs 
                <br> <!-- -------------------------------------- -->
                <br><h3>Correction/Optimisation</h3>
                <br>-Ajout des routes pour optimiser l'application
                <br>-Correction de plusieurs noms de fichiers
                <br>-A présent le bouton supprimer fonctionne !
                <br>-A présent les modifications sont fonctionnels
                <br>-Nettoyage code
                <br>-Suppression fichiers inutiles
                <br>-Modification des modèles
                <br>-Correction de liens incorrect
                <br>-Correction du README
                <br> <!-- -------------------------------------- -->
            </div>
            <div class="Modification">
                <h1>Version B:1.0.8</h1>
                <!-- -------------------------------------- -->
                <h2>Modification :</h2>
                <div class="BUG">
                    <br> <!-- -------------------------------------- -->
                </div>
                <br><h3>Ajout</h3>
                <br>-Ajout d'un lien sur le mot ajouter dans Recherche
                <br>-Ajout d'une liste de sélection pour choisir l'organisation dans l'ajout de Contact
                <br> <!-- -------------------------------------- -->
                <br><h3>Visuel</h3>
                <br>-Changement apparence bouton supprimer(recheche)
                <br> <!-- -------------------------------------- -->
                <br><h3>Correction/Optimisation</h3>
                <br>-Correction lien erroné
                <br>-Diminution de la taille de police de la page avec la liste des contacts
                <br>-Correction mineure
                <br> <!-- -------------------------------------- -->
            </div>
            <div class="Modification">
                <h1>Version B:1.0.7</h1>
                <h2>Modification :</h2>
                <br><h3>Ajout</h3>
                <br>-Ajout du nom des organisations à la table contact
                <br>-Affichage du nom des organisations dans l'affichage de la liste des contats
                <br> <!-- -------------------------------------- -->
                <br><h3>Visuel</h3>
                <br>-modification NotePatch
                <br> <!-- -------------------------------------- -->
                <br><h3>Correction/Optimisation</h3>
                <br>-Apparition bouton modifier/supprimer
                <br>-correction mineure
            </div>
            <div class="Modification">
                <h1>Version B:1.0.6</h1>
                <h2>Modification :</h2>
                <br><h3>Ajout</h3>
                <br>-Affichage de l'ID dans la recherche à présent
                <br>-Ajout bouton de suppression dans l'affichage des Contacts/Organisations/Logins
                <br>-Ajout bouton de modification dans l'affichage des Contacts/Organisations/Logins
                <br> <!-- -------------------------------------- -->
                <br><h3>Visuel</h3>
                <br>-Epuration de l'affiche des contacts
                <br>-Epuration de l'affiche des organisations
                <br>-Epuration de l'affiche des logins
                <br>-Affichage de la version de l'application désormais en haut à droite
                <br><h3>Correction/Optimisation</h3>
                <br>-correction affichage dans NotePatch
                <br>-correction mineure
            </div>
            <div class="Modification">
                <h1>Version B:1.0.5</h1>
                <h2>Modification :</h2>
                <br><scan style="color: white;">-Commencement de la modification de l'accueil</scan>
                <br><h3>Ajout</h3>
                <br>-fichier qui permettront la suppression de données
                <br> <!-- -------------------------------------- -->
                <br><h3>Visuel</h3>
                <br>-modification de la barre de navigation
                <br><h3>Correction/Optimisation</h3>
                <br>-Mise en page de l'entête et du footer directement dans le fichier maintenant
                <br>-Correction nom de fichiers
                <br>-Correction des routes associées aux fichiers
                <br>-Suppression de fichiers inutiles
                <br>-Correction mineure
            </div>
            <div class="Modification">
                <h1>Version B:1.0.4</h1>
                <h2>Modification :</h2>
                <br><h3>Ajout</h3>
                <br>-Ajout d'Organisation possible
                <br>-Ajout de Login possible
                <br>-Ajout d'Organisation possible
                <br> <!-- -------------------------------------- -->
                <br><h3>Visuel</h3>
                <br>-modification de la barre de navigation
                <br><h3>Correction/Optimisation</h3>
                <br>-Suppression de Model inutile
                <br>-Correction mineure
            </div>
            <div class="Modification">
                <h1>Version B:1.0.3</h1>
                <h2>Modification :</h2>
                <br><h3>Ajout</h3>
                <br>-Ajout de Contact possible
                <br> <!-- -------------------------------------- -->
                <br><h3>Visuel</h3>
                <br> -Correction visuel dans l'affichage de tout les contacts
            </div>
            <div class="Modification">
                <h1>Version B:1.0</h1> 
                <h2>Modification :</h2>
                <br><h3>Ajout</h3>
                <br>-Ajout des méthodes pour la recherche
                <br>-Ajout des pages liées aux recherches
                <br>-Ajout des routes pour chaque méthode de recherche
                <br>-Ajout du lien vers la recherche de contact
                <br>-Ajout de la version de l'application sur la barre de navigation
                <br>-Ajout de l'architecture du site <a href="/AccueilController/architecture_site" style="color: white;">disponible ici</a>
                <br> <!-- -------------------------------------- -->
                <br><h3>Visuel</h3>
                <br>-Menu de navigation revu
                <br>-Embellissement des pages
                <br>-Refonte de l'accueil
                <br>-Refonte de l'aide (toujour indisponible)
                <br>-Refonte de la page des Patch Note
                <br> <!-- -------------------------------------- -->
                <br><h3>Correction/Optimisation</h3>
                <br>-Correction des liens de la barre de navigation
                <br>-Mise en place architecture
                <br>-Optimisation des routes
                <br>-Correction mineure
            </div>
        </div>
        <div class="footer">
            <?php echo view('template/footer.php') ?>
        </div>
    </body>
</html>