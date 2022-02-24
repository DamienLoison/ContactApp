<!DOCTYPE html>
<html lang="fr-Fr">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Style.css" media="all" />
        <title>Information</title>
        <style>
            .a-faire {
                background-color: #00ad81;
            }

            .nav {
                height: 40px;
            }
        </style>
    </head>

    <body>
        <div class="nav">
            <?php echo view('template/header.php') ?>
        </div>
        <div class="a-faire">
            <h1>Utilisation</h1>
            <p>
            <h2>A faire !</h2>
            -ajouté mise en page<br>
            -décrire comment utilisé<br>
            -le faire en pop-up ?<br>
            </p>
        </div>

        <div class="information">
            <style>
                /* .information {
                    border: solid rgb(84, 84, 84) 5px;
                    text-align: center;
                    width: 90%;
                }
    
                .leftInformation {
                    border: solid red 5px;
                    position: static;
                    width: 32%;
                    float: right;
                }
    
                .centerInformation {
                    border: solid green 5px;
                    position: static;
                    width: 33%;
                    float: right;
                }
    
                .rightInformation {
                    border: solid violet 5px;
                    position: static;
                    width: 32%;
                    float: right;
                }
    
                .information1 {
                    border: solid black 5px;
                    text-align: center;
                } */

            </style>
            <!-- <div class="leftInformation">
                <h4>Toutes les pages disponibles</h4>
                <dl>
                    <dt><a href="http://localhost/RechercheController">Recherche</a></dt>
                    <dd>Ou chercher les informations</dd>
                </dl>
            </div>
            <div class="centerInformation">
                <Form method="LINK" ACTION="http://localhost/RechercheController">
                    <h4>Utilisation de la recherche</h4>
                    La recherche des contacts et des organisations se font au même endroit<br>
    
                    <Input type="submit" value="Direction la recherche">
                </form>
                <p class="information1">
                    Pour effectuer une recherche, peut être utilisé : <br>
                    • Le nom/prénom du Contact/Organisation <br>
                    • L'adresse mail du Contact/Organisation <br>
                    • L'id du Contact/Organisation <br>
                     texte explicatif
                    l'ID étant UNIQUE, il ne peut y avoir de doublon <br>
                    et donc pas possible de se tromper dans les recherches <br>
                    si plusieurs personnes ont le même nom/prénom<br>
                </p>
            </div>
            <div class="rightInformation">
                <h4>Utilisation de la recherche</h4>
            </div>
        </div> -->

            <div class="Aide">
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
    </body>