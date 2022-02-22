<html lang="fr-Fr">

    <head>
        <meta charset="uft-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <style>
        /* Modification de la Navbar (barre de navigation)*/
        .nav {
            background-color: rgb(84, 84, 84);
            color: rgb(198, 83, 140);
            height: 40px;
        }

        .nav-link {
            color: rgb(51, 153, 255);
        }
    </style>

    <ul class="nav fixed-top">
        <li class=".navbar-brand">
            <a class="nav-link active" aria-current="page" href="https://github.com/DamienLoison/ContactApp">ContactApp</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/AccueilController">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Recherche/index">Recherche</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="aide_contact">Aide [DESACTIVER MOMENTANEMENT]</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/AccueilController/architecture_site" tabindex="-1">Ensembles des pages</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/AccueilController/note_patch" tabindex="-1">Note de patch</a>
        </li>
        <!--        //TEST TEST TEST TEST TEST //
                //TEST TEST TEST TEST TEST //  
                //TEST TEST TEST TEST TEST //
                //TEST TEST TEST TEST TEST //
                //TEST TEST TEST TEST TEST //-->
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Action
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>











        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Link</a></li>
                <li><a class="dropdown-item" href="#">Another link</a></li>
                <li><a class="dropdown-item" href="#">A third link</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Ajouter</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Ajouter/ajouter_contact">Contact</a></li>
                <li><a class="dropdown-item" href="Ajouter/ajouter_organisation">Organisation</a></li>
                <li><a class="dropdown-item" href="Ajouter/ajouter_login">Login</a></li>
            </ul>
        </li>

        <!--        <li class="nav-item">
                    <a class="nav-link " href="/Ajouter/ajouter_accueil" tabindex="-1">Ajouter [Version : B:1.0.4]</a>
                </li>-->
        Beta version : B:1.0.5
    </ul>

</html>